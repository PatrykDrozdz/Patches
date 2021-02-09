<?php

require_once 'includedfiles.php';

if(isset($_POST['edit-device-signature'])){
    
    $editDeviceId = $_POST['edit-device-id'];
    $editDeviceSignature = $_POST['edit-device-signature'];
    $editDeviceRoom = $_POST['edit-device-room'];
    $editDeviceWardrobe = $_POST['edit-device-wardrobe'];
    $editDeviceU = $_POST['edit-device-u'];
    $editDeviceModel = $_POST['edit-device-model'];
    $editDeviceIP = $_POST['edit-device-ip'];
    
    if($editDeviceSignature==NULL) {
        
        $connection->setValid(False);
        
        $_SESSION['error'] = '<span class="list-group-item list-group-item-danger">'.
                    $_LANG['errordevicenosignature'].'</span>';

        header($strings->getDeviceString());
        
    }
    
    $safeEditDeviceSignature = $connection->injectionSafer($editDeviceSignature);
    
    $safeEditDeviceModel = $connection->injectionSafer($editDeviceModel);
    
    $safeEditDeviceWardrobe = $connection->injectionSafer($editDeviceWardrobe);
    
    $safeEditDeviceRoom = $connection->injectionSafer($editDeviceRoom);
    
    $safeEditDeviceU = $connection->injectionSafer($editDeviceU);
    
    $safeEditDeviceIP = $connection->injectionSafer($editDeviceIP);
    
    $queryCheck = sprintf("SELECT * FROM devices WHERE Signature = '%s' AND Model = '%s' "
            . "AND Wardrobe = '%s' AND Room = '%s' AND U = '%s' AND IP = '%s'", 
                    mysqli_real_escape_string($connection, $safeEditDeviceSignature), 
            mysqli_real_escape_string($connection, $safeEditDeviceModel), 
 mysqli_real_escape_string($connection, $safeEditDeviceWardrobe), mysqli_real_escape_string($connection, $safeEditDeviceRoom), 
            mysqli_real_escape_string($connection, $safeEditDeviceU), mysqli_real_escape_string($connection, $safeEditDeviceIP));
    
    $connection->queryExecuter($connection, $queryCheck);
    
    $result = $connection->getResult();
    
    $howManyDevices = $connection->rowCount($result);
    
    if($mathFun->equality(0, $howManyDevices) == FALSE) {
        
        $connection->setValid(FALSE);
        
        $_SESSION['error'] = '<span class="list-group-item list-group-item-danger"'
                . '>'.$_LANG['errordeviceexistes'].'</span>';

        header($strings->getDeviceString());
        
    }
    
    if($connection->getValid()==true) {
        
        $connection->queryExecuter($connection, "UPDATE devices "
                . "SET Room = '$editDeviceRoom', Wardrobe = '$editDeviceWardrobe', "
                . "U = '$editDeviceU', Model = '$editDeviceModel', Signature = '$editDeviceSignature', "
                . "IP = '$editDeviceIP' WHERE idDevices = '$editDeviceId'");
        
        $adminEditDevice = $_LANG['logdeviceupdated'].': '.$editDeviceId;
            
        $adminLog = "INSERT INTO logsofadmins(idLogsOfAdmins, "
                            . "executedQuerys, IPAddress, hourdate, AdminsTable_idAdminsLogs)"
                            . "VALUES(NULL, '$adminEditDevice', '$ip', '$hourdate', '$adminId')";
                    
        $connection->queryExecuter($connection, $adminLog);
    
        $_SESSION['info'] = '<span class="list-group-item list-group-item-success">'.
                    $_LANG['successdeviceedited'].$editDeviceId.'</span>';

        header($strings->getDeviceString());
    
    } 
  
} 