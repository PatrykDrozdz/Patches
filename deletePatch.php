<?php

include 'includedfiles.php';

if(isset($_POST['patch-to-delete'])) {
    
    $idCommonPart = $_POST['patch-to-delete'];
    
    $querySelectCommonPart = "SELECT * FROM commonpart WHERE idCommonPart = '$idCommonPart'";
    
    $querySelectFirstPart = "SELECT * FROM firstpart WHERE CommonPart_idCommonPart = '$idCommonPart'";
    
    $querySelectSecondPart = "SELECT * FROM secondpart WHERE CommonPart_idCommonPart = '$idCommonPart'";
    
    $queryDeleteCommonPart = "DELETE FROM commonpart WHERE idCommonPart = '$idCommonPart'";
    
    $queryDeleteFirstPart = "DELETE FROM firstpart WHERE CommonPart_idCommonPart = '$idCommonPart'";
    
    $queryDeleteSecondPart = "DELETE FROM secondpart WHERE CommonPart_idCommonPart = '$idCommonPart'";
    
    $commonPartRows = $someFunctions->getCommonPartDatas($connection, $querySelectCommonPart);
    
    $firstPartRows = $someFunctions->getPartsDatas($connection, $querySelectFirstPart, 'idFirstPart', 'Port1', 'CommonPart_idCommonPart');
    
    $secondPartRows = $someFunctions->getPartsDatas($connection, $querySelectSecondPart, 'idSecondPart', 'Port2', 'CommonPart_idCommonPart');
    
    $commonPartTable = $someFunctions->explodeParts($commonPartRows, '-');
    
    $firstPartTable = $someFunctions->explodeParts($firstPartRows, '-');
    
    $secondPartTable = $someFunctions->explodeParts($secondPartRows, '-');
    
    $queryInsertOldCommonPart = "INSERT INTO oldcommonpart (idOldCommonPart, Company, Product, VLAN, "
            . "Patchcord, ClientSocketsNo, RoomNo, ACL, Description, Action) VALUES ('$idCommonPart', '$commonPartTable[0]', "
            . "'$commonPartTable[1]', '$commonPartTable[2]', '$commonPartTable[3]', '$commonPartTable[4]', '$commonPartTable[5]', "
            . "'$commonPartTable[6]', '$commonPartTable[7]', '$commonPartTable[8]')";
    
    $queryInsertOldFirstPart = "INSERT INTO oldfirstpart (idOldFirstPart, Port1, Building_idBuilding, Devices_idDevices, OldCommonPart_idOldCommonPart) "
            . "VALUES ('$firstPartTable[0]', '$firstPartTable[1]', '$firstPartTable[2]', '$firstPartTable[3]', '$firstPartTable[4]')";
    
    $queryInsertOldSecondPart = "INSERT INTO oldsecondpart (idOldSecondPart, Port2, Building_idBuilding, Devices_idDevices, OldCommonPart_idOldCommonPart) "
            . "VALUES ('$secondPartTable[0]', '$secondPartTable[1]', '$secondPartTable[2]', '$secondPartTable[3]', '$secondPartTable[4]')";
    
    $connection->queryExecuter($connection, $queryInsertOldCommonPart);
    
    $connection->queryExecuter($connection, $queryInsertOldFirstPart);
    
    $connection->queryExecuter($connection, $queryInsertOldSecondPart);
    
    $connection->queryExecuter($connection, $queryDeleteFirstPart);
    
    $connection->queryExecuter($connection, $queryDeleteSecondPart);
        
    $connection->queryExecuter($connection, $queryDeleteCommonPart);
    
    $adminDeletePatch = $_LANG['patchdeletedlog'].': '.$idCommonPart;
            
    $adminLog = "INSERT INTO logsofadmins(idLogsOfAdmins, "
                            . "executedQuerys, IPAddress, hourdate, AdminsTable_idAdminsLogs)"
                            . "VALUES(NULL, '$adminDeletePatch', '$ip', '$hourdate', '$adminId')";
            
    $connection->queryExecuter($connection, $adminLog);
            
    $_SESSION['info'] = '<span class="list-group-item list-group-item-success">'.
                $_LANG['successpatchdeleted'].$idCommonPart.'</span>';
            
    header($strings->getMainLogedString());
    
}
