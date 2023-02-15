<?php
    session_start();
    
    include_once("../Model/Bo/Thanhvien_ThamgiaBO.php");
    include_once __DIR__ . "/../Model/Bean/Thanhvien_Thamgia.php"; 

    class Ctrl_Thanhvien_Thamgia{

        public function ListThanhvien_Thamgia(){
            $Thanhvien_ThamgiaBO = new Thanhvien_ThamgiaBO();
            $Thanhvien_ThamgiaList = $Thanhvien_ThamgiaBO->Thongkediem();
            return $Thanhvien_ThamgiaList;
        }

        public function invoke(){
            $Thanhvien_ThamgiaBO = new Thanhvien_ThamgiaBO();

            $Thanhvien_ThamgiaList = $this->ListThanhvien_Thamgia();
            include_once("../View/Thongkediem.html");
        }
    };
    $C_Thanhvien_Thamgia = new Ctrl_Thanhvien_Thamgia();
    $C_Thanhvien_Thamgia->invoke();
?>