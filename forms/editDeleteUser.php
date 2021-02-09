<?php

include 'strings/language.php';
include 'strings/modalLanguage.php';

echo'<td><input type="submit" class="btn btn-primary" value="'.$_LANG['buttonedit'].'"
                                        data-toggle="modal" data-target="#editUser'.$i.'">
                                            
                                         <div class="modal fade" id="editUser'.$i.'" role="dialog">
                                             
                                            <div class="modal-dialog">
                                                <div class="modal-content">
                                                    <div class="modal-header">
                                                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                                                        <h4 class="modal-title">'.$_LANG['useredit'].'</h4>
                                                    </div>
                                                    <div class="modal-body">
                                                        <form method="post" action="editUser.php">
                                                            <div class="form-group">
                                                                <label for="id-edit">'.$_LANG['userid'].'</label>
                                                                <input type="text" class="form-control text-field" 
                                                                        id="id-edit" readonly="readonly" name="edit-user-id" 
                                                                        value="'.$row['idUsersTable'].'"/>
                                                            </div>                
                                                            <div class="form-group">
                                                                <label for="login">'.$_LANG['usernewlogin'].'</label>
                                                                <input type="text" class="form-control text-field" 
                                                                    id="login" name="edit-user-login" value="'.$row['loginUser'].'"/>
                                                            </div>
                                                            <div class="form-group" style="clear:both;">
                                                                <label for="pass">'.$_LANG['usernewpassword'].'</label>
                                                                <input type="password" class="form-control text-field" 
                                                                    id="pass" name="edit-user-pass"/>
                                                            </div>
                                                            <div class="form-group">
                                                                <label for="pass">'.$_LANG['usernewpasswordrepeat'].'</label>
                                                                <input type="password" class="form-control text-field" 
                                                                    id="pass" name="edit-user-pass-2"/>
                                                            </div>
                                                            <div class="form-group">
                                                                <input type="submit" class="btn btn-primary btn-lg"
                                                                       value="'.$_LANG['modaledit'].'"/>
                                                            </div>
                                                        </form>    
                                                    </div>
                                                    <div class="modal-footer">
                                                        <button type="button" class="btn btn-default" data-dismiss="modal">'.$_LANG['modalclose'].'</button>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>  
                                     </td>';   

                                    echo '<td><input type="submit" 
                                    class="btn btn-danger" value="'.$_LANG['buttondelete'].'" '
                                            . 'data-toggle="modal" data-target="#deleteUser'.$i.'">
                                        
                                        <div class="modal fade" id="deleteUser'.$i.'" role="dialog">
                                            <div class="modal-dialog">
                                                <div class="modal-content">
                                                    <div class="modal-header">
                                                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                                                        <h4 class="modal-title">'.$_LANG['userdeletequestion'].'</h4>
                                                    </div>
                                                    <div class="modal-body">
                                                        <form method="post" action="deleteUser.php">
                                                            <div class="form-group">
                                                            <input type="text" class="form-control text-field" 
                                                                id="login" readonly="readonly" name="user-login-to-delete" value="'.$row['loginUser'].'"/>
                                                            </div>
                                                            <input type="submit" class="btn btn-danger" name="user-delete-confirm"
                                                                   value="'.$_LANG['modalyes'].'"/>
                                                            <button type="button" class="btn btn-default" 
                                                            data-dismiss="modal">'.$_LANG['modalno'].'</button>
                                                         
                                                        </form>
                                                    </div>
                                                </div>
                                            </div>
                                       </div>
                                     
                                    </td>
                                  </tr>';
