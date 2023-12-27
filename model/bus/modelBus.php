<?php 


 
    class Bus{
        private $busNumber;
        private $licensePlate;
        private $capacity;
        private $companyName;
       



        public function __construct($busNumber, $licensePlate, $capacity, $companyName){
            $this->busNumber = $busNumber;
            $this->licensePlate = $licensePlate;
            $this->capacity = $capacity;
            $this->companyName = $companyName;
        }    

        /**
         * Get the value of busNumber
         */ 
        public function getBusNumber()
        {
                return $this->busNumber;
        }

        /**
         * Get the value of licensePlate
         */ 
        public function getLicensePlate()
        {
                return $this->licensePlate;
        }

        /**
         * Get the value of capacity
         */ 
        public function getCapacity()
        {
                return $this->capacity;
        }

        /**
         * Get the value of companyName
         */ 
        public function getCompanyName()
        {
                return $this->companyName;
        }
        }