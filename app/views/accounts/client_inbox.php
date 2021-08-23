 <div class="main-content">

                <div class="page-content">
                    <div class="container-fluid">

                        <!-- start page title -->
                        <div class="row">
                            <div class="col-12">
                                <div class="page-title-box d-flex align-items-center justify-content-between">
                                    <h4 class="mb-0 font-size-18">Inbox</h4>

                                    <div class="page-title-right">
                                        <ol class="breadcrumb m-0">
                                           
                                            <li class="breadcrumb-item"><a href="javascript: void(0);">Market Broadcast</a></li>
                                            <li class="breadcrumb-item active">Inbox</li>
                                        </ol>
                                    </div>
                                    
                                </div>
                            </div>
                        </div>     
                        <!-- end page title -->

                        <div class="row">
                           

                            <div class="col-xl-12">
                                <div class="row">
                                    <div class="col-md-7">
                                       <!--  <div class="btn-toolbar" role="toolbar">
                                            <div class="btn-group mr-2 mb-3">
                                                <button type="button" class="btn btn-primary waves-light waves-effect"><i class="fa fa-inbox"></i></button>
                                                <button type="button" class="btn btn-primary waves-light waves-effect"><i class="fa fa-exclamation-circle"></i></button>
                                                <button type="button" class="btn btn-primary waves-light waves-effect"><i class="far fa-trash-alt"></i></button>
                                            </div>
                                            <div class="btn-group mr-2 mb-3">
                                                <button type="button" class="btn btn-primary waves-light waves-effect dropdown-toggle" data-toggle="dropdown" aria-expanded="false">
                                                    <i class="fa fa-folder"></i> <i class="mdi mdi-chevron-down ml-1"></i>
                                                </button>
                                                <div class="dropdown-menu">
                                                    <a class="dropdown-item" href="#">Updates</a>
                                                    <a class="dropdown-item" href="#">Social</a>
                                                    <a class="dropdown-item" href="#">Team Manage</a>
                                                </div>
                                            </div>
                                        </div> -->
                                    </div>
                                    <div class="col-md-5">
                                       <!--  <div class="btn-toolbar justify-content-md-end" role="toolbar">
                                            <div class="btn-group ml-md-2 mb-3">
                                                <button type="button" class="btn btn-primary waves-light waves-effect dropdown-toggle" data-toggle="dropdown" aria-expanded="false">
                                                    <i class="fa fa-tag"></i> <i class="mdi mdi-chevron-down ml-1"></i>
                                                </button>
                                                <div class="dropdown-menu dropdown-menu-right">
                                                    <a class="dropdown-item" href="#">Updates</a>
                                                    <a class="dropdown-item" href="#">Social</a>
                                                    <a class="dropdown-item" href="#">Team Manage</a>
                                                </div>
                                            </div>
            
                                            <div class="btn-group ml-2 mb-3">
                                                <button type="button" class="btn btn-primary waves-light waves-effect dropdown-toggle" data-toggle="dropdown" aria-expanded="false">
                                                    More <i class="mdi mdi-dots-vertical ml-1"></i>
                                                </button>
                                                <div class="dropdown-menu dropdown-menu-right">
                                                    <a class="dropdown-item" href="#">Mark as Unread</a>
                                                    <a class="dropdown-item" href="#">Mark as Important</a>
                                                    <a class="dropdown-item" href="#">Add to Tasks</a>
                                                    <a class="dropdown-item" href="#">Add Star</a>
                                                    <a class="dropdown-item" href="#">Mute</a>
                                                </div>
                                            </div>
                                        </div> -->
                                    </div>
                                </div>
                                
                                <div class="card mb-0">
                                    <div class="card-body">
                                        <!-- Nav tabs -->
                                       
        
                                        <!-- Tab panes -->
                                        <div class="tab-content pt-3">
                                            <div class="tab-pane active" id="custom-primary" role="tabpanel">
                                                <ul class="message-list mb-0">
                                                       <?php $count = 0; foreach($data['inbox'] as $inbox_msg) : $count++; 
                                                      $sum_date =  $inbox_msg->DATE;

                                                        ?>
                                                     <li class="unread">
                                                        <div class="col-mail col-mail-1">
                                                            <div class="checkbox-wrapper-mail">
                                                                <input type="checkbox" id="chk7">
                                                                <label for="chk7" class="toggle"></label>
                                                            </div>
                                                            <a href="#" class="title">NASD Market Operation </a>
                                                        </div>
                                                        <div class="col-mail col-mail-2">
                                                            <a href="<?php echo URLROOT; ?>/accounts/client_inbox_read/<?php echo $sum_date;  ?>" class="subject">
                                                                <span class="teaser">Market Report <?php echo $inbox_msg->DATE;   ?> </span>
                                                            </a>
                                                            <div class="date"><?php echo $sum_date;   ?></div>
                                                        </div>
                                                    </li>
                                                <?php endforeach;  ?>

                                                    <!-- <li>
                                                        <div class="col-mail col-mail-1">
                                                            <div class="checkbox-wrapper-mail">
                                                                <input type="checkbox" id="chk1">
                                                                <label for="chk1" class="toggle"></label>
                                                            </div>
                                                            <a href="#" class="title">Peter, me (3)</a>
                                                        </div>
                                                        <div class="col-mail col-mail-2">
                                                            <a href="#" class="subject">Hello – <span class="teaser">Trip home from Colombo has been arranged, then Jenna will come get me from Stockholm. :)</span>
                                                            </a>
                                                            <div class="date">Mar 6</div>
                                                        </div>
                                                    </li> -->
                        
                                                 
                                                   
        
                
                                                </ul>
                                            </div>
                                            
                                            
                                        </div>
                                        
                                    </div>
                                </div>
                                <!-- end card -->
                            </div>
                        </div>
                        <!-- end row -->

                       <!--  <div class="row justify-content-end">
                            <div class="col-xl-9">
                                <div class="row my-4">
                                    <div class="col-7">
                                        Showing 1 - 20 of 1,524
                                    </div>
                                    <div class="col-5">
                                        <div class="btn-group float-right">
                                            <button type="button" class="btn btn-sm btn-success waves-effect"><i class="fa fa-chevron-left"></i></button>
                                            <button type="button" class="btn btn-sm btn-success waves-effect"><i class="fa fa-chevron-right"></i></button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div> -->
                        <!-- end row -->

                    </div> <!-- container-fluid -->
                </div>
                <!-- End Page-content -->

                
               
            </div>
            <!-- end main content-->