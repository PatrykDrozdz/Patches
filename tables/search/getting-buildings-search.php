<?php

$selectBuildingsQuery = "SELECT * FROM building WHERE `BuildingName` LIKE '%$value%' ORDER BY `idBuilding`";

$getComponentsLoged->getAdditionalMenu($_LANG['placeholdersearch'], $_LANG['seekbuttontitle'], 'buildings', $_LANG['searcherrornovalues']);
        
$tablesHeads->getIdhead(0, 'buildings', $_LANG['tableid'], 'idFirstPart');

$tablesHeads->getBuildinghead(0, 'buildings', $_LANG['buildingname'], 'BuildingName');

$tablesHeads->getEnding(1);

$tablesHeads->Buildings(1, $connection, $selectBuildingsQuery, 'forms/editDeleteBuilding.php', $_LANG['searcherrorbadvalues']);

include 'forms/addBuilding.php';                    