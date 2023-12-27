<?php
require_once 'model\connexion.php';
require_once 'model\bus\modelBus.php';
class BusDAO{
    private $db;
    public function __construct(){
        $this->db = Database::getInstance()->getConnection(); 
    }

    public function get_bus(){
        $query = "SELECT * FROM bus";
        $stmt = $this->db->query($query);
        $stmt -> execute();
        $BusData = $stmt->fetchAll();
        $Bus = array();
        foreach ($BusData as $B) {
            $Bus[] = new Bus($B["busNumber"],$B["licensePlate"],$B["capacity"], $B["companyName"]);
        }
        return $Bus;

    }

    public function update_bus($bus){
        $query = "UPDATE `bus` SET `licensePlate`='".$bus->getLicensePlate()."',`capacity`='".$bus->getCapacity()."',`companyName`='".$bus->getCompanyName()."' where `busNumber`='".$bus->getBusNumber()."'";
        // echo $query;
        $stmt = $this->db->query($query);
        $stmt -> execute();
    }

    function getBusByID($busNumber) {
        $query = "SELECT * FROM bus where busNumber = $busNumber";
        $stmt = $this->db->query($query);
        $stmt -> execute();
        $B = $stmt->fetch();
     
            $Bus = new Bus($B["busNumber"],$B["licensePlate"],$B["capacity"], $B["companyName"]);
        
        return $Bus;
          
    }

    public function delete_bus($busNumber) {
        $query = "DELETE FROM `bus` WHERE `busNumber` = '$busNumber'";
        
        $stmt = $this->db->prepare($query);
        $stmt->execute();
    }

    public function insert_bus($bus) {
        $busNumber = $bus->getBusNumber();
        $licensePlate = $bus->getLicensePlate();
        $capacity = $bus->getCapacity();
        $companyName = $bus->getCompanyName();

        $query = "INSERT INTO `bus` (`busNumber`, `licensePlate`, `capacity`, `companyName`) VALUES ('$busNumber', '$licensePlate', '$capacity', '$companyName')";
        
        $stmt = $this->db->prepare($query);
        $stmt->execute();
    }



}



