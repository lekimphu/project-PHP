<style>
    nav{
        padding:20px
    }
    .page-item{
        padding: 5px 10px;
        border: solid 1px violet;
    }
</style> 
<!-- sản phẩm-->
    <?php
        // tìm số sản phẩm trong db 
        $hh = new hanghoa();
        $result = $hh->getAll(); // ra 30 sản phẩm
        // đếm xem bảng hàng hoá có bao nhiêu dòng thì chính là cái tổng số sp
        $count = $result->rowCount(); // $count = 30 
        // giới hạn số sản phẩm cho mỗi trang 
        $limit = 12;
        // tính xem  có bao nhiêu trang và tính số start
        $p = new page();
        // gọi số trang 
        $page = $p->findPage($count,$limit);
        // gọi start 
        $start = $p->findStart($limit);
        // trang hiện tại
        $current_page = isset($_GET['page'])?$_GET['page']:1
    ?>
 <?php
    if($_GET['act']=='hoacaocap'){
        $ac=1;
    }
    if($_GET['act']== 'khuyenmai'){
        $ac= 0;
    }
    if($_GET['act']=='hoamoi'){
        $ac = 2;
    }
    if($_GET['act'] =='full'){
        $ac = 3;
    }
    if($_GET['act'] =='timkiem'){
        $ac = 4;
    }
    if($_GET['act'] =='sapxep1'){
        $ac = 5;
    }
    if($_GET['act'] =='sapxep2'){
        $ac = 6;
    }
 ?>

  <!--Section: Examples-->
  <section id="examples" class="text-center">
      <!-- Heading -->
      <div class="row">
          <div class="col-lg-8 text-center">
             <?php
             switch($ac){
                case '0':
                    echo '<h3 class="mb-5 font-weight-bold text-primary">HOA KHUYẾN MÃI</h3>';
                    break;
                case '1':
                    echo '<h3 class="mb-5 font-weight-bold text-primary">HOA CAO CẤP</h3>';
                    break;
                case '2':
                    echo '<h3 class="mb-5 font-weight-bold text-primary">HOA MỚI</h3>';
                    break;
                case '3':
                    echo '<h3 class="mb-5 font-weight-bold text-primary">SẢN PHẨM</h3>';
                    break;
                case '4':
                    echo '<h3 class="mb-5 font-weight-bold text-primary">SẢN PHẨM TÌM KIẾM</h3>';
                    break;
                case '5':
                    echo '<h3 class="mb-5 font-weight-bold text-primary">GIÁ SẢN PHẨM TỪ THẤP ĐẾN CAO</h3>';
                    break;
                case '6':
                    echo '<h3 class="mb-5 font-weight-bold text-primary">GIÁ SẢN PHẨM TỪ CAO ĐẾN THẤP</h3>';
                    break;
                }
             ?>
          </div>
      </div>
      <div class="dropdown">
        <button class="btn btn-warning dropdown-toggle" type="button" id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false" style="margin-left: 1000px;">
            Toàn bộ sản phẩm
        </button>
        <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
            <li><a class="dropdown-item" href="index.php?action=sanpham&act=sapxep1">Giá từ THẤP tới CAO</a></li>
            <li><a class="dropdown-item" href="index.php?action=sanpham&act=sapxep2">Giá từ CAO tới THẤP</a></li>
            <!-- <li><a class="dropdown-item" href="#">Something else here</a></li> -->
        </ul>
