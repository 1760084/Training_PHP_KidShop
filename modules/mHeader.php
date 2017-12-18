<div id="header">
    <a href="index.php">
        <img src="img/logo.gif" width="519" height="63">
    </a>
    <div id="login_nav">
        <form name="frmLogin" action="inc/xlDangNhap.php" method="post" onsubmit="return KiemTraDangNhap()">
            Tài khoản: <input name="txtUS" type="text" id="txtUS" size="15" maxlength="20" width="15">
            Mật khẩu: <input name="txtPS" type="password" id="txtPS" size="15" maxlength="20" width="15">
            <input type="submit" value="Đăng nhập">
            <input type="button" value="Đăng ký" onclick="ChuyenTrangDangKy()">
        </form>
    </div>
    <img src="img/header_1.png" width="748">
    <img src="img/header_2.png" width="748">
</div>