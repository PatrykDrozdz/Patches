<?php

include 'tables/heads/building.php';
include 'tables/heads/device.php';
include 'tables/heads/port.php';
include 'tables/heads/id.php';

$querySecondPart = "SELECT secondpart.idSecondPart, building.BuildingName, devices.Room, devices.Wardrobe, devices.U, devices.Model, devices.Signature, 
                                        devices.IP, secondpart.Port2 FROM secondpart INNER JOIN devices ON (secondpart.Devices_idDevices = devices.idDevices) 
                                        INNER JOIN building ON (secondpart.Building_idBuilding = building.idBuilding) ORDER BY `$sort` $upDown";

$getComponentsLoged->getAdditionalMenu($_LANG['placeholdersearch'], $_LANG['seekbuttontitle'], 'second-part', $_LANG['searcherrornovalues']);

id($_LANG['tableid'], 'second-part', 'idSecondPart');

building($_LANG['buildingname'], 'second-part', 'BuildingName');
        
device($_LANG['tabledeviceroom'], $_LANG['tabledevicewardrobe'], $_LANG['tabledeviceu'], $_LANG['tabledevicemodel'], 
                $_LANG['tabledevicesignature'], $_LANG['tabledeviceip'], 'second-part', 
            'Room', 'Wardrobe', 'U', 'Model', 'Signature', 'IP');
        
port($_LANG['tableport2'], 'second-part', 'Port2');

$tablesHeads->getEnding(2);

$tablesHeads->partTable(1, $connection, $querySecondPart, 'idSecondPart', 'Port2', 'forms/editSecondPart.php', $_LANG['searcherrorbadvalues']);