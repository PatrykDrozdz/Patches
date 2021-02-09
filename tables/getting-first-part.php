<?php

include 'tables/heads/building.php';
include 'tables/heads/device.php';
include 'tables/heads/port.php';
include 'tables/heads/id.php';

$queryFirstPart = "SELECT firstpart.idFirstPart, building.BuildingName, devices.Room, devices.Wardrobe, devices.U, devices.Model, devices.Signature, 
    devices.IP, firstpart.Port1 FROM firstpart INNER JOIN devices ON (firstpart.Devices_idDevices = devices.idDevices) 
    INNER JOIN building ON (firstpart.Building_idBuilding = building.idBuilding) ORDER BY `$sort` $upDown";

$getComponentsLoged->getAdditionalMenu($_LANG['placeholdersearch'], $_LANG['seekbuttontitle'], 'first-part', $_LANG['searcherrornovalues']);

id($_LANG['tableid'], 'first-part', 'idFirstPart');

building($_LANG['buildingname'], 'first-part', 'BuildingName');
        
device($_LANG['tabledeviceroom'], $_LANG['tabledevicewardrobe'], $_LANG['tabledeviceu'], $_LANG['tabledevicemodel'], 
                $_LANG['tabledevicesignature'], $_LANG['tabledeviceip'], 'first-part', 
            'Room', 'Wardrobe', 'U', 'Model', 'Signature', 'IP');
        
port($_LANG['tableport1'], 'first-part', 'Port1');

$tablesHeads->getEnding(2);

$tablesHeads->partTable(1, $connection, $queryFirstPart, 'idFirstPart', 'Port1', 'forms/editFirstPart.php', $_LANG['searcherrorbadvalues']);