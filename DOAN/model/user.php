<?php
    class user{
        public function __construct(){}
        // phương thức thêm dữ liệu vào
        // để thực thi câu lệnh insert, update, delete->exec
        function InsertUser($tenkh,$username,$matkhau,$email,$diachi,$dt){
            $db = new connect();
            $query = "insert into khachhang(makh,tenkh,username,password,email,diachi,sodienthoai,vaitro)
            values(NULL,'$tenkh','$username','$matkhau','$email','$diachi','$dt',default)";
            $result = $db->exec($query);
            // $set = $result->fetch();
            // return $set;
        }
        // viết phương thức login
        function login($username, $password){
            $db = new connect();
            $select = "select * from khachhang where username='$username' and password='$password'";
            // echo $select;
            $result = $db->getList($select);
            $set = $result->fetch();
            return $set;
        }
        function CheckUsername($username){
            $db = new connect();
            $select = "select * from khachhang where username = '$username'";
            $result = $db->getList($select);
            if($result->rowCount() > 0){
                return false;
            }else{
                return true;
            }
        } 
        function CheckEmail($email){
            $db = new connect();
            $select = "select * from khachhang where email = '$email'";
            $result = $db->getList($select);
            if($result->rowCount() > 0){
                return false;
            }else{
                return true;
            }
        }
        // lấy lại mật khẩu bằng email
        function getEmail($email)
        {
        $db=new connect();
        $select="select email,password from khachhang where email='$email'";
        $result=$db->getInstance($select);
        return $result;
        }
        // lấy lại email và mật khẩu
        function getPassEmail($email, $pass)
        {
            $select ="select email,password from khachhang 
            where md5(email)='$email' and md5(password)='$pass'";
            // select email, password from khachhang where md5(phptestly20@gmail.com)='405999d3a4fb8cddf893e238928c001'
            $db=new connect();
            $result= $db->getInstance($select);
            return $result;
        }
        function updateEmail($emailold,$passnew)
        {
            $db=new connect();
            $query="update khachhang set password='$passnew' where email='$emailold'";
            // echo $select;
           $db->exec($query);
        }
        
        // bình luận
        function insertcomment($mahh,$makh,$noidung)
        {
            $db=new connect();
            $date=new DateTime("now");
            $datecreate=$date->format("Y-m-d");
            $mahh = intval($mahh);
            $makh = intval($makh);
            $query= "insert into binhluan(mabl,mahh,makh,ngaybl,noidung)
            values(Null,$mahh,$makh,'$datecreate','$noidung')";
            $db->exec($query);
        }
        function Tongcomment($mahh)
        {
            $db=new connect();
            $select="select count(b.mabl) from binhluan b where b.mahh=$mahh";
            $result=$db->getInstance($select);
            return $result[0];
        }
        function HienThicomment($mahh)
        {
            $db=new connect();
            $select="select a.username,b.noidung from khachhang a
            INNER join binhluan b on a.makh=b.makh where b.mahh=$mahh ORDER by b.mabl DESC ";
            $result=$db->getList($select);
            return $result;
        }
        
    }

?>