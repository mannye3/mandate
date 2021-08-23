 <div class="nk-content nk-content-fluid">
                    <div class="container-xl wide-lg">
                        <div class="nk-content-body">
                             <div class="nk-block-head nk-block-head-sm">
                                <div class="nk-block-between">
                                    <div class="nk-block-head-content">
                                        <h3 class="nk-block-title page-title">N-ETS Training List</h3>
                                        
                                    </div><!-- .nk-block-head-content -->
                                    <div class="nk-block-head-content">
                                        <div class="toggle-wrap nk-block-tools-toggle">
                                            <a href="#" class="btn btn-icon btn-trigger toggle-expand mr-n1" data-target="pageMenu"><em class="icon ni ni-menu-alt-r"></em></a>
                                            <div class="toggle-expand-content" data-content="pageMenu">
                                                <ul class="nk-block-tools g-3">
                                                   
                                                    <li class="nk-block-tools-opt">
                                                        <div class="drodown">
                                                            <a href="#add-plan" data-toggle="modal" class="btn btn-primary" data-toggle="dropdown"><em class="icon ni ni-plus"></em></a>
                                                            
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
                                          <div class="card-inner table-responsive">
                                               <table id="datatable-buttons" class="table table-striped table-bordered"  width="100%">
                                                <thead>
                                                    <tr class="nk-tb-item nk-tb-head">
                                                        <th class="nk-tb-col nk-tb-col-check">
                                                            <div class="custom-control custom-control-sm custom-checkbox notext">
                                                                <input type="checkbox" class="custom-control-input" id="uid">
                                                                <label class="custom-control-label" for="uid"></label>
                                                            </div>
                                                        </th>
                                                        <th class="nk-tb-col"><span class="sub-text">Broker</span></th>
                                                        <th class="nk-tb-col tb-col-mb"><span class="sub-text">Comapany</span></th>
                                                        <th class="nk-tb-col tb-col-md"><span class="sub-text">Mandate Code</span></th>
                                                        <th class="nk-tb-col tb-col-lg"><span class="sub-text">Amount</span></th>
                                                        <th class="nk-tb-col tb-col-lg"><span class="sub-text">Training Date</span></th>
                                                        <th class="nk-tb-col tb-col-lg"><span class="sub-text">Created At</span></th>
                                                      
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <?php $count = 0;  foreach($data['AllTraining'] as $AllTraining) : $count++; ?>
                                                    <tr class="nk-tb-item">
                                                        <td class="nk-tb-col nk-tb-col-check">
                                                           <span><?php echo $count; ?></span>
                                                        </td>
                                                        <td class="nk-tb-col">
                                                            <div class="user-card">
                                                              
                                                                <div class="user-info">
                                                                    <span class="tb-lead"><?php echo $AllTraining->broker; ?><span class="dot dot-success d-md-none ml-1"></span></span>
                                                                   
                                                                </div>
                                                            </div>
                                                        </td>
                                                        <td class="nk-tb-col tb-col-mb" data-order="35040.34">
                                                            <span class="tb-amount"><?php echo $AllTraining->company_name; ?></span>
                                                        </td>
                                                        <td class="nk-tb-col tb-col-md">
                                                            <span class="tb-amount"><?php echo $AllTraining->mandate_code; ?></span>
                                                        </td>
                                                       
                                                        <td class="nk-tb-col tb-col-lg">
                                                            <span class="tb-amount"><?php echo $AllTraining->amount; ?></span>
                                                        </td>
                                                         <td class="nk-tb-col tb-col-lg">
                                                            <span class="tb-amount"><?php echo $AllTraining->training_date; ?></span>
                                                        </td>

                                                         <td class="nk-tb-col tb-col-lg">
                                                            <span class="tb-amount"><?php echo $AllTraining->created_at; ?></span>
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












 <div class="modal fade" tabindex="-1" role="dialog" id="add-plan">
        <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
            <div class="modal-content">
                <a href="#" class="close" data-dismiss="modal"><em class="icon ni ni-cross-sm"></em></a>
                <div class="modal-body modal-body-lg">
                    <h5 class="title">Add New</h5>
                     <div class="tab-content">
                        <div class="tab-pane active" id="personal">
                           <form method="post" action="<?php echo URLROOT; ?>/accounts/add_trainingFee">
                            <div class="row gy-4">
                                <div class="col-md-12">
                                   <div class="form-group">
                                        <label class="form-label" for="full-name">Broker Full Name</label>
                                        <input name="broker" type="text" class="form-control form-control-lg" id="full-name" >
                                    </div>
                                </div>

                              <div class="col-md-12">
                                   <div class="form-group">
                                        <label class="form-label" for="full-name">Company</label>
                                        <select name="mandate_code" data-msg="Required" class="form-control required" required>
                                                  <?php foreach($data['allmandates'] as $allmandate) : ?>
                                                <option value="<?php echo $allmandate->mandate_code; ?>"><?php echo $allmandate->company_name; ?></option>
                                                <?php endforeach; ?>
                                                                    </select>
                                        
                                    </div>
                                </div>


                                <div class="col-md-6">
                                   <div class="form-group">
                                        <label class="form-label" for="full-name">Traning Date</label>
                                        <input name="training_date" type="date" class="form-control form-control-lg" id="full-name" >
                                    </div>
                                </div>

                                 <div class="col-md-6">
                                   <div class="form-group">
                                        <label class="form-label" for="full-name">Amount</label>
                                        <input name="amount" type="text" readonly="" class="form-control form-control-lg" value="20000" >
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
                </div>
            </div>
        </div>
    </div>



