
<div  class="col-md-4 col-md-offset-4 mt-5"><h3 ><b>HÓA ĐƠN</b></h3></div>
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
        <th>Mã khách hàng</th>
        <th>Ngày đặt</th>
        <th>Tổng tiền</th>
        <th>Cập nhật</th>
        <th>Xoá</th>
      </tr>
    </thead>
    <tbody>
      <?php
        $hd=new hoadon();
        $result=$hd->getHoaDonAll();
        while($set=$result->fetch()):
      ?>
      <tr>
      <td><?php echo $set['masohd'];?> </td>
        <td><?php echo $set['makh'];?></td>
        <td><?php echo $set['ngaydat'];?></td>
        <td><?php echo $set['tongtien'];?></td>
        <td><a href="index.php?action=hoadon&act=capnhat&id=<?php echo $set['masohd'];?>"><button class="btn btn-primary">Cập nhật</button></a></td>
        <td><a href="index.php?action=hoadon&act=xoa&id=<?php echo $set['masohd'];?>"><button class="btn btn-danger">Xoá</button></a></td>
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