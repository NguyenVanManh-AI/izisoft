<?php

include_once __DIR__ . "/../Bean/Thanhvien_Thamgia.php"; 
include_once "DB.php";

class Thanhvien_ThamgiaDAO {

    public $link ; 

    public function __construct(){
        $DB = new DB();
        $this->link = $DB->getConnection();
    }

    public function Thongkediem(){
        $sql = "SELECT *, (tg.DiemTruongDoan+tg.DiemTieuChi1+tg.DiemTieuChi2+tg.DiemTieuChi3)/4 as dtb 
        FROM thanhvien as tv LEFT JOIN thamgia as tg ON tv.MaTV = tg.MaTV
        ORDER BY dtb DESC";

        $rs = mysqli_query($this->link, $sql);
        $Thamgias = [];
        if ($rs->num_rows > 0) {
            while($row = $rs->fetch_assoc()) {

                $MaTV = $row['MaTV'];
                $MaHD = $row['MaHD'];
                $NgayGioDangKy = $row['NgayGioDangKy'];
                $DiemTruongDoan = $row['DiemTruongDoan'];
                $DiemTieuChi1 = $row['DiemTieuChi1'];
                $DiemTieuChi2 = $row['DiemTieuChi2'];
                $DiemTieuChi3 = $row['DiemTieuChi3'];
                $NhanXetKhac = $row['NhanXetKhac'];
                $dtb = $row['dtb'];

                $HoTen =  $row['HoTen'];
                $GioiTinh =  $row['GioiTinh'];
                $NgaySinh =  $row['NgaySinh'];
                $DiaChiEmail =  $row['DiaChiEmail'];
                $SoDienThoai =  $row['SoDienThoai'];

                $Thamgia = new Thamgia($MaTV,$MaHD,$NgayGioDangKy,$DiemTruongDoan,$DiemTieuChi1,$DiemTieuChi2,$DiemTieuChi3,$NhanXetKhac,$dtb,$HoTen,$GioiTinh,$NgaySinh,$DiaChiEmail,$SoDienThoai); 
                array_push($Thamgias,$Thamgia);
            }
        }
        return $Thamgias;
    }
}

?>

