 <div class="nk-content nk-content-fluid">
                    <div class="container-xl wide-lg">
                        <div class="nk-content-body">
                            <div class="components-preview wide-md mx-auto">
                                <div class="nk-block-head nk-block-head-lg wide-sm">
                                 
                                    </div>
                                </div><!-- .nk-block-head -->
                                <div class="nk-block nk-block-lg">
                                     <div class="nk-block nk-block-lg">
                                    <div class="nk-block-head">
                                        <div class="nk-block-head-content">
                                            <h4 class="title nk-block-title"><?php echo $data['mandate_info']->company_name; ?></h4>
                                            <div class="nk-block-des">
                                           
                                            </div>
                                        </div>
                                    </div>
                                    <div class="card card-preview">
                                        <?php flash('alert_message'); ?>
                                        <div class="card-inner">
                                            <ul class="nav nav-tabs mt-n3">
                                                <li class="nav-item">
                                                    <a class="nav-link active" data-toggle="tab" href="#tabItem5"><em class="icon ni ni-users"></em><span>Organization </span></a>
                                                </li>

                                                <li class="nav-item">
                                                    <a class="nav-link" data-toggle="tab" href="#tabItem4"><em class="icon ni ni-user"></em><span>Manager Details </span></a>
                                                </li>

                                                <li class="nav-item">
                                                    <a class="nav-link" data-toggle="tab" href="#tabItem6"><em class="icon ni ni-lock-alt"></em><span>Account Details </span></a>
                                                </li>
                                                <li class="nav-item">
                                                    <a class="nav-link" data-toggle="tab" href="#tabItem7"><em class="icon ni ni-file-img"></em><span>Mandate Files </span></a>
                                                </li>

                                                 <?php if ($data['mandate_info']->category  !== "ISSUING HOUSE") : ?>
                                                 <li class="nav-item">
                                                    <a class="nav-link" data-toggle="tab" href="#tabItem8"><em class="icon ni ni-users"></em><span>Traders </span></a>
                                                </li>
                                            <?php endif; ?>
                                               
                                            </ul>
                                            <div class="tab-content">
                                                <div class="tab-pane active" id="tabItem5">
                                                    <div class="nk-block-head">
                                    <div class="nk-block-head-content">
                                        <h5 class="nk-block-title">Organization  Information</h5>
                                        <div class="nk-block-des" style="text-align: left;">
                                         <p>FIRM FEES FOR <?php  error_reporting(0); echo date("Y"); ?></p> 


                                             <?php if ($data['mandate_info']->category  == 'ISSUING HOUSE') : ?>

                                                        <table class="table">
                                                            <thead class="thead-light">
                                                          <tr>
                                                            <th>FEES</th>
                                                            <th>AMOUNT</th>
                                                            <th>STATUS</th>
                                                            <th>CURRENT PAYMENT</th>
                                                          </tr>
                                                          <tr>
                                                            <td>ISSUING HOUSE ANNUAL FEE</td>
                                                            <td>₦<?php echo number_format($data['T_Fee5']->amount) ?> </td>
                                                            <td><?php if ($data['cyf5']->fee_code == "") {
                                                               echo '<span class="tb-status text-warning">Not Paid</span></td>';
                                                            } 

                                                            if ($data['cyf5']->fee_code == !"") {
                                                               echo '<span class="tb-status text-success">Paid</span></td>';
                                                            }


                                                            ?>
                                                        </td>
                                                        <td></td>
                                                                
                                                          </tr>

                                                          <tr>
                                                            <td>PLATFORM MAINTENANCE</td>
                                                            <td>₦<?php echo number_format( $data['T_Fee2']->amount) ?>
                                                                </td>
                                                             <td><?php if ($data['cyf2']->fee_code == "") {
                                                               echo '<span class="tb-status text-warning">Not Paid</span></td>';
                                                            } 

                                                            if ($data['cyf2']->fee_code == !"") {
                                                               echo '<span class="tb-status text-success">Paid</span></td>';
                                                            }


                                                            ?>
                                                        </td>
                                                        <td></td>
                                                          </tr>



                                                       

                                                          <tr>
                                                              <td><b>TOTAL DUE</b></td>
                                                              <td><b style="color: red;">₦<?php  $totaldue = $data['T_Fee5']->amount + $data['T_Fee2']->amount;
                                                               echo   number_format($totaldue) ; ?></b></td>
                                                              <td></td>
                                                              <td><b style="color: green;">₦<?php $current_payment =  $data['toalf5']->TotalISH + $data['toalf2']->TotalMadatePM;
                                                                echo   number_format($current_payment) ;  ?></b></td>

                                                          </tr>

                                                          
                                                        </table>

                                                        <?php endif; ?>






                                                        <?php if ($data['mandate_info']->category  == 'BROKER') : ?>

                                                        <table class="table">
                                                            <thead class="thead-light">
                                                          <tr>
                                                            <th>FEES</th>
                                                            <th>AMOUNT</th>
                                                            <th>STATUS</th>
                                                            <th>CURRENT PAYMENT</th>
                                                          </tr>
                                                          <tr>
                                                            <td>BROKER ANNUAL FEE  </td>
                                                            <td>₦<?php echo number_format($data['T_Fee4']->amount) ?> </td>
                                                            <td><?php if ($data['cyf4']->fee_code == "") {
                                                               echo '<span class="tb-status text-warning">Not Paid</span></td>';
                                                            } 

                                                            if ($data['cyf4']->fee_code == !"") {
                                                               echo '<span class="tb-status text-success">Paid</span></td>';
                                                            }


                                                            ?>
                                                        </td>
                                                        <td></td>
                                                                
                                                          </tr>

                                                          <tr>
                                                            <td>PLATFORM MAINTENANCE</td>
                                                            <td>₦<?php echo number_format( $data['T_Fee2']->amount) ?>
                                                                </td>
                                                             <td><?php if ($data['cyf2']->fee_code == "") {
                                                               echo '<span class="tb-status text-warning">Not Paid</span></td>';
                                                            } 

                                                            if ($data['cyf2']->fee_code == !"") {
                                                               echo '<span class="tb-status text-success">Paid</span></td>';
                                                            }


                                                            ?>
                                                        </td>
                                                        <td></td>
                                                          </tr>



                                                            <tr>
                                                            <td>TRADER FEE (<?php echo $alltraders = $data['ALL_traders']->TotalTraders; ?>)</td>

                                                            <td>₦<?php  $trader_amount = $data['T_Fee3']->amount;
                                                            $traderfees = $alltraders * $trader_amount; 
                                                            echo   number_format($traderfees);
                                                            ?></td>
                                                            <td><span class="tb-status text-success"> (<?php if ($data['T_traderPaid']->TotalTraderPaid == "") {
                                                                   echo '0';
                                                                } 

                                                                    if ($data['T_traderPaid']->TotalTraderPaid == !"") {
                                                                   echo $data['T_traderPaid']->TotalTraderPaid;
                                                                } 
                                                                 ?>)</span> </td>
                                                                 <td></td>
                                                          </tr>

                                                          <tr>
                                                              <td><b>TOTAL DUE</b></td>
                                                              <td><b style="color: red;">₦<?php  $totaldue = $data['T_Fee4']->amount + $data['T_Fee2']->amount + $traderfees;
                                                               echo   number_format($totaldue) ; ?></b></td>
                                                              <td></td>
                                                              <td><b style="color: green;">₦<?php $current_payment =  $data['toalf4']->TotalBAF + $data['toalf2']->TotalMadatePM + $data['toalf3']->TotalTF;
                                                                echo   number_format($current_payment) ;  ?></b></td>

                                                          </tr>

                                                          
                                                        </table>

                                                        <?php endif; ?>





                                        
                                          
                                                  <?php if ($data['mandate_info']->category  == 'BROKER/DEALER') : ?>

                                                        <table class="table">
                                                            <thead class="thead-light">
                                                          <tr>
                                                            <th>FEES</th>
                                                            <th>AMOUNT</th>
                                                            <th>STATUS</th>
                                                            <th>CURRENT PAYMENT</th>
                                                          </tr>
                                                          <tr>
                                                            <td>BROKER DEALER ANNUAL  </td>
                                                            <td>₦<?php echo number_format($data['T_Fee']->amount) ?> </td>
                                                            <td><?php if ($data['cyf']->fee_code == "") {
                                                               echo '<span class="tb-status text-warning">Not Paid</span></td>';
                                                            } 

                                                            if ($data['cyf']->fee_code == !"") {
                                                               echo '<span class="tb-status text-success">Paid</span></td>';
                                                            }


                                                            ?>
                                                        </td>
                                                        <td></td>
                                                                
                                                          </tr>

                                                          <tr>
                                                            <td>PLATFORM MAINTENANCE</td>
                                                            <td>₦<?php echo number_format( $data['T_Fee2']->amount) ?>
                                                                </td>
                                                             <td><?php if ($data['cyf2']->fee_code == "") {
                                                               echo '<span class="tb-status text-warning">Not Paid</span></td>';
                                                            } 

                                                            if ($data['cyf2']->fee_code == !"") {
                                                               echo '<span class="tb-status text-success">Paid</span></td>';
                                                            }


                                                            ?>
                                                        </td>
                                                        <td></td>
                                                          </tr>



                                                            <tr>
                                                            <td>TRADER FEE (<?php echo $alltraders = $data['ALL_traders']->TotalTraders; ?>)</td>

                                                            <td>₦<?php  $trader_amount = $data['T_Fee3']->amount;
                                                            $traderfees = $alltraders * $trader_amount; 
                                                            echo   number_format($traderfees);
                                                            ?></td>
                                                            <td><span class="tb-status text-success"> (<?php if ($data['T_traderPaid']->TotalTraderPaid == "") {
                                                                   echo '0';
                                                                } 

                                                                    if ($data['T_traderPaid']->TotalTraderPaid == !"") {
                                                                   echo $data['T_traderPaid']->TotalTraderPaid;
                                                                } 
                                                                 ?>)</span> </td>
                                                                 <td></td>
                                                          </tr>

                                                          <tr>
                                                              <td><b>TOTAL DUE</b></td>
                                                              <td><b style="color: red;">₦<?php  $totaldue = $data['T_Fee']->amount + $data['T_Fee2']->amount + $traderfees;
                                                               echo   number_format($totaldue) ; ?></b></td>
                                                              <td></td>
                                                              <td><b style="color: green;">₦<?php $current_payment =  $data['toalf1']->TotalBDF + $data['toalf2']->TotalMadatePM + $data['toalf3']->TotalTF;
                                                                echo   number_format($current_payment) ;  ?></b></td>

                                                          </tr>

                                                          
                                                        </table>

                                                        <?php endif; ?>



                            
                                        </div>
                                    </div>
                                </div><!-- .nk-block-head -->
                                <div class="nk-data data-list">
                                    <div class="data-head">
                                        <h6 class="overline-title">Basics</h6>
                                    </div>
                                    <div class="data-item" data-toggle="modal" data-target="#profile-edit">
                                        <div class="data-col">
                                            <span class="data-label">Organization</span>
                                            <span class="data-value"><?php echo $data['mandate_info']->company_name; ?></span>
                                        </div>
                                        <div class="data-col data-col-end"><span class="data-more"><em class="icon ni ni-forward-ios"></em></span></div>
                                    </div><!-- .data-item -->
                                    <div class="data-item" data-toggle="modal" data-target="#profile-edit">
                                        <div class="data-col">
                                            <span class="data-label">Mandate Code</span>
                                            <span class="data-value"><?php echo $data['mandate_info']->mandate_code; ?></span>
                                        </div>
                                        <div class="data-col data-col-end"><span class="data-more"><em class="icon ni ni-forward-ios"></em></span></div>
                                    </div><!-- .data-item -->
                                     <div class="data-item" data-toggle="modal" data-target="#profile-edit">
                                        <div class="data-col">
                                            <span class="data-label">Category</span>
                                            <span class="data-value"><?php echo $data['mandate_info']->category; ?></span>
                                        </div>
                                        <div class="data-col data-col-end"><span class="data-more"><em class="icon ni ni-forward-ios"></em></span></div>
                                    </div><!-- .data-item -->
                                    <div class="data-item">
                                        <div class="data-col">
                                            <span class="data-label">Email</span>
                                            <span class="data-value"><?php echo $data['mandate_info']->email;   ?></span>
                                        </div>
                                        <div class="data-col data-col-end"><span class="data-more disable"><em class="icon ni ni-lock-alt"></em></span></div>
                                    </div><!-- .data-item -->
                                    <div class="data-item" data-toggle="modal" data-target="#profile-edit">
                                        <div class="data-col">
                                            <span class="data-label">Phone Number</span>
                                            <span class="data-value text-soft"><?php echo $data['mandate_info']->email;   ?></span>
                                        </div>
                                        <div class="data-col data-col-end"><span class="data-more"><em class="icon ni ni-forward-ios"></em></span></div>
                                    </div><!-- .data-item -->
                                    <div class="data-item" data-toggle="modal" data-target="#profile-edit">
                                        <div class="data-col">
                                            <span class="data-label">Website</span>
                                            <span class="data-value"><?php echo $data['mandate_info']->website;   ?></span>
                                        </div>
                                        <div class="data-col data-col-end"><span class="data-more"><em class="icon ni ni-forward-ios"></em></span></div>
                                    </div><!-- .data-item -->
                                    <div class="data-item" data-toggle="modal" data-target="#profile-edit" data-tab-target="#address">
                                        <div class="data-col">
                                            <span class="data-label">Address</span>
                                            <span class="data-value"><?php echo $data['mandate_info']->address;   ?></span>
                                        </div>
                                        <div class="data-col data-col-end"><span class="data-more"><em class="icon ni ni-forward-ios"></em></span></div>
                                    </div><!-- .data-item -->
                                </div><!-- .nk-data -->
                               
                                                </div>


                                        <div class="tab-pane" id="tabItem4">
                                                    <div class="tab-content">
                                                <div class="tab-pane active" id="file-grid-view">
                                                   <div class="toggle-wrap nk-block-tools-toggle">
                                            <a href="#" class="btn btn-icon btn-trigger toggle-expand mr-n1" data-target="pageMenu"><em class="icon ni ni-menu-alt-r"></em></a>
                                            <div class="toggle-expand-content" data-content="pageMenu" style="float: right;">
                                                <ul class="nk-block-tools g-3">
                                                   
                                                    <li class="nk-block-tools-opt">
                                                        <div class="drodown">
                                                            <a href="#add-manager" data-toggle="modal" class="dropdown-toggle btn btn-icon btn-primary" data-toggle="dropdown"><em class="icon ni ni-plus"></em></a>
                                                            
                                                        </div>
                                                    </li>
                                                </ul>
                                            </div>
                                            <br><br><br>
                                        </div><!-- .toggle-wrap -->
                                                    <div class="nk-files nk-files-view-grid">
                                                        
                                                       <table class="datatable-init nk-tb-list nk-tb-ulist" data-auto-responsive="false">
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
                                                     
                                                        <th class="nk-tb-col tb-col-lg"><span class="sub-text">Company Code</span></th>
                                                        <th class="nk-tb-col tb-col-md"><span class="sub-text">Status</span></th>
                                                        <th class="nk-tb-col nk-tb-col-tools text-right">
                                                        </th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <?php $count = 0;  foreach($data['mandate_managers'] as $mandate_manager) : $count++; ?>
                                                    <tr class="nk-tb-item">
                                                        <td class="nk-tb-col nk-tb-col-check">
                                                           <span><?php echo $count; ?></span>
                                                        </td>
                                                        <td class="nk-tb-col">
                                                            <div class="user-card">
                                                              
                                                                <div class="user-info">
                                                                    <span class="tb-lead"><?php echo $mandate_manager->manager_name; ?><span class="dot dot-success d-md-none ml-1"></span></span>
                                                                  
                                                                </div>
                                                            </div>
                                                        </td>
                                                        <td class="nk-tb-col tb-col-mb" data-order="35040.34">
                                                            <span class="tb-amount"><?php echo $mandate_manager->manager_email; ?></span>
                                                        </td>
                                                        <td class="nk-tb-col tb-col-md">
                                                            <span class="tb-amount"><?php echo $mandate_manager->manager_phone; ?></span>
                                                        </td>
                                                        
                                                        <td class="nk-tb-col tb-col-lg">
                                                            <span class="tb-amount"><?php echo $mandate_manager->mandate_code; ?></span>
                                                        </td>
                                                        <td class="nk-tb-col tb-col-md">
                                                            <span class="tb-status text-success">Active</span>
                                                        </td>
                                                        <td class="nk-tb-col nk-tb-col-tools">
                                                            <ul class="nk-tb-actions gx-1">
                                                              
                                                               
                                                                <li>
                                                                    <div class="drodown">
                                                                        <a href="#" class="dropdown-toggle btn btn-icon btn-trigger" data-toggle="dropdown"><em class="icon ni ni-more-h"></em></a>
                                                                        <div class="dropdown-menu dropdown-menu-right">
                                                                            <ul class="link-list-opt no-bdr">
                                                                               
                                                                                <li>
                                                                    <button class="btn" data-toggle="modal" data-target="#exampleModal<?php echo $mandate_manager->id; ?>">
                                                                        <i class="icon ni ni-edit"></i>
                                                                            &nbsp;Edit Manager
                                                                    </button>
                                                          
                                                                     </li>                  
                                                                            </ul>
                                                                        </div>
                                                                    </div>
                                                                </li>
                                                            </ul>
                                                        </td>
                                                    </tr><!-- .nk-tb-item  -->


                                                     <div class="modal fade" tabindex="-1" role="dialog" id="exampleModal<?php echo $mandate_manager->id; ?>">
        <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
            <div class="modal-content">
                <a href="#" class="close" data-dismiss="modal"><em class="icon ni ni-cross-sm"></em></a>
                <div class="modal-body modal-body-lg">
                    <h5 class="title">Edit Manager</h5>
                    <div class="tab-content">
                        <form method="post" action="<?php echo URLROOT; ?>/admins/change_mandate_manager/<?php echo $mandate_manager->id; ?>" >
                        <div class="tab-pane active" id="personal">
                            <div class="row gy-4">
                                <div class="col-md-12">
                                   <div class="form-group">
                                        <label class="form-label" for="full-name">Full Name</label>
                                        <input value="<?php echo $mandate_manager->manager_name; ?>" name="manager_name" type="text" class="form-control form-control-lg" id="full-name" >
                                    </div>
                                </div>

                                <div class="col-md-6">
                                   <div class="form-group">
                                        <label class="form-label" for="full-name">Email</label>
                                        <input value="<?php echo $mandate_manager->manager_email; ?>" name="manager_email" type="text" class="form-control form-control-lg" id="full-name" >
                                    </div>
                                </div>


                                <div class="col-md-6">
                                   <div class="form-group">
                                        <label class="form-label" for="full-name">Phone</label>
                                        <input value="<?php echo $mandate_manager->manager_phone; ?>" name="manager_phone" type="number" class="form-control form-control-lg" id="full-name" >
                                    </div>
                                </div>

                                 


                              
                                <input type="hidden" value="<?php echo $mandate_manager->id; ?>" name="id" >
                                <input type="hidden" value="<?php echo $mandate_manager->mandate_code; ?>" name="mandate_code2" >
                               

                               



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
                                                    </div><!-- .nk-files -->


                                                
                                            </div>
                                                </div>
                                               
                                            </div>



                            <div class="tab-pane" id="tabItem6">
                                                    <div class="nk-block-content" style="float: right;">
                                        <ul class="nk-block-tools gx-3" >
                                            
                                            <li class="btn-wrap"><a href="#add-fund" data-toggle="modal" class="btn btn-icon btn-xl btn-dark"><em class="icon ni ni-plus"></em></a><span class="btn-extext">Add Payment</span></li>
                                           
                                        </ul>
                                    </div><!-- .nk-block-content -->
                                    <br>
                                    <br>
                                    <br>


                            <?php if ($data['mandate_info']->category  == 'BROKER DEALER') : ?>
                                <div class="nk-block nk-block-lg">        
                                <div class="row g-gs">

                                    <div class="col-md-4">
                                        <div class="card card-bordered">
                                            <div class="card-inner">
                                                <div class="nk-wg5">
                                                    <div class="nk-wg5-title">
                                                        <h6 class="title overline-title">BROKER DEALER ANNUAL </h6>
                                                    </div>
                                                    <div class="nk-wg5-text">
                                                        <div class="nk-wg5-amount">
                                                            <div class="amount">₦<?php echo number_format($data['total_fee1']->TotalAmountBD) ?> <span class="currency currency-btc"></span>
                                                            </div>
                                                           
                                                        </div>
                                                    </div>
                                                   
                                                </div><!-- .nk-wg5 -->
                                            </div>
                                        </div><!-- .card -->
                                    </div><!-- .col -->
                                   
                                    <div class="col-md-4">
                                        <div class="card card-bordered">
                                            <div class="card-inner">
                                                <div class="nk-wg5">
                                                    <div class="nk-wg5-title">
                                                        <h6 class="title overline-title">Total Platform fee</h6>
                                                    </div>
                                                    <div class="nk-wg5-text">
                                                        <div class="nk-wg5-amount">
                                                            <div class="amount">₦<?php echo number_format($data['total_fee2']->TotalAmountPM) ?> 
                                                               <span class="currency currency-btc"></span>
                                                            </div>
                                                           
                                                        </div>
                                                    </div>
                                                    
                                                </div>
                                            </div>
                                        </div>
                                    </div><!-- .col -->

                                    <div class="col-md-4">
                                        <div class="card card-bordered">
                                            <div class="card-inner">
                                                <div class="nk-wg5">
                                                    <div class="nk-wg5-title">
                                                        <h6 class="title overline-title">Total Trader Fee</h6>
                                                    </div>
                                                    <div class="nk-wg5-text">
                                                        <div class="nk-wg5-amount">
                                                            <div class="amount">₦<?php echo number_format( $data['total_fee3']->TotalAmountTF) ?> 
                                                                <span class="currency currency-btc"></span>
                                                            </div>
                                                           
                                                        </div>
                                                    </div>
                                                    
                                                </div>
                                            </div>
                                        </div>
                                    </div><!-- .col -->
                                </div>
                            </div>

                        <?php endif; ?>


                         <?php if ($data['mandate_info']->category  == 'BROKER') : ?>
                                <div class="nk-block nk-block-lg">        
                                <div class="row g-gs">

                                    <div class="col-md-4">
                                        <div class="card card-bordered">
                                            <div class="card-inner">
                                                <div class="nk-wg5">
                                                    <div class="nk-wg5-title">
                                                        <h6 class="title overline-title">BROKER ANNUAL </h6>
                                                    </div>
                                                    <div class="nk-wg5-text">
                                                        <div class="nk-wg5-amount">
                                                            <div class="amount">₦<?php echo number_format($data['total_fee4']->TotalAmountBF) ?> <span class="currency currency-btc"></span>
                                                            </div>
                                                           
                                                        </div>
                                                    </div>
                                                   
                                                </div><!-- .nk-wg5 -->
                                            </div>
                                        </div><!-- .card -->
                                    </div><!-- .col -->
                                   
                                    <div class="col-md-4">
                                        <div class="card card-bordered">
                                            <div class="card-inner">
                                                <div class="nk-wg5">
                                                    <div class="nk-wg5-title">
                                                        <h6 class="title overline-title">Total Platform fee</h6>
                                                    </div>
                                                    <div class="nk-wg5-text">
                                                        <div class="nk-wg5-amount">
                                                            <div class="amount">₦<?php echo number_format($data['total_fee2']->TotalAmountPM) ?> 
                                                               <span class="currency currency-btc"></span>
                                                            </div>
                                                           
                                                        </div>
                                                    </div>
                                                    
                                                </div>
                                            </div>
                                        </div>
                                    </div><!-- .col -->

                                    <div class="col-md-4">
                                        <div class="card card-bordered">
                                            <div class="card-inner">
                                                <div class="nk-wg5">
                                                    <div class="nk-wg5-title">
                                                        <h6 class="title overline-title">Total Trader Fee</h6>
                                                    </div>
                                                    <div class="nk-wg5-text">
                                                        <div class="nk-wg5-amount">
                                                            <div class="amount">₦<?php echo number_format( $data['total_fee3']->TotalAmountTF) ?> 
                                                                <span class="currency currency-btc"></span>
                                                            </div>
                                                           
                                                        </div>
                                                    </div>
                                                    
                                                </div>
                                            </div>
                                        </div>
                                    </div><!-- .col -->
                                </div>
                            </div>

                        <?php endif; ?>



                        <?php if ($data['mandate_info']->category  == 'ISSUING HOUSE') : ?>
                                <div class="nk-block nk-block-lg">        
                                <div class="row g-gs">

                                    <div class="col-md-6">
                                        <div class="card card-bordered">
                                            <div class="card-inner">
                                                <div class="nk-wg5">
                                                    <div class="nk-wg5-title">
                                                        <h6 class="title overline-title">ISSUING HOUSE </h6>
                                                    </div>
                                                    <div class="nk-wg5-text">
                                                        <div class="nk-wg5-amount">
                                                            <div class="amount">₦<?php echo number_format($data['total_fee5']->TotalAmountIS) ?> <span class="currency currency-btc"></span>
                                                            </div>
                                                           
                                                        </div>
                                                    </div>
                                                   
                                                </div><!-- .nk-wg5 -->
                                            </div>
                                        </div><!-- .card -->
                                    </div><!-- .col -->
                                   
                                    <div class="col-md-6">
                                        <div class="card card-bordered">
                                            <div class="card-inner">
                                                <div class="nk-wg5">
                                                    <div class="nk-wg5-title">
                                                        <h6 class="title overline-title">Total Platform fee</h6>
                                                    </div>
                                                    <div class="nk-wg5-text">
                                                        <div class="nk-wg5-amount">
                                                            <div class="amount">₦<?php echo number_format($data['total_fee2']->TotalAmountPM) ?> 
                                                               <span class="currency currency-btc"></span>
                                                            </div>
                                                           
                                                        </div>
                                                    </div>
                                                    
                                                </div>
                                            </div>
                                        </div>
                                    </div><!-- .col -->

                                 
                                </div>
                            </div>

                        <?php endif; ?>



                           <div class="nk-block">
                                <div class="card card-bordered card-stretch">
                                    <div class="card-inner-group">
                                       
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
                                                        <th class="nk-tb-col"><span class="sub-text">BILL FOR</span></th>
                                                        <th class="nk-tb-col tb-col-md"><span class="sub-text">AMOUNT</span></th>
                                                        <th class="nk-tb-col tb-col-mb"><span class="sub-text">ISSUE DATE</span></th>
                                                        <th class="nk-tb-col tb-col-md"><span class="sub-text">DUE DATE</span></th>
                                                        
                                                        
                                                      
                                                        <th class="nk-tb-col tb-col-md"><span class="sub-text">STATUS</span></th>
                                                        <th class="nk-tb-col nk-tb-col-tools text-right">
                                                        </th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                     <?php $count = 0;  foreach($data['mandate_accounts'] as $mandate_account) : $count++; ?>

                                                    <tr class="nk-tb-item">
                                                        <td class="nk-tb-col nk-tb-col-check">
                                                            <div class="nk-tnx-type-icon">
                                                              <?php echo $count;  ?>
                                                            </div>
                                                        </td>
                                                        <td class="nk-tb-col">
                                                            <div class="user-card">
                                                                
                                                                <div class="nk-tnx-type-text">
                                                                <span class="tb-lead"><?php echo $mandate_account->fee_title; ?></span>
                                                               
                                                            </div>
                                                            </div>
                                                        </td>
                                                         <td class="nk-tb-col tb-col-mb" data-order="35040.34">
                                                            <span class="tb-amount">₦<?php echo number_format($mandate_account->amount); ?></span>
                                                        </td>
                                                        <td class="nk-tb-col tb-col-mb" data-order="35040.34">
                                                            <span class="tb-amount"><?php echo $mandate_account->issued_date; ?></span>
                                                        </td>
                                                        <td class="nk-tb-col tb-col-mb" data-order="35040.34">
                                                            <span class="tb-amount"><?php echo $mandate_account->due_date; ?></span>
                                                        </td>

                                                       
                                                        
                                                        
                                                        <td class="nk-tb-col tb-col-md">
                                                             <?php 
                                                                    $due = $mandate_account->due_date;
                                                                      $today = date("Y"); 

                                                                          if($today >= $due){
                                                                echo '<span class="badge badge-sm badge-warning"> Expired </span>'; 
                                                                               
                                                                      } else {
                                                                         echo '<span class="badge badge-sm badge-success"> Active </span>';
                                                                         
                                                                      
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
                                                                               
                                                                                <li><a href="#tranxDetails" data-toggle="modal" class="bg-white btn btn-sm btn-outline-light btn-icon btn-tooltip"><em class="icon ni ni-eye"></em><span>View Details</span></a></li>
                                                                                <li><a href="#"><em class="icon ni ni-repeat"></em><span>Transaction</span></a></li>                  <li><a href="#"><em class="icon ni ni-na"></em><span>Suspend User</span></a></li>
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
                                                <div class="tab-pane" id="tabItem7">
                                                    <div class="tab-content">
                                                <div class="tab-pane active" id="file-grid-view">
                                                    <div class="nk-fmg-actions" style="float: right;">
                                            <ul class="nk-block-tools g-3">
                                                
                                                <li><a href="<?php echo URLROOT; ?>/admins/update_mandate_files/<?php echo $data['mandate_info']->mandate_code; ?>" class="btn btn-primary" ><em class="icon ni ni-upload-cloud"></em> <span>Upload Files</span></a></li>
                                            </ul>
                                        </div>
                                        <br><br>
                                                    <div class="nk-files nk-files-view-grid">
                                                        
                                                        <div class="nk-files-list">
                                                           
                                                           <?php   foreach($data['mandate_docs'] as $mandate_doc) : ?>

                                                <div class="card card-preview">
                                        <div class="card-inner">
                                            <div class="row">
                                                <div class="col-lg-12">
                                                    <div class="card card-bordered">
                                                         <object  style="width: 1000px; height: 500px" data="<?php echo URLROOT; ?>/gallery/<?php echo $mandate_doc->files; ?>" class="card-img-top" ></object>
                                                        <div class="card-inner">
                                                            <!-- <h5 class="card-title">Card with stretched link</h5>
                                                            <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p> -->


                                                           <div class="nk-file-actions">
                                                                    <div class="dropdown">
                                                                        <a href="" class="dropdown-toggle btn btn-sm btn-icon btn-trigger" data-toggle="dropdown"><em class="icon ni ni-more-h"></em></a>
                                                                        <div class="dropdown-menu dropdown-menu-right">
                                                                            <ul class="link-list-plain no-bdr">
                                                                            
                                                                               
                                                                                <li><a href="<?php echo URLROOT; ?>/gallery/<?php echo $mandate_doc->files; ?>" download class="file-dl-toast"><em class="icon ni ni-download"></em><span>Download</span></a></li>
                                                                                

                                                         <li> <form action="<?php echo URLROOT; ?>/admins/delete_mandate_file/<?php echo $mandate_doc->id; ?>" method="POST">

                                                       <input type="hidden" name="id" id="p_id" value="<?php echo $mandate_doc->id; ?>">

                                                         <input type="hidden" name="id" id="p_id" value="<?php echo $mandate_doc->mandate_code; ?>">
                                                                    <button class="btn" name="archive" type="submit" onclick="archiveFunction()">
                                                                        <i class="icon ni ni-trash"></i>
                                                                            &nbsp;Delete
                                                                    </button>
                                                            </form></li>
                                                                            </ul>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                             
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                                            

                                                            <?php endforeach; ?>
                                                            
                                                            
                                                        </div>
                                                    </div><!-- .nk-files -->


                                                
                                            </div>
                                                </div>
                                               
                                            </div>



                                            <div class="tab-pane" id="tabItem8">
                                                    <div class="tab-content">
                                                <div class="tab-pane active" id="file-grid-view">
                                                   <div class="toggle-wrap nk-block-tools-toggle">
                                            <a href="#" class="btn btn-icon btn-trigger toggle-expand mr-n1" data-target="pageMenu"><em class="icon ni ni-menu-alt-r"></em></a>
                                            <div class="toggle-expand-content" data-content="pageMenu" style="float: right;">
                                                <ul class="nk-block-tools g-3">
                                                   
                                                    <li class="nk-block-tools-opt">
                                                        <div class="drodown">
                                                            <a href="#add-trader" data-toggle="modal" class="dropdown-toggle btn btn-icon btn-primary" data-toggle="dropdown"><em class="icon ni ni-plus"></em></a>
                                                            
                                                        </div>
                                                    </li>
                                                </ul>
                                            </div>
                                            <br><br><br>
                                        </div><!-- .toggle-wrap -->
                                                    <div class="nk-files nk-files-view-grid">
                                                        
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
                                                        <th class="nk-tb-col tb-col-lg"><span class="sub-text">Company Code</span></th>
                                                        <th class="nk-tb-col tb-col-md"><span class="sub-text">Status</span></th>
                                                        <th class="nk-tb-col nk-tb-col-tools text-right">
                                                        </th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <?php $count = 0;  foreach($data['mandate_traders'] as $mandate_trader) : $count++; ?>
                                                    <tr class="nk-tb-item">
                                                        <td class="nk-tb-col nk-tb-col-check">
                                                           <span><?php echo $count; ?></span>
                                                        </td>
                                                        <td class="nk-tb-col">
                                                            <div class="user-card">
                                                              
                                                                <div class="user-info">
                                                                    <span class="tb-lead"><?php echo $mandate_trader->fullname; ?><span class="dot dot-success d-md-none ml-1"></span></span>
                                                                    <p><?php echo $mandate_trader->trader_code; ?></p>
                                                                </div>
                                                            </div>
                                                        </td>
                                                        <td class="nk-tb-col tb-col-mb" data-order="35040.34">
                                                            <span class="tb-amount"><?php echo $mandate_trader->email; ?></span>
                                                        </td>
                                                        <td class="nk-tb-col tb-col-md">
                                                            <span class="tb-amount"><?php echo $mandate_trader->phone; ?></span>
                                                        </td>
                                                       
                                                        <td class="nk-tb-col tb-col-lg">
                                                            <span class="tb-amount"><?php echo $mandate_trader->mandate_code; ?></span>
                                                        </td>
                                                        <td class="nk-tb-col tb-col-md">
                                                            <span class="tb-status text-success">Active</span>
                                                        </td>
                                                        <td class="nk-tb-col nk-tb-col-tools">
                                                            <ul class="nk-tb-actions gx-1">
                                                              
                                                               
                                                                <li>
                                                                    <div class="drodown">
                                                                        <a href="#" class="dropdown-toggle btn btn-icon btn-trigger" data-toggle="dropdown"><em class="icon ni ni-more-h"></em></a>
                                                                        <div class="dropdown-menu dropdown-menu-right">
                                                                            <ul class="link-list-opt no-bdr">
                                                                               
                                                                                                   <li>
                                                                    <button class="btn" data-toggle="modal" data-target="#exampleModal<?php echo $mandate_trader->id; ?>">
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

                                         <div class="modal fade" tabindex="-1" role="dialog" id="exampleModal<?php echo $mandate_trader->id; ?>">
        <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
            <div class="modal-content">
                <a href="#" class="close" data-dismiss="modal"><em class="icon ni ni-cross-sm"></em></a>
                <div class="modal-body modal-body-lg">
                    <h5 class="title">Change Trader Firm</h5>
                    <div class="tab-content">
                        <form method="post" action="<?php echo URLROOT; ?>/admins/change_mandate_trader/<?php echo $mandate_trader->id; ?>" >
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
                                        <label class="form-label" for="full-name">Change Firm</label>
                                       <select name="mandate_code" data-msg="Required" class="form-control">
                                                                    <?php foreach($data['allmandates'] as $allmandates) : ?>
                                                <option selected value="<?php echo $mandate_trader->mandate_code; ?>"></option>
                                                <option value="<?php echo $allmandates->mandate_code; ?>"><?php echo $allmandates->company_name; ?></option>
                                                <?php endforeach; ?>
                                                                    </select>
                                    </div>
                                </div> 
                                <input type="hidden" value="<?php echo $mandate_trader->id; ?>" name="id" >
                                <input type="hidden" value="<?php echo $mandate_trader->mandate_code; ?>" name="mandate_code2" >
                               

                               



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
                                                    </div><!-- .nk-files -->


                                                
                                            </div>
                                                </div>
                                               
                                            </div>
                                        </div>
                                    </div><!-- .card-preview -->
                                  
                                    
                                           <!-- .row -->
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                </div><!-- .nk-block -->
                            </div><!-- .components-preview -->
                        </div>
                    </div>
                </div>












    <div class="modal fade" tabindex="-1" role="dialog" id="add-fund">
        <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
            <div class="modal-content">
                <a href="#" class="close" data-dismiss="modal"><em class="icon ni ni-cross-sm"></em></a>
                <div class="modal-body modal-body-lg">
                    <h5 class="title">Add Fee</h5>
                    
                    <div class="tab-content">
                        <div class="tab-pane active" id="personal">
                           <form method="post" action="<?php echo URLROOT; ?>/admins/add_mandatefee">
                            <div class="row gy-4">
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label class="form-label" for="phone-no">Fee Ttitle</label>

                                        <select name="fee_code" class="form-control form-control-lg">
                                             <?php foreach($data['allfees'] as $allfee) : ?>
                                                <option value="<?php echo $allfee->fee_code; ?>"><?php echo $allfee->fee_title; ?></option>
                                                <?php endforeach; ?>

                                           
                                        </select>
                                       
                                    </div>
                                </div>

                                <input type="hidden" value="<?php echo $data['mandate_info']->mandate_code; ?>" name="mandate_code">
                                


                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label class="form-label" for="full-name">Issue Date</label>
                                        <input name="issued_date" type="date" class="form-control form-control-lg" id="full-name" >
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




     <div class="modal fade" tabindex="-1" role="dialog" id="add-trader">
        <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
            <div class="modal-content">
                <a href="#" class="close" data-dismiss="modal"><em class="icon ni ni-cross-sm"></em></a>
                <div class="modal-body modal-body-lg">
                    <h5 class="title">Add Trader</h5>
                    
                    <div class="tab-content">
                        <div class="tab-pane active" id="personal">
                           <form method="post" action="<?php echo URLROOT; ?>/admins/add_mandatetrader">
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
                                        <label class="form-label" for="full-name">Mandate Code</label>
                                        <input name="mandate_code" readonly="" value="<?php echo $data['mandate_info']->mandate_code; ?>" class="form-control form-control-lg" id="full-name" >
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




     <div class="modal fade" tabindex="-1" role="dialog" id="add-manager">
        <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
            <div class="modal-content">
                <a href="#" class="close" data-dismiss="modal"><em class="icon ni ni-cross-sm"></em></a>
                <div class="modal-body modal-body-lg">
                    <h5 class="title">Add Manager</h5>
                    
                    <div class="tab-content">
                        <div class="tab-pane active" id="personal">
                           <form method="post" action="<?php echo URLROOT; ?>/admins/add_manager">
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

                                 

                                
                                        <input name="mandate_code" type="hidden" value="<?php echo $data['mandate_info']->mandate_code; ?>" class="form-control form-control-lg" id="full-name" >
                                   

                                
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

