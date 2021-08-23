
                 <div class="nk-content nk-content-fluid">
                    <div class="container-xl wide-lg">
                        <div class="nk-content-body">
                            <div class="nk-block">
                                <div class="card card-bordered">
                                    <div class="card-aside-wrap">
                                        <div class="card-inner card-inner-lg">
                                            <div class="nk-block-head nk-block-head-lg">
                                                <div class="nk-block-between">
                                                    <div class="nk-block-head-content">
                                                        <h4 class="nk-block-title">Personal Information</h4>
                                                        <?php flash('alert_message'); ?>
                                                        <div class="nk-block-des">
                                                          
                                                        </div>
                                                    </div>
                                                    <div class="nk-block-head-content align-self-start d-lg-none">
                                                        <a href="#" class="toggle btn btn-icon btn-trigger mt-n1" data-target="userAside"><em class="icon ni ni-menu-alt-r"></em></a>
                                                    </div>
                                                </div>
                                            </div><!-- .nk-block-head -->
                                            <div class="nk-block">
                                                <div class="nk-data data-list">
                                                    <div class="data-head">
                                                        <h6 class="overline-title">Basics</h6>
                                                    </div>
                                                    <div class="data-item" >
                                                        <div class="data-col">
                                                            <span class="data-label">Full Name</span>
                                                            <span class="data-value"><?php echo $_SESSION['name']; ?></span>
                                                        </div>
                                                        <div class="data-col data-col-end"><span class="data-more"><em class="icon ni ni-forward-ios"></em></span></div>
                                                    </div><!-- data-item -->
                                                 
                                                    <div class="data-item">
                                                        <div class="data-col">
                                                            <span class="data-label">Email</span>
                                                            <span class="data-value"><?php echo $_SESSION['email']; ?></span>
                                                        </div>
                                                        <div class="data-col data-col-end"><span class="data-more disable"><em class="icon ni ni-lock-alt"></em></span></div>
                                                    </div><!-- data-item -->
                                                    <div class="data-item">
                                                        <div class="data-col">
                                                            <span class="data-label">Department</span>
                                                            <span class="data-value text-soft"><?php echo $_SESSION['department']; ?></span>
                                                        </div>
                                                        <div class="data-col data-col-end"><span class="data-more"><em class="icon ni ni-forward-ios"></em></span></div>
                                                    </div><!-- data-item -->
                                                    <div class="data-item" >
                                                        <div class="data-col">
                                                            <span class="data-label">Role</span>
                                                            <span class="data-value"><?php echo $_SESSION['role']; ?></span>
                                                        </div>
                                                        <div class="data-col data-col-end"><span class="data-more"><em class="icon ni ni-forward-ios"></em></span></div>
                                                    </div><!-- data-item -->
                                                   
                                                </div><!-- data-list -->
                                                <div class="nk-data data-list">
                                                    <div class="data-head">
                                                        <h6 class="overline-title">Security Settings</h6>
                                                    </div>
                                                     <div class="card-inner">
                                                            <div class="between-center flex-wrap g-3">
                                                                <div class="nk-block-text">
                                                                    <h6>Change Password</h6>
                                                                    <p>Set a unique password to protect your account.</p>
                                                                </div>
                                                                <div class="nk-block-actions flex-shrink-sm-0">
                                                                    <ul class="align-center flex-wrap flex-sm-nowrap gx-3 gy-2">
                                                                        <li class="order-md-last">
                                                                            <a href="#" data-toggle="modal" data-target="#profile-edit" class="btn btn-primary">Change Password</a>
                                                                        </li>
                                                                        <li>
                                                                            <em class="text-soft text-date fs-12px">Last changed: <br><span><?php echo $_SESSION['password_update']; ?></span></em>
                                                                        </li>
                                                                    </ul>
                                                                </div>
                                                            </div>
                                                        </div><!-- .card-inner -->
                                                   
                                                  
                                                </div><!-- data-list -->
                                            </div><!-- .nk-block -->
                                        </div>
                                        <div class="card-aside card-aside-left user-aside toggle-slide toggle-slide-left toggle-break-lg" data-content="userAside" data-toggle-screen="lg" data-toggle-overlay="true">
                                            <div class="card-inner-group" data-simplebar>
                                                <div class="card-inner">
                                                    <div class="user-card">
                                                        <div class="user-avatar bg-primary">
                                                           <em class="icon ni ni-user"></em>
                                                        </div>
                                                        <div class="user-info">
                                                            <span class="lead-text"><?php echo $_SESSION['name']; ?></span>
                                                            <span class="sub-text"><?php echo $_SESSION['email']; ?></span>
                                                        </div>
                                                        <div class="user-action">
                                                            <div class="dropdown">
                                                                <a class="btn btn-icon btn-trigger mr-n2" data-toggle="dropdown" href="#"><em class="icon ni ni-more-v"></em></a>
                                                                <div class="dropdown-menu dropdown-menu-right">
                                                                    <ul class="link-list-opt no-bdr">
                                                                        <li><a href="#"><em class="icon ni ni-camera-fill"></em><span>Change Photo</span></a></li>
                                                                        <li><a href="#"><em class="icon ni ni-edit-fill"></em><span>Update Profile</span></a></li>
                                                                    </ul>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div><!-- .user-card -->
                                                </div><!-- .card-inner -->
                                               
                                                <div class="card-inner p-0">
                                                    <ul class="link-list-menu">
                                                        <li><a class="active"><em class="icon ni ni-user-fill-c"></em><span>Profile Infomation</span></a></li>
                                                       <!--  <li><a href="html/user-profile-notification.html"><em class="icon ni ni-bell-fill"></em><span>Notifications</span></a></li>
                                                        <li><a href="html/user-profile-activity.html"><em class="icon ni ni-activity-round-fill"></em><span>Account Activity</span></a></li>
                                                        <li><a href="html/user-profile-setting.html"><em class="icon ni ni-lock-alt-fill"></em><span>Security Settings</span></a></li> -->
                                                    </ul>
                                                </div><!-- .card-inner -->
                                            </div><!-- .card-inner-group -->
                                        </div><!-- card-aside -->
                                    </div><!-- .card-aside-wrap -->
                                </div><!-- .card -->
                            </div><!-- .nk-block -->
                        </div>
                    </div>
                </div>
            
              



               <div class="modal fade" tabindex="-1" role="dialog" id="profile-edit">
        <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
            <div class="modal-content">
                <a href="#" class="close" data-dismiss="modal"><em class="icon ni ni-cross-sm"></em></a>
                <div class="modal-body modal-body-lg">
                    <h5 class="title">Change Password</h5>
                
                    <div class="tab-content">
                        <form action="<?php echo URLROOT; ?>/accounts/profilepasswordupdate" method="post">
                        <div class="tab-pane active" id="personal">
                            <div class="row gy-4">
                             


                                     <div class="col-md-12">
                                    <div class="form-group">
                                        <label class="form-label" for="address-l1">New Password</label>
                                        <input name="password" type="password" class="form-control form-control-lg" id="password">
                                    </div>
                                </div>




                                     <div class="col-md-12">
                                    <div class="form-group">
                                        <label class="form-label" for="address-l1">Confirm Password</label>
                                        <input name="confirm_password" type="password" class="form-control form-control-lg" id="confirm_password">
                                    </div>


                                </div>
                              
                                
                                <div class="col-12">
                                    <ul class="align-center flex-wrap flex-sm-nowrap gx-4 gy-2">
                                        <li>
                                            <button type="submit" class="btn btn-lg btn-primary">Update Profile</button>
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