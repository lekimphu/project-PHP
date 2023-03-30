
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
            include './view/thongkethang.php';
        }else {
            include './view/thongkethang.php';
        }
        break;
    
    default:
        # code...
        break;
    }
?>