<tr>
                        <td><input type="submit" 
                                    class="btn btn-success" 
                                    value="<?php echo $_LANG['buttonadd'];?>"
                                    data-toggle="modal" data-target="#addBuilding">
                            
                             <div class="modal fade" id="addBuilding" role="dialog">
                                <div class="modal-dialog">

                                 <div class="modal-content">
                                     <div class="modal-header">
                                         <button type="button" class="close" data-dismiss="modal">&times;</button>

                                         <h4 class="modal-title"><?php echo $_LANG['buildingaddnew'];?></h4>
                                             </div>
                                             <div class="modal-body">
                                                 <form method="post" action="addBuilding.php">
                                                     <div class="form-group">
                                                         <label for="add-building"><?php echo $_LANG['buildingaddname'];?></label>
                                                         <input type="text" class="form-control text-field" id="add-building" 
                                                                name="add-building" placeholder="<?php echo $_LANG['modalplaceholderbuildingname'];?>"/>
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
                    </tr>

