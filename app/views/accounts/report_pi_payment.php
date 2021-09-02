 <div class="nk-content nk-content-fluid">
                    <div class="container-xl wide-lg">
                        <div class="nk-content-body">
                             <div class="nk-block-head nk-block-head-sm">
                                <div class="nk-block-between">
                                    <div class="nk-block-head-content">
                                        <h3 class="nk-block-title page-title">PIS PAYMENT REPORT FOR <?php echo $_SESSION['selected_year']; ?></h3> <a href="#show-report-year" data-toggle="modal" class="btn btn-outline-primary">Change Year</a>
                                        
                                    </div><!-- .nk-block-head-content -->
                                    <div class="nk-block-head-content">
                                        <div class="toggle-wrap nk-block-tools-toggle">
                                            <a href="#" class="btn btn-icon btn-trigger toggle-expand mr-n1" data-target="pageMenu"><em class="icon ni ni-menu-alt-r"></em></a>
                                            <div class="toggle-expand-content" data-content="pageMenu">
                                                 <ul class="nk-block-tools gx-3" style="align-items: center;" >
                                            
                                           
                                            <li class="btn-wrap"><a href="<?php echo URLROOT; ?>/accounts/excel"  class="btn btn-primary"><em class="icon ni ni-plus"></em></a><span class="btn-extext">Export All Payment Report</span></li>

                                            

                                             <li class="btn-wrap"><a href="#gen-report-year" data-toggle="modal"  class="btn btn-primary"><em class="icon ni ni-plus"></em></a><span class="btn-extext"> Export Payment Report <br> By Year</span></li>
                                           
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
                                                                
                                                                #
                                                            </div>
                                                        </th>
                                                        <th class="nk-tb-col"><span class="sub-text">Account</span></th>
                                                        <th class="nk-tb-col"><span class="sub-text">Category</span></th>
                                                        <th class="nk-tb-col"><span class="sub-text">Status</span></th>
                                                         <th class="nk-tb-col tb-col-md"><span class="sub-text">Trders</span></th>
                                                        <th class="nk-tb-col tb-col-mb"><span class="sub-text">Total Due</span></th>
                                                        <th class="nk-tb-col tb-col-md"><span class="sub-text">Current Payment</span></th>

                                                        <th class="nk-tb-col tb-col-md"><span class="sub-text">Outstanding</span></th>

                                                         <th class="nk-tb-col tb-col-md"><span class="sub-text">Year</span></th>
                                                      
                                                        
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                 <?php  $count = 0; foreach($data['allpis'] as $allpis) : 
                                                 $selected_year =  $_SESSION['selected_year'];
                                                  $mandate_code = $allpis->mandate_code;

                                                // ANNUAL FEE BROKER DEALER 
                                                $all_payBDAF = $this->accountModel->getAllMandatePaymentBDAF($mandate_code);



                                                 // ANNUAL FEE BROKER 
                                                $all_payAFB = $this->accountModel->getAllMandatePaymentAFB($mandate_code);

                                                 // ANNUAL FEE PLATFORM MAINTENANCE 
                                                $all_payAFPM = $this->accountModel->getAllMandatePaymentAFPM($mandate_code);

                                                /// ANNUAL FEE ISSUING HOUSE 
                                                $all_payAFIH = $this->accountModel->getAllMandatePaymentAFIH($mandate_code);



                                                 /// ANNUAL FEE AUTHORISED TRADER 
                                                $all_payAFAT = $this->accountModel->getAllMandatePaymentAFAT($mandate_code);

                                                // ALL TRADERS
                                                $ALL_traders = $this->accountModel->getTotatalTrader($mandate_code);


                                                /// TOTAL AMOUNT
                                                $Total_amountREP = $this->accountModel->getTotalPaymentSelectYear($mandate_code,$selected_year);

                                                // var_dump($Total_amountREP); die();
                                                error_reporting(0);

                                                  $count++;

                                                       

                                                             ?>


                                             
                                                    <tr class="nk-tb-item">
                                                        <td class="nk-tb-col nk-tb-col-check">
                                                            <div class="custom-control custom-control-sm custom-checkbox notext">
                                                                 <?php echo $count;  ?>
                                                            </div>
                                                        </td>
                                                        <td class="nk-tb-col">
                                                            <div class="user-card">
                                                                
                                                                <div class="user-info">
                                                                    <a href="<?php echo URLROOT; ?>/accounts/mandate/<?php echo $allpis->mandate_code;  ?>"><span class="tb-lead"> <?php echo substr($allpis->company_name,0,100);  ?></span>
                                                                    </a>
                                                                </div>
                                                            </div>
                                                        </td>
                                                        <td class="nk-tb-col tb-col-mb" data-order="35040.34">
                                                            <span class="tb-amount"><?php echo $allpis->category;  ?></span></span>
                                                        </td>


                                                         <td class="nk-tb-col tb-col-md">
                                                            <?php if ($allpis->mandate_status == 1) {
                                                               echo ' <span class="tb-status text-success">Active</span>';
                                                            } 

                                                            if ($allpis->mandate_status == 'S') {
                                                               echo ' <span class="tb-status text-warning">Suspended</span>';
                                                            }


                                                            if ($allpis->mandate_status == 'D') {
                                                               echo '<span class="tb-status text-danger">Delisted</span>';
                                                            }  




                                                            ?>
                                                           
                                                        </td>


                                                        <td class="nk-tb-col tb-col-md">

                                                            <?php echo $ALL_traders->TotalTraders; ?>
                                                           
                                                        </td>

                                                        <?php if ($allpis->category  == 'BROKER') : ?>

                                                        <td class="nk-tb-col tb-col-mb" data-order="35040.34">
                                                            <span class="tb-amount"><?php
                                                            
                                                            $broker_annual = $data['AFB_amount']->amount; 
                                                             $traders_annual = $data['AFAT_amont']->amount * $ALL_traders->TotalTraders;

                                                              $platform_m = $data['AFPM_amount']->amount; 

                                                              $brokerdue = $broker_annual + $traders_annual + $platform_m;

                                                              echo  number_format($brokerdue);
                                                             ?></span>
                                                        </td>

                                                          <?php endif; ?>



                                                            <?php if ($allpis->category  == 'BROKER/DEALER') : ?>

                                                        <td class="nk-tb-col tb-col-mb" data-order="35040.34">
                                                            <span class="tb-amount"><?php
                                                            
                                                            $broker_dealer_annual = $data['BDAF_amount']->amount; 
                                                             $traders_annual = $data['AFAT_amont']->amount * $ALL_traders->TotalTraders;

                                                              $platform_m = $data['AFPM_amount']->amount; 

                                                             $broker_dealerdue =   $broker_dealer_annual + $traders_annual + $platform_m;

                                                              echo  number_format($broker_dealerdue);
                                                             ?></span>
                                                        </td>

                                                          <?php endif; ?>



                                                            <?php if ($allpis->category  == 'ISSUINGHOUSE') : ?>

                                                        <td class="nk-tb-col tb-col-mb" data-order="35040.34">
                                                            <span class="tb-amount"><?php
                                                            
                                                            $issuing_house_annual = $data['AFIH_amount']->amount; 
                                                            

                                                              $platform_m = $data['AFPM_amount']->amount; 

                                                             $issuing_house =   $issuing_house_annual + $platform_m;
                                                             echo  number_format($issuing_house);
                                                             ?></span>
                                                        </td>

                                                          <?php endif; ?>




                                                          <td class="nk-tb-col tb-col-mb" data-order="35040.34">
                                                            <span class="tb-amount"><?php $current_pay = $Total_amountREP->toltal_payment_report; 

                                                                echo number_format($current_pay);

                                                            ?></span>
                                                        </td>


                                                           <?php if ($allpis->category  == 'BROKER') : ?>
                                                          <td class="nk-tb-col tb-col-mb" data-order="35040.34">
                                                            <span class="tb-amount"><?php 

                                                          $actual_pay =  $brokerdue -  $current_pay;
                                                           echo number_format($actual_pay);
                                                             ?></span>
                                                        </td>

                                                         <?php endif; ?>


                                                          <?php if ($allpis->category  == 'BROKER/DEALER') : ?>
                                                          <td class="nk-tb-col tb-col-mb" data-order="35040.34">
                                                            <span class="tb-amount"><?php 

                                                          $actual_pay =  $broker_dealerdue -  $current_pay;
                                                           echo number_format($actual_pay);
                                                             ?></span>
                                                        </td>

                                                         <?php endif; ?>



                                                          <?php if ($allpis->category  == 'ISSUINGHOUSE') : ?>
                                                          <td class="nk-tb-col tb-col-mb" data-order="35040.34">
                                                            <span class="tb-amount"><?php 

                                                          $actual_pay =  $issuing_house -  $current_pay;
                                                           echo number_format($actual_pay);
                                                             ?></span>
                                                        </td>

                                                         <?php endif; ?>

                                                       
                                                        
                                                         <td class="nk-tb-col tb-col-md">

                                                            <?php echo  $selected_year; ?>
                                                           
                                                        </td>

                                                         


                                                         
                                                         

                                                         
                                                       
                                                      
                                                    </tr><!-- .nk-tb-item  -->
                                           
                                           
                                       
                                        <?php endforeach; ?>
                                                </tbody>
                                            </table>
                                            </table>
                                        </div>
                                        </div><!-- .card-inner -->
                                       
                                    </div><!-- .card-inner-group -->
                                </div><!-- .card -->
                            </div><!-- .nk-block -->
                        </div>
                    </div>
                </div>





                
                <td class="nk-tb-col tb-col-md">








  <div class="modal fade" tabindex="-1" role="dialog" id="gen-report-year">
        <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
            <div class="modal-content">
                <a href="#" class="close" data-dismiss="modal"><em class="icon ni ni-cross-sm"></em></a>
                <div class="modal-body modal-body-lg">
                    <h5 class="title">Export Payment Report By Year</h5>
                    
                    <div class="tab-content">
                        <div class="tab-pane active" id="personal">
                           <form method="post" action="<?php echo URLROOT; ?>/accounts/paymentReportYearProcess">
                            <div class="row gy-4">
                              

                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label class="form-label" for="full-name">Select Year</label>
                                        <select class="form-control form-control-lg" name="report_year">
                                       
                                        <option value="2015">2014</option>
                                        <option value="2015">2015</option>
                                        <option value="2016">2016</option>
                                        <option value="2017">2017</option>
                                        <option value="2018">2018</option>
                                        <option value="2019">2019</option>
                                        <option value="2020">2020</option>
                                        <option value="2021">2021</option>
                                        <option value="2022">2022</option>
                                        <option value="2023">2023</option>
                                        <option value="2024">2024</option>
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














    <div class="modal fade" tabindex="-1" role="dialog" id="show-report-year">
        <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
            <div class="modal-content">
                <a href="#" class="close" data-dismiss="modal"><em class="icon ni ni-cross-sm"></em></a>
                <div class="modal-body modal-body-lg">
                    <h5 class="title">Change Report Year</h5>
                    
                    <div class="tab-content">
                        <div class="tab-pane active" id="personal">
                           <form method="post" action="<?php echo URLROOT; ?>/accounts/paymentReportSelectedYearProcess">
                            <div class="row gy-4">
                              

                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label class="form-label" for="full-name">Select Year</label>
                                        <select class="form-control form-control-lg" name="selected_year">
                                       
                                        <option value="2015">2014</option>
                                        <option value="2015">2015</option>
                                        <option value="2016">2016</option>
                                        <option value="2017">2017</option>
                                        <option value="2018">2018</option>
                                        <option value="2019">2019</option>
                                        <option value="2020">2020</option>
                                        <option value="2021">2021</option>
                                        <option value="2022">2022</option>
                                        <option value="2023">2023</option>
                                        <option value="2024">2024</option>
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