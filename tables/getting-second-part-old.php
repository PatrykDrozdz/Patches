<?php

include 'tables/heads/building.php';
include 'tables/heads/device.php';
include 'tables/heads/port.php';
include 'tables/heads/id.php';

$querySecondPartOld = "SELECT oldsecondpart.idOldSecondPart, building.BuildingName, devices.Room, devices.Wardrobe, devices.U, devices.Model, devices.Signature, 
    devices.IP, oldsecondpart.Port2 FROM oldsecondpart INNER JOIN devices ON (oldsecondpart.Devices_idDevices = devices.idDevices) 
    INNER JOIN building ON (oldsecondpart.Building_idBuilding = building.idBuilding) ORDER BY `$sort` $upDown";

$getComponentsLoged->getAdditionalMenu($_LANG['placeholdersearch'], $_LANG['seekbuttontitle'], 'second-part-old', $_LANG['searcherrornovalues']);

id($_LANG['tableid'], 'second-part-old', 'idOldSecondPart');

building($_LANG['buildingname'], 'second-part-old', 'BuildingName');
        
device($_LANG['tabledeviceroom'], $_LANG['tabledevicewardrobe'], $_LANG['tabledeviceu'], $_LANG['tabledevicemodel'], 
                $_LANG['tabledevicesignature'], $_LANG['tabledeviceip'], 'second-part-old', 
            'Room', 'Wardrobe', 'U', 'Model', 'Signature', 'IP');
        
port($_LANG['tableport2'], 'second-part-old', 'Port2');

$tablesHeads->getEnding(0);

$tablesHeads->partTable(0, $connection, $querySecondPartOld, 'idOldSecondPart', 'Port2', 'forms/editSecondPart.php', $_LANG['searcherrorbadvalues']);