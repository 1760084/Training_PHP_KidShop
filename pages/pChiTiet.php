<?php
    $id = $_GET['id'];
    $sql = "SELECT MaSanPham, TenSanPham, HinhURL, GiaSanPham, MoTa, SoLuongTon, TenHangSanXuat, TenLoaiSanPham FROM SanPham s, HangSanXuat h, LoaiSanPham l WHERE s.BiXoa = false AND s.MaHangSanXuat = h.MaHangSanXuat AND s.MaLoaiSanPham = l.MaLoaiSanPham AND s.MaSanPham = $id";
    $result = DataProvider::ExecuteQuery($sql);
    $row = mysqli_fetch_array($result);

    $MaSanPham = $row['MaSanPham'];
    $TenSanPham = $row['TenSanPham'];
    $HinhURL = $row['HinhURL'];
    $GiaSanPham = $row['GiaSanPham'];
    $MoTa = $row['MoTa'];
    $SoLuongTon = $row['SoLuongTon'];
    $TenHangSanXuat = $row['TenHangSanXuat'];
    $TenLoaiSanPham = $row['TenLoaiSanPham'];

    include_once('temp/viewChiTiet.php');
?>