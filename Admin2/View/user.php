
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
        <th>Mã số khách hàng</th>
        <th>Tên khách hàng</th>
        <th>Username</th>
        <th>Password</th>
        <th>Email</th>
        <th>Địa chỉ</th>
        <th>Số điện thoại</th>
        <th>Cập nhật</th>
        <th>Xoá</th>
      </tr>
    </thead>
    <tbody>
      <?php
        $hd=new user();
        $result=$hd->getUser();
        while($set=$result->fetch()):
      ?>
      <tr>
      <td><?php echo $set['makh'];?> </td>
        <td><?php echo $set['tenkh'];?></td>
        <td><?php echo $set['username'];?></td>
        <td><?php echo $set['password'];?></td>
        <td><?php echo $set['email'];?></td>
        <td><?php echo $set['diachi'];?></td>
        <td><?php echo $set['sodienthoai'];?></td>
        <td><a href="index.php?action=user&act=capnhat&id=<?php echo $set['makh'];?>"><button class="btn btn-primary">Cập nhật</button></a></td>
        <td><a href="index.php?action=user&act=xoa&id=<?php echo $set['makh'];?>"><button class="btn btn-danger">Xoá</button></a></td>
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