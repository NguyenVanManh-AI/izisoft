<?php

include_once __DIR__ . "/../Bean/Hoatdong.php"; 
include_once "DB.php";

class HoatdongDAO {

    public $link ; 

    public function __construct(){
        $DB = new DB();
        $this->link = $DB->getConnection();
    }
    public function getAllHoatdong(){
        $sql = "select * from Hoatdong";
        $rs = mysqli_query($this->link, $sql);
        $Hoatdongs = [];
        if ($rs->num_rows > 0) {
            while($row = $rs->fetch_assoc()) {
                $MaHD = $row['MaHD'];
                $TenHD = $row['TenHD'];
                $MoTaHD = $row['MoTaHD'];
                $NgayGioBD = $row['NgayGioBD'];
                $NgayGioKT = $row['NgayGioKT'];
                $SLToiThieuYC = $row['SLToiThieuYC'];
                $SLToiDaYC = $row['SLToiDaYC'];
                $ThoiHanDK = $row['ThoiHanDK'];
                $MaTV = $row['MaTV'];
                $LyDoHuyHD = $row['LyDoHuyHD'];
                $Hoatdong = new Hoatdong($MaHD,$TenHD,$MoTaHD,$NgayGioBD,$NgayGioKT,$SLToiThieuYC,$SLToiDaYC,$ThoiHanDK,$MaTV,$LyDoHuyHD); 
                array_push($Hoatdongs,$Hoatdong);
            }
        }
        return $Hoatdongs;
    }

    public function getHoatdong($id){
        $sql = "select * from Hoatdong where MaHD = '$id'";
        $rs = mysqli_query($this->link, $sql);
        if ($rs->num_rows > 0) {
            $row = $rs->fetch_assoc();
            $MaHD = $row['MaHD'];
            $TenHD = $row['TenHD'];
            $MoTaHD = $row['MoTaHD'];
            $NgayGioBD = $row['NgayGioBD'];
            $NgayGioKT = $row['NgayGioKT'];
            $SLToiThieuYC = $row['SLToiThieuYC'];
            $SLToiDaYC = $row['SLToiDaYC'];
            $ThoiHanDK = $row['ThoiHanDK'];
            $MaTV = $row['MaTV'];
            $LyDoHuyHD = $row['LyDoHuyHD'];
            $Hoatdong = new Hoatdong($MaHD,$TenHD,$MoTaHD,$NgayGioBD,$NgayGioKT,$SLToiThieuYC,$SLToiDaYC,$ThoiHanDK,$MaTV,$LyDoHuyHD); 
        }
        return $Hoatdong;
    }

    public function updateHoatdong(Hoatdong $Hoatdong){
        $sql = "UPDATE Hoatdong SET MoTaHD = '$Hoatdong->MoTaHD',NgayGioBD = '$Hoatdong->NgayGioBD',NgayGioKT = '$Hoatdong->NgayGioKT',TenHD = '$Hoatdong->TenHD',SLToiThieuYC = '$Hoatdong->SLToiThieuYC',SLToiDaYC = '$Hoatdong->SLToiDaYC',ThoiHanDK = '$Hoatdong->ThoiHanDK',MaTV = '$Hoatdong->MaTV',LyDoHuyHD = '$Hoatdong->LyDoHuyHD' WHERE MaHD='$Hoatdong->MaHD'";
        $rs = mysqli_query($this->link, $sql);
    }

    public function addHoatdong(Hoatdong $Hoatdong){
        $sql = "INSERT Hoatdong SET MoTaHD = '$Hoatdong->MoTaHD',NgayGioBD = '$Hoatdong->NgayGioBD',NgayGioKT = '$Hoatdong->NgayGioKT',TenHD = '$Hoatdong->TenHD',SLToiThieuYC = '$Hoatdong->SLToiThieuYC',SLToiDaYC = '$Hoatdong->SLToiDaYC',ThoiHanDK = '$Hoatdong->ThoiHanDK',MaTV = '$Hoatdong->MaTV',LyDoHuyHD = '$Hoatdong->LyDoHuyHD'";
        $rs = mysqli_query($this->link, $sql);
    }
}

?>