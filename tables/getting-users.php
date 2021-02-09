<?php

include 'tables/heads/id.php';

$getComponentsLoged->getAdditionalMenu($_LANG['placeholdersearch'], $_LANG['seekbuttontitle'], 'users', $_LANG['searcherrornovalues']);

$selectUsersQuery = "SELECT * FROM userstable ORDER BY `$sort` $upDown";

id($_LANG['tableid'], 'users', 'idUsersTable');

id($_LANG['userlogin'], 'users', 'loginUser');

id($_LANG['userpassword'], 'users', 'passUser');

$tablesHeads->getEnding(1);

$tablesHeads->AdminsUsers(1, $connection, $selectUsersQuery, 'forms/editDeleteUser.php', 
        'idUsersTable', 'loginUser', 'passUser', $_LANG['searcherrorbadvalues']);

include 'forms/addUser.php';