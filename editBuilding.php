<?php

include 'includedfiles.php';

if(isset($_POST['edit-building-id']) && isset($_POST['edit-building'])) {
    
    $editBuildingName = $_POST['edit-building'];
    $editBuildingId = $_POST['edit-building-id'];
    
    $queryCheck = "SELECT * FROM building WHERE BuildingName = '$editBuildingName'";
    
    $connection->queryExecuter($connection, $queryCheck);
    
    $result = $connection->getResult();
    
    $howManyBuildings = $connection->rowCount($result);

    if($mathFun->equality(0, $howManyBuildings) == FALSE) {
        
        $connection->setValid(FALSE);
        
        $_SESSION['error'] = '<span class="list-group-item list-group-item-danger"'
                . '>'.$_LANG['errorbuildingexistes'].'</span>';
        header($strings->getBuildingsString());
        
    }
    
    if($connection->getValid()==TRUE) {
        
        $buildingUpdate = "UPDATE building SET BuildingName = '$editBuildingName' "
                . "WHERE idBuilding = '$editBuildingId'";
        
        $connection->queryExecuter($connection, $buildingUpdate);
        
        $adminUpdateBuilding = $_LANG['logbuildingupdated'].': '.$editBuildingId;
            
        $adminLog = "INSERT INTO logsofadmins(idLogsOfAdmins, "
                            . "executedQuerys, IPAddress, hourdate, AdminsTable_idAdminsLogs)"
                            . "VALUES(NULL, '$adminUpdateBuilding', '$ip', '$hourdate', '$adminId')";
                    
        $connection->queryExecuter($connection, $adminLog);
            
        $_SESSION['info'] = '<span class="list-group-item list-group-item-success">'.
                $_LANG['successbuildingupdated'].$editBuildingName.'</span>';
            
        header($strings->getBuildingsString());
        
    }
    
}

