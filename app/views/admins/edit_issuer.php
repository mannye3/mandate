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
                                    <h4 class="mb-0 font-size-18">Edit Issuer</h4>

                                   <!--  <div class="page-title-right">
                                        <ol class="breadcrumb m-0">
                                            <li class="breadcrumb-item"><a href="javascript: void(0);">Apaxy</a></li>
                                            <li class="breadcrumb-item"><a href="javascript: void(0);">Forms</a></li>
                                            <li class="breadcrumb-item active">Form Validation</li>
                                        </ol> -->
                                    </div>
                                    
                                </div>
                            </div>
                        </div>     
                        <!-- end page title -->

                        <div class="row">
                            <div class="col-lg-12">
                                <div class="contentbar">
                <!-- Start row -->
                <div class="row">
                    <!-- Start col -->
                    <div class="col-lg-4 col-xl-4">
                        <div class="card m-b-30">
                            <div class="card-body text-center">
                                <div class="user-slider">
                                    <div class="user-slider-item">
                                        <img src="<?php echo URLROOT; ?>/profile_pic/<?php echo $data['issuer_info']->logo; ?>" alt="avatar" width="100px" class="rounded-circle mt-3 mb-4">
                                        <h5><?php echo $data['issuer_info']->username; ?></h5>
                                         <p><?php echo $data['issuer_info']->symbol; ?></p>
                                        <p><?php echo $data['issuer_info']->company; ?></p>
                                        <p><?php echo $data['issuer_info']->address; ?></p>
                                    </div>
                                   
                                   
                                </div>                                        
                            </div>
                           <!--  <div class="card-footer text-center">
                                <div class="row">
                                    <div class="col-6 border-right">
                                        <p class="my-2">Follow</p>
                                    </div>
                                    <div class="col-6">
                                        <p class="my-2">Message</p>
                                    </div>
                                </div>
                            </div> -->
                        </div>
                    </div> 
                    <!-- End col -->
                    <!-- Start col -->
                    <div class="col-lg-8">
                        <div class="card m-b-30">
                            <div class="card-header">
                              
                            </div>
                             <div class="card-body">
                               
                               
                               
                                 <form id="login-form" action="<?php echo URLROOT; ?>/admins/edit_issuer/<?php echo $data['issuer_info']->id; ?>" method="post">
                                    <div class="form-row">
                                        <div class="form-group col-md-6">
                                            <label for="inputEmail4">Symbol</label>
                                            <input  name="symbol" class="form-control" value="<?php echo $data['issuer_info']->symbol; ?>">
                                        </div>
                                        <div class="form-group col-md-6">
                                            <label for="inputEmail4">Username</label>
                                            <input  name="username" class="form-control"   value="<?php echo $data['issuer_info']->username; ?>">
                                        </div>
                                        <div class="form-group col-md-6">
                                            <label for="inputEmail4">Email</label>
                                            <input type="email" name="email" class="form-control" id="inputEmail4" placeholder="Email" value="<?php echo $data['issuer_info']->email; ?>">
                                        </div>
                                        <div class="form-group col-md-6">
                                            <label for="inputEmail4">Phone</label>
                                            <input type="number" name="phone" class="form-control" id="inputEmail4" placeholder="Phone" value="<?php echo $data['issuer_info']->phone; ?>">
                                        </div>
                                        <!-- <div class="form-group col-md-6">
                                            <label for="inputPassword4">Password</label>
                                            <input type="password" class="form-control" id="inputPassword4" placeholder="Password">
                                        </div> -->
                                    </div>
                                    <div class="form-group">
                                        <label for="inputAddress">Company</label>
                                        <input name="company" value="<?php echo $data['issuer_info']->company; ?>" type="text" class="form-control" id="inputAddress" placeholder="Company">
                                    </div>
                                    <div class="form-group">
                                        <label for="inputAddress">Website</label>
                                        <input name="website" value="<?php echo $data['issuer_info']->website; ?>"  type="text" class="form-control" id="inputAddress" placeholder="Enter Website">
                                    </div>
                                    <div class="form-group">
                                        <label for="inputAddress2">Address </label>
                                        <textarea class="form-control"   name="address"><?php echo $data['issuer_info']->address; ?></textarea>
                                      
                                    </div>

                                    <div class="form-group col-md-12">
                                            <label for="inputPassword4">Password</label>
                                            <input   name="password" type="password" class="form-control" id="password">
                                        </div>
                                  
                                    <button type="submit" class="btn btn-primary">Submit</button>
                                </form>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-4">
                        
                    </div>

                     <div class="col-lg-8">
                        <div class="card m-b-30">
                            <div class="card-header">
                                <h5 class="card-title">Update Issuer Logo</h5>
                            </div>
                             <div class="card-body">
                                <?php flash('alert_message'); ?>


                               
                                 <form id="login-form" action="<?php echo URLROOT; ?>/admins/updateissuerlogo" method="post" enctype="multipart/form-data">

                                     <div class="form-group row">
                                       
                                        <div class="col-sm-12">
                                            <input  name="id" type="hidden" class="form-control" value="<?php echo $data['issuer_info']->id; ?>">
                                             <input type="file" name="file" class="dropify" data-height="300"> 
                                        </div>
                                    </div>
                                   
                                 
                                   
                                    <button type="submit" name="submit" class="btn btn-primary">Submit</button>
                                </form>
                            </div>
                        </div>
                    </div>
                    <!-- End col -->
                    <!-- Start col -->
                   
                    <!-- End col -->
                </div> <!-- End row -->
            </div>
                            </div>
                        </div>
                        <!-- end row -->

                       

                    </div> <!-- container-fluid -->
                </div>
                <!-- End Page-content -->

                
