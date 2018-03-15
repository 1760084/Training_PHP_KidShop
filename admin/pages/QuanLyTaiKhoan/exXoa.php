<?php
    $maTaiKhoan = $_GET['id'];
    
    $sql = "UPDATE TaiKhoan SET BiXoa = (1 - BiXoa) WHERE MaTaiKhoan = $maTaiKhoan";
    DataProvider::ExecuteQuery($sql);

    DataProvider::ChangeURL('index.php?c=1');
?>