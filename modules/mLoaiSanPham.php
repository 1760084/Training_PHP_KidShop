<dl>
    <dt>Loại sản phẩm</dt>
    <?php
        $sql = "SELECT MaLoaiSanPham, TenLoaiSanPham FROM LoaiSanPham WHERE BiXoa = false";
        $result = DataProvider::ExecuteQuery($sql);
        while($row = mysqli_fetch_array($result))
        {
            $maLoaiSanPham = $row['MaLoaiSanPham'];
            $tenLoaiSanPham = $row['TenLoaiSanPham'];
            include('temp/tempMenuLoaiSanPham.php');
        }
    ?>
</dl>