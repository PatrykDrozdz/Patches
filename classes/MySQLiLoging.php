<?php

include 'classes/MySQLiConnect.php';

class MySQLiLoging extends MySQLiConnect{
    
    private $result;
    
    //sprawdzanie hasła
    public function checkPass($pass, $passFromDB){
        
        if(password_verify($pass, $passFromDB)){
            return true;
        } else {
            return false;
        }
        
    }
    
    public function queryLog($connection, $query, $log){
        
        $this->result = mysqli_query($connection,
                    sprintf($query,
                    mysqli_real_escape_string($connection, $log)));
        
        if($this->result){
            return true;
        } else {
            return false;
        }

    }
    
    public function getResultLog() {
        return $this->result;
    }

    public function logInto($result){
        
        $row = mysqli_fetch_assoc($result);
        
        $_SESSION['adminPatches'] = true;
        $_SESSION['idAdminsLogs'] = $row['idAdminsLogs'];//pobieranie Id użytkownika
        $_SESSION['loginAdmin'] = $row['loginAdmin'];
        $_SESSION['passAdmin'] = $row['passAdmin'];
        echo  $_SESSION['idAdminsLogs'];

        unset($_SESSION['error']);

        //header('Location: adminpanel.php');
        
        mysqli_free_result($result);
            
    }
    
    public function logError($connection){
        
        unset($_SESSION['registered']);
        unset($_SESSION['login']);
        unset($_SESSION['pass']);

        session_unset();

        $_SESSION['error'] = '<span class="error">'.$this->getString('accoutdeleted').'</span>';		
        header($connection->getIndexString());
        
    }
    
}