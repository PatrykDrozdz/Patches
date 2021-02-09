<?php

include 'includedfiles.php';

if(isset($_GET['signature'])) {
    
    $sign = $_GET['signature'];
    
    $selectQuery = "SELECT * FROM devices WHERE Signature = '$sign'";
    
    $connection->queryExecuter($connection, $selectQuery);
    
    $result = $connection->getResult();
    
    $connection->fetchDatas($result);
    
    $row = $connection->getRows();
    
    $connection->freeFetchedDatas($result);
    
    $deviceObj = new \ stdClass();
	
    $deviceObj ->room = $row['Room'];
    $deviceObj ->wardrobe = $row['Wardrobe'];
    $deviceObj ->u = $row['U'];
    $deviceObj ->model = $row['Model'];
    $deviceObj ->ip = $row['IP'];

    $deviceJSON = json_encode($deviceObj);
	
    echo $deviceJSON;
    
}

