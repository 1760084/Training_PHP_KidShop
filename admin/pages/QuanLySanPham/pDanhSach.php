<a href="index.php?c=2&a=1">
	<img src="images/new.png" />
</a>
<table cellspacing="0" border="1">
	<tr>
		<th width="100">STT</th>
		<th width="300">Tên sản phẩm</th>
		<th width="100">Hình</th>
		<th width="100">Giá</th>
		<th width="100">Ngày nhập</th>
		<th width="100">Số lượng tồn</th>
		<th width="100">Số lượng bán</th>
		<th width="100">Số lược xem</th>
		<th width="100">Loại</th>
		<th width="100">Hãng</th>
		<th width="100">Mô tả</th>
		<th width="100">Trạng thái</th>
		<th width="200">Thao tác</th>
	</tr>
	<?php
		$sql = "SELECT s.MaSanPham, s.TenSanPham, s.HinhURL, s.GiaSanPham, s.NgayNhap, s.SoLuongTon, s.SoLuongBan, s.SoLuocXem, s.MoTa, s.BiXoa, l.TenLoaiSanPham, h.TenHangSanXuat FROM SanPham s, LoaiSanPham l, HangSanXuat h WHERE s.MaLoaiSanPham = l.MaLoaiSanPham AND s.MaHangSanXuat = h.MaHangSanXuat ORDER BY s.MaSanPham DESC";
		$result = DataProvider::ExecuteQuery($sql);
		$i = 1;
		while ($row = mysqli_fetch_array($result))
		{
            $MaSanPham = $row["MaSanPham"];
            $TenSanPham = $row["TenSanPham"];
            $HinhURL = $row["HinhURL"];
            $GiaSanPham = $row["GiaSanPham"];
            $NgayNhap = $row["NgayNhap"];
            $SoLuongTon = $row["SoLuongTon"];
            $SoLuongBan = $row["SoLuongBan"];
            $SoLuocXem = $row["SoLuocXem"];
            $MoTa = $row["MoTa"];
            $BiXoa = $row["BiXoa"];
            $TenLoaiSanPham = $row["TenLoaiSanPham"];
            $TenHangSanXuat = $row["TenHangSanXuat"];

            include("./pages/QuanLySanPham/temp/tempDanhSach.php");
		}
	?>
</table>