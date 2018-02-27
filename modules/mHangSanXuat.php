<dl>
    <dt>Hãng sản xuất</dt>
    <?php
        $sql = "SELECT MaHangSanXuat, TenHangSanXuat FROM HangSanXuat WHERE BiXoa = false";
        $result = DataProvider::ExecuteQuery($sql);
        while($row = mysqli_fetch_array($result))
        {
            $maHangSanXuat = $row['MaHangSanXuat'];
            $tenHangSanXuat = $row['TenHangSanXuat'];
            include('temp/tempMenuHangSanXuat.php');
        }
    ?>
</dl>