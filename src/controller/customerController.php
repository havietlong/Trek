<?php
// start the session


if(isset($_GET['productType'])){
    $productType = $_GET['productType'];
}else{
    $productType = '';
}

switch ($productType){
    case 'dualSport':
        include_once 'model/customerModel.php';
        include_once 'views/customer/DualSport.php';
        break;
    case 'domane':
        include_once 'views/customer/Domane.html';
        break;
    case 'emonda':
        include_once 'views/customer/Émonda.html';
        break;
    case 'slash':
        include_once 'views/customer/Slash.html';
        break;
    case '520':
        include_once 'views/customer/520.html';
        break;
    case '820':
        include_once 'views/customer/820.html';
        break;
}

$action = '';
if(isset($_GET['action'])){
    $action = $_GET['action'];
}

switch ($action){
    case 'index':
        include_once 'views/index.php';
        break;
    case 'login':
        include_once 'views/customer/login.php';
        break;
    case 'loginValidate':
        include_once 'model/customerModel.php';
        if(isset($_SESSION['test'])){
            $test = $_SESSION['test'];
            // use the $test variable as needed
            if ($test == 2) {
                header('Location:index.php?role=customer&action=index');
            } else if ($test == 1) {
                header('Location:index.php?role=staff');
            }
        }
        break;
    case 'productPage':
        include_once 'model/customerModel.php';
        include_once 'views/customer/product.php';
        break;
}


?>
