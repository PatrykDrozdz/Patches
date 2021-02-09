<?php

include 'strings/language.php';
include 'strings/modalLanguage.php';

$adminLoginLoged = $_SESSION['loginAdmin'];

 echo '<td><input type="submit" 
                                    class="btn btn-primary" value="'.$_LANG['buttonedit'].'"
                                        data-toggle="modal" data-target="#editAdmin'.$i.'">
                                            
                                <div class="modal fade" id="editAdmin'.$i.'" role="dialog">
                                    <div class="modal-dialog">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <button type="button" class="close" data-dismiss="modal">&times;</button>
                                                <h4 class="modal-title">'.$_LANG['adminedit'].'</h4>
                                            </div>
                                            <div class="modal-body">
                                                <form method="post" action="editAdmin.php">
                                                    <div class="form-group">
                                                        <label for="id-edit">'.$_LANG['adminid'].'</label>
                                                        <input type="text" class="form-control text-field" 
                                                                id="id-edit" readonly="readonly" name="edit-admin-id" 
                                                                value="'.$row['idAdminsTable'].'"/>
                                                    </div>                
                                                    <div class="form-group">
                                                        <label for="login">'.$_LANG['adminnewlogin'].'</label>
                                                        <input type="text" class="form-control text-field" 
                                                            id="login" name="edit-admin-login" value="'.$row['loginAdmin'].'"/>
                                                    </div>
                                                    <div class="form-group" style="clear:both;">
                                                        <label for="pass">'.$_LANG['adminnewpassword'].'</label>
                                                        <input type="password" class="form-control text-field" 
                                                            id="pass" name="edit-admin-pass"/>
                                                    </div>
                                                    <div class="form-group">
                                                        <label for="pass">'.$_LANG['adminnewpasswordrepeat'].'</label>
                                                        <input type="password" class="form-control text-field" 
                                                            id="pass" name="edit-admin-pass-2"/>
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
                                   echo '<td>';
                                 if($adminLoginLoged!=$row['loginAdmin']) {      
                                        echo'<input type="submit" 
                                            class="btn btn-danger" value="'.$_LANG['buttondelete'].'" 
                                                data-toggle="modal" data-target="#deleteAdmin'.$i.'">

                                                <div class="modal fade" id="deleteAdmin'.$i.'" role="dialog">
                                                    <div class="modal-dialog">
                                                        <div class="modal-content">
                                                            <div class="modal-header">
                                                                <button type="button" class="close" data-dismiss="modal">&times;</button>
                                                                <h4 class="modal-title">'.$_LANG['admindeletequestion'].'</h4>
                                                                    
                                                            </div>
                                                            <div class="modal-body">
                                                                <form method="post" action="deleteAdmin.php">
                                                                    <div class="form-group">
                                                                        <h5 class="modal-title">'.$_LANG['admindeletesubtritle'].'</h5>
                                                                    </div>        
                                                                    <div class="form-group">
                                                                        <input type="text" class="form-control text-field" 
                                                                            id="login" readonly="readonly" 
                                                                            name="admin-login-to-delete" value="'.$row['loginAdmin'].'"/>
                                                                    </div>
                                                                    <input type="submit" class="btn btn-danger" name="admin-delete-confirm"
                                                                           value="'.$_LANG['modalyes'].'"/>
                                                                    <button type="button" class="btn btn-default" 
                                                                    data-dismiss="modal">'.$_LANG['modalno'].'</button>

                                                                </form>
                                                            </div>
                                                        </div>
                                                    </div>
                                               </div>';
                                 }  else {
                                     
                                     echo '<input type="submit" 
                                            class="btn btn-danger disabled" 
                                            value="'.$_LANG['buttondelete'].'">';
                                     
                                 }
                                 
                               echo'</td>
                                  </tr>';
