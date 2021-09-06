 <div class="nk-content nk-content-fluid">
                    <div class="container-xl wide-lg">
                        <div class="nk-content-body">
                             <div class="nk-block-head nk-block-head-sm">
                                <div class="nk-block-between">
                                    <div class="nk-block-head-content">
                                        <h3 class="nk-block-title page-title">Authorised Traders</h3>
                                        
                                    </div><!-- .nk-block-head-content -->

                                     <div class="nk-block-head-content">
                                        <div class="toggle-wrap nk-block-tools-toggle">
                                            <a href="#" class="btn btn-icon btn-trigger toggle-expand mr-n1" data-target="pageMenu"><em class="icon ni ni-menu-alt-r"></em></a>
                                            <div class="toggle-expand-content" data-content="pageMenu">
                                                 <ul class="nk-block-tools gx-3" style="align-items: center;" >
                                            
                                           
                                            <li class="btn-wrap"><a href="<?php echo URLROOT; ?>/accounts/authorized_traders_export"  class="btn btn-primary"><em class="icon ni ni-file-download"></em></em></a><span class="btn-extext">Export All Traders Record</span></li>

                                            

                                           
                                        </ul>
                                            </div>
                                        </div><!-- .toggle-wrap -->
                                    </div><!-- .nk-block-head-content -->
                                   
                                </div><!-- .nk-block-between -->

                            </div><!-- .nk-block-head -->

                            <div class="nk-block">
                                <div class="card card-bordered card-stretch">
                                    <div class="card-inner-group">
                                        <?php flash('alert_message'); ?>
                                         <div class="card-inner p-0">
                                          <div class="card-inner">
                                 <table class="datatable-init nk-tb-list nk-tb-ulist" data-auto-responsive="true">

                                                <thead>
                                                    <tr class="nk-tb-item nk-tb-head">
                                                        <th class="nk-tb-col nk-tb-col-check">
                                                            <div class="custom-control custom-control-sm custom-checkbox notext">
                                                                <input type="checkbox" class="custom-control-input" id="uid">
                                                                <label class="custom-control-label" for="uid"></label>
                                                            </div>
                                                        </th>
                                                        <th class="nk-tb-col"><span class="sub-text">Trader</span></th>
                                                        <th class="nk-tb-col tb-col-mb"><span class="sub-text">Email</span></th>
                                                        <th class="nk-tb-col tb-col-md"><span class="sub-text">Phone</span></th>
                                                        <th class="nk-tb-col tb-col-lg"><span class="sub-text">Company Name</span></th>
                                                        <th class="nk-tb-col tb-col-lg"><span class="sub-text">Company Code</span></th>
                                                        <th class="nk-tb-col tb-col-md"><span class="sub-text">Status</span></th>
                                                        <th class="nk-tb-col nk-tb-col-tools text-right">
                                                        </th>
                                                    </tr>
                                                </thead> 
                                                <tbody>
                                                    <?php $count = 0;  foreach($data['AllManTraders'] as $AllManTrader) : $count++; ?>
                                                    <tr class="nk-tb-item">
                                                        <td class="nk-tb-col nk-tb-col-check">
                                                           <span><?php echo $count; ?></span>
                                                        </td>
                                                        <td class="nk-tb-col">
                                                            <div class="user-card">
                                                              
                                                                <div class="user-info">
                                                                    <span class="tb-lead"><?php echo $AllManTrader->fullname; ?><span class="dot dot-success d-md-none ml-1"></span></span>
                                                                    <p><?php echo $AllManTrader->trader_code; ?></p>
                                                                </div>
                                                            </div>
                                                        </td>
                                                        <td class="nk-tb-col tb-col-mb" data-order="35040.34">
                                                            <span class="tb-amount"><?php echo $AllManTrader->email; ?></span>
                                                        </td>
                                                        <td class="nk-tb-col tb-col-md">
                                                            <span class="tb-amount"><?php echo $AllManTrader->phone; ?></span>
                                                        </td>
                                                       
                                                        <td class="nk-tb-col tb-col-lg">
                                                            <span class="tb-amount"><?php echo $AllManTrader->company_name; ?></span>
                                                        </td>
                                                         <td class="nk-tb-col tb-col-lg">
                                                            <span class="tb-amount"><?php echo $AllManTrader->mandate_code; ?></span>
                                                        </td>
                                                        <td class="nk-tb-col tb-col-md">
                                                            <?php if ($AllManTrader->status == 1) {
                                                               echo ' <span class="tb-status text-success">Active</span>';
                                                            } 

                                                            if ($AllManTrader->status == 2) {
                                                               echo ' <span class="tb-status text-warning">Suspended</span>';
                                                            }


                                                            if ($AllManTrader->status == 3) {
                                                               echo '<span class="tb-status text-danger">Resigned</span>';
                                                            }  




                                                            ?>
                                                           
                                                        </td>
                                                        <td class="nk-tb-col nk-tb-col-tools">
                                                            <ul class="nk-tb-actions gx-1">
                                                              
                                                               
                                                                <li>
                                                                    <div class="drodown">
                                                                        <a href="#" class="dropdown-toggle btn btn-icon btn-trigger" data-toggle="dropdown"><em class="icon ni ni-more-h"></em></a>
                                                                        <div class="dropdown-menu dropdown-menu-right">
                                                                            <ul class="link-list-opt no-bdr">
                                                                               
                                                                                                   <li>
                                                                    <button class="btn" data-toggle="modal" data-target="#exampleModal<?php echo $AllManTrader->id; ?>">
                                                                        <i class="icon ni ni-edit"></i>
                                                                            &nbsp;Edit Trader
                                                                    </button>
                                                          
                                                                     </li>
                                                                                                  
                                                                            </ul>
                                                                        </div>
                                                                    </div>
                                                                </li>
                                                            </ul>
                                                        </td>
                                                    </tr><!-- .nk-tb-item  -->


                                                    


                                                  
                                                    <?php endforeach; ?>
                                                </tbody>
                                            </table>
                                        </div>
                                        </div><!-- .card-inner -->
                                       
                                    </div><!-- .card-inner-group -->
                                </div><!-- .card -->
                            </div><!-- .nk-block -->
                        </div>
                    </div>
                </div>



