<?php 
    session_start();
    // include "model/connect.php";
    // include "model/giohang.php";
    // include "model/hanghoa.php";
    // include "model/user.php";
    set_include_path(get_include_path().PATH_SEPARATOR.'model/');
    spl_autoload_extensions('.php');
    spl_autoload_register();
    include "model/class.phpmailer.php";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" type="image/x-icon" href="./content/img/favicon.png">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <link rel="stylesheet" type="text/css" href="content/css/css.css" />
    <!-- slider stylesheet -->
  <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.1.3/assets/owl.carousel.min.css" />

<!-- bootstrap core css -->
<link rel="stylesheet" type="text/css" href="./content/css/bootstrap.css" />


<!-- fonts style -->
<link href="https://fonts.googleapis.com/css?family=Baloo+Chettan|Poppins:400,600,700&display=swap" rel="stylesheet">
<!-- Custom styles for this template -->
<link href="./content/css/style.css" rel="stylesheet" />
<!-- responsive style -->
<link href="./content/css/responsive.css" rel="stylesheet" />
    <title>SHOP FIOR</title>
  <style>
    .margin{
      margin-top:140px;
    }
  </style>
</head>
<body>
    <?php include_once './view/header.php'?>
    <div class="container-fluid">
          <div class="row margin">
            <?php 
                $ctrl = "home";
                // index điều phối nhiều controller 
                if(isset($_GET['action'])){
                  $ctrl = $_GET['action'];
                }
                include "controller/" . $ctrl . ".php";
            ?>
              <!-- hien thi noi dung đây -->
          </div>
      </div>
    <?php include_once './view/footer.php'?>
</body>
</html>