 <div class="nk-content nk-content-fluid">
                    <div class="container-xl wide-lg">
                        <div class="nk-content-body">
                             <div class="nk-block-head nk-block-head-sm">
                                <div class="nk-block-between">
                                    <div class="nk-block-head-content">
                                        <h3 class="nk-block-title page-title">Mandate Fees</h3>
                                        
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
                                                        <th class="nk-tb-col"><span class="sub-text">Title</span></th>
                                                       
                                                        
                                                      
                                                        <th class="nk-tb-col tb-col-lg"><span class="sub-text">Amount</span></th>


                                                        <th class="nk-tb-col tb-col-lg"><span class="sub-text">Fee Code</span></th>

                                                       <th class="nk-tb-col tb-col-lg"><span class="sub-text"></span></th>


                                                      
                                                        <th class="nk-tb-col nk-tb-col-tools text-right">
                                                        </th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                     <?php  $count = 0; foreach($data['allfees'] as $allfee) :  $count++; ?>
                                                    <tr class="nk-tb-item">
                                                         <td class="nk-tb-col nk-tb-col-check">
                                                            <div class="custom-control custom-control-sm custom-checkbox notext">
                                                                 <?php echo $count;  ?>
                                                            </div>
                                                        </td>
                                                        <td class="nk-tb-col">
                                                            <div class="user-card">
                                                                
                                                                <div class="user-info">
                                                                    <span class="tb-lead"><?php echo $allfee->fee_title; ?> <span class="dot dot-success d-md-none ml-1"></span>
                                                                </div>
                                                            </div>
                                                        </td>
                                                      
                                                       
                                                      
                                                        <td class="nk-tb-col tb-col-lg">
                                                            <span><?php echo $allfee->amount; ?></span>
                                                        </td>


                                                        <td class="nk-tb-col tb-col-lg">
                                                            <span><?php echo $allfee->fee_code; ?></span>
                                                        </td>


                                                        <td class="nk-tb-col tb-col-md">
                                                            <?php if ($allfee->renewal_status == 1) {
                                                               echo ' <span class="badge badge-sm badge-success">Renewal</span>';
                                                            } 

                                                            if ($allfee->renewal_status == 2) {
                                                               echo ' <span class="badge badge-sm badge-primary">One Time Payment</span>';
                                                            }


                                                            




                                                            ?>
                                                           
                                                        </td>

                                                         
                                                       
                                                        <td class="nk-tb-col nk-tb-col-tools">
                                                            <ul class="nk-tb-actions gx-1">
                                                                
                                                               
                                                                <li>
                                                                    <div class="drodown">
                                                                        <a href="#" class="dropdown-toggle btn btn-icon btn-trigger" data-toggle="dropdown"><em class="icon ni ni-more-h"></em></a>
                                                                        <div class="dropdown-menu dropdown-menu-right">
                                                                            <ul class="link-list-opt no-bdr">

                                                                                      <li>
                                                                    <button class="btn" data-toggle="modal" data-target="#exampleModal<?php echo $allfee->id; ?>">
                                                                        <i class="icon ni ni-edit"></i>
                                                                             &nbsp;Edit
                                                                    </button>
                                                          
                                                                     </li>
                      
                                                                           <!--  <form action="<?php echo URLROOT; ?>/accounts/delete_fee/<?php echo $allfee->id; ?>" method="POST">
                                                                    <input type="hidden" name="id" id="p_id" value="<?php echo $allfee->id; ?>">
                                                                    <button class="btn" name="archive" type="submit" onclick="archiveFunction()">
                                                                        <i class="icon ni ni-na"></i>
                                                                            &nbsp;Delete
                                                                    </button>
                                                            </form> -->




                                                                                </li>
                                                                            </ul>
                                                                        </div>
                                                                    </div>
                                                                </li>
                                                            </ul>
                                                        </td>
                                                    </tr><!-- .nk-tb-item  --> 

            <div class="modal fade" tabindex="-1" role="dialog" id="exampleModal<?php echo $allfee->id; ?>">
        <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
            <div class="modal-content">
                <a href="#" class="close" data-dismiss="modal"><em class="icon ni ni-cross-sm"></em></a>
                <div class="modal-body modal-body-lg">
                    <h5 class="title">Edit Fee</h5>
                    <div class="tab-content">
                        <form method="post" action="<?php echo URLROOT; ?>/accounts/edit_fee/<?php echo $allfee->id; ?>" >
                        <div class="tab-pane active" id="personal">
                            <div class="row gy-4">
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label class="form-label" for="full-name">Title</label>
                                        <input type="text" name="fee_title"  class="form-control form-control-lg" value="<?php echo $allfee->fee_title; ?>">
                                    </div>
                                </div> 
                                <input type="hidden" value="<?php echo $allfee->id; ?>" name="id" >
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label class="form-label" for="full-name">Amount</label>
                                        <input type="number" name="amount"  class="form-control form-control-lg"  value="<?php echo $allfee->amount; ?>">
                                    </div>
                                </div> 


                                 <div class="col-md-12">
                                    <div class="form-group">

                                  <label class="form-label" for="full-name">Renewal Options</label>
                                  <br>
                                <input type="radio" id="YES" name="renewal_status" value="1" required <?php echo $allfee->renewal_status == 1 ? 'checked' : ''; ?>>
                                <label for="yes">YES</label><br>
                                <input type="radio" id="no" name="renewal_status" value="2" required <?php echo $allfee->renewal_status == 2 ? 'checked' : ''; ?>>
                                <label for="no">NO</label><br>


                             
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
                    <h5 class="title">Add Fees</h5>
                    <div class="tab-content">
                        <form method="post" action="<?php echo URLROOT; ?>/accounts/fees">
                        <div class="tab-pane active" id="personal">
                            <div class="row gy-4">
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label class="form-label" for="full-name">Title</label>
                                        <input type="text" name="fee_title"  class="form-control form-control-lg" id="full-name" placeholder="Enter Fee Title">
                                    </div>
                                </div> 


                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label class="form-label" for="full-name">Amount</label>
                                        <input type="number" name="amount"  class="form-control form-control-lg" id="full-name" >
                                    </div>
                                </div>

                                <div class="col-md-12">
                                    <div class="form-group">

                                  <label class="form-label" for="full-name">Renewal Options</label>
                                  <br>
                                <input type="radio" id="male" name="renewal_status" value="1" required>
                                <label for="male">YES</label><br>
                                <input type="radio" id="female" name="renewal_status" value="2" required>
                                <label for="female">NO</label><br>
                             
                                    </div>
                                </div> 

                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label class="form-label" for="full-name">Fee Code</label>
                                        <input type="text" name="fee_code"  class="form-control form-control-lg" id="full-name" placeholder="Enter Subscription Rate">
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