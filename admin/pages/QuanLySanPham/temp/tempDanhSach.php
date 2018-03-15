<tr>
    <td><?php echo $i++; ?></td>
    <td><?php echo $TenSanPham ?></td>
    <td>
        <img src="../images/<?php echo $HinhURL; ?>" height="50" />
    </td>
    <td><?php echo $GiaSanPham; ?></td>
    <td><?php echo $NgayNhap; ?></td>
    <td><?php echo $SoLuongTon; ?></td>
    <td><?php echo $SoLuongBan; ?></td>
    <td><?php echo $SoLuocXem; ?></td>
    <td><?php echo $TenLoaiSanPham; ?></td>
    <td><?php echo $TenHangSanXuat; ?></td>
    <td>
        <?php 
            if(strlen($MoTa) > 20)
                $sMoTa = substr($MoTa, 0, 20)."...";
            else
                $sMoTa = $MoTa; 
            echo $sMoTa;
        ?>
        <div class="fullMoTa">
            <?php echo $MoTa; ?>
        </div>
    </td>
    <td>
        <?php 
            if($BiXoa == 1)
                echo "<img src='images/locked.png' />";
            else
                echo "<img src='images/active.png' />";
        ?>
    </td>
    <td>
        <a href="index.php?c=2&a=103&id=<?php echo $MaSanPham ?>">
            <img src="images/lock.png" />
        </a>
        <a href="index.php?c=2&a=2&id=<?php echo $MaSanPham ?>">
            <img src="images/edit.png" />
        </a>
    </td>
</tr>