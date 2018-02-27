<?php
    if(isset($_SESSION['MaTaiKhoan'])){
        include('modules/DangNhap/mFormThongTinTaiKhoan.php');
    }
    else {
        include('modules/DangNhap/mFormDangNhap.php');
    }
?>