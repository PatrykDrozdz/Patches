<tr>
                        <td><input type="submit" 
                                    class="btn btn-success" 
                                    value="<?php echo $_LANG['buttonadd'];?>"
                                    data-toggle="modal" data-target="#addDevice">
                            
                             <div class="modal fade" id="addDevice" role="dialog">
                                <div class="modal-dialog">

                                 <div class="modal-content">
                                     <div class="modal-header">
                                         <button type="button" class="close" data-dismiss="modal">&times;</button>

                                         <h4 class="modal-title"><?php echo $_LANG['deviceaddnew'];?></h4>
                                             </div>
                                             <div class="modal-body">
                                                 <form method="post" action="addDevice.php">
                                                     <div class="form-group"><label for="new-device-room"><?php echo $_LANG['deviceaddroom'];?></label>
                                                         <input type="text" class="form-control text-field" id="new-device-room" 
                                                                onkeyup="showHint(this.value, 'devices', 'Room', 'new-device-room-hint')" 
                                                                name="new-device-room" placeholder="<?php echo $_LANG['modalplaceholderdeviceroom'];?>"
                                                                list="new-device-room-hint"/>
                                                         <datalist id="new-device-room-hint"></datalist>
                                                         
                                                     </div>
                                                     <div class="form-group">
                                                         <label for="new-device-wardrobe"><?php echo $_LANG['deviceaddwardrobe'];?></label>
                                                         <input type="text" class="form-control text-field" id="new-device-wardrobe" 
                                                                onkeyup="showHint(this.value, 'devices', 'Wardrobe', 'new-device-wardrobe-hint')" 
                                                                name="new-device-wardrobe" placeholder="<?php echo $_LANG['modalplaceholderdevicewardrobe'] ;?>"
                                                                list="new-device-wardrobe-hint"/>
                                                         <datalist id="new-device-wardrobe-hint"></datalist>
                                                     </div>
                                                     <div class="form-group">
                                                         <label for="new-device-u"><?php echo $_LANG['deviceaddu'];?></label>
                                                         <input type="number" min="0" max="42" class="form-control text-field" id="new-device-u" 
                                                                name="new-device-u" placeholder="<?php echo $_LANG['modalplaceholderdeviceu'];?>"/>
                                                     </div>
                                                     <div class="form-group">
                                                         <label for="new-device-model"><?php echo $_LANG['deviceaddmodel'];?></label>
                                                         <input type="search" class="form-control text-field" id="new-device-model" 
                                                                name="new-device-model" onkeyup="showHint(this.value, 'devices', 'Model', 'new-device-model-hint')" 
                                                                placeholder="<?php echo $_LANG['modalplaceholderdevicemodal'];?>" list="new-device-model-hint"/>
                                                         <datalist id="new-device-model-hint"></datalist>
                                                     </div>
                                                     <div class="form-group">
                                                         <label for="new-device-signature"><?php echo $_LANG['deviceaddsignature'];?></label>
                                                         <input type="text" class="form-control text-field" id="new-device-signature" 
                                                                name="new-device-signature" placeholder="<?php echo $_LANG['modalplaceholderdevicesignature'];?>"/>
                                                     </div>
                                                     <div class="form-group">
                                                         <label for="new-device-ip"><?php echo $_LANG['deviceaddip'];?></label>
                                                         <input type="text" class="form-control text-field" id="new-device-ip" 
                                                                name="new-device-ip" placeholder="<?php echo $_LANG['modalplaceholderdeviceip'];?>"/>
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
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                    </tr>

