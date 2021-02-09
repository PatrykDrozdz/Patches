<?php

$selectAdminsFailedLogsQuery = "SELECT * FROM faileduserslogins WHERE executedQuerys LIKE '%$value%' OR 
    IPAddress LIKE '%$value%' OR hourdate LIKE '%$value%' ORDER BY idFailedUsersLogins";

$getComponentsLoged->getAdditionalMenu($_LANG['placeholdersearch'], $_LANG['seekbuttontitle'], 'failed-users-logings-triels', $_LANG['searcherrornovalues']);


$tablesHeads->failedLogHead(0, 'failed-users-logings-triels', $_LANG['tableid'], $_LANG['hourdate'], 
        $_LANG['Log'], $_LANG['fromipaddress'],
        'idFailedUsersLogins', 'hourdate', 'executedQuerys', 'IPAddress');

$tablesHeads->getEnding(0);

$tablesHeads->getFailedLogs($connection, $selectAdminsFailedLogsQuery, 
        'idFailedUsersLogins', $_LANG['searcherrorbadvalues']);