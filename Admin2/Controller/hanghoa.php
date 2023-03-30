<?php
    $act = "hanghoa";
    if(isset($_GET['act'])){
        $act = $_GET['act'];
    }
    switch($act){
        case 'hanghoa':
            include "./View/hanghoa.php";
            break;
        case 'sua':
            include "./View/edithanghoa.php";
            break;
        case 'sua_action':
            if(isset($_GET['id'])){
                $mahh = $_GET['id'];  
                $tenhh = $_POST['tenhh'];      
                $dongia = $_POST['dongia'];      
                $giamgia = $_POST['giamgia'];      
                $hinh = $_FILES['image']['name'];      
                $maloai = $_POST['maloai'];      
                $soluotxem = $_POST['slx'];      
                $ngaylap = $_POST['ngaylap'];      
                $mota = $_POST['mota'];      
                $size = $_POST['size'];
                $soluongton = $_POST['slt'];      
                $mausac = $_POST['mausac'];
                $hh = new hanghoa();      
                $hh->updatesp($mahh,$tenhh,$dongia,$giamgia,$hinh,$maloai,$soluotxem,$ngaylap,$mota,$size,$soluongton,$mausac);
                if($checkInsert !== false){
                    uploadimage();
                echo "<script>alert('CẬP NHẬT THÀNH CÔNG!!')</script>"; 
                }   
                include "./View/hanghoa.php"; 
            }
            break;
        case 'themsp':
            include "./View/edithanghoa.php";
            break;
        case 'them_action':
                $tenhh = $_POST['tenhh'];      
                $dongia = $_POST['dongia'];      
                $giamgia = $_POST['giamgia'];      
                $hinh = $_FILES['image']['name'];      
                $maloai = $_POST['maloai'];      
                $soluotxem = $_POST['slx'];      
                $ngaylap = $_POST['ngaylap'];      
                $mota = $_POST['mota'];      
                $size = $_POST['size'];
                $soluongton = $_POST['slt'];      
                $mausac = $_POST['mausac'];
                $hh = new hanghoa();
                $checkInsert = $hh->insert($tenhh,$dongia,$giamgia,$hinh,$maloai,$soluotxem,$ngaylap,$mota,$size,$soluongton,$mausac);
                if($checkInsert !== false){
                    uploadimage();
                    echo "<script>alert('THÊM THÀNH CÔNG!!')</script>"; 
                    include "./View/hanghoa.php"; 
                }else{
                    echo "<script>alert('THÊM KHÔNG THÀNH CÔNG!!')</script>"; 
                    include "./View/edithanghoa.php"; 
                }
                break;
            case 'delete':
                if(isset($_GET['id'])){
                    $id = $_GET['id'];
                    $hh = new hanghoa();
                    $hh->deletesp($id);
                    echo "<script>alert('XÓA THÀNH CÔNG!!')</script>"; 
                    include "./View/hanghoa.php"; 
                }
                break;
            
    }
?>