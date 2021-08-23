<div class="nk-app-root">
        <div class="nk-split nk-split-page nk-split-md">
            <img src="<?php echo URLROOT; ?>/assets/images/forget.jpg" width="90%">
            
            <div class="nk-split-content nk-block-area nk-block-area-column nk-auth-container bg-white">
                <div class="absolute-top-right d-lg-none p-3 p-sm-5">
                    <a href="#" class="toggle btn-white btn btn-icon btn-light" data-target="athPromo"><em class="icon ni ni-info"></em></a>
                </div>
                <div class="nk-block nk-block-middle nk-auth-body">
                    <div class="brand-logo pb-5">
                        <a href="" class="logo-link">
                            <img class=" logo-img logo-img-lg" src="<?php echo URLROOT; ?>/assets/images/nasdlogop.jpg">
                        </a>
                    </div>
                     <div class="nk-block-head">
                        <div class="nk-block-head-content">
                            <h5 class="nk-block-title">Reset password</h5>
                            <div class="nk-block-des">
                                <p>Enter your new password.</p>
                            </div>
                        </div>
                    </div><!-- .nk-block-head -->
                    <?php flash('alert_message'); ?>
                    <form  action="<?php echo URLROOT; ?>/users/reset_password/<?php echo $data['user_profile']->pass_res_token; ?>" method="post">
                        <input type="hidden" name="email" value="<?php echo $data['user_profile']->email; ?>">
                                            <input type="hidden" name="pass_res_token" value="<?php echo $data['user_profile']->pass_res_token; ?>">
                        <div class="form-group">
                            <div class="form-label-group">
                                <label class="form-label" for="default-01">New Password</label>
                               
                            </div>
                           
                            <input name="password" type="password" class="form-control form-control-lg " name="password" id="password" placeholder="Enter new password"  >
                            
                        </div><!-- .foem-group -->

                         <div class="form-group">
                            <div class="form-label-group">
                                <label class="form-label" for="default-01">Confirm Password</label>
                               
                            </div>
                           
                            <input name="password" type="password" class="form-control form-control-lg " name="password" name="password" id="confirm_password" placeholder="Confirm password" >
                            
                        </div><!-- .foem-group -->





                        
                        <div class="form-group">
                            <button class="btn btn-lg btn-primary btn-block">Submit</button>
                        </div>
                    </form><!-- form -->

       