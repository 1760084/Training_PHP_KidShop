<h1>Quản lý Sản phẩm</h1>

<?php
    $curPath = "./pages/QuanLySanPham/";
    $a = 0;
    if(isset($_GET['a']))
        $a = $_GET['a'];

    switch($a)
    {
        case 0:
            include_once($curPath."pDanhSach.php");
            break;
        case 1: 
            include_once($curPath."pThemMoi.php");
            break;
        case 2:
            include_once($curPath."pCapNhat.php");
            break;
        case 101:
            include_once($curPath."exThemMoi.php");
            break;
        case 102:
            include_once($curPath."exCapNhat.php");
            break;
        case 103:
            include_once($curPath."exXoa.php");
            break;
        default:
            DataProvider::ChangeURL('index.php?c=404');
    }
?>