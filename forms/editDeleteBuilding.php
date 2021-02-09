<?php

include 'strings/language.php';
include 'strings/modalLanguage.php';


                                    echo '<td>
                                    <input type="submit" class="btn btn-primary" value="'.$_LANG['buttonedit'].'"
                                        data-toggle="modal" data-target="#editBuilding'.$i.'">
                                        
                                        <div class="modal fade" id="editBuilding'.$i.'" role="dialog">
                                            <div class="modal-dialog">

                                             <div class="modal-content">
                                                 <div class="modal-header">
                                                     <button type="button" class="close" data-dismiss="modal">&times;</button>

                                                     <h4 class="modal-title">'.$_LANG['buildingeditname'].'</h4>
                                                         </div>
                                                         <div class="modal-body">
                                                             <form method="post" action="editBuilding.php">
                                                                 <div class="form-group">
                                                                    <label for="id-edit">'.$_LANG['buildingid'].'</label>
                                                                    <input type="text" class="form-control text-field" 
                                                                            id="id-edit" readonly="readonly" name="edit-building-id" 
                                                                            value="'.$row['idBuilding'].'"/>
                                                                </div>  
                                                                 <div class="form-group">
                                                                     <label for="edit-building">'.$_LANG['buildingeditname'].'</label>
                                                                     <input type="text" class="form-control text-field" id="edit-building"
                                                                     name="edit-building" value="'.$row['BuildingName'].'"/>
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
                                    <td>
                                    
                                        <input type="submit" class="btn btn-danger" value="'.$_LANG['buttondelete'].'"
                                        data-toggle="modal" data-target="#deleteBuilding'.$i.'">
                                          <div class="modal fade" id="deleteBuilding'.$i.'" role="dialog">
                                            <div class="modal-dialog">

                                             <div class="modal-content">
                                                 <div class="modal-header">
                                                     <button type="button" class="close" data-dismiss="modal">&times;</button>

                                                     <h4 class="modal-title">'.$_LANG['buildingdelete'].'</h4>
                                                         </div>
                                                         <div class="modal-body">
                                                             <form method="post" action="deleteBuilding.php">
                                                                <div class="form-group">
                                                                    <h5 class="modal-title">'.$_LANG['buildingdeletesubtitle'].'</h5>
                                                                </div>
                                                                <div class="form-group">
                                                                    <input type="text" class="form-control text-field" 
                                                                        id="delete-id'.$i.'" readonly="readonly" name="building-to-delete" 
                                                                        value="'.$row['idBuilding'].'"/>
                                                                </div>
                                                                    <input type="submit" class="btn btn-danger" name="building-delete-confirm"
                                                                    value="'.$_LANG['modalyes'].'"/>
                                                                    <button type="button" class="btn btn-default" 
                                                                        data-dismiss="modal">'.$_LANG['modalno'].'</button>
                                                             </form>
                                                         </div>
                                                </div>
                                            </div>
                                        </div>
                                            
                                            <style>
                                                
                                                #delete-id'.$i.'{
                                                     width: 10%;
                                                }
                                                
                                            </style>

                                    </td>
                            </tr>';