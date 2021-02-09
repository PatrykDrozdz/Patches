<?php

include 'tables/heads/commonPartFirst.php';
include 'tables/heads/commonPartSecond.php';

$queryCommonPart = "SELECT * FROM commonpart ORDER BY `$sort` $upDown";

$getComponentsLoged->getAdditionalMenu($_LANG['placeholdersearch'], $_LANG['seekbuttontitle'], 'common-part', $_LANG['searcherrornovalues']);

commonPartFirst($_LANG['tableid'], $_LANG['tablecompany'], $_LANG['tableproduct'], 'common-part', 'idCommonPart', 'Company', 'Product');

commonPartSecond($_LANG['tablevlan'], $_LANG['tablepatchcord'], $_LANG['tableclientsocketno'], 
                $_LANG['tableroomnno'], $_LANG['tableacl'], $_LANG['tabledescription'], 
                $_LANG['tableaction'],
            'common-part', 'VLAN', 'Patchcord', 'ClientSocketsNo', 'RoomNo', 'ACL', 
            'Description', 'Action');

$tablesHeads->getEnding(2);

$tablesHeads->commonPartTable(1, 'idCommonPart', $connection, $queryCommonPart, $_LANG['searcherrorbadvalues']);
