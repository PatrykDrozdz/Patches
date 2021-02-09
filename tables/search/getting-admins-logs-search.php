<?php

$getComponentsLoged->getAdditionalMenu($_LANG['placeholdersearch'], $_LANG['seekbuttontitle'], 'admins-logs', $_LANG['searcherrornovalues']);

$selectAdminsLogsQuerySearch = "SELECT logsofadmins.idLogsOfAdmins, logsofadmins.executedQuerys, 
    logsofadmins.IPAddress, logsofadmins.hourdate, adminstable.loginAdmin FROM logsofadmins 
    INNER JOIN adminstable ON logsofadmins.AdminsTable_idAdminsLogs = adminstable.idAdminsTable WHERE 
    executedQuerys LIKE '%$value%' OR IPAddress LIKE '%$value%' OR hourdate LIKE '%$value%'
    OR loginAdmin LIKE '%$value%' ORDER BY `idLogsOfAdmins`";

$tablesHeads->logHead(0, 'admins-logs', $_LANG['tableid'], $_LANG['hourdate'], $_LANG['User'], $_LANG['Log'], $_LANG['fromipaddress'], 
            'idLogsOfAdmins', 'hourdate', 'loginAdmin', 'executedQuerys', 'IPAddress');

$tablesHeads->getEnding(0);

$tablesHeads->getLogs($connection, $selectAdminsLogsQuerySearch, 'idLogsOfAdmins', 'loginAdmin', $_LANG['searcherrorbadvalues']);