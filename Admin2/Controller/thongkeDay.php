<?php
$act="thongke";
if(isset($_GET['act'])){
    $act=$_GET['act'];
}
    switch($act){
        case 'thongke':
        if(isset($_POST['day'])) {       
            $day = $_POST['day'];
            $mang_ngay = explode("-", $day);
            $nam = $mang_ngay[0];
            $thang = $mang_ngay[1];
            $ngay = $mang_ngay[2];
            include './view/thongkengay.php';
        }else {
            include './view/thongkengay.php';
        }
        break;
    
    default:
        # code...
        break;
    }
?>