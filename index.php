<?php
	session_start();
	include_once('lib/DataProvider.php');
	include_once('lib/GioHang.php');
	
	if((isset($_GET['a']) && $_GET['a'] < 100) || isset($_GET['a']) == false)
		$_SESSION['curURL'] = $_SERVER['REQUEST_URI'];
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<title>Website BabyShop</title>
<link rel="stylesheet" type="text/css" href="css/style.css" />
</head>

<body>
	<div id="wrapper">
		<div id="header">
        	<?php include_once('modules/mHeader.php'); ?>
		</div>
		<div id="sidebar">
			<?php include_once('modules/mHangSanXuat.php'); ?>
            <?php include_once('modules/mLoaiSanPham.php'); ?>
		</div>
		<div id="content">
			<?php
				$a = 1;
				if(isset($_GET['a']))
					$a = $_GET['a'];

				switch($a)
				{
					case 1:
						include_once('pages/pIndex.php');
						break;
					case 2:
						include_once('pages/pSanPhamTheoHang.php');
						break;
					case 3:
						include_once('pages/pSanPhamTheoLoai.php');
						break;
					case 4:
						include_once('pages/pChiTiet.php');
						break;
					case 5:
						include_once('pages/GioHang/pDanhSachGioHang.php');
						break;
					case 6: 
						include_once('pages/GioHang/pThongBaoDatHangThanhCong.php');
						break;
					case 101:
						include_once('modules/DangNhap/exFormDangNhap.php');
						break;
					case 102: 
						include_once('modules/DangNhap/exFormThongTinTaiKhoan.php');
						break;
					case 103:
						include_once('pages/GioHang/exThemSanPhamVaoGioHang.php');
						break;
					case 104:
						include_once('pages/GioHang/exCapNhatSoLuong.php');
						break;
					case 105:
						include_once('pages/GioHang/exDatHang.php');
						break;
					default:
						include_once('pages/pError.php');
				}
			?>
		</div>
		<div id="footer">
			<?php include_once('modules/mFooter.php'); ?>			
		</div>
	</div>	
</body>
</html>



