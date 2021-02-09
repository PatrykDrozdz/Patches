<?php

include 'tables/heads/id.php';

$getComponentsLoged->getAdditionalMenu($_LANG['placeholdersearch'], $_LANG['seekbuttontitle'], 'users-logs', $_LANG['searcherrornovalues']);

$selectUsersLogsQuery = "SELECT logsofusers.idLogsOfUsers, logsofusers.executedQuerys, 
    logsofusers.IPAddress, logsofusers.hourdate, userstable.loginUser FROM logsofusers 
    INNER JOIN userstable ON logsofusers.UsersTable_idUsersLogs = userstable.idUsersTable ORDER BY `$sort` $upDown";

id($_LANG['tableid'], 'users-logs', 'idLogsOfUsers');

id($_LANG['hourdate'], 'users-logs', 'hourdate');

id($_LANG['User'], 'users-logs', 'loginUser');

id($_LANG['Log'], 'users-logs', 'executedQuerys');

id($_LANG['fromipaddress'], 'users-logs', 'IPAddress');

$tablesHeads->getEnding(0);

$tablesHeads->getLogs($connection, $selectUsersLogsQuery, 'idLogsOfUsers', 'loginUser', $_LANG['searcherrorbadvalues']);