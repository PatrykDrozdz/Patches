<?php include 'strings/language.php'; ?>
    <title><?php echo $_LANG['firstpatchpart'];?></title>
</head>
    <body onload="getDatas('first-part', 'idFirstPart', 'ASC')">
        
        <header>
                <h1><?php echo $_LANG['applicationnametitle'];?></h1>
                <h5><?php echo $_LANG['firstpatchpart'];?></h5>
        </header>
        
        <?php 
        
        $getComponents = new componetnsClassLoged();
        $getComponents->getMenu();
        
        ?>
                <div id="first-part" class="table-responsive"></div>