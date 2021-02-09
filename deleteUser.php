<?php

require_once 'includedfiles.php';

if(isset($_POST['user-delete-confirm']) && isset($_POST['user-login-to-delete'])){
    
    $userToDelete = $_POST['user-login-to-delete'];
    
    $selectQuery = "SELECT * FROM userstable WHERE loginUser = '$userToDelete'";
    
    $connection->queryExecuter($connection, $selectQuery);
    
    $result = $connection->getResult();
    
    $connection->fetchDatas($result);
    
    $row = $connection->getRows();
    
    $userToDeleteId = $row['idUsersTable'];
    
    $connection->freeFetchedDatas($result);
    
    $deleteQueryLogs = "DELETE FROM logsofusers WHERE UsersTable_idUsersLogs = '$userToDeleteId'";
        
    $connection->queryExecuter($connection, $deleteQueryLogs);
    
    $deleteQuery = "DELETE FROM userstable WHERE idUsersTable = '$userToDeleteId'";
    
    $connection->queryExecuter($connection, $deleteQuery);
    
    $adminDelUser = $_LANG['loguserdeleted'].': '.$userToDelete;
    
    $adminLog = "INSERT INTO logsofadmins(idLogsOfAdmins, "
                            . "executedQuerys, IPAddress, hourdate, AdminsTable_idAdminsLogs)"
                            . "VALUES(NULL, '$adminDelUser', '$ip', '$hourdate', '$adminId')";
                    
    $connection->queryExecuter($connection, $adminLog);
            
    $_SESSION['info'] = '<span class="list-group-item list-group-item-success">'.
            $_LANG['successuserdeleted'].$userToDelete.'</span>';
            
    header($strings->getUsersString());
    
}

