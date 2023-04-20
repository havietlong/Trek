<?php
    function productPage(){
        $id_product = $_GET['id_product'];
        include_once 'connection/openConnect.php';
        $sql = "SELECT * FROM product WHERE id_product = $id_product";
        $product = mysqli_query($connect, $sql);
        return $product;
    }

    function getProduct(){
        $id_type = $_GET['productType'];
        switch($id_type){
            case 'dualSport':
                include_once 'connection/openConnect.php';
                $sql = "SELECT * FROM product WHERE id_type = 1";
                $product = mysqli_query($connect, $sql);
            return $product;
            break;
            case 'domane':
                include_once 'connection/openConnect.php';
                $sql = "SELECT * FROM product WHERE id_type = 2";
                $product = mysqli_query($connect, $sql);
            return $product;
            break;
            case 'emonda':
                include_once 'connection/openConnect.php';
                $sql = "SELECT * FROM product WHERE id_type = 3";
                $product = mysqli_query($connect, $sql);
            return $product;
            break;
            case 'slash':
                include_once 'connection/openConnect.php';
                $sql = "SELECT * FROM product WHERE id_type = 4";
                $product = mysqli_query($connect, $sql);
            return $product;
            break;
            case '520':
                include_once 'connection/openConnect.php';
                $sql = "SELECT * FROM product WHERE id_type = 5";
                $product = mysqli_query($connect, $sql);
            return $product;
            break;
            case '820':
                include_once 'connection/openConnect.php';
                $sql = "SELECT * FROM product WHERE id_type = 6";
                $product = mysqli_query($connect, $sql);
            return $product;
            break;
        }
            
        
    }


    function index(){
        $search = '';
        if(isset($_POST['search'])){
            $search = $_POST['search'];
        }
        $page = 1;
        if(isset($_POST['page'])){
            $page = $_POST['page'];
        }
        include_once 'connect/openConnect.php';
        $sqlCountRecord = "SELECT COUNT(*) AS count_record FROM customer WHERE name LIKE '%$search%'";
        $countRecords = mysqli_query($connect, $sqlCountRecord);
        foreach ($countRecords as $each){
            $countRecord = $each['count_record'];
        }
        $recordOnePage = 3;
        $countPage = ceil($countRecord / $recordOnePage);
        $start = ($page - 1 ) * $recordOnePage;
        $end = $recordOnePage;
        $sql = "SELECT * FROM customer WHERE name LIKE '%$search%' LIMIT $start, $end";
        $customers = mysqli_query($connect, $sql);
        include_once 'connect/closeConnect.php';
        $array = array();
        $array['search'] = $search;
        $array['customers'] = $customers;
        $array['page'] = $countPage;
        return $array;
    }

    function validateRole(){
        $email = $_POST['email'];
        $password = $_POST['password'];

    include_once 'connection/openConnect.php';
    // Check if user is a staff member
    $sql = "SELECT * FROM staff WHERE email_staff = '$email' AND password_staff = '$password'";
    $staffs = mysqli_query($connect, $sql);
    $staff_rows = mysqli_num_rows($staffs);
    if($staff_rows == 1){
        $staff = mysqli_fetch_assoc($staffs);
        $_SESSION['user_name'] = $staff['name_staff'];
        $_SESSION['user_type'] = 'staff';
        return 1;
    }

    // Check if user is a customer
    $sql = "SELECT * FROM customer WHERE email_customer = '$email' AND password_customer = '$password'";
    $customers = mysqli_query($connect, $sql);
    $customer_rows = mysqli_num_rows($customers);
    if($customer_rows == 1){
        $customer = mysqli_fetch_assoc($customers);
        $_SESSION['user_name'] = $customer['name_customer'];
        $_SESSION['user_type'] = 'customer';
        return 2;
    }

    // If email and password do not match any records, return false
    return 0;

    }
    
    if(isset($_GET['action'])){
        $action = $_GET['action'];
    }
    //Kiểm tra hành động hiện tại
    switch ($action){
        case 'loginValidate':
            $test = validateRole();
            $_SESSION['test'] = $test;
            break;
        case 'index':
            //Lấy dữ liệu từ db
            index();
            break;
        case 'getProduct':
            $product = getProduct();
            break;
        case 'productPage':
            $product = productPage();
            break;
    }
?>