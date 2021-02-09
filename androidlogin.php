<?php 
	
    require_once 'connect.php';
    include 'classes/MySQLiLoging.php';
    include 'classes/mathFunctions.php';
    include 'strings/androidLanguage.php';
     
    $mathFun = new mathFunctions();
    $connection = new MySQLiLoging($host, $db_user, $db_password, $db_name);
    //header('Content-Type: application/json');
    
    if(isset($_POST['loginUser']) && isset($_POST['passUser'])){
        
        $login = $_POST['loginUser'];
        $password = $_POST['passUser'];
        
        $loginsafe = $connection->injectionSafer($login);
        
        try{
            
            $query = "SELECT * FROM userstable WHERE loginUser = '%s'";
            
            $connection->queryLog($connection, $query, $loginsafe);

            $result = $connection->getResultLog();

            $howManyUsers = $connection->rowCount($result);
            
            if($mathFun->inequality($howManyUsers, 0)==true){
               //echo 'welcomeuser 1';
                $connection->fetchDatas($result);
            
                $row = $connection->getRows();
                
                if($connection->checkPass($password, $row['passUser'])==TRUE) {
                    echo 'welcomeuser';
                    //$json['success'] = 'Witaj'.$login;
                    //echo json_encode($json);
                
                } else {
                    echo $_LANG['androidfailedloginpass'];
                    //$json['error'] = $_LANG['androidfailedloginpass'];
                    //echo json_encode($json);
                }
                
            } else {
                echo $_LANG['androidfailedloginpass'];
                //$json['error'] = $_LANG['androidfailedloginpass'];
                //echo json_encode($json);
            }
        
        
        } catch (Exception $e) {
            //echo $e.'</br>';
            echo $_LANG['androidservererror'];
            //$json['error'] = $_LANG['androidservererror'];
            //echo json_encode($json);
        }

        
    } 