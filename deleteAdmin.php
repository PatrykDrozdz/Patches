<?php

require_once 'includedfiles.php';

if(isset($_POST['admin-delete-confirm']) && isset($_POST['admin-login-to-delete'])){
    
    $adminToDelete = $_POST['admin-login-to-delete'];
    
    $selectQuery = "SELECT * FROM adminstable WHERE loginAdmin = '$adminToDelete'";
    
    $connection->queryExecuter($connection, $selectQuery);
    
    $result = $connection->getResult();
    
    $connection->fetchDatas($result);
    
    $row = $connection->getRows();
    
    $adminToDeleteId = $row['idAdminsTable'];

    $connection->freeFetchedDatas($result);
    
    $deleteQueryLogs = "DELETE FROM logsofadmins WHERE AdminsTable_idAdminsLogs = '$adminToDeleteId'";
        
    $connection->queryExecuter($connection, $deleteQueryLogs);
    
    $deleteQuery = "DELETE FROM adminstable WHERE idAdminsTable = '$adminToDeleteId'";
    
    $connection->queryExecuter($connection, $deleteQuery);
    
    $adminDelAdmin = $_LANG['logadmindeleted'].': '.$adminToDelete;
    
    $adminLog = "INSERT INTO logsofadmins(idLogsOfAdmins, "
                            . "executedQuerys, IPAddress, hourdate, AdminsTable_idAdminsLogs)"
                            . "VALUES(NULL, '$adminDelAdmin', '$ip', '$hourdate', '$adminId')";
                    
    $connection->queryExecuter($connection, $adminLog);
            
    $_SESSION['info'] = '<span class="list-group-item list-group-item-success">'.
            $_LANG['successadmindeleted'].$adminToDelete.'</span>';
            
    header($strings->getAdminsString());
    
}

