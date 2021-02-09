<?php

include 'tables/heads/building.php';
include 'tables/heads/device.php';
include 'tables/heads/port.php';
include 'tables/heads/id.php';

$queryFirstPartOld = "SELECT oldfirstpart.idOldFirstPart, building.BuildingName, devices.Room, devices.Wardrobe, devices.U, 
    devices.Model, devices.Signature, devices.IP, oldfirstpart.Port1 FROM oldfirstpart 
    INNER JOIN devices ON (oldfirstpart.Devices_idDevices = devices.idDevices) 
    INNER JOIN building ON (oldfirstpart.Building_idBuilding = building.idBuilding) ORDER BY `$sort` $upDown";

$getComponentsLoged->getAdditionalMenu($_LANG['placeholdersearch'], $_LANG['seekbuttontitle'], 'first-part-old', $_LANG['searcherrornovalues']);

id($_LANG['tableid'], 'first-part-old', 'idOldFirstPart');

building($_LANG['buildingname'], 'first-part-old', 'BuildingName');
        
device($_LANG['tabledeviceroom'], $_LANG['tabledevicewardrobe'], $_LANG['tabledeviceu'], $_LANG['tabledevicemodel'], 
                $_LANG['tabledevicesignature'], $_LANG['tabledeviceip'], 'first-part-old', 
            'Room', 'Wardrobe', 'U', 'Model', 'Signature', 'IP');
        
port($_LANG['tableport1'], 'first-part-old', 'Port1');
                
$tablesHeads->getEnding(0);

$tablesHeads->partTable(0, $connection, $queryFirstPartOld, 'idOldFirstPart', 'Port1', 'forms/editFirstPart.php', $_LANG['searcherrorbadvalues']);
