<?php include 'strings/language.php'; ?>
    <title><?php echo $_LANG['usersfailloginstrieltitle'];?></title>
</head>
    <body onload="getDatas('failed-users-logings-triels', 'idFailedUsersLogins', 'ASC')">
        
        <header>
                <h1><?php echo $_LANG['applicationnametitle'];?></h1>
                <h5><?php echo $_LANG['usersfailloginstrieltitle'];?></h5>
        </header>
        
        <?php 
        
        $getComponents = new componetnsClassLoged();
        $getComponents->getMenu();
        
        ?>
        
        <div id="failed-users-logings-triels" class="table-responsive"></div>

