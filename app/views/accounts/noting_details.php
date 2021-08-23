

        <!-- Content Body Start -->
        <div class="content-body">

            <!-- Page Headings Start -->
            <div class="row justify-content-between align-items-center mb-10">

                <!-- Page Heading Start -->
                <div class="col-12 col-lg-auto mb-20">
                    <div class="page-heading">
                        <h3>Noting Details</h3>
                    </div>
                </div><!-- Page Heading End -->

            </div><!-- Page Headings End -->

            <div class="row mbn-30">

                <!--Order Details Head Start-->
                <div class="col-12 mb-30">
                    <!-- <div class="row mbn-15">
                        <div class="col-12 col-md-4 mb-15">
                            <h4 class="text-primary fw-600 m-0">Order ID# MSP40022</h4>
                        </div>
                        <div class="text-left text-md-center col-12 col-md-4 mb-15"><span>Status: <span class="badge badge-round badge-success">Shipping</span></span></div>
                        <div class="text-left text-md-right col-12 col-md-4 mb-15">
                            <p>02 February, 2018</p>
                        </div>
                    </div> -->
                </div>
                <!--Order Details Head End-->

                <!--Order Details Customer Information Start-->
                <div class="col-12 mb-30">
                    <div class="order-details-customer-info row mbn-20">

                        <!--Billing Info Start-->
                        <div class="col-lg-4 col-md-6 col-12 mb-20">
                           <!--  <h4 class="mb-25">Billing Info</h4> -->
                            <ul>
                                <li> <span>Company</span> <span><?php echo $data['noting_info']->company;?></span> </li>
                                <li> <span>Value</span> <span><?php echo $data['noting_info']->value;?></span> </li>
                                <li> <span>Volume</span> <span><?php echo $data['noting_info']->volume;?></span> </li>
                                <li> <span>Price</span> <span><?php echo $data['noting_info']->price;?></span> </li>
                                 <li> <span>Noting Date</span><?php echo $data['noting_info']->noting_date;?></li>
                                                                    
                            </ul>
                        </div>
                        <!--Billing Info End-->

                        <!--Shipping Info Start-->
                        <div class="col-lg-4 col-md-6 col-12 mb-20">
                            <h4 class="mb-25">Seller Info</h4>
                            <ul>
                                <li> <span>Name</span> <span><?php echo $data['noting_info']->seller;?></span> </li>
                                <li> <span>Borker</span> <span><?php echo $data['noting_info']->broker_seller;?></span> </li>
                               
                            </ul>
                        </div>
                        <!--Shipping Info End-->

                        <!--Purchase Info Start-->
                        <div class="col-lg-4 col-md-6 col-12 mb-20">
                            <h4 class="mb-25">Buyer Info</h4>
                            <ul>
                                <li> <span>Name</span> <span><?php echo $data['noting_info']->buyer;?></span> </li>
                                <li> <span>Broker</span> <span><?php echo $data['noting_info']->broker_buyer;?></span> </li>
                              
                            </ul>
                        </div>
                        <!--Purchase Info End-->

                    </div>
                </div>
                <!--Order Details Customer Information Start-->

                <!--Order Details List Start-->
                <div class="col-12 mb-30">
                    <div class="row">
                            <div class="d-flex flex-wrap justify-content-end col mbn-10">
                             <a href="<?php echo URLROOT; ?>/public/<?php echo $data['noting_info']->support_doc;?>" download>  <button name="submit" type="submit" class="button button-outline button-primary mb-10 ml-10 mr-0">Download Supporting Document</button></a> 
                                 <a href="<?php echo URLROOT; ?>/public/<?php echo $data['noting_info']->registra_doc;?>" download>   <button name="submit" type="submit" class="button button-outline button-danger mb-10 ml-10 mr-0">Download Document For Registra</button>
                               
                            </div>
                        </div><!-- Button Group End -->

                </div>
                <!--Order Details List End-->
 
            </div>

        </div><!-- Content Body End -->
