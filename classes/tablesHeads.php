<?php

class tablesHeads extends tablesGet {
    
    public function CommonPartHeadFirst($check, $target, $id, $company, $product, $rowId, $rowCompany, $rowProduct) {
        
        $this->specialHead($check, $target, $id, $rowId);
        
        $this->normalHead($check, $target, $company, $rowCompany);
        
        $this->normalHead($check, $target, $product, $rowProduct);
        
    }
    
    public function CommonPartHeadSecond($check, $target, $vlan, $patchcord, $clientsocketno, $roomno, 
            $acl, $description, $action, $rowVlan, $rowPatchcord, $rowClientsocketno, $rowRoomno, 
            $rowAcl, $rowDescription, $rowAction) {
        
        $this->normalHead($check, $target, $vlan, $rowVlan);
        
        $this->normalHead($check, $target, $patchcord, $rowPatchcord);
        
        $this->normalHead($check, $target, $clientsocketno, $rowClientsocketno);
        
        $this->normalHead($check, $target, $roomno, $rowRoomno);
        
        $this->specialHead($check, $target, $acl, $rowAcl);
        
        $this->specialHead($check, $target, $description, $rowDescription);
        
        $this->specialHead($check, $target, $action, $rowAction);

    }
    
    public function getIdhead($check, $target, $id, $row) {
        
        $this->normalHead($check, $target, $id, $row);
        
    }
    
    public function getBuildinghead($check, $target, $building, $row) {
        
        $this->normalHead($check, $target, $building, $row);
        
    }
    
    public function getDevice($check, $target, $room, $wardrobe, $u, $model, $signature, $ip, 
            $rowRoom, $rowWardrobe, $rowU, $rowModel, $rowSignature, $rowIP) {
            
        $this->normalHead($check, $target, $room, $rowRoom);
        
        $this->normalHead($check, $target, $wardrobe, $rowWardrobe);
        
        $this->specialHead($check, $target, $u, $rowU);
        
        $this->normalHead($check, $target, $model, $rowModel);
        
        $this->normalHead($check, $target, $signature, $rowSignature);
        
        $this->normalHead($check, $target, $ip, $rowIP);
        
    }
    
    public function getPort($check, $target, $name, $row) {
        $this->normalHead($check, $target, $name, $row);
    }
    
    public function userHead($check, $target, $id, $name, $pass,  $rowId, $rowName, $rowPass) {
        
        $this->normalHead($check, $target, $id, $rowId);
        
        $this->normalHead($check, $target, $name, $rowName);
        
        $this->normalHead($check, $target, $pass, $rowPass);
        
    }
    
    public function logHead($check, $target, $id, $time, $user, $log, $ip, 
            $rowId, $rowTime, $rowUser, $rowLog, $rowIp) {
        
        $this->normalHead($check, $target, $id, $rowId);
        
        $this->normalHead($check, $target, $time, $rowTime);
        
        $this->normalHead($check, $target, $user, $rowUser);
        
        $this->normalHead($check, $target, $log, $rowLog);
        
        $this->normalHead($check, $target, $ip, $rowIp);
        
    }
    
    public function failedLogHead($check, $target, $id, $time, $log, $ip, 
            $rowId, $rowTime, $rowLog, $rowIp) {
        
        $this->normalHead($check, $target, $id, $rowId);
        
        $this->normalHead($check, $target, $time, $rowTime);
        
        $this->normalHead($check, $target, $log, $rowLog);
        
        $this->normalHead($check, $target, $ip, $rowIp);
        
    }


    public function getEnding($check){
        
        if($check==1){
        
            echo'<th></th>
                 <th></th>';
        
        }
        
        if($check==2){
            echo'<th></th>';
        }
                             
        echo '</tr>
            </thead>
            <tbody>';
    }
    
    
/*************************************************************************************/    
    
    
/*************************************************************************************/    
    private function normalHead($check, $target, $name, $row) {
        
        echo '<th><div>'.$name.'</div>';
        
        if($check==1){
            echo'<a onclick="getDatas(\''.$target.'\', \''.$row.'\', \'ASC\')"> <span class="glyphicon glyphicon-chevron-down"></span></a>
            <a onclick="getDatas(\''.$target.'\', \''.$row.'\', \'DESC\')"<span class="glyphicon glyphicon-chevron-up"></span></a>';
        } 
        echo'</th>';
        
    }
    
    private function specialHead($check, $target, $name, $row) {
        
        echo '<th><div style="width:32px;">'.$name.'</div>';
        
        if($check==1){
            echo'<a onclick="getDatas(\''.$target.'\', \''.$row.'\', \'ASC\')"> <span class="glyphicon glyphicon-chevron-down"></span></a>
            <a onclick="getDatas(\''.$target.'\', \''.$row.'\', \'DESC\')"<span class="glyphicon glyphicon-chevron-up"></span></a>';
        } 
        echo'</th>';
        
    }
    
}