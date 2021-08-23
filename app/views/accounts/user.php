
                 <div class="nk-content nk-content-fluid">
                    <div class="container-xl wide-lg">
                        <div class="nk-content-body">
                            <div class="nk-block">
                                <div class="card card-bordered">
                                    <div class="card-aside-wrap">
                                        
                                        <div class="tab-content col-md-9"> 
                     <div class="tab-pane active" id="tabItem17"> <div class="card-inner card-inner-lg">
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
                                                            <span class="data-value"><?php echo $data['user_info']->name; ?></span>
                                                        </div>
                                                      <a href="#"  data-toggle="modal" data-target="#edit-user"> <div class="data-col data-col-end"><span class="data-more"><em class="icon ni ni-forward-ios"></em></span></div></a> 
                                                    </div><!-- data-item -->
                                                 
                                                    <div class="data-item">
                                                        <div class="data-col">
                                                            <span class="data-label">Email</span>
                                                            <span class="data-value"><?php echo $data['user_info']->email; ?></span>
                                                        </div>
                                                        <a href="#"  data-toggle="modal" data-target="#edit-user"> <div class="data-col data-col-end"><span class="data-more"><em class="icon ni ni-forward-ios"></em></span></div></a>
                                                    </div><!-- data-item -->
                                                    <div class="data-item">
                                                        <div class="data-col">
                                                            <span class="data-label">Department</span>
                                                            <span class="data-value text-soft"><?php echo $data['user_info']->department; ?></span>
                                                        </div>
                                                        <a href="#"  data-toggle="modal" data-target="#edit-user"> <div class="data-col data-col-end"><span class="data-more"><em class="icon ni ni-forward-ios"></em></span></div></a>
                                                    </div><!-- data-item -->
                                                    <div class="data-item" >
                                                        <div class="data-col">
                                                            <span class="data-label">Role</span>
                                                            <span class="data-value"><?php echo $data['user_info']->role; ?></span>
                                                        </div>
                                                        <a href="#"  data-toggle="modal" data-target="#edit-user"> <div class="data-col data-col-end"><span class="data-more"><em class="icon ni ni-forward-ios"></em></span></div></a>
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
                                                                    <p>Set a unique password.</p>
                                                                </div>
                                                                <div class="nk-block-actions flex-shrink-sm-0">
                                                                    <ul class="align-center flex-wrap flex-sm-nowrap gx-3 gy-2">
                                                                        <li class="order-md-last">
                                                                            <a href="#" data-toggle="modal" data-target="#edit-user" class="btn btn-primary">Change Password</a>
                                                                        </li>
                                                                        <li>
                                                                            <em class="text-soft text-date fs-12px">Last changed: <br><span><?php echo $data['user_info']->password_update; ?></span></em>
                                                                        </li>
                                                                    </ul>
                                                                </div>
                                                            </div>
                                                        </div><!-- .card-inner -->
                                                   
                                                  
                                                </div><!-- data-list -->
                                            </div><!-- .nk-block -->
                                        </div></div>
                      <div class="tab-pane" id="tabItem18">      <div class="card-inner p-0">
                                          <div class="card-inner">
                                             <div class="card-inner table-responsive">

                                              
                                              <table class="datatable-init table">
                                                 <thead>
                                                    <tr class="nk-tb-item nk-tb-head">
                                                        <th class="nk-tb-col nk-tb-col-check">
                                                            #
                                                        </th>
                                                    
                                                    

                                                          <th class="nk-tb-col tb-col-lg"><span class="sub-text">Date/Time</span></th>

                                                         <th class="nk-tb-col tb-col-md"><span class="sub-text">Status</span></th>

                                                          <th class="nk-tb-col tb-col-md"><span class="sub-text">Log Activity</span></th>

                                                        

                                                    </tr>
                                                </thead>
                                                <tbody>
                                                     <?php  $count = 0; foreach($data['user_log'] as $user_log) :  $count++; ?>
                                                    <tr>
                                                        <td> <?php echo $count;  ?></td>
                                                   
                                                       
                                                        
                                                        <td><?php echo $user_log->created_at; ?></td>
                                                        <td><?php if ($user_log->status == '1') {
                                                              echo "<span class='tb-status text-success'>Insert</span>";
                                                            }  


                                                            if ($user_log->status == '2') {
                                                              echo "<span class='tb-status text-warning'>Edit</span>";
                                                            }  

                                                            if ($user_log->status == '3') {
                                                              echo "<span class='tb-status text-danger'>Delete</span>";
                                                            }  


                                                            ?></td>
                                                        <td><?php echo $user_log->user_log; ?></td>
                                                    </tr>
                                                    <?php endforeach; ?>
                                                </tbody>
                                            </table>
                                        </div>
                                        </div>
                                        </div></div> 
                       
                        </div>  

                                        <div class="card-aside card-aside-left user-aside toggle-slide toggle-slide-left toggle-break-lg" data-content="userAside" data-toggle-screen="lg" data-toggle-overlay="true">
                                            <div class="card-inner-group" data-simplebar>
                                                <div class="card-inner">
                                                    <div class="user-card">
                                                        <div class="user-avatar bg-primary">
                                                           <em class="icon ni ni-user"></em>
                                                        </div>
                                                        <div class="user-info">
                                                            <span class="lead-text"><?php echo $data['user_info']->name; ?></span>
                                                            <span class="sub-text"><?php echo $data['user_info']->email; ?></span>
                                                        </div>
                                                       
                                                    </div><!-- .user-card -->
                                                </div><!-- .card-inner -->
                                               
                                                <div class="card-inner p-0">
                                                    <!-- <ul class="link-list-menu">
                                                        <li  class="nav-item"><a class="nav-link active" data-toggle="tab" href="#tabItem17"><em class="icon ni ni-user-fill-c"></em><span>Profile Infomation</span></a></li>
                                                        <li  class="nav-item"><a class="nav-link" data-toggle="tab" href="#tabItem18"><em class="icon ni ni-bell-fill"></em><span>Notifications</span></a></li>
                                                        
                                                    </ul> -->

                                                     <ul class="nav link-list-menu border border-light round m-0 ">    <li class="nav-item">       <a class="nav-link active" data-toggle="tab" href="#tabItem17"><em class="icon ni ni-user"></em><span>Profile Infomation</span></a>            </li>            <li class="nav-item">                <a class="nav-link" data-toggle="tab" href="#tabItem18"><em class="icon ni ni-lock-alt"></em><span>Account Activity</span></a>            </li>                 </ul> 
                                                </div><!-- .card-inner -->
                                            </div><!-- .card-inner-group -->
                                        </div><!-- card-aside -->
                                    </div><!-- .card-aside-wrap -->
                                </div><!-- .card -->
                            </div><!-- .nk-block -->
                        </div>
                    </div>
                </div>


               
                 
                 




            
            
              



               <div class="modal fade" tabindex="-1" role="dialog" id="edit-user">
        <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
            <div class="modal-content">
                <a href="#" class="close" data-dismiss="modal"><em class="icon ni ni-cross-sm"></em></a>
                <div class="modal-body modal-body-lg">
                    <h5 class="title">Edit User Details</h5>
                
                    <div class="tab-content">
                        <form action="<?php echo URLROOT; ?>/accounts/edit_user/<?php echo $data['user_info']->id; ?>" method="post">
                        <div class="tab-pane active" id="personal">
                             <div class="row gy-4">
                                <div class="col-md-12">
                                    <div class="form-group">

                                   

                                        <label class="form-label" for="full-name">Name</label>
                                        <input type="text" name="name"  class="form-control form-control-lg" value="<?php echo $data['user_info']->name; ?>">
                                    </div>
                                </div> 
                               
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label class="form-label" for="full-name">email</label>
                                        <input type="email" name="email"  class="form-control form-control-lg"  value="<?php echo $data['user_info']->email; ?>">
                                    </div>
                                </div>   


                                  <div class="col-md-12">
                                    <div class="form-group">
                                        <label class="form-label" for="full-name">Department</label>
                                        <input type="text" name="department"  class="form-control form-control-lg"  value="<?php echo $data['user_info']->department; ?>">
                                    </div>
                                </div>   



                                 <div class="col-md-12">
                                    <div class="form-group">
                                        <label class="form-label" for="full-name">Role</label>
                                    <select class="form-control form-control-lg" name="role">
                                        <option value="<?php echo $data['user_info']->role; ?>"><?php echo $data['user_info']->role; ?></option>
                                        <option value="User">User</option> 
                                        <option value="Sub_Admin">Admin</option>
                                        <option value="Admin">Super Admin</option>
                                    </select>
                                      
                                    </div>
                                </div>  

                                 <div class="col-md-12">
                                    <div class="form-group">
                                        <label class="form-label" for="address-l1">Change Password</label>
                                        <input name="password" type="password" class="form-control form-control-lg" id="password">
                                    </div>
                                </div>

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
                            <div class="row gy-4">
                             


                                    




                                   
                              
                                
                              
                            </div>
                        </div><!-- .tab-pane -->
                        </form>
                      
                    </div><!-- .tab-content -->
                </div><!-- .modal-body -->
            </div><!-- .modal-content -->
        </div><!-- .modal-dialog -->
    </div><!-- .modal -->