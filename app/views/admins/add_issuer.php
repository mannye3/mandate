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
                                    <h4 class="mb-0 font-size-18">Add New Issuer</h4>

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
                                <div class="card">
                                    <div class="card-body">
                                          <?php flash('alert_message'); ?>
                                        <!-- <h4 class="header-title">Bootstrap Validation - Normal</h4>
                                        <p class="card-title-desc">For custom Bootstrap form validation messages, you’ll need to add the <code>novalidate</code> boolean attribute to your <code>&lt;form&gt;</code>.</p> -->
                                        <br>
                                        <form class="needs-validation" method="post" action="<?php echo URLROOT; ?>/admins/add_issuer" novalidate>
                                            <div class="row">
                                                <div class="col-md-6 mb-3">
                                                    <label for="validationCustom01">Company Name</label>
                                                    <input type="text" name="company" class="form-control" required>
                                                    <div class="valid-feedback">
                                                        Looks good!
                                                    </div>
                                                </div>
                                                <div class="col-md-6 mb-3">
                                                    <label for="validationCustom02">Symbol</label>
                                                    <input type="text" name="symbol" class="form-control" id="validationCustom02"  required>
                                                    <div class="valid-feedback">
                                                        Looks good!
                                                    </div>
                                                </div>
                                                 <div class="col-md-6 mb-3">
                                                    <label for="validationCustom01">Email</label>
                                                    <input name="email" type="email" class="form-control" required>
                                                    <div class="valid-feedback">
                                                        Looks good!
                                                    </div>
                                                </div>
                                                <div class="col-md-6 mb-3">
                                                    <label for="validationCustom02">Phone</label>
                                                    <input name="phone" type="number" class="form-control"   required>
                                                    <div class="valid-feedback">
                                                        Looks good!
                                                    </div>
                                                </div>
                                                 <div class="col-md-6 mb-3">
                                                    <label for="validationCustom01">Website</label>
                                                    <input name="website" type="text" class="form-control" required>
                                                    <div class="valid-feedback">
                                                        Looks good!
                                                    </div>
                                                </div>
                                                <div class="col-md-6 mb-3">
                                                    <label for="validationCustom02">Address</label>
                                                    <input name="address" type="text" class="form-control" id="validationCustom02"  required>
                                                    <div class="valid-feedback">
                                                        Looks good!
                                                    </div>
                                                </div>
                                               
                                            </div>
                                            
                                           
                                            <button class="btn btn-primary" type="submit">Submit form</button>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- end row -->

                       

                    </div> <!-- container-fluid -->
                </div>
                <!-- End Page-content -->

                
