<?php include 'strings/language.php'; ?>
    <title><?php echo $_LANG['adminlogstitle'];?></title>
</head>
    <body onload="getDatas('admins-logs', 'idLogsOfAdmins', 'ASC')">
        
        <header>
                <h1><?php echo $_LANG['applicationnametitle'];?></h1>
                <h5><?php echo $_LANG['adminlogstitle'];?></h5>
        </header> 
        
        <?php 
        
        $getComponents = new componetnsClassLoged();
        $getComponents->getMenu();
        
        ?>
        
        <div id="admins-logs" class="table-responsive"></div>

