<?php

require_once 'connect.php';

include 'classes/componentsClassLoged.php';
$getComponentsLoged = new componetnsClassLoged();

include 'classes/MySQLiLoging.php';
$connection = new MySQLiLoging($host, $db_user, $db_password, $db_name);

include 'classes/SomeFunctions.php';
$someFunctions = new SomeFunctions();

include 'classes/mathFunctions.php';
$mathFun = new mathFunctions();

include 'classes/Strings.php';
$strings = new Strings();

include 'getBuildings.php';

include 'classes/tablesGet.php';
include 'classes/tablesHeads.php';
$tablesHeads = new tablesHeads();

include 'strings/language.php';
include 'strings/modalLanguage.php';

session_start();

$ip = $_SERVER['REMOTE_ADDR'];
$adminId = $_SESSION['idAdminsTable'];
$adminLoginLoged = $_SESSION['loginAdmin'];
$hourdate = date("H:i:s d.m.Y");



