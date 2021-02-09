<?php include 'strings/language.php'; ?>
    <title><?php echo $_LANG['userstitle'];?></title>
</head>
    <body onload="getDatas('users', 'idUsersTable', 'ASC')">

        <header>
                <h1><?php echo $_LANG['applicationnametitle'];?></h1>
                <h5><?php echo $_LANG['userstitle'];?></h5>
        </header>        
        
        <?php 
        
        $getComponents = new componetnsClassLoged();
        $getComponents->getMenu();
        
        ?>
        
        <div id="users" class="table-responsive"></div>