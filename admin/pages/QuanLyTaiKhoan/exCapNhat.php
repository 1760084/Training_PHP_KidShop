<?php
    $maTaiKhoan = $_POST['id'];
    $maLoaiTaiKhoan = $_POST['cmbLoaiTaiKhoan'];

    $sql = "UPDATE TaiKhoan SET MaLoaiTaiKhoan = $maLoaiTaiKhoan WHERE MaTaiKhoan = $ma TaiKhoan";
    DataProvider::ExecuteQuery($sql);

    DataProvider::ChangeURL('index.php?c=1');
?>