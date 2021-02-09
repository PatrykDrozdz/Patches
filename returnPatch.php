<?php

include 'includedfiles.php';

if(isset($_POST['patch-to-return'])) {
    
    $idPatch = $_POST['patch-to-return'];
    
    $querySelectOldCommonPart = "SELECT * FROM oldcommonpart WHERE idOldCommonPart = '$idPatch'";
    
    $querySelectOldFirstPart = "SELECT * FROM oldfirstpart WHERE OldCommonPart_idOldCommonPart = '$idPatch'";
    
    $querySelectOldSecondPart = "SELECT * FROM oldsecondpart WHERE OldCommonPart_idOldCommonPart = '$idPatch'";
    
    $queryDeleteOldCommonPart = "DELETE FROM oldcommonpart WHERE idOldCommonPart = '$idPatch'";
    
    $queryDeleteOldFirstPart = "DELETE FROM oldfirstpart WHERE OldCommonPart_idOldCommonPart = '$idPatch'";
    
    $queryDeleteOldSecondPart = "DELETE FROM oldsecondpart WHERE OldCommonPart_idOldCommonPart = '$idPatch'";
    
    $oldCommonPartRows = $someFunctions->getCommonPartDatas($connection, $querySelectOldCommonPart);
    
    $oldFirstPartRows = $someFunctions->getPartsDatas($connection, $querySelectOldFirstPart, 'idOldFirstPart', 'Port1', 'OldCommonPart_idOldCommonPart');
    
    $oldSecondPartRows = $someFunctions->getPartsDatas($connection, $querySelectOldSecondPart, 'idOldSecondPart', 'Port2', 'OldCommonPart_idOldCommonPart');
    
    $oldCommonPartTable = $someFunctions->explodeParts($oldCommonPartRows, '-');
    
    $oldFirstPartTable = $someFunctions->explodeParts($oldFirstPartRows, '-');
    
    $oldSecondPartTable = $someFunctions->explodeParts($oldSecondPartRows, '-');
    
    $queryInsertCommonPart = "INSERT INTO commonpart (idCommonPart, Company, Product, VLAN, "
            . "Patchcord, ClientSocketsNo, RoomNo, ACL, Description, Action) VALUES ('$idPatch', '$oldCommonPartTable[0]', "
            . "'$oldCommonPartTable[1]', '$oldCommonPartTable[2]', '$oldCommonPartTable[3]', '$oldCommonPartTable[4]', '$oldCommonPartTable[5]', "
            . "'$oldCommonPartTable[6]', '$oldCommonPartTable[7]', '$oldCommonPartTable[8]')";
    
    $queryInsertFirstPart = "INSERT INTO firstpart (idFirstPart, Port1, Building_idBuilding, Devices_idDevices, CommonPart_idCommonPart) "
            . "VALUES ('$oldFirstPartTable[0]', '$oldFirstPartTable[1]', '$oldFirstPartTable[2]', '$oldFirstPartTable[3]', '$oldFirstPartTable[4]')";
    
    $queryInsertSecondPart = "INSERT INTO secondpart (idSecondPart, Port2, Building_idBuilding, Devices_idDevices, CommonPart_idCommonPart) "
            . "VALUES ('$oldSecondPartTable[0]', '$oldSecondPartTable[1]', '$oldSecondPartTable[2]', '$oldSecondPartTable[3]', '$oldSecondPartTable[4]')";
    
    $connection->queryExecuter($connection, $queryInsertCommonPart);
    
    $connection->queryExecuter($connection, $queryInsertFirstPart);
    
    $connection->queryExecuter($connection, $queryInsertSecondPart);
    
    $connection->queryExecuter($connection, $queryDeleteOldFirstPart);
    
    $connection->queryExecuter($connection, $queryDeleteOldSecondPart);
        
    $connection->queryExecuter($connection, $queryDeleteOldCommonPart);
    
    $adminReturnPatch = $_LANG['patchreturnedlog'].': '.$idPatch;
            
    $adminLog = "INSERT INTO logsofadmins (idLogsOfAdmins, executedQuerys, IPAddress, hourdate, 
                    AdminsTable_idAdminsLogs) VALUES (NULL, '$adminReturnPatch', '$ip', '$hourdate', '$adminId')";
            
    $connection->queryExecuter($connection, $adminLog);
            
    $_SESSION['info'] = '<span class="list-group-item list-group-item-success">'.
                $_LANG['successpatchreturned'].$idPatch.'</span>';
            
    header($strings->getMainLogedOldString());
    
}