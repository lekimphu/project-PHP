<?php
    $act = "khachhangtam";
    if(isset($_GET['act'])){
        $act = $_GET['act'];
    }
    switch($act){
        case "khachhangtam":
            include "./View/khachhangtam.php";
            break;
        case "khachhangtam_action":
            if(isset($_POST['txttenkh'])){
                $tenkh = $_POST['txttenkh'];
                $email = $_POST['txtemail'];
                $diachi = $_POST['txtdiachi'];
                $dt = $_POST['txtsodt'];
                $user = new khachhangtam(); 
                $check = $user->InsertKhachHangTam($tenkh, $email, $diachi, $dt);
                if(!isset($check)){
                    echo '<script> alert("CẢM ƠN QUÝ KHÁCH ĐÃ CUNG CẤP THÔNG TIN") </script>';
                    include './View/ordertam.php';
                    break;
                } else {
                    echo '<script> alert("CÓ LỖI XẢY RA. VUI LÒNG THỬ LẠI SAU.") </script>';
                }
                
        }
    }

?>