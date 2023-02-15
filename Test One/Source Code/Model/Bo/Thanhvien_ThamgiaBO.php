<?php 

include_once __DIR__ . "/../Bean/Thanhvien_Thamgia.php";
include_once __DIR__ . "/../Dao/Thanhvien_ThamgiaDAO.php";

class Thanhvien_ThamgiaBO {

    public $ThamgiaDAO ;

    public function __construct(){
        $this->ThamgiaDAO = new Thanhvien_ThamgiaDAO();
    }

    public function Thongkediem(){
        return $this->ThamgiaDAO->Thongkediem();
    } 
}
?>