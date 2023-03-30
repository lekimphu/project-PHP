<div class="col-md-4 col-md-offset-4"><h3><b>CẬP NHẬT HOÁ ĐƠN</b></h3></div>
<div class="row col-md-4 col-md-offset-4" >
  <?php
    if(isset($_GET['id'])){
      $id=$_GET['id'];
      $hh = new hoadon();
      $result = $hh->getHoaDonId($id);
      $masohd = $result['masohd'];        
      $makh = $result['makh'];      
      $ngaydat = $result['ngaydat'];      
      $tongtien = $result['tongtien'];         
    }
  ?>
  <form action="index.php?action=hoadon&act=capnhat_action&id=<?php echo $id?>" method="post" enctype="multipart/form-data">
    <table class="table" style="border: 0px;">

      <tr>
        <td>Mã hoá đơn</td>
        <td> <input type="text" class="form-control" name="masohd" value="<?php if(isset($masohd)) echo $masohd?>"  readonly/></td>
      </tr>
      <tr>
        <td>Mã khách hàng</td>
        <td><input type="number" class="form-control" name="makh"  value="<?php if(isset($makh)) echo $makh?>" maxlength="100px" readonly></td>
      </tr>
      <tr>
        <td>Ngày đặt</td>
        <td><input type="date" class="form-control" name="ngaydat" value="<?php if(isset($ngaydat)) echo $ngaydat?>"></td>
      </tr>
      <tr>
        <td>Tổng tiền</td>
        <td><input type="text" class="form-control" name="tongtien" value="<?php if(isset($tongtien)) echo $tongtien?>"></td>
      </tr>
      <tr>
        <td colspan="2">
          <input type="submit" value="submit">
        </td>
      </tr>
    </table>
  </form>
</div>