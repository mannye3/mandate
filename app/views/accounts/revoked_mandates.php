 <div class="nk-content nk-content-fluid">
                    <div class="container-xl wide-lg">
                        <div class="nk-content-body">
                             <div class="nk-block-head nk-block-head-sm">
                                <div class="nk-block-between">
                                    <div class="nk-block-head-content">
                                        <h3 class="nk-block-title page-title">Revoked Participating Institutions</h3>
                                        
                                    </div>
                                    
                                     
                                    <div class="nk-block-head-content">
                                        <div class="toggle-wrap nk-block-tools-toggle">
                                            <a href="#" class="btn btn-icon btn-trigger toggle-expand mr-n1" data-target="pageMenu"><em class="icon ni ni-menu-alt-r"></em></a>
                                            <div class="toggle-expand-content" data-content="pageMenu">
                                                <ul class="nk-block-tools g-3">
                                                  
                                                    <li class="nk-block-tools-opt">
                                                       <a href="<?php echo URLROOT; ?>/accounts/add_mandate"><div class="drodown">
                                                            <span  class="btn btn-icon btn-primary"><em class="icon ni ni-plus"></em></span>
                                                            
                                                        </div></a>
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
                                          <div class="card-inner table-responsive">

                                                 <table class="datatable-init nk-tb-list nk-tb-ulist" data-auto-responsive="true">
                                                <thead>
                                                    <tr class="nk-tb-item nk-tb-head">
                                                        <th class="nk-tb-col nk-tb-col-check">
                                                            <div class="custom-control custom-control-sm custom-checkbox notext">
                                                                
                                                                #
                                                            </div>
                                                        </th>
                                                        <th class="nk-tb-col"><span class="sub-text">Account</span></th>
                                                      
                                                        <th class="nk-tb-col tb-col-mb"><span class="sub-text">Email</span></th>
                                                        <th class="nk-tb-col tb-col-md"><span class="sub-text">Phone</span></th>
                                                         <th class="nk-tb-col tb-col-md"><span class="sub-text">Mandate Code</span></th>
                                                       
                                                       
                                                        <th class="nk-tb-col tb-col-md"><span class="sub-text">Firm Status</span></th>
                                                       
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                 <?php  $count = 0; foreach($data['allmandates'] as $allmandates) :  $count++;

                                                       

                                                             ?>


                                             
                                                    <tr class="nk-tb-item">
                                                        <td class="nk-tb-col nk-tb-col-check">
                                                            <div class="custom-control custom-control-sm custom-checkbox notext">
                                                                 <?php echo $count;  ?>
                                                            </div>
                                                        </td>
                                                         <td class="nk-tb-col">
                                                            <div class="user-card">
                                                              
                                                                <div class="user-info">
                                                                    <a href="<?php echo URLROOT; ?>/accounts/mandate/<?php echo $allmandates->mandate_code;  ?>"> <span class="tb-lead wrapword123"><?php echo $allmandates->company_name;  ?><span class="dot dot-success d-md-none ml-1"></span></span></a>
                                                                    <p><?php echo $allmandates->category;  ?></p>
                                                                </div>
                                                            </div>
                                                        </td>
                                                        

                                                        <td class="nk-tb-col tb-col-mb" data-order="35040.34">
                                                            <span class="tb-amount"><?php echo $allmandates->email;  ?></span></span>
                                                        </td>
                                                        <td class="nk-tb-col tb-col-md">
                                                            <span><?php echo $allmandates->phone;  ?></span>
                                                        </td>


                                                        <td class="nk-tb-col tb-col-md">
                                                            <span><?php echo $allmandates->mandate_code;  ?></span>
                                                        </td>
                                                       
                                                        <td class="nk-tb-col tb-col-md">
                                                            <?php if ($allmandates->mandate_status == '1') {
                                                               echo ' <span class="tb-status text-success">Active</span>';
                                                            } 

                                                            if ($allmandates->mandate_status == '2') {
                                                               echo ' <span class="tb-status text-warning">Suspended</span>';
                                                            }


                                                            if ($allmandates->mandate_status == '3') {
                                                               echo '<span class="tb-status text-danger">Revoked</span>';
                                                            }  




                                                            ?>
                                                           
                                                        </td>
                                                       
                                                    </tr><!-- .nk-tb-item  -->
                    <div class="modal fade" tabindex="-1" role="dialog" id="exampleModal<?php echo $allmandates->id; ?>">
                    <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
                        <div class="modal-content">
                            <a href="#" class="close" data-dismiss="modal"><em class="icon ni ni-cross-sm"></em></a>
                            <div class="modal-body modal-body-lg">
                                <h5 class="title">Change Firm Status</h5>
                                <div class="tab-content">
                            <form method="post" action="<?php echo URLROOT; ?>/accounts/change_mandate_status/<?php echo $allmandates->id; ?>" >
                                    <div class="tab-pane active" id="personal">
                            <div class="row gy-4">
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label class="form-label" for="full-name">Select Status</label>
                                       <select name="mandate_status" data-msg="Required" class="form-control required" required>
                                        <option value="Ok">Active</option>  
                                        <option value="S">Suspended</option>  
                                        <option value="D">Withdrawal</option>                          
                                         </select>
                                    </div>
                                </div> 
                                <input type="hidden" value="<?php echo $mandate_trader->id; ?>" name="id" >
                               

                               



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





                
                <td class="nk-tb-col tb-col-md">







<style type="text/css">
    .wrapword123 {
    white-space: -moz-pre-wrap !important;  /* Mozilla, since 1999 */
    white-space: -pre-wrap;      /* Opera 4-6 */
    white-space: -o-pre-wrap;    /* Opera 7 */
    white-space: pre-wrap;       /* css-3 */
    word-wrap: break-word;       /* Internet Explorer 5.5+ */
    white-space: -webkit-pre-wrap; /* Newer versions of Chrome/Safari*/
    word-break: break-all;
    white-space: normal;

    
}
</style>



                    <?php
// foreach($categories as $category)
//     {
       
//         foreach($category->templates as $template){
         
//             foreach($template->tags as $tags){
               
//             }
//             foreach($template->procedures as $proceadures){
               
//             }
//         }
//     }

                    ?>