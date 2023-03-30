
<div class="login-page bk-img" style="background-image: url(img/login-bg.jpg);">
		<div class="form-content">
			<div class="container">
				<div class="row">
					<div class="col-md-6 col-md-offset-3">
						<h1 class="text-center text-bold mt-4x" style="color:#fff">Admin | Change Password</h1>
						<div class="well row pt-2x pb-3x bk-light">
							<div class="col-md-8 col-md-offset-2">
								<form method="post" action="index.php?action=taikhoan&act=taikhoan_act" class="login-form">
									<label for="" class="text-uppercase text-sm">Tài khoản</label>
									<input type="text" name="username" value="<?php echo $_SESSION['admin']?>" class="form-control mb" readonly>

									<label for="" class="text-uppercase text-sm">Mật khẩu cũ</label>
									<input type="password" name="passold" class="form-control mb">

									<label for="" class="text-uppercase text-sm">Mật khẩu mới</label>
									<input type="password" name="passnew" class="form-control mb">
		
                                    <label for="" class="text-uppercase text-sm">Xác nhận mật khẩu mới</label>
									<input type="password" name="passnew2" class="form-control mb">

									<button class="btn btn-primary btn-block mt-5" name="login" type="submit">SUBMIT</button>

								</form>

			<p style="margin-top: 4%" align="center"><a href="">Back to Home</a>	</p>
							</div>

						</div>
							
					</div>
				</div>
			</div>
		</div>
	</div>
