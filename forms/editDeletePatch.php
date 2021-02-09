<?php

include 'strings/language.php';
include 'strings/modalLanguage.php';
include 'getBuildings.php';

 echo '<td>
                                       <input type="submit" 
                                            class="btn btn-primary" value="'.$_LANG['buttonedit'].'"
                                            data-toggle="modal" data-target="#editPatch'.$i.'">
                                            
                                            <div class="modal fade" id="editPatch'.$i.'" role="dialog">
                                                <div class="modal-dialog">
                                                     <div class="modal-content">
                                                         <div class="modal-header">
                                                             <button type="button" class="close" data-dismiss="modal">&times;</button>

                                                             <h4 class="modal-title">'.$_LANG['editpatchtitle'].'</h4>
                                                                 </div>
                                                                 <div class="modal-body">
                                                                     <form method="post" action="editPatch.php">
                                                                        
                                                                        <div class="form-group">
                                                                             <label for="new-company'.$i.'">'.$_LANG['editpatchid'].'</label>
                                                                             <input type="text" class="form-control text-field" id="edit-id'.$i.'" 
                                                                                    name="edit-id" value="'.$row['idCommonPart'].'" readonly="readonly"/>
                                                                         </div>
                                                                        
                                                                        <div class="form-group">
                                                                             <label for="new-company'.$i.'">'.$_LANG['editpatchcompany'].'</label>
                                                                             <input type="text" class="form-control text-field" id="edit-company'.$i.'" 
                                                                                    name="edit-company" value="'.$row['Company'].'"/>
                                                                         </div>
                                                                         <div class="form-group">
                                                                             <label for="edit-product'.$i.'">'.$_LANG['editpatchproduct'].'</label>
                                                                             <input type="text" class="form-control text-field" id="edit-product'.$i.'" 
                                                                                    name="edit-product" value="'.$row['Product'].'"/>
                                                                         </div>               
                                                                         <div class="form-group">
                                                                             <label for="edit-building-1'.$i.'">'.$_LANG['editpatchbuilding1'].'</label>
                                                                             <select type="text" class="form-control text-field" id="edit-building-1'.$i.'" 
                                                                                 name="edit-building-1">';
                                                                                 
                                                                                 for($j=0; $j<$numRowsBuilding; $j++) {
                                                                                    echo '<option>'.$buildingRow[$j]['BuildingName'].'</option>';
                                                                                 }

                                                                                 $connection->freeFetchedDatas($resultBuilding);

                                                                                 
                                                                   echo '</select>                                                                                    
                                                                         </div>
                                                                         <div class="form-group"> 
                                                                             <label for="edit-signature-1'.$i.'">'.$_LANG['editpatchsignature1'].'</label>
                                                                             <input type="text" class="form-control text-field" id="edit-signature-1'.$i.'" 
                                                                                    name="edit-signature-1"';?>
                    
                                                                                    onkeyup="showHint(this.value, 'devices', 'Signature', 'edit-device-signature-hint-1')"
                                                                                    <?php echo '
                                                                                    onclick="getDevice(this.value, \'edit-room-1'.$i.'\', \'edit-wardrobe-1'.$i.'\', 
                                                                                        \'edit-u-1'.$i.'\', \'edit-model-1'.$i.'\', \'edit-ip-1'.$i.'\')"
                                                                                    
                                                                         value="'.$row['dv_Signature'].'" list="edit-device-signature-hint-1"/>
                                                                             <datalist id="edit-device-signature-hint-1"></datalist>
                                                                         </div>
                                                                         <div class="form-group">
                                                                             <label for="edit-room-1'.$i.'">'.$_LANG['editpatchroom1'].'</label>
                                                                             <input type="text" class="form-control text-field" id="edit-room-1'.$i.'"';?>
                                                                                    onkeyup="showHint(this.value, 'devices', 'Room', 'edit-device-room-hint')" 
                                                                            <?php 
                                                                            echo 'name="edit-room-1" value="'.$row['dv2_Room'].'"
                                                                                    list="edit-device-room-hint"/>
                                                                              <datalist id="edit-device-room-hint"></datalist>
                                                                         </div>
                                                                         <div class="form-group">
                                                                             <label for="edit-wardrobe-1'.$i.'">'.$_LANG['editpatchwardrobe1'].'</label>
                                                                             <input type="text" class="form-control text-field" id="edit-wardrobe-1'.$i.'"';?> 
                                                                                    onkeyup="showHint(this.value, 'devices', 'Wardrobe', 'edit-device-wardrobe-hint')" 
                                                                                    <?php 
                                                                            echo 'name="edit-wardrobe-1" value="'.$row['dv_Wardrobe'].'"
                                                                                    list="edit-device-wardrobe-hint"/>
                                                                             <datalist id="edit-device-wardrobe-hint"></datalist>
                                                                         </div>
                                                                         <div class="form-group">
                                                                             <label for="edit-u-1'.$i.'">'.$_LANG['editpatchu1'].'</label>
                                                                             <input type="number" min="0" max="42" class="form-control text-field" id="edit-u-1'.$i.'" 
                                                                                    name="edit-u-1" value="'.$row['dv_U'].'"/>
                                                                         </div>
                                                                         <div class="form-group">
                                                                             <label for="edit-model-1'.$i.'">'.$_LANG['editpatchmodel1'].'</label>
                                                                             <input type="text" class="form-control text-field" id="edit-model-1'.$i.'" 
                                                                                    name="edit-model-1"'; ?> 
                                                                                    onkeyup="showHint(this.value, 'devices', 'Model', 'edit-device-model-hint')"
                                                                                    <?php
                                                                                   echo 'value="'.$row['dv_Model'].'" list="edit-device-model-hint"/>
                                                                             <datalist id="edit-device-model-hint"></datalist>
                                                                         </div>
                                                                         <div class="form-group">
                                                                             <label for="edit-ip-1'.$i.'">'.$_LANG['editpatchip1'].'</label>
                                                                             <input type="text" class="form-control text-field" id="edit-ip-1'.$i.'" 
                                                                                    name="edit-ip-1"'; ?>
                                                                                   onkeyup="showHint(this.value, 'devices', 'IP', 'edit-ip-hint-1')"
                                                                                   <?php
                                                                                    echo 'value="'.$row['dv_IP'].'" list="edit-ip-hint-1"/>
                                                                             <datalist id="edit-ip-hint-1"></datalist>
                                                                         </div>
                                                                         <div class="form-group">
                                                                             <label for="edit-port-1'.$i.'">'.$_LANG['editpatchport1'].'</label>
                                                                             <input type="text" class="form-control text-field" id="edit-port-1'.$i.'" 
                                                                                    name="edit-port-1" value="'.$row['Port1'].'"/>
                                                                         </div>
                                                                         
                                                                          <div class="form-group">
                                                                             <label for="edit-building-2'.$i.'">'.$_LANG['editpatchbuilding2'].'</label>
                                                                             <select type="text" class="form-control text-field" id="edit-building-2'.$i.'" 
                                                                                 name="edit-building-2">';
                                                                                 
                                                                                 for($j=0; $j<$numRowsBuilding; $j++) {
                                                                                    echo '<option>'.$buildingRow[$j]['BuildingName'].'</option>';
                                                                                 }

                                                                                 $connection->freeFetchedDatas($resultBuilding);

                                                                                 
                                                                    echo ' </select>
                                                                         </div>
                                                                         <div class="form-group">
                                                                             <label for="edit-signature-2'.$i.'">'.$_LANG['editpatchsignature2'].'</label>
                                                                             <input type="text" class="form-control text-field" id="edit-signature-2'.$i.'" 
                                                                                    name="edit-signature-2"';?>  
                                                                                    onkeyup="showHint(this.value, 'devices', 'Signature', 'edit-device-signature-hint-2')"
                                                                                    <?php
                                                                              echo 'onclick="getDevice(this.value, \'edit-room-2'.$i.'\', \'edit-wardrobe-2'.$i.'\', 
                                                                                        \'edit-u-2'.$i.'\', \'edit-model-2'.$i.'\', \'edit-ip-2'.$i.'\')"
                                                                                    value="'.$row['dv2_Signature'].'" list="edit-device-signature-hint-2"/>
                                                                             <datalist id="edit-device-signature-hint-2"></datalist>
                                                                         </div>
                                                                         <div class="form-group">
                                                                             <label for="edit-room-1'.$i.'">'.$_LANG['editpatchroom2'].'</label>
                                                                             <input type="text" class="form-control text-field" id="edit-room-2'.$i.'"';?>
                                                                                    onkeyup="showHint(this.value, 'devices', 'Room', 'edit-device-room-hint')" 
                                                                                    <?php
                                                                              echo 'name="edit-room-2" value="'.$row['dv2_Room'].'"
                                                                                    list="edit-device-room-hint"/>
                                                                              <datalist id="edit-device-room-hint"></datalist>
                                                                         </div>
                                                                         <div class="form-group">
                                                                             <label for="edit-wardrobe-2'.$i.'">'.$_LANG['editpatchwardrobe2'].'</label>
                                                                             <input type="text" class="form-control text-field" id="edit-wardrobe-2'.$i.'"';?> 
                                                                                    onkeyup="showHint(this.value, 'devices', 'Wardrobe', 'edit-device-wardrobe-hint')"
                                                                                    <?php
                                                                              echo 'name="edit-wardrobe-2" value="'.$row['dv2_Wardrobe'].'"
                                                                                    list="edit-device-wardrobe-hint"/>
                                                                             <datalist id="edit-device-wardrobe-hint"></datalist>
                                                                         </div>
                                                                         <div class="form-group">
                                                                             <label for="edit-u-2'.$i.'">'.$_LANG['editpatchu2'].'</label>
                                                                             <input type="number" min="0" max="42" class="form-control text-field" id="edit-u-2'.$i.'" 
                                                                                    name="edit-u-2" value="'.$row['dv2_U'].'"/>
                                                                         </div>
                                                                         <div class="form-group">
                                                                             <label for="edit-model-2'.$i.'">'.$_LANG['editpatchmodel2'].'</label>
                                                                             <input type="text" class="form-control text-field" id="edit-model-2'.$i.'" 
                                                                                    name="edit-model-2"';?> 
                                                                                    onkeyup="showHint(this.value, 'devices', 'Model', 'edit-device-model-hint')" 
                                                                                    <?php
                                                                              echo 'value="'.$row['dv2_Model'].'" list="edit-device-model-hint"/>
                                                                             <datalist id="edit-device-model-hint"></datalist>
                                                                         </div>
                                                                         <div class="form-group">
                                                                             <label for="edit-ip-2'.$i.'">'.$_LANG['editpatchip2'].'</label>
                                                                             <input type="text" class="form-control text-field" id="edit-ip-2'.$i.'" 
                                                                                    name="edit-ip-2"';?> 
                                                                                    onkeyup="showHint(this.value, 'devices', 'IP', 'edit-ip-hint-2')" 
                                                                                    <?php
                                                                               echo 'value="'.$row['dv2_IP'].'" list="edit-ip-hint-2"/>
                                                                             <datalist id="edit-ip-hint-2"></datalist>
                                                                         </div>
                                                                         <div class="form-group">
                                                                             <label for="edit-port-2'.$i.'">'.$_LANG['editpatchport2'].'</label>
                                                                             <input type="text" class="form-control text-field" id="edit-port-2'.$i.'" 
                                                                                    name="edit-port-2" value="'.$row['Port2'].'"/>
                                                                         </div>

                                                                         <div class="form-group">
                                                                             <label for="edit-vlan'.$i.'">'.$_LANG['editpatchvlan'].'</label>
                                                                             <input type="text" class="form-control text-field" id="edit-vlan'.$i.'"';?> 
                                                                                    onkeyup="showHint(this.value, 'commonpart', 'VLAN', 'edit-vlan-hint')" 
                                                                                    <?php
                                                                              echo 'name="edit-vlan" value="'.$row['VLAN'].'" list="edit-vlan-hint"/>
                                                                             <datalist id="edit-vlan-hint"></datalist>
                                                                         </div>
                                                                         <div class="form-group">
                                                                             <label for="edit-patchcord'.$i.'">'.$_LANG['editpatchcord'].'</label>
                                                                             <input type="text" class="form-control text-field" id="edit-patchcord'.$i.'" 
                                                                                    name="edit-patchcord" value="'.$row['Patchcord'].'"/>
                                                                         </div>
                                                                         <div class="form-group">
                                                                             <label for="edit-client-socket-no'.$i.'">'.$_LANG['editclientsocketno'].'</label>
                                                                             <input type="text" class="form-control text-field" id="edit-client-socket-no'.$i.'" 
                                                                                    name="edit-client-socket-no" value="'.$row['ClientSocketsNo'].'"/>
                                                                         </div>
                                                                         <div class="form-group">
                                                                             <label for="edit-client-room-no'.$i.'">'.$_LANG['editpatchclientroomno'].'</label>
                                                                             <input type="text" class="form-control text-field" id="edit-client-room-no'.$i.'" 
                                                                                    name="edit-client-room-no" value="'.$row['RoomNo'].'"/>
                                                                         </div>
                                                                         <div class="form-group">
                                                                             <label for="edit-acl'.$i.'">'.$_LANG['newpatchacl'].'</label>
                                                                             <input type="text" class="form-control text-field" id="edit-acl'.$i.'" 
                                                                                    name="edit-acl" value="'.$row['ACL'].'"/>
                                                                         </div>
                                                                         <div class="form-group">
                                                                             <label for="edit-description'.$i.'">'.$_LANG['editpatchdescription'].'</label>
                                                                             <input type="text" class="form-control text-field" id="edit-description'.$i.'" 
                                                                                    name="edit-description" value="'.$row['Description'].'"/>
                                                                         </div>
                                                                         <div class="form-group">
                                                                             <label for="edit-action'.$i.'">'.$_LANG['editpatchdoing'].'</label>
                                                                             <input type="text" class="form-control text-field" id="edit-action'.$i.'" 
                                                                                    name="edit-action" value="'.$row['Action'].'"/>
                                                                         </div>

                                                                        

                                                                          <div class="form-group">
                                                                             <input type="submit" class="btn btn-primary btn-lg" value="'.$_LANG['modaledit'].'"/>
                                                                         </div>
                                                                     
                                                                     </form>
                                                                 </div>
                                                            <div class="modal-footer">
                                                                <button type="button" class="btn btn-default" data-dismiss="modal">'.$_LANG['modalclose'].'</button>
                                                            </div>
                                                        </div>
                                                    </div>
                                                  </div>
                                                  
                                                  
                                                  <style>
                                                    
                                                        /**********************************************/
                                                        /*edit whole patch*/
                                                        /*********************************************/
                                                        
                                                        #edit-id'.$i.' {
                                                            width: 10%;
                                                        }

                                                        #edit-company'.$i.' {
                                                            width: 30%;
                                                        }

                                                        #edit-product'.$i.' {
                                                            width: 30%;
                                                        }

                                                        #edit-building-1'.$i.' {
                                                            width: 15%;
                                                        }

                                                        #edit-room-1'.$i.' {
                                                            width: 30%;
                                                        }

                                                        #edit-wardrobe-1'.$i.' {
                                                            width: 30%;
                                                        }

                                                        #edit-u-1'.$i.' {
                                                            width: 20%;
                                                        }

                                                        #edit-model-1'.$i.' {
                                                            width: 50%;
                                                        }

                                                        #edit-signature-1'.$i.' {
                                                            width: 30%;
                                                        }

                                                        #edit-ip-1'.$i.' {
                                                            width: 30%;
                                                        }

                                                        #edit-port-1'.$i.' {
                                                            width: 30%;
                                                        }

                                                        #edit-building-2'.$i.' {
                                                            width: 15%;
                                                        }

                                                        #edit-room-2'.$i.' {
                                                            width: 30%;
                                                        }

                                                        #edit-wardrobe-2'.$i.' {
                                                            width: 30%;
                                                        }

                                                        #edit-u-2'.$i.' {
                                                            width: 20%;
                                                        }

                                                        #edit-model-2'.$i.' {
                                                            width: 50%;
                                                        }

                                                        #edit-signature-2'.$i.' {
                                                            width: 30%;
                                                        }

                                                        #edit-ip-2'.$i.' {
                                                            width: 30%;
                                                        }

                                                        #edit-port-2'.$i.' {
                                                            width: 30%;
                                                        }

                                                        #edit-vlan'.$i.' {
                                                            width: 30%;
                                                        }

                                                        #edit-patchcord'.$i.' {
                                                            width: 40%;
                                                        }

                                                        #edit-client-socket-no'.$i.' {
                                                            width: 30%;
                                                        }

                                                        #edit-client-room-no'.$i.' {
                                                            width: 30%;
                                                        }

                                                        #edit-acl'.$i.' {
                                                            width: 20%;
                                                        }

                                                        #edit-description'.$i.' {
                                                            width: 60%;
                                                        }

                                                        #edit-action'.$i.' {
                                                            width: 60%;
                                                        }

                                                  </style>

                                        </td>
                                        <td>
                                        <input type="submit" 
                                        class="btn btn-danger" 
                                        value="'.$_LANG['buttondelete'].'" 
                                        data-toggle="modal" data-target="#deletePatch'.$i.'">    
                                            
                                            <div class="modal fade" id="deletePatch'.$i.'" role="dialog">
                                                <div class="modal-dialog">
                                                     <div class="modal-content">
                                                         <div class="modal-header">
                                                             <button type="button" class="close" data-dismiss="modal">&times;</button>
                                                             <h4 class="modal-title">'.$_LANG['deletepatchtitle'].'</h4>
                                                                 
                                                                 </div>
                                                                 <div class="modal-body">
                                                                     <form method="post" action="deletePatch.php">
                                                                        
                                                                        <div class="form-group">
                                                                            <h5 class="modal-title">'.$_LANG['deletepatchsubtitle'].'</h5>
                                                                        </div>
                                                                        
                                                                        <div class="form-group">
                                                                            <input type="text" class="form-control text-field" 
                                                                                id="delete-id'.$i.'" readonly="readonly" name="patch-to-delete" value="'.$row['idCommonPart'].'"/>
                                                                        </div>
                                                                        <input type="submit" class="btn btn-danger" name="patch-delete-confirm"
                                                                               value="'.$_LANG['modalyes'].'"/>
                                                                        <button type="button" class="btn btn-default" 
                                                                        data-dismiss="modal">'.$_LANG['modalno'].'</button>
                                                                        
                                                                     </form>
                                                                 </div>
                                                        </div>
                                                    </div>
                                                  </div>
                                                  
                                                  <style>
                                                    
                                                        #delete-id'.$i.' {
                                                            width: 10%;
                                                        }

                                                  </style>
                                            
                                        </td>';
