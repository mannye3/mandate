 <div class="nk-content nk-content-fluid">
                    <div class="container-xl wide-lg">
                        <div class="nk-content-body">
                             <div class="nk-block-head nk-block-head-sm">
                                <div class="nk-block-between">
                                    <div class="nk-block-head-content">
                                        <h3 class="nk-block-title page-title">All Payments</h3>
                                        
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
                                                                #
                                                            </div>
                                                        </th>
                                                        <th class="nk-tb-col"><span class="sub-text">COMPANY</span></th>
                                                        <th class="nk-tb-col"><span class="sub-text">BILL FOR</span></th>
                                                        <th class="nk-tb-col tb-col-md"><span class="sub-text">AMOUNT</span></th>
                                                        <th class="nk-tb-col tb-col-mb"><span class="sub-text">ISSUE DATE</span></th>
                                                        <th class="nk-tb-col tb-col-md"><span class="sub-text">DUE DATE</span></th>

                                                       

                                                         <th class="nk-tb-col tb-col-md"><span class="sub-text">STATUS</span></th>
                                                        
                                                        
                                                      
                                                       
                                                      
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                     <?php $count = 0;  foreach($data['Allpay'] as $payment) : $count++; ?>

                                                    <tr class="nk-tb-item">
                                                        <td class="nk-tb-col nk-tb-col-check">
                                                            <div class="nk-tnx-type-icon">
                                                              <?php echo $count;  ?>
                                                            </div>
                                                        </td>
                                                        <td class="nk-tb-col">
                                                            <div class="user-card">
                                                                
                                                                <div class="nk-tnx-type-text">
                                                                <span class="tb-lead"><?php echo $payment->company_name; ?></span>
                                                               
                                                            </div>
                                                            </div>
                                                        </td>


                                                         <td class="nk-tb-col">
                                                            <div class="user-card">
                                                                
                                                                <div class="nk-tnx-type-text">
                                                                <span class="tb-lead"><?php echo $payment->fee_title; ?></span>
                                                               
                                                            </div>
                                                            </div>
                                                        </td>


                                                         <td class="nk-tb-col tb-col-mb" data-order="35040.34">
                                                            <span class="tb-amount">₦<?php echo number_format($payment->amount); ?></span>
                                                        </td>
                                                        <td class="nk-tb-col tb-col-mb" data-order="35040.34">
                                                            <span class="tb-amount"><?php echo $payment->issued_date; ?></span>
                                                        </td>
                                                        <td class="nk-tb-col tb-col-mb" data-order="35040.34">
                                                            <span class="tb-amount"><?php

                                                            if ($payment->due_date == "") {
                                                                         echo '0000'; 
                                                                  } else{
                                                                    echo ' '.$payment->due_date.' '; 
                                                                  }
                                                                  
                                                             
                                                              ?></span>
                                                        </td>


                                                      

                                                       
                                                        
                                                        
                                                        <td class="nk-tb-col tb-col-md">
                                                             <?php 
                                                                    $due = $payment->due_date;
                                                                      $today = date("Y"); 

                                                                      if ($payment->renewal_status == 1 AND $today >= $due ) {
                                                                         echo '<span class="badge badge-sm badge-warning"> Expired </span>'; 
                                                                      }

                                                                      elseif ($payment->renewal_status == 1 AND $today <= $due ) {
                                                                         echo '<span class="badge badge-sm badge-success"> Active </span>'; 
                                                                      }


                                                                      if ($payment->renewal_status == 2 AND $due =="" ) {
                                                                         echo '<span class="badge badge-sm badge-primary"> One Time Payment </span>'; 
                                                                      }

                                                                         ?>
                                                   
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

 <div class="modal fade" tabindex="-1" role="dialog" id="add-trader">
        <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
            <div class="modal-content">
                <a href="#" class="close" data-dismiss="modal"><em class="icon ni ni-cross-sm"></em></a>
                <div class="modal-body modal-body-lg">
                    <h5 class="title">Add Trader</h5>
                    
                    <div class="tab-content">
                        <div class="tab-pane active" id="personal">
                           <form method="post" action="<?php echo URLROOT; ?>/accounts/add_mandatetrader">
                            <div class="row gy-4">
                                <div class="col-md-12">
                                   <div class="form-group">
                                        <label class="form-label" for="full-name">Full Name</label>
                                        <input name="fullname" type="text" class="form-control form-control-lg" id="full-name" >
                                    </div>
                                </div>

                                <div class="col-md-6">
                                   <div class="form-group">
                                        <label class="form-label" for="full-name">Email</label>
                                        <input name="email" type="text" class="form-control form-control-lg" id="full-name" >
                                    </div>
                                </div>


                                <div class="col-md-6">
                                   <div class="form-group">
                                        <label class="form-label" for="full-name">Phone</label>
                                        <input name="phone" type="number" class="form-control form-control-lg" id="full-name" >
                                    </div>
                                </div>

                                 <div class="col-md-6">
                                   <div class="form-group">
                                        <label class="form-label" for="full-name">Trader Code</label>
                                        <input name="trader_code" type="text" class="form-control form-control-lg" id="full-name" >
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
