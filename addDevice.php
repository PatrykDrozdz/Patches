<?php

require_once 'includedfiles.php';

if(isset($_POST['new-device-signature'])){
    
    $newDeviceSignature = $_POST['new-device-signature'];
    $newDeviceRoom = $_POST['new-device-room'];
    $newDeviceWardrobe = $_POST['new-device-wardrobe'];
    $newDeviceU = $_POST['new-device-u'];
    $newDeviceModel = $_POST['new-device-model'];
    $newDeviceIP = $_POST['new-device-ip'];
    
    if($newDeviceSignature==NULL) {
        
        $connection->setValid(False);
        
        $_SESSION['error'] = '<span class="list-group-item list-group-item-danger">'.
                    $_LANG['errordevicenosignature'].'</span>';

        header($strings->getDeviceString());
        
    }
    
    $safeNewDeviceSignature = $connection->injectionSafer($newDeviceSignature);
    
    $safeNewDeviceModel = $connection->injectionSafer($newDeviceModel);
    
    $safeNewDeviceWardrobe = $connection->injectionSafer($newDeviceWardrobe);
    
    $safeNewDeviceRoom = $connection->injectionSafer($newDeviceRoom);
    
    $queryCheck = sprintf("SELECT * FROM devices WHERE Signature = '%s' AND Model = '%s' "
            . "AND Wardrobe = '%s' AND Room = '%s'", 
                    mysqli_real_escape_string($connection, $safeNewDeviceSignature), 
            mysqli_real_escape_string($connection, $safeNewDeviceModel), 
 mysqli_real_escape_string($connection, $safeNewDeviceWardrobe), 
            mysqli_real_escape_string($connection, $safeNewDeviceRoom));
    
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
        
        $connection->queryExecuter($connection, "INSERT INTO devices "
                . "(idDevices, Room, Wardrobe, U, Model, Signature, IP) VALUES"
                . "('NULL', '$newDeviceRoom', '$newDeviceWardrobe', '$newDeviceU', "
                . "'$newDeviceModel', '$newDeviceSignature', '$newDeviceIP')");
        
        $adminAddDevice = $_LANG['logdeviceadded'].': '.$newDeviceSignature;
            
        $adminLog = "INSERT INTO logsofadmins(idLogsOfAdmins, "
                            . "executedQuerys, IPAddress, hourdate, AdminsTable_idAdminsLogs)"
                            . "VALUES(NULL, '$adminAddDevice', '$ip', '$hourdate', $adminId')";
                    
        $connection->queryExecuter($connection, $adminLog);
    
        $_SESSION['info'] = '<span class="list-group-item list-group-item-success">'.
                    $_LANG['successdeviceadded'].$newDeviceSignature.'</span>';

        header($strings->getDeviceString());
    
    } 
    
} 