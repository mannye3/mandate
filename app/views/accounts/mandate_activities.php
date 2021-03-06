 <div class="nk-content nk-content-fluid">
                    <div class="container-xl wide-lg">
                        <div class="nk-content-body">
                             <div class="nk-block-head nk-block-head-sm">
                                <div class="nk-block-between">

                                    <div class="nk-block-head-content">
                                        <h3 class="nk-block-title page-title">Activity Logs For <?php echo $data['mandate_info']->company_name; ?></h3>

                                          <div class="nk-block-head-content" style="margin: 0px 0px 0px 1000px ">
                                        <a href="<?php echo URLROOT; ?>/accounts/mandate/<?php echo $data['mandate_info']->mandate_code; ?>" class="btn btn-outline-light bg-white d-none d-sm-inline-flex"><em class="icon ni ni-arrow-left"></em><span>Back</span></a>
                                        <a href="html/user-list-regular.html" class="btn btn-icon btn-outline-light bg-white d-inline-flex d-sm-none"><em class="icon ni ni-arrow-left"></em></a>
                                    </div>
                                        
                                    </div><!-- .nk-block-head-content -->

                                   
                                </div><!-- .nk-block-between -->
                            </div><!-- .nk-block-head -->
                            <div class="nk-block">
                                <div class="card card-bordered card-stretch">
                                    <div class="card-inner-group">
                                        
                                        <div class="card-inner p-0">
                                          <div class="card-inner">
                                            <table class="datatable-init nk-tb-list nk-tb-ulist" responsive data-auto-responsive="false">
                                                <thead>
                                                    <tr class="nk-tb-item nk-tb-head">
                                                        <th class="nk-tb-col nk-tb-col-check">
                                                            #
                                                        </th>
                                                      
                                                       
                                                        <th class="nk-tb-col tb-col-lg"><span class="sub-text">Mandate Code</span></th>

                                                        <th class="nk-tb-col tb-col-lg"><span class="sub-text">Activity</span></th>
                                                        <th class="nk-tb-col tb-col-lg"><span class="sub-text">Action By</span></th>
                                                        <th class="nk-tb-col tb-col-lg"><span class="sub-text">Department</span></th>

                                                          <th class="nk-tb-col tb-col-lg"><span class="sub-text">Date/Time</span></th>

                                                         

                                                        

                                                    </tr>
                                                </thead>
                                                <tbody>
                                                     <?php  $count = 0; foreach($data['All_Activies'] as $All_Activity) :  $count++; ?>
                                                    <tr class="nk-tb-item">
                                                         <td class="nk-tb-col nk-tb-col-check">
                                                            <div class="custom-control custom-control-sm custom-checkbox notext">
                                                                 <?php echo $count;  ?>
                                                            </div>
                                                        </td>
                                                       
                                                      
                                                        <td class="nk-tb-col tb-col-lg">
                                                            <span><?php echo $All_Activity->mandate_code; ?></span>
                                                        </td>

                                                         <td class="nk-tb-col tb-col-lg">
                                                            <?php echo $All_Activity->activities; ?>

                                                                
                                                        </td>

                                                        <td class="nk-tb-col tb-col-lg">
                                                            <span><?php echo $All_Activity->action_by; ?></span>
                                                        </td>

                                                        <td class="nk-tb-col tb-col-lg">
                                                            <span><?php echo $All_Activity->department; ?></span>
                                                        </td>


                                                        <td class="nk-tb-col tb-col-lg">
                                                            <span><?php echo $All_Activity->created_at; ?></span>
                                                        </td>

                                                     
 
                                                    </tr>
                                                <?php endforeach; ?>
                                                </tbody>
                                            </table>
                                        </div>
                                        </div>
                                       
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>










 