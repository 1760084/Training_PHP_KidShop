<?php
	session_start();
	include "../lib/DataProvider.php";

	//Kiểm tra có người dùng có đăng nhập với quyền Admin hay chưa?
	if(!isset($_SESSION["MaLoaiTaiKhoan"]) || $_SESSION["MaLoaiTaiKhoan"] != 2)
		header("location:../index.php");

	$c = 0;
	if(isset($_GET["c"]))
		$c = $_GET["c"];
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Phân hệ quản lý</title>
	<link rel="stylesheet" type="text/css" href="css/admin.css" />
</head>
<body>
	<div id="header">
		<a href="index.php">
			Hệ thống quản lý sản phẩm BabyShop
		</a>
	</div>
	<div id="menu">
		<?php 
			include "modules/mMenu.php"; 
			include "modules/mLogin.php";
		?>
	</div>
	<div id="content">
		<?php
			switch ($c) {
				case 0:
					include_once("pages/pIndex.php");
					break;
				case 1:
					include_once("pages/QuanLyTaiKhoan/pIndex.php");
					break;
				case 2:
					include_once("pages/QuanLySanPham/pIndex.php");
					break;
				case 3:
					include_once("pages/QuanLyLoai/pIndex.php");
					break;
				case 4:
					include_once("pages/QuanLyHang/pIndex.php");
					break;
				case 5:
					include_once("pages/QuanLyDonDatHang/pIndex.php");
					break;
				default:
					include_once("pages/pError.php");
					break;
			}
		?>
	</div>
	<div id="footer">
		&copy; 2015 - Thiết kế bởi sinh viên Khoa Công nghệ Thông tin - ĐH KHTN Tp.HCM
	</div>
</body>
</html>