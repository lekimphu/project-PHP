<?php
// kiểm tra xem giỏ hàng có hay chưa ne1u chưa thì tạo ra giỏ hàng
    if(!isset($_SESSION['cart'])){
        $_SESSION['cart'] = array();
    }
    $act = 'giohang';
    if(isset($_GET['act'])){
        $act = $_GET['act'];
    }
    switch($act){
        case 'giohang':
            if(isset($_POST['mahh'])){
                $mahh = $_POST['mahh'];
                $soluong = $_POST['soluong'];
                $mausac= $_POST['mymausac'];
                $size = $_POST['size'];
                // $gia = $_POST['dongia'];
                // $giamgia = $_POST['giamgia'];
                // nhiệm vụ là controller yêu cầu add những thông tin này vào giỏ hàng
                $gh = new giohang();
                $gh->add_item($mahh,$soluong,$mausac,$size);
            }
            include './View/cart.php';
            break;
        case 'delete_gh':
            // nhận id
            if(isset($_GET['id'])){
                $id = $_GET['id'];
                $gh = new giohang();
                $gh->delete_item($id);
            }
            include './View/cart.php';
            break;
        case 'update_item':
            // nhấn nút submit (Sửa) thì gửi qua đây
            // số lượng có name là mảng
            $new_list=$_POST['newqty'];
            foreach($new_list as $key=>$qty){
                if($_SESSION['cart'][$key]!=$qty){
                    $gh = new giohang();
                    $gh->update_item($key,$qty);
                }
            }
            include './View/cart.php';
            break;
    }
    
?>