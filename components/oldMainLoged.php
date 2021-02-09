<?php include 'strings/language.php'; ?>
    <title><?php echo $_LANG['patchmapold'];?></title>
</head>
    <body onload="getDatas('patches-old', 'idOldCommonPart', 'ASC')">
        
        <header>
                <h1><?php echo $_LANG['applicationnametitle'];?></h1>
                <h5><?php echo $_LANG['patchmapold'];?></h5>
        </header>
        
        <?php
        
        $getComponents = new componetnsClassLoged();
        $getComponents->getMenu();
        
        ?>
        
        <div id="patches-old" class="table-responsive"></div>