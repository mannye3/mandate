 <div class="nk-content nk-content-fluid">
                    <div class="container-xl wide-lg">
                        <div class="nk-content-body">
                             <div class="nk-block-head nk-block-head-sm">
                                <div class="nk-block-between">
                                    <div class="nk-block-head-content">
                                        <h3 class="nk-block-title page-title">Issuers</h3>
                                        
                                    </div><!-- .nk-block-head-content -->
                                    <div class="nk-block-head-content">
                                        <div class="toggle-wrap nk-block-tools-toggle">
                                            <a href="#" class="btn btn-icon btn-trigger toggle-expand mr-n1" data-target="pageMenu"><em class="icon ni ni-menu-alt-r"></em></a>
                                            <div class="toggle-expand-content" data-content="pageMenu">
                                                <ul class="nk-block-tools g-3">
                                                    <?php  if ($_SESSION['role'] !== 'User') :   ?>
                                                    <li class="nk-block-tools-opt">
                                                       <a href="<?php echo URLROOT; ?>/accounts/add_issuer"><div class="drodown">
                                                            <span  class="btn btn-primary"><em class="icon ni ni-plus"></em></span>
                                                            
                                                        </div></a>
                                                    </li>
                                                <?php endif; ?>
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
                                                        <th class="nk-tb-col"><span class="sub-text">Security</span></th>
                                                        <th class="nk-tb-col"><span class="sub-text">Symbol</span></th>
                                                        <th class="nk-tb-col"><span class="sub-text">Contact</span></th>
                                                        <th class="nk-tb-col tb-col-mb"><span class="sub-text">Designation</span></th>
                                                        
                                                       
                                                         <th class="nk-tb-col tb-col-md"><span class="sub-text">email</span></th>
                                                         
                                                        <th class="nk-tb-col tb-col-md"><span class="sub-text">Status</span></th>
                                                       
                                                    </tr>
                                                </thead>
                                                <tbody>
                                        <?php  $count = 0; foreach($data['allissuers'] as $allissuer) :  $count++;
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
                                                                    <a href="<?php echo URLROOT; ?>/accounts/issuer/<?php echo $allissuer->id;  ?>"><span class="tb-lead"> <?php echo substr($allissuer->security_name,0,20);  ?> <br> 

                                                                      
                                                                        <!-- <?php 

                                                                        echo "NAMES:";


                                                                        echo file_get_contents(URLROOT . '/javascriptuses/get_old_name/' . $allmandates->mandate_code);?>  --><span class="dot dot-success d-md-none ml-1"></span></span>
                                                                    </a>
                                                                </div>
                                                            </div>
                                                        </td>
                                                        <td class="nk-tb-col tb-col-mb" data-order="35040.34">
                                                            <span class="tb-amount"><?php echo $allissuer->symbol;  ?></span></span>
                                                        </td>

                                                         <td class="nk-tb-col tb-col-mb" data-order="35040.34">
                                                            <span class="tb-amount"><?php echo $allissuer->name_of_contact;  ?></span></span>
                                                        </td>

                                                        <td class="nk-tb-col tb-col-mb" data-order="35040.34">
                                                        <span class="tb-amount"><?php echo substr($allissuer->designation,0,20);?></span></span>
                                                        </td>
                                                      


                                                        


                                                          <td class="nk-tb-col tb-col-md">
                                                            <span><?php echo $allissuer->email;?></span>
                                                        </td>



                                                       
                                                        <td class="nk-tb-col tb-col-md">
                                                            <?php if ($allissuer->issuer_status == '1') {
                                                               echo ' <span class="tb-status text-success">Active</span>';
                                                            } 

                                                            if ($allissuer->issuer_status == '2') {
                                                               echo ' <span class="tb-status text-warning">Delisted</span>';
                                                            }


                                                           



                                                            ?>
                                                           
                                                        </td>
                                                       
                                                    </tr><!-- .nk-tb-item  -->
                                           
                                           
                                       
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