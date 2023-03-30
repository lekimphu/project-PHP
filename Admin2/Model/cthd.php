<?php
    class cthd{
        public function __construct(){

        }
        function getCTHDAll()
        {
            $db=new connect();
            $select="select * from cthd ";
            $result=$db->getList($select);
            return $result;
        }
        function getSize(){
            $db=new connect();
            $select="select DISTINCT size FROM hanghoa ";
            $result=$db->getList($select);
            $set = $result->fetch();
            return $set;
        }
        function getMau(){
            $db=new connect();
            $select="select DISTINCT mausac FROM hanghoa ";
            $result=$db->getList($select);
            $set = $result->fetch();
            return $set;
        }
        function getMSHD($id){
            $db=new connect();
            $select="select * from cthd where masohd=$id";
            $result=$db->getInstance($select);
            return $result;
        }
        function updateCTHD($id,$mahh,$soluongmua,$size){      
            $db=new connect();      
            $query="update cthd set soluongmua = $soluongmua, size = '$size' , 
            thanhtien = soluongmua * (select dongia from hanghoa where mahh = $mahh ) 
            where masohd = $id and mahh = $mahh;"; 
            /**update cthd a, hoadon b set soluongmua = 2, size = "Lớn" , 
             * thanhtien = soluongmua * (select dongia from hanghoa where mahh = 1 ),b.tongtien=a.thanhtien 
             * where a.masohd = b.masohd and a.masohd = 126 and mahh = 1 */
            $db->exec($query);    
        }
        function deletesp($id,$mahh){
            $db = new connect();
            $query = "delete from cthd where masohd = '$id' and mahh = '$mahh'";
            $db->exec($query);
        }
    }
?>  