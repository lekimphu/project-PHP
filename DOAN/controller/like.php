<?php
// kiểm tra xem giỏ hàng có hay chưa ne1u chưa thì tạo ra giỏ hàng
    if(!isset($_SESSION['like'])){
        $_SESSION['like'] = array();
    }
    $act = 'like';
    if(isset($_GET['act'])){
        $act = $_GET['act'];
    }
    switch($act){
        case 'like':
            include './View/like.php';
            break;
        case 'like_act':
                if(isset($_GET['id']) && isset($_SESSION['makh'])){
                    $id=$_GET['id'];
                    $pros = new hanghoa();
                    $pro = $pros->getHangHoaId($id);
                    $flag=false;
                        foreach($_SESSION['like'] as $key1=>$item){
                            if($item['mahh']==$id){
                                echo "<script>alert('Đã thích !')</script>";
                                $flag = true;
                            }
                    }
                    if($flag== false){
                        $hh = new hanghoa();
                        $result = $hh->getHangHoaId($id);
                        $mahh = $result['mahh'];
                        $tenhh = $result['tenhh'];
                        $dongia = $result['dongia'];
                        $giamgia = $result['giamgia'];
                        $hinh = $result['hinh'];
                        $mota = $result['mota'];
                        $result = array(
                            'mahh'=>$mahh,
                            'hinh'=>$hinh,
                            'tenhh'=>$tenhh,
                            'dongia'=>$dongia,
                            'giamgia'=>$giamgia,
                        );
                        $_SESSION['like'][] = $result;
                        echo "<script>alert('Thêm thành công')</script>";
                    }
                }else{
                    echo "<script>alert('Vui lòng đăng nhập')</script>";
                    include "./view/login.php";
                    break;
                }
            include './View/like.php';
            break;
        case 'delete_like':
            case 'delete_gh':
                // nhận id
                if(isset($_GET['id'])){
                    $id = $_GET['id'];
                    $gh = new giohang();
                    $gh->delete_item_like($id);
                }
                include './View/like.php';
                break;
                case 'update_item':
                    // nhấn nút submit (Sửa) thì gửi qua đây
                    // số lượng có name là mảng
                    $new_list=$_POST['newqty'];
                    foreach($new_list as $key=>$qty){
                        if($_SESSION['like'][$key]!=$qty){
                            $gh = new giohang();
                            $gh->update_like($key,$qty);
                        }
                    }
                    include './View/like.php';
                    break;

    }
    
?>