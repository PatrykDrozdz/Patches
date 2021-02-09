<?php include 'strings/language.php'; ?>
    <title><?php echo $_LANG['patchmap'];?></title>
</head> 
    <body onload="getDatas('main-page', 'idCommonPart', 'ASC')">
        
        <header>
                <h1><?php echo $_LANG['applicationnametitle'];?></h1>
                <h5><?php echo $_LANG['patchmap'];?></h5>
        </header> 
        
        <?php

        $getComponents = new componetnsClassLoged();
        $getComponents->getMenu();
        
        ?>
        
        <div id="main-page" class="table-responsive"></div>