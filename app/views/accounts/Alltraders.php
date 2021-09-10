 <div class="nk-content nk-content-fluid">
                    <div class="container-xl wide-lg">
                        <div class="nk-content-body">
                             <div class="nk-block-head nk-block-head-sm">
                                <div class="nk-block-between">
                                    <div class="nk-block-head-content">
                                        <h3 class="nk-block-title page-title">Traders</h3>
                                        
                                    </div><!-- .nk-block-head-content -->
                                    <div class="nk-block-head-content">
                                        <div class="toggle-wrap nk-block-tools-toggle">
                                            <a href="#" class="btn btn-icon btn-trigger toggle-expand mr-n1" data-target="pageMenu"><em class="icon ni ni-menu-alt-r"></em></a>
                                            <div class="toggle-expand-content" data-content="pageMenu">

                                                <ul class="nk-block-tools g-3">
                                                    <li><a href="<?php echo URLROOT; ?>/accounts/authorized_traders_export" class="btn btn-white btn-outline-light"><em class="icon ni ni-download-cloud"></em><span>Export</span></a></li>
                                                    <li class="nk-block-tools-opt">
                                                        <div class="drodown">
                                                            <a href="#" class="dropdown-toggle btn btn-icon btn-primary" data-toggle="dropdown"><em class="icon ni ni-plus"></em></a>
                                                            <div class="dropdown-menu dropdown-menu-right">
                                                                <ul class="link-list-opt no-bdr">
                                                                    <li><a href="#add-trader" data-toggle="modal" ><span>Add User</span></a></li>
                                                                    
                                                                </ul>
                                                            </div>
                                                        </div>
                                                    </li>
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
                                            <table class="datatable-init nk-tb-list nk-tb-ulist" data-auto-responsive="false">
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
                                                                  <a href="#" data-toggle="modal" data-target="#tranxDetails<?php echo $AllManTrader->trader_code; ?>">  <span class="tb-lead"><?php echo $AllManTrader->fullname; ?><span class="dot dot-success d-md-none ml-1"></span></span> </a>
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
                                                              
                                                                  <?php  if ($_SESSION['role'] !== 'User') :   ?>
                                                                <li>
                                                                    <div class="drodown">
                                                                        <a href="#" class="dropdown-toggle btn btn-icon btn-trigger" data-toggle="dropdown"><em class="icon ni ni-more-h"></em></a>
                                                                        <div class="dropdown-menu dropdown-menu-right">
                                                                            <ul class="link-list-opt no-bdr">
                                                                               
                                                                                <li>
                                                                    <button class="btn" data-toggle="modal" data-target="#exampleModal<?php echo $AllManTrader->trader_code; ?>">
                                                                        <i class="icon ni ni-edit"></i>
                                                                            &nbsp;Edit Trader
                                                                    </button>
                                                          
                                                                     </li>

                                                                         <!--        <li>
                                                                    <button class="btn" data-toggle="modal" data-target="#ChangeFirm<?php echo $AllManTrader->trader_code; ?>">
                                                                        <i class="icon ni ni-edit"></i>
                                                                            &nbsp;Change Firm
                                                                    </button>
                                                          
                                                                     </li>   -->
                                                                     <?php endif;  ?>                
                                                                            </ul>
                                                                        </div>
                                                                    </div>
                                                                </li>
                                                            
                                                            </ul>
                                                        </td>
                                                    </tr><!-- .nk-tb-item  -->

                                         <div class="modal fade" tabindex="-1" role="dialog" id="ChangeFirm<?php echo $AllManTrader->trader_code; ?>">
        <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
            <div class="modal-content">
                <a href="#" class="close" data-dismiss="modal"><em class="icon ni ni-cross-sm"></em></a>
                <div class="modal-body modal-body-lg">
                    <h5 class="title">Change Firm</h5>
                    <div class="tab-content">
                        <form method="post" action="<?php echo URLROOT; ?>/accounts/change_mandate_trader/<?php echo $AllManTrader->id; ?>" >
                        <div class="tab-pane active" id="personal">
                            <div class="row gy-4">
                                <div class="col-md-12">
                                   <div class="form-group">
                                        <label class="form-label" for="full-name">Select Firm</label>
                                        <select name="mandate_code" data-msg="Required" class="form-control required" required>
                                                  <?php foreach($data['allmandates'] as $allmandate) : ?>
                                                <option value="<?php echo $allmandate->mandate_code; ?>"><?php echo $allmandate->company_name; ?></option>
                                                <?php endforeach; ?>
                                                                    </select>
                                    </div>
                                </div>
                               
                                <input type="hidden" value="<?php echo $AllManTrader->id; ?>" name="id" >
                                <input type="hidden" value="<?php echo $AllManTrader->fullname; ?>" name="fullname" >
                                <input type="hidden" value="<?php echo $AllManTrader->mandate_code; ?>" name="mandate_code2" >
                               
                               

                               
 


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





     <div class="modal fade" tabindex="-1" role="dialog" id="exampleModal<?php echo $AllManTrader->trader_code; ?>">
        <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
            <div class="modal-content">
                <a href="#" class="close" data-dismiss="modal"><em class="icon ni ni-cross-sm"></em></a>
                <div class="modal-body modal-body-lg">
                    <h5 class="title">Edit Trader</h5>
                    <div class="tab-content">
                        <form method="post" action="<?php echo URLROOT; ?>/accounts/edit_trader/<?php echo $AllManTrader->id; ?>" >
                        <div class="tab-pane active" id="personal">
                            <div class="row gy-4">
                                <div class="col-md-12">
                                   <div class="form-group">
                                        <label class="form-label" for="full-name">Full Name</label>
                                        <input value="<?php echo $AllManTrader->fullname; ?>" name="fullname" type="text" class="form-control form-control-lg" id="full-name" >
                                    </div>
                                </div>

                                <div class="col-md-6">
                                   <div class="form-group">
                                        <label class="form-label" for="full-name">Email</label>
                                        <input value="<?php echo $AllManTrader->email; ?>" name="email" type="text" class="form-control form-control-lg" id="full-name" >
                                    </div>
                                </div>


                                <div class="col-md-6">
                                   <div class="form-group">
                                        <label class="form-label" for="full-name">Phone</label>
                                        <input value="<?php echo $AllManTrader->phone; ?>" name="phone" type="number" class="form-control form-control-lg" id="full-name" >
                                    </div>
                                </div>

                                 <div class="col-md-6">
                                   <div class="form-group">
                                        <label class="form-label" for="full-name">Trader Code</label>
                                        <input value="<?php echo $AllManTrader->trader_code; ?>" name="trader_code" type="text" class="form-control form-control-lg" id="full-name" >
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
                                        <input name="designation" value="<?php echo $AllManTrader->designation; ?>" type="text" class="form-control form-control-lg" id="full-name" >
                                    </div>
                                </div>

                                <div class="col-md-6">
                                   <div class="form-group">
                                        <label class="form-label" for="full-name">Date Of Birth</label>
                                        <input name="d_o_b" type="text" value="<?php echo $AllManTrader->d_o_b; ?>" class="form-control form-control-lg" id="full-name" >
                                    </div>
                                </div>


                                <div class="col-md-6">
                                   <div class="form-group">
                                        <label class="form-label" for="full-name">State Of Origin</label>
                                        <input name="state_of_origin" type="text" value="<?php echo $AllManTrader->state_of_origin; ?>" class="form-control form-control-lg" id="full-name" >
                                    </div>
                                </div>

                                <div class="col-md-6">
                                   <div class="form-group">
                                        <label class="form-label" for="full-name">Nationality</label>
                                        <input name="nationality" value="<?php echo $AllManTrader->nationality; ?>" type="text" class="form-control form-control-lg" id="full-name" >
                                    </div>
                                </div>


                                <div class="col-md-12">
                                   <div class="form-group">
                                        <label class="form-label" for="full-name">Residential Address</label>
                                        <textarea name="residential_address" class="form-control"><?php echo $AllManTrader->residential_address; ?></textarea>
                                      
                                    </div>
                                </div>

                              
                                <input type="hidden" value="<?php echo $AllManTrader->id; ?>" name="id" >
                                <input type="hidden" value="<?php echo $AllManTrader->mandate_code; ?>" name="mandate_code" >
                               

                               
 


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



      <div class="modal fade" tabindex="-1" id="tranxDetails<?php echo $AllManTrader->trader_code; ?>">
        <div class="modal-dialog modal-lg" role="document">
            <div class="modal-content">
                <a href="#" class="close" data-dismiss="modal" aria-label="Close">
                    <em class="icon ni ni-cross"></em>
                </a>
                <div class="modal-body modal-body-md">
                    <div class="nk-modal-head mb-3 mb-sm-5">
                        <h4 class="nk-modal-title title"><?php echo $AllManTrader->fullname; ?><h4>
                    </div>
                    <div class="nk-tnx-details">
                        
                        <div class="nk-modal-head mt-sm-5 mt-4 mb-4">
                          
                        </div>
                        <div class="row gy-3">
                            <div class="col-lg-6">
                                <span class="sub-text">EMAIL</span>
                                <span class="caption-text"><?php echo $AllManTrader->email; ?></span>
                            </div>
                            <div class="col-lg-6">
                                <span class="sub-text">PHONE</span>
                                <span class="caption-text text-break"><?php echo $AllManTrader->phone; ?></span>
                            </div>
                            <div class="col-lg-6">
                                <span class="sub-text">TRADER CODE</span>
                                <span class="caption-text"><?php echo $AllManTrader->trader_code; ?>
                                   </span>
                            </div>
                            <div class="col-lg-6">
                                <span class="sub-text">COMPANY</span>
                                <span class="caption-text"> <?php echo $AllManTrader->company_name; ?></span>
                            </div>

                             <div class="col-lg-6">
                                <span class="sub-text">DESIGNATION</span>
                                <span class="caption-text"> <?php echo $AllManTrader->designation; ?></span>
                            </div>

                             <div class="col-lg-6">
                                <span class="sub-text">DATE OF BIRTH</span>
                                <span class="caption-text"> <?php echo $AllManTrader->d_o_b; ?></span>
                            </div>

                             <div class="col-lg-6">
                                <span class="sub-text">STATE OF ORIGIN</span>
                                <span class="caption-text"> <?php echo $AllManTrader->state_of_origin; ?></span>
                            </div>
                             <div class="col-lg-6">
                                <span class="sub-text">NATIONALITY</span>
                                <span class="caption-text"> <?php echo $AllManTrader->nationality; ?></span>
                            </div>
                             <div class="col-lg-12">
                                <span class="sub-text">RESIDENCE ADDRESS</span>
                                <span class="caption-text"> <?php echo $AllManTrader->residential_address; ?></span>
                            </div>

                        </div><!-- .row -->
                        
                        
                           
                            
                        </div><!-- .row -->
                    </div><!-- .nk-tnx-details -->
                </div><!-- .modal-body -->
            </div><!-- .modal-content -->
        </div><!-- .modal-dialog -->
    </div><!-- .modal -->
    <!-- Modal Default -->

                                                  
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


