<?php

include 'strings/language.php';
include 'strings/modalLanguage.php';
include 'getBuildings.php';

echo ' <td>
                                        <input type="submit" 
                                        class="btn btn-primary" 
                                        value="'.$_LANG['buttonreturn'].'" 
                                        data-toggle="modal" data-target="#returnPatch'.$i.'">    
                                            
                                            <div class="modal fade" id="returnPatch'.$i.'" role="dialog">
                                                <div class="modal-dialog">
                                                     <div class="modal-content">
                                                         <div class="modal-header">
                                                             <button type="button" class="close" data-dismiss="modal">&times;</button>
                                                             <h4 class="modal-title">'.$_LANG['returnpatchtitle'].'</h4>
                                                                 
                                                                 </div>
                                                                 <div class="modal-body">
                                                                     <form method="post" action="returnPatch.php">
                                                                        
                                                                        <div class="form-group">
                                                                            <h5 class="modal-title">'.$_LANG['returnpatchsubtitle'].'</h5>
                                                                        </div>
                                                                        
                                                                        <div class="form-group">
                                                                        <input type="text" class="form-control text-field" 
                                                                            id="return-id'.$i.'" readonly="readonly" name="patch-to-return" value="'.$row['idOldCommonPart'].'"/>
                                                                        </div>
                                                                        <input type="submit" class="btn btn-primary" name="patch-delete-confirm"
                                                                               value="'.$_LANG['buttonreturn'].'"/>
                                                                        
                                                                     </form>
                                                                 </div>
                                                             <div class="modal-footer">
                                                                <button type="button" class="btn btn-default" data-dismiss="modal">'.$_LANG['modalclose'].'</button>
                                                            </div>
                                                        </div>
                                                    </div>
                                                  </div>
                                                  
                                                  <style>
                                                    
                                                        #return-id'.$i.' {
                                                            width: 10%;
                                                        }

                                                  </style>
                                            
                                        </td>';