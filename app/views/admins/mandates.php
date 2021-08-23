 <div class="nk-content nk-content-fluid">
                    <div class="container-xl wide-lg">
                        <div class="nk-content-body">
                             <div class="nk-block-head nk-block-head-sm">
                                <div class="nk-block-between">
                                    <div class="nk-block-head-content">
                                        <h3 class="nk-block-title page-title">Mandates</h3>
                                        
                                    </div><!-- .nk-block-head-content -->
                                    <div class="nk-block-head-content">
                                        <div class="toggle-wrap nk-block-tools-toggle">
                                            <a href="#" class="btn btn-icon btn-trigger toggle-expand mr-n1" data-target="pageMenu"><em class="icon ni ni-menu-alt-r"></em></a>
                                            <div class="toggle-expand-content" data-content="pageMenu">
                                                <ul class="nk-block-tools g-3">
                                                  
                                                    <li class="nk-block-tools-opt">
                                                       <a href="<?php echo URLROOT; ?>/admins/add_mandate"><div class="drodown">
                                                            <span  class="btn btn-icon btn-primary"><em class="icon ni ni-plus"></em></span>
                                                            
                                                        </div></a>
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
                                                                
                                                                #
                                                            </div>
                                                        </th>
                                                        <th class="nk-tb-col"><span class="sub-text">User</span></th>
                                                        <th class="nk-tb-col tb-col-mb"><span class="sub-text">Email</span></th>
                                                        <th class="nk-tb-col tb-col-md"><span class="sub-text">Phone</span></th>
                                                         <th class="nk-tb-col tb-col-md"><span class="sub-text">Mandate Code</span></th>
                                                       
                                                       
                                                        <th class="nk-tb-col tb-col-md"><span class="sub-text">Firm Status</span></th>
                                                        <th class="nk-tb-col nk-tb-col-tools text-right">
                                                        </th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                 <?php  $count = 0; foreach($data['allmandates'] as $allmandates) :  $count++; ?>
                                                    <tr class="nk-tb-item">
                                                        <td class="nk-tb-col nk-tb-col-check">
                                                            <div class="custom-control custom-control-sm custom-checkbox notext">
                                                                 <?php echo $count;  ?>
                                                            </div>
                                                        </td>
                                                        <td class="nk-tb-col">
                                                            <div class="user-card">
                                                                
                                                                <div class="user-info">
                                                                    <a href="<?php echo URLROOT; ?>/admins/mandate/<?php echo $allmandates->mandate_code;  ?>"><span class="tb-lead"> <?php echo $allmandates->company_name;  ?> <span class="dot dot-success d-md-none ml-1"></span></span>
                                                                    <span><?php echo $allmandates->category;  ?></span></a>
                                                                </div>
                                                            </div>
                                                        </td>
                                                        <td class="nk-tb-col tb-col-mb" data-order="35040.34">
                                                            <span class="tb-amount"><?php echo $allmandates->email;  ?></span></span>
                                                        </td>
                                                        <td class="nk-tb-col tb-col-md">
                                                            <span><?php echo $allmandates->phone;  ?></span>
                                                        </td>


                                                        <td class="nk-tb-col tb-col-md">
                                                            <span><?php echo $allmandates->mandate_code;  ?></span>
                                                        </td>
                                                       
                                                        <td class="nk-tb-col tb-col-md">
                                                            <?php if ($allmandates->mandate_status == 1) {
                                                               echo ' <span class="tb-status text-success">Active</span>';
                                                            } 

                                                            if ($allmandates->mandate_status == 2) {
                                                               echo ' <span class="tb-status text-warning">Suspended</span>';
                                                            }


                                                            if ($allmandates->mandate_status == 3) {
                                                               echo ' <span class="tb-status text-danger">Delisted</span>';
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
                                                                                <li><a href="<?php echo URLROOT; ?>/admins/mandate/<?php echo $allmandates->mandate_code;  ?>"><em class="icon ni ni-eye"></em><span>View Details</span></a></li>
                                                                                 <button class="btn" data-toggle="modal" data-target="#exampleModal<?php echo $allmandates->id; ?>">
                                                                        <i class="icon ni ni-na"></i>
                                                                            &nbsp;Change Status
                                                                    </button>
                                                                                
                                                                            </ul>
                                                                        </div>
                                                                    </div>
                                                                </li>
                                                            </ul>
                                                        </td>
                                                    </tr><!-- .nk-tb-item  -->
        <div class="modal fade" tabindex="-1" role="dialog" id="exampleModal<?php echo $allmandates->id; ?>">
        <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
            <div class="modal-content">
                <a href="#" class="close" data-dismiss="modal"><em class="icon ni ni-cross-sm"></em></a>
                <div class="modal-body modal-body-lg">
                    <h5 class="title">Change Firm Status</h5>
                    <div class="tab-content">
                <form method="post" action="<?php echo URLROOT; ?>/admins/change_mandate_status/<?php echo $allmandates->id; ?>" >
                        <div class="tab-pane active" id="personal">
                            <div class="row gy-4">
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label class="form-label" for="full-name">Select Status</label>
                                       <select name="mandate_status" data-msg="Required" class="form-control required" required>
                                        <option value="1">Active</option>  
                                        <option value="2">Suspended</option>  
                                        <option value="3">Delisted</option>                          
                                         </select>
                                    </div>
                                </div> 
                                <input type="hidden" value="<?php echo $mandate_trader->id; ?>" name="id" >
                               

                               



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


