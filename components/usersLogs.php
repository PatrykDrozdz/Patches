<?php include 'strings/language.php'; ?>
    <title><?php echo $_LANG['userslogstitle'];?></title>
</head>
    <body onload="getDatas('users-logs', 'idLogsOfUsers', 'ASC')">
        
        <header>
                <h1><?php echo $_LANG['applicationnametitle'];?></h1>
                <h5><?php echo $_LANG['userslogstitle'];?></h5>
        </header>           
        
        <?php 
        
        $getComponents = new componetnsClassLoged();
        $getComponents->getMenu();
        
        ?>
        
        <div id="users-logs" class="table-responsive"></div>

