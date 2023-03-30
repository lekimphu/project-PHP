<?php
    class hoadon{
        public function __construct(){}

        function insertOrderDetail($masohd,$mahh, $soluong,$mausac,$size,$thanhtien)
        {
            $db=new connect();
            $query="insert into cthd(masohd,mahh,soluongmua,mausac,size,thanhtien,tinhtrang)
            values($masohd,$mahh,'$soluong','$mausac','$size',$thanhtien,0)";
            // echo $query;
            $db->exec($query);
        }
        function updateOrderTotal($sohd, $tongtien)
        {
            $db=new connect();
            $query="update hoadon set tongtien=$tongtien where masohd=$sohd";
            $db->exec($query);
        }
        function InsertOrder($makh)
        {
            $db=new connect();
            $date=new DateTime("now");
            $datecreate=$date->format('Y-m-d');
            $query="insert into hoadon(masohd,makh,ngaydat,tongtien)values(NULL,$makh,'$datecreate',0)";
            $db->exec($query);
            // chèn vào đc bảng hóa đơn vậy lúc này có mã số hóa đơn rồi
            // tiến hàng lấy mã đó ra
            $int=$db->getInstance("select masohd from hoadon order by masohd desc limit 1");
            return $int[0];
        }
        function getHoadon($sohd){
            $db = new connect();
            $select = "select a.masohd,a.ngaydat,b.tenkh,b.sodienthoai,b.diachi from hoadon a
            INNER JOIN khachhang b on a.makh = b.makh WHERE a.masohd=$sohd";
            $result = $db->getInstance($select);
            return $result;
        }
        function getCTHoaDon($sohd){
            $db = new connect();
            $select = "select b.tenhh,a.mausac,a.size,a.soluongmua,b.dongia from cthd a
            INNER JOIN hanghoa b on a.mahh = b.mahh WHERE a.masohd=$sohd";
            $result = $db->getList($select);
            return $result;
        }

    }
?>