<div class="col-md-4 col-md-offset-4"><h3><b>CẬP NHẬT CHI TIẾT HOÁ ĐƠN</b></h3></div>
<div class="row col-md-4 col-md-offset-4" >
  <?php
    if(isset($_GET['id'])){
      $id=$_GET['id'];
      $hh = new cthd();
      $result = $hh->getMSHD($id);
      $masohd = $result['masohd'];        
      $mahh = $result['mahh'];      
      $soluongmua = $result['soluongmua'];      
      $mausac = $result['mausac'];       
      $size = $result['size'];       
      $thanhtien = $result['thanhtien'];       
    }
  ?>
<form action="index.php?action=cthd&act=capnhat_action&id=<?php echo $id?>&mahh=<?php echo $mahh?>" method="post" enctype="multipart/form-data">
    <table class="table" style="border: 0px;">
      <tr>
        <td>Mã hoá đơn</td>
        <td> <input type="text" class="form-control" name="masohd" value="<?php if(isset($masohd)) echo $masohd?>"  readonly/></td>
      </tr>
      <tr>
        <td>Mã hàng hoá</td>
        <td><input type="number" class="form-control" name="mahh"  value="<?php if(isset($mahh)) echo $mahh?>" maxlength="100px" readonly></td>
      </tr>
      <tr>
        <td>Số lượng mua</td>
        <td><input type="number" class="form-control" name="soluongmua" value="<?php if(isset($soluongmua)) echo $soluongmua?>"></td>
      </tr>
      <tr>
        <td>Màu sắc</td>
        <td><input type="text" class="form-control" name="mausac" value="<?php if(isset($mausac)) echo $mausac?>"></td>
      </tr>
      <tr>
        <td>Size</td>
        <td><input type="text" class="form-control" name="size" value="<?php if(isset($size)) echo $size?>"></td>
      </tr>
      <tr>
        <td>Thành tiền</td>
        <td><input type="text" class="form-control" name="thanhtien" value="<?php if(isset($thanhtien)) echo $thanhtien?>" readonly></td>
      </tr>
      <tr>
        <td colspan="2">
          <input type="submit" value="submit">
        </td>
      </tr>

    </table>
  </form>
</div>