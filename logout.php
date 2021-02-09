<?php

include 'includedfiles.php';

$adminLogedOut = $_LANG['adminlogedout'];
$adminId = $_SESSION['idAdminsTable'];


$adminLogingOut = "INSERT INTO logsofadmins(idLogsOfAdmins, "
                            . "executedQuerys, IPAddress, hourdate, AdminsTable_idAdminsLogs)"
                            . "VALUES(NULL, '$adminLogedOut', '$ip', '$hourdate', '$adminId')";

$connection->queryExecuter($connection, $adminLogingOut);

session_unset();

header('Location: index.php');