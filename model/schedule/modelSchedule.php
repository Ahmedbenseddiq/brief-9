<?php
Class Schedule{
    private $id;
    private $date;
    private $departureTime;
    private $arrivalTime;
    private $availableSeats;
    private $price;
    private $busNumber;
    private $startCity;
    private $endCity;
    public function __construct($id,$date,$departureTime,$arrivalTime,$availableSeats,$price,$busNumber,$startCity,$endCity){
        $this->id = $id;
        $this->date = $date;
        $this->departureTime =$departureTime;
        $this->arrivalTime =$arrivalTime;
        $this->availableSeats = $availableSeats;
        $this->price = $price;
        $this->busNumber = $busNumber;
        $this->startCity = $startCity;
        $this->endCity = $endCity;
    }

    /**
     * Get the value of id
     */ 
    public function getId()
    {
        return $this->id;
    }

    /**
     * Get the value of date
     */ 
    public function getDate()
    {
        return $this->date;
    }

    /**
     * Get the value of departuretime
     */ 
    public function getDepartureTime()
    {
        return $this->departureTime;
    }

    /**
     * Get the value of arrivaltime
     */ 
    public function getArrivalTime()
    {
        return $this->arrivalTime;
    }

    /**
     * Get the value of availableseats
     */ 
    public function getAvailableSeats()
    {
        return $this->availableSeats;
    }

    /**
     * Get the value of price
     */ 
    public function getPrice()
    {
        return $this->price;
    }

    /**
     * Get the value of busnumber
     */ 
    public function getBusNumber()
    {
        return $this->busNumber;
    }

    /**
     * Get the value of startcity
     */ 
    public function getStartCity()
    {
        return $this->startCity;
    }

    /**
     * Get the value of endcity
     */ 
    public function getEndCity()
    {
        return $this->endCity;
    }
}
?>
