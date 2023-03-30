
<div class="table-responsive">
    <form action="index.php?action=giohang&act=update_item" method="post">
      <table class="table table-bordered">
        <thead>
          <tr><td colspan="5"><h2 style="color: red; text-align:center">THÔNG TIN GIỎ HÀNG</h2></td></tr>
          <tr class="table-success">
            <th>Số TT</th>
            <th>Thông Tin Sản Phẩm</th>
            <th>Tùy Chọn Của Bạn</th>
            <th colspan="2">Giá</th>
          </tr>
        </thead>
        <tbody>
          <?php
            $j=0;
              foreach($_SESSION['cart'] as $key=>$item):
                $j++;
          ?>
            <tr>
              <td><?php echo $j++?></td>
              <td><img width="50px" height="50px" src="Content\img\<?php echo $item['hinh']?>">
              <?php echo $item['name'];?>
            </td>
              <td>Màu:<?php echo $item['mau'];?>  Size:<?php echo $item['size'];?> </td>
              <td>
                Đơn Giá: <?php 
                if($item['giamgia'] > 0){
                  echo number_format($item['giamgia']);
                }else{
                  echo number_format($item['dongia']);
                }
                ?> - 
                
                Số Lượng: <input type="text" name="newqty[<?php echo $key;?>]" value="<?php echo $item['soluong'];?>" /><br />
                <p style="float: right;"> Thành Tiền 
                <?php 
                  if($item['giamgia'] > 0){
                    echo number_format($item['total2']);
                  }else{
                    echo number_format($item['total1']);
                  }
                ?> <sup><u>đ</u></sup></p>
              </td>
              <td><a href="index.php?action=giohang&act=delete_gh&id=<?php echo $key?>"><button type="button" class="btn btn-danger">Xóa</button></a>
                <button type="submit" class="btn btn-secondary">Sửa</button>
              </td>
            </tr>
              <?php
                endforeach;
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
            <td>
              
            <a href="index.php?action=order">Thanh toán</a>
            </td>
          </tr>
        </tbody>
      </table>
    </form>
</div>

