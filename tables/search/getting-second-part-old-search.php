<?php
   
$querySecondPartOldSearch = "SELECT oldsecondpart.idOldSecondPart, building.BuildingName, devices.Room, devices.Wardrobe, devices.U, devices.Model, devices.Signature, 
    devices.IP, oldsecondpart.Port2 FROM oldsecondpart INNER JOIN devices ON (oldsecondpart.Devices_idDevices = devices.idDevices) 
    INNER JOIN building ON (oldsecondpart.Building_idBuilding = building.idBuilding) WHERE BuildingName LIKE '%$value%' OR Room LIKE '%$value%' OR Wardrobe LIKE '%$value%' OR U LIKE '%$value%' 
    OR Model LIKE '%$value%' OR Signature LIKE '%$value%' OR IP LIKE '%$value%' OR Port2 LIKE '%$value%' ORDER BY idOldSecondPart";

$getComponentsLoged->getAdditionalMenu($_LANG['placeholdersearch'], $_LANG['seekbuttontitle'], 'second-part-old', $_LANG['searcherrornovalues']);
        
$tablesHeads->getIdhead(0, 'second-part-old', $_LANG['tableid'], 'idOldSecondPart');

$tablesHeads->getBuildinghead(0, 'second-part-old', $_LANG['buildingname'], 'BuildingName');

$tablesHeads->getDevice(0, 'second-part-old', $_LANG['tabledeviceroom'], $_LANG['tabledevicewardrobe'], $_LANG['tabledeviceu'], $_LANG['tabledevicemodel'], 
                $_LANG['tabledevicesignature'], $_LANG['tabledeviceip'], 
            'Room', 'Wardrobe', 'U', 'Model', 'Signature', 'IP');
        
$tablesHeads->getPort(0, 'second-part-old', $_LANG['tableport2'], 'Port2');
        
$tablesHeads->getEnding(0);
        
$tablesHeads->partTable(0, $connection, $querySecondPartOldSearch, 'idOldSecondPart', 'Port2', 'forms/editSecondPart.php', $_LANG['searcherrorbadvalues']);