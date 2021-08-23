

            <!-- ============================================================== -->
            <!-- Start right Content here -->
            <!-- ============================================================== -->
            <div class="main-content">

                <div class="page-content">
                    <div class="container-fluid">

                        <!-- start page title -->
                        <div class="row">
                            <div class="col-12">
                                <div class="page-title-box d-flex align-items-center justify-content-between">
                                    <h4 class="mb-0 font-size-18">Trades</h4>

                                    
                                    
                                </div>
                            </div>
                        </div>     
                        <!-- end page title -->

                       
                        <div class="row">
                            <div class="col-12">
                                <div class="card">
                                    <div class="card-body">
        
                                           <?php flash('alert_message'); ?>
                                            <div class="col-lg-6">
                               
                                   
                                       
        
                                        
                             
                            </div>
                            <br>
        
                                        <div class="table-responsive">
                                    <table id="datatable-buttons" class="table table-striped table-bordered">
                                             <thead>
                                                    <tr>
                                                        <th scope="col"  style="width: 50px;">
                                                           #
                                                        </th>
                                                      
                                                        <th scope="col">Seller Name</th>  
                                                        <th scope="col">Seller Firm</th>
                                                        <th scope="col">Buy Firm</th>
                                                        <th scope="col">Buy Dealer</th>
                                                        <th scope="col">Quantity</th>
                                                         <th scope="col">Price</th>
                                                          <th scope="col">Tran Date</th>
                                                       <!--  <th scope="col">Status</th> -->
                                                       
                                                    </tr>
                                                </thead>
        
        
                                             <tbody>
                                                   <?php  $count = 0; foreach($data['get_report_daily'] as $get_report_daily) :  $count++; ?>
                                                    <tr>
                                                        <td><?php echo $count; ?></td>
                                                       
                                                       


                                            <td><?php echo $get_report_daily->BUYER_NAME; ?> </td>
                                            <td><?php echo $get_report_daily->FROM_MEMBER; ?></td>
                                            <td><?php echo $get_report_daily->SELLER_NAME; ?></td>  
                                            <td><?php echo $get_report_daily->TO_MEMBER; ?></td>
                                            <td><?php echo $get_report_daily->VOLUME; ?></td>
                                            <td><?php echo $get_report_daily->PRICE / 10000; ?></td>
                                            <td> <?php echo date('jS \ F Y ', strtotime($get_report_daily->TRADE_DATE));?></td>

                                                       <!--  <td>
                                                            <i class="mdi mdi-checkbox-blank-circle text-success mr-1"></i> Confirm
                                                        </td> -->
                                                      
                                                    </tr>
                                                   <?php endforeach; ?>
                                                </tbody>
                                        </table>
                                    </div>
                                    </div>
                                </div>
                            </div> <!-- end col -->
                        </div> <!-- end row -->




                         <!-- ADD NEW ACCOUNT MODAL -->
                            <div class="modal fade" id="exampleModal5">
                                <div class="modal-dialog modal-dialog-centered">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h5 class="modal-title">Add New Account</h5>
                                            <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span></button>
                                        </div>
                                        <div class="modal-body">
                                             <form class="needs-validation" method="post" action="<?php echo URLROOT; ?>/accounts/add_client" novalidate>
                                            <div class="row">
                                                <div class="col-md-12 mb-3">
                                                    <label for="validationCustom01">Full Name </label>
                                                    <input type="text" name="client_name" class="form-control" required>
                                                    <div class="valid-feedback">
                                                        Looks good!
                                                    </div>
                                                </div>
                                              
                                                 <div class="col-md-12 mb-3">
                                                    <label for="validationCustom01">Email</label>
                                                    <input name="client_email" type="email" class="form-control" required>
                                                    <div class="valid-feedback">
                                                        Looks good!
                                                    </div>
                                                </div>
                                                <div class="col-md-12 mb-3">
                                                    <label for="validationCustom02">Phone</label>
                                                    <input name="client_phone" type="number" class="form-control"   required>
                                                    <div class="valid-feedback">
                                                        Looks good!
                                                    </div>
                                                </div>
                                                

                                               <input type="hidden" value="<?php echo $_SESSION['symbol']; ?>" name="symbol">

                                                
                                               
                                            </div>
                                            
                                           
                                          
                                        </div>
                                        <div class="modal-footer">
                                            
                                            <button type="submit" class="btn btn-outline-danger waves-effect waves-light" data-dismiss="modal">Close</button>
                                             <button type="submit" class="btn btn-outline-success waves-effect waves-light">Save</button>
                                        </div>
                                    </div>
                                    </form>
                                </div>
                            </div>

                    </div> <!-- container-fluid -->
                </div>
                <!-- End Page-content -->

           
