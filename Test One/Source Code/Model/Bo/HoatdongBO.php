<?php 

include_once __DIR__ . "/../Bean/Hoatdong.php";
include_once __DIR__ . "/../Dao/HoatdongDAO.php";

class HoatdongBO {

    public $HoatdongDAO ;

    public function __construct(){
        $this->HoatdongDAO = new HoatdongDAO();
    }

    public function getAllHoatdong(){
        return $this->HoatdongDAO->getAllHoatdong();
    } 

    public function getHoatdong($id){
        return $this->HoatdongDAO->getHoatdong($id);
    } 

    public function updateHoatdong(Hoatdong $Hoatdong){
        return $this->HoatdongDAO->updateHoatdong($Hoatdong);
    }

    public function addHoatdong(Hoatdong $Hoatdong){
        return $this->HoatdongDAO->addHoatdong($Hoatdong);
    }
}
?>