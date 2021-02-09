<?php

require_once 'includedfiles.php';

if(isset($_POST['new-admin-login']) 
        && isset($_POST['new-admin-pass']) 
        && isset($_POST['new-admin-pass-2'])) {
    
    $adminLogin = $_POST['new-admin-login'];
    $adminPass1 = $_POST['new-admin-pass'];
    $adminPass2 = $_POST['new-admin-pass-2'];
    
    $passLength = $mathFun->stringLenght($adminPass1);
    
    if($mathFun->inequality(5, $passLength)==true || 
                $mathFun->inequality($passLength, 15)==true) {
        
        $connection->setValid(FALSE);
        
        $_SESSION['error'] = '<span class="list-group-item list-group-item-danger"'
            . '>'.$_LANG['errorpasslenght'].'</span>';
        header($strings->getAdminsString());
            
    }
    
    if($mathFun->equality($adminPass1, $adminPass2)==FALSE) {
        
        $connection->setValid(FALSE);
        
        $_SESSION['error'] = '<span class="list-group-item list-group-item-danger"'
                . '>'.$_LANG['errorpassdifferent'].'</span>';
        header($strings->getAdminString());
        
    }
    
    $passHash = $connection->passwordHash($adminPass1);
    
    $safer = $connection->injectionSafer($adminLogin);
    
    $queryCheck = sprintf("SELECT * FROM adminstable WHERE loginAdmin='%s'", 
                    mysqli_real_escape_string($connection, $safer));
    
    $connection->queryExecuter($connection, $queryCheck);
    
    $result = $connection->getResult();
    
    $howManyAdmins = $connection->rowCount($result);
    
    if($mathFun->equality(0, $howManyAdmins) == FALSE) {
        
        $connection->setValid(FALSE);
        
        $_SESSION['error'] = '<span class="list-group-item list-group-item-danger"'
                . '>'.$_LANG['erroradminexistes'].'</span>';
        header($strings->getAdminsString());
        
    }
  
    if($connection->getValid()==true) {
        
        $connection->queryExecuter($connection, "INSERT INTO adminstable "
                . "(idAdminsTable, loginAdmin, passAdmin) VALUES"
                . "('NULL', '$adminLogin', '$passHash')");
        
        $adminAddAdmin = $_LANG['logadminadded'].': '.$adminLogin;
            
        $adminLog = "INSERT INTO logsofadmins(idLogsOfAdmins, "
                            . "executedQuerys, IPAddress, hourdate, AdminsTable_idAdminsLogs)"
                            . "VALUES(NULL, '$adminAddAdmin', '$ip', '$hourdate', '$adminId')";
                    
        $connection->queryExecuter($connection, $adminLog);
            
        $_SESSION['info'] = '<span class="list-group-item list-group-item-success">'.
                $_LANG['successadminadded'].$adminLogin.'</span>';
            
        header($strings->getAdminsString());
        
    }
    
}
