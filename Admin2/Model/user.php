<?php
class user{
    public function __construct()
    {
        
    }
    public function getUser(){
        $db=new connect();
        $select="select * from khachhang ";
        $result=$db->getList($select);
        return $result;
    }
    function getMaKH($id){
        $db=new connect();
        $select="select * from khachhang where makh=$id";
        $result=$db->getInstance($select);
        return $result;
    }
    function deleteuser($id){
        $db = new connect();
        $query = "delete from khachhang where makh = $id";
        $db->exec($query);
    }
    // phương thức loginadmin
    public function logAdmin($user,$pass)
    {
        $db=new connect();
        $select="select * from admin where user='$user' and password='$pass'";
        // echo $select;
        $result=$db->getInstance($select);
        return $result;
        // $result=$db->getList($select);
        // $set=$result->fetch(); // $set[admin,123456]
        // return $set;
    }
    public function checkPass($pass){
        $db=new connect();
        $select = "select * from admin where password = '$pass'";
        $result=$db->getInstance($select);
        if(is_array($result)){
            $rowCount = count($result);
        } else {
            $rowCount = $result->rowCount();
        }
        if($rowCount > 0){
            return true;
        }else{
            return false;
        }
    }
    
    // public function changePass(){
    //     $db=new connect();
    //     $select = "update admin set password = '$pass' WHERE user = '$user'";
    //     $result=$db->getInstance($select);
    //     return $result;
    // }
}
?>