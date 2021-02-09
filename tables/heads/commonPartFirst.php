<?php
function commonPartFirst($id, $company, $product, $target, $idRow, $companyRow, $productRow){
    
    echo '<th><div>'.$id.'</div><a onclick="getDatas(\''.$target.'\', \''.$idRow.'\', \'ASC\')">
            <span class="glyphicon glyphicon-chevron-down"></span>
        </a>
        <a onclick="getDatas(\''.$target.'\', \''.$idRow.'\', \'DESC\')">
            <span class="glyphicon glyphicon-chevron-up"></span>
        </a></th>
                    
        <th><div>'.$company.'</div><a onclick="getDatas(\''.$target.'\', \''.$companyRow.'\', \'ASC\')">
             <span class="glyphicon glyphicon-chevron-down"></span>
        </a>
        <a onclick="getDatas(\''.$target.'\', \''.$companyRow.'\', \'DESC\')">
            <span class="glyphicon glyphicon-chevron-up"></span>
        </a> </th>
                    
        <th><div>'.$product.'</div><a onclick="getDatas(\''.$target.'\', \''.$productRow.'\', \'ASC\')">
            <span class="glyphicon glyphicon-chevron-down"></span>
        </a>
        <a onclick="getDatas(\''.$target.'\', \''.$productRow.'\', \'DESC\')"
            <span class="glyphicon glyphicon-chevron-up"></span>
        </a></th> ';
    
}
