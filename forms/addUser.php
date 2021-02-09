<tr>
                        <td><input type="submit" 
                                    class="btn btn-success" 
                                    value="<?php echo $_LANG['buttonadd'];?>"
                                     data-toggle="modal" data-target="#addUser">
                        
                            <div class="modal fade" id="addUser" role="dialog">
                                <div class="modal-dialog">

                                 <div class="modal-content">
                                     <div class="modal-header">
                                         <button type="button" class="close" data-dismiss="modal">&times;</button>

                                         <h4 class="modal-title"><?php echo $_LANG['useraddnew'];?></h4>
                                             </div>
                                             <div class="modal-body">
                                                 <form method="post" action="addUser.php">
                                                     <div class="form-group"><label for="login"><?php echo $_LANG['useraddnewlogin'];?></label>
                                                         <input type="text" class="form-control text-field" id="login" 
                                                                name="new-user-login" placeholder="<?php echo $_LANG['modalplaceholderlogin'];?>"/>
                                                     </div>
                                                     <div class="form-group">
                                                         <label for="pass"><?php echo $_LANG['useraddnewpassword'];?></label>
                                                         <input type="password" class="form-control text-field" id="pass" 
                                                                name="new-user-pass" placeholder="<?php echo $_LANG['modalplaceholderpassword'];?>"/>
                                                     </div>
                                                     <div class="form-group">
                                                         <label for="pass"><?php echo $_LANG['useraddnewpasswordrepeat'];?></label>
                                                         <input type="password" class="form-control text-field" id="pass" 
                                                                name="new-user-pass-2" placeholder="<?php echo $_LANG['modalplaceholderpassword'];?>"/>
                                                     </div>
                                                     <div class="form-group">
                                                         <input type="submit" class="btn btn-primary btn-lg" value="<?php echo $_LANG['modaladd'];?>"/>
                                                     </div>
                                                 </form>
                                             </div>
                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-default" data-dismiss="modal"><?php echo $_LANG['modalclose'];?></button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        
                        
                        </td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                    </tr>        
