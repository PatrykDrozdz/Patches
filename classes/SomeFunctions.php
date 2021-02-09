<?php

class SomeFunctions {
    
    private $result;
    private $numRows;
    private $row;
    
    public function deviceChecker($conn, $queryCheck, $queryInsert) {
        
        $this->result =  $this->queryDo($conn, $queryCheck);
        
        $this->numRows = $this->rowCount($this->result);
        
        if($this->numRows==0) {
           
            $this->result = $this->queryDo($conn, $queryInsert);
            
            $this->result =  $this->queryDo($conn, "SELECT * FROM devices");
            
            $this->row = $this->fetchAllDatas($this->result, MYSQLI_ASSOC);
            
            return $this->row[$this->allRows($conn, "SELECT COUNT(*) FROM devices")]['idDevices'];
            
        } else {
            
           $this->result = mysqli_query($conn, $queryCheck);
            
           $this->row = $this->fetchDatas($this->result);

           return $this->row['idDevices'];
           
        }
        
    }
    
    public function allRows($conn, $query) {
        
        $result = mysqli_query($conn, $query);
            
        $row = $this->fetchDatas($result);
        
        return $row['COUNT(*)'] - 1;
    }
    
    public function getBuildingId($conn, $query) {
        
        $this->result = $this->queryDo($conn, $query);
        
        $this->row = $this->fetchDatas($this->result);
        
        return $this->row['idBuilding'];
        
    }

    public function getLastCommonPartId($conn, $query) {
        
        $this->result =  $this->queryDo($conn, $query);
            
        $this->row = $this->fetchAllDatas($this->result, MYSQLI_ASSOC);
        
        return $this->row[$this->allRows($conn, "SELECT COUNT(*) FROM commonpart")]['idCommonPart'];
            
    }
    
    public function getPartsDatas($conn, $query, $id, $port, $commonPart) {
        
        $this->result = $this->queryDo($conn, $query);
        
        $this->row = $this->fetchDatas($this->result);
        
        return $this->row[$id].'-'.$this->row[$port].'-'.
                $this->row['Building_idBuilding'].'-'.$this->row['Devices_idDevices'].'-'.
                $this->row[$commonPart];
        
    }
    
    public function getCommonPartDatas($conn, $query) {
        
        $this->result = $this->queryDo($conn, $query);
        
        $this->row = $this->fetchDatas($this->result);
        
        return $this->row['Company'].'-'.$this->row['Product'].'-'.
                $this->row['VLAN'].'-'.$this->row['Patchcord'].'-'.
                $this->row['ClientSocketsNo'].'-'.$this->row['RoomNo'].'-'.
                $this->row['ACL'].'-'.$this->row['Description'].'-'.
                $this->row['Action'];
        
    }
    
    public function deleteCommonPart($conn, $query, $id, $table) {
        
        $this->result = $this->queryDo($conn, $query);
        
        $this->numRows = $this->rowCount($this->result);

        $this->row = $this->fetchAllDatas($this->result, MYSQLI_ASSOC);
        
        for($i=0; $i<$this->numRows; $i++){
            $value = $this->row[$i][$id];

            $this->queryDo($conn, "DELETE FROM `$table` WHERE `$id` = '$value'");
        }
        
    }

    public function explodeParts($value, $sep) {
        return explode($sep, $value);
    }

    public function queryDo($conn, $query) {
        return mysqli_query($conn, $query);
    }
    
    public function rowCount($result) {
        return mysqli_num_rows($result);
    }
    
    public function fetchAllDatas($result, $dataType) {
        return mysqli_fetch_all($result, $dataType);
    }
    
    public function fetchDatas($result) {
        return mysqli_fetch_assoc($result);
    }
    
}
