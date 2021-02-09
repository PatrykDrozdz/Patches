<?php

include 'classes/commonComponentsClass.php';

class componetnsClassLoged extends commonComponentsClass {
    
    private $stringtitle;
    
    public function setStringTitle($value){
        $this->stringtitle = $value;
    }
    
    public function getStringSubTitle(){
        return $this->stringtitle;
    }
    
    public function getStringTitle(){
        return 'applicationnametitle';
    }
    
    public function getHeader($value){
            echo "<header>
                    <h1>".$_LANG['applicationnametitle']."</h1>
                    <h5>".$value."</h5>
                 </header>";
    }

    public function getMainPageLoged(){
        include 'components/mainLoged.php';
    }
    
    public function getCommonPart(){
        include 'components/commonPart.php';
    }
    
    public function getFirstPart(){
        include 'components/firstPart.php';
    }
    
    public function getSecondPart(){
        include 'components/secondPart.php';
    }
    
    public function getOldPatches(){
        include 'components/oldMainLoged.php';
    }
    
    public function getOldCommonPart(){
        include 'components/oldCommonPart.php';
    }
    
    public function getOldFirstPart(){
        include 'components/oldFirstPart.php';
    }
    
    public function getOldSecondPart(){
        include 'components/oldSecondPart.php';
    }
    
    public function getBuildings(){
        include 'components/buildings.php';
    }
    
    public function getAdmins(){
        include 'components/admins.php';
    }
    
    public function getUsers(){
        include 'components/users.php';
    }
    
    public function getMenu(){
        include 'components/menu.php';
    }
    
    public function getAdminsLogs(){
        include 'components/adminsLogs.php';
    }
    
    public function getUsersLogs(){
        include 'components/usersLogs.php';
    }
    
    public function getAdminsFailLoginsTriels(){
        include 'components/failedAdminsLogingsTriels.php';
    }
    
    public function getUsersFailLoginsTriels(){
        include 'components/failedUsersLogingsTriels.php';
    }
    
    public function getDevices(){
        include 'components/devices.php';
    }
    
    public function getAdditionalMenu($placeholder, $buttonname, $id, $error) {
        
        echo '<div class="navbar navbar-default">
                <div class="container-fluid">
                    <ul class="nav navbar-nav navbar-left">
                        <div>
                            <div style="float: left; padding: 5px;">
                            <input type="text" class="form-control text-field" 
                                id="searching" placeholder="'.$placeholder.'"/>
                            </div>
                            <div style="float: left; padding: 5px;">
                                <input type="submit" class="btn btn-primary btn-sm" value="'.$buttonname.'"
                                       onclick="getSearch(\''.$id.'\', searching.value, 
                                                   \''.$error.'\')"/>
                            </div>
                        </div>
                    </ul>
                </div> 
            </div>';
    }
    
}