<?php
require_once 'model\connexion.php';
require_once 'model\road\modelRoad.php';
class ScheduleDAO{
    private $db;
    public function __construct(){
        $this->db = Database::getInstance()->getConnection(); 
    }



    public function insert_schedule($schedule) {
        $date = $schedule->getDate();
        $departureTime = $schedule->getDepartureTime();
        $arrivalTime = $schedule->getArrivalTime();
        $availableSeats = $schedule->getAvailableSeats();
        $price = $schedule->getPrice();
        $busNumber = $schedule->getBusNumber();
        $startCity = $schedule->getStartCity();
        $endCity = $schedule->getEndCity();
    
        $query = "INSERT INTO `schedul` (`date`, `departureTime`, `arrivalTime`, `availableSeats`, `price`, `busNumber`, `startCity`, `endCity`) VALUES ('$date', '$departureTime', '$arrivalTime', '$availableSeats', '$price', '$busNumber', '$startCity', '$endCity')";
        
        $stmt = $this->db->prepare($query);
        $stmt->execute();
    }
    
    public function update_schedule($schedule) {
        $id = $schedule->getId();
        $date = $schedule->getDate();
        $departureTime = $schedule->getDepartureTime();
        $arrivalTime = $schedule->getArrivalTime();
        $availableSeats = $schedule->getAvailableSeats();
        $price = $schedule->getPrice();
        $busNumber = $schedule->getBusNumber();
        $startCity = $schedule->getStartCity();
        $endCity = $schedule->getEndCity();
    
        $query = "UPDATE `schedule` SET `date` = '$date', `departureTime` = '$departureTime', `arrivalTime` = '$arrivalTime', `availableSeats` = '$availableSeats', `price` = '$price', `busNumber` = '$busNumber', `startCity` = '$startCity', `endCity` = '$endCity' WHERE `id` = '$id'";
        
        $stmt = $this->db->prepare($query);
        $stmt->execute();
    }
    
    public function delete_schedule($id) {
        $query = "DELETE FROM `schedule` WHERE `id` = '$id'";
        
        $stmt = $this->db->prepare($query);
        $stmt->execute();
    }
    

    



}



