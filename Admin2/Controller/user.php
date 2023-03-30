<?php
$act="user";
if(isset($_GET['act']))
{
    $act=$_GET['act'];
}
switch($act){
    case 'user':
        include './view/user.php';
        break;
    case 'capnhat':
        include './view/edituser.php';
        break;
    case 'capnhat_action':
        
    case 'xoa':
        if(isset($_GET['id'])){
            $id = $_GET['id'];
            $hh = new user();
            $hh->deleteuser($id);
            echo "<script>alert('XÓA THÀNH CÔNG!!')</script>"; 
            include "./View/user.php"; 
        }
        break;
}
?>