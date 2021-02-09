<?php include 'strings/language.php'; ?>
    <title><?php echo $_LANG['adminsfailloginstrieltitle'];?></title>
</head>    
    <body onload="getDatas('failed-admins-logings-triels', 'idFailedAdminsLogins', 'ASC')">
        
        <header>
                <h1><?php echo $_LANG['applicationnametitle'];?></h1>
                <h5><?php echo $_LANG['adminsfailloginstrieltitle'];?></h5>
        </header> 
        
        <?php 
        
        $getComponents = new componetnsClassLoged();
        $getComponents->getMenu();
        
        ?>
        
        <div id="failed-admins-logings-triels" class="table-responsive"></div>

