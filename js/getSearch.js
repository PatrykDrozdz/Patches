function getSearch(id, value, error){
    if(value===""){
        document.getElementById(id).innerHTML='<span class="list-group-item list-group-item-danger">'
                +error+'</span>';
            return;
        } else {
            
            if(window.XMLHttpRequest){
                xmlhttp = new XMLHttpRequest();
            } else {
                xmlhttp = new ActiveXObject("Microsoft.XMLHTTP");
            }
            
            var gettingfile = 'gettingsearch.php';
            
            $.post(gettingfile, {postid: id, postvalue: value},
                function(data){
                    $('#'+id).html(data);
                }
            );
        }
        
}