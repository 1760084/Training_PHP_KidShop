Hello, <?php echo $_SESSION["TenHienThi"]; ?> |
<a href="index.php?a=5">Giỏ hàng (<?php echo (isset($_SESSION['GioHang'])) ? count(unserialize($_SESSION['GioHang'])->danhSachSanPham) : 0; ?>)</a> | 
<a href="index.php?a=102">Đăng xuất</a>