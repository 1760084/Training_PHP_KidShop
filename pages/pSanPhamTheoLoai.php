<h2>Danh sách sản phẩm hãng </h2>
<?php
    if(isset($_GET["id"]) == false)
        DataProvider::ChangeURL("index.php?a=0&id=1");

    $sql = "SELECT SanPham.MaSanPham, SanPham.TenSanPham, SanPham.GiaSanPham, SanPham.HinhURL
            FROM SanPham
            WHERE SanPham.BiXoa = FALSE AND SanPham.MaLoaiSanPham = ".$_GET["id"];
    $result = DataProvider::ExecuteQuery($sql);
    while($row = mysqli_fetch_array($result))
    {
        $hinhURL = $row["HinhURL"];
        $tenSanPham = $row["TenSanPham"];
        $giaSanPham = $row["GiaSanPham"];
        $maSanPham = $row["MaSanPham"];
        include ("templates/tempThumbProduct.php");
    }
?>