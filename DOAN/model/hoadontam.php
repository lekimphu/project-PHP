<?php
    class hoadontam{
        public function __construct(){}

        function InsertOrderTam($id)
        {
            $db=new connect();
            $date=new DateTime("now");
            $datecreate=$date->format("Y-m-d");
            $query="insert into hoadontam(masohd,id,ngaydat,tongtien)values(NULL,$id,$datecreate,0)";
            $db->exec($query);
            $int=$db->getInstance("select masohd from hoadontam order by masohd desc limit 1");
            return $int[0];
        }
        function insertOrderDetailTam($masohd,$mahh, $soluong,$mausac,$size,$thanhtien)
        {
            $db=new connect();
            $query="insert into cthdtam(masohd,mahh,soluongmua,mausac,size,thanhtien)
            values($masohd,$mahh,'$soluong','$mausac','$size',$thanhtien)";
            // echo $query;
            $db->exec($query);
        }
        function updateOrderTotalTam($sohd, $tongtien)
        {
            $db=new connect();
            $query="update hoadontam set tongtien=$tongtien where masohd=$sohd";
            $db->exec($query);
        }
        function getHoadonTam($sohd){
            $db = new connect();
            $select = "select a.masohd,a.ngaydat,b.tenkh,b.sodienthoai,b.diachi from hoadontam a
            INNER JOIN khachangtam b on a.id = b.id WHERE a.masohd=$sohd";
            $result = $db->getInstance($select);
            return $result;
        }
        function getCTHoaDonTam($sohd){
            $db = new connect();
            $select = "select b.tenhh,a.mausac,a.size,a.soluongmua,b.dongia from cthdtam a
            INNER JOIN hanghoa b on a.mahh = b.mahh WHERE a.masohd=$sohd";
            $result = $db->getList($select);
            return $result;
        }

    }
?>