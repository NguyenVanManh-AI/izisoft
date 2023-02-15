<?php
    session_start();
    
    include_once("../Model/Bo/HoatdongBO.php");
    include_once __DIR__ . "/../Model/Bean/Hoatdong.php"; 

    class Ctrl_Hoatdong{

        public function ListHoatdong(){
            $HoatdongBO = new HoatdongBO();
            $HoatdongList = $HoatdongBO->getAllHoatdong();
            return $HoatdongList;
        }

        public function invoke(){
            $HoatdongBO = new HoatdongBO();

            // update 
            if(isset($_GET['list_update'])){ 
                $HoatdongList = $this->ListHoatdong();
                include_once("../View/HoatdongUpdate.html");
            }
            else if(isset($_GET['form_insert'])){ 
                include_once("../View/HoatdongAdd.html");
            }
            else if(isset($_GET['MaHD'])){ 
                $Hoatdong = $HoatdongBO->getHoatdong($_GET['MaHD']);
                include_once("../View/HoatdongFormUpdate.html");
            }
            else if(isset($_GET['addnv'])){ 
                $Hoatdong = new Hoatdong(
                    0,
                    $_POST['TenHD'],
                    $_POST['MoTaHD'],
                    $_POST['NgayGioBD'],
                    $_POST['NgayGioKT'],
                    $_POST['SLToiThieuYC'],
                    $_POST['SLToiDaYC'],
                    $_POST['ThoiHanDK'],
                    1,
                    $_POST['LyDoHuyHD'] );
                $HoatdongBO->addHoatdong($Hoatdong);
                $HoatdongList = $this->ListHoatdong();
                include_once("../View/HoatdongList.html");
            }
            else if(isset($_GET['update'])){ 
                $Hoatdong = new Hoatdong(
                    $_POST['MaHD'],
                    $_POST['TenHD'],
                    $_POST['MoTaHD'],
                    $_POST['NgayGioBD'],
                    $_POST['NgayGioKT'],
                    $_POST['SLToiThieuYC'],
                    $_POST['SLToiDaYC'],
                    $_POST['ThoiHanDK'],
                    $_POST['MaTV'],
                    $_POST['LyDoHuyHD'] );
                $HoatdongBO->updateHoatdong($Hoatdong);
                $HoatdongList = $this->ListHoatdong();
                include_once("../View/HoatdongList.html");
            }

            // all 
            else {
                $HoatdongList = $this->ListHoatdong();
                include_once("../View/HoatdongList.html");
            }
        }
    };
    $C_Hoatdong = new Ctrl_Hoatdong();
    $C_Hoatdong->invoke();
?>