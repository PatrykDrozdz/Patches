<?php

$querySearch = "SELECT c.idOldCommonPart, c.Company, c.Product, b.BuildingName AS b_BuildingName, dv.Room AS dv_Room, dv.Wardrobe AS dv_Wardrobe, dv.U AS dv_U, dv.Model AS dv_Model, dv.Signature AS dv_Signature, 
dv.IP AS dv_IP, f.Port1, b2.BuildingName AS b2_BuildingName, dv2.Room AS dv2_Room, dv2.Wardrobe AS dv2_Wardrobe, dv2.U AS dv2_U, dv2.Model AS dv2_Model, dv2.Signature AS dv2_Signature, dv2.IP AS dv2_IP, 
s.Port2, c.VLAN, c.Patchcord, c.ClientSocketsNo, c.RoomNo, c.ACL, c.Description, c.Action FROM oldcommonpart AS c LEFT JOIN oldfirstpart AS f ON (c.idOldCommonPart = f.OldCommonPart_idOldCommonPart) 
LEFT JOIN oldsecondpart AS s ON (s.OldCommonPart_idOldCommonPart = c.idOldCommonPart) LEFT JOIN devices AS dv ON (f.Devices_idDevices = dv.idDevices) LEFT JOIN devices AS dv2 ON (s.Devices_idDevices = dv2.idDevices) 
LEFT JOIN building AS b ON (f.Building_idBuilding = b.idBuilding) LEFT JOIN building AS b2 ON (s.Building_idBuilding = b2.idBuilding) 
WHERE Company LIKE '%$value%' OR Product LIKE '%$value%' OR b.BuildingName LIKE '%$value%' OR dv.Room LIKE '%$value%' OR dv.Wardrobe 
LIKE '%$value%' OR dv.U LIKE '%$value%' OR dv.Model LIKE '%$value%' OR dv.Signature LIKE '%$value%' OR dv.IP LIKE '%$value%' OR f.Port1 
LIKE '%$value%' OR dv2.Room LIKE '%$value%' OR dv2.Wardrobe LIKE '%$value%' OR dv2.U LIKE '%$value%' OR dv2.Model LIKE '%$value%' OR dv2.Signature 
LIKE '%$value%' OR dv2.IP LIKE '%$value%' OR s.Port2 LIKE '%$value%' OR c.VLAN LIKE '%$value%' OR c.Patchcord LIKE '%$value%' OR c.ClientSocketsNo 
LIKE '%$value%' OR c.RoomNo LIKE '%$value%' OR c.ACL LIKE '%$value%' OR c.Description LIKE '%$value%' OR c.Action LIKE '%$value%' ORDER BY idOldCommonPart";
   
$getComponentsLoged->getAdditionalMenu($_LANG['placeholdersearch'], $_LANG['seekbuttontitle'], 'patches-old', $_LANG['searcherrornovalues']);
        
$tablesHeads->CommonPartHeadFirst(0, 'patches-old', $_LANG['tableid'], $_LANG['tablecompany'], $_LANG['tableproduct'], 'idOldCommonPart', 'Company', 'Product');
        
$tablesHeads->getBuildingHead(0, 'patches-old', $_LANG['buildingname'], 'b_BuildingName');
        
$tablesHeads->getDevice(0, 'patches-old', $_LANG['tabledeviceroom'], $_LANG['tabledevicewardrobe'], $_LANG['tabledeviceu'], $_LANG['tabledevicemodel'], 
    $_LANG['tabledevicesignature'], $_LANG['tabledeviceip'], 'dv_Room', 'dv_Wardrobe', 'dv_U', 'dv_Model', 'dv_Signature', 'dv_IP');
        
$tablesHeads->getPort(0, 'patches-old', $_LANG['tableport1'], 'Port1');
        
$tablesHeads->getBuildingHead(0, 'patches-old', $_LANG['buildingname'], 'b2_BuildingName');
        
$tablesHeads->getDevice(0, 'patches-old', $_LANG['tabledeviceroom'], $_LANG['tabledevicewardrobe'], $_LANG['tabledeviceu'], $_LANG['tabledevicemodel'], 
                $_LANG['tabledevicesignature'], $_LANG['tabledeviceip'], 'dv2_Room', 'dv2_Wardrobe', 'dv2_U', 'dv2_Model', 'dv2_Signature', 'dv2_IP');
        
$tablesHeads->getPort(0, 'patches-old', $_LANG['tableport2'], 'Port2');
        
$tablesHeads->CommonPartHeadSecond(0, 'patches-old', $_LANG['tablevlan'], $_LANG['tablepatchcord'], $_LANG['tableclientsocketno'], $_LANG['tableroomnno'], 
                $_LANG['tableacl'], $_LANG['tabledescription'], $_LANG['tableaction'], 'VLAN', 'Patchcord', 'ClientSocketsNo', 'RoomNo', 'ACL', 'Description', 
                'Action');
        
$tablesHeads->getEnding(1);
        
$tablesHeads->OldMainLogedTable(1, $connection, $querySearch, $_LANG['searcherrorbadvalues']);