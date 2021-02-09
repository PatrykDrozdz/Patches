<?php

function id($name, $target, $nameRow) {
    echo'
        <th><div>'.$name.'</div>
            <a onclick="getDatas(\''.$target.'\', \''.$nameRow.'\', \'ASC\')">
                <span class="glyphicon glyphicon-chevron-down"></span>
            </a>
            <a onclick="getDatas(\''.$target.'\', \''.$nameRow.'\', \'DESC\')"
                <span class="glyphicon glyphicon-chevron-up"></span>
            </a>  
        </th>';

}
