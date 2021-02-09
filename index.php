<?php 

    session_start(); 

    if((isset($_SESSION['adminPatches'])) && 
            ($_SESSION['adminPatches']==true)){
        header('Location: adminpanel.php');
        exit();//opuszczanie skryptu
    }

    include 'classes/componentsClassMainPage.php';
    
    $getComponents = new componentsClassMainPage();
    
    if(isset($_SESSION['error'])){
        echo $_SESSION['error'];
        unset($_SESSION['error']);
    }
    
    $getComponents->getHead();
    $getComponents->getMainPage();
    
?>
