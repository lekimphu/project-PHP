<div class="table-responsive">
    <form action="" method="post">
      <table class="table table-bordered" border="0">
      <?php
        $hd = new hoadontam();
        $result = $hd->getHoadonTam($_SESSION['sohd']);
        $sohd = $result['masohd'];
        $tenkh = $result['tenkh'];
        $diachi = $result['diachi'];
        $sodt = $result['sodienthoai'];
        $ngaydat = $result['ngaydat'];
        $ngaydat = new DateTime("now");
      ?>
                        
       <tr>
          <td colspan="4">
            <h2 style="color: red;">HÓA ĐƠN</h2>
          </td>
        </tr>
      <tr>
          <td colspan="2">Số Hóa đơn: <?php echo $sohd;?> </td>
          <td colspan="2"> Ngày lập: <?php echo $ngaydat->format('d/m/Y');?></td>
        </tr>
       <tr>
          <td colspan="2">Họ và tên:</td>
          <td colspan="2"><?php echo $tenkh;?></td>
        </tr>
       <tr>
          <td colspan="2">Địa chỉ:  </td>
          <td colspan="2"><?php echo $diachi;?></td>
        </tr>
        <tr>
          <td colspan="2">Số điện thoại: </td>
          <td colspan="2"><?php echo $sodt;?></td>
        </tr>
      </table>
      <!-- Thông tin sản phầm -->
      <table class="table table-bordered">
        <thead>

          <tr class="table-success">
            <th>Số TT</th>
            <th>Thông Tin Sản Phẩm</th>
            <th>Tùy Chọn Của Bạn</th>
            <th>Giá</th>
          </tr>
        </thead>
        <tbody>
          <?php
            $j = 0;
            $result1 = $o->getHoadonTam($_SESSION['sohd']);
            while($set=$result1->fetch()):
              $j++;
          ?>

            <tr>
              <td><?php echo $j;?></td>
              <td><?php echo $set['tenhh'];?></td>
              <td>Màu: <?php echo $set['mausac'];?>  Size: <?php echo $set['size'];?> </td>
              <td>Đơn Giá: 
              <?php 
                if($item['giamgia'] > 0){
                  echo number_format($item['giamgia']);
                }else{
                  echo number_format($item['dongia']);
                }
                ?>  - Số Lượng: <?php echo $set['soluongmua'];?> <br />
              </td>
            </tr>
          <?php 
            endwhile; 
          ?>
          <tr>
            <td colspan="3">
              <b>Tổng Tiền</b>
            </td>
            <td style="float: right;">
              <b> 
              <?php
                  $gh = new giohang();
                    if($item['giamgia'] > 0 ){
                      echo $gh->getTotal2();
                    }else{
                      echo $gh->getTotal1();
                    }
                ?>   
              <sup><u>đ</u></sup></b>
            </td>
          </tr>
        </tbody>
      </table>
      <?php
    $gh->delete_cart();
  ?>
    </form>
  
</div>
</div>