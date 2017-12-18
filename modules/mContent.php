<?php
    $a = (isset($_GET['a'])) ? $_GET['a'] : 1; 
    
    switch ($a) {
        case 1:
            include ("pages/pHome.php");
            break;
        case 2: 
            include ("pages/pSanPhamTheoHang.php");
            break;
        case 3: 
            include ("pages/pSanPhamTheoLoai.php");
            break;
        case 4:
            include ("pages/pChiTietSanPham.php");
            break;
        case 10:
            include ("pages/exDangNhap.php");
            break;
        case 11:
            include ("pages/exDangXuat.php");
            break;
        default:
            include "pages/pError.php";
            break;
    }
?>