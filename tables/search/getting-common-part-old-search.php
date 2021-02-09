<?php

$querySearchOldCommonPart = "SELECT * FROM oldcommonpart WHERE Company LIKE '%$value%' OR Product LIKE '%$value%' OR VLAN LIKE '%$value%' OR 
    Patchcord LIKE '%$value%' OR ClientSocketsNo LIKE '%$value%' OR RoomNo LIKE '%$value%' OR ACL LIKE '%$value%' OR 
    Description LIKE '%$value%' OR Action LIKE '%$value%' ORDER BY idOldCommonPart";
   
$getComponentsLoged->getAdditionalMenu($_LANG['placeholdersearch'], $_LANG['seekbuttontitle'], 'common-part-old', $_LANG['searcherrornovalues']);
        
$tablesHeads->CommonPartHeadFirst(0, 'common-part-old', $_LANG['tableid'], $_LANG['tablecompany'], $_LANG['tableproduct'], 'idCommonPart', 'Company', 'Product');
        
$tablesHeads->CommonPartHeadSecond(0, 'common-part-old', $_LANG['tablevlan'], $_LANG['tablepatchcord'], $_LANG['tableclientsocketno'], $_LANG['tableroomnno'], 
    $_LANG['tableacl'], $_LANG['tabledescription'], $_LANG['tableaction'], 'VLAN', 'Patchcord', 'ClientSocketsNo', 'RoomNo', 'ACL', 'Description', 'Action');
        
$tablesHeads->getEnding(2);
        
$tablesHeads->commonPartTable(0, 'idOldCommonPart', $connection, $querySearchOldCommonPart, $_LANG['searcherrorbadvalues']);