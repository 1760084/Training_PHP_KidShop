<div class="box">
    <img src="images/<?php echo $HinhURL; ?>" />
    <div class="pname"><?php echo $TenSanPham; ?></div>
    <div class="pprice">Giá: <?php echo number_format($GiaSanPham, 0, ',', '.');?>đ</div>
    <div class="action">
        <a href="index.php?a=4&id=<?php echo $MaSanPham; ?>">Chi tiết</a>
    </div>            
</div>