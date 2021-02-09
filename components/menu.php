<?php include 'strings/language.php';?>
        <div class="conatiner">
            
            <div class="navbar navbar-default" id="nav">
                <div class="container-fluid">
                    <div class="navbar-header">
                        <a class="navbar-brand glyphicon glyphicon-home" 
                           href="adminpanel.php?page=main-loged">
                            <?php echo $_LANG['navbartitle'];?></a>
                    </div>
                    
                    <ul class="nav navbar-nav navbar-right">
                        
                            <li><!-- dropdown-->
                                <a href="adminpanel.php?page=main-loged">
                                    <span class="glyphicon glyphicon-menu-down"></span>
                                  <?php echo $_LANG['navbaractivepatchs'];?></a>
                                  <ul class="dropdown-menu">
                                      <li><a href="adminpanel.php?page=common-part"> 
                                          <span class="glyphicon glyphicon-list-alt"></span>
                                            <?php echo $_LANG['navbarpatchs'];?></a></li>
                                      <li><a href="adminpanel.php?page=first-part"> 
                                        <span class="glyphicon glyphicon-th-list"></span> 
                                            <?php echo $_LANG['navbarfirstpart'];?></a></li>
                                      <li><a href="adminpanel.php?page=second-part"> 
                                        <span class="glyphicon glyphicon-th-list"></span> 
                                            <?php echo $_LANG['navbarsecondpart'];?></a></li>
                                  </ul>
                            </li>
                            <li><!-- dropdown-->
                                <a href="adminpanel.php?page=patches-old">
                                    <span class="glyphicon glyphicon-menu-down"></span>
                                  <?php echo $_LANG['navbarnotactivepatchs'];?></a>
                                    <ul class="dropdown-menu"> 
                                        <li><a href="adminpanel.php?page=common-part-old"> 
                                            <span class="glyphicon glyphicon-list-alt"></span> 
                                                <?php echo $_LANG['navbarpatchsold'];?></a></li>
                                        <li><a href="adminpanel.php?page=first-part-old"> 
                                            <span class="glyphicon glyphicon-th-list"></span> 
                                                <?php echo $_LANG['navbarfirstpartold'];?></a></li>
                                        <li><a href="adminpanel.php?page=second-part-old"> 
                                            <span class="glyphicon glyphicon-th-list"></span> 
                                                <?php echo $_LANG['navbarsecondpartold'];?></a></li>
                                    </ul>
                           </li>
                        <li><a href="adminpanel.php?page=buildings"> 
                            <span class="glyphicon glyphicon-th-list"></span> 
                                <?php echo $_LANG['navbarbuildinglist'];?></a></li>
                        <li><a href="adminpanel.php?page=devices"> 
                            <span class="glyphicon glyphicon-hdd"></span> 
                                <?php echo $_LANG['navbardevices'];?></a></li>
                        <li><a href="adminpanel.php?page=admins"> 
                            <span class="glyphicon glyphicon-lock"></span> 
                                <?php echo $_LANG['navbaradmins'];?></a></li>
                        <li><a href="adminpanel.php?page=users"> 
                            <span class="glyphicon glyphicon-user"></span> 
                                <?php echo $_LANG['navbarusers'];?></a></li>
                        <li><!-- dropdown-->
                            <a><span class="glyphicon glyphicon-menu-down"></span>
                                  <?php echo $_LANG['navbarlogs'];?></a>
                            <ul class="dropdown-menu">
                                <li><a href="adminpanel.php?page=admins-logs"> 
                                    <span class="glyphicon glyphicon-lock"></span> 
                                        <?php echo $_LANG['navbaradminlogs'];?></a></li>
                                <li><a href="adminpanel.php?page=users-logs"> 
                                    <span class="glyphicon glyphicon-user"></span> 
                                        <?php echo $_LANG['navbaruserslogs'];?></a></li>
                                <li><a href="adminpanel.php?page=failed-admins-logings-triels"> 
                                    <span class="glyphicon glyphicon-menu-hamburger"></span> 
                                        <?php echo $_LANG['navbarfailedadminslogs'];?></a></li>
                                <li><a href="adminpanel.php?page=failed-users-logings-triels"> 
                                    <span class="glyphicon glyphicon-menu-hamburger"></span> 
                                        <?php echo $_LANG['navbarfaileduserslogs'];?></a></li>
                            </ul>
                        </li>
                        <li><a href="logout.php"> 
                            <span class="glyphicon glyphicon-log-out"></span> 
                                <?php echo $_LANG['navbarlogout'];?></a>
                        </li>
                    </ul>
                </div>
            </div>

            <div class="main-page-loged">