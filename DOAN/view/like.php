<div class="container">
  <div class="text-danger text-danger"><h1>SẢN PHẨM YÊU THÍCH</h1></div>
  <div class="row">
    <?php
      foreach($_SESSION['like'] as $key=>$item):
    ?>
        <div class="col-lg-4">
        <img class="mt-3" width="200px" height="200px" src="Content\img\<?php echo $item['hinh']?>"> <br>
        <h3><?php echo $item['tenhh'];?></h3> <br>
        Đơn Giá: 
          <?php 
            if($item['giamgia'] > 0){
              echo number_format($item['giamgia']);
            }else{
              echo number_format($item['dongia']);
            }
          ?> <br>
        <button type="submit" class="btn btn-danger mb-3 mt-3">MUA NGAY</button>
        <a href="index.php?action=like&act=delete_like&id=<?php echo $key?>"><button type="button" class="btn btn-danger">Xóa</button></a>
      </div>
    <?php endforeach;?>
  </div>
</div>