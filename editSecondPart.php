<?php

include 'includedfiles.php';

if(isset($_POST['edit-id-2'])) {
    
    $editID = $_POST['edit-id-2'];
    
    $editBuilding = $_POST['edit-building-2'];
        
    $editRoom = $_POST['edit-room-2'];
    $editWardrobe = $_POST['edit-wardrobe-2'];
    $editU = $_POST['edit-u-2'];
    $editModel = $_POST['edit-model-2'];
    $editSignature = $_POST['edit-signature-2'];
    $editIP = $_POST['edit-ip-2'];
        
    $editPort = $_POST['edit-port-2'];
    
    $querySelectBuilding = "SELECT * FROM building WHERE BuildingName = '$editBuilding'";
    
    $queryInsertDevice = "INSERT INTO devices (idDevices, Room, Wardrobe, U, Model, Signature, IP)"
                . "VALUES(NULL, '$editRoom', '$editWardrobe', '$editU', '$editModel', "
                . "'$editSignature', '$editIP')";
    
    $queryCheckDevice = "SELECT * FROM devices WHERE Room = '$editRoom' AND Wardrobe = '$editWardrobe' AND "
        . "U = '$editU' AND Model = '$editModel' AND Signature = '$editSignature' AND IP = '$editIP'";
    
    $idDevice = $someFunctions->deviceChecker($connection, $queryCheckDevice, $queryInsertDevice);
    
    $idBuilding = $someFunctions->getBuildingId($connection, $querySelectBuilding);

    $updateSecondPart = "UPDATE `secondpart` SET `Port2`='$editPort',`Building_idBuilding`='$idBuilding',`Devices_idDevices`='$idDevice' "
        . "WHERE `idSecondPart`= '$editID'";
    
    $connection->queryExecuter($connection, $updateSecondPart);
    
    $adminEditSecondPart = $_LANG['secondparteditededlog'].': '.$editID;
            
    $adminLog = "INSERT INTO logsofadmins(idLogsOfAdmins, "
                 . "executedQuerys, IPAddress, hourdate, AdminsTable_idAdminsLogs)"
                 . "VALUES(NULL, '$adminEditSecondPart', '$ip', '$hourdate', '$adminId')";
            
    $connection->queryExecuter($connection, $adminLog);
            
    $_SESSION['info'] = '<span class="list-group-item list-group-item-success">'.
         $_LANG['successsecondpartedited'].$editID.'</span>';
            
    header($strings->getSecondPartString());
        
    
}
