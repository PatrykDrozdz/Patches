<table class="table table-striped">
            <thead>
                <tr>

<?php

include 'includedfiles.php';

if(isset($_POST['postvalue'])){
    
    $sort = $_POST['postsort'];
    
    $upDown = $_POST['postupdown'];

    if($_POST['postvalue']=='admins'){
        
        include 'tables/getting-admins.php';
    
    } else if($_POST['postvalue']=='users'){

        include 'tables/getting-users.php';
    
    } else if($_POST['postvalue']=='buildings'){
        
        include 'tables/getting-buildings.php';
    
    } else if($_POST['postvalue']=='admins-logs'){
        
        include 'tables/getting-admins-logs.php';
    
    } else if($_POST['postvalue']=='users-logs'){
        
        include 'tables/getting-users-logs.php';
    
    } else if($_POST['postvalue']=='failed-admins-logings-triels'){
        
        include 'tables/getting-failed-admins-logings-triels.php';
    
    } else if($_POST['postvalue']=='failed-users-logings-triels'){
        
        include 'tables/getting-failed-users-logings-triels.php';
    
    } else if($_POST['postvalue']=='devices'){
        
        include 'tables/getting-devices.php';
    
    } else if($_POST['postvalue']=='main-page') {

        include 'tables/getting-main-loged.php';
        
    } else if($_POST['postvalue']=='common-part') {

        include 'tables/getting-common-part.php';
     
    } else if($_POST['postvalue']=='first-part') { 
        
        include 'tables/getting-first-part.php';
        
    } else if($_POST['postvalue']=='second-part') { 
        
        include 'tables/getting-second-part.php';
        
    } else if($_POST['postvalue']=='patches-old') { 

        include 'tables/getting-main-loged-old.php';
        
    } else if($_POST['postvalue']=='common-part-old') { 

        include 'tables/getting-common-part-old.php';
        
    } else if($_POST['postvalue']=='first-part-old') { 

        include 'tables/getting-first-part-old.php';
        
    } else if($_POST['postvalue']=='second-part-old') { 
        
        include 'tables/getting-second-part-old.php';
        
    } 
    
} else {
    
    echo '<span class="list-group-item list-group-item-danger"'
                    . '>'.$_LANG['servererror'].'</span>';
    
}
?>
                
            </tbody>
        </table>