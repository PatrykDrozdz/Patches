<?php

include 'tables/heads/id.php';

$selectAdminsFailedLogsQuery = "SELECT * FROM failedadminslogins ORDER BY `$sort` $upDown";

$getComponentsLoged->getAdditionalMenu($_LANG['placeholdersearch'], $_LANG['seekbuttontitle'], 'failed-admins-logings-triels', $_LANG['searcherrornovalues']);

id($_LANG['tableid'], 'failed-admins-logings-triels', 'idFailedAdminsLogins');

id($_LANG['hourdate'], 'failed-admins-logings-triels', 'hourdate');

id($_LANG['Log'], 'failed-admins-logings-triels', 'executedQuerys');

id($_LANG['fromipaddress'], 'failed-admins-logings-triels', 'IPAddress');

$tablesHeads->getEnding(0);

$tablesHeads->getFailedLogs($connection, $selectAdminsFailedLogsQuery, 
        'idFailedAdminsLogins', $_LANG['searcherrorbadvalues']);