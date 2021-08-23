<div class="main-content">

                <div class="page-content">
                    <div class="container-fluid">

                        <!-- start page title -->
                        <div class="row">
                            <div class="col-12">
                                <div class="page-title-box d-flex align-items-center justify-content-between">
                                    <h4 class="mb-0 font-size-18">Email Read</h4>

                                    <div class="page-title-right">
                                        <ol class="breadcrumb m-0">
                                           
                                            <li class="breadcrumb-item"><a href="<?php echo URLROOT; ?>/accounts/client_inbox">Market Broadcast</a></li>
                                            <li class="breadcrumb-item active">Email Read</li>
                                        </ol>
                                    </div>
                                    
                                </div>
                            </div>
                        </div>     
                        <!-- end page title -->

                        <div class="row mb-4">
                            

                            <div class="col-xl-12">
                                <div class="row">
                                   
                                    <div class="col-md-5">
                                        
                                    </div>
                                </div>
                                
                                <div class="card mb-0">
                                    <div class="card-body">
                                        <div class="media mb-4">
                                            <img class="d-flex mr-3 rounded-circle avatar-sm" src="<?php echo URLROOT; ?>/assets/images/profile.svg" alt="Generic placeholder image">
                                            <div class="media-body">
                                                <h4 class="font-size-16">NASD Market Operation</h4>
                                                <p class="text-muted font-size-13">marketoperation@nasdng.com</p>
                                            </div>
                                        </div>
                                        <h4 class="font-size-16">This Week's Top Stories</h4>
        
                                        <p>Dear Sir/Ma,</p>
                                        <p>Please download the attached file</p>
                                       
                                        <hr/>

                                        <div class="row">
                                            <?php  foreach($data['inbox_read'] as $inbox_read) :   ?>
                                            <div class="col-xl-2 col-6">
                                                <div class="card">
                                                    <img class="card-img-top img-fluid" src="<?php echo URLROOT; ?>/assets/images/excel-logo.jpg" alt="Card image cap">
                                                    <div class="py-2 text-center">
                                                        <a href="<?php echo URLROOT; ?>/accounts/daily_official_list/<?php echo $inbox_read->tran_date;  ?>" class="font-weight-medium">Download Daily Price List</a>
                                                    </div>
                                                </div>
                                            </div>
                                        <?php endforeach; ?>

                                          <?php  foreach($data['inbox_read2'] as $inbox_read2) :   ?>
                                            <div class="col-xl-2 col-6">
                                                <div class="card">
                                                    <img class="card-img-top img-fluid" src="<?php echo URLROOT; ?>/assets/images/excel-logo.jpg" alt="Card image cap">
                                                    <div class="py-2 text-center">
                                                         <a href="<?php echo URLROOT; ?>/accounts/trade_report/<?php echo $inbox_read2->DATE;  ?>" class="font-weight-medium">Download Trade Report</a>
                                                    </div>
                                                </div>
                                            </div>
                                              <?php endforeach; ?>
                                        </div>
    
                                        <!-- <a href="email-compose.html" class="btn btn-secondary waves-effect mt-4"><i class="mdi mdi-reply"></i> Reply</a> -->
                                    </div>
                                </div>
                                <!-- end card -->

                            </div>
                        </div>
                        <!-- end row -->

                    </div> <!-- container-fluid -->
                </div>
                <!-- End Page-content -->

             
            </div>