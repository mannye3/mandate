

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
                                    <h4 class="mb-0 font-size-18">Sell</h4>

                                    
                                    
                                </div>
                            </div>
                        </div>     
                        <!-- end page title -->

                       
                        <div class="row">
                            <div class="col-12">
                                <div class="card">
                                    <div class="card-body">      
                                            <div class="col-lg-6">
                                   
                            </div>
                         
        
                                        <table id="datatable-buttons" class="table table-striped table-bordered dt-responsive nowrap" style="border-collapse: collapse; border-spacing: 0; width: 100%;">
                                             <thead>
                                                    <tr>
                                                        <th scope="col"  style="width: 50px;">
                                                           #
                                                        </th>
                                                        <th scope="col">Trade Date</th>
                                                        <th scope="col">Volume</th>
                                                        <th scope="col">Price</th>
                                                        <th scope="col">Value</th>
                                                        <th scope="col">From Member</th>
                                                       
                                                      
                                                    
                                                    </tr>
                                                </thead>
        
        
                                             <tbody>
                                                   <?php  $count = 0; foreach($data['get_report'] as $get_report) :  $count++; ?>
                                                    <tr>
                                                        <td><?php echo $count; ?></td>
                                                         <td>
                                                            <?php echo date('jS \ F Y ', strtotime($get_report->TRADE_DATE));?>
                                                          
                                                        </td>
                                                       
                                                        
                                                        <td> <?php echo number_format($get_report->VOLUME) ?></td>

                                                        <td><?php echo $get_report->PRICE / 10000; ?></td>
                                                        <td>
                                                            <?php echo number_format($get_report->TOTAL_VALUE/ 10000) ?>
                                                          
                                                        </td>
                                                        
                                                          <td><?php echo $get_report->FROM_MEMBER; ?></td>
                                                        
                                                       
                                                       <!--  <td>
                                                            <i class="mdi mdi-checkbox-blank-circle text-success mr-1"></i> Confirm
                                                        </td> -->
                                                       
                                                    </tr>
                                                   <?php endforeach; ?>
                                                </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div> <!-- end col -->
                        </div> <!-- end row -->




                         <!-- ADD NEW ACCOUNT MODAL -->
                            <div class="modal fade" id="exampleModal5">
                               
                            </div>

                    </div> <!-- container-fluid -->
                </div>
                <!-- End Page-content -->

           
