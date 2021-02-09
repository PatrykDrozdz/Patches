<?php include 'strings/language.php'; ?>
    <title><?php echo $_LANG['secondpatchpartold'];?></title>
</head>
    <body onload="getDatas('second-part-old', 'idOldSecondPart', 'ASC')">
        
        <header>
                <h1><?php echo $_LANG['applicationnametitle'];?></h1>
                <h5><?php echo $_LANG['secondpatchpartold'];?></h5>
        </header>
        
        <?php 
        
        $getComponents = new componetnsClassLoged();
        $getComponents->getMenu();
        
        ?>
                <div id="second-part-old" class="table-responsive"></div>