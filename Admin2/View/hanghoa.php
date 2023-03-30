
<div  class="col-md-4 col-md-offset-4"><h3 ><b>DANH SÁCH HÀNG HÓA</b></h3></div>
<div class="container">
  <div class="row">
    <div class="col-lg-8">
      <a href="index.php?action=hanghoa&act=themsp"><h4>Thêm sản phẩm</h4></a>
      <a href="index.php?action=hoadon"><h4>Hóa đơn</h4></a>
      <a href="index.php?action=cthd"><h4>Chi tiết hóa đơn</h4></a>
      <a href="index.php?action=user"><h4>Khách hàng</h4></a>
    </div>
    <div class="col-lg-3">
      <a href="index.php?action=taikhoan"><h4>Đổi mật khẩu</h4></a>
    </div>
  </div>
</div>

<div class="row">
<table class="table">
    <thead>
      <tr class="table-primary">
        <th>Mã hàng</th>
        <th>Tên hàng</th>
        <th>Đơn giá</th>
        <th>Giảm giá</th>
        <th>Hình</th>
        <th>Mã loại</th>
        <th>Số lượt xem</th>
        <th>Ngày lập</th>
        <th>Mô tả</th>
        <th>Size</th>
        <th>Số lượng tồn</th>
        <th>Màu sắc</th>
        <th>Cập Nhật</th>
        <th>Xóa</th>
      </tr>
    </thead>
    <tbody>
      <?php
        $hh=new hanghoa();
        $result=$hh->getHangHoaAll();
        while($set=$result->fetch()):
      ?>
      <tr>
      <td><?php echo $set['mahh'];?> </td>
        <td><?php echo $set['tenhh'];?></td>
        <td><?php echo $set['dongia'];?></td>
        <td><?php echo $set['giamgia'];?></td>
        <td><img width="50px" height="50px" src="../DOAN/content/img/<?php echo $set['hinh'];?>"/></td>
        <td><?php echo $set['maloai'];?></td>
        <td><?php echo $set['soluotxem'];?></td>
        <td><?php echo $set['ngaylap'];?></td>
        <td><?php echo $set['mota'];?></td>
        <td><?php echo $set['size'];?></td>
        <td><?php echo $set['soluongton'];?></td>
        <td><?php echo $set['mausac'];?></td>
        <td><a href="index.php?action=hanghoa&act=sua&id=<?php echo $set['mahh'];?>">Cập nhật</a></td>
        <td><a href="index.php?action=hanghoa&act=delete&id=<?php echo $set['mahh'];?>">Xóa</a></td>
      </tr>
     <?php
      endwhile;
     ?>
    </tbody>
  </table>
</div>