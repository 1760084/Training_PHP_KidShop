<h2>Sản phẩm bán nhiều nhất</h2>
<?php
    $sql = 'SELECT MaSanPham, TenSanPham, HinhURL, GiaSanPham FROM SanPham WHERE BiXoa = false ORDER BY SoLuongBan DESC LIMIT 0, 4';
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
