<!DOCTYPE html>
<html>

<head>
  <!-- Basic -->
  <meta charset="utf-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <!-- Mobile Metas -->
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
  <!-- Site Metas -->
  <meta name="keywords" content="" />
  <meta name="description" content="" />
  <meta name="author" content="" />

  <title>Fior</title>

  
</head>

<body>
  <div class="hero_area">
    <!-- slider section -->
    <section class=" slider_section position-relative">
      <div class="slider_number-container ">
        <div class="number-box">
          <span>
            01
          </span>
          <hr>
          <span>
            02
          </span>
        </div>
      </div>
      <div class="container">
        <div class="row">
          <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
            <div class="carousel-inner">
              <div class="carousel-item active">
                <div class="col-lg-6 col-md-8">
                  <div class="detail_box">
                    <h2>
                      Welcome
                    </h2>
                    <h1>
                      Flowers shop
                    </h1>
                    <p>
                      Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been
                      the
                      industry's
                      standard dummy text ever since
                    </p>
                    <div>
                      <a href="">Buy Now</a>
                    </div>
                  </div>
                </div>
              </div>
              <div class="carousel-item">
                <div class="col-lg-6 col-md-8">
                  <div class="detail_box">
                    <h2>
                      Welcome
                    </h2>
                    <h1>
                      Flowers shop
                    </h1>
                    <p>
                      Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been
                      the
                      industry's
                      standard dummy text ever since
                    </p>
                    <div>
                      <a href="">Buy Now</a>
                    </div>
                  </div>
                </div>
              </div>
              <div class="carousel-item">
                <div class="col-lg-6 col-md-8">
                  <div class="detail_box">
                    <h2>
                      Welcome
                    </h2>
                    <h1>
                      Flowers shop
                    </h1>
                    <p>
                      Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been
                      the
                      industry's
                      standard dummy text ever since
                    </p>
                    <div>
                      <a href="">Buy Now</a>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="carousel_btn-container">
              <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
                <span class="sr-only">Previous</span>
              </a>
              <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
                <span class="sr-only">Next</span>
              </a>
            </div>
          </div>
        </div>
      </div>

    </section>
    <!-- end slider section -->
  </div>

  <!-- about section -->
  <section class="about_section ">
    <div class="section_number">
      01
    </div>
    <div class="container">
      <div class="row">
        <div class="detail_box">
            <div class="heading_container justify-content-center">
              <h2>
                SẢN PHẨM NỔI BẬT
              </h2>
            </div>
        </div>
        <?php 
            $hanghoa = new hanghoa();
            $result = $hanghoa->getListHangHoaNew();
            while($set = $result->fetch()):                
        ?>
        <div class="col-lg-3 col-md-4 col-sm-5 mb-3 text-left mt-5">
                  <div class="view overlay z-depth-1-half">
                      <img src="Content\img\<?php echo $set["hinh"] ?>" class="img-fluid" alt="">
                      <div class="mask rgba-white-slight"></div>
                  </div>
                  <h5 class="my-4 font-weight-bold" style="color: red;"><?php echo number_format($set["dongia"]) ?><sup><u>đ</u></sup></br>
                  </h5>
                  <a href="index.php?action=sanpham&act=detail&id=<?php echo $set["mahh"];?>">
                      <span><?php echo $set["tenhh"]?></span></br></a>
                  <button class="btn btn-danger" id="may4" value="lap 4">MUA NGAY</button>
              </div>
              <?php
                  endwhile;
                  ?>

      </div>
    </div>
  </section>
  <!-- end about section -->

  <!-- xin chào -->
  <section class="why_section layout_padding">
    <div class="section_number">
      02
    </div>
    <div class="container">
      <div class="row">
        <div class="col-12">
          <h2>
            TIỆM HOA XIN CHÀO
          </h2>
          <p>
          Không có một shop hoa nào tốt hơn để bạn lựa chọn cho một dịch vụ điện hoa chuyên nghiệp như shop hoa tươi Hoayeuthuong.com. Bằng tất cả niềm đam mê và tận tâm, Hoayeuthuong.com luôn chọn những bông hoa tươi nhất và sáng tạo lên những mẫu hoa tuyệt vời để chuyển đến người thân yêu của bạn cùng với những lời chúc tốt đẹp. Với hơn 150.000 điện hoa được chúng tôi chuyển trong năm qua là một sự khởi đầu cho sự tin tưởng tuyệt vời. Ngoài các dịch vụ về hoa tươi như: hoa sinh nhật, hoa chúc mừng, hoa chia buồn và shop hoa chúng tôi hiểu được thêm nhu cầu của bạn, chúng tôi có liên kết với các hãng có uy tín để cung cấp thêm các dịch vụ như: bánh sinh nhật, Chocolate, Gấu bông, kẹo ngọt, trái cây...
          </p>
          <div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- end xin chào -->

  <!-- why -->
  <section class="gallery_section layout_padding">
    <div class="section_number">
      
    </div>
    <div class="heading_container justify-content-center">
      <h2>
        TẠI SAO LẠI CHỌN CHÚNG TÔI
      </h2>
    </div>
    <div class="container mt-5">
      <div class="row">
        <div class="col-lg-4 col-md-5 col-sm-6 mt-5">
          <div class="row">
            <div class="col-lg-3"><img src="./content/img/icon1.png" alt=""></div>
            <div class="col-lg-8">
              <b>Miễn phí giao hàng</b> <br>
              <i>Free Ship (Nội thành)</i>
          </div>
          </div>
        </div>
        <div class="col-lg-4 col-md-5 col-sm-6 mt-5">
          <div class="row">
            <div class="col-lg-3"><img src="./content/img/icon2.png" alt=""></div>
            <div class="col-lg-8">
              <b>Phục vụ 24/24</b> <br>
              <i>24-7 service</i>
          </div>
          </div>
        </div>
        <div class="col-lg-4 col-md-5 col-sm-6 mt-5">
          <div class="row">
            <div class="col-lg-3"><img src="./content/img/icon3.png" alt=""></div>
            <div class="col-lg-8">
              <b>Cam kết hài lòng 100%</b> <br>
              <i>100% guarantee smile</i>
          </div>
          </div>
        </div>
        <div class="col-lg-4 col-md-5 col-sm-6 mt-5">
          <div class="row">
            <div class="col-lg-3"><img src="./content/img/icon4.png" alt=""></div>
            <div class="col-lg-8">
              <b>Cam kết hoa tươi 3+ ngày</b> <br>
              <i>3+ days fresh warranty</i>
          </div>
          </div>
        </div>
        <div class="col-lg-4 col-md-5 col-sm-6 mt-5">
          <div class="row">
            <div class="col-lg-3"><img src="./content/img/icon5.png" alt=""></div>
            <div class="col-lg-8">
              <b>Giá đã gồm 10% VAT</b> <br>
              <i>Price include VAT</i>
          </div>
          </div>
        </div>
        <div class="col-lg-4 col-md-5 col-sm-6  mt-5">
          <div class="row">
            <div class="col-lg-3"><img src="./content/img/icon6.png" alt=""></div>
            <div class="col-lg-8">
              <b>Giảm giá đến 10%</b> <br>
              <i>Receive 3-10% discount</i>
          </div>
          </div>
        </div>
      </div>
    </div>      
  </section>
  <!-- end why -->

  <!-- client section -->
  <section class="client_section layout_padding">
    <div class="container">
      <div class="heading_container justify-content-center">
        <h2>
          Đóng góp của khách hàng
        </h2>
        <div class="section_number">
          04
        </div>
      </div>
    </div>
    <div class="container">
      <div class="row">
        <div class="col-md-6">
          <div class="client_box">
            <div class="detail_box">
              <div class="img_box">
                <img src="./content/images/client-1.png">
              </div>
              <h5>
                Chú Tư Hàng Xóm
              </h5>
              <p>Hoa quá đẹp mua lẹ lẹ đi không thì shop hết</p>
            </div>
          </div>
        </div>
        <div class="col-md-6">
          <div class="client_box">
            <div class="detail_box">
              <div class="img_box">
                <img src="./content/images/client-2.png">
              </div>
              <h5>
                Anh Năm Bảo Vệ
              </h5>
              <p>Mua lẹ lên bà con shop này bán hoa đẹp quá không mua thì phí đời người</p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- arrange section -->
