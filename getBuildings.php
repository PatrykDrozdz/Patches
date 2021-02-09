<?php

$connection->queryExecuter($connection, "SELECT * FROM building");

$resultBuilding = $connection->getResult();

$numRowsBuilding = $connection->rowCount($resultBuilding);

$connection->fetchAllDatas($resultBuilding);

$buildingRow = $connection->getRows();