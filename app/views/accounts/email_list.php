 <div class="nk-content nk-content-fluid">
                    <div class="container-xl wide-lg">
                        <div class="nk-content-body">
                             <div class="nk-block-head nk-block-head-sm">
                                <div class="nk-block-between">
                                    <div class="nk-block-head-content">
                                        <h3 class="nk-block-title page-title">Email List</h3>
                                        
                                    </div><!-- .nk-block-head-content -->
                                    <div class="nk-block-head-content">
                                        <div class="toggle-wrap nk-block-tools-toggle">
                                            <a href="#" class="btn btn-icon btn-trigger toggle-expand mr-n1" data-target="pageMenu"><em class="icon ni ni-menu-alt-r"></em></a>
                                            <div class="toggle-expand-content" data-content="pageMenu">

                                                <ul class="nk-block-tools g-3">
                                                    <li><a href="<?php echo URLROOT; ?>/accounts/email_ist_export" class="btn btn-white btn-outline-light"><em class="icon ni ni-download-cloud"></em><span>Export</span></a></li>
                                                    <li class="nk-block-tools-opt">
                                                        <div class="drodown">
                                                            <a href="#" class="dropdown-toggle btn btn-icon btn-primary" data-toggle="dropdown"><em class="icon ni ni-plus"></em></a>
                                                            <div class="dropdown-menu dropdown-menu-right">
                                                                <ul class="link-list-opt no-bdr">
                                                                    <li><a href="#add-email" data-toggle="modal" ><span>Add New</span></a></li>
                                                                    
                                                                </ul>
                                                            </div>
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
                                            <table class="datatable-init nk-tb-list nk-tb-ulist" data-auto-responsive="true">

                                                <thead>
                                                    <tr class="nk-tb-item nk-tb-head">
                                                        <th class="nk-tb-col nk-tb-col-check">
                                                            <div class="custom-control custom-control-sm custom-checkbox notext">
                                                                <input type="checkbox" class="custom-control-input" id="uid">
                                                                <label class="custom-control-label" for="uid"></label>
                                                            </div>
                                                        </th>
                                                       
                                                        <th class="nk-tb-col tb-col-mb"><span class="sub-text">Email</span></th>
                                                          <th class="nk-tb-col tb-col-mb"><span class="sub-text">Date Created</span></th>

                                                           <th class="nk-tb-col tb-col-mb"></th>
                                                       
                                                       <!--  <th class="nk-tb-col nk-tb-col-tools text-right">
                                                        </th> -->
                                                    </tr>
                                                </thead> 
                                                <tbody>
                                                    <?php $count = 0;  foreach($data['AllEmailList'] as $AllEmailList) : $count++; ?>
                                                    <tr class="nk-tb-item">
                                                        <td class="nk-tb-col nk-tb-col-check">
                                                           <span><?php echo $count; ?></span>
                                                        </td>
                                                       
                                                        <td class="nk-tb-col tb-col-mb" data-order="35040.34">
                                                            <span class="tb-amount"><?php echo $AllEmailList->email; ?></span>
                                                        </td>


                                                        <td class="nk-tb-col tb-col-mb" data-order="35040.34">
                                                            <span class="tb-amount"><?php echo $AllEmailList->created_at; ?></span>
                                                        </td>


                                                        <td class="nk-tb-col nk-tb-col-tools">
                                                            <ul class="nk-tb-actions gx-1">
                                                                
                                                               
                                                                <li>
                                                                    <div class="drodown">
                                                                        <a href="#" class="dropdown-toggle btn btn-icon btn-trigger" data-toggle="dropdown"><em class="icon ni ni-more-h"></em></a>
                                                                        <div class="dropdown-menu dropdown-menu-right">
                                                                            <ul class="link-list-opt no-bdr">

                                                                                      <li>
                                                                    <button class="btn" data-toggle="modal" data-target="#exampleModal<?php echo $AllEmailList->id; ?>">
                                                                        <i class="icon ni ni-edit"></i>
                                                                            &nbsp;Edit
                                                                    </button>
                                                          
                                                                     </li>

                                                                      
                      
                                                                            <form action="<?php echo URLROOT; ?>/accounts/delete_email/<?php echo  $AllEmailList->id; ?>" method="POST">
                                                                    <input type="hidden" name="id" id="p_id" value="<?php echo $AllEmailList->id; ?>">                                                                
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

                                                     <div class="modal fade" tabindex="-1" role="dialog" id="exampleModal<?php echo $AllEmailList->id; ?>">
        <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
            <div class="modal-content">
                <a href="#" class="close" data-dismiss="modal"><em class="icon ni ni-cross-sm"></em></a>
                <div class="modal-body modal-body-lg">
                    <h5 class="title">Edit Email</h5>
                    <div class="tab-content">
                        <form method="post" action="<?php echo URLROOT; ?>/accounts/edit_email/<?php echo  $AllEmailList->id; ?>">
                        <div class="tab-pane active" id="personal">
                            <div class="row gy-4">
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label class="form-label" for="full-name">Email</label>
                                        <input type="email" name="email"  class="form-control form-control-lg" value="<?php echo $AllEmailList->email; ?>">
                                    </div>
                                </div> 
                                <input type="hidden" value="<?php echo  $AllEmailList->id; ?>" name="id" >
                           


                               



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

 <div class="modal fade" tabindex="-1" role="dialog" id="add-email">
        <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
            <div class="modal-content">
                <a href="#" class="close" data-dismiss="modal"><em class="icon ni ni-cross-sm"></em></a>
                <div class="modal-body modal-body-lg">
                    <h5 class="title">Add New Email</h5>
                    
                    <div class="tab-content">
                        <div class="tab-pane active" id="personal">
                           <form method="post" action="<?php echo URLROOT; ?>/accounts/add_to_email_list">
                            <div class="row gy-4">
                             

                                <div class="col-md-12">
                                   <div class="form-group">
                                        <label class="form-label" for="full-name">Email</label>
                                        <input name="email" type="email" class="form-control form-control-lg" id="full-name" >
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
                            </form>
                        </div><!-- .tab-pane -->
                        
                    </div><!-- .tab-content -->
                </div><!-- .modal-body -->
            </div><!-- .modal-content -->
        </div><!-- .modal-dialog -->
    </div>
