<?php

class tablesGet extends SomeFunctions {
    
    private $result;
    private $row;
    
    public function MainLogedTable($check, $connection, $query, $error) {
        
        $this->result = $this->queryDo($connection, $query);

        if($this->rowCount($this->result)==0){
            
            echo '<span class="list-group-item list-group-item-danger">'
            .$error.'</span>';
            
        } else {
            for($i=0; $i<$this->rowCount($this->result); $i++){
            
                $this->row = $this->fetchDatas($this->result);
                
                echo '<tr>';
                $this->firstCommonPart('idCommonPart', $this->row);
                $this->singleRow('b_BuildingName', $this->row);
                $this->device($this->row, 'dv_Room', 'dv_Wardrobe', 'dv_U', 'dv_Model', 'dv_Signature', 'dv_IP');
                $this->singleRow('Port1', $this->row);
                $this->singleRow('b2_BuildingName', $this->row);
                $this->device($this->row, 'dv2_Room', 'dv2_Wardrobe', 'dv2_U', 'dv2_Model', 'dv2_Signature', 'dv2_IP');
                $this->singleRow('Port2', $this->row); 
                $this->secondCommonPart($this->row);        
                
                if($check==1) {
                    $row = $this->row;
                    include 'forms/editDeletePatch.php';
                }

                echo '</tr>';
                
            }
               
            if($check==1) {
                include 'forms/addPatch.php';
            }
            
        }
        
    }
    
    public function OldMainLogedTable($check, $connection, $query, $error) {
        
        $this->result = $this->queryDo($connection, $query);

        if($this->rowCount($this->result)==0){
            
            echo '<span class="list-group-item list-group-item-danger">'
            .$error.'</span>';
            
        } else {
            for($i=0; $i<$this->rowCount($this->result); $i++){
            
                $this->row = $this->fetchDatas($this->result);
                
                echo '<tr>';
                $this->firstCommonPart('idOldCommonPart', $this->row);
                $this->singleRow('b_BuildingName', $this->row);
                $this->device($this->row, 'dv_Room', 'dv_Wardrobe', 'dv_U', 'dv_Model', 'dv_Signature', 'dv_IP');
                $this->singleRow('Port1', $this->row);
                $this->singleRow('b2_BuildingName', $this->row);
                $this->device($this->row, 'dv2_Room', 'dv2_Wardrobe', 'dv2_U', 'dv2_Model', 'dv2_Signature', 'dv2_IP');
                $this->singleRow('Port2', $this->row); 
                $this->secondCommonPart($this->row);        
                
                if($check==1) {
                    $row = $this->row;
                    include 'forms/returnOldPatch.php';
                }

                echo '</tr>';
                
            }
               
            if($check==1) {
                include 'forms/addPatch.php';
            }
            
        }
        
    }
    
    public function commonPartTable($check, $id, $connection, $query, $error) {
        
        $this->result = $this->queryDo($connection, $query);

        if($this->rowCount($this->result)==0){
            
            echo '<span class="list-group-item list-group-item-danger">'
            .$error.'</span>';
            
        } else {
        
             for($i=0; $i<$this->rowCount($this->result); $i++){
            
                $this->row = $this->fetchDatas($this->result);
            
                echo'<tr>';
                $this->firstCommonPart($id, $this->row);
                $this->secondCommonPart($this->row); 
                
                $row= $this->row;
                
                if($check==1){
                    include 'forms/editCommonPart.php';
                }
                
                echo'</tr>';
             }
        
        }
    }
    
    public function partTable($check, $connection, $query, $idPart, $port, $editFile, $error) {
        
        $this->result = $this->queryDo($connection, $query);

        if($this->rowCount($this->result)==0){
            
            echo '<span class="list-group-item list-group-item-danger">'
            .$error.'</span>';
            
        } else {
        

             for($i=0; $i<$this->rowCount($this->result); $i++){
                 
                $this->row = $this->fetchDatas($this->result);
                 
                echo'<tr>';
                $this->singleRow($idPart, $this->row);
                $this->singleRow('BuildingName', $this->row);
                $this->device($this->row, 'Room', 'Wardrobe', 'U', 
                        'Model', 'Signature', 'IP');
                $this->singleRow($port, $this->row);
                
                $row= $this->row;
                
                if($check==1){
                    include $editFile;
                }
                echo'</tr>';
                 
             }
        }
    }
    
