<?php

include 'tables/heads/id.php';

$selectUsersFailedLogsQuery = "SELECT * FROM faileduserslogins ORDER BY `$sort` $upDown";

$getComponentsLoged->getAdditionalMenu($_LANG['placeholdersearch'], $_LANG['seekbuttontitle'], 'failed-users-logings-triels', $_LANG['searcherrornovalues']);

id($_LANG['tableid'], 'failed-users-logings-triels', 'idFailedUsersLogins');

id($_LANG['hourdate'], 'failed-users-logings-triels', 'hourdate');

id($_LANG['Log'], 'failed-users-logings-triels', 'executedQuerys');

id($_LANG['fromipaddress'], 'failed-users-logings-triels', 'IPAddress');

$tablesHeads->getEnding(0);

$tablesHeads->getFailedLogs($connection, $selectUsersFailedLogsQuery, 
        'idFailedUsersLogins', $_LANG['searcherrorbadvalues']);