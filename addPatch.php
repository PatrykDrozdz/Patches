<?php

include 'includedfiles.php';


if(isset($_POST['new-company']) && isset($_POST['new-product']) && isset($_POST['new-building-1']) && 
    isset($_POST['new-room-1']) && isset($_POST['new-wardrobe-1']) && isset($_POST['new-u-1']) && 
    isset($_POST['new-model-1']) && isset($_POST['new-signature-1']) && isset($_POST['new-ip-1']) &&
    isset($_POST['new-port-1']) && isset($_POST['new-building-2']) && 
    isset($_POST['new-room-2']) && isset($_POST['new-wardrobe-2']) && isset($_POST['new-u-2']) && 
    isset($_POST['new-model-2']) && isset($_POST['new-signature-2']) && isset($_POST['new-ip-2']) &&
    isset($_POST['new-port-2']) && isset($_POST['new-vlan']) && isset($_POST['new-patchcord']) && 
    isset($_POST['new-client-socket-no']) && isset($_POST['new-client-room-no']) && 
    isset($_POST['new-acl']) && isset($_POST['new-description']) && isset($_POST['new-action'])) {
        
        
        $addNewCompany = $_POST['new-company']; 
        $addNewProduct = $_POST['new-product'];
        
        $addNewVLAN = $_POST['new-vlan'];
        $addNewPatch = $_POST['new-patchcord'];
        $addNewClientSocketNo = $_POST['new-client-socket-no'];
        $addNewClientRoomNo = $_POST['new-client-room-no'];
        $addNewACL = $_POST['new-acl'];
        $addNewDescription = $_POST['new-description'];
        $addNewAction = $_POST['new-action'];
        
        /***********************************************************/
        
        $addNewBuilding1 = $_POST['new-building-1'];
        
        $addNewRoom1 = $_POST['new-room-1'];
        $addNewWardrobe1 = $_POST['new-wardrobe-1'];
        $addNewU1 = $_POST['new-u-1'];
        $addNewModel1 = $_POST['new-model-1'];
        $addNewSignature1 = $_POST['new-signature-1'];
        $addNewIP1 = $_POST['new-ip-1'];
        
        $addNewPort1 = $_POST['new-port-1'];
        
        /***********************************************************/
        
        $addNewBuilding2 = $_POST['new-building-2'];
        
        $addNewRoom2 = $_POST['new-room-2'];
        $addNewWardrobe2 = $_POST['new-wardrobe-2'];
        $addNewU2 = $_POST['new-u-2'];
        $addNewModel2 = $_POST['new-model-2'];
        $addNewSignature2 = $_POST['new-signature-2'];
        $addNewIP2 = $_POST['new-ip-2'];
        
        $addNewPort2 = $_POST['new-port-2'];

        $queryCheckDevice1 = "SELECT * FROM devices WHERE Room = '$addNewRoom1' AND Wardrobe = '$addNewWardrobe1' AND "
                . "U = '$addNewU1' AND Model = '$addNewModel1' AND Signature = '$addNewSignature1' AND IP = '$addNewIP1'";
        
        $queryInsertDevice1 = "INSERT INTO devices (idDevices, Room, Wardrobe, U, Model, Signature, IP)"
                . "VALUES(NULL, '$addNewRoom1', '$addNewWardrobe1', '$addNewU1', '$addNewModel1', "
                . "'$addNewSignature1', '$addNewIP1')";
        
        $queryCheckDevice2 = "SELECT * FROM devices WHERE Room = '$addNewRoom2' AND Wardrobe = '$addNewWardrobe2' AND "
                . "U = '$addNewU2' AND Model = '$addNewModel2' AND Signature = '$addNewSignature2' AND IP = '$addNewIP2'";
        
        $queryInsertDevice2 = "INSERT INTO devices (idDevices, Room, Wardrobe, U, Model, Signature, IP)"
                . "VALUES(NULL, '$addNewRoom2', '$addNewWardrobe2', '$addNewU2', '$addNewModel2', "
                . "'$addNewSignature2', '$addNewIP2')";
        
        $querySelectDevices = "SELECT * FROM devices";
        
        $querySelectBuilding1 = "SELECT * FROM building WHERE BuildingName = '$addNewBuilding1'";
        
        $querySelectBuilding2 = "SELECT * FROM building WHERE BuildingName = '$addNewBuilding2'";
        
        $queryInsertCommonPart = "INSERT INTO commonpart (idCommonPart, Company, Product, VLAN, Patchcord, ClientSocketsNo, "
                . "RoomNo, ACL, Description, Action) VALUES(NULL, '$addNewCompany', '$addNewProduct', "
                . "'$addNewVLAN', '$addNewPatch', '$addNewClientSocketNo', '$addNewClientRoomNo', '$addNewACL', '$addNewDescription', "
                . "'$addNew')";
        
        $querySelectCommonPart = "SELECT * FROM commonpart";
  
        if($connection->getValid()==TRUE) {
            
            $connection->queryExecuter($connection, $queryInsertCommonPart);
            
            $idCommonPart = $someFunctions->getLastCommonPartId($connection, $querySelectCommonPart);//to first and second part tables
           
            $idBuilding1 = $someFunctions->getBuildingId($connection, $querySelectBuilding1);//to first part table
        
            $idBuilding2 = $someFunctions->getBuildingId($connection, $querySelectBuilding2);//to second part table
            
            $idDevice1 = $someFunctions->deviceChecker($connection, $queryCheckDevice1, $queryInsertDevice1);//to first part table
        
            $idDevice2 = $someFunctions->deviceChecker($connection, $queryCheckDevice2, $queryInsertDevice2);//to second part table
        
            
            $queryInsertFirstPart = "INSERT INTO firstpart (idFirstPart, Port1, Building_idBuilding, 
                    Devices_idDevices, CommonPart_idCommonPart) VALUES (NULL, '$addNewPort1', 
                    '$idBuilding1', '$idDevice1', '$idCommonPart')";
            
            $queryInsertSecondPart = "INSERT INTO secondpart (idSecondPart, Port2, Building_idBuilding, 
                    Devices_idDevices, CommonPart_idCommonPart) VALUES (NULL, '$addNewPort2', 
                    '$idBuilding2', '$idDevice2', '$idCommonPart')";
            
            $connection->queryExecuter($connection, $queryInsertFirstPart);
            
            $connection->queryExecuter($connection, $queryInsertSecondPart);
            
            $adminAddPatch = $_LANG['patchaddedlog'].': '.$idCommonPart;
            
            $queryAdminLog = "INSERT INTO logsofadmins (idLogsOfAdmins, executedQuerys, IPAddress, hourdate, 
                    AdminsTable_idAdminsLogs) VALUES (NULL, '$adminAddPatch', '$ip', '$hourdate', '$adminId')";
            
            $connection->queryExecuter($connection, $queryAdminLog);
            
            $_SESSION['info'] = '<span class="list-group-item list-group-item-success">'.
                $_LANG['successpatchadded'].$idCommonPart.'</span>';
            
            header($strings->getMainLogedString());

        }
    
    }