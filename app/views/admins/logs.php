 <div class="nk-content nk-content-fluid">
                    <div class="container-xl wide-lg">
                        <div class="nk-content-body">
                             <div class="nk-block-head nk-block-head-sm">
                                <div class="nk-block-between">
                                    <div class="nk-block-head-content">
                                        <h3 class="nk-block-title page-title">Logs Activities</h3>
                                        
                                    </div><!-- .nk-block-head-content -->
                                   
                                </div><!-- .nk-block-between -->
                            </div><!-- .nk-block-head -->
                            <div class="nk-block">
                                <div class="card card-bordered card-stretch">
                                    <div class="card-inner-group">
                                        
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

                                                        <th class="nk-tb-col tb-col-lg"><span class="sub-text">Department</span></th>

                                                          <th class="nk-tb-col tb-col-lg"><span class="sub-text">Date/Time</span></th>

                                                         <th class="nk-tb-col tb-col-md"><span class="sub-text">Status</span></th>

                                                          <th class="nk-tb-col tb-col-md"><span class="sub-text">Log Activity</span></th>

                                                        

                                                    </tr>
                                                </thead>
                                                <tbody>
                                                     <?php  $count = 0; foreach($data['All_Logs'] as $All_Log) :  $count++; ?>
                                                    <tr class="nk-tb-item">
                                                         <td class="nk-tb-col nk-tb-col-check">
                                                            <div class="custom-control custom-control-sm custom-checkbox notext">
                                                                 <?php echo $count;  ?>
                                                            </div>
                                                        </td>
                                                        <td class="nk-tb-col">
                                                            <div class="user-card">
                                                                
                                                                <div class="user-info">
                                                                    <span class="tb-lead"><?php echo $All_Log->name; ?> <span class="dot dot-success d-md-none ml-1"></span>
                                                                </div>
                                                            </div>
                                                        </td>
                                                      
                                                       
                                                      
                                                        <td class="nk-tb-col tb-col-lg">
                                                            <span><?php echo $All_Log->email; ?></span>
                                                        </td>

                                                         <td class="nk-tb-col tb-col-lg">
                                                            <span><?php echo $All_Log->department; ?></span>
                                                        </td>

                                                        <td class="nk-tb-col tb-col-lg">
                                                            <span><?php echo $All_Log->created_at; ?></span>
                                                        </td>

                                                        <td class="nk-tb-col tb-col-md">
                                                            <?php if ($All_Log->status == '1') {
                                                              echo "<span class='tb-status text-success'>Insert</span>";
                                                            }  


                                                            if ($All_Log->status == '2') {
                                                              echo "<span class='tb-status text-warning'>Edit</span>";
                                                            }  

                                                            if ($All_Log->status == '3') {
                                                              echo "<span class='tb-status text-danger'>Delete</span>";
                                                            }  


                                                            ?>
                                                            
                                                        </td>

                                                         <td class="nk-tb-col tb-col-lg">
                                                            <span><?php echo $All_Log->user_log; ?></span>
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










 