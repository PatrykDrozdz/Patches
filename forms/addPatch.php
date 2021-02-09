<?php

include 'strings/language.php';
include 'strings/modalLanguage.php';
include 'getBuildings.php';
?>
                    <tr>
                        <td><input type="submit" 
                                    class="btn btn-success" 
                                    value="<?php echo $_LANG['buttonadd'];?>"
                                    data-toggle="modal" data-target="#addPatch">
                            
                        <div class="modal fade" id="addPatch" role="dialog">
                            <div class="modal-dialog">
                                 <div class="modal-content">
                                     <div class="modal-header">
                                         <button type="button" class="close" data-dismiss="modal">&times;</button>

                                         <h4 class="modal-title"><?php echo $_LANG['newpatchtitle'];?></h4>
                                             </div>
                                             <div class="modal-body">
                                                 <form method="post" action="addPatch.php">
                                                     
                                                     <div class="form-group">
                                                         <label for="new-company"><?php echo $_LANG['newpatchcompany'];?></label>
                                                         <input type="text" class="form-control text-field" id="new-company" 
                                                                name="new-company" placeholder="<?php echo $_LANG['modalplaceholdercompany'];?>"/>
                                                     </div>
                                                     <div class="form-group">
                                                         <label for="new-product"><?php echo $_LANG['newpatchproduct'];?></label>
                                                         <input type="text" class="form-control text-field" id="new-product" 
                                                                name="new-product" placeholder="<?php echo $_LANG['modalplaceholderproduct'];?>"/>
                                                     </div>
                                                     
                                                     <!-- ***************************************************************************************-->
                                                     
                                                     <div class="form-group">
                                                         <label for="new-building-1"><?php echo $_LANG['newpatchbuilding1'];?></label>
                                                         <select type="text" class="form-control text-field" id="new-building-1" 
                                                             name="new-building-1">
                                                             <?php
                                                             for($i=0; $i<$numRowsBuilding; $i++) {
                                                                echo '<option>'.$buildingRow[$i]['BuildingName'].'</option>';
                                                             }
                                                             
                                                             $connection->freeFetchedDatas($resultBuilding);
                                                             
                                                             ?>
                                                         </select>
                                                     </div>
                                                     <div class="form-group">
                                                         <label for="new-signature-1"><?php echo $_LANG['newpatchsignature1'];?></label>
                                                         <input type="text" class="form-control text-field" id="new-signature-1" 
                                                                name="new-signature-1" onkeyup="showHint(this.value, 'devices', 'Signature', 'new-device-signature-hint-1')"
                                                                onclick="getDevice(this.value, 'new-room-1', 'new-wardrobe-1', 'new-u-1', 'new-model-1', 'new-ip-1')"
                                                                placeholder="<?php echo $_LANG['modalplaceholderdevicesignature'];?>"list="new-device-signature-hint-1"/>
                                                         <datalist id="new-device-signature-hint-1"></datalist>
                                                     </div>
                                                     <div class="form-group"><!-- ondblclick="setAttribute('new-room-1', 'readonly', ';')" - to repaire-->
                                                         <label for="new-room-1"><?php echo $_LANG['newpatchroom1'];?></label>
                                                         <input type="text" class="form-control text-field" id="new-room-1"
                                                                onkeyup="showHint(this.value, 'devices', 'Room', 'new-device-room-hint')" 
                                                                name="new-room-1" placeholder="<?php echo $_LANG['modalplaceholderdeviceroom'] ;?>"
                                                                list="new-device-room-hint"/>
                                                          <datalist id="new-device-room-hint"></datalist>
                                                     </div>
                                                     <div class="form-group">
                                                         <label for="new-wardrobe-1"><?php echo $_LANG['newpatchwardrobe1'];?></label>
                                                         <input type="text" class="form-control text-field" id="new-wardrobe-1" name="new-wardrobe-1"
                                                                onkeyup="showHint(this.value, 'devices', 'Wardrobe', 'new-device-wardrobe-hint')" 
                                                                placeholder="<?php echo $_LANG['modalplaceholderdevicewardrobe'] ;?>"
                                                                list="new-device-wardrobe-hint"/>
                                                         <datalist id="new-device-wardrobe-hint"></datalist>
                                                     </div>
                                                     <div class="form-group">
                                                         <label for="new-u-1"><?php echo $_LANG['newpatchu1'];?></label>
                                                         <input type="number" min="0" max="42" class="form-control text-field" id="new-u-1" 
                                                                name="new-u-1" placeholder="<?php echo $_LANG['modalplaceholderdeviceu'];?>"/>
                                                     </div>
                                                     <div class="form-group">
                                                         <label for="new-model-1"><?php echo $_LANG['newpatchmodel1'];?></label>
                                                         <input type="search" class="form-control text-field" id="new-model-1" 
                                                                name="new-model-1" onkeyup="showHint(this.value, 'devices', 'Model', 'new-device-model-hint')" 
                                                                placeholder="<?php echo $_LANG['modalplaceholderdevicemodal'];?>" list="new-device-model-hint"/>
                                                         <datalist id="new-device-model-hint"></datalist>
                                                     </div>
                                                     <div class="form-group">
                                                         <label for="new-ip-1"><?php echo $_LANG['newpatchip1'];?></label>
                                                         <input type="text" class="form-control text-field" id="new-ip-1" 
                                                                name="new-ip-1" onkeyup="showHint(this.value, 'devices', 'IP', 'new-ip-hint-1')
                                                                getDevice(this.value, 'new-room-1', id2, id3, id4, id5)" 
                                                                placeholder="<?php echo $_LANG['modalplaceholderdeviceip'];?>" list="new-ip-hint-1"/>
                                                         <datalist id="new-ip-hint-1"></datalist>
                                                     </div>
                                                     <div class="form-group">
                                                         <label for="new-port-1"><?php echo $_LANG['newpatchport1'];?></label>
                                                         <input type="text" class="form-control text-field" id="new-port-1" 
                                                                name="new-port-1" placeholder="<?php echo $_LANG['modalplaceholderport'];?>"/>
                                                     </div>
                                                     
                                                     <!-- ******************************************************************************************************-->
                                                     
                                                     <div class="form-group">
                                                         <label for="new-building-2"><?php echo $_LANG['newpatchbuilding2'];?></label>
                                                         <select type="text" class="form-control text-field" id="new-building-2" 
                                                             name="new-building-2">
                                                             <?php
                                                             for($i=0; $i<$numRowsBuilding; $i++) {
                                                                echo '<option>'.$buildingRow[$i]['BuildingName'].'</option>';
                                                             }
                                                             
                                                             $connection->freeFetchedDatas($resultBuilding);
                                                             
                                                             ?>
                                                         </select>
                                                     </div>
                                                     <div class="form-group">
                                                         <label for="new-signature-2"><?php echo $_LANG['newpatchsignature2'];?></label>
                                                         <input type="text" class="form-control text-field" id="new-signature-2" 
                                                                name="new-signature-2"  onkeyup="showHint(this.value, 'devices', 'Signature', 'new-device-signature-hint-2')"
                                                                onclick="getDevice(this.value, 'new-room-2', 'new-wardrobe-2', 'new-u-2', 'new-model-2', 'new-ip-2')"
                                                                placeholder="<?php echo $_LANG['modalplaceholderdevicesignature'];?>"list="new-device-signature-hint-2"/>
                                                         <datalist id="new-device-signature-hint-2"></datalist>
                                                     </div>
                                                     <div class="form-group">
                                                         <label for="new-room-2"><?php echo $_LANG['newpatchroom2'];?></label>
                                                         <input type="text" class="form-control text-field" id="new-room-2"
                                                                onkeyup="showHint(this.value, 'devices', 'Room', 'new-device-room-hint')" 
                                                                name="new-room-2" placeholder="<?php echo $_LANG['modalplaceholderdeviceroom'] ;?>"
                                                                list="new-device-room-hint"/>
                                                          <datalist id="new-device-room-hint"></datalist>
                                                     </div>
                                                     <div class="form-group">
                                                         <label for="new-wardrobe-2"><?php echo $_LANG['newpatchwardrobe2'];?></label>
                                                         <input type="text" class="form-control text-field" id="new-wardrobe-2" 
                                                                onkeyup="showHint(this.value, 'devices', 'Wardrobe', 'new-device-wardrobe-hint')" 
                                                                name="new-wardrobe-2" placeholder="<?php echo $_LANG['modalplaceholderdevicewardrobe'] ;?>"
                                                                list="new-device-wardrobe-hint"/>
                                                         <datalist id="new-device-wardrobe-hint"></datalist>
                                                     </div>
                                                     <div class="form-group">
                                                         <label for="new-u-2"><?php echo $_LANG['newpatchu2'];?></label>
                                                         <input type="number" min="0" max="42" class="form-control text-field" id="new-u-2" 
                                                                name="new-u-2" placeholder="<?php echo $_LANG['modalplaceholderdeviceu'];?>"/>
                                                     </div>
                                                     <div class="form-group">
                                                         <label for="new-model-2"><?php echo $_LANG['newpatchmodel2'];?></label>
                                                         <input type="search" class="form-control text-field" id="new-model-2" 
                                                                name="new-model-2" onkeyup="showHint(this.value, 'devices', 'Model', 'new-device-model-hint')" 
                                                                placeholder="<?php echo $_LANG['modalplaceholderdevicemodal'];?>" list="new-device-model-hint"/>
                                                         <datalist id="new-device-model-hint"></datalist>
                                                     </div>
                                                     <div class="form-group">
                                                         <label for="new-ip-2"><?php echo $_LANG['newpatchip2'];?></label>
                                                         <input type="text" class="form-control text-field" id="new-ip-2" 
                                                                name="new-ip-2" onkeyup="showHint(this.value, 'devices', 'IP', 'new-ip-hint-2')" 
                                                                placeholder="<?php echo $_LANG['modalplaceholderdeviceip'];?>" list="new-ip-hint-2"/>
                                                         <datalist id="new-ip-hint-2"></datalist>
                                                     </div>
                                                     <div class="form-group">
                                                         <label for="new-port-2"><?php echo $_LANG['newpatchport2'];?></label>
                                                         <input type="text" class="form-control text-field" id="new-port-2" 
                                                                name="new-port-2" placeholder="<?php echo $_LANG['modalplaceholderport'];?>"/>
                                                     </div>
                                                    
                                                     
                                                     
                                                     <!-- ****************************************************************************************************-->
                                                     
                                                     <div class="form-group">
                                                         <label for="new-vlan"><?php echo $_LANG['newpatchvlan'];?></label>
                                                         <input type="text" class="form-control text-field" id="new-vlan" 
                                                                onkeyup="showHint(this.value, 'commonpart', 'VLAN', 'new-vlan-hint')" 
                                                                name="new-vlan" placeholder="<?php echo $_LANG['modalplaceholdervlan'];?>" list="new-vlan-hint"/>
                                                         <datalist id="new-vlan-hint"></datalist>
                                                     </div>
                                                     <div class="form-group">
                                                         <label for="new-patchcord"><?php echo $_LANG['newpatchcord'];?></label>
                                                         <input type="text" class="form-control text-field" id="new-patchcord" 
                                                                name="new-patchcord" placeholder="<?php echo $_LANG['modalplaceholderpatchcord'];?>"/>
                                                     </div>
                                                     <div class="form-group">
                                                         <label for="new-client-socket-no"><?php echo $_LANG['newclientsocketno'];?></label>
                                                         <input type="text" class="form-control text-field" id="new-client-socket-no" 
                                                                name="new-client-socket-no" placeholder="<?php echo $_LANG['modalplaceholderclientsocketno'];?>"/>
                                                     </div>
                                                     <div class="form-group">
                                                         <label for="new-client-room-no"><?php echo $_LANG['newpatchclientroomno'];?></label>
                                                         <input type="text" class="form-control text-field" id="new-client-room-no" 
                                                                name="new-client-room-no" placeholder="<?php echo $_LANG['modalplaceholderclientroomno'];?>"/>
                                                     </div>
                                                     <div class="form-group">
                                                         <label for="new-acl"><?php echo $_LANG['newpatchacl'];?></label>
                                                         <input type="text" class="form-control text-field" id="new-acl" 
                                                                name="new-acl" placeholder="<?php echo $_LANG['modalplaceholderacl'];?>"/>
                                                     </div>
                                                     <div class="form-group">
                                                         <label for="new-description"><?php echo $_LANG['newpatchdescription'];?></label>
                                                         <input type="text" class="form-control text-field" id="new-description" 
                                                                name="new-description" placeholder="<?php echo $_LANG['modalplaceholderdescription'];?>"/>
                                                     </div>
                                                     <div class="form-group">
                                                         <label for="new-action"><?php echo $_LANG['newpatchdoing'];?></label>
                                                         <input type="text" class="form-control text-field" id="new-action" 
                                                                name="new-action" placeholder="<?php echo $_LANG['modalplaceholderdoing'];?>"/>
                                                     </div>
                                                     
                                                     <!-- ****************************************************************************************************-->
                                                     
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
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                    </tr> 

