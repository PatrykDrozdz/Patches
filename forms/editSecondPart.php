<?php

include 'strings/language.php';
include 'strings/modalLanguage.php';
include 'getBuildings.php';

echo '                                 <td>
                                    <input type="submit" 
                                            class="btn btn-primary" value="'.$_LANG['buttonedit'].'"
                                            data-toggle="modal" data-target="#editSecondPart'.$i.'">
                                                
                                            <div class="modal fade" id="editSecondPart'.$i.'" role="dialog">
                                                <div class="modal-dialog">
                                                     <div class="modal-content">
                                                         <div class="modal-header">
                                                             <button type="button" class="close" data-dismiss="modal">&times;</button>

                                                             <h4 class="modal-title">'.$_LANG['editfirstparttitle'].'</h4>
                                                                 </div>
                                                                 <div class="modal-body">
                                                                     <form method="post" action="editSecondPart.php">
                                                                        
                                                                        <div class="form-group">
                                                                             <label for="new-company'.$i.'">'.$_LANG['edifirstpartid'].'</label>
                                                                             <input type="text" class="form-control text-field" id="edit-id-2'.$i.'" 
                                                                                    name="edit-id-2" value="'.$row['idSecondPart'].'" readonly="readonly"/>
                                                                         </div>
                                                                        
                                                                         <div class="form-group">
                                                                             <label for="edit-building-2'.$i.'">'.$_LANG['editpatchbuilding2'].'</label>
                                                                             <select type="text" class="form-control text-field" id="edit-building-2'.$i.'" 
                                                                                 name="edit-building-2">';
                                                                                 
                                                                                 for($j=0; $j<$numRowsBuilding; $j++) {
                                                                                    echo '<option>'.$buildingRow[$j]['BuildingName'].'</option>';
                                                                                 }

                                                                                 $connection->freeFetchedDatas($resultBuilding);

                                                                                 
                                                                   echo '</select>                                                                                    
                                                                         </div>
                                                                         <div class="form-group"> 
                                                                             <label for="edit-signature-2'.$i.'">'.$_LANG['editpatchsignature2'].'</label>
                                                                             <input type="text" class="form-control text-field" id="edit-signature-2'.$i.'" 
                                                                                    name="edit-signature-2"';?>
                    
                                                                                    onkeyup="showHint(this.value, 'devices', 'Signature', 'edit-device-signature-hint-2')"
                                                                                    <?php echo '
                                                                                    onclick="getDevice(this.value, \'edit-room-2'.$i.'\', \'edit-wardrobe-2'.$i.'\', 
                                                                                        \'edit-u-2'.$i.'\', \'edit-model-2'.$i.'\', \'edit-ip-2'.$i.'\')"
                                                                                    
                                                                         value="'.$row['Signature'].'" list="edit-device-signature-hint-2"/>
                                                                             <datalist id="edit-device-signature-hint-2"></datalist>
                                                                         </div>
                                                                         <div class="form-group">
                                                                             <label for="edit-room-2'.$i.'">'.$_LANG['editpatchroom2'].'</label>
                                                                             <input type="text" class="form-control text-field" id="edit-room-2'.$i.'"';?>
                                                                                    onkeyup="showHint(this.value, 'devices', 'Room', 'edit-device-room-hint')" 
                                                                            <?php 
                                                                            echo 'name="edit-room-2" value="'.$row['Room'].'"
                                                                                    list="edit-device-room-hint"/>
                                                                              <datalist id="edit-device-room-hint"></datalist>
                                                                         </div>
                                                                         <div class="form-group">
                                                                             <label for="edit-wardrobe-2'.$i.'">'.$_LANG['editpatchwardrobe2'].'</label>
                                                                             <input type="text" class="form-control text-field" id="edit-wardrobe-2'.$i.'"';?> 
                                                                                    onkeyup="showHint(this.value, 'devices', 'Wardrobe', 'edit-device-wardrobe-hint')" 
                                                                                    <?php 
                                                                            echo 'name="edit-wardrobe-2" value="'.$row['Wardrobe'].'"
                                                                                    list="edit-device-wardrobe-hint"/>
                                                                             <datalist id="edit-device-wardrobe-hint"></datalist>
                                                                         </div>
                                                                         <div class="form-group">
                                                                             <label for="edit-u-2'.$i.'">'.$_LANG['editpatchu2'].'</label>
                                                                             <input type="number" min="0" max="42" class="form-control text-field" id="edit-u-2'.$i.'" 
                                                                                    name="edit-u-2" value="'.$row['U'].'"/>
                                                                         </div>
                                                                         <div class="form-group">
                                                                             <label for="edit-model-2'.$i.'">'.$_LANG['editpatchmodel2'].'</label>
                                                                             <input type="text" class="form-control text-field" id="edit-model-2'.$i.'" 
                                                                                    name="edit-model-2"'; ?> 
                                                                                    onkeyup="showHint(this.value, 'devices', 'Model', 'edit-device-model-hint')"
                                                                                    <?php
                                                                                   echo 'value="'.$row['Model'].'" list="edit-device-model-hint"/>
                                                                             <datalist id="edit-device-model-hint"></datalist>
                                                                         </div>
                                                                         <div class="form-group">
                                                                             <label for="edit-ip-2'.$i.'">'.$_LANG['editpatchip2'].'</label>
                                                                             <input type="text" class="form-control text-field" id="edit-ip-2'.$i.'" 
                                                                                    name="edit-ip-2"'; ?>
                                                                                   onkeyup="showHint(this.value, 'devices', 'IP', 'edit-ip-hint-1')"
                                                                                   <?php
                                                                                    echo 'value="'.$row['IP'].'" list="edit-ip-hint-2"/>
                                                                             <datalist id="edit-ip-hint-2"></datalist>
                                                                         </div>
                                                                         <div class="form-group">
                                                                             <label for="edit-port-2'.$i.'">'.$_LANG['editpatchport2'].'</label>
                                                                             <input type="text" class="form-control text-field" id="edit-port-2'.$i.'" 
                                                                                    name="edit-port-2" value="'.$row['Port2'].'"/>
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
                                              
                                                        #edit-id-2'.$i.'{
                                                             width: 10%;
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
                                                
                                              </style>
                                                

                                 </td>';
