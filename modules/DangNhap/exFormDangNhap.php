<?php
    $us = $_POST["txtUS"];
    $ps = $_POST["txtPS"];
    
    $sql = "SELECT MaTaiKhoan, TenDangNhap, MaLoaiTaiKhoan, TenHienThi FROM TaiKhoan WHERE TaiKhoan.BiXoa = false AND TenDangNhap = '$us' AND MatKhau = '$ps'";
    $result = DataProvider::ExecuteQuery($sql);
    $row = mysqli_fetch_array($result);
    
    if($row != null){
        $_SESSION["MaTaiKhoan"] = $row["MaTaiKhoan"];
        $_SESSION["TenDangNhap"] = $row["TenDangNhap"];
        $_SESSION["TenHienThi"] = $row["TenHienThi"];
        $_SESSION["MaLoaiTaiKhoan"] = $row["MaLoaiTaiKhoan"];

        if($row['MaLoaiTaiKhoan'] == 2){
            DataProvider::ChangeURL('./admin/index.php');
        }
        else
        {
            $curURL = $_SESSION['curURL'];
            DataProvider::ChangeURL($curURL);
        }
    }
    else {
        DataProvider::ChangeURL("index.php?a=0&id=1");
    }
?>