<?php include 'strings/language.php'; ?>
    <title><?php echo $_LANG['buildingslist'];?></title>
</head>
    <body onload="getDatas('buildings', 'idBuilding', 'ASC')">
        
        <header>
                <h1><?php echo $_LANG['applicationnametitle'];?></h1>
                <h5><?php echo $_LANG['buildingslist'];?></h5>
        </header> 
        
        <?php 
        
        $getComponents = new componetnsClassLoged();
        $getComponents->getMenu();
        
        ?>
                <div id="buildings" class="table-responsive"></div>