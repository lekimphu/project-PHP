<!-- header section strats -->
<header class="header_section">
      <div class="container">
        <nav class="navbar navbar-expand-lg custom_nav-container fixed-top bg-white ">
          <a class="navbar-brand" href="index.html">
            <span>
              Fior
            </span>
          </a>
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>

          <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <div class="d-flex mx-auto flex-column flex-lg-row align-items-center">
              <ul class="navbar-nav  ">
                <li class="nav-item active">
                  <a class="nav-link" href="index.php?action=home">Home <span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="#"> About</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="index.php?action=sanpham&act=full"> Gallery </a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="#">Contact us</a>
                </li>
              </ul>
            </div>
            <form class="form-inline" action="index.php?action=sanpham&act=timkiem" method="post">
              <div class="input-group">
                  <div class="input-group-prepend" style="margin-top: 9px;margin-right: 46px;">
                  <!-- <a href="Trangchu.php?trang=tk"> -->
                      <input class="input-group-text" style="height: 35px;" type="submit" id="btsearch" value="Tìm Kiếm"/>
                  <!-- </a> -->
                      <!-- <span class="input-group-text">@</span> -->
                      <input type="text" name="txtsearch" class="form-control" placeholder="Tìm Kiếm"/>
                   </div>
              </form>
            <div class="quote_btn-container ">
              <?php
                if(!isset($_SESSION['makh'])){
                  echo '<a href="index.php?action=dangnhap">
                  Log in
                </a>';
                }
              ?>
                
              <?php
                if(isset($_SESSION['makh'])):
              ?>
              <a href="index.php?action=dangnhap&act=dangxuat" style="margin-left: 18px;">
                Log out
              </a>
              <?php endif?>
              <?php
                if(isset($_SESSION['makh'])):
              ?>
              <a href="index.php?action=like" style="margin-left: 18px;">
                Yêu thích 
              </a>
              <?php endif?>
              <a href="index.php?action=giohang">
                <img src="./content/images/cart.png" alt="" >
              </a>
                <?php
                    $dem = 0;
                    if(isset($_SESSION['cart'])){
                    $dem = count($_SESSION['cart']);
                    }else{
                    $dem = 0;
                    }
                    ?>
                  <p style="color: red; margin-top: 20px; margin-left: -18px; margin-right: 20px;"><?php echo $dem?></p>
                  
                  <?php
                    if(isset($_SESSION['makh']) && isset($_SESSION['tenkh'])):
                      $name = $_SESSION['tenkh'];
                  ?>
                    <h6 style="margin-top: 8px;"><?php echo 'Hello '.$name;?></h6>
                  <?php endif?>
            </div>
          </div>
        </nav>
      </div>
    </header>
    <!-- end header section -->