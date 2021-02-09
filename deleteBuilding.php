<?php

include 'includedfiles.php';

if(isset($_POST['building-to-delete'])) {
    
    $idBuilding = $_POST['building-to-delete'];
    
    $queryDeleteBuilding = "DELETE FROM building WHERE idBuilding = '$idBuilding'";
    
    $queryDeleteFirstPartBuilding = "DELETE FROM firstpart WHERE Building_idBuilding = '$idBuilding'";
    
    $queryDeleteSecondPartBuilding = "DELETE FROM secondpart WHERE Building_idBuilding = '$idBuilding'";
    
    $queryDeleteOldFirstPartBuilding = "DELETE FROM oldfirstpart WHERE Building_idBuilding = '$idBuilding'";
    
    $queryDeleteOldSecondPartBuilding = "DELETE FROM oldsecondpart WHERE Building_idBuilding = '$idBuilding'";
    
    $connection->queryExecuter($connection, $queryDeleteFirstPartBuilding);
    
    $connection->queryExecuter($connection, $queryDeleteSecondPartBuilding);
    
    $connection->queryExecuter($connection, $queryDeleteOldFirstPartBuilding);
    
    $connection->queryExecuter($connection, $queryDeleteOldSecondPartBuilding);
    
    $connection->queryExecuter($connection, $queryDeleteBuilding);
    
    $adminDeleteBuilding = $_LANG['logbuildingdeleted'].': '.$idBuilding;
            
    $adminLog = "INSERT INTO logsofadmins(idLogsOfAdmins, "
                            . "executedQuerys, IPAddress, hourdate, AdminsTable_idAdminsLogs)"
                            . "VALUES(NULL, '$adminDeleteBuilding', '$ip', '$hourdate', '$adminId')";
                    
    $connection->queryExecuter($connection, $adminLog);
            
    $_SESSION['info'] = '<span class="list-group-item list-group-item-success">'.
        $_LANG['successbuildingdeleted'].$idBuilding.'</span>';
            
    header($strings->getBuildingsString());
    
}