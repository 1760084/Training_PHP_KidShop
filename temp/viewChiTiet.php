<div id="chitietsp">
    <div id="chitietleft">
        <img src="images/<?php echo $HinhURL; ?>">
    </div>
    <div id="chitietright">
        <div>
            <span class="label">Tên sản phẩm:</span>
            <span class="productname"><?php echo $TenSanPham; ?></span>
        </div>
        <div>
            <span class="label">Giá:</span>
            <span class="price"><?php echo number_format($GiaSanPham, 0, ',', '.');?>đ</span>
        </div>
        <div>
            <span class="label">Hãng sản xuất:</span>
            <span class="factory"><?php echo $TenHangSanXuat; ?></span>
        </div>
        <div>
            <span class="label">Loại sản phẩm:</span>
            <span class="data"><?php echo $TenLoaiSanPham; ?></span>
        </div>
        <div>
            <span class="label">Số lượng:</span>
            <span class="data"><?php echo $SoLuongTon; ?> sản phẩm</span>
        </div>
        <div class="giohang">
            <?php
                if(isset($_SESSION['MaTaiKhoan'])){
                    echo '<a href="index.php?a=103&id='.$MaSanPham.'">';
                    echo '<img src="img/shopping_cart.png" width="32">';
                    echo '</a>';    
                }
            ?>
        </div>
        </div>
        <div id="mota"><?php echo $MoTa; ?></div>
</div>