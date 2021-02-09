<?php

$queryFirstPartOldSearch = "SELECT oldfirstpart.idOldFirstPart, building.BuildingName, devices.Room, devices.Wardrobe, devices.U, devices.Model, devices.Signature, devices.IP, oldfirstpart.Port1 FROM oldfirstpart 
    INNER JOIN devices ON (oldfirstpart.Devices_idDevices = devices.idDevices) 
    INNER JOIN building ON (oldfirstpart.Building_idBuilding = building.idBuilding) WHERE BuildingName LIKE '%$value%' OR Room LIKE '%$value%' OR Wardrobe LIKE '%$value%' OR U LIKE '%$value%' 
    OR Model LIKE '%$value%' OR Signature LIKE '%$value%' OR IP LIKE '%$value%' OR Port1 LIKE '%$value%' ORDER BY idOldFirstPart";
   
$getComponentsLoged->getAdditionalMenu($_LANG['placeholdersearch'], $_LANG['seekbuttontitle'], 'first-part-old', $_LANG['searcherrornovalues']);
        
$tablesHeads->getIdhead(0, 'first-part-old', $_LANG['tableid'], 'idOldFirstPart');

$tablesHeads->getBuildinghead(0, 'first-part-old', $_LANG['buildingname'], 'BuildingName');

$tablesHeads->getDevice(0, 'first-part', $_LANG['tabledeviceroom'], $_LANG['tabledevicewardrobe'], $_LANG['tabledeviceu'], $_LANG['tabledevicemodel'], 
                $_LANG['tabledevicesignature'], $_LANG['tabledeviceip'], 
            'Room', 'Wardrobe', 'U', 'Model', 'Signature', 'IP');
        
$tablesHeads->getPort(0, 'first-part-old', $_LANG['tableport1'], 'Port1');
        
$tablesHeads->getEnding(0);
        
$tablesHeads->partTable(0, $connection, $queryFirstPartOldSearch, 'idOldFirstPart', 'Port1', 'forms/editFirstPart.php', $_LANG['searcherrorbadvalues']);