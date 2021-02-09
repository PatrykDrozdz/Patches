<?php

include 'tables/heads/commonPartFirst.php';
include 'tables/heads/commonPartSecond.php';
include 'tables/heads/building.php';
include 'tables/heads/device.php';
include 'tables/heads/port.php';

$queryMain = "SELECT c.idCommonPart, c.Company, c.Product, b.BuildingName AS b_BuildingName, dv.Room AS dv_Room, 
    dv.Wardrobe AS dv_Wardrobe, dv.U AS dv_U, dv.Model AS dv_Model, dv.Signature AS dv_Signature, dv.IP AS dv_IP, f.Port1, 
    b2.BuildingName AS b2_BuildingName, dv2.Room AS dv2_Room, dv2.Wardrobe AS dv2_Wardrobe, dv2.U AS dv2_U, dv2.Model AS dv2_Model, 
    dv2.Signature AS dv2_Signature, dv2.IP AS dv2_IP, s.Port2, 
    c.VLAN, c.Patchcord, c.ClientSocketsNo, c.RoomNo, c.ACL, c.Description, c.Action FROM 
    commonpart AS c LEFT JOIN firstpart AS f ON (c.idCommonPart = f.CommonPart_idCommonPart)
    LEFT JOIN secondpart AS s ON (s.CommonPart_idCommonPart = c.idCommonPart) 
    LEFT JOIN devices AS dv ON (f.Devices_idDevices = dv.idDevices) 
    LEFT JOIN devices AS dv2 ON (s.Devices_idDevices = dv2.idDevices) 
    LEFT JOIN building AS b ON (f.Building_idBuilding = b.idBuilding) 
    LEFT JOIN building AS b2 ON (s.Building_idBuilding = b2.idBuilding) ORDER BY `$sort` $upDown";
        
$getComponentsLoged->getAdditionalMenu($_LANG['placeholdersearch'], $_LANG['seekbuttontitle'], 'main-page', $_LANG['searcherrornovalues']);
        
/*$tablesHeads->CommonPartHeadFirst(1, 'main-loged', $_LANG['tableid'], $_LANG['tablecompany'], $_LANG['tableproduct'], 'idCommonPart', 'Company', 'Product');
        
$tablesHeads->getBuildingHead(1, 'main-loged', $_LANG['buildingname'], 'b_BuildingName');
        
$tablesHeads->getDevice(1, 'main-loged', $_LANG['tabledeviceroom'], $_LANG['tabledevicewardrobe'], $_LANG['tabledeviceu'], $_LANG['tabledevicemodel'], 
   $_LANG['tabledevicesignature'], $_LANG['tabledeviceip'], 'dv_Room', 'dv_Wardrobe', 'dv_U', 'dv_Model', 'dv_Signature', 'dv_IP');
        
$tablesHeads->getPort(1, 'main-loged', $_LANG['tableport1'], 'Port1');
        
$tablesHeads->getBuildingHead(1, 'main-loged', $_LANG['buildingname'], 'b2_BuildingName');
        
$tablesHeads->getDevice(1, 'main-loged', $_LANG['tabledeviceroom'], $_LANG['tabledevicewardrobe'], $_LANG['tabledeviceu'], $_LANG['tabledevicemodel'], 
    $_LANG['tabledevicesignature'], $_LANG['tabledeviceip'], 'dv2_Room', 'dv2_Wardrobe', 'dv2_U', 'dv2_Model', 'dv2_Signature', 'dv2_IP');
        
$tablesHeads->getPort(1, 'main-loged', $_LANG['tableport2'], 'Port2');
        
$tablesHeads->CommonPartHeadSecond(1, 'main-loged', $_LANG['tablevlan'], $_LANG['tablepatchcord'], $_LANG['tableclientsocketno'], $_LANG['tableroomnno'], 
    $_LANG['tableacl'], $_LANG['tabledescription'], $_LANG['tableaction'], 'VLAN', 'Patchcord', 'ClientSocketsNo', 'RoomNo', 'ACL', 'Description', 
    'Action');
        
$tablesHeads->getEnding(1);*/

commonPartFirst($_LANG['tableid'], $_LANG['tablecompany'], $_LANG['tableproduct'], 'main-page', 'idCommonPart', 'Company', 'Product');
        
building($_LANG['buildingname'], 'main-page', 'b_BuildingName');
        
device($_LANG['tabledeviceroom'], $_LANG['tabledevicewardrobe'], $_LANG['tabledeviceu'], $_LANG['tabledevicemodel'], 
    $_LANG['tabledevicesignature'], $_LANG['tabledeviceip'], 'main-page', 
    'dv_Room', 'dv_Wardrobe', 'dv_U', 'dv_Model', 'dv_Signature', 'dv_IP');
        
port($_LANG['tableport1'], 'main-page', 'Port1');

building($_LANG['buildingname'], 'main-page', 'b2_BuildingName');
        
device($_LANG['tabledeviceroom'], $_LANG['tabledevicewardrobe'], $_LANG['tabledeviceu'], $_LANG['tabledevicemodel'], 
    $_LANG['tabledevicesignature'], $_LANG['tabledeviceip'], 'main-page', 
    'dv2_Room', 'dv2_Wardrobe', 'dv2_U', 'dv2_Model', 'dv2_Signature', 'dv2_IP');
        
port($_LANG['tableport2'], 'main-page', 'Port2');
        
commonPartSecond($_LANG['tablevlan'], $_LANG['tablepatchcord'], $_LANG['tableclientsocketno'], 
    $_LANG['tableroomnno'], $_LANG['tableacl'], $_LANG['tabledescription'], $_LANG['tableaction'],
    'main-page', 'VLAN', 'Patchcord', 'ClientSocketsNo', 'RoomNo', 'ACL', 'Description', 'Action');
                     
$tablesHeads->getEnding(1);

$tablesHeads->MainLogedTable(1, $connection, $queryMain, $_LANG['searcherrorbadvalues']);