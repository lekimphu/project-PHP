<?php
    class khachhangtam{
        public function __construct(){}
        // function InsertKhachHangTam($tenkh,$email,$diachi,$sdt){
        //     $db = new connect();
        //     $query = "insert into khachangtam(id,tenkh,email,diachi,sodienthoai)
        //     values(NULL,'$tenkh','$email','$diachi','$sdt')";
        //     $result = $db->exec($query);
        // }
        function InsertKhachHangTam($tenkh, $email, $diachi, $sdt){
            $db = new connect();
            $query = "insert into khachangtam(id, tenkh, email, diachi, sodienthoai)
            values(NULL, '$tenkh', '$email', '$diachi', '$sdt')";
            $result = $db->exec($query);
            if ($result) {
                $last_id = $db->lastInsertId(); // Lấy ID của khách hàng vừa thêm vào
                return $last_id; // Trả về ID
            } else {
                return NULL; // Trả về NULL nếu có lỗi xảy ra
            }
        }
        
        function CheckEmail($email){
            $db = new connect();
            $select = "select * from khachangtam where email = '$email'";
            $result = $db->getList($select);
            $set = $result->fetch();
            if($result->rowCount() > 0){
                return false;
            }else{
                return true;
            }
        }
        function checkID($id){
            $db = new connect();
            $select = "select * from khachangtam where id = '$id'";
            $result = $db->getInstance($select);
            $set = $result->fetch();
            return $set;
        }

    }
?>