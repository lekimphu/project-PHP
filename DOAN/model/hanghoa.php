<?php
    class hanghoa{
        public function __construct(){
            // Phương thức cần lấy ra sản phẩm mới nhất

        }
        public function getAll(){
            $db = new connect();
            $select = "select * from hanghoa";
            $result = $db->getList($select);
            return $result;
        }
        public function getListHangHoaNew() {
            $db = new connect();
            $select = "select * from hanghoa order by mahh DESC LIMIT 8";
            $result = $db->getList($select);
            return $result;
        }
        public function getListHangHoaFull() {
            $db = new connect();
            $select = "select * from hanghoa";
            $result = $db->getList($select);
            return $result;
        }

        public function getListHangHoaSale() {
            $db = new connect();
            $select = "select * from hanghoa where giamgia>0 LIMIT 8";
            $result = $db->getList($select);
            return $result;
        }
        public function getListHangHoaSaleFull() {
            $db = new connect();
            $select = "select * from hanghoa where giamgia>0";
            $result = $db->getList($select);
            return $result;
        }
        public function getListHangHoaCaoCap() {
            $db = new connect();
            $select = "SELECT * FROM `hanghoa` WHERE maloai = 2 LIMIT 8";
            $result = $db->getList($select);
            return $result;
        }
        public function getListHangHoaCaoCapFull() {
            $db = new connect();
            $select = "SELECT * FROM `hanghoa` WHERE maloai = 2";
            $result = $db->getList($select);
            return $result;
        }
        public function getListHangHoaMoi() {
            $db = new connect();
            $select = "SELECT * FROM `hanghoa` WHERE maloai = 1 LIMIT 8";
            $result = $db->getList($select);
            return $result;
        }
        public function getListHangHoaMoiFull() {
            $db = new connect();
            $select = "SELECT * FROM `hanghoa` WHERE maloai = 1";
            $result = $db->getList($select);
            return $result;
        }

        public function getHangHoaId($id){
            $db = new connect();
            $select = "select * from hanghoa where mahh=$id";
            $result = $db->getInstance($select);
            return $result;
        }
        public function getHangHoaNhomColor($nhom){
            $db = new connect();
            $select = "select DISTINCT mausac from hanghoa where maloai=$nhom limit 4";
            $result = $db->getList($select);
            return $result;
        }
        public function getHangHoaNhomSize($nhom){
            $db = new connect();
            $select = "select DISTINCT size from hanghoa where maloai=$nhom limit 3";
            $result = $db->getList($select);
            return $result;
        }
        

        //phan trang
        public function getListHangHoaAllPage($start,$limit){
            $db = new connect();
            $select = "select * from hanghoa limit ".$start.",".$limit;
            $result = $db->getList($select);
            return $result;
        }
        public function sapxep1($start,$limit){
            $db = new connect();
            $select = "select * from hanghoa order by dongia limit ".$start.",".$limit;
            $result = $db->getList($select);
            return $result;
        }public function sapxep2($start,$limit){
            $db = new connect();
            $select = "select * from hanghoa order by dongia desc limit ".$start.",".$limit;
            $result = $db->getList($select);
            return $result;
        }

        // tìm kiếm
        public function getTimKiem($timkiem){
            $db = new connect();
            $select = "select * from hanghoa where tenhh like '%$timkiem' ";
            $result = $db->getList($select);
            return $result;
        }
       
    }
?>