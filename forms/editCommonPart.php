<?php

include 'strings/language.php';
include 'strings/modalLanguage.php';

echo'<td>
                                       <input type="submit" 
                                            class="btn btn-primary" value="'.$_LANG['buttonedit'].'"
                                            data-toggle="modal" data-target="#editCommonPart'.$i.'">
                                                
                                             <div class="modal fade" id="editCommonPart'.$i.'" role="dialog">
                                                <div class="modal-dialog">
                                                     <div class="modal-content">
                                                         <div class="modal-header">
                                                             <button type="button" class="close" data-dismiss="modal">&times;</button>

                                                             <h4 class="modal-title">'.$_LANG['editcommonparttitle'].'</h4>
                                                                 </div>
                                                                 <div class="modal-body">
                                                                     <form method="post" action="editCommonPart.php">
                                                                        
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
                                                        /*edit commonpart*/
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
                                                    
                                        </td>';
