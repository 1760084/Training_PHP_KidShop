<?php
    if(isset($_SESSION['MaTaiKhoan']) == false && isset($_SESSION['GioHang']) ==  false){
        DataProvider::ChangeURL("index.php");    
    } else {
        $gioHang = unserialize($_SESSION['GioHang']);
        
        //Xử lý trường hợp giỏ hàng rỗng
        if(count($gioHang->danhSachSanPham) == 0) {
            DataProvider::ChangeURL("index.php");
        } else {
            //Xử lý lưu giỏ hàng vào DB
            $curDate = date('Y-m-d');

            $sql = "SELECT MaDonDatHang FROM DonDatHang WHERE NgayLap = '$curDate' ORDER BY MaDonDatHang DESC LIMIT 0,1";
            $result = DataProvider::ExecuteQuery($sql);
            $row = mysqli_fetch_array($result);
            
            $sttDonDatHang = 0;
            if($row){
                $sttDonDatHang = intval(substr($row["MaDonDatHang"],6,3)) + 1;
            }

            //Tạo MaDonDatHang mới
            $maDonDatHang = date('ymd').sprintf("%03d", $sttDonDatHang);

            $maTaiKhoan = $_SESSION['MaTaiKhoan'];
            $tongThanhTien = $_SESSION['TongThanhTien'];
            
            //Lưu Đơn đặt hàng mới xuống DB
            $sql = "INSERT INTO DonDatHang(MaDonDatHang, NgayLap, TongThanhTien, MaTaiKhoan, MaTinhTrang) VALUES ('$maDonDatHang','$curDate',$tongThanhTien,$maTaiKhoan,1)";
            DataProvider::ExecuteQuery($sql);

            //Xử lý lưu chi tiết đơn đặt hàng xuống DB
            $sttChiTietDonDatHang = 0;
            foreach($gioHang->danhSachSanPham as $item){
                $maChiTietDonDatHang = $maDonDatHang.sprintf("%02d", $sttChiTietDonDatHang);
                $maSanPham = $item->maSanPham;
                $soLuong = $item->soLuong;

                $sql = "SELECT GiaSanPham FROM SanPham WHERE MaSanPham = $maSanPham";
                $result = DataProvider::ExecuteQuery($sql);
                $row = mysqli_fetch_array($result);

                $giaBan = $row["GiaSanPham"];

                //Lưu chi tiết đơn đặt hàng xuống CSDL
                $sql = "INSERT INTO ChiTietDonDatHang(MaChiTietDonDatHang, SoLuong, GiaBan, MaDonDatHang, MaSanPham) VALUES('$maChiTietDonDatHang',$soLuong,$giaBan,'$maDonDatHang',$maSanPham)";
                DataProvider::ExecuteQuery($sql);
                
                $sttChiTietDonDatHang++;    
            }

            //Xoá giỏ hàng
            unset($_SESSION['GioHang']);

            DataProvider::ChangeURL('index.php?a=6');
        }
    }
?>