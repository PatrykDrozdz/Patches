<?php

$getComponentsLoged->getAdditionalMenu($_LANG['placeholdersearch'], $_LANG['seekbuttontitle'], 'users-logs', $_LANG['searcherrornovalues']);

$selectUsersLogsQuerySearch = "SELECT logsofusers.idLogsOfUsers, logsofusers.executedQuerys, 
    logsofusers.IPAddress, logsofusers.hourdate, userstable.loginUser FROM logsofusers 
    INNER JOIN userstable ON logsofusers.UsersTable_idUsersLogs = userstable.idUsersTable 
    WHERE executedQuerys LIKE '%$value%' OR IPAddress LIKE '%$value%' OR hourdate LIKE '%$value%' 
    OR loginUser LIKE '%$value%' ORDER BY idLogsOfUsers";

$tablesHeads->logHead(0, 'users-logs', $_LANG['tableid'], $_LANG['hourdate'], $_LANG['User'], $_LANG['Log'], $_LANG['fromipaddress'], 
            'idLogsOfUsers', 'hourdate', 'loginUser', 'executedQuerys', 'IPAddress');

$tablesHeads->getEnding(0);

$tablesHeads->getLogs($connection, $selectUsersLogsQuerySearch, 'idLogsOfUsers', 'loginUser', $_LANG['searcherrorbadvalues']);