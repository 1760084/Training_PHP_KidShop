<h2>Sản phẩm theo hãng</h2>
<?php
    $id = $_GET["id"];
    $sql = "SELECT MaSanPham, TenSanPham, HinhURL, GiaSanPham FROM SanPham WHERE BiXoa = false AND MaLoaiSanPham = $id";
    $result = DataProvider::ExecuteQuery($sql);
    while($row = mysqli_fetch_array($result))
    {
        $MaSanPham = $row['MaSanPham'];
        $TenSanPham = $row['TenSanPham'];
        $HinhURL = $row['HinhURL'];
        $GiaSanPham = $row['GiaSanPham'];
        include('temp/tempSanPham.php');
    }
?>
