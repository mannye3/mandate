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
                                <p>If you forgot your password, well, then we’ll email you instructions to reset your password.</p>
                            </div>
                        </div>
                    </div><!-- .nk-block-head -->
                    <?php flash('alert_message'); ?>
                    <form  action="<?php echo URLROOT; ?>/users/forget_password" method="post">
                        <div class="form-group">
                            <!-- <div class="form-label-group">
                                <label class="form-label" for="default-01">Email</label>
                                <a class="link link-primary link-sm" href="#">Need Help?</a>
                            </div> -->
                             <p style=" color: red;"><?php echo $data['email_err']; ?></p>
                            <input type="text" name="email" class="form-control form-control-lg <?php echo (!empty($data['email_err'])) ? 'is-invalid' : ''; ?>" id="default-01" placeholder="Enter your email address">
                        </div>
                        <div class="form-group">
                            <button class="btn btn-lg btn-primary btn-block">Send Reset Link</button>
                        </div>
                    </form><!-- form -->

                    <div class="form-note-s2 pt-5">
                        <a href="<?php echo URLROOT; ?>/users/login"><strong>Return to login</strong></a>
                    </div>
                    
                    
               
















































