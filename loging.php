<?php

include 'includedfiles.php';

if ((!isset($_POST['login'])) || (!isset($_POST['pass']))){
    header('Location: index.php');
    exit();
	}

    if(isset($_POST['login']) && isset($_POST['pass'])){

        $log = $_POST['login'];
        $pass = $_POST['pass'];

        $log = $connection->injectionSafer($log);
        
        $indexString = $strings->getIndexString();
        
        try{
            
            $query = "SELECT * FROM adminstable WHERE loginAdmin = '%s'";
            
            $connection->queryLog($connection, $query, $log);
            
            $result = $connection->getResultLog();

            $howManyUsers = $connection->rowCount($result);
            
            //sprawdzanie, czy użytkownik jest w bazie
            if($mathFun->inequality($howManyUsers, 0)==true){
               
                $connection->fetchDatas($result);
            
                $row = $connection->getRows();
                
                //sprawdzanie hasła hashowanego
                if($connection->checkPass($pass, $row['passAdmin'])==TRUE) {

                    //$connection->logInto($result);

                    $_SESSION['adminPatches'] = true;
                    $_SESSION['idAdminsTable'] = $row['idAdminsTable'];//pobieranie Id użytkownika
                    $_SESSION['loginAdmin'] = $row['loginAdmin'];
                    $_SESSION['passAdmin'] = $row['passAdmin'];

                    unset($_SESSION['error']);
                    
                    $adminLoged = $_LANG['adminloged'];
                    $adminId = $_SESSION['idAdminsTable'];

                    $adminLog = "INSERT INTO logsofadmins(idLogsOfAdmins, "
                            . "executedQuerys, IPAddress, hourdate, AdminsTable_idAdminsLogs)"
                            . "VALUES(NULL, '$adminLoged', '$ip', '$hourdate', '$adminId')";
                    
                    $connection->queryExecuter($connection, $adminLog);

                    header('Location: adminpanel.php'); 
                    
                } else {
                    
                    $failLog = "INSERT INTO `failedadminslogins` VALUES (NULL, '$log', '$ip', '$hourdate')";
                    
                    $connection->queryExecuter($connection, $failLog);
                
                    $_SESSION['error'] = '<span class="list-group-item list-group-item-danger"'
                            . '>'.$_LANG['wrongloginandpassword'].'</span>';
                    header($indexString);

                }
                
                $connection->freeFetchedDatas($result);

            } else {
                    
                    $failLog = "INSERT INTO `failedadminslogins` VALUES (NULL, '$log', '$ip', '$hourdate')";
                    
                    $connection->queryExecuter($connection, $failLog);
                
                    $_SESSION['error'] = '<span class="list-group-item list-group-item-danger"'
                            . '>'.$_LANG['wrongloginandpassword'].'</span>';
                    header($indexString);

                }
            
        } catch(Exception $e) {
            
            $_SESSION['error'] = '<span class="list-group-item list-group-item-danger"'
                    . '>'.$_LANG['servererror'].'</span>';					

            header($indexString);

        }

        mysqli_close($connection);
    
    } else {
        
        $_SESSION['error'] = '<span class="list-group-item list-group-item-danger"'
                . '>'.$_LANG['nologiorpass'].'</span>';
        
        header($indexString);
        
    }
    //potrzebne do informacji
    //list-group-item list-group-item-success
    //class="list-group-item list-group-item-danger"