<?php
Class Company {
    private $companyName;
    private $shortName;
    private $img;

    public function __construct($companyName,$shortName,$img){
        $this->companyName=$companyName;
        $this->shortName=$shortName;
        $this->img=$img;
        
    }

    /**
     * Get the value of companyname
     */ 
    public function getCompanyName()
    {
        return $this->companyName;
    }

    /**
     * Get the value of shortname
     */ 
    public function getShortName()
    {
        return $this->shortName;
    }

    /**
     * Get the value of img
     */ 
    public function getImg()
    {
        return $this->img;
    }
}

?>