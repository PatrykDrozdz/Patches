<?php include 'strings/language.php'; ?>
    <title><?php echo $_LANG['firstpatchpartold'];?></title>
</head>
    <body onload="getDatas('first-part-old', 'idOldFirstPart', 'ASC')">
        
        <header>
                <h1><?php echo $_LANG['applicationnametitle'];?></h1>
                <h5><?php echo $_LANG['firstpatchpartold'];?></h5>
        </header>
        
        <?php 
        
        $getComponents = new componetnsClassLoged();
        $getComponents->getMenu();
        
        ?>
                <div id="first-part-old" class="table-responsive"></div>