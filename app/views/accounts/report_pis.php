 <div class="nk-content nk-content-fluid">
                    <div class="container-xl wide-lg">
                        <div class="nk-content-body">
                             <div class="nk-block-head nk-block-head-sm">
                                <div class="nk-block-between">
                                    <div class="nk-block-head-content">
                                        <h3 class="nk-block-title page-title">Participating Institutions</h3>
                                        
                                    </div><!-- .nk-block-head-content -->

                                     <div class="nk-block-head-content">
                                        <div class="toggle-wrap nk-block-tools-toggle">
                                            <a href="#" class="btn btn-icon btn-trigger toggle-expand mr-n1" data-target="pageMenu"><em class="icon ni ni-menu-alt-r"></em></a>
                                            <div class="toggle-expand-content" data-content="pageMenu">
                                              

                                                 <ul class="nk-block-tools g-3">
                                                    <li><a href="<?php echo URLROOT; ?>/accounts/participating_institutions_export" class="btn btn-white btn-outline-light"><em class="icon ni ni-download-cloud"></em><span>Export</span></a></li>
                                                    <li class="nk-block-tools-opt">
                                                        <div class="drodown">
                                                            <a href="#" class="dropdown-toggle btn btn-icon btn-primary" data-toggle="dropdown"><em class="icon ni ni-plus"></em></a>
                                                            <div class="dropdown-menu dropdown-menu-right">
                                                                <ul class="link-list-opt no-bdr">
                                                                    <li><a href="<?php echo URLROOT; ?>/accounts/add_mandate" ><span>Add New</span></a></li>
                                                                    
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
                                                        <th class="nk-tb-col"><span class="sub-text">Category</span></th>
                                                        <th class="nk-tb-col tb-col-mb"><span class="sub-text">Email</span></th>
                                                        <th class="nk-tb-col tb-col-md"><span class="sub-text">Phone</span></th>
                                                         <th class="nk-tb-col tb-col-md"><span class="sub-text">Mandate Code</span></th>
                                                       
                                                       
                                                        <th class="nk-tb-col tb-col-md"><span class="sub-text">Firm Status</span></th>
                                                        
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                 <?php  $count = 0; foreach($data['allpis'] as $allpis) :  $count++;

                                                       

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
                                                                    <a href="<?php echo URLROOT; ?>/accounts/mandate/<?php echo $allpis->mandate_code;  ?>"><span class="tb-lead"> <?php echo substr($allpis->company_name,0,100);  ?></span>
                                                                    </a>
                                                                </div>
                                                            </div>
                                                        </td>
                                                        <td class="nk-tb-col tb-col-mb" data-order="35040.34">
                                                            <span class="tb-amount"><?php echo $allpis->category;  ?></span></span>
                                                        </td>

                                                        <td class="nk-tb-col tb-col-mb" data-order="35040.34">
                                                        <span class="tb-amount"><?php echo substr($allpis->email,0,50);?></span></span>
                                                        </td>
                                                        <td class="nk-tb-col tb-col-md">
                                                            <span><?php echo substr($allpis->phone,0,50);?></span>
                                                        </td>


                                                        <td class="nk-tb-col tb-col-md">
                                                            <span><?php echo $allpis->mandate_code;  ?></span>
                                                        </td>
                                                       
                                                        <td class="nk-tb-col tb-col-md">
                                                            <?php if ($allpis->mandate_status == 'Ok') {
                                                               echo ' <span class="tb-status text-success">Active</span>';
                                                            } 

                                                            if ($allpis->mandate_status == 'S') {
                                                               echo ' <span class="tb-status text-warning">Suspended</span>';
                                                            }


                                                            if ($allpis->mandate_status == 'D') {
                                                               echo '<span class="tb-status text-danger">Delisted</span>';
                                                            }  




                                                            ?>
                                                           
                                                        </td>
                                                      
                                                    </tr><!-- .nk-tb-item  -->
                                           
                                           
                                       
                                        <?php endforeach; ?>
                                                </tbody>
                                            </table>
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