
        <!-- Content Body Start -->
        <div class="content-body">

            <!-- Page Headings Start -->
            <div class="row justify-content-between align-items-center mb-10">

                <!-- Page Heading Start -->
                <div class="col-12 col-lg-auto mb-20">
                    <div class="page-heading">
                        <h3>Noting Records </h3>
                    </div>
                </div><!-- Page Heading End -->

                <!-- Page Button Group Start -->
                <div class="col-12 col-lg-auto mb-20">
                    <div class="buttons-group">
                       
                      <a href="<?php echo URLROOT; ?>/accounts/add_noting"> <button class="button button-outline button-info">Add New</button></a> 

          

                       
                    </div>
                </div><!-- Page Button Group End -->

            </div><!-- Page Headings End -->

            <div class="row">


                <!--Export Data Table Start-->
                <div class="col-12 mb-30">
                    <div class="box">
                     <?php flash('alert_message'); ?>
                        <div class="box-body">

                            <table class="table table-bordered data-table data-table-export">
                                <thead>
                                    <tr>
                                        <th>Company name</th>
                                        <th>Noting Date</th>
                                        <th>Value</th>
                                        <th>Volume</th>
                                        <th>Price</th>
                                        <th>Seller</th>
                                        <th>buyer</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                     <?php  $count = 0; foreach($data['allnotings'] as $allnotings) :  $count++; ?>
                                    <tr>
                                        <td><?php echo $allnotings->company; ?></td>
                                        <td><?php echo $allnotings->noting_date; ?></td>
                                        <td><?php echo number_format ($allnotings->value); ?></td>
                                        <td><?php echo number_format ($allnotings->volume); ?></td>
                                        <td><?php echo number_format ($allnotings->price); ?></td>
                                        <td><?php echo $allnotings->seller; ?></td>
                                        <td><?php echo $allnotings->buyer; ?></td>
                                        <td class="action h4">
                                        <div class="table-action-buttons">
                                            <a class="view button button-box button-xs button-primary" href="<?php echo URLROOT; ?>/accounts/noting_details/<?php echo $allnotings->id; ?>"><i class="fa fa-search"></i></a>
                                            <a class="edit button button-box button-xs button-info" href="#"><i class="zmdi zmdi-edit"></i></a>
                                            <a class="delete button button-box button-xs button-danger" href="#"><i class="zmdi zmdi-delete"></i></a>
                                        </div>
                                    </td>
                                       
                                    </tr>
                                 

                                    <?php endforeach; ?>
                                 
                                </tbody>
                              
                            </table>

                        </div>
                    </div>
                </div>
                <!--Export Data Table End-->

               

            </div>

        </div><!-- Content Body End -->







       
     