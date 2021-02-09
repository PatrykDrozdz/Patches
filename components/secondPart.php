<?php include 'strings/language.php'; ?>
    <title><?php echo $_LANG['secondpatchpart'];?></title>
</head>
    <body onload="getDatas('second-part', 'idSecondPart', 'ASC')">
        
        <header>
                <h1><?php echo $_LANG['applicationnametitle'];?></h1>
                <h5><?php echo $_LANG['secondpatchpart'];?></h5>
        </header>
        
        <?php 
        
        $getComponents = new componetnsClassLoged();
        $getComponents->getMenu();
        
        ?>
                <div id="second-part" class="table-responsive"></div>