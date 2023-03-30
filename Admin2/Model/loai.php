<?php
    class loai{
        public function __construct(){

        }
        function getLoaiHang(){
            $db = new connect();
            $select = "select DISTINCT maloai from hanghoa";
            $result = $db->getList($select);
            return $result;
        }
    }
?>