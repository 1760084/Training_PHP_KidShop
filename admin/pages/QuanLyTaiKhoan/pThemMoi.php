<form action="index.php?c=1&a=101" method="post">
	<fieldset>
		<legend>Tạo tài khoản mới</legend>
		<div>
			<span>Tên đăng nhập:</span>
			<input type='text' name='txtTenDangNhap' require />
        </div>
        <div>
            <span>Tên hiển thị:</span>
            <input type='text' name='txtTenHienThi' require />
        </div>
        <div>
            <span>Địa chỉ:</span>
            <input type='text' name='txtDiaChi' require />
        </div>
        <div>
            <span>Điện thoại:</span>
            <input type='tel' name='txtDienThoai' require />
        </div>
        <div>
            <span>Email:</span>
            <input type="email" name='txtEmail' require />
        </div>
		<div>
			<span>Loại tài khoản:</span>
			<select name="cmbLoaiTaiKhoan">
				<?php
					$sql = "SELECT * FROM LoaiTaiKhoan";
					$result = DataProvider::ExecuteQuery($sql);
					while($row = mysqli_fetch_array($result))
					{
						echo "<option value='".$row["MaLoaiTaiKhoan"]."'>".$row["TenLoaiTaiKhoan"]."</option>";
					}
				?>			
			</select>
		</div>
		<div>
			<input type="submit" value="Tạo tài khoản" />
		</div>
	</fieldset>
</form>