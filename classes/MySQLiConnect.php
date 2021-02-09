<?php

include 'strings/language.php';

class MySQLiConnect extends mysqli {
    
    private $valid;
    private $result;
    private $row;

    public function __construct($host, $username, $pass, $db) {
        
        parent::__construct($host, $username, $pass, $db);

        if(mysqli_connect_error()){
            
            $this->valid = false;
            
        } else {
            
            $this->valid = true;
            
        }
    }
    
    public function setValid($value) {
        $this->valid = $value;
    }

    //zabezpieczenie przed 
    public function injectionSafer($value){
        return htmlentities($value, ENT_QUOTES, "UTF-8");
    }
    
    public function queryExecuter($connection, $query){
        $this->result = mysqli_query($connection, $query);
    }
    
    public function fetchDatas($value){
        $this->row = mysqli_fetch_assoc($value);
    }
    
    public function fetchAllDatas($value){
        $this->row = mysqli_fetch_all($value, MYSQLI_ASSOC);
    }
    
    public function freeFetchedDatas($value){
        mysqli_free_result($value);
    }
    
    public function rowCount($value){
        return mysqli_num_rows($value);
    }
    
    public function passwordHash($value) {
        return password_hash($value, PASSWORD_DEFAULT);
    }

    public function getResult(){
        return $this->result;
    }
    
    public function getRows(){
        return $this->row;
    }
    
    public function getValid() {
        return $this->valid;
    }
    
}