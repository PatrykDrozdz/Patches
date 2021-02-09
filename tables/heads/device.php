<?php

function device($room, $wardrobe, $u, $model, $signature, $ip, $target, 
        $roomRow, $wardrobeRow, $uRow, $modelRow, $signatureRow, $ipRow) {
    
    echo'<th><div>'.$room.'</div><a onclick="getDatas(\''.$target.'\', \''.$roomRow.'\', \'ASC\')"><span class="glyphicon glyphicon-chevron-down"></span></a>
            <a onclick="getDatas(\''.$target.'\', \''.$roomRow.'\', \'DESC\')"<span class="glyphicon glyphicon-chevron-up"></span></a></th>      
        <th><div>'.$wardrobe.'</div><a onclick="getDatas(\''.$target.'\', \''.$wardrobeRow.'\', \'ASC\')">
                <span class="glyphicon glyphicon-chevron-down"></span></a>
            <a onclick="getDatas(\''.$target.'\', \''.$wardrobeRow.'\', \'DESC\')"
                <span class="glyphicon glyphicon-chevron-up"></span></a></th>
        <th><div style="width:32px;">'.$u.'</br><a onclick="getDatas(\''.$target.'\', \''.$uRow.'\', \'ASC\')">
                <span class="glyphicon glyphicon-chevron-down"></span></a>
            <a onclick="getDatas(\''.$target.'\', \''.$uRow.'\', \'DESC\')"
                <span class="glyphicon glyphicon-chevron-up"></span></a></div></th>
        <th><div>'.$model.'</div><a onclick="getDatas(\''.$target.'\', \''.$modelRow.'\', \'ASC\')">
                <span class="glyphicon glyphicon-chevron-down"></span></a>
            <a onclick="getDatas(\''.$target.'\', \''.$modelRow.'\', \'DESC\')"
                <span class="glyphicon glyphicon-chevron-up"></span> </a></th>
        <th><div>'.$signature.'</div><a onclick="getDatas(\''.$target.'\', \''.$signatureRow.'\', \'ASC\')">
                <span class="glyphicon glyphicon-chevron-down"></span></a>
            <a onclick="getDatas(\''.$target.'\', \''.$signatureRow.'\', \'DESC\')"
                <span class="glyphicon glyphicon-chevron-up"></span></a></th>
        <th><div>'.$ip.'</div><a onclick="getDatas(\''.$target.'\', \''.$ipRow.'\', \'ASC\')"><span class="glyphicon glyphicon-chevron-down"></span></a>
            <a onclick="getDatas(\''.$target.'\', \''.$ipRow.'\', \'DESC\')"<span class="glyphicon glyphicon-chevron-up"></span></a></th>';
    
}

