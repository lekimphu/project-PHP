<?php
    $act = "sanpham";
    if(isset($_GET['act'])){
        $act = $_GET['act'];
    };
    switch($act){
        case 'hoacaocap':
            include './view/sanpham.php';
            break;
        case 'khuyenmai':
            include './view/sanpham.php';
            break;
        case 'hoamoi':
            include './view/sanpham.php';
            break;
        case 'full':
            include './view/sanpham.php';
            break;
        case 'detail':
            include './View/sanphamchitiet.php';
            break;
        case 'timkiem':
            include './view/sanpham.php';
            break;
        case "comment":
            if(isset($_GET['id']))
            {
                $mahh=$_GET['id'];
                $makh=$_SESSION['makh'];
                $noidung=$_POST['comment'];
                $usr=new user();
                $usr->insertcomment($mahh,$makh,$noidung);
                include 'View/sanphamchitiet.php';
                break;
            }
        case "like":
            if(isset($_GET['id'])){
                
            }
        case "sapxep1":
            include './view/sanpham.php';
            break;
        case "sapxep2":
            include './view/sanpham.php';
            break;

    }
?>