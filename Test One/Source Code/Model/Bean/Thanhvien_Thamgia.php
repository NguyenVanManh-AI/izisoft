<?php 
class Thamgia{
    public $MaTV;	
    public $MaHD;	
    public $NgayGioDangKy;	
    public $DiemTruongDoan;	
    public $DiemTieuChi1;	
    public $DiemTieuChi2;	
    public $DiemTieuChi3;	
    public $NhanXetKhac;
    public $dtb;
    public $HoTen;	
    public $GioiTinh;	
    public $NgaySinh;	
    public $DiaChiEmail;	
    public $SoDienThoai;	

    public function __construct($__MaTV,$__MaHD,$__NgayGioDangKy,$__DiemTruongDoan,$__DiemTieuChi1,$__DiemTieuChi2,$__DiemTieuChi3,$__NhanXetKhac,$__dtb,$__HoTen,$__GioiTinh,$__NgaySinh,$__DiaChiEmail,$__SoDienThoai){
        $this->MaTV = $__MaTV;
        $this->MaHD = $__MaHD;
        $this->NgayGioDangKy = $__NgayGioDangKy;
        $this->DiemTruongDoan = $__DiemTruongDoan;
        $this->DiemTieuChi1 = $__DiemTieuChi1;
        $this->DiemTieuChi2 = $__DiemTieuChi2;
        $this->DiemTieuChi3 = $__DiemTieuChi3;
        $this->NhanXetKhac = $__NhanXetKhac;
        $this->dtb = $__dtb;

        $this->HoTen = $__HoTen;
        $this->GioiTinh = $__GioiTinh;
        $this->NgaySinh = $__NgaySinh;
        $this->DiaChiEmail = $__DiaChiEmail;
        $this->SoDienThoai = $__SoDienThoai;
    }
}
?>

