<table class="table table-striped">
            <thead>
                <tr>

<?php

include 'includedfiles.php';

if(isset($_POST['postid'])){

    $value = $_POST['postvalue'];
    
    if($_POST['postid']=='admins'){
        
        include 'tables/search/getting-admins-search.php';
    
    } else if($_POST['postid']=='users'){

        include 'tables/search/getting-users-search.php';
    
    } else if($_POST['postid']=='buildings'){
        
        include 'tables/search/getting-buildings-search.php';
    
    } else if($_POST['postid']=='admins-logs'){
        
        include 'tables/search/getting-admins-logs-search.php';
    
    } else if($_POST['postid']=='users-logs'){
        
        include 'tables/search/getting-users-logs-search.php';
    
    } else if($_POST['postid']=='failed-admins-logings-triels'){
        
        include 'tables/search/getting-failed-admins-logings-triels-search.php';
    
    } else if($_POST['postid']=='failed-users-logings-triels'){
        
        include 'tables/search/getting-failed-users-logings-triels-search.php';
    
    } else if($_POST['postid']=='devices'){
        
        include 'tables/search/getting-devices-search.php';
    
    } else if($_POST['postid']=='main-page') {
        
        include 'tables/search/getting-main-loged-search.php';

    } else if($_POST['postid']=='common-part') {

        include 'tables/search/getting-common-part-search.php';
     
    } else if($_POST['postid']=='first-part') { 
        
        include 'tables/search/getting-first-part-search.php';
        
    } else if($_POST['postid']=='second-part') { 
        
        include 'tables/search/getting-second-part-search.php';
        
    } else if($_POST['postid']=='patches-old') { 

        include 'tables/search/getting-main-loged-old-search.php';
        
    } else if($_POST['postid']=='common-part-old') { 

        include 'tables/search/getting-common-part-old-search.php';
        
    } else if($_POST['postid']=='first-part-old') { 

       include 'tables/search/getting-first-part-old-search.php';
        
    } else if($_POST['postid']=='second-part-old') { 
        
       include 'tables/search/getting-second-part-old-search.php';
        
    } 
    
} else {
    
    echo '<span class="list-group-item list-group-item-danger"'
                    . '>'.$_LANG['servererror'].'</span>';
    
}
?>
                
            </tbody>
        </table>