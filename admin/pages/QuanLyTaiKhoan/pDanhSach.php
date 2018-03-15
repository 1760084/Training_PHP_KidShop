<a href="index.php?c=1&a=1">
    <img src='images/new.png' />
</a>
<table cellspacing="0" border="1">
    <tr>
        <th width="100">Mã tài khoản</th>
        <th width="200">Tên đăng nhập</th>
        <th width="200">Tên hiển thị</th>
        <th width="200">Địa chỉ</th>
        <th width="150">Điện thoại</th>
        <th width="200">Email</th>
        <th width="75">Tình trạng</th>
        <th width="150">Loại tài khoản</th>
        <th width="100">Thao tác</th>
    </tr>
    <?php
    $sql = "SELECT t.MaTaiKhoan, t.TenDangNhap, t.TenHienThi, t.DiaChi, t.DienThoai, t.Email, t.BiXoa, l.TenLoaiTaiKhoan FROM TaiKhoan t, LoaiTaiKhoan l WHERE t.MaLoaiTaiKhoan = l.MaLoaiTaiKhoan";
    $result = DataProvider::ExecuteQuery($sql);
    while ($row = mysqli_fetch_array($result))
    {
        $MaTaiKhoan = $row['MaTaiKhoan'];
        $TenDangNhap = $row['TenDangNhap'];
        $TenHienThi = $row['TenHienThi'];
        $DiaChi = $row['DiaChi'];
        $DienThoai = $row['DienThoai'];
        $Email = $row['Email'];
        $TenLoaiTaiKhoan = $row['TenLoaiTaiKhoan'];

        include('pages/QuanLyTaiKhoan/temp/tempDanhSach.php');
    }
    ?>
</table>