<?php
 $act="taikhoan";
 if(isset($_GET['act']))
 {
    $act=$_GET['act'];
 }
 switch ($act) {
    case "taikhoan":
        include "./view/doimatkhau.php";
        break;
    case "taikhoan_act":
      if(isset($_POST['passold']) && isset($_POST['passnew']) && isset($_POST['passnew2'])){
         $passold = $_POST['passold'];
         $passnew = $_POST['passnew'];
         $passnew2 = $_POST['passnew2'];
         $username = $_SESSION['admin'];
         $mahoa2=md5($passnew2);
         $mahoa=md5($passnew);
         $pass = new user();
         $result1 = $pass->checkPass($passold);
         if($result1 == true){
            if($passnew == $passnew2){
               $result2 = $pass->changePass($mahoa,$username);
               if($result2 != false){
                  echo "<script>Alert('Cập nhật thành công')</script>";
                  include "./view/dangnhap.php";
                  break;
               }else{
                  echo "<script>Alert('Cập nhật thất bại')</script>";
                  include "./view/doimatkhau.php";
                  break;
               }   
            }else{
                  echo "<script>Alert('Xác nhận mật khẩu không chính xác')</script>";
                  include "./view/doimatkhau.php";
                  break;
            }
         }else{
            echo "<script>Alert('Mật khẩu cũ sai')</script>";
            include "./view/doimatkhau.php";
            break;
         }
      }
 }
?>