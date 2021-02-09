<?php

include 'includedfiles.php';

 if(!isset($_SESSION['adminPatches'])){
        header('Location: index.php');
        exit();
    }
    
    $page = isset($_GET['page']) ? $_GET['page'] : 'main-loged';
    
    $getComponentsLoged->getHead();
    
    if(isset($_SESSION['error'])){
        echo $_SESSION['error'];
        unset($_SESSION['error']);
    }
    
    if(isset($_SESSION['info'])){
        echo $_SESSION['info'];
        unset($_SESSION['info']);
    }
    
    switch($page){
        
        case 'main-loged':
            $getComponentsLoged->getMainPageLoged();
            break;
        
	case 'common-part':
	    $getComponentsLoged->getCommonPart();
	    break;
        
	case 'first-part':
	    $getComponentsLoged->getFirstPart();
	    break;
        
	case 'second-part':
	    $getComponentsLoged->getSecondPart();
	    break;
        
        case 'patches-old':
	    $getComponentsLoged->getOldPatches();
	    break;
        
        case 'common-part-old':
	    $getComponentsLoged->getOldCommonPart();
	    break;
        
	case 'first-part-old':
	    $getComponentsLoged->getOldFirstPart();
	    break;
        
	case 'second-part-old':            
	    $getComponentsLoged->getOldSecondPart();
	    break;
        
        case 'buildings':
            $getComponentsLoged->getBuildings();
            break;
        
	case 'admins':
            $getComponentsLoged->getAdmins();
	    break;
        
	case 'users':
            $getComponentsLoged->getUsers();
	    break;
        
        case 'admins-logs':
            $getComponentsLoged->getAdminsLogs();
            break;
        
        case 'users-logs':
            $getComponentsLoged->getUsersLogs();
            break;
        
        case 'failed-admins-logings-triels':
            $getComponentsLoged->getAdminsFailLoginsTriels();
            break;
        
        case 'failed-users-logings-triels':
            $getComponentsLoged->getUsersFailLoginsTriels();
            break;
        
        case 'devices':
            $getComponentsLoged->getDevices();
            break;
    }
    
    $getComponentsLoged->getFooter();