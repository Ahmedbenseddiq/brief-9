<?php
require_once 'model\connexion.php';
require_once 'model\road\modelRoad.php';
class RoadDAO{
    private $db;
    public function __construct(){
        $this->db = Database::getInstance()->getConnection(); 
    }

    public function get_road(){
        $query = "SELECT * FROM road";
        $stmt = $this->db->query($query);
        $stmt -> execute();
        $RoadData = $stmt->fetchAll();
        $Road = array();
        foreach ($RoadData as $R) {
            $Road[] = new Road($R["distance"],$R["duration"],$R["startcity"], $R["endcity"]);
        }
        return $Road;

    }

    public function update_road($road){
    $query = "UPDATE `road` SET `distance`='".$road->getDistance()."', `duration`='".$road->getDuration()."' WHERE `startcity`='".$road->getStartcity()."' AND `endcity`='".$road->getEndcity()."'";

        // echo $query;
        $stmt = $this->db->query($query);
        $stmt -> execute();
    }

    function getRoadByID($startcity,$endcity) {
        $query = "SELECT * FROM road WHERE startcity = '$startcity' AND endcity = '$endcity'";

        $stmt = $this->db->query($query);
        $stmt -> execute();
        $R = $stmt->fetch();
     
            $Road = new Road($R["distance"],$R["duration"],$R["startcity"], $R["endcity"]);
        
        return $Road;
          
    }

    public function insert_road($road) {
        $distance = $road->getDistance();
        $duration = $road->getDuration();
        $startcity = $road->getStartcity();
        $endcity = $road->getEndcity();

        $query = "INSERT INTO `road` (`distance`, `duration`, `startcity`, `endcity`) VALUES ('$distance', '$duration', '$startcity', '$endcity')";
        
        $stmt = $this->db->prepare($query);
        $stmt->execute();
    }

    public function delete_road($startcity, $endcity) {
        $query = "DELETE FROM `road` WHERE `startcity` = '$startcity' AND `endcity` = '$endcity'";
        
        $stmt = $this->db->prepare($query);
        $stmt->execute();
    }



}



