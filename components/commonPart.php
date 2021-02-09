<?php include 'strings/language.php'; ?>
    <title><?php echo $_LANG['commonpatchpart'];?></title>
</head>    
    <body onload="getDatas('common-part', 'idCommonPart', 'ASC')">
        
        <header>
                <h1><?php echo $_LANG['applicationnametitle'];?></h1>
                <h5><?php echo $_LANG['commonpatchpart'];?></h5>
        </header> 
        
        <?php 
        
        $getComponents = new componetnsClassLoged();
        $getComponents->getMenu();
        
        ?>
                <div id="common-part" class="table-responsive"></div>