<div class="modal fade" tabindex="-1" role="dialog" id="exampleModal<?php echo $AllManTrader->id; ?>">
        <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
            <div class="modal-content">
                <a href="#" class="close" data-dismiss="modal"><em class="icon ni ni-cross-sm"></em></a>
                <div class="modal-body modal-body-lg">
                    <h5 class="title">Edit Trader</h5>
                    <div class="tab-content">
                        <form method="post" action="<?php echo URLROOT; ?>/accounts/edit_trader/<?php echo $mandate_trader->id; ?>" >
                        <div class="tab-pane active" id="personal">
                            <div class="row gy-4">
                                <div class="col-md-12">
                                   <div class="form-group">
                                        <label class="form-label" for="full-name">Full Name</label>
                                        <input value="<?php echo $mandate_trader->fullname; ?>" name="fullname" type="text" class="form-control form-control-lg" id="full-name" >
                                    </div>
                                </div>

                                <div class="col-md-6">
                                   <div class="form-group">
                                        <label class="form-label" for="full-name">Email</label>
                                        <input value="<?php echo $mandate_trader->email; ?>" name="email" type="text" class="form-control form-control-lg" id="full-name" >
                                    </div>
                                </div>


                                <div class="col-md-6">
                                   <div class="form-group">
                                        <label class="form-label" for="full-name">Phone</label>
                                        <input value="<?php echo $mandate_trader->phone; ?>" name="phone" type="number" class="form-control form-control-lg" id="full-name" >
                                    </div>
                                </div>

                                 <div class="col-md-6">
                                   <div class="form-group">
                                        <label class="form-label" for="full-name">Trader Code</label>
                                        <input value="<?php echo $mandate_trader->trader_code; ?>" name="trader_code" type="text" class="form-control form-control-lg" id="full-name" >
                                    </div>
                                </div>


                              <div class="col-md-6">
                                   <div class="form-group">
                                        <label class="form-label" for="full-name">Chnage Status</label>
                                        <select name="status" data-msg="Required" class="form-control required" required>

                                        <option value="1">Active</option>  
                                        <option value="2">Suspended</option>  
                                        <option value="3">Resigned</option>                          
                                         </select>
                                    </div>
                                </div>

                                 <div class="col-md-6">
                                   <div class="form-group">
                                        <label class="form-label" for="full-name">Designation</label>
                                        <input name="designation" value="<?php echo $mandate_trader->designation; ?>" type="text" class="form-control form-control-lg" id="full-name" >
                                    </div>
                                </div>

                                <div class="col-md-6">
                                   <div class="form-group">
                                        <label class="form-label" for="full-name">Date Of Birth</label>
                                        <input name="d_o_b" type="text" value="<?php echo $mandate_trader->d_o_b; ?>" class="form-control form-control-lg" id="full-name" >
                                    </div>
                                </div>


                                <div class="col-md-6">
                                   <div class="form-group">
                                        <label class="form-label" for="full-name">State Of Origin</label>
                                        <input name="state_of_origin" type="text" value="<?php echo $mandate_trader->state_of_origin; ?>" class="form-control form-control-lg" id="full-name" >
                                    </div>
                                </div>

                                <div class="col-md-6">
                                   <div class="form-group">
                                        <label class="form-label" for="full-name">Nationality</label>
                                        <input name="nationality" value="<?php echo $mandate_trader->nationality; ?>" type="text" class="form-control form-control-lg" id="full-name" >
                                    </div>
                                </div>


                                <div class="col-md-12">
                                   <div class="form-group">
                                        <label class="form-label" for="full-name">Residential Address</label>
                                        <textarea name="residential_address" class="form-control"><?php echo $mandate_trader->residential_address; ?></textarea>
                                      
                                    </div>
                                </div>

                              
                                <input type="hidden" value="<?php echo $mandate_trader->id; ?>" name="id" >
                                <input type="hidden" value="<?php echo $mandate_trader->mandate_code; ?>" name="mandate_code" >
                               

                               
 


                                <div class="col-12">
                                    <ul class="align-center flex-wrap flex-sm-nowrap gx-4 gy-2">
                                        <li>
                                            <button type="submit" class="btn btn-lg btn-primary">Submit</button>
                                            
                                        </li>
                                        <li>
                                            <a href="#" data-dismiss="modal" class="link link-light">Cancel</a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        </form>
                        
                        
                    </div>
                </div>
            </div>
        </div>
    </div>

