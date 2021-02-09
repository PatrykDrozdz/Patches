<?php

class Strings {
    
    private $indexString;
    private $adminsString;
    private $usersString;
    private $deviceString;
    private $buildingString;
    private $mainLogedString;
    private $patchesOldString;
    private $commonPartString;
    private $firstPartString;
    private $secondPartString;

    public function __construct() {
        
        $this->indexString = "Location: index.php";
        $this->adminsString = "Location: adminpanel.php?page=admins";
        $this->usersString = "Location: adminpanel.php?page=users";
        $this->deviceString = "Location: adminpanel.php?page=devices";
        $this->buildingString = "Location: adminpanel.php?page=buildings";
        $this->mainLogedString = "Location: adminpanel.php?page=main-loged";
        $this->patchesOldString = "Location: adminpanel.php?page=patches-old";
        $this->commonPartString = "Location: adminpanel.php?page=common-part";
        $this->firstPartString = "Location: adminpanel.php?page=first-part";
        $this->secondPartString = "Location: adminpanel.php?page=second-part";
    }

    public function getIndexString() {
        return $this->indexString;
    }
    
    public function getAdminsString() {
        return $this->adminsString;
    }
    
    public function getUsersString() {
        return $this->usersString;
    }
    
    public function getDeviceString() {
        return $this->deviceString;
    }
    
    public function getBuildingsString() {
        return $this->buildingString;
    }
    
    public function getMainLogedString(){
        return $this->mainLogedString;
    }
    
    public function getMainLogedOldString() {
        return $this->patchesOldString;
    }
    
    public function getCommonPartString() {
        return $this->commonPartString;
    }
    
    public function getFirstPartString() {
        return $this->firstPartString;
    }
    
    public function getSecondPartString() {
        return $this->secondPartString;
    }
    
}
