<?php

include 'includedfiles.php';

if(isset($_POST['edit-id-1'])) {
    
    $editID = $_POST['edit-id-1'];
    
    $editBuilding = $_POST['edit-building-1'];
        
    $editRoom = $_POST['edit-room-1'];
    $editWardrobe = $_POST['edit-wardrobe-1'];
    $editU = $_POST['edit-u-1'];
    $editModel = $_POST['edit-model-1'];
    $editSignature = $_POST['edit-signature-1'];
    $editIP = $_POST['edit-ip-1'];
        
    $editPort = $_POST['edit-port-1'];
    //echo $editID.' '.$editBuilding.' '.$editRoom.' '.$editWardrobe.' '.$editU.' '.$editModel.' '.$editSignature.' '.$editIP.' '.$editPort; 
    $querySelectBuilding = "SELECT * FROM building WHERE BuildingName = '$editBuilding'";
    
    $queryInsertDevice = "INSERT INTO devices (idDevices, Room, Wardrobe, U, Model, Signature, IP)"
                . "VALUES(NULL, '$editRoom', '$editWardrobe', '$editU', '$editModel', "
                . "'$editSignature', '$editIP')";
    
    $queryCheckDevice = "SELECT * FROM devices WHERE Room = '$editRoom' AND Wardrobe = '$editWardrobe' AND "
        . "U = '$editU' AND Model = '$editModel' AND Signature = '$editSignature' AND IP = '$editIP'";
    
    $idDevice = $someFunctions->deviceChecker($connection, $queryCheckDevice, $queryInsertDevice);
    
    $idBuilding = $someFunctions->getBuildingId($connection, $querySelectBuilding);
    
    $updateFirstPart = "UPDATE `firstpart` SET `Port1`='$editPort',`Building_idBuilding`='$idBuilding',`Devices_idDevices`='$idDevice' "
        . "WHERE `idFirstPart`= '$editID'";
    
    $connection->queryExecuter($connection, $updateFirstPart);
    
    $adminEditFirstPart = $_LANG['firstparteditededlog'].': '.$editID;
            
    $adminLog = "INSERT INTO logsofadmins(idLogsOfAdmins, "
                 . "executedQuerys, IPAddress, hourdate, AdminsTable_idAdminsLogs)"
                 . "VALUES(NULL, '$adminEditFirstPart', '$ip', '$hourdate', '$adminId')";
            
    $connection->queryExecuter($connection, $adminLog);
            
    $_SESSION['info'] = '<span class="list-group-item list-group-item-success">'.
         $_LANG['successfirstpartedited'].$editID.'</span>';
            
    header($strings->getFirstPartString());
        
    
}
