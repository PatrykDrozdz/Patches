<?php

$selectAdminsFailedLogsQuery = "SELECT * FROM failedadminslogins WHERE executedQuerys LIKE 
        '%$value%' OR IPAddress LIKE '%$value%' OR hourdate LIKE '%$value%' ORDER BY idFailedAdminsLogins";

$getComponentsLoged->getAdditionalMenu($_LANG['placeholdersearch'], $_LANG['seekbuttontitle'], 'failed-admins-logings-triels', $_LANG['searcherrornovalues']);


$tablesHeads->failedLogHead(0, 'failed-admins-logings-triels', $_LANG['tableid'], $_LANG['hourdate'], 
        $_LANG['Log'], $_LANG['fromipaddress'],
        'idFailedAdminsLogins', 'hourdate', 'executedQuerys', 'IPAddress');

$tablesHeads->getEnding(0);

$tablesHeads->getFailedLogs($connection, $selectAdminsFailedLogsQuery, 
        'idFailedAdminsLogins', $_LANG['searcherrorbadvalues']);