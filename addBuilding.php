<?php

include 'includedfiles.php';

if(isset($_POST['add-building'])) {
    
    $newBuildingName = $_POST['add-building'];
    
    $queryCheck = "SELECT * FROM building WHERE BuildingName = '$newBuildingName'";
    
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
        
        $buildingInsert = "INSERT INTO building (idBuilding, BuildingName) VALUES "
                . "('NULL', '$newBuildingName')";
        
        $connection->queryExecuter($connection, $buildingInsert);
        
        $adminAddBuilding = $_LANG['logbuildingadded'].': '.$newBuildingName;
            
        $adminLog = "INSERT INTO logsofadmins(idLogsOfAdmins, "
                            . "executedQuerys, IPAddress, hourdate, AdminsTable_idAdminsLogs)"
                            . "VALUES(NULL, '$adminAddBuilding', '$ip', '$hourdate', '$adminId')";
                    
        $connection->queryExecuter($connection, $adminLog);
            
        $_SESSION['info'] = '<span class="list-group-item list-group-item-success">'.
                $_LANG['successbuildingadded'].$newBuildingName.'</span>';
            
        header($strings->getBuildingsString());
        
    }
    
}