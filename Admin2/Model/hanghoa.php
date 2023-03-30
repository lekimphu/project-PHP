<?php
    class hanghoa{
        public function __construct()
        {
        
        }
        // phương thức lấy ra tất cả hàng hóa
        function getHangHoaAll()
        {
            $db=new connect();
            $select="select * from hanghoa ";
            $result=$db->getList($select);
            return $result;
        }
        // phương thức lấy ra thông tin của sản phẩm
        function getHangHoaID($id){
            $db=new connect();
            $select="select * from hanghoa where mahh=$id";
            $result=$db->getInstance($select);
            return $result;
        }
        // phương thức cập nhật sản phẩm
        function updatesp($id,$tenhh,$dongia,$giamgia,$hinh,$maloai,$soluotxem,$ngaylap,$mota,$size,$soluongton,$mausac){      
            $db=new connect();      
            $query="update hanghoa set tenhh='$tenhh', 
                    dongia=$dongia,
                    giamgia=$giamgia,
                    hinh='$hinh',
                    maloai=$maloai,
                    soluotxem=$soluotxem,
                    ngaylap='$ngaylap',
                    mota='$mota',
                    size='$size',
                    soluongton=$soluongton,
                    mausac='$mausac' 
                where mahh=$id";           
            $db->exec($query);    
        }
        // thêm sản phẩm
        function insert($tenhh,$dongia,$giamgia,$hinh,$maloai,$soluotxem,$ngaylap,$mota,$size,$soluongton,$mausac){
            $db=new connect(); 
            $query = "insert into hanghoa(mahh,tenhh,dongia,giamgia,hinh,maloai,soluotxem,ngaylap,mota,size,soluongton,mausac) 
            values(NULL,'$tenhh',$dongia,$giamgia,'$hinh',$maloai,$soluotxem,$ngaylap,'$mota','$size',$soluongton,'$mausac')";
            $db->exec($query); 
        }
        function deletesp($id){
            $db = new connect();
            $query = "delete from hanghoa where mahh = $id";
            $db->exec($query);
        }

        // phương thức lấy ra hóa đơn
        
        
        

        // function getThongKeMatHang(){
        //     $db = new connect();
        //     $select = "select b.tenhh, sum(a.soluongmua) as soluong 
        //     FROM cthd a, hanghoa b
        //     WHERE a.mahh = b.mahh group by b.tenhh";
        //     $result = $db->getList($select);
        //     return $result;
        // }
        function thongkeMonth($nam = null , $thang = null) {
            $db = new connect();
            if(!empty($nam) && !empty($thang)) {
                $select = "select c.ngaydat,b.tenhh,sum(a.soluongmua) as soluong FROM cthd a , hanghoa b, hoadon c WHERE a.mahh=b.mahh and c.masohd=a.masohd  and month(c.ngaydat)=$thang and year(c.ngaydat)= $nam GROUP BY b.tenhh,c.ngaydat";         
            }
            else {
                $select = "select b.tenhh,sum(a.soluongmua) as soluong FROM cthd a, hanghoa b WHERE a.mahh=b.mahh GROUP BY b.tenhh";
            }
            $result = $db->getList($select);
            return $result;
        }
        function thongkeDay($nam = null , $thang = null , $ngay = null) {
            $db = new connect();
            if(!empty($nam) && !empty($thang) && !empty($ngay)) {
                $select = "SELECT c.ngaydat,b.tenhh,sum(a.soluongmua) as soluong FROM cthđ a , hanghoa b, hoadon c WHERE a.mahh=b.mahh and c.masohd=a.masohd and day(c.ngaydat) = $ngay and month(c.ngaydat)=$thang and year(c.ngaydat)= $nam GROUP BY b.tenhh,c.ngaydat";         
            }
            else {
                $select = "SELECT b.tenhh,sum(a.soluongmua) as soluong FROM cthđ a, hanghoa b WHERE a.mahh=b.mahh GROUP BY b.tenhh";
            }
            $result = $db->getList($select);
            return $result;
        }
    }
?>