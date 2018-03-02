<form name="frmGioHang" action="index.php?a=104" method="post">
    <tr>
        <td><?php echo $stt; ?></td>
        <td><?php echo $tenSanPham; ?></td>
        <td align="center">
            <img src="images/<?php echo $hinhURL; ?>" width="50">
        </td>
        <td><?php echo number_format($giaBan, 0, ",","."); ?>đ</td>
        <td>
            <input type="text" name="txtSL" value="<?php echo $soLuong; ?>" width="45" size="5" />
            <input type="hidden" name="hdMaSanPham" value="<?php echo $maSanPham; ?>" />
        </td>
        <td>
            <input type="submit" value="Cập nhật số lượng" />
        </td>
    </tr>
</form>