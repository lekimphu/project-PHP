<?php
    class hoadon{
        public function __construct()
        {
        
        }
        function getHoaDonAll()
        {
            $db=new connect();
            $select="select * from hoadon ";
            $result=$db->getList($select);
            return $result;
        }
        function getHoaDonId($id)
        {
            $db=new connect();
            $select="select * from hoadon where masohd=$id";
            $result=$db->getInstance($select);
            return $result;
        }
        function updateHoadon($id,$ngaydat,$tongtien){      
            $db=new connect();      
            $query="update hoadon set ngaydat='$ngaydat',tongtien=$tongtien where masohd=$id";           
            $db->exec($query);    
        }
        function deletesp($id){
            $db = new connect();
            $query = "delete from hoadon where masohd = $id";
            $db->exec($query);
        }
    }

?>