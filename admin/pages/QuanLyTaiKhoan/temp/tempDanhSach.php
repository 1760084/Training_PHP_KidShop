<tr>
    <td><?php echo $MaTaiKhoan; ?></td>
    <td><?php echo $TenDangNhap; ?></td>
    <td><?php echo $TenHienThi; ?></td>
    <td><?php echo $DiaChi; ?></td>
    <td><?php echo $DienThoai; ?></td>
    <td><?php echo $Email; ?></td>
    <td>
        <?php
        if($row["BiXoa"] == 1)
            echo "<img src='images/locked.png' />";
        else
            echo "<img src='images/active.png' />";
        ?>
    </td>
    <td><?php echo $TenLoaiTaiKhoan; ?></td>
    <td>
        <a href="pages/qlTaiKhoan/exKhoa.php?id=<?php echo $MaTaiKhoan; ?>">
            <img src="images/lock.png" />
        </a>
        <a href="index.php?c=1&a=2&id=<?php echo $MaTaiKhoan; ?>">
            <img src="images/edit.png" />
        </a>
    </td>
</tr>