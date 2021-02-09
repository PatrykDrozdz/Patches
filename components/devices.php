<?php include 'strings/language.php'; ?>
    <title><?php echo $_LANG['devicestitle'];?></title>
</head>
    <body onload="getDatas('devices', 'idDevices', 'ASC')">
        
        <header>
                <h1><?php echo $_LANG['applicationnametitle'];?></h1>
                <h5><?php echo $_LANG['devicestitle'];?></h5>
        </header> 
        
        <?php 
        
        $getComponents = new componetnsClassLoged();
        $getComponents->getMenu();
        
        ?>
                <div id="devices" class="table-responsive"></div>