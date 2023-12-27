<?php
require_once 'model\connexion.php';
require_once 'model\company\modelCompany.php';
class CompanyDAO{
    private $db;
    public function __construct(){
        $this->db = Database::getInstance()->getConnection(); 
    }

    public function get_bus(){
        $query = "SELECT * FROM company";
        $stmt = $this->db->query($query);
        $stmt -> execute();
        $CompanyData = $stmt->fetchAll();
        $Company = array();
        foreach ($CompanyData as $Co) {
            $Company[] = new Company($Co["companyName"],$Co["shortName"],$Co["img"]);
        }
        return $Company;

    }

    public function update_bus($company){
        $query = "UPDATE `company` SET `shortName`='".$company->getShortName()."', `img`='".$company->getImg()."' WHERE `companyName`='".$company->getCompanyName()."'";
        // print_r($query);
        // die();  
        $stmt = $this->db->query($query);
        $stmt -> execute();
    }

    function getBusByID($companyName) {
        $query = "SELECT * FROM company where companyName = $companyName";
        $stmt = $this->db->query($query);
        $stmt -> execute();
        $Co = $stmt->fetch();
     
            $Company = new Company($Co["companyName"],$Co["shortName"],$Co["img"]);
        
        return $Company;
          
    }

    public function insert_company($company) {
        $companyName = $company->getCompanyName();
        $shortName = $company->getShortName();
        $img = $company->getImg();

        $query = "INSERT INTO `company` (`companyName`, `shortName`, `img`) VALUES ('$companyName', '$shortName', '$img')";
        
        $stmt = $this->db->prepare($query);
        $stmt->execute();
    }

    public function delete_company($companyName) {
        $query = "DELETE FROM `company` WHERE `companyName` = '$companyName'";
        
        $stmt = $this->db->prepare($query);
        $stmt->execute();
    }



}



