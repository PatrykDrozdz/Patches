<?php

require_once 'includedfiles.php';

if(isset($_POST['edit-admin-login']) 
        && isset($_POST['edit-admin-pass']) 
        && isset($_POST['edit-admin-pass-2']) 
        && isset($_POST['edit-admin-id'])) {
    
    $adminLogin = $_POST['edit-admin-login'];
    $adminPass1 = $_POST['edit-admin-pass'];
    $adminPass2 = $_POST['edit-admin-pass-2'];
    $adminIDEdit = $_POST['edit-admin-id'];
    
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
        header($strings->getAdminsString());
        
    }
    
    $passHash = $connection->passwordHash($adminPass1);
    
    $safer = $connection->injectionSafer($adminLogin);
    
    $queryCheck = sprintf("SELECT * FROM adminstable WHERE loginAdmin='%s' AND "
            . "idAdminsTable <> '$adminIDEdit'", 
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
        
        $connection->queryExecuter($connection, "UPDATE adminstable "
                . "SET loginAdmin = '$adminLogin', passAdmin = '$passHash' "
                . "WHERE idAdminsTable = '$adminIDEdit'");
        
        $adminUpdateAdmin = $_LANG['logadminupdated'].': '.$adminIDEdit;
            
        $adminLog = "INSERT INTO logsofadmins(idLogsOfAdmins, "
                            . "executedQuerys, IPAddress, hourdate, AdminsTable_idAdminsLogs)"
                            . "VALUES(NULL, '$adminUpdateAdmin', '$ip', '$hourdate', '$adminId')";
                    
        $connection->queryExecuter($connection, $adminLog);
            
        $_SESSION['info'] = '<span class="list-group-item list-group-item-success">'.
                $_LANG['successadminupdated'].$adminLogin.'</span>';
            
        header($strings->getAdminsString());
        
    }
    
}