                    <tr>
                        <td><input type="submit" 
                                    class="btn btn-success" 
                                    value="<?php echo $_LANG['buttonadd'];?>"
                                    data-toggle="modal" data-target="#addAdmin">
                        <div class="modal fade" id="addAdmin" role="dialog">
                            <div class="modal-dialog">

                                 <div class="modal-content">
                                     <div class="modal-header">
                                         <button type="button" class="close" data-dismiss="modal">&times;</button>

                                         <h4 class="modal-title"><?php echo $_LANG['adminaddnew'];?></h4>
                                             </div>
                                             <div class="modal-body">
                                                 <form method="post" action="addAdmin.php">
                                                     <div class="form-group"><label for="login"><?php echo $_LANG['adminaddnewlogin'];?></label>
                                                         <input type="text" class="form-control text-field" id="login" 
                                                                name="new-admin-login" placeholder="<?php echo $_LANG['modalplaceholderlogin'];?>"/>
                                                     </div>
                                                     <div class="form-group">
                                                         <label for="pass"><?php echo $_LANG['adminaddnewpassword'];?></label>
                                                         <input type="password" class="form-control text-field" id="pass" 
                                                                name="new-admin-pass" placeholder="<?php echo $_LANG['modalplaceholderpassword'];?>"/>
                                                     </div>
                                                     <div class="form-group">
                                                         <label for="pass"><?php echo $_LANG['adminaddnewpasswordrepeat'];?></label>
                                                         <input type="password" class="form-control text-field" id="pass" 
                                                                name="new-admin-pass-2" placeholder="<?php echo $_LANG['modalplaceholderpassword'];?>"/>
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