    public function Buildings($check, $connection, $query, $editDeleteFile, $error) {
        
        $this->result = $this->queryDo($connection, $query);
        
        if($this->rowCount($this->result)==0){
            
            echo '<span class="list-group-item list-group-item-danger">'
            .$error.'</span>';
            
        } else { 
            
            for($i=0; $i<$this->rowCount($this->result); $i++){
                
                $this->row = $this->fetchDatas($this->result);
                
                echo'<tr>';
                
                $this->singleRow('idBuilding', $this->row);
                
                $this->singleRow('BuildingName', $this->row);
                
                $row = $this->row;
                
                if($check==1){
                    include $editDeleteFile;
                }
                
                echo'</tr>';
                
            }
            
        }
    }

    public function getDevices($check, $connection, $query, $editDeleteFile, $error) {
        
        $this->result = $this->queryDo($connection, $query);
        
        if($this->rowCount($this->result)==0){
            
            echo '<span class="list-group-item list-group-item-danger">'
            .$error.'</span>';
            
        } else { 
            
            for($i=0; $i<$this->rowCount($this->result); $i++){
                
                $this->row = $this->fetchDatas($this->result);
                
                echo'<tr>';
                
                $this->singleRow('idDevices', $this->row);
                
                $this->device($this->row, 'Room', 'Wardrobe', 'U', 'Model', 'Signature', 'IP');
                
                $row = $this->row;
                
                if($check==1){
                    include $editDeleteFile;
                }
                
                echo'</tr>';
                
            }
            
        }
    }
    
    public function getLogs($connection, $query, $id, $login, $error) {
                $this->result = $this->queryDo($connection, $query);
        
        $this->result = $this->queryDo($connection, $query);        
                
        if($this->rowCount($this->result)==0){
            
            echo '<span class="list-group-item list-group-item-danger">'
            .$error.'</span>';
            
        } else { 
            
            for($i=0; $i<$this->rowCount($this->result); $i++){
                
                $this->row = $this->fetchDatas($this->result);
                
                echo'<tr>';
                
                $this->singleRow($id, $this->row);
                $this->singleRow('hourdate', $this->row);
                $this->singleRow($login, $this->row);
                $this->singleRow('executedQuerys', $this->row);
                $this->singleRow('IPAddress', $this->row);
                
                echo'</tr>';
                
            }
            
        }
    }
    
    public function getFailedLogs($connection, $query, $id, $error) {
                $this->result = $this->queryDo($connection, $query);
        
        $this->result = $this->queryDo($connection, $query);        
                
        if($this->rowCount($this->result)==0){
            
            echo '<span class="list-group-item list-group-item-danger">'
            .$error.'</span>';
            
        } else { 
            
            for($i=0; $i<$this->rowCount($this->result); $i++){
                
                $this->row = $this->fetchDatas($this->result);
                
                echo'<tr>';
                
                $this->singleRow($id, $this->row);
                $this->singleRow('hourdate', $this->row);
                $this->singleRow('executedQuerys', $this->row);
                $this->singleRow('IPAddress', $this->row);
                
                echo'</tr>';
                
            }
            
        }
    }

        public function AdminsUsers($check, $connection, $query, $editDeleteFile, $id, $login, $pass, $error) {
        
        $this->result = $this->queryDo($connection, $query);
        
        if($this->rowCount($this->result)==0){
            
            echo '<span class="list-group-item list-group-item-danger">'
            .$error.'</span>';
            
        } else { 
            
            for($i=0; $i<$this->rowCount($this->result); $i++){
                
                $this->row = $this->fetchDatas($this->result);
                
                echo'<tr>';
                
                $this->singleRow($id, $this->row);
                
                $this->singleRow($login, $this->row);
                
                $this->singleRow($pass, $this->row);
                
                $row = $this->row;
                
                if($check==1){
                    include $editDeleteFile;
                }
                
                echo'</tr>';
                
            }
            
        }
    }

    public function firstCommonPart($id, $row) {
       echo '<td>'.$row[$id].'</td>'
               . '<td>'.$row['Company'].'</td>'
               . '<td>'.$row['Product'].'</td>';
    }
    
    public function secondCommonPart($row) {
        echo '<td>'.$row['VLAN'].'</td><td>'.$row['Patchcord'].'</td>
                        <td>'.$row['ClientSocketsNo'].'</td><td>'.$row['RoomNo'].'</td>
                        <td>'.$row['ACL'].'</td><td>'.$row['Description'].'</td><td>'.$row['Action'].'</td>'; 
    }
    
    public function device($row, $room, $wardrobe, $u, $model, $signature, $ip){
        echo'<td>'.$row[$room].'</td> <td>'.$row[$wardrobe].'</td>
                        <td>'.$row[$u].'</td><td>'.$row[$model].'</td><td>'.$row[$signature].'</td>
                        <td>'.$row[$ip].'</td>';
    }


    public function singleRow($id, $row){
        echo '<td>'.$row[$id].'</td>';
    }
    
}
