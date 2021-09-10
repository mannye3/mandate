 <div class="nk-content nk-content-fluid">
                    <div class="container-xl wide-lg">
                        <div class="nk-content-body">
                            <div class="components-preview wide-md mx-auto">
                                <div class="nk-block-head nk-block-head-lg wide-sm">
                                 
                                    </div>
                                </div><!-- .nk-block-head -->
                                <div class="nk-block nk-block-lg">
                                    <div class="nk-block-head">
                                        <div class="nk-block-head-content">
                                            <h4 class="title nk-block-title">Add Participant</h4>
                                           
                                        </div>
                                    </div>
                                    <div class="card card-bordered">
                                        <div class="card-inner">
                                            <form method="post" action="<?php echo URLROOT; ?>/accounts/add_mandate"   class="nk-wizard nk-wizard-simple is-alter">
                                               
                                         
                                                <div class="card card-bordered">
                                        <div class="nk-kycfm">
                                            <div class="nk-kycfm-head">
                                                <div class="nk-kycfm-count">01</div>
                                                <div class="nk-kycfm-title">
                                                    <h5 class="title">Organization Details</h5>
                                                  
                                                </div>
                                            </div><!-- .nk-kycfm-head -->
                                            <div class="nk-kycfm-content">
                                                <div class="nk-kycfm-note">
                                                    
                                                </div>
                                                <div class="row g-4">
                                                      <div class="col-md-6">
                                                            <div class="form-group">
                                                                <label class="form-label" for="fw-first-name">Company Name</label>
                                                                <div class="form-control-wrap">
                                                                    <input name="company_name" type="text" data-msg="Required" class="form-control required" id="fw-first-name" name="fw-first-name" required>
                                                                </div>
                                                            </div>
                                                        </div>

                                                         <div class="col-md-6">
                                                            <div class="form-group">
                                                                <label class="form-label" for="fw-first-name">Company Code</label>
                                                                <div class="form-control-wrap">
                                                                    <input name="mandate_code" type="text" data-msg="Required" class="form-control required" id="fw-first-name" name="fw-first-name" required>
                                                                </div>
                                                            </div>
                                                        </div>

                                                         <div class="col-md-6">
                                                            <div class="form-group">
                                                                <label class="form-label" for="fw-last-name">Category</label>
                                                                <div class="form-control-wrap">
                                                                    <select name="category" data-msg="Required" class="form-control required" required>
                                                                                                <?php foreach($data['load_cat'] as $load_cat) : ?>
                                                                            <option value="<?php echo $load_cat->cat_title; ?>"><?php echo $load_cat->cat_title; ?></option>
                                                                            <?php endforeach; ?>
                                                                    </select>

                                                                   <input type="hidden" name="mandate_status" value="1">
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="col-md-6">
                                                            <div class="form-group">
                                                                <label class="form-label" for="fw-email-address">Email Address</label>
                                                                <div class="form-control-wrap">
                                                                    <input name="email" type="text" data-msg="Required" data-msg-email="Wrong Email" class="form-control required email" id="fw-email-address" name="fw-email-address" required>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="col-md-6">
                                                            <div class="form-group">
                                                                <label class="form-label" for="fw-mobile-number">Mobile Number</label>
                                                                <div class="form-control-wrap">
                                                                    <input name="phone" type="text" data-msg="Required" class="form-control required" id="fw-mobile-number" name="fw-mobile-number" required>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="col-md-6">
                                                            <div class="form-group">
                                                                <label class="form-label" for="fw-mobile-number">Website</label>
                                                                <div class="form-control-wrap">
                                                                    <input name="website" type="text"  class="form-control" id="fw-mobile-number" name="fw-mobile-number">
                                                                </div>
                                                            </div>
                                                        </div>
                                                         <div class="col-md-4">
                                                            <div class="form-group">
                                                                <label class="form-label" for="fw-mobile-number">Rec Number </label>
                                                                <div class="form-control-wrap">
                                                                    <input name="rec_number" type="text" class="form-control" id="fw-mobile-number" name="fw-mobile-number" >
                                                                </div>
                                                            </div>
                                                        </div>
                                                         <div class="col-md-4">
                                                            <div class="form-group">
                                                                <label class="form-label" for="fw-mobile-number">Date Of Incorporation </label>
                                                                <div class="form-control-wrap">
                                                                    <input name="date_of_incorporation" type="date"  class="form-control " id="fw-mobile-number" >
                                                                </div>
                                                            </div>
                                                        </div>
                                                         <div class="col-md-4">
                                                            <div class="form-group">
                                                                <label class="form-label" for="fw-mobile-number">Sec Registered</label>
                                                                <div class="form-control-wrap">
                                                                    <select name="sec_registered" class="form-control" required="">
                                                                        <option value="Yes">Yes</option>
                                                                        <option value="No">No</option>
                                                                    </select>
                                                                   
                                                                </div>
                                                            </div>
                                                        </div>
                                                     

                                                        <hr>
                                                            <div class="col-md-4">
                                                        <div class="form-group">
                                                            <div class="form-label-group">
                                                                <label class="form-label">Principal Contact Name <span class="text-danger">*</span></label>
                                                            </div>
                                                            <div class="form-control-group">
                                                                <input type="text" name="principal_contact_name" class="form-control form-control-lg">
                                                            </div>
                                                        </div>
                                                    </div><!-- .col -->
                                                    <div class="col-md-4">
                                                        <div class="form-group">
                                                            <div class="form-label-group">
                                                                <label class="form-label">Principal Contact Phone</label>
                                                            </div>
                                                            <div class="form-control-group">
                                                                <input type="text" name="principal_contact_phone" class="form-control form-control-lg">
                                                            </div>
                                                        </div>
                                                    </div><!-- .col -->


                                                      <div class="col-md-4">
                                                        <div class="form-group">
                                                            <div class="form-label-group">
                                                                <label class="form-label">Principal Contact Email</label>
                                                            </div>
                                                            <div class="form-control-group">
                                                                <input type="text" name="principal_contact_email" class="form-control form-control-lg">
                                                            </div>
                                                        </div>
                                                    </div>

                                                        <div class="col-md-4">
                                                        <div class="form-group">
                                                            <div class="form-label-group">
                                                                <label class="form-label">Enquiries Contact Name<span class="text-danger">*</span></label>
                                                            </div>
                                                            <div class="form-control-group">
                                                                <input type="text" name="enquiries_contact_name" class="form-control form-control-lg">
                                                            </div>
                                                        </div>
                                                    </div><!-- .col -->
                                                    <div class="col-md-4">
                                                        <div class="form-group">
                                                            <div class="form-label-group">
                                                                <label class="form-label">Enquiries Contact Email</label>
                                                            </div>
                                                            <div class="form-control-group">
                                                                <input type="text" name="enquiries_contact_email" class="form-control form-control-lg">
                                                            </div>
                                                        </div>
                                                    </div><!-- .col -->


                                                      <div class="col-md-4">
                                                        <div class="form-group">
                                                            <div class="form-label-group">
                                                                <label class="form-label">Enquiries Contact Phone</label>
                                                            </div>
                                                            <div class="form-control-group">
                                                                <input type="text" name="enquiries_contact_phone" class="form-control form-control-lg">
                                                            </div>
                                                        </div>
                                                    </div>



                                                    <div class="col-md-4">
                                                        <div class="form-group">
                                                            <div class="form-label-group">
                                                                <label class="form-label">Compliance Contact Name<span class="text-danger">*</span></label>
                                                            </div>
                                                            <div class="form-control-group">
                                                                <input type="text" name="compliance_contact_name" class="form-control form-control-lg">
                                                            </div>
                                                        </div>
                                                    </div><!-- .col -->
                                                    <div class="col-md-4">
                                                        <div class="form-group">
                                                            <div class="form-label-group">
                                                                <label class="form-label">Compliance Contact Email</label>
                                                            </div>
                                                            <div class="form-control-group">
                                                                <input type="text" name="compliance_contact_email" class="form-control form-control-lg">
                                                            </div>
                                                        </div>
                                                    </div><!-- .col -->


                                                      <div class="col-md-4">
                                                        <div class="form-group">
                                                            <div class="form-label-group">
                                                                <label class="form-label">Compliance Contact Phone</label>
                                                            </div>
                                                            <div class="form-control-group">
                                                                <input type="text" name="compliance_contact_phone" class="form-control form-control-lg">
                                                            </div>
                                                        </div>
                                                    </div>


                                                    <div class="col-md-6">
                                                        <div class="form-group">
                                                            <div class="form-label-group">
                                                                <label class="form-label">Settlement Bank Name</label>
                                                            </div>
                                                            <div class="form-control-group">
                                                                <input type="text" name="settlement_bank_name" class="form-control form-control-lg">
                                                            </div>
                                                        </div>
                                                    </div>



                                                    <div class="col-md-6">
                                                        <div class="form-group">
                                                            <div class="form-label-group">
                                                                <label class="form-label">Settlement Bank Branch</label>
                                                            </div>
                                                            <div class="form-control-group">
                                                                <input type="text" name="settlement_bank_branch" class="form-control form-control-lg">
                                                            </div>
                                                        </div>
                                                    </div>



                                                    <div class="col-md-6">
                                                        <div class="form-group">
                                                            <div class="form-label-group">
                                                                <label class="form-label">Settlement Bank Account Name</label>
                                                            </div>
                                                            <div class="form-control-group">
                                                                <input type="text" name="settlement_bank_account_name" class="form-control form-control-lg">
                                                            </div>
                                                        </div>
                                                    </div>



                                                    <div class="col-md-6">
                                                        <div class="form-group">
                                                            <div class="form-label-group">
                                                                <label class="form-label">Settlement Bank Account Number</label>
                                                            </div>
                                                            <div class="form-control-group">
                                                                <input type="text" name="settlement_bank_account_number" class="form-control form-control-lg">
                                                            </div>
                                                        </div>
                                                    </div>

                                              
                                         

                                            <div class="col-md-12">
                                                            <div class="form-group">
                                                                <label class="form-label" for="fw-nationality">Office Address</label>
                                                                <div class="form-control-wrap">
                                                                    
                                                            <textarea name="address" class="form-control"></textarea>
                                                                        
                                                                    
                                                                </div>
                                                            </div>
                                                        </div><!-- .col -->
                                                   
                                                  
                                                    
                                                   
                                                </div><!-- .row -->
                                            </div><!-- .nk-kycfm-content -->
                                          
                                            
                                           
                                            <div class="nk-kycfm-footer">
                                                
                                                
                                                <div class="nk-kycfm-action pt-2">
                                                    <button type="submit" class="btn btn-lg btn-primary">Submit And Continue</button>
                                                </div>
                                            </div><!-- .nk-kycfm-footer -->
                                        </div><!-- .nk-kycfm -->
                                    </div>
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


