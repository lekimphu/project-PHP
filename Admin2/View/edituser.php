<div class="col-md-4 col-md-offset-4"><h3><b>CẬP NHẬT KHÁCH HÀNG</b></h3></div>
<div class="row col-md-4 col-md-offset-4" >
  <?php
    if(isset($_GET['id'])){
      $id=$_GET['id'];
      $hh = new user();
      $result = $hh->getMaKH($id);
      $makh = $result['makh'];        
      $tenkh = $result['tenkh'];        
      $username = $result['username'];      
      $password = $result['password'];      
      $email = $result['email'];       
      $diachi = $result['diachi'];       
      $sodienthoai = $result['sodienthoai'];       
    }
  ?>
<form action="index.php?action=user&act=capnhat_action&id=<?php echo $id?>" method="post" enctype="multipart/form-data">
    <table class="table" style="border: 0px;">
      <tr>
        <td>Mã khách hàng</td>
        <td> <input type="text" class="form-control" name="makh" value="<?php if(isset($makh)) echo $makh?>"  readonly/></td>
      </tr>
      <tr>
        <td>Tên khách hàng</td>
        <td><input type="text" class="form-control" name="tenkh"  value="<?php if(isset($tenkh)) echo $tenkh?>" maxlength="100px" readonly></td>
      </tr>
      <tr>
        <td>Username</td>
        <td><input type="text" class="form-control" name="username"  value="<?php if(isset($username)) echo $username?>" maxlength="100px" readonly></td>
      </tr>
      <tr>
        <td>Password</td>
        <td><input type="password" class="form-control" name="password" value="<?php if(isset($password)) echo $password?> "readonly></td>
      </tr>
      <tr>
        <td>Email</td>
        <td><input type="email" class="form-control" name="email" value="<?php if(isset($email)) echo $email?>" readonly></td>
      </tr>
      <tr>
        <td>Địa chỉ</td>
        <td><input type="text" class="form-control" name="diachi" value="<?php if(isset($diachi)) echo $diachi?>"></td>
      </tr>
      <tr>
        <td>Số điện thoại</td>
        <td><input type="text" class="form-control" name="sodienthoai" value="<?php if(isset($sodienthoai)) echo $sodienthoai?>" readonly></td>
      </tr>
      <tr>
        <td colspan="2">
          <input type="submit" value="submit">
        </td>
      </tr>

    </table>
  </form>
</div>