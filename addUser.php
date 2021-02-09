<?php

require_once 'includedfiles.php';

if(isset($_POST['new-user-login']) 
        && isset($_POST['new-user-pass']) 
        && isset($_POST['new-user-pass-2'])) {
    
    $userLogin = $_POST['new-user-login'];
    $userPass1 = $_POST['new-user-pass'];
    $userPass2 = $_POST['new-user-pass-2'];
    
    $passLength = $mathFun->stringLenght($userPass1);
    
    if($mathFun->inequality(5, $passLength)==true || 
                $mathFun->inequality($passLength, 15)==true) {
        
        $_SESSION['error'] = '<span class="list-group-item list-group-item-danger"'
            . '>'.$_LANG['errorpasslenght'].'</span>';
        header($connection->getUsersString());
            
    }
    
    if($mathFun->equality($userPass1, $userPass2)==FALSE) {
        
        $connection->setValid(FALSE);
        
        $_SESSION['error'] = '<span class="list-group-item list-group-item-danger"'
                . '>'.$_LANG['errorpassdifferent'].'</span>';
        header($connection->getUsersString());
        
    }
    
    $passHash = $connection->passwordHash($userPass1);
    
    $safer = $connection->injectionSafer($userLogin);
    
    $queryCheck = sprintf("SELECT * FROM userstable WHERE loginUser = '%s'", 
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
        
        $connection->queryExecuter($connection, "INSERT INTO userstable "
                . "(idUsersTable, loginUser, passUser) VALUES"
                . "('NULL', '$userLogin', '$passHash')");
        
        $adminAddUser = $_LANG['loguseradded'].': '.$userLogin;
            
        $adminLog = "INSERT INTO logsofadmins (idLogsOfAdmins, executedQuerys, IPAddress, hourdate, 
                    AdminsTable_idAdminsLogs) VALUES (NULL, '$adminAddUser', '$ip', '$hourdate', '$adminId')";
                    
        $connection->queryExecuter($connection, $adminLog);
            
        $_SESSION['info'] = '<span class="list-group-item list-group-item-success">'.
                $_LANG['successuseradded'].$userLogin.'</span>';
            
        header($strings->getUsersString());
        
    }
    
}