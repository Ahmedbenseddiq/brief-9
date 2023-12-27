<?php
Class City {
    private $cityName;

public function __construct($cityName){
    $this->cityName=$cityName;
}

    /**
     * Get the value of cityname
     */ 
    public function getCityName()
    {
        return $this->cityName;
    }
}


?>
