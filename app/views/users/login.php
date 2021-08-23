

<body class="nk-body npc-crypto bg-white pg-auth">
    <!-- app body @s -->
    <div class="nk-app-root">
        <div class="nk-split nk-split-page nk-split-md">
            <img src="<?php echo URLROOT; ?>/assets/images/had.jpg" width="90%">
            
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
                            <h5 class="nk-block-title">Sign-In</h5>
                            <div class="nk-block-des">
                                <p>Access the E-Mandate portal using your email and password.</p>
                            </div>
                        </div>
                    </div><!-- .nk-block-head -->
                    <?php flash('alert_message'); ?>
                    <form action="<?php echo URLROOT; ?>/users" method="post">
                        <div class="form-group">
                            <div class="form-label-group">
                                <label class="form-label" for="default-01">Email</label>
                               
                            </div>
                           
                            <input name="email" type="email" class="form-control form-control-lg " id="default-01" placeholder="Enter your email address" value="<?php echo $data['email']; ?>" >
                              <p style=" color: red;"><?php echo $data['email_err']; ?></p>
                        </div><!-- .foem-group -->
                        <div class="form-group">
                            <div class="form-label-group">
                                <label class="form-label" for="password">Password</label>
                                <a class="link link-primary link-sm" tabindex="-1" href="<?php echo URLROOT; ?>/users/forget_password">Forgot Password?</a>
                            </div>
                            <div class="form-control-wrap">
                                <a tabindex="-1" href="#" class="form-icon form-icon-right passcode-switch" data-target="password">
                                    <em class="passcode-icon icon-show icon ni ni-eye"></em>
                                    <em class="passcode-icon icon-hide icon ni ni-eye-off"></em>
                                </a>
                              
                                <input type="password" name="password" class="form-control form-control-lg " id="password" placeholder="Enter your password">
                                <p style=" color: red;"><?php echo $data['password_err']; ?></p>
                            </div>
                        </div><!-- .foem-group -->
                        <div class="form-group">
                            <button class="btn btn-lg btn-primary btn-block">Sign in</button>
                        </div>
                    </form><!-- form -->
                    
                    
                </div><!-- .nk-block -->
               




  