<?php
    $act = 'dangky';
    if(isset($_GET['act'])){
        $act = $_GET['act'];
    }
    switch($act){
            case 'dangky':
                include './View/register.php';
                break;
            case 'dangky_action':
                // gửi thông tin qua đây                
                    if(isset($_POST['txttenkh'])){
                        $tenkh = $_POST['txttenkh'];
                        $username = $_POST['txtusername'];
                        $password = $_POST['txtpassword'];
                        $email = $_POST['txtemail'];
                        $diachi = $_POST['txtdiachi'];
                        $dt = $_POST['txtsodt'];
    
                        // dùng md5 để mã hóa pass
                        $crypt = md5($password);
                        // con troller yêu cầu model thêm vào database
                        $user = new user(); 
                        
                        // trước khi insert lấy $username kiểm tra
                        $check_username = $user->CheckUsername($username);
                        $check_email = $user->CheckEmail($email);
                        if($check_username == true && $check_email == true){
                            $check = $user->InsertUser($tenkh,$username,$crypt,$email,$diachi,$dt);
                            if(!$check){
                                echo '<script> alert("ĐĂNG KÍ THÀNH CÔNG") </script>';
                                include './View/login.php';
                                break;
                            }else{
                                echo '<script> alert("ĐĂNG KÍ KHÔNG THÀNH CÔNG") </script>';
                                include './View/home.php';
                                break;
                            }
                        }if($check_username == false){
                                echo '<script> alert("USERNAME ĐÃ TỒN TẠI") </script>';
                                include './View/register.php';
                                break;
                        }if($check_email == false){
                                echo '<script> alert("EMAIL ĐÃ TỒN TẠI") </script>';
                                include './View/register.php';
                                break;
                        }
                        // viết câu lệnh kiểm tra  
                    }
                    include './View/home.php';
                    break;
                
    }
?>
