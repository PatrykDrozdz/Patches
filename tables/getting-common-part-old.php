<?php

include 'tables/heads/commonPartFirst.php';
include 'tables/heads/commonPartSecond.php';

$getComponentsLoged->getAdditionalMenu($_LANG['placeholdersearch'], $_LANG['seekbuttontitle'], 'common-part-old', $_LANG['searcherrornovalues']);

$queryOldCommonPart = "SELECT * FROM oldcommonpart ORDER BY `$sort` $upDown";

commonPartFirst($_LANG['tableid'], $_LANG['tablecompany'], $_LANG['tableproduct'], 'common-part-old', 'idOldCommonPart', 'Company', 'Product');

commonPartSecond($_LANG['tablevlan'], $_LANG['tablepatchcord'], $_LANG['tableclientsocketno'], 
                $_LANG['tableroomnno'], $_LANG['tableacl'], $_LANG['tabledescription'], 
                $_LANG['tableaction'],
            'common-part-old', 'VLAN', 'Patchcord', 'ClientSocketsNo', 'RoomNo', 'ACL', 
            'Description', 'Action');

$tablesHeads->getEnding(0);

$tablesHeads->commonPartTable(0, 'idOldCommonPart', $connection, $queryOldCommonPart, $_LANG['searcherrorbadvalues']);    