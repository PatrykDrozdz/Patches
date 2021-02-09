<?php

include 'tables/heads/commonPartFirst.php';
include 'tables/heads/commonPartSecond.php';
include 'tables/heads/building.php';
include 'tables/heads/device.php';
include 'tables/heads/port.php';

$queryMainOld = "SELECT c.idOldCommonPart, c.Company, c.Product, b.BuildingName AS b_BuildingName, dv.Room AS dv_Room, 
    dv.Wardrobe AS dv_Wardrobe, dv.U AS dv_U, dv.Model AS dv_Model, dv.Signature AS dv_Signature, dv.IP AS dv_IP, f.Port1, 
    b2.BuildingName AS b2_BuildingName, dv2.Room AS dv2_Room, dv2.Wardrobe AS dv2_Wardrobe, dv2.U AS dv2_U, dv2.Model AS dv2_Model, 
    dv2.Signature AS dv2_Signature, dv2.IP AS dv2_IP, s.Port2, 
    c.VLAN, c.Patchcord, c.ClientSocketsNo, c.RoomNo, c.ACL, c.Description, c.Action FROM oldcommonpart AS c 
    LEFT JOIN oldfirstpart AS f ON (c.idOldCommonPart = f.OldCommonPart_idOldCommonPart) 
    LEFT JOIN oldsecondpart AS s ON (s.OldCommonPart_idOldCommonPart = c.idOldCommonPart) 
    LEFT JOIN devices AS dv ON (f.Devices_idDevices = dv.idDevices) LEFT JOIN devices AS dv2 ON (s.Devices_idDevices = dv2.idDevices) 
    LEFT JOIN building AS b ON (f.Building_idBuilding = b.idBuilding) LEFT JOIN building AS b2 ON (s.Building_idBuilding = b2.idBuilding) 
    ORDER BY `$sort` $upDown";

$getComponentsLoged->getAdditionalMenu($_LANG['placeholdersearch'], $_LANG['seekbuttontitle'], 'patches-old', $_LANG['searcherrornovalues']);

commonPartFirst($_LANG['tableid'], $_LANG['tablecompany'], $_LANG['tableproduct'], 'patches-old', 'idOldCommonPart', 'Company', 'Product');
        
building($_LANG['buildingname'], 'patches-old', 'b_BuildingName');
        
device($_LANG['tabledeviceroom'], $_LANG['tabledevicewardrobe'], $_LANG['tabledeviceu'], $_LANG['tabledevicemodel'], 
                $_LANG['tabledevicesignature'], $_LANG['tabledeviceip'], 'patches-old', 
            'dv_Room', 'dv_Wardrobe', 'dv_U', 'dv_Model', 'dv_Signature', 'dv_IP');
        
port($_LANG['tableport1'], 'patches-old', 'Port1');

building($_LANG['buildingname'], 'patches-old', 'b2_BuildingName');
        
device($_LANG['tabledeviceroom'], $_LANG['tabledevicewardrobe'], $_LANG['tabledeviceu'], $_LANG['tabledevicemodel'], 
                $_LANG['tabledevicesignature'], $_LANG['tabledeviceip'], 'patches-old', 
            'dv2_Room', 'dv2_Wardrobe', 'dv2_U', 'dv2_Model', 'dv2_Signature', 'dv2_IP');
        
port($_LANG['tableport2'], 'patches-old', 'Port2');
        
commonPartSecond($_LANG['tablevlan'], $_LANG['tablepatchcord'], $_LANG['tableclientsocketno'], 
                $_LANG['tableroomnno'], $_LANG['tableacl'], $_LANG['tabledescription'], 
                $_LANG['tableaction'],
            'patches-old', 'VLAN', 'Patchcord', 'ClientSocketsNo', 'RoomNo', 'ACL', 
            'Description', 'Action');
                     
$tablesHeads->getEnding(1);
        
$tablesHeads->OldMainLogedTable(1, $connection, $queryMainOld, $_LANG['searcherrorbadvalues']);
 