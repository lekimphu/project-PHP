<?php
    // phương thức đưa thông tin vào mảng 
    class giohang{
        function add_item($key,$quantity,$mycolor,$size){
            $pros = new hanghoa();
            $pro = $pros->getHangHoaId($key);
            $flag=false;
                foreach($_SESSION['cart'] as $key1=>$item){
                    if($item['mahh']==$key && $item['mau']==$mycolor && $item['size']==$size){
                        // echo "Hello";
                        $quantity+=$item['soluong'];
                        $gh=new giohang();
                        $gh->update_item($key1,$quantity);
                        $flag=true;
                    }
                }
            if($flag == false){
                $cost = $pro['dongia'];
                $giamgia = $pro['giamgia'];
                $total1 = $cost * $quantity;
                $total2 = $giamgia * $quantity;
                $hinh = $pro['hinh'];
                // $size = $pro['size'];
                $tenhh = $pro['tenhh'];
                $mahh = $pro['mahh'];
                // do session là 1 mảng chưa những đối tượng 
                // tạo 1 đ1ôi tượng có key và hình 
                $item = array(
                    'mahh'=>$mahh,
                    'hinh'=>$hinh,
                    'name'=>$tenhh,
                    'mau'=>$mycolor,
                    'dongia'=>$cost,
                    'giamgia'=>$giamgia,
                    'soluong'=>$quantity,
                    'total1'=>$total1,
                    'total2'=>$total2,
                    'size' => $size
                );
                $_SESSION['cart'][] = $item;
        }
            }
            // từ mã hàng sẽ lấy ra đc thông tin của sản phẩm 
            
        
        function getTotal1(){
            $subtotal1 = 0;
            foreach($_SESSION['cart'] as $item){
                $subtotal1+=$item['total1'];
            }
            $subtotal1 = number_format($subtotal1,2);
            return $subtotal1;
        }
        function getTotal2(){
            $subtotal2 = 0;
            foreach($_SESSION['cart'] as $item){
                $subtotal2+=$item['total2'];
            }
            $subtotal2 = number_format($subtotal2,2);
            return $subtotal2;
        }
        function delete_item($key){
            unset($_SESSION['cart'][$key]);
        }
        function delete_cart(){
            unset($_SESSION['cart']);
        }
        function update_item($key, $quantity) {
            if (isset($_SESSION['cart'][$key])) {
              $cost = $_SESSION['cart'][$key]['dongia'];
              $total = $cost * $quantity;
              $_SESSION['cart'][$key]['soluong'] = $quantity;
              $_SESSION['cart'][$key]['total'] = $total;
            }
        }
        function delete_item_like($key){
            unset($_SESSION['like'][$key]);
        }
        function delete_like(){
            unset($_SESSION['like']);
        }
        function update_like($key, $quantity) {
            if (isset($_SESSION['like'][$key])) {
              $cost = $_SESSION['like'][$key]['dongia'];
              $total = $cost * $quantity;
              $_SESSION['like'][$key]['soluong'] = $quantity;
              $_SESSION['like'][$key]['total'] = $total;
            }
        }
    }
?>