<!-- tabs -->
  <section class="gallery_section layout_padding">
  
    <div class="container">
    <!-- <div class="section_number">
      05
    </div> -->
    <div class="detail_box">
            <div class="heading_container justify-content-center">
              <h2>
                SẢN PHẨM
              </h2>
            </div>
        </div>
      <ul class="nav nav-tabs mt-4">
        <li class="active me-3"><a data-toggle="tab" href="#a">Nothing</a></li>
        <li class=" me-3"><a data-toggle="tab" href="#menu1">Khuyến Mãi</a></li>
        <li class="me-3"><a data-toggle="tab" href="#menu2">Hoa Cao Cấp</a></li>
        <li><a data-toggle="tab" href="#menu3">Hoa Mới</a></li>
      </ul>
  <div class="tab-content mt-5">
    <div id="#" class="tab-pane fade in active">
    </div>
    <div id="menu1" class="tab-pane fade">
          <div class="row">
              <?php
                $result = $hanghoa->getListHangHoaSale();
                while($set = $result->fetch()):
            ?>
            <div class="col-lg-3 col-md-4 col-sm-5 mb-3 text-left">
                  <div class="view overlay z-depth-1-half">
                  <img src="./content/img/<?php echo $set["hinh"] ?>" class="img-fluid" alt="">
                      <div class="mask rgba-white-slight"></div>
                  </div>

                  <h5 class="my-4 font-weight-bold">
                      <font color="red"><?php echo number_format($set["giamgia"]);?><sup><u>đ</u></sup></font>
                      <strike><?php echo number_format($set["dongia"]);?></strike><sup><u>đ</u></sup>
                  </h5>

                  <a href="index.php?action=sanpham&act=detail&id=<?php echo $set["mahh"];?>">
                      <span><?php echo $set["tenhh"]?></span></br></a>
                  <button class="btn btn-danger" id="may4" value="lap 4">MUA NGAY</button>
              </div>
                    <?php
                      endwhile;
                    ?>
          </div>
          <br>
          <a href="index.php?action=sanpham&act=khuyenmai">Xem nhiều sản phẩm hơn </a>
    </div>
    <div id="menu2" class="tab-pane fade">
    <div class="row">
          <?php
             $result = $hanghoa->getListHangHoaCaoCap();
             while($set = $result->fetch()):
         ?>
         <div class="col-lg-3 col-md-4 col-sm-5 mb-3 text-left">
               <div class="view overlay z-depth-1-half">
               <img src="./content/img/<?php echo $set["hinh"] ?>" class="img-fluid" alt="">
                   <div class="mask rgba-white-slight"></div>
               </div>
               <h5 class="my-4 font-weight-bold">
                   <font color="red"><?php echo number_format($set["dongia"]);?><sup><u>đ</u></sup></font>
               </h5>
               <a href="index.php?action=sanpham&act=detail&id=<?php echo $set["mahh"];?>">
                   <span><?php echo $set["tenhh"]?></span></br></a>
               <button class="btn btn-danger" id="may4" value="lap 4">MUA NGAY</button>
           </div>
         <?php
            endwhile;
          ?>
          </div>
          <br>
          <a href="index.php?action=sanpham&act=hoacaocap">Xem nhiều sản phẩm hơn </a>
    </div>
    <div id="menu3" class="tab-pane fade">
    <div class="row">
          <?php
             $result = $hanghoa->getListHangHoaMoi();
             while($set = $result->fetch()):
         ?>
         <div class="col-lg-3 col-md-4 col-sm-5 mb-3 text-left">
               <div class="view overlay z-depth-1-half">
               <img src="./content/img/<?php echo $set["hinh"] ?>" class="img-fluid" alt="">
                   <div class="mask rgba-white-slight"></div>
               </div>
               <h5 class="my-4 font-weight-bold">
                   <font color="red"><?php echo number_format($set["dongia"]);?><sup><u>đ</u></sup></font>
               </h5>
               <a href="index.php?action=sanpham&act=detail&id=<?php echo $set["mahh"];?>">
                   <span><?php echo $set["tenhh"]?></span></br></a>
               <button class="btn btn-danger" id="may4" value="lap 4">MUA NGAY</button>
           </div>
         <?php
            endwhile;
          ?>
          </div>
          <br>
          <a href="index.php?action=sanpham&act=hoamoi">Xem nhiều sản phẩm hơn </a>
    </div>
  </div>
  </div>
  </section>
    <!-- end tabs -->




  <!-- end arrange section -->

  <!-- contact section -->

  <section class="contact_section layout_padding">
    <div class="section_number">
      06
    </div>
    <div class="container ">
      <div class="heading_container justify-content-center">
        <h2 class="">
          Contact Us
        </h2>
      </div>

    </div>
    <div class="container">
      <div class="row">
        <div class="col-md-6 mx-auto">
          <form action="">
            <div>
              <input type="text" placeholder="Name" />
            </div>
            <div>
              <input type="email" placeholder="Email" />
            </div>
            <div>
              <input type="text" placeholder="Pone Number" />
            </div>
            <div>
              <input type="text" class="message-box" placeholder="Message" />
            </div>
            <div class="d-flex  mt-4 ">
              <button>
                SEND
              </button>
            </div>
          </form>
        </div>
      </div>
    </div>
  </section>

  <!-- end contact section -->

</body>

</html>