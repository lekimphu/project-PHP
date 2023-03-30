<?php
    class connect{
        var $db = null;
        public function __construct(){
            $dsn = 'mysql:host=localhost;dbname=banhang';
            $user = 'root';
            $pass = '';
            try{
                $this->db = new PDO($dsn,$user,$pass,array(PDO::MYSQL_ATTR_INIT_COMMAND=>"SET NAMES utf8"));
            }
            catch(\Throwable $th){
                echo "Thất bại";
            }
        }

        public function getList($select) {
            $result = $this->db->query($select);
            return $result;
        }
        public function getInstance($select) {
            $result = $this->db->query($select);
            $result = $result->fetch();
            return $result;
        }
        // phương thức thực thi câu lệnh
        public function exec($query){
            $result = $this->db->exec($query);
        }
    }
?>