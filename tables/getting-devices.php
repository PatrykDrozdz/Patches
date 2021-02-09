<?php

include 'tables/heads/id.php';
include 'tables/heads/device.php';

$devicesQuery = "SELECT * FROM devices ORDER BY `$sort` $upDown";

$getComponentsLoged->getAdditionalMenu($_LANG['placeholdersearch'], $_LANG['seekbuttontitle'], 'devices', $_LANG['searcherrornovalues']);
        
id($_LANG['tableid'], 'devices', 'idDevices'); 

device($_LANG['tabledeviceroom'], $_LANG['tabledevicewardrobe'], $_LANG['tabledeviceu'], $_LANG['tabledevicemodel'], 
    $_LANG['tabledevicesignature'], $_LANG['tabledeviceip'], 'devices', 
    'Room', 'Wardrobe', 'U', 'Model', 'Signature', 'IP');

$tablesHeads->getEnding(1);

$tablesHeads->getDevices(1, $connection, $devicesQuery, 'forms/editDeleteDevice.php', $_LANG['searcherrorbadvalues']);

include 'forms/addDevice.php';       