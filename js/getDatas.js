function getDatas(value, sort, updown){
    if(value===""){
        document.getElementById(value).innerHTML="";
            return;
        } else {
            
            if(window.XMLHttpRequest){
                xmlhttp = new XMLHttpRequest();
            } else {
                xmlhttp = new ActiveXObject("Microsoft.XMLHTTP");
            }
            
            var gettingfile = 'gettingdatas.php';
            
            $.post(gettingfile, {postvalue: value, postsort: sort, postupdown: updown},
                function(data){
                    $('#'+value).html(data);
                }
            );
        }
        
}