<?php
    if(isset($_POST['hdMaSanPham'])){
        $maSanPham = $_POST['hdMaSanPham'];
        $soLuong = $_POST['txtSL'];
        
        $gioHang = new GioHang();
        if(isset($_SESSION['GioHang'])){
            $gioHang = unserialize($_SESSION['GioHang']);
        }

        $gioHang->CapNhat($maSanPham, $soLuong);
        $_SESSION['GioHang'] = serialize($gioHang);

        DataProvider::ChangeURL('index.php?a=5');
    } else {
        DataProvider::ChangeURL('index.php?a=0&id=2');
    }
?>