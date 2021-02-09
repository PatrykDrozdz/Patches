<?php

include 'includedfiles.php';

if(isset($_POST['device-delete-confirm']) && isset($_POST['device-id-to-delete'])){
    
    $deleteDeviceId = $_POST['device-id-to-delete'];
    
    $deleteQuery = "DELETE FROM devices WHERE idDevices = '$deleteDeviceId'";
    
    $deleteFirstPartQuery = "DELETE FROM firstpart WHERE Devices_idDevices = '$deleteDeviceId'";
    
    $deleteSecondPartQuery = "DELETE FROM secondpart WHERE Devices_idDevices = '$deleteDeviceId'";
    
    $deleteOldFirstPartQuery = "DELETE FROM oldfirstpart WHERE Devices_idDevices = '$deleteDeviceId'";
    
    $deleteOldSecondPartQuery = "DELETE FROM oldsecondpart WHERE Devices_idDevices = '$deleteDeviceId'";
    
    $selectFirstPartQuery = "SELECT * FROM firstpart WHERE Devices_idDevices = '$deleteDeviceId'";
    
    $selectOldFirstPartQuery = "SELECT * FROM oldfirstpart WHERE Devices_idDevices = '$deleteDeviceId'";
    
    $selectSecondPartQuery = "SELECT * FROM secondpart WHERE Devices_idDevices = '$deleteDeviceId'";
    
    $selectOldSecondPartQuery = "SELECT * FROM oldsecondpart WHERE Devices_idDevices = '$deleteDeviceId'";
    
    $connection->queryExecuter($connection, $selectFirstPartQuery);
    
    $resultFirstPart = $connection->getResult();
    
    $connection->queryExecuter($connection, $selectOldFirstPartQuery);
    
    $resultOldFirstPart = $connection->getResult();
    
    $connection->queryExecuter($connection, $selectSecondPartQuery);
    
    $resultSecondPart = $connection->getResult();
    
    $connection->queryExecuter($connection, $selectOldSecondPartQuery);
    
    $resultOldSecondPart = $connection->getResult();
    
    if($mathFun->equality($connection->rowCount($resultFirstPart),0)==FALSE){
        
        $someFunctions->deleteCommonPart($connection, $selectFirstPartQuery, 'CommonPart_idCommonPart', 'commonpart');
        
        $connection->queryExecuter($connection, $deleteFirstPartQuery);
    
    } 
    
    
    if($mathFun->equality($connection->rowCount($resultOldFirstPart),0)==FALSE){
       
        $someFunctions->deleteCommonPart($connection, $selectOldFirstPartQuery, 'OldCommonPart_idOldCommonPart', 'oldcommonpart');
        
        $connection->queryExecuter($connection, $deleteOldFirstPartQuery);
        
    } 
    
    if($mathFun->equality($connection->rowCount($resultSecondPart),0)==FALSE){
        
        $someFunctions->deleteCommonPart($connection, $selectSecondPartQuery, 'CommonPart_idCommonPart', 'commonpart');
    
        $connection->queryExecuter($connection, $deleteSecondPartQuery);
    
    } 
    
    
    if($mathFun->equality($connection->rowCount($resultOldSecondPart),0)==FALSE){
    
        $someFunctions->deleteCommonPart($connection, $selectOldSecondPartQuery, 'OldCommonPart_idOldCommonPart', 'oldcommonpart');
        
        $connection->queryExecuter($connection, $deleteOldSecondPartQuery);
        
    } 

    $connection->queryExecuter($connection, $deleteQuery);
    
    $adminDelDevice = $_LANG['logdevicedeleted'].': '.$deleteDeviceId;
    
    $adminLog = "INSERT INTO logsofadmins(idLogsOfAdmins, "
                            . "executedQuerys, IPAddress, hourdate, AdminsTable_idAdminsLogs)"
                            . "VALUES(NULL, '$adminDelDevice', '$ip', '$hourdate', '$adminId')";
                    
    $connection->queryExecuter($connection, $adminLog);
    
    $_SESSION['info'] = '<span class="list-group-item list-group-item-success">'.
        $_LANG['successdevicedeleted'].$deleteDeviceId.'</span>';
     
    header($strings->getDeviceString());
    
}
