<?php

$querySecondPart = "SELECT secondpart.idSecondPart, building.BuildingName, devices.Room, devices.Wardrobe, devices.U, devices.Model, devices.Signature, 
    devices.IP, secondpart.Port2 FROM secondpart INNER JOIN devices ON (secondpart.Devices_idDevices = devices.idDevices) 
    INNER JOIN building ON (secondpart.Building_idBuilding = building.idBuilding) WHERE BuildingName LIKE '%$value%' OR 
    Room LIKE '%$value%' OR Wardrobe LIKE '%$value%' OR U LIKE '%$value%' OR Model LIKE '%$value%' OR Signature LIKE '%$value%' OR 
    IP LIKE '%$value%' OR Port2 LIKE '%$value%' ORDER BY idSecondPart";
   
$getComponentsLoged->getAdditionalMenu($_LANG['placeholdersearch'], $_LANG['seekbuttontitle'], 'second-part', $_LANG['searcherrornovalues']);
        
$tablesHeads->getIdhead(0, 'second-part', $_LANG['tableid'], 'idSecondPart');

$tablesHeads->getBuildinghead(0, 'second-part', $_LANG['buildingname'], 'BuildingName');

$tablesHeads->getDevice(0, 'second-part', $_LANG['tabledeviceroom'], $_LANG['tabledevicewardrobe'], $_LANG['tabledeviceu'], $_LANG['tabledevicemodel'], 
                $_LANG['tabledevicesignature'], $_LANG['tabledeviceip'], 
            'Room', 'Wardrobe', 'U', 'Model', 'Signature', 'IP');
        
$tablesHeads->getPort(0, 'second-part', $_LANG['tableport2'], 'Port2');
        
$tablesHeads->getEnding(2);
        
$tablesHeads->partTable(1, $connection, $querySecondPart, 'idSecondPart', 'Port2', 'forms/editSecondPart.php', $_LANG['searcherrorbadvalues']);