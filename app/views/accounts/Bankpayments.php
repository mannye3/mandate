 <div class="nk-content nk-content-fluid">
                    <div class="container-xl wide-lg">
                        <div class="nk-content-body">
                             <div class="nk-block-head nk-block-head-sm">
                                <div class="nk-block-between">
                                    <div class="nk-block-head-content">
                                        <h3 class="nk-block-title page-title">Bank Payment</h3>
                                        
                                    </div><!-- .nk-block-head-content -->
                                    <div class="nk-block-head-content">
                                        <div class="toggle-wrap nk-block-tools-toggle">
                                            <a href="#" class="btn btn-icon btn-trigger toggle-expand mr-n1" data-target="pageMenu"><em class="icon ni ni-menu-alt-r"></em></a>
                                            <div class="toggle-expand-content" data-content="pageMenu">
                                              
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
                                                                #
                                                            </div>
                                                        </th>
                                                        <th class="nk-tb-col"><span class="sub-text">COMPANY</span></th>
                                                      
                                                        <th class="nk-tb-col tb-col-md"><span class="sub-text">AMOUNT</span></th>
                                                        <th class="nk-tb-col tb-col-mb"><span class="sub-text">ISSUE DATE</span></th>
                                                        <th class="nk-tb-col tb-col-md"><span class="sub-text">DUE DATE</span></th>

                                
                                                      
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                     <?php $count = 0;  foreach($data['AllBankpay'] as $AllBankpay) : $count++; ?>

                                                    <tr class="nk-tb-item">
                                                        <td class="nk-tb-col nk-tb-col-check">
                                                            <div class="nk-tnx-type-icon">
                                                              <?php echo $count;  ?>
                                                            </div>
                                                        </td>
                                                        <td class="nk-tb-col">
                                                            <div class="user-card">
                                                                
                                                                <div class="nk-tnx-type-text">
                                                                <span class="tb-lead"><?php echo $AllBankpay->company_name; ?></span>
                                                               
                                                            </div>
                                                            </div>
                                                        </td>


                                                       


                                                         <td class="nk-tb-col tb-col-mb" data-order="35040.34">
                                                            <span class="tb-amount">₦<?php echo number_format($AllBankpay->amount); ?></span>
                                                        </td>
                                                        <td class="nk-tb-col tb-col-mb" data-order="35040.34">
                                                            <span class="tb-amount"><?php echo $AllBankpay->paid_date; ?></span>
                                                        </td>

                                                         <td class="nk-tb-col tb-col-mb" data-order="35040.34">
                                                            <span class="tb-amount"><?php echo $AllBankpay->created_at; ?></span>
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


