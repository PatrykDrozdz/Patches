<?php

$getComponentsLoged->getAdditionalMenu($_LANG['placeholdersearch'], $_LANG['seekbuttontitle'], 'users', $_LANG['searcherrornovalues']);

$selectUsersQuerySearch = "SELECT * FROM userstable WHERE loginUser LIKE '%$value%' ORDER BY idUsersTable";

$tablesHeads->userHead(0, 'admins', $_LANG['tableid'], $_LANG['adminlogin'], 
        $_LANG['adminpassword'],  'idUsersTable', 'loginUser', 'loginUser');

$tablesHeads->getEnding(1);

$tablesHeads->AdminsUsers(1, $connection, $selectUsersQuerySearch, 'forms/editDeleteUser.php', 
        'idUsersTable', 'loginUser', 'passUser', $_LANG['searcherrorbadvalues']);

include 'forms/addUser.php';