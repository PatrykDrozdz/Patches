<?php 

include 'includedfiles.php';

$tab = array();

$table = $_GET['table'];
$record = $_GET['record'];

$query = "SELECT * FROM ".$table." ORDER BY ".$record;

$connection->queryExecuter($connection, $query);
        
$result = $connection->getResult();
        
$numRows = $connection->rowCount($result);

for($i=0; $i<$numRows; $i++){
                             
    $connection->fetchDatas($result);
                             
    $row = $connection->getRows();
    
    $tab[$i] = $row[$record];
    echo '<option>'.$tab[$i].'<option>';

}

$connection->freeFetchedDatas($result);
/*
$tab = array_unique($tab);

for($i=0; $i<count($tab); $i++) {
    
    if($tab[$i]!=NULL){
    
        echo '<option>'.$tab[$i].'<option>';
    
    }
    
}*/
