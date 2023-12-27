<?php
require_once 'model\connexion.php';
require_once 'model\city\modelCity.php';
class CityDAO{
    private $db;
    public function __construct(){
        $this->db = Database::getInstance()->getConnection(); 
    }

    public function get_city(){
        $query = "SELECT * FROM city";
        $stmt = $this->db->query($query);
        $stmt -> execute();
        $cityData = $stmt->fetchAll();
        $City = array();
        foreach ($cityData as $C) {
            $City[] = new City($C["city_name"]);
        
        }
        return $City;
    }

    public function insert_city($city) {
        $cityName = $city->getCityName();

        $query = "INSERT INTO `city` (`city_name`) VALUES ('$cityName')";
        
        $stmt = $this->db->prepare($query);
        $stmt->execute();
    }

    public function delete_city($cityName) {
        $query = "DELETE FROM `city` WHERE `city_name` = '$cityName'";
        
        $stmt = $this->db->prepare($query);
        $stmt->execute();
    }



}