<?php
    $tenDangNhap = $_POST['txtTenDangNhap'];
    $tenHienThi = $_POST['txtTenHienThi'];
    $diaChi = $_POST['txtDiaChi'];
    $dienThoai = $_POST['txtDienThoai'];
    $email = $_POST['txtEmail'];
    $maLoaiTaiKhoan = $_POST['cmbLoaiTaiKhoan'];

    $sql = "INSERT INTO TaiKhoan(TenDangNhap, MatKhau, TenHienThi, DiaChi, DienThoai, Email, MaLoaiTaiKhoan) VALUES('$tenDangNhap', '123456', '$tenHienThi', '$diaChi', '$dienThoai', '$email'  , $maLoaiTaiKhoan)";
    DataProvider::ExecuteQuery($sql);

    DataProvider::ChangeURL('index.php?c=1');
?>