</div>
      <!--Grid row-->
      <div class="row">
         <?php
        $hh = new hanghoa();
        switch($ac){
            case 0:
                $result= $hh->getListHangHoaSaleFull();
                break;
            case 1:
                $result=$hh->getListHangHoaCaoCapFull();
                break;
            case 2:
                $result= $hh->getListHangHoaMoiFull();
                break;
            case 3:
                $result= $hh->getListHangHoaAllPage($start,$limit);
                break;
            case 4:
                // nhận cái gửi qua
                if(isset($_POST['txtsearch'])){
                    $tk = $_POST['txtsearch'];
                    // view yêu cầu cần lấy thông tin để hiện thị
                    $result = $hh->getTimKiem($tk);
                }
                break;
            case 5:
                $result= $hh->sapxep1($start,$limit);
                break;
            case 6:
                $result= $hh->sapxep2($start,$limit);
                break;
        }
         
         ?>
              <!--Grid column-->
              <div class="container">
                <div class="row">
                    <?php while($set= $result->fetch()):?>
                    <div class="col-lg-3 col-md-4 mb-3 text-left ">

                  <div class="view overlay z-depth-1-half mt-5">
                      <img src="content/img/<?php echo $set["hinh"] ?>" class="img-fluid" alt="">
                      <div class="mask rgba-white-slight"></div>
                  </div>
                <?php
                    if($ac==0){
                        echo '<h5 class="my-4 font-weight-bold">
                        <font color="red">'.number_format($set['giamgia']).'<sup><u>đ</u></sup></font>
                        <strike>'.number_format($set['dongia']).'</strike><sup><u>đ</u></sup></br></h5>';
                    }
                    else{
                        echo '<h5 class="my-4 font-weight-bold" style="color:red;">
                        '.number_format($set['dongia']).'<sup><u>đ</u></sup></br></h5>';
                    }
                ?>
                  
                  <a href="index.php?action=sanpham&act=detail&id=<?php echo $set["mahh"];?>">
                      <span><?php echo $set["tenhh"] ?></span></br>
                  </a>

                  <button class="btn btn-danger mt-3" id="may4" value="lap 4">MUA NGAY</button>
                  
            </div>
            <?php endwhile;?>
        </div>
    </div>
    
</div>

      <!--Grid row-->

  </section>
 
  
  <!-- end sản phẩm mới nhất -->
  <?php
    if($_GET['act']=="full"):
  ?>
  <nav aria-label="Page navigation example">
  <ul class="pagination justify-content-center">
  <?php
        // nút lùi
            
                if($current_page > 1 && $page > 1){
                    echo '<li class="page-item"><a href="index.php?action=sanpham&act=full&page='.($current_page-1).'">Prev</a></li>';
                }
            for($i=1;$i<=$page;$i++){
    ?>
    <li class="page-item"><a href="index.php?action=sanpham&act=full&page=<?php echo $i;?>"><?php echo $i;?></a></li>
    <?php
        } 
        // nút next
            if($current_page < $page && $page > 1){
                echo '<li class="page-item"><a href="index.php?action=sanpham&act=full&page='.($current_page+1).'">Next</a></li>';
            }
    ?>
  </ul>
  <?php endif;?>
  

  <?php
    if($_GET['act']=="sapxep1"):
  ?>
  <nav aria-label="Page navigation example">
  <ul class="pagination justify-content-center">
  <?php
        // nút lùi
            
                if($current_page > 1 && $page > 1){
                    echo '<li class="page-item"><a href="index.php?action=sanpham&act=sapxep1&page='.($current_page-1).'">Prev</a></li>';
                }
            for($i=1;$i<=$page;$i++){
    ?>
    <li class="page-item"><a href="index.php?action=sanpham&act=sapxep1&page=<?php echo $i;?>"><?php echo $i;?></a></li>
    <?php
        } 
        // nút next
            if($current_page < $page && $page > 1){
                echo '<li class="page-item"><a href="index.php?action=sanpham&act=sapxep1&page='.($current_page+1).'">Next</a></li>';
            }
    ?>
  </ul>
  <?php endif;?>


  <?php
    if($_GET['act']=="sapxep2"):
  ?>
  <nav aria-label="Page navigation example">
  <ul class="pagination justify-content-center">
  <?php
        // nút lùi
            
                if($current_page > 1 && $page > 1){
                    echo '<li class="page-item"><a href="index.php?action=sanpham&act=sapxep2&page='.($current_page-1).'">Prev</a></li>';
                }
            for($i=1;$i<=$page;$i++){
    ?>
    <li class="page-item"><a href="index.php?action=sanpham&act=sapxep2&page=<?php echo $i;?>"><?php echo $i;?></a></li>
    <?php
        } 
        // nút next
            if($current_page < $page && $page > 1){
                echo '<li class="page-item"><a href="index.php?action=sanpham&act=sapxep2&page='.($current_page+1).'">Next</a></li>';
            }
    ?>
  </ul>
  <?php endif;?>
</nav>