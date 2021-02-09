<?php

$queryFirstPart = "SELECT firstpart.idFirstPart, building.BuildingName, devices.Room, devices.Wardrobe, devices.U, devices.Model, 
    devices.Signature, devices.IP, firstpart.Port1 FROM firstpart 
    INNER JOIN devices ON (firstpart.Devices_idDevices = devices.idDevices) 
    INNER JOIN building ON (firstpart.Building_idBuilding = building.idBuilding) WHERE BuildingName LIKE '%$value%'  OR Room LIKE '%$value%'
    OR Wardrobe LIKE '%$value%'  OR U LIKE '%$value%'  
    OR Model LIKE '%$value%'  OR Signature LIKE '%$value%'  OR IP LIKE '%$value%'  OR Port1 LIKE '%$value%'  ORDER BY idFirstPart";
   
$getComponentsLoged->getAdditionalMenu($_LANG['placeholdersearch'], $_LANG['seekbuttontitle'], 'first-part', $_LANG['searcherrornovalues']);
        
$tablesHeads->getIdhead(0, 'first-part', $_LANG['tableid'], 'idFirstPart');

$tablesHeads->getBuildinghead(0, 'first-part', $_LANG['buildingname'], 'BuildingName');

$tablesHeads->getDevice(0, 'first-part', $_LANG['tabledeviceroom'], $_LANG['tabledevicewardrobe'], $_LANG['tabledeviceu'], $_LANG['tabledevicemodel'], 
                $_LANG['tabledevicesignature'], $_LANG['tabledeviceip'], 
            'Room', 'Wardrobe', 'U', 'Model', 'Signature', 'IP');
        
$tablesHeads->getPort(0, 'first-part', $_LANG['tableport1'], 'Port1');
        
$tablesHeads->getEnding(2);
        
$tablesHeads->partTable(1, $connection, $queryFirstPart, 'idFirstPart', 'Port1', 'forms/editFirstPart.php', $_LANG['searcherrorbadvalues']);