<div id="quanlygiohang">
    <h1>Quản lý giỏ hàng</h1>
    <table>
        <tr>
            <th width="20">STT</th>
            <th>Tên sản phẩm</th>
            <th width="60">Hình</th>
            <th width="50">Giá</th>
            <th width="50">Số lượng</th>
            <th width="50">Thao tác</th>
        </tr>
        <?php
            if(isset($_SESSION['GioHang']))
            {
                $stt = 1;
                $tongThanhTien = 0;
                $gioHang = unserialize($_SESSION['GioHang']);
                
                foreach ($gioHang->danhSachSanPham as $sanPham) 
                {
                    $sql = "SELECT TenSanPham, HinhURL, GiaSanPham FROM SanPham WHERE MaSanPham = ".$sanPham->maSanPham;
                    
                    $result = DataProvider::ExecuteQuery($sql);
                    $row = mysqli_fetch_array($result);
                    
                    $maSanPham = $sanPham->maSanPham;
                    $tenSanPham = $row['TenSanPham'];
                    $hinhURL = $row['HinhURL'];
                    $giaBan = $row['GiaSanPham'];

                    $soLuong = $sanPham->soLuong;

                    $tongThanhTien += $soLuong * $giaBan;

                    include('temp/tempGioHang.php');

                    $stt++;
                }
            }
        ?>
    </table>
    <div class="pprice">
        Tổng thành tiền: <?php echo number_format($tongThanhTien, 0, ",",".") ; ?> đ
    </div>
    <a href="#">
        <img src="img/dathang.png" width="100">
    </a>
</div>