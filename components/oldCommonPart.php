<?php include 'strings/language.php'; ?>
    <title><?php echo $_LANG['commonpatchpartold'];?></title>
</head>
    <body onload="getDatas('common-part-old', 'idOldCommonPart', 'ASC')">
        
        <header>
                <h1><?php echo $_LANG['applicationnametitle'];?></h1>
                <h5><?php echo $_LANG['commonpatchpartold'];?></h5>
        </header>
        
        <?php 
        
        $getComponents = new componetnsClassLoged();
        $getComponents->getMenu();
        
        ?>
                <div id="common-part-old" class="table-responsive"></div>