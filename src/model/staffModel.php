<?php
    function indexPost(){
        include_once 'connection/openConnect.php';
        $sql = "SELECT * FROM product";
        $product = mysqli_query($connect, $sql);
        return $product;
    }

    function editPost(){
        $id_product = $_GET['id_product'];
        include_once 'connection/openConnect.php';
        $sql = "SELECT * FROM product WHERE id_product = $id_product";
        $description = mysqli_query($connect, $sql);
        foreach($description as $description){
         $id_description = $description['id_description'];
        }
        if(empty($id_description)){
            include_once 'connection/openConnect.php';
            $sql = "INSERT INTO description (name_description, content_description, id_staff) VALUES ('NULL','NULL',NULL)";
            mysqli_query($connect, $sql);
            include_once 'connection/openConnect.php';
            $sql = "SELECT * FROM description ORDER BY id_description DESC LIMIT 1";
            $description = mysqli_query($connect, $sql);
            foreach($description as $description){
            $id_description = $description['id_description'];
            }
            include_once 'connection/openConnect.php';
            $sql = "UPDATE product SET id_description = $id_description WHERE id_product = $id_product";
            mysqli_query($connect, $sql);
            // header("location:index.php?role=staff&action=editPost&id_product=$id_product");
        }else{
            include_once 'connection/openConnect.php';
            $sql = "SELECT * FROM description WHERE id_description = $id_description";
            $description = mysqli_query($connect, $sql);
            return $description;
        }
    }

    function createProduct(){
        include_once 'connection/openConnect.php';
        // $time_product = date('Y-m-d H:i:s');
        $sql = "INSERT INTO product (id_type, id_description, time_product, picture_product, picture_product2, picture_product3, picture_product4, quantity_product, name_product) VALUES (NULL,NULL,'".date('Y-m-d H:i:s')."',NULL,NULL,NULL,NULL,NULL,NULL)";
        var_dump($sql);
        mysqli_query($connect, $sql);
        header("location:index.php?role=staff");
    }

    function deleteProduct(){
        $product_id = $_GET['id_product'];
        include_once 'connection/openConnect.php';
        $sql = "DELETE FROM product WHERE id_product = $product_id";
        mysqli_query($connect, $sql);
        header("location:index.php?role=staff");
    }

    function imgbb_upload($file, $key) {
        $cfile = new CURLFile($file['tmp_name'], $file['type'], $file['name']);
        $postfields = [
            "key" => $key,
            "image" => $cfile,
        ];
    
        // set up cURL options
        $ch = curl_init();
        curl_setopt($ch, CURLOPT_URL, "https://api.imgbb.com/1/upload");
        curl_setopt($ch, CURLOPT_POST, 1);
        curl_setopt($ch, CURLOPT_HEADER, 0);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1); 
        curl_setopt($ch, CURLOPT_USERAGENT, "Mozilla/4.0 (compatible;)");   
        curl_setopt($ch, CURLOPT_HTTPHEADER,array('Content-Type: multipart/form-data'));
        curl_setopt($ch, CURLOPT_FRESH_CONNECT, 1);   
        curl_setopt($ch, CURLOPT_FORBID_REUSE, 1);  
        curl_setopt($ch, CURLOPT_TIMEOUT, 100);
        curl_setopt($ch, CURLOPT_POSTFIELDS, $postfields);
    
        $result = curl_exec($ch);
    
        if ($result === FALSE) {
            return curl_error($ch);
        } else {
            $response = json_decode($result, true);
            return $response['data']['url'];
        }
    }
    

    function updateProduct(){
        $row = $_GET['row'];
        $maxImage = $row*4;
        for ($i = $maxImage ; $i >= $maxImage-3; $i--) {
            ${"image".$i} = $_FILES['image'.$i];
            $key = 'a2506bc54d6f71b1cf4e55ee6dbc6192'; 
            ${"picture_product".$i} = imgbb_upload(${"image".$i}, $key);
        }

        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            
            $name_product = $_POST['name_product'];
            $quantity_product = $_POST['quantity_product'];
            $id_type = $_POST['id_type'];
            $id_description = $_POST['id_description'];
            $id_product = $_POST['id_product'];
            
            include_once 'connection/openConnect.php';
            $sql = "UPDATE product 
            SET id_type = $id_type, 
                id_description = $id_description,
                quantity_product = $quantity_product, 
                picture_product  = '${"picture_product".$maxImage--}', 
                picture_product2 = '${"picture_product".$maxImage--}',
                picture_product3 = '${"picture_product".$maxImage--}', 
                picture_product4 = '${"picture_product".$maxImage}', 
                name_product = '$name_product' 
            WHERE id_product = $id_product";
            mysqli_query($connect, $sql);
            // var_dump($sql);
            
            header("location:index.php?role=staff");
        }
    }

    //Kiểm tra hành động hiện tại
    switch ($action){
        case '':
            $product = indexPost();
            break;
        case 'editPost':
            $description = editPost();
            break;
        case 'createProduct':
            createProduct(); 
            break;
        case 'updateProduct':
            updateProduct();
            break;
        case 'deleteProduct':
            deleteProduct();
            break;
    }
?>