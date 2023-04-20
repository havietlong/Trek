<?php
    session_start();
    //Lấy controller đang làm việc
    $role = '';
    if(isset($_GET['role'])){
        $role = $_GET['role'];
    }

    //Kiểm tra đang làm việc với controller nào
    switch ($role){
        case '':
            header("Location:index.php?role=customer&action=index");
            break;
        case 'customer':
            include_once 'controller/customerController.php';
            break;
        case 'staff':
            include_once 'controller/staffController.php';
            break;
        case 'admin':
            include_once 'controller/adminController.php';
            break;
    }
    ?>
