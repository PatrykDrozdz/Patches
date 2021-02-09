<?php

include 'includedfiles.php';

if(isset($_POST['edit-id'])) {

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
    
    $queryUpdateCommonPart = "UPDATE `commonpart` SET `Company`='$editCompany',`Product`='$editProduct',"
        . "`VLAN`='$editVLAN',`Patchcord`='$editPatch',`ClientSocketsNo`='$editClientSocketNo',`RoomNo`='$editClientRoomNo',"
        . "`ACL`='$editACL',`Description`='$editDescription',`Action`='$editAction' WHERE idCommonPart = '$editID'";
            
    $connection->queryExecuter($connection, $queryUpdateCommonPart);
    
    $adminEditCommonPart = $_LANG['commonparteditededlog'].': '.$editID;
            
    $adminLog = "INSERT INTO logsofadmins(idLogsOfAdmins, "
                            . "executedQuerys, IPAddress, hourdate, AdminsTable_idAdminsLogs)"
                            . "VALUES(NULL, '$adminEditCommonPart', '$ip', '$hourdate', '$adminId')";
            
    $connection->queryExecuter($connection, $adminLog);
            
    $_SESSION['info'] = '<span class="list-group-item list-group-item-success">'.
        $_LANG['successcommonpartedited'].$editID.'</span>';
            
    header($strings->getCommonPartString());
    
}

