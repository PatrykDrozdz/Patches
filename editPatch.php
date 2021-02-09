<?php

include 'includedfiles.php';


if(isset($_POST['edit-company']) && isset($_POST['edit-product']) && isset($_POST['edit-building-1']) && 
    isset($_POST['edit-room-1']) && isset($_POST['edit-wardrobe-1']) && isset($_POST['edit-u-1']) && 
    isset($_POST['edit-model-1']) && isset($_POST['edit-signature-1']) && isset($_POST['edit-ip-1']) &&
    isset($_POST['edit-port-1']) && isset($_POST['edit-building-2']) && 
    isset($_POST['edit-room-2']) && isset($_POST['edit-wardrobe-2']) && isset($_POST['edit-u-2']) && 
    isset($_POST['edit-model-2']) && isset($_POST['edit-signature-2']) && isset($_POST['edit-ip-2']) &&
    isset($_POST['edit-port-2']) && isset($_POST['edit-vlan']) && isset($_POST['edit-patchcord']) && 
    isset($_POST['edit-client-socket-no']) && isset($_POST['edit-client-room-no']) && 
    isset($_POST['edit-acl']) && isset($_POST['edit-description']) && isset($_POST['edit-action']) && 
    isset($_POST['edit-id'])) {
        
        $editID = $_POST['edit-id'];
        $editCompany = $_POST['edit-company']; 
        $editProduct = $_POST['edit-product'];
        
        $editVLAN = $_POST['edit-vlan'];
        $editPatch = $_POST['edit-patchcord'];
        $editClientSocketNo = $_POST['edit-client-socket-no'];
        $editClientRoomNo = $_POST['edit-client-room-no'];
        $editACL = $_POST['edit-acl'];
        $editDescription = $_POST['edit-description'];
        $editAction = $_POST['edit-action'];
        
        /***********************************************************/
        
        $editBuilding1 = $_POST['edit-building-1'];
        
        $editRoom1 = $_POST['edit-room-1'];
        $editWardrobe1 = $_POST['edit-wardrobe-1'];
        $editU1 = $_POST['edit-u-1'];
        $editModel1 = $_POST['edit-model-1'];
        $editSignature1 = $_POST['edit-signature-1'];
        $editIP1 = $_POST['edit-ip-1'];
        
        $editPort1 = $_POST['edit-port-1'];
        
        /***********************************************************/
        
        $editBuilding2 = $_POST['edit-building-2'];
        
        $editRoom2 = $_POST['edit-room-2'];
        $editWardrobe2 = $_POST['edit-wardrobe-2'];
        $editU2 = $_POST['edit-u-2'];
        $editModel2 = $_POST['edit-model-2'];
        $editSignature2 = $_POST['edit-signature-2'];
        $editIP2 = $_POST['edit-ip-2'];
        
        $editPort2 = $_POST['edit-port-2'];
        
        $queryUpdateCommonPart = "UPDATE `commonpart` SET `Company`='$editCompany',`Product`='$editProduct',"
                . "`VLAN`='$editVLAN',`Patchcord`='$editPatch',`ClientSocketsNo`='$editClientSocketNo',`RoomNo`='$editClientRoomNo',"
                . "`ACL`='$editACL',`Description`='$editDescription',`Action`='$editAction' WHERE idCommonPart = '$editID'";
        
        $querySelectBuilding1 = "SELECT * FROM building WHERE BuildingName = '$editBuilding1'";
        
        $querySelectBuilding2 = "SELECT * FROM building WHERE BuildingName = '$editBuilding2'";
        
        $queryCheckDevice1 = "SELECT * FROM devices WHERE Room = '$editRoom1' AND Wardrobe = '$editWardrobe1' AND "
                . "U = '$editU1' AND Model = '$editModel1' AND Signature = '$editSignature1' AND IP = '$editIP1'";
        
        $queryInsertDevice1 = "INSERT INTO devices (idDevices, Room, Wardrobe, U, Model, Signature, IP)"
                . "VALUES(NULL, '$editRoom1', '$editWardrobe1', '$editU1', '$editModel1', "
                . "'$editSignature1', '$editIP1')";
        
        $queryCheckDevice2 = "SELECT * FROM devices WHERE Room = '$editRoom2' AND Wardrobe = '$editWardrobe2' AND "
                . "U = '$editU2' AND Model = '$editModel2' AND Signature = '$editSignature2' AND IP = '$editIP2'";
        
        $queryInsertDevice2 = "INSERT INTO devices (idDevices, Room, Wardrobe, U, Model, Signature, IP)"
                . "VALUES(NULL, '$editRoom2', '$editWardrobe2', '$editU2', '$editModel2', "
                . "'$editSignature2', '$editIP2')";     
        
        $querySelectCommonPart = "SELECT * FROM commonpart";

  
        if($connection->getValid()==TRUE) {
            
            $idDevice1 = $someFunctions->deviceChecker($connection, $queryCheckDevice1, $queryInsertDevice1);//to first part table
        
            $idDevice2 = $someFunctions->deviceChecker($connection, $queryCheckDevice2, $queryInsertDevice2);//to second part table

            $idBuilding1 = $someFunctions->getBuildingId($connection, $querySelectBuilding1);//to first part table

            $idBuilding2 = $someFunctions->getBuildingId($connection, $querySelectBuilding2);//to second part table
            
            $connection->queryExecuter($connection, $queryUpdateCommonPart);
            
            $updateFirstPart = "UPDATE `firstpart` SET `Port1`='$editPort1',`Building_idBuilding`='$idBuilding1',`Devices_idDevices`='$idDevice1' "
                    . "WHERE `CommonPart_idCommonPart`= '$editID'";

            $updateSecondPart = "UPDATE secondpart SET Port2 = '$editPort2', Building_idBuilding = '$idBuilding2', Devices_idDevices = '$idDevice2' 
                    WHERE CommonPart_idCommonPart = '$editID'";
            
            $connection->queryExecuter($connection, $updateFirstPart);
            
            $connection->queryExecuter($connection, $updateSecondPart);
            
            $adminEditPatch = $_LANG['patcheditededlog'].': '.$editID;
            
            $adminLog = "INSERT INTO logsofadmins(idLogsOfAdmins, "
                            . "executedQuerys, IPAddress, hourdate, AdminsTable_idAdminsLogs)"
                            . "VALUES(NULL, '$adminEditPatch', '$ip', '$hourdate', '$adminId')";
            
            $connection->queryExecuter($connection, $adminLog);
            
            $_SESSION['info'] = '<span class="list-group-item list-group-item-success">'.
                $_LANG['successpatchedited'].$editID.'</span>';
            
            header($strings->getMainLogedString());

        }
    
    }