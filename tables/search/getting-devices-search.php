<?php

$devicesQuerySearch = "SELECT * FROM devices WHERE Room LIKE '%$value%' OR Wardrobe LIKE '%$value%' OR "
        . "U LIKE '%$value%' OR Model LIKE '%$value%' OR Signature LIKE '%$value%' OR "
        . "IP LIKE '%$value%' ORDER BY idDevices";

$getComponentsLoged->getAdditionalMenu($_LANG['placeholdersearch'], $_LANG['seekbuttontitle'], 'devices', $_LANG['searcherrornovalues']);
        
$tablesHeads->getIdhead(0, 'devices', $_LANG['tableid'], 'idDevices');

$tablesHeads->getDevice(0, $_LANG['tabledeviceroom'], $_LANG['tabledevicewardrobe'], $_LANG['tabledeviceu'], $_LANG['tabledevicemodel'], 
    $_LANG['tabledevicesignature'], $_LANG['tabledeviceip'], 'devices', 
    'Room', 'Wardrobe', 'U', 'Model', 'Signature', 'IP');

$tablesHeads->getEnding(1);

$tablesHeads->getDevices(1, $connection, $devicesQuerySearch, 'forms/editDeleteDevice.php', $_LANG['searcherrorbadvalues']);

include 'forms/addDevice.php';       