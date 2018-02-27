<h1>
<?php
    $errID = 0;
    if(isset($_GET['id']))
        $errID = $_GET['id'];

    switch($errID)
    {
        case 1:
            echo "Tên đăng nhập hoặc mật khẩu không đúng";
            break;
        case 2: 
            echo "Chưa chọn sản phẩm để bỏ vào giỏ hàng";
            break;
        case 3:
            break;
        default:
            echo "Chức năng chưa hỗ trợ";
    }
?>
</h1>