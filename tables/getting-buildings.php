<?php

include 'tables/heads/building.php';
include 'tables/heads/id.php';

$selectBuildingsQuery = "SELECT * FROM building ORDER BY `$sort` $upDown";

$getComponentsLoged->getAdditionalMenu($_LANG['placeholdersearch'], $_LANG['seekbuttontitle'], 'buildings', $_LANG['searcherrornovalues']);
        
id($_LANG['tableid'], 'buildings', 'idBuilding');  

building($_LANG['buildingname'], 'buildings', 'BuildingName');

$tablesHeads->getEnding(1);

$tablesHeads->Buildings(1, $connection, $selectBuildingsQuery, 'forms/editDeleteBuilding.php', $_LANG['searcherrorbadvalues']);

include 'forms/addBuilding.php';                    