<?php
    $act = 'dangnhap';
    if(isset($_GET['act'])){
        $act = $_GET['act'];
    }
    switch($act){
            case 'dangnhap':
                include './View/login.php';
                break;
            case 'dangnhap_action':
                if(isset($_POST['txtusername']) && isset($_POST['txtpassword'])){
                    $user = $_POST['txtusername'];
                    $pass = md5($_POST['txtpassword']);
                    $us = new user();
                    $check = $us->login($user,$pass);
                    if($check != false){
                        $_SESSION['makh'] = $check['makh'];
                        $_SESSION['tenkh'] = $check['tenkh'];
                        $_SESSION['username'] = $check['username'];
                        $_SESSION['password'] = $check['password'];
                        $_SESSION['email'] = $check['email'];
                        $_SESSION['diachi'] = $check['diachi'];
                        $_SESSION['sodienthoai'] = $check['sodienthoai'];
                        $_SESSION['cart'] = $check['cart'];
                    }
                    echo '<meta http-equiv="refresh" content="0; url=./index.php?action=home"/>';
                    break;
                }else{
                    echo '<script>alert("Đăng nhập không thành thông")</script>';
                    include './View/home.php';
                }
                break;
            case 'dangxuat':
                if(isset($_SESSION['makh'])){
                    unset($_SESSION['makh']);
                    unset($_SESSION['tenkh']);
                    unset($_SESSION['username']);
                    unset($_SESSION['password']);
                    unset($_SESSION['email']);
                    unset($_SESSION['diachi']);
                    unset($_SESSION['sodienthoai']);
                    unset($_SESSION['cart']);
                    echo '<meta http-equiv="refresh" content="0; url=./index.php?action=home"/>';
                }
    }
?>