<?php include 'strings/language.php'; ?>
    <title><?php echo $_LANG['admintitle'];?></title>
</head>
    <body onload="getDatas('admins', 'idAdminsTable', 'ASC')">
        
        <header>
                <h1><?php echo $_LANG['applicationnametitle'];?></h1>
                <h5><?php echo $_LANG['admintitle'];?></h5>
        </header> 
        
        <?php 
        
        $getComponents = new componetnsClassLoged();
        $getComponents->getMenu();
        
        ?>
        
        <div id="admins" class="table-responsive"></div>