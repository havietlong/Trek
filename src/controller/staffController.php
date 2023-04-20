<?php
$action = '';
if(isset($_GET['action'])){
    $action = $_GET['action'];
}

switch ($action){
    case '':
        include_once 'model/staffModel.php';
        include_once 'views/staff/index.php';
        break;
    case 'logOut':
        header('location:index.php?role=customer&action=index');
        break;
    case 'editPost':
        include_once 'model/staffModel.php';
        include_once 'views/staff/test.php';
        break;
    case 'createProduct':
        include_once 'model/staffModel.php';
        include_once 'views/staff/index.php';
        break;
    case 'updateProduct':
        include_once 'model/staffModel.php';
        include_once 'views/staff/index.php';
        break;
    case 'deleteProduct':
        include_once 'model/staffModel.php';
        include_once 'views/staff/index.php';
        break;
}
?>
