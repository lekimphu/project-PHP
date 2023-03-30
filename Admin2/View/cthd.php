
<div  class="col-md-4 col-md-offset-4 mt-5"><h3 ><b>CHI TIẾT HOÁ ĐƠN</b></h3></div>
<div class="row col-12">
<a href="index.php?action=hanghoa&act=themsp"><h4>Thêm sản phẩm</h4></a>
<a href="index.php?action=hoadon"><h4>Hóa đơn</h4></a>
<a href="index.php?action=cthd"><h4>Chi tiết hóa đơn</h4></a>
<a href="index.php?action=user"><h4>Khách hàng</h4></a>
</div>
<div class="row">
<table class="table">
    <thead>
      <tr class="table-primary">
        <th>Mã số hóa đơn</th>
        <th>Mã hàng hóa</th>
        <th>Số lượng mua</th>
        <th>Màu sắc</th>
        <th>Size</th>
        <th>Thành tiền</th>
        <th>Cập nhật</th>
        <th>Xoá</th>
      </tr>
    </thead>
    <tbody>
      <?php
        $hd=new cthd();
        $result=$hd->getCTHDAll();
        while($set=$result->fetch()):
      ?>
      <tr>
      <td><?php echo $set['masohd'];?> </td>
        <td><?php echo $set['mahh'];?></td>
        <td><?php echo $set['soluongmua'];?></td>
        <td><?php echo $set['mausac'];?></td>
        <td><?php echo $set['size'];?></td>
        <td><?php echo $set['thanhtien'];?></td>
        <td><a href="index.php?action=cthd&act=capnhat&id=<?php echo $set['masohd'];?>"><button class="btn btn-primary">Cập nhật</button></a></td>
        <td><a href="index.php?action=cthd&act=xoa&id=<?php echo $set['masohd'];?>&mahh=<?php echo $set['mahh'];?>"><button class="btn btn-danger">Xoá</button></a></td>
      </tr>
     <?php
      endwhile;
     ?>
    </tbody>
  </table>
</div>
<style>
  .row > a{
    margin:0 10px
  }
</style>