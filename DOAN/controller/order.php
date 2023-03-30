<?php
    // yêu cầu lấy thông tin từ giỏ hàng đổ vô db
    if(isset($_SESSION['makh'])){
            $o = new hoadon();
        $sohdid = $o->InsertOrder($_SESSION['makh']);
        // tiến hàn hche2n vào bảng chi tiết hoá đơn
        // lấy dữ liệu từ giỏ hàng để chèn vào bảng chi tiết hoá đơn
        $_SESSION['sohd'] = $sohdid;
        $total = 0;
        foreach($_SESSION['cart'] as $key => $item){
            if($item['giamgia'] > 0){
                $o->insertOrderDetail($sohdid,$item['mahh'],$item['soluong'],$item['mau'],$item['size'],$item['total2']);
                $total += $item['total2'];
            }else{
                $o->insertOrderDetail($sohdid,$item['mahh'],$item['soluong'],$item['mau'],$item['size'],$item['total1']);
                $total += $item['total1'];
            }
        }
        $o->updateOrderTotal($sohdid,$total);
        include "./View/order.php";
    }else{
        include "./view/ttkhachhang.php";
    }
?>