 <div class="nk-content nk-content-fluid">
                    <div class="container-xl wide-lg">
                        <div class="nk-content-body">
                             <div class="nk-block-head nk-block-head-sm">
                                <div class="nk-block-between">
                                    <div class="nk-block-head-content">
                                        <h3 class="nk-block-title page-title">Users</h3>
                                        
                                    </div><!-- .nk-block-head-content -->
                                    <div class="nk-block-head-content">
                                        <div class="toggle-wrap nk-block-tools-toggle">
                                            <a href="#" class="btn btn-icon btn-trigger toggle-expand mr-n1" data-target="pageMenu"><em class="icon ni ni-menu-alt-r"></em></a>
                                            <div class="toggle-expand-content" data-content="pageMenu">
                                                <ul class="nk-block-tools g-3">
                                                   
                                                    <li class="nk-block-tools-opt">
                                                        <div class="drodown">
                                                            <a href="#add-plan" data-toggle="modal" class="dropdown-toggle btn btn-icon btn-primary" data-toggle="dropdown"><em class="icon ni ni-plus"></em></a>
                                                            
                                                        </div>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div><!-- .toggle-wrap -->
                                    </div><!-- .nk-block-head-content -->
                                </div><!-- .nk-block-between -->
                            </div><!-- .nk-block-head -->
                            <div class="nk-block">
                                <div class="card card-bordered card-stretch">
                                    <div class="card-inner-group">
                                        <?php flash('alert_message'); ?>
                                        <div class="card-inner p-0">
                                          <div class="card-inner">
                                            <table class="datatable-init nk-tb-list nk-tb-ulist" data-auto-responsive="false">
                                                <thead>
                                                    <tr class="nk-tb-item nk-tb-head">
                                                        <th class="nk-tb-col nk-tb-col-check">
                                                            #
                                                        </th>
                                                        <th class="nk-tb-col"><span class="sub-text">Name</span></th>
                                                       
                                                        
                                                      
                                                        <th class="nk-tb-col tb-col-lg"><span class="sub-text">Email</span></th>


                                                        <th class="nk-tb-col tb-col-lg"><span class="sub-text">Role</span></th>


                                                        <th class="nk-tb-col tb-col-lg"><span class="sub-text">Department</span></th>

                                                      


                                                        <th class="nk-tb-col tb-col-md"><span class="sub-text">Status</span></th>
                                                        <th class="nk-tb-col nk-tb-col-tools text-right">
                                                        </th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                     <?php  $count = 0; foreach($data['All_Users'] as $All_Users) :  $count++; ?>
                                                    <tr class="nk-tb-item">
                                                         <td class="nk-tb-col nk-tb-col-check">
                                                            <div class="custom-control custom-control-sm custom-checkbox notext">
                                                                 <?php echo $count;  ?>
                                                            </div>
                                                        </td>
                                                        <td class="nk-tb-col">
                                                            <div class="user-card">
                                                                
                                                                <a href="<?php echo URLROOT; ?>/accounts/user/<?php echo  $All_Users->id; ?>">    <div class="user-info">
                                                                <span class="tb-lead"><?php echo $All_Users->name; ?> <span class="dot dot-success d-md-none ml-1"></span>
                                                                </div></a>
                                                            </div>
                                                        </td>
                                                      
                                                       
                                                      
                                                        <td class="nk-tb-col tb-col-lg">
                                                            <span><?php echo $All_Users->email; ?></span>
                                                        </td>


                                                  

                                                         <td class="nk-tb-col tb-col-lg">
                                                            <span><?php echo $All_Users->role; ?></span>
                                                        </td>

                                                           <td class="nk-tb-col tb-col-lg">
                                                            <span><?php echo $All_Users->department; ?></span>
                                                        </td>
                                                        <td class="nk-tb-col tb-col-md">
                                                            <span class="tb-status text-success">Active</span>
                                                        </td>
                                                        <td class="nk-tb-col nk-tb-col-tools">
                                                            <ul class="nk-tb-actions gx-1">
                                                                
                                                               
                                                                <li>
                                                                    <div class="drodown">
                                                                        <a href="#" class="dropdown-toggle btn btn-icon btn-trigger" data-toggle="dropdown"><em class="icon ni ni-more-h"></em></a>
                                                                        <div class="dropdown-menu dropdown-menu-right">
                                                                            <ul class="link-list-opt no-bdr">

                                                                                      <li>
                                                                    <button class="btn">
                                                                        <i class="icon ni ni-edit"></i>
                                                                            &nbsp;Edit
                                                                    </button>
                                                          
                                                                     </li>
                      
                                                                            <form action="<?php echo URLROOT; ?>/admins/delete_user/<?php echo $All_Users->id; ?>" method="POST">
                                                                    <input type="hidden" name="id" id="p_id" value="<?php echo $allcate->id; ?>">
                                                                    <button class="btn" name="archive" type="submit" onclick="archiveFunction()">
                                                                        <i class="icon ni ni-na"></i>
                                                                            &nbsp;Delete
                                                                    </button>
                                                            </form>




                                                                                </li>
                                                                            </ul>
                                                                        </div>
                                                                    </div>
                                                                </li>
                                                            </ul>
                                                        </td>
                                                    </tr><!-- .nk-tb-item  --> 





                                <div class="modal fade" id="exampleModal<?php echo  $All_Users->id; ?>">
                                <div class="modal-dialog modal-dialog-centered">
                                    <div class="modal-content">
                                        <div class="modal-header"> 
                                            <h5 class="modal-title">Edit Account</h5>
                                            <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span></button>
                                        </div>

                                         <!-- ADD EDIT ROLE MODAL -->
                                        <div class="modal-body">
                                            <form action="<?php echo URLROOT; ?>/admins/edit_role/<?php echo $allroles->id; ?>" method="post">
                                                <div class="form-group">
                                                    <input type="hidden" value="<?php echo $allroles->id; ?>" name="id" >
                                                    <label for="recipient-name" class="col-form-label">Name:</label>
                                                    <input  value="<?php echo $allroles->role_title; ?>" type="text" name="role_title" class="form-control" id="recipient-name">
                                                </div>
                                                 
                                        </div>
                                        <div class="modal-footer">
                                            <button class="button button-danger" data-dismiss="modal">Close</button>
                                            <button type="submit" class="button button-primary">Save changes</button>
                                        </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                                                    <?php endforeach; ?>
                                                </tbody>
                                            </table>
                                        </div>
                                        </div><!-- .card-inner -->
                                       
                                    </div><!-- .card-inner-group -->
                                </div><!-- .card -->
                            </div><!-- .nk-block -->
                        </div>
                    </div>
                </div>


  <div class="modal fade" tabindex="-1" role="dialog" id="add-plan">
        <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
            <div class="modal-content">
                <a href="#" class="close" data-dismiss="modal"><em class="icon ni ni-cross-sm"></em></a>
                <div class="modal-body modal-body-lg">
                    <h5 class="title">Add User</h5>
                    <div class="tab-content">
                        <form method="post" action="<?php echo URLROOT; ?>/accounts/add_users">
                        <div class="tab-pane active" id="personal">
                            <div class="row gy-4">
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label class="form-label" for="full-name">Name</label>
                                        <input type="text" name="name"  class="form-control form-control-lg" id="full-name" >
                                    </div>
                                </div> 


                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label class="form-label" for="full-name">email</label>
                                        <input type="email" name="email"  class="form-control form-control-lg" id="full-name" >
                                    </div>
                                </div> 

                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label class="form-label" for="full-name">Department</label>
                                        <select  name="department"  class="form-control form-control-lg">
                                            <option value="IT">IT</option>
                                            <option value="Operations">Operations</option>
                                            <option value="HR">HR</option>
                                            <option value="Legal">Legal</option>
                                            <option value="Finance">Finance</option>
                                        </select>
                                      
                                    </div>
                                </div>   


                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label class="form-label" for="full-name">Role</label>
                                    <select class="form-control form-control-lg" name="role">
                                         <option value="User">User</option> 
                                        <option value="Sub_Admin">Admin</option>
                                        <option value="Admin">Super Admin</option>
                                    </select>
                                      
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
                        </div>
                        </form>
                        
                    </div>
                </div>
            </div>
        </div>
    </div>