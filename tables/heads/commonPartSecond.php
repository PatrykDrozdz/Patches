<?php

function commonPartSecond($vlan, $patchcord, $clientsocketno, $roomno, $acl, $description, $action,
        $target, $vlanRow, $patchcordRow, $clientsocketnoRow, $roomnoRow, $aclRow, 
        $descriptionRow, $actionRow){
    
    echo'<th><div>'.$vlan.'</div><a onclick="getDatas(\''.$target.'\', \''.$vlanRow.'\', \'ASC\')"><span class="glyphicon glyphicon-chevron-down"></span></a>
        <a onclick="getDatas(\''.$target.'\', \''.$vlanRow.'\', \'DESC\')"<span class="glyphicon glyphicon-chevron-up"></span></a></th>
                     
        <th><div>'.$patchcord.'</div><a onclick="getDatas(\''.$target.'\', \''.$patchcordRow.'\', \'ASC\')"><span class="glyphicon glyphicon-chevron-down"></span></a>
        <a onclick="getDatas(\''.$target.'\', \''.$patchcordRow.'\', \'DESC\')"<span class="glyphicon glyphicon-chevron-up"></span></a></th>
                    
        <th><div>'.$clientsocketno.'</div><a onclick="getDatas(\''.$target.'\', \''.$clientsocketnoRow.'\', \'ASC\')"><span class="glyphicon glyphicon-chevron-down"></span></a>
        <a onclick="getDatas(\''.$target.'\', \''.$clientsocketnoRow.'\', \'DESC\')"<span class="glyphicon glyphicon-chevron-up"></span></a></th>

        <th><div>'.$roomno.'</div><a onclick="getDatas(\''.$target.'\', \''.$roomnoRow.'\', \'ASC\')"><span class="glyphicon glyphicon-chevron-down"></span></a>
        <a onclick="getDatas(\''.$target.'\', \''.$roomnoRow.'\', \'DESC\')"<span class="glyphicon glyphicon-chevron-up"></span></a></th>
                     
        <th><div style="width:32px;">'.$acl.'</div><a onclick="getDatas(\''.$target.'\', \''.$aclRow.'\', \'ASC\')"><span class="glyphicon glyphicon-chevron-down"></span></a>
        <a onclick="getDatas(\''.$target.'\', \''.$aclRow.'\', \'DESC\')"<span class="glyphicon glyphicon-chevron-up"></span></a></div></th>                         

        <th><div>'.$description.'</div><a onclick="getDatas(\''.$target.'\', \''.$descriptionRow.'\', \'ASC\')"><span class="glyphicon glyphicon-chevron-down"></span></a>
        <a onclick="getDatas(\''.$target.'\', \''.$descriptionRow.'\', \'DESC\')"<span class="glyphicon glyphicon-chevron-up"></span></a></th>    
                     
        <th><div>'.$action.'</div><a onclick="getDatas(\''.$target.'\', \''.$actionRow.'\', \'ASC\')"><span class="glyphicon glyphicon-chevron-down"></span></a>
        <a onclick="getDatas(\''.$target.'\', \''.$actionRow.'\', \'DESC\')"<span class="glyphicon glyphicon-chevron-up"></span></a></th>';  

    }
