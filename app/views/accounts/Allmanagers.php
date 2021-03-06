 <div class="nk-content nk-content-fluid">
                    <div class="container-xl wide-lg">
                        <div class="nk-content-body">
                             <div class="nk-block-head nk-block-head-sm">
                                <div class="nk-block-between">
                                    <div class="nk-block-head-content">
                                        <h3 class="nk-block-title page-title">Managers</h3>
                                        
                                    </div><!-- .nk-block-head-content -->
                                    <div class="nk-block-head-content">
                                        <div class="toggle-wrap nk-block-tools-toggle">
                                            <a href="#" class="btn btn-icon btn-trigger toggle-expand mr-n1" data-target="pageMenu"><em class="icon ni ni-menu-alt-r"></em></a>
                                            <div class="toggle-expand-content" data-content="pageMenu">
                                                <ul class="nk-block-tools g-3">
                                                   
                                                  <li class="nk-block-tools-opt">
                                                        <div class="drodown">
                                                            <a href="#add-manager" data-toggle="modal" class="dropdown-toggle btn btn-icon btn-primary" data-toggle="dropdown"><em class="icon ni ni-plus"></em></a>
                                                            
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
                                             <div class="table-responsive">
                             <table class="datatable-init nk-tb-list nk-tb-ulist" data-auto-responsive="true">
                                                <thead>
                                                    <tr class="nk-tb-item nk-tb-head">
                                                        <th class="nk-tb-col nk-tb-col-check">
                                                            <div class="custom-control custom-control-sm custom-checkbox notext">
                                                                <input type="checkbox" class="custom-control-input" id="uid">
                                                                <label class="custom-control-label" for="uid"></label>
                                                            </div>
                                                        </th>
                                                        <th class="nk-tb-col"><span class="sub-text">Manger</span></th>
                                                        <th class="nk-tb-col tb-col-mb"><span class="sub-text">Email</span></th>
                                                        <th class="nk-tb-col tb-col-md"><span class="sub-text">Phone</span></th>
                                                        <th class="nk-tb-col tb-col-md"><span class="sub-text">Role</span></th>
                                                     
                                                        <th class="nk-tb-col tb-col-lg"><span class="sub-text">Company Name</span></th>
                                                          <th class="nk-tb-col tb-col-lg"><span class="sub-text">Company Code</span></th>
                                                        <th class="nk-tb-col tb-col-md"><span class="sub-text">Status</span></th>
                                                        <!-- <th class="nk-tb-col nk-tb-col-tools text-right">
                                                        </th> -->
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <?php $count = 0;  foreach($data['AllManManagers'] as $AllManManager) : $count++; ?>
                                                    <tr class="nk-tb-item">
                                                        <td class="nk-tb-col nk-tb-col-check">
                                                           <span><?php echo $count; ?></span>
                                                        </td>
                                                        <td class="nk-tb-col">
                                                            <div class="user-card">
                                                              
                                                                <div class="user-info">
                                                                    <span class="tb-lead"><?php echo $AllManManager->manager_name; ?><span class="dot dot-success d-md-none ml-1"></span></span>
                                                                  
                                                                </div>
                                                            </div>
                                                        </td>
                                                        <td class="nk-tb-col tb-col-mb" data-order="35040.34">
                                                            <span class="tb-amount"><?php echo $AllManManager->manager_email; ?></span>
                                                        </td>
                                                        <td class="nk-tb-col tb-col-md">
                                                            <span class="tb-amount"><?php echo $AllManManager->manager_phone; ?></span>
                                                        </td>

                                                         <td class="nk-tb-col tb-col-md">
                                                            <span class="tb-amount"><?php echo $AllManManager->manager_role; ?></span>
                                                        </td>
                                                        
                                                        <td class="nk-tb-col tb-col-lg">
                                                            <span class="tb-amount"><?php echo $AllManManager->company_name; ?></span>
                                                        </td>

                                                        <td class="nk-tb-col tb-col-lg">
                                                            <span class="tb-amount"><?php echo $AllManManager->mandate_code; ?></span>
                                                        </td>
                                                        <td class="nk-tb-col tb-col-md">
                                                            <?php if ($AllManManager->status == 1) {
                                                               echo ' <span class="tb-status text-success">Active</span>';
                                                            } 

                                                            if ($AllManManager->status == 2) {
                                                               echo ' <span class="tb-status text-warning">Suspended</span>';
                                                            }


                                                            if ($AllManManager->status == 3) {
                                                               echo '<span class="tb-status text-danger">Resigned</span>';
                                                            }  




                                                            ?>
                                                           
                                                        </td>
                                                      <!--   <td class="nk-tb-col nk-tb-col-tools">
                                                            <ul class="nk-tb-actions gx-1">
                                                              
                                                               
                                                                <li>
                                                                    <div class="drodown">
                                                                        <a href="#" class="dropdown-toggle btn btn-icon btn-trigger" data-toggle="dropdown"><em class="icon ni ni-more-h"></em></a>
                                                                        <div class="dropdown-menu dropdown-menu-right">
                                                                            <ul class="link-list-opt no-bdr">
                                                                               
                                                                                <li>
                                                                    <button class="btn" data-toggle="modal" data-target="#exampleModal<?php echo $AllManManager->id; ?>">
                                                                        <i class="icon ni ni-edit"></i>
                                                                            &nbsp;Edit Manager
                                                                    </button>
                                                          
                                                                     </li>                  
                                                                            </ul>
                                                                        </div>
                                                                    </div>
                                                                </li>
                                                            </ul>
                                                        </td> -->
                                                    </tr><!-- .nk-tb-item  -->

                                                  
                                                    <?php endforeach; ?>
                                                </tbody>
                                            </table>
                                        </div>
                                        </div>
                                        </div><!-- .card-inner -->
                                       
                                    </div><!-- .card-inner-group -->
                                </div><!-- .card -->
                            </div><!-- .nk-block -->
                        </div>
                    </div>
                </div>













     <div class="modal fade" tabindex="-1" role="dialog" id="add-manager">
        <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
            <div class="modal-content">
                <a href="#" class="close" data-dismiss="modal"><em class="icon ni ni-cross-sm"></em></a>
                <div class="modal-body modal-body-lg">
                    <h5 class="title">Add Manager</h5>
                    
                    <div class="tab-content">
                        <div class="tab-pane active" id="personal">
                           <form method="post" action="<?php echo URLROOT; ?>/accounts/add_manager">
                            <div class="row gy-4">
                                <div class="col-md-12">
                                   <div class="form-group">
                                        <label class="form-label" for="full-name">Full Name</label>
                                        <input name="manager_name" type="text" class="form-control form-control-lg" id="full-name" >
                                    </div>
                                </div>

                                <div class="col-md-6">
                                   <div class="form-group">
                                        <label class="form-label" for="full-name">Email</label>
                                        <input name="manager_email" type="text" class="form-control form-control-lg" id="full-name" >
                                    </div>
                                </div>


                                <div class="col-md-6">
                                   <div class="form-group">
                                        <label class="form-label" for="full-name">Phone</label>
                                        <input name="manager_phone" type="number" class="form-control form-control-lg" id="full-name" >
                                    </div>
                                </div>


                                 <div class="col-md-6">
                                   <div class="form-group">
                                        <label class="form-label" for="full-name">Role</label>
                                        <select name="manager_role" data-msg="Required" class="form-control required" required>
                                                  <?php foreach($data['load_roles'] as $load_role) : ?>
                                                <option value="<?php echo $load_role->position_title; ?>"><?php echo $load_role->position_title; ?></option>
                                                <?php endforeach; ?>
                                                                    </select>
                                        
                                    </div>
                                </div>



                                 <div class="col-md-6">
                                   <div class="form-group">
                                        <label class="form-label" for="full-name">Company</label>
                                        <select name="mandate_code" data-msg="Required" class="form-control required" required>
                                                  <?php foreach($data['allmandates'] as $allmandate) : ?>
                                                <option value="<?php echo $allmandate->mandate_code; ?>"><?php echo $allmandate->company_name; ?></option>
                                                <?php endforeach; ?>
                                                                    </select>
                                        
                                    </div>
                                </div>

                                 

                                
                                   

                                
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
                            </form>
                        </div><!-- .tab-pane -->
                        
                    </div><!-- .tab-content -->
                </div><!-- .modal-body -->
            </div><!-- .modal-content -->
        </div><!-- .modal-dialog -->
    </div>

