<?php
    $act="cthd";
    if(isset($_GET['act']))
    {
        $act=$_GET['act'];
    }
    switch($act){
        case 'cthd':
            include './view/cthd.php';
            break;
        case 'capnhat':
            include './view/editcthd.php';
            break;
        case 'capnhat_action':
           
            if(isset($_GET['id'])){       
                $hd = new cthd();
                $mahh = $_POST['mahh'];
                if($_POST['soluongmua'] < 0){
                    echo "<script>alert('Nhập số lượng mua lớn hơn 0')</script>";
                    include "./view/editcthd.php";
                    break;
                }else{
                    $soluongmua = $_POST['soluongmua'];
                }

                    $mausac = $_POST['mausac'];

                    $size = $_POST['size'];
                $thanhtien = $_POST['thanhtien'];     
                $checkInsert = $hd->updateCTHD($_GET['id'],$mahh,$soluongmua,$size);
                if($checkInsert !== false){
                    echo "<script>alert('CẬP NHẬT THÀNH CÔNG!!')</script>"; 
                    include "./view/cthd.php";
                }else{
                    echo "<script>alert('CẬP NHẬT KHÔNG THÀNH CÔNG!!')</script>"; 
                }
            }
            break;
        case 'xoa':
            if(isset($_GET['id'])){
                $id = $_GET['id'];
                $mahh = $_GET['mahh'];
                $hh = new cthd();
                $result = $hh->deletesp($id,$mahh);
                if($result !== false){
                    echo "<script>alert('XÓA THÀNH CÔNG!!')</script>"; 
                    include "./View/cthd.php"; 
                }else{
                    echo "<script>alert('XÓA KHÔNG THÀNH CÔNG!!')</script>"; 
                }
            }
            break;
    }
?>