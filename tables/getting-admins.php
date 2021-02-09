<?php

include 'tables/heads/id.php';

$getComponentsLoged->getAdditionalMenu($_LANG['placeholdersearch'], $_LANG['seekbuttontitle'], 'admins', $_LANG['searcherrornovalues']);

$selectAdminsQuery = "SELECT * FROM adminstable ORDER BY `$sort` $upDown";

id($_LANG['tableid'], 'admins', 'idAdminsTable');

id($_LANG['adminlogin'], 'admins', 'loginAdmin');

id($_LANG['adminpassword'], 'admins', 'passAdmin');

$tablesHeads->getEnding(1);

$tablesHeads->AdminsUsers(1, $connection, $selectAdminsQuery, 'forms/editDeleteAdmin.php', 'idAdminsTable', 
        'loginAdmin', 'passAdmin', $_LANG['searcherrorbadvalues']);

include 'forms/addAdmin.php';