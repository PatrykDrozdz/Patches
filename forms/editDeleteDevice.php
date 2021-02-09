<?php

include 'strings/language.php';
include 'strings/modalLanguage.php';

echo '<td><input type="submit" class="btn btn-primary" value="'.$_LANG['buttonedit'].'"
                                        data-toggle="modal" data-target="#editDevice'.$i.'">
                                        
                                        <div class="modal fade" id="editDevice'.$i.'" role="dialog">
                                            <div class="modal-dialog">

                                             <div class="modal-content">
                                                 <div class="modal-header">
                                                     <button type="button" class="close" data-dismiss="modal">&times;</button>

                                                     <h4 class="modal-title">'.$_LANG['deviceedit'].'</h4>
                                                         </div>
                                                         <div class="modal-body">
                                                             <form method="post" action="editDevice.php">
                                                                 <div class="form-group">
                                                                    <label for="id-edit">'.$_LANG['deviceid'].'</label>
                                                                    <input type="text" class="form-control text-field" 
                                                                            id="id-edit" readonly="readonly" name="edit-device-id" 
                                                                            value="'.$row['idDevices'].'"/>
                                                                </div>  
                                                                 <div class="form-group">
                                                                 <label for="edit-device-room">'.$_LANG['deviceeditroom'].'</label>
                                                                     <input type="text" class="form-control text-field" id="edit-device-room"';?>
                                                                     onkeyup="showHint(this.value, '<?php echo 'devices';?>', '<?php echo 'Room';?>', '<?php echo 'edit-device-room-hint'.$i; ?>')" 
                                                                      <?php echo'name="edit-device-room" value="'.$row['Room'].'" list="edit-device-room-hint'.$i.'"/>
                                                                    <datalist id="edit-device-room-hint'.$i.'"></datalist> 
                                                                 </div>
                                                                 <div class="form-group">
                                                                     <label for="edit-device-wardrobe">'.$_LANG['deviceeditwardrobe'].'</label>
                                                                     <input type="text" class="form-control text-field" id="edit-device-wardrobe"'; ?>
                                                                        onkeyup="showHint(this.value, '<?php echo 'devices';?>', '<?php echo 'Wardrobe';?>', '<?php echo 'edit-device-wardrobe-hint'.$i; ?>')" 
                                                                        <?php echo 'name="edit-device-wardrobe" value="'.$row['Wardrobe'].'"list="edit-device-wardrobe-hint'.$i.'"/>
                                                                    <datalist id="edit-device-wardrobe-hint'.$i.'"></datalist> 
                                                                 </div>
                                                                 <div class="form-group">
                                                                     <label for="edit-device-u">'.$_LANG['deviceeditu'].'</label>
                                                                     <input type="number" min="0" max="42" class="form-control text-field" id="edit-device-u" 
                                                                            name="edit-device-u" value="'.$row['U'].'" />
                                                                 </div>
                                                                 <div class="form-group"><label for="edit-device-model">'.$_LANG['deviceeditmodel'].'</label>
                                                                     <input type="text" class="form-control text-field" id="edit-device-model" ';?>
                                                                     onkeyup="showHint(this.value, '<?php echo 'devices';?>', '<?php echo 'Model';?>', '<?php echo 'edit-device-model-hint'.$i; ?>')" 
                                                                          <?php echo 'name="edit-device-model" value="'.$row['Model'].'" list="edit-device-model-hint'.$i.'"/>
                                                                     <datalist id="edit-device-model-hint'.$i.'"></datalist>        
                                                                 </div>
                                                                 <div class="form-group">
                                                                     <label for="edit-device-signature">'.$_LANG['deviceeditsignature'].'</label>
                                                                     <input type="text" class="form-control text-field" id="edit-device-signature" 
                                                                            name="edit-device-signature" value="'.$row['Signature'].'"/>
                                                                 </div>
                                                                 <div class="form-group">
                                                                     <label for="edit-device-ip">'.$_LANG['deviceeditip'].'</label>
                                                                     <input type="text" class="form-control text-field" id="edit-device-ip" 
                                                                            name="edit-device-ip" value="'.$row['IP'].'"/>
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
                                        
                                    </td>
                                    
                                    <td><input type="submit" 
                                            class="btn btn-danger" value="'.$_LANG['buttondelete'].'" 
                                        data-toggle="modal" data-target="#deleteDevice'.$i.'">
                                            
                                                <div class="modal fade" id="deleteDevice'.$i.'" role="dialog">
                                                    <div class="modal-dialog">
                                                        <div class="modal-content">
                                                            <div class="modal-header">
                                                                <button type="button" class="close" data-dismiss="modal">&times;</button>
                                                                <h4 class="modal-title">'.$_LANG['devicedeletequestion'].'</h4>
                                                            </div>
                                                            <div class="modal-body">
                                                                <form method="post" action="deleteDevice.php">
                                                                    <div class="form-group">
                                                                        <h5 class="modal-title">'.$_LANG['devicedeletequestionsub'].'</h5>
                                                                    </div>
                                                                    <div class="form-group">
                                                                    <input type="text" class="form-control text-field" 
                                                                        id="device-to-delete'.$i.'" readonly="readonly" name="device-id-to-delete" value="'.$row['idDevices'].'"/>
                                                                    </div>
                                                                    <input type="submit" class="btn btn-danger" name="device-delete-confirm"
                                                                           value="'.$_LANG['modalyes'].'"/>
                                                                    <button type="button" class="btn btn-default" 
                                                                    data-dismiss="modal">'.$_LANG['modalno'].'</button>          
                                                                </form>
                                                            </div>
                                                        </div>
                                                    </div>
                                               </div>
                                               
                                                    <style>
                                                        
                                                        #device-to-delete'.$i.'{
                                                            width: 15%;
                                                        }
                                                        
                                                    </style>
                                                    
                                            </td>
                                            
                            </tr>';

