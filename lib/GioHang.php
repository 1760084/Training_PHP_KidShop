<?php
    class SanPham {
        var $maSanPham;
        var $soLuong;    
    }

    class GioHang {
        var $danhSachSanPham;

        function __construct(){
            $this->danhSachSanPham = array();
        }

        function Them($maSanPham){
            $soPhanTu = count($this->danhSachSanPham);
            if($soPhanTu == 0) {
                // Giỏi hàng chưa có sản phẩm nào hết
                $sanPham = new SanPham();
                $sanPham->maSanPham = $maSanPham;
                $sanPham->soLuong = 1;
                $this->danhSachSanPham[] = $sanPham;
            } else {
                // Giỏ hàng đã có sản phẩm (nhưng chưa biết có sản phẩm đang được chọn mua hay không)
                //Tìm sản sản phẩm đã chọn mua có nằm trong giỏi hàng hiện tại không
                $coHieu = false;
                for($i = 0; $i < $soPhanTu; $i++){
                    if($this->danhSachSanPham[$i]->maSanPham == $maSanPham){
                        $this->danhSachSanPham[$i]->soluong++;
                        $coHieu = true;
                        break;
                    }    
                }

                if($coHieu == false){
                    $sanPham = new SanPham();
                    $sanPham->maSanPham = $maSanPham;
                    $sanPham->soLuong = 1;
                    $this->danhSachSanPham[] = $sanPham;
                }
            }
        }

        function Xoa($maSanPham){
            $soPhanTu = count($this->danhSachSanPham);
            for($i = 0; $i < $soPhanTu; $i++){
                if($this->danhSachSanPham[$i]->maSanPham == $maSanPham){
                    array_splice($this->danhSachSanPham, $i, 1);
                    break;
                }
            }
        }

        function CapNhat($maSanPham, $soLuongMoi){
            if($soLuongMoi == 0){
                $this->Xoa($maSanPham);
            }

            $soPhanTu = count($this->danhSachSanPham);
            for($i = 0; $i < $soPhanTu; $i++){
                if($this->danhSachSanPham[$i]->maSanPham == $maSanPham){
                    $this->danhSachSanPham[$i]->soLuong = $soLuongMoi;
                    break;
                }
            }
        }
    }
?>