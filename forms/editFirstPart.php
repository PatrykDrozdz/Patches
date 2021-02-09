<?php

include 'strings/language.php';
include 'strings/modalLanguage.php';
include 'getBuildings.php';

echo'<td>
                                            <input type="submit" 
                                            class="btn btn-primary" value="'.$_LANG['buttonedit'].'"
                                            data-toggle="modal" data-target="#editFirstPart'.$i.'">
                                                
                                              <div class="modal fade" id="editFirstPart'.$i.'" role="dialog">
                                                <div class="modal-dialog">
                                                     <div class="modal-content">
                                                         <div class="modal-header">
                                                             <button type="button" class="close" data-dismiss="modal">&times;</button>

                                                             <h4 class="modal-title">'.$_LANG['editfirstparttitle'].'</h4>
                                                                 </div>
                                                                 <div class="modal-body">
                                                                     <form method="post" action="editFirstPart.php">
                                                                        
                                                                        <div class="form-group">
                                                                             <label for="new-company'.$i.'">'.$_LANG['edifirstpartid'].'</label>
                                                                             <input type="text" class="form-control text-field" id="edit-id-1'.$i.'" 
                                                                                    name="edit-id-1" value="'.$row['idFirstPart'].'" readonly="readonly"/>
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
                                                                                    
                                                                         value="'.$row['Signature'].'" list="edit-device-signature-hint-1"/>
                                                                             <datalist id="edit-device-signature-hint-1"></datalist>
                                                                         </div>
                                                                         <div class="form-group">
                                                                             <label for="edit-room-1'.$i.'">'.$_LANG['editpatchroom1'].'</label>
                                                                             <input type="text" class="form-control text-field" id="edit-room-1'.$i.'"';?>
                                                                                    onkeyup="showHint(this.value, 'devices', 'Room', 'edit-device-room-hint')" 
                                                                            <?php 
                                                                            echo 'name="edit-room-1" value="'.$row['Room'].'"
                                                                                    list="edit-device-room-hint"/>
                                                                              <datalist id="edit-device-room-hint"></datalist>
                                                                         </div>
                                                                         <div class="form-group">
                                                                             <label for="edit-wardrobe-1'.$i.'">'.$_LANG['editpatchwardrobe1'].'</label>
                                                                             <input type="text" class="form-control text-field" id="edit-wardrobe-1'.$i.'"';?> 
                                                                                    onkeyup="showHint(this.value, 'devices', 'Wardrobe', 'edit-device-wardrobe-hint')" 
                                                                                    <?php 
                                                                            echo 'name="edit-wardrobe-1" value="'.$row['Wardrobe'].'"
                                                                                    list="edit-device-wardrobe-hint"/>
                                                                             <datalist id="edit-device-wardrobe-hint"></datalist>
                                                                         </div>
                                                                         <div class="form-group">
                                                                             <label for="edit-u-1'.$i.'">'.$_LANG['editpatchu1'].'</label>
                                                                             <input type="number" min="0" max="42" class="form-control text-field" id="edit-u-1'.$i.'" 
                                                                                    name="edit-u-1" value="'.$row['U'].'"/>
                                                                         </div>
                                                                         <div class="form-group">
                                                                             <label for="edit-model-1'.$i.'">'.$_LANG['editpatchmodel1'].'</label>
                                                                             <input type="text" class="form-control text-field" id="edit-model-1'.$i.'" 
                                                                                    name="edit-model-1"'; ?> 
                                                                                    onkeyup="showHint(this.value, 'devices', 'Model', 'edit-device-model-hint')"
                                                                                    <?php
                                                                                   echo 'value="'.$row['Model'].'" list="edit-device-model-hint"/>
                                                                             <datalist id="edit-device-model-hint"></datalist>
                                                                         </div>
                                                                         <div class="form-group">
                                                                             <label for="edit-ip-1'.$i.'">'.$_LANG['editpatchip1'].'</label>
                                                                             <input type="text" class="form-control text-field" id="edit-ip-1'.$i.'" 
                                                                                    name="edit-ip-1"'; ?>
                                                                                   onkeyup="showHint(this.value, 'devices', 'IP', 'edit-ip-hint-1')"
                                                                                   <?php
                                                                                    echo 'value="'.$row['IP'].'" list="edit-ip-hint-1"/>
                                                                             <datalist id="edit-ip-hint-1"></datalist>
                                                                         </div>
                                                                         <div class="form-group">
                                                                             <label for="edit-port-1'.$i.'">'.$_LANG['editpatchport1'].'</label>
                                                                             <input type="text" class="form-control text-field" id="edit-port-1'.$i.'" 
                                                                                    name="edit-port-1" value="'.$row['Port1'].'"/>
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
                                              
                                                        #edit-id-1'.$i.'{
                                                             width: 10%;
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
                                                
                                              </style>
                                                
                                         </td>  ';

