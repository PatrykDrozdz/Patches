<?php

require_once 'includedfiles.php';

if(isset($_POST['edit-user-login']) 
        && isset($_POST['edit-user-pass']) 
        && isset($_POST['edit-user-pass-2']) 
        && isset($_POST['edit-user-id'])) {
    
    $userLogin = $_POST['edit-user-login'];
    $userPass1 = $_POST['edit-user-pass'];
    $userPass2 = $_POST['edit-user-pass-2'];
    $userIDEdit = $_POST['edit-user-id'];
    
    $passLength = $mathFun->stringLenght($userPass1);
    
    if($mathFun->inequality(5, $passLength)==true || 
                $mathFun->inequality($passLength, 15)==true) {
        
        $connection->setValid(FALSE);
        
        $_SESSION['error'] = '<span class="list-group-item list-group-item-danger"'
            . '>'.$_LANG['errorpasslenght'].'</span>';
        header($strings->getUsersString());
            
    }
    
    if($mathFun->equality($userPass1, $userPass2)==FALSE) {
        
        $connection->setValid(FALSE);
        
        $_SESSION['error'] = '<span class="list-group-item list-group-item-danger"'
                . '>'.$_LANG['errorpassdifferent'].'</span>';
        header($strings->getUsersString());
        
    }
    
    $passHash = $connection->passwordHash($userPass1);
    
    $safer = $connection->injectionSafer($userLogin);
    
    $queryCheck = sprintf("SELECT * FROM userstable WHERE loginUser ='%s' AND "
            . "idUsersTable <> '$userIDEdit'", 
                    mysqli_real_escape_string($connection, $safer));
    
    $connection->queryExecuter($connection, $queryCheck);
    
    $result = $connection->getResult();
    
    $howManyUsers = $connection->rowCount($result);
    
    if($mathFun->equality(0, $howManyUsers) == FALSE) {
        
        $connection->setValid(FALSE);
        
        $_SESSION['error'] = '<span class="list-group-item list-group-item-danger"'
                . '>'.$_LANG['erroruserexistes'].'</span>';
        header($strings->getUsersString());
        
    }
  
    if($connection->getValid()==true) {
        
        $connection->queryExecuter($connection, "UPDATE userstable "
                . "SET loginUser = '$userLogin', passUser = '$passHash' "
                . "WHERE idUsersTable = '$userIDEdit'");
        
        $adminUpdateUser = $_LANG['loguserupdated'].': '.$userIDEdit;
            
        $adminLog = "INSERT INTO logsofadmins(idLogsOfAdmins, "
                            . "executedQuerys, IPAddress, hourdate, AdminsTable_idAdminsLogs)"
                            . "VALUES(NULL, '$adminUpdateUser', '$ip', '$hourdate', '$adminId')";
            
        $connection->queryExecuter($connection, $adminLog);
            
        $_SESSION['info'] = '<span class="list-group-item list-group-item-success">'.
                $_LANG['successuserupdated'].$adminLogin.'</span>';
            
        header($strings->getUsersString());
        
    }
    
}