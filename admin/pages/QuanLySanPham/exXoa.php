<?php
    if(isset($_GET['id']))
    {
        $MaSanPham = $_GET['id'];
        $sql = "UPDATE SanPham SET BiXoa = 1 - BiXoa WHERE MaSanPham = $MaSanPham";
        DataProvider::ExecuteQuery($sql);
    }
    DataProvider::ChangeURL("index.php?c=2");
?>