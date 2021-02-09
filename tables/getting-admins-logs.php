<?php

include 'tables/heads/id.php';

$getComponentsLoged->getAdditionalMenu($_LANG['placeholdersearch'], $_LANG['seekbuttontitle'], 'admins-logs', $_LANG['searcherrornovalues']);

$selectAdminsLogsQuery = "SELECT logsofadmins.idLogsOfAdmins, logsofadmins.executedQuerys, 
    logsofadmins.IPAddress, logsofadmins.hourdate, adminstable.loginAdmin FROM logsofadmins 
    INNER JOIN adminstable ON logsofadmins.AdminsTable_idAdminsLogs = adminstable.idAdminsTable ORDER BY `$sort` $upDown";

id($_LANG['tableid'], 'admins-logs', 'idLogsOfAdmins');

id($_LANG['hourdate'], 'admins-logs', 'hourdate');

id($_LANG['User'], 'admins-logs', 'loginAdmin');

id($_LANG['Log'], 'admins-logs', 'executedQuerys');

id($_LANG['fromipaddress'], 'admins-logs', 'IPAddress');

$tablesHeads->getEnding(0);

$tablesHeads->getLogs($connection, $selectAdminsLogsQuery, 'idLogsOfAdmins', 'loginAdmin', $_LANG['searcherrorbadvalues']);