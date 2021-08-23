

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
                                    <h4 class="mb-0 font-size-18">Issuers</h4>

                                    
                                    
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
                               
                                   
                                       
        
                                        <div class="button-items">
                                          <button data-toggle="modal" data-target="#exampleModal5" data-whatever="@mdo" type="button" class="btn btn-outline-primary waves-effect waves-light">Add New Issuer</button> 
                                           
                                           
                                        </div>
                             
                            </div>
                            <br>
        
                                        <table id="datatable-buttons" class="table table-striped table-bordered dt-responsive nowrap" style="border-collapse: collapse; border-spacing: 0; width: 100%;">
                                             <thead>
                                                    <tr>
                                                        <th scope="col"  style="width: 50px;">
                                                           #
                                                        </th>
                                                        <th scope="col"  style="width: 60px;"></th>
                                                        <th scope="col">Symbol & Username</th>
                                                        <th scope="col">Company</th>
                                                        <th scope="col">Phone</th>
                                                        <th scope="col">Email</th>
                                                        <th scope="col">Reg Date</th>
                                                       <!--  <th scope="col">Status</th> -->
                                                        <th scope="col">Action</th>
                                                    </tr>
                                                </thead>
        
        
                                             <tbody>
                                                   <?php  $count = 0; foreach($data['All_Issuers'] as $All_Issuers) :  $count++; ?>
                                                    <tr>
                                                        <td><?php echo $count; ?></td>
                                                        <td>
                                                            <img src="<?php echo URLROOT; ?>//profile_pic/<?php echo $All_Issuers->logo; ?>" alt="user" class="avatar-xs rounded-circle" />
                                                        </td>
                                                        <td>
                                                            <p class="mb-1 font-size-12"><?php echo $All_Issuers->symbol; ?></p>
                                                            <h5 class="font-size-15 mb-0"><?php echo $All_Issuers->username; ?></h5>
                                                        </td>
                                                        <td><?php echo $All_Issuers->company; ?></td>
                                                        <td><?php echo $All_Issuers->phone; ?></td>
                                                        <td><?php echo $All_Issuers->email; ?></td>
                                                        
                                                        <td>
                                                           <?php echo $All_Issuers->reg_date; ?>
                                                        </td>
                                                       <!--  <td>
                                                            <i class="mdi mdi-checkbox-blank-circle text-success mr-1"></i> Confirm
                                                        </td> -->
                                                        <td>
                                                          <a href="<?php echo URLROOT; ?>/admins/edit_issuer/<?php echo $All_Issuers->id; ?>">  <button type="button" class="btn btn-outline-success btn-sm"> <i class="fa fa-edit"></i> Edit</button></a> 
                                                             <br>

                                                             <form action="<?php echo URLROOT; ?>/admins/delete_issuer/<?php echo $All_Issuers->id; ?>" method="POST">
                                                                <input type="hidden" name="id" id="p_id" value="<?php echo $All_Issuers->id; ?>">
                                                                <button class="btn btn-outline-danger btn-sm" name="archive" type="submit" onclick="archiveFunction()">
                                                                    <i class="fa fa-trash"></i>
                                                                        Delete
                                                                </button>
                                                        </form>
                                                           
                                                           
                                                        </td>
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
                                <div class="modal-dialog modal-dialog-centered">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h5 class="modal-title">Add New Account</h5>
                                            <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span></button>
                                        </div>
                                        <div class="modal-body">
                                             <form class="needs-validation" method="post" action="<?php echo URLROOT; ?>/admins/add_issuer" novalidate>
                                            <div class="row">
                                                <div class="col-md-12 mb-3">
                                                    <label for="validationCustom01">Company Name</label>
                                                    <input type="text" name="company" class="form-control" required>
                                                    <div class="valid-feedback">
                                                        Looks good!
                                                    </div>
                                                </div>
                                                <div class="col-md-12 mb-3">
                                                    <label for="validationCustom02">Symbol</label>
                                                    <input type="text" name="symbol" class="form-control" id="validationCustom02"  required>
                                                    <div class="valid-feedback">
                                                        Looks good!
                                                    </div>
                                                </div>
                                                 <div class="col-md-12 mb-3">
                                                    <label for="validationCustom01">Email</label>
                                                    <input name="email" type="email" class="form-control" required>
                                                    <div class="valid-feedback">
                                                        Looks good!
                                                    </div>
                                                </div>
                                                <div class="col-md-12 mb-3">
                                                    <label for="validationCustom02">Phone</label>
                                                    <input name="phone" type="number" class="form-control"   required>
                                                    <div class="valid-feedback">
                                                        Looks good!
                                                    </div>
                                                </div>
                                                 <div class="col-md-12 mb-3">
                                                    <label for="validationCustom01">Website</label>
                                                    <input name="website" type="text" class="form-control" required>
                                                    <div class="valid-feedback">
                                                        Looks good!
                                                    </div>
                                                </div>
                                                <div class="col-md-12 mb-3">
                                                    <label for="validationCustom02">Address</label>
                                                    <textarea name="address" type="text" class="form-control" id="validationCustom02"  required></textarea>
                                                   
                                                    <div class="valid-feedback">
                                                        Looks good!
                                                    </div>
                                                </div>
                                               
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

           
