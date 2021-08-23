 <div class="nk-content nk-content-fluid">
                    <div class="container-xl wide-lg">
                        <div class="nk-content-body">
                             <div class="nk-block-head nk-block-head-sm">
                                <div class="nk-block-between">
                                    <div class="nk-block-head-content">
                                        <h3 class="nk-block-title page-title">Data Portal Request</h3>
                                        
                                    </div><!-- .nk-block-head-content -->
                                    <div class="nk-block-head-content">
                                        <div class="toggle-wrap nk-block-tools-toggle">
                                            <a href="#" class="btn btn-icon btn-trigger toggle-expand mr-n1" data-target="pageMenu"><em class="icon ni ni-menu-alt-r"></em></a>
                                            <div class="toggle-expand-content" data-content="pageMenu">
                                                <ul class="nk-block-tools g-3">
                                                   
                                                   <li class="nk-block-tools-opt">
                                                        <div class="drodown">
                                                            <a href="<?php echo URLROOT; ?>/accounts/add_data_request"class="btn btn-primary"><em class="icon ni ni-plus"></em></a>
                                                            
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
                                          <div class="table-responsive">
                               <table id="datatable-buttons" class="table table-striped table-bordered"  width="100%">

                                                <thead>
                                                    <tr class="nk-tb-item nk-tb-head">
                                                        <th class="nk-tb-col nk-tb-col-check">
                                                            <div class="custom-control custom-control-sm custom-checkbox notext">
                                                                <input type="checkbox" class="custom-control-input" id="uid">
                                                                <label class="custom-control-label" for="uid"></label>
                                                            </div>
                                                        </th>
                                                        <th class="nk-tb-col"><span class="sub-text">Data Type</span></th>
                                                        <th class="nk-tb-col tb-col-mb"><span class="sub-text">Amount</span></th>
                                                        <th class="nk-tb-col tb-col-md"><span class="sub-text">Contact Person Name</span></th>
                                                        <th class="nk-tb-col tb-col-lg"><span class="sub-text">Contact Person Email</span></th>
                                                        <th class="nk-tb-col tb-col-lg"><span class="sub-text">Date</span></th>
                                                        <th class="nk-tb-col tb-col-md"><span class="sub-text">Action</span></th>
                                                       <!--  <th class="nk-tb-col nk-tb-col-tools text-right">
                                                        </th> -->
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <?php $count = 0;  foreach($data['AllDataRequests'] as $AllDataRequest) : $count++; ?>
                                                    <tr class="nk-tb-item">
                                                        <td class="nk-tb-col nk-tb-col-check">
                                                           <span><?php echo $count; ?></span>
                                                        </td>
                                                        <td class="nk-tb-col">
                                                            <div class="user-card">
                                                              
                                                                <div class="user-info">
                                                                    <span class="tb-lead"><?php echo $AllDataRequest->data_type; ?><span class="dot dot-success d-md-none ml-1"></span></span>
                                                                   
                                                                </div>
                                                            </div>
                                                        </td>
                                                        <td class="nk-tb-col tb-col-mb" data-order="35040.34">
                                                            <span class="tb-amount"><?php echo $AllDataRequest->amount; ?></span>
                                                        </td>
                                                        <td class="nk-tb-col tb-col-md">
                                                            <span class="tb-amount"><?php echo $AllDataRequest->contact_person_name; ?></span>
                                                        </td>
                                                       
                                                        <td class="nk-tb-col tb-col-lg">
                                                            <span class="tb-amount"><?php echo $AllDataRequest->contact_person_email; ?></span>
                                                        </td>
                                                         <td class="nk-tb-col tb-col-lg">
                                                            <span class="tb-amount"><?php echo $AllDataRequest->issue_date; ?></span>
                                                        </td>
                                                        <td class="nk-tb-col tb-col-md">
                                                           <span class="badge badge-sm badge-primary" data-toggle="modal" data-target="#tranxDetails<?php echo $AllDataRequest->id; ?>">View Details</span>
                                                           
                                                        </td>
                                                    
                                                    </tr><!-- .nk-tb-item  -->

                                                    <!-- Modal Default -->
    <div class="modal fade" tabindex="-1" id="tranxDetails<?php echo $AllDataRequest->id; ?>">
        <div class="modal-dialog modal-lg" role="document">
            <div class="modal-content">
                <a href="#" class="close" data-dismiss="modal" aria-label="Close">
                    <em class="icon ni ni-cross"></em>
                </a>
                <div class="modal-body modal-body-md">
                    <div class="nk-modal-head mb-3 mb-sm-5">
                        <h4 class="nk-modal-title title">Transaction <small class="text-primary"><?php echo $AllDataRequest->tran_code; ?></small></h4>
                    </div>
                    <div class="nk-tnx-details">
                        <div class="nk-block-between flex-wrap g-3">
                            <div class="nk-tnx-type">
                                <div class="nk-tnx-type-icon bg-warning text-white">
                                    <em class="icon ni ni-arrow-up-right"></em>
                                </div>
                                <div class="nk-tnx-type-text">
                                    <h5 class="title"><?php echo $AllDataRequest->data_type; ?></h5>
                                    <span class="sub-text mt-n1"><?php echo $AllDataRequest->issue_date; ?></span>
                                </div>
                            </div>
                           
                        </div>
                        <div class="nk-modal-head mt-sm-5 mt-4 mb-4">
                            <h5 class="title">Transaction Info</h5>
                        </div>
                        <div class="row gy-3">
                            <div class="col-lg-6">
                                <span class="sub-text">Data Type</span>
                                <span class="caption-text"><?php echo $AllDataRequest->data_type; ?></span>
                            </div>
                            <div class="col-lg-6">
                                <span class="sub-text">Transaction Code</span>
                                <span class="caption-text text-break"><?php echo $AllDataRequest->tran_code; ?></span>
                            </div>
                            <div class="col-lg-6">
                                <span class="sub-text">Amount</span>
                                <span class="caption-text">₦<?php echo number_format($AllDataRequest->amount)?>
                                   </span>
                            </div>
                            <div class="col-lg-6">
                                <span class="sub-text">Date</span>
                                <span class="caption-text"> <?php echo $AllDataRequest->issue_date; ?></span>
                            </div>
                        </div><!-- .row -->
                        <div class="nk-modal-head mt-sm-5 mt-4 mb-4">
                            <h5 class="title">Contact Person</h5>
                        </div>
                        <div class="row gy-3">
                            <div class="col-lg-6">
                                <span class="sub-text">Name</span>
                                <span class="caption-text"><?php echo $AllDataRequest->contact_person_name; ?></span>
                            </div>
                            <div class="col-lg-6">
                                <span class="sub-text">Email Address</span>
                                <span class="caption-text align-center"><?php echo $AllDataRequest->contact_person_email; ?></span>
                            </div>
                            <div class="col-lg-6">
                                <span class="sub-text">Phone Number</span>
                                <span class="caption-text text-break"><?php echo $AllDataRequest->contact_person_phone; ?></span>
                            </div>
                          
                        </div><!-- .row -->

                         <div class="nk-modal-head mt-sm-5 mt-4 mb-4">
                            <h5 class="title">Company Details</h5>
                        </div>
                        <div class="row gy-3">
                            <div class="col-lg-6">
                                <span class="sub-text">Company Name</span>
                                <span class="caption-text"><?php echo $AllDataRequest->company_name; ?></span>
                            </div>
                            <div class="col-lg-6">
                                <span class="sub-text">Company Email Address</span>
                                <span class="caption-text align-center"><?php echo $AllDataRequest->company_email; ?></span>
                            </div>
                            <div class="col-lg-6">
                                <span class="sub-text">Company Phone Number</span>
                                <span class="caption-text text-break"><?php echo $AllDataRequest->company_phone; ?></span>
                            </div>
                            <div class="col-lg-6">
                                <span class="sub-text">Company Address</span>
                                <span class="caption-text text-break"><?php echo $AllDataRequest->company_address; ?></span>
                            </div>
                           
                            
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