<!-- 
     <div class="modal fade" tabindex="-1" role="dialog" id="exampleModal<?php echo $AllManTrader->id; ?>">
        <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
            <div class="modal-content">
                <a href="#" class="close" data-dismiss="modal"><em class="icon ni ni-cross-sm"></em></a>
                <div class="modal-body modal-body-lg">
                    <h5 class="title">Edit Trader</h5>
                    <div class="tab-content">
                        <form method="post" action="<?php echo URLROOT; ?>/accounts/edit_trader/<?php echo $mandate_trader->id; ?>" >
                        <div class="tab-pane active" id="personal">
                            <div class="row gy-4">
                                <div class="col-md-12">
                                   <div class="form-group">
                                        <label class="form-label" for="full-name">Full Name</label>
                                        <input value="<?php echo $mandate_trader->fullname; ?>" name="fullname" type="text" class="form-control form-control-lg" id="full-name" >
                                    </div>
                                </div>

                                <div class="col-md-6">
                                   <div class="form-group">
                                        <label class="form-label" for="full-name">Email</label>
                                        <input value="<?php echo $mandate_trader->email; ?>" name="email" type="text" class="form-control form-control-lg" id="full-name" >
                                    </div>
                                </div>


                                <div class="col-md-6">
                                   <div class="form-group">
                                        <label class="form-label" for="full-name">Phone</label>
                                        <input value="<?php echo $mandate_trader->phone; ?>" name="phone" type="number" class="form-control form-control-lg" id="full-name" >
                                    </div>
                                </div>

                                 <div class="col-md-6">
                                   <div class="form-group">
                                        <label class="form-label" for="full-name">Trader Code</label>
                                        <input value="<?php echo $mandate_trader->trader_code; ?>" name="trader_code" type="text" class="form-control form-control-lg" id="full-name" >
                                    </div>
                                </div>


                              <div class="col-md-6">
                                   <div class="form-group">
                                        <label class="form-label" for="full-name">Chnage Status</label>
                                        <select name="status" data-msg="Required" class="form-control required" required>

                                        <option value="1">Active</option>  
                                        <option value="2">Suspended</option>  
                                        <option value="3">Resigned</option>                          
                                         </select>
                                    </div>
                                </div>

                                 <div class="col-md-6">
                                   <div class="form-group">
                                        <label class="form-label" for="full-name">Designation</label>
                                        <input name="designation" value="<?php echo $mandate_trader->designation; ?>" type="text" class="form-control form-control-lg" id="full-name" >
                                    </div>
                                </div>

                                <div class="col-md-6">
                                   <div class="form-group">
                                        <label class="form-label" for="full-name">Date Of Birth</label>
                                        <input name="d_o_b" type="text" value="<?php echo $mandate_trader->d_o_b; ?>" class="form-control form-control-lg" id="full-name" >
                                    </div>
                                </div>


                                <div class="col-md-6">
                                   <div class="form-group">
                                        <label class="form-label" for="full-name">State Of Origin</label>
                                        <input name="state_of_origin" type="text" value="<?php echo $mandate_trader->state_of_origin; ?>" class="form-control form-control-lg" id="full-name" >
                                    </div>
                                </div>

                                <div class="col-md-6">
                                   <div class="form-group">
                                        <label class="form-label" for="full-name">Nationality</label>
                                        <input name="nationality" value="<?php echo $mandate_trader->nationality; ?>" type="text" class="form-control form-control-lg" id="full-name" >
                                    </div>
                                </div>


                                <div class="col-md-12">
                                   <div class="form-group">
                                        <label class="form-label" for="full-name">Residential Address</label>
                                        <textarea name="residential_address" class="form-control"><?php echo $mandate_trader->residential_address; ?></textarea>
                                      
                                    </div>
                                </div>

                              
                                <input type="hidden" value="<?php echo $mandate_trader->id; ?>" name="id" >
                                <input type="hidden" value="<?php echo $mandate_trader->mandate_code; ?>" name="mandate_code" >
                               

                               
 


                                <div class="col-12">
                                    <ul class="align-center flex-wrap flex-sm-nowrap gx-4 gy-2">
                                        <li>
                                            <button type="submit" class="btn btn-lg btn-primary">Submit</button>
                                            
                                        </li>
                                        <li>
                                            <a href="#" data-dismiss="modal" class="link link-light">Cancel</a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        </form>
                        
                        
                    </div>
                </div>
            </div>
        </div>
    </div>
 -->