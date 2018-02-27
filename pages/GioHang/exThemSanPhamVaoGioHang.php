<?php
    if(isset($_GET['id'])){
        $maSanPham = $_GET['id'];
        
        $gioHang = new GioHang();
        if(isset($_SESSION['GioHang'])){
            $gioHang = unserialize($_SESSION['GioHang']);
        }

        $gioHang->Them($maSanPham);
        $_SESSION['GioHang'] = serialize($gioHang);

        $curURL = $_SESSION['curURL'];
        DataProvider::ChangeURL($curURL);
    } else {
        DataProvider::ChangeURL('index.php?a=0&id=2');
    }
?>