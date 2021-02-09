<?php

$getComponentsLoged->getAdditionalMenu($_LANG['placeholdersearch'], $_LANG['seekbuttontitle'], 'admins', $_LANG['searcherrornovalues']);

$selectAdminsQuery = "SELECT * FROM adminstable WHERE `loginAdmin` LIKE '%$value%' ORDER BY `idAdminsTable`";

$tablesHeads->userHead(0, 'admins', $_LANG['tableid'], $_LANG['adminlogin'], 
        $_LANG['adminpassword'],  'idAdminsTable', 'loginAdmin', 'loginAdmin');

$tablesHeads->getEnding(1);

$tablesHeads->AdminsUsers(1, $connection, $selectAdminsQuery, 'forms/editDeleteAdmin.php', 'idAdminsTable', 
        'loginAdmin', 'passAdmin', $_LANG['searcherrorbadvalues']);

include 'forms/addAdmin.php';