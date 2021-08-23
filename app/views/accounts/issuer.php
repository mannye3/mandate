 <div class="nk-content nk-content-fluid">
                    <div class="container-xl wide-lg">
                        <div class="nk-content-body">
                            <div class="components-preview wide-md mx-auto">
                                <div class="nk-block-head nk-block-head-lg wide-sm">
                                 
                                    </div>
                                </div><!-- .nk-block-head -->
                                <div class="nk-block-head-content" style="margin: 0px 0px 0px 1000px ">
                                        <a href="<?php echo URLROOT; ?>/accounts/issuers" class="btn btn-outline-light bg-white d-none d-sm-inline-flex"><em class="icon ni ni-arrow-left"></em><span>Back</span></a>
                                        <a href="html/user-list-regular.html" class="btn btn-icon btn-outline-light bg-white d-inline-flex d-sm-none"><em class="icon ni ni-arrow-left"></em></a>
                                    </div>
                                <div class="nk-block nk-block-lg">
                                     <div class="nk-block nk-block-lg">
                                    <div class="nk-block-head">
                                        <div class="nk-block-head-content">
                                            <h4 class="title nk-block-title"><?php echo $data['issuer_info']->security_name; ?></h4>
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

                                               
                                            </ul>
                                            <div class="tab-content">
                                                <div class="tab-pane active" id="tabItem5">
                                                    <div class="nk-block-head">
                                    <div class="nk-block-head-content">
                                        <h5 class="nk-block-title">Organization  Information</h5> 
                                        <div class="nk-block-des" style="text-align: left;">

                                            <?php if ($_SESSION['role'] == 'Admin' || $_SESSION['role'] =='Sub_Admin') : ?>
                                          <?php if ($data['issuer_info']->issuer_status == '1') {
                                                  echo ' <span class="badge badge-sm badge-success" style="margin: -70px 0px 0px 300px">Active</span>';

                                          }  
                                          if ($data['issuer_info']->issuer_status == '2') {
                                                  echo ' <span class="badge badge-sm badge-warning"  style="margin: -70px 0px 0px 300px">Delisted</span>';
                                          }


                                        

                                           ?> <a href="#change-status" data-toggle="modal"  data-toggle="dropdown"><span class="btn btn-round btn-primary" style="margin: -70px 0px 0px 200px">Change Status</span></a>


                                          

                                            <?php endif; ?>

                                         
                                         
                                         




                            
                                        </div>
                                    </div>
                                </div><!-- .nk-block-head -->
                                <div class="nk-data data-list">
                                    <div class="data-head">
                                        <h6 class="overline-title">Basics</h6>
                                    </div>
                                    <div class="data-item"  data-toggle="modal" data-target="#profile-edit">
                                        <div class="data-col">
                                            <span class="data-label">Organization</span>
                                            <span class="data-value"><?php echo $data['issuer_info']->security_name; ?></span>
                                        </div>
                                         <?php if ($_SESSION['role'] == 'Admin' || $_SESSION['role'] =='Sub_Admin') : ?>
                                        <div class="data-col data-col-end"><span class="btn btn-round btn-secondary">Edit Details</span></div>  <?php endif; ?>
                                    </div><!-- .data-item -->
                                    <div class="data-item">
                                        <div class="data-col">
                                            <span class="data-label">Symbol</span>
                                            <span class="data-value"><?php echo $data['issuer_info']->symbol; ?></span>
                                        </div>
                                        <div class="data-col data-col-end"></div>
                                    </div><!-- .data-item -->


                                       <div class="data-item">
                                        <div class="data-col">
                                            <span class="data-label">Name Of Contact</span>
                                            <span class="data-value"><?php echo $data['issuer_info']->name_of_contact; ?></span>
                                        </div>
                                        <div class="data-col data-col-end"></div>
                                    </div><!-- .data-item -->



                                     <div class="data-item">
                                        <div class="data-col">
                                            <span class="data-label">Designation</span>
                                            <span class="data-value"><?php echo $data['issuer_info']->designation; ?></span>
                                        </div>
                                        <div class="data-col data-col-end"></div>
                                    </div><!-- .data-item -->
                                    <div class="data-item">
                                        <div class="data-col">
                                            <span class="data-label">Phone</span>
                                            <span class="data-value"><?php echo $data['issuer_info']->phone;   ?></span>
                                        </div>
                                         <div class="data-col data-col-end"></div>
                                    </div><!-- .data-item -->
                                    <div class="data-item">
                                        <div class="data-col">
                                            <span class="data-label">Mobile</span>
                                            <span class="data-value text-soft"><?php echo $data['issuer_info']->mobile;   ?></span>
                                        </div>
                                        <div class="data-col data-col-end"></div>
                                    </div><!-- .data-item -->
                                    <div class="data-item">
                                        <div class="data-col">
                                            <span class="data-label">Website</span>
                                            <span class="data-value"><?php echo $data['issuer_info']->website;   ?></span>
                                        </div>
                                        <div class="data-col data-col-end"></div>
                                    </div><!-- .data-item -->

                                      <div class="data-item">
                                        <div class="data-col">
                                            <span class="data-label">Email</span>
                                            <span class="data-value"><?php echo $data['issuer_info']->email;   ?></span>
                                        </div>
                                        <div class="data-col data-col-end"></div>
                                    </div><!-- .data-item -->

                                    <div class="data-item" data-tab-target="#address">
                                        <div class="data-col">
                                            <span class="data-label">Registras</span>
                                            <span class="data-value"><?php echo $data['issuer_info']->registras;   ?></span>
                                        </div>
                                        <div class="data-col data-col-end"></div>
                                    </div><!-- .data-item -->
                                </div><!-- .nk-data -->
                               
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















      <div class="modal fade" tabindex="-1" role="dialog" id="change-status">
                    <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
                        <div class="modal-content">
                            <a href="#" class="close" data-dismiss="modal"><em class="icon ni ni-cross-sm"></em></a>
                            <div class="modal-body modal-body-lg">
                                <h5 class="title">Change Firm Status</h5>
                                <div class="tab-content">
                            <form method="post" action="<?php echo URLROOT; ?>/accounts/change_issuer_status" >
                                    <div class="tab-pane active" id="personal">
                            <div class="row gy-4">
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label class="form-label" for="full-name">Select Status</label>
                                       <select name="issuer_status" data-msg="Required" class="form-control required" required>
                                        <option value="1">Active</option>  
                                        <option value="2">Delisted</option>  
                                                                 
                                         </select>
                                    </div>
                                </div> 


                               


                                <input type="hidden" value="<?php echo $data['issuer_info']->issuer_code; ?>" name="issuer_code" >
                               

                               



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










     <div class="modal fade" tabindex="-1" role="dialog" id="profile-edit">
        <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
            <div class="modal-content">
                <a href="#" class="close" data-dismiss="modal"><em class="icon ni ni-cross-sm"></em></a>
                <div class="modal-body modal-body-lg">
                    <h5 class="title">Update Details</h5>
                    <ul class="nk-nav nav nav-tabs">
                      
                    </ul><!-- .nav-tabs -->
                    <div class="tab-content">
                        <form action="<?php echo URLROOT; ?>/accounts/edit_issuer/<?php echo $data['issuer_info']->issuer_code; ?>" method="post">
                        <div class="tab-pane active" id="personal">
                            <div class="row gy-4">
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label class="form-label" for="full-name">Company Name</label>
                                        <input name="security_name" type="text" class="form-control form-control-lg" value="<?php echo $data['issuer_info']->security_name; ?>">
                                    </div>
                                </div>

                                  <div class="col-md-12">
                                    <div class="form-group">
                                        <label class="form-label" for="full-name">Symbol</label>
                                        <input name="symbol" type="text" class="form-control form-control-lg" value="<?php echo $data['issuer_info']->symbol; ?>">
                                    </div>
                                </div>


                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label class="form-label" for="display-name">Name Of Contact</label>
                                        <input name="name_of_contact" type="text" class="form-control form-control-lg" value="<?php echo $data['issuer_info']->name_of_contact; ?>">
                                    </div>
                                </div>

                                <input type="hidden" name="issuer_code" value="<?php echo $data['issuer_info']->issuer_code; ?>">

                              
                               

                                     <div class="col-md-12">
                                    <div class="form-group">
                                        <label class="form-label" for="address-l1">Designation</label>
                                        <input name="designation" type="text" class="form-control form-control-lg"  value="<?php echo $data['issuer_info']->designation; ?>"  id="address-l1">
                                    </div>
                                </div>


                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label class="form-label" for="address-l1">Phone</label>
                                        <input name="phone" value="<?php echo $data['issuer_info']->phone; ?>" type="text" class="form-control form-control-lg" id="address-l1">
                                    </div>
                                </div>

                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label class="form-label" for="address-l1">Mobile</label>
                                        <input name="mobile" value="<?php echo $data['issuer_info']->mobile; ?>" type="text" class="form-control form-control-lg" id="address-l1">
                                    </div>
                                </div>



                                 <div class="col-md-12">
                                    <div class="form-group">
                                        <label class="form-label" for="address-l1">Website</label>
                                        <input name="website" value="<?php echo $data['issuer_info']->website; ?>" type="text" class="form-control form-control-lg" id="address-l1">
                                    </div>
                                </div>



                                 <div class="col-md-12">
                                    <div class="form-group">
                                        <label class="form-label" for="address-l1">Email</label>
                                        <input name="email" value="<?php echo $data['issuer_info']->email; ?>" type="email" class="form-control form-control-lg" id="address-l1">
                                    </div>
                                </div>



                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label class="form-label" for="address-l1">Registras</label>
                                        <input name="registras" value="<?php echo $data['issuer_info']->registras; ?>" type="text" class="form-control form-control-lg" id="address-l1">
                                    </div>
                                </div>


                               

                                 <input name="old_name"  type="hidden" class="form-control form-control-lg" value="<?php echo $data['issuer_info']->company_name; ?>">
                              
                                
                                <div class="col-12">
                                    <ul class="align-center flex-wrap flex-sm-nowrap gx-4 gy-2">
                                        <li>
                                            <button type="submit" class="btn btn-lg btn-primary">Update</button>
                                        </li>
                                        <li>
                                            <a href="#" data-dismiss="modal" class="link link-light">Cancel</a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div><!-- .tab-pane -->
                        </form>
                      
                    </div><!-- .tab-content -->
                </div><!-- .modal-body -->
            </div><!-- .modal-content -->
        </div><!-- .modal-dialog -->
    </div><!-- .modal -->
                         







<style>
    .box{
        color: #fff;
        padding: 20px;
        display: none;
        margin-top: 20px;
    }
    .red{ background:; }
    .green{ background: ; }
   
    label{ margin-right: 15px; }
</style>
<script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
<script>


$('#yearPicker').datetimepicker({
    format      :   "YYYY",
    viewMode    :   "years", 
});
</script>