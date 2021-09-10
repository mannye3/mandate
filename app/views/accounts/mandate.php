 <div class="nk-content nk-content-fluid">
  <!-- <div class="container" style="max-width:800px;margin:0 auto;margin-top:50px;">  
            <div>
                <h2 style="margin-bottom:50px;">Live Demo: Insert and load records using Jquery,Ajax and Php without refreshing page</h2>
                <div class="form-group">
                    <label for="email">What are you doing today?</label>
                    <textarea name="message" class="form-control" id="message"></textarea>
                    <div class="error" id="error_message"></div>
                </div>
                <div class="form-group">
                    <button class="btn btn-success" id="save">Save</button>
                </div>

                <div class="display-content">
                    <div class="message-wrap"><?php echo $data['sleep']->message; ?></div>';
                   
                </div>
            </div>
        </div>

   <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
        <script>
            $(document).on("click", "#save", function () {
                //get value of message 
                var message = $("#message").val();
                //check if value is not empty
                if (message == "") {
                    $("#error_message").html("Please enter message");
                    return false;
                } else {
                    $("#error_message").html("");
                }
                //Ajax call to send data to the insert.php
                $.ajax({
                    type: "POST",
                    url: "<?php echo URLROOT; ?>/accounts/add_test",
                    data: {message: message},
                    cache: false,
                    success: function (data) {
                        //Insert data before the message wrap div
                        $(data).insertBefore(".message-wrap:first");
                        //Clear the textarea message
                        $("#message").val("");
                    }
                });
            });
        </script>


 -->





                    <div class="container-xl wide-lg">
                        <div class="nk-content-body">
                            <div class="components-preview wide-md mx-auto">
                                <div class="nk-block-head nk-block-head-lg wide-sm">
                                 
                                    </div>
                                </div><!-- .nk-block-head -->
                                <div class="nk-block-head-content" style="margin: 0px 0px 0px 1000px ">
                                        <a href="<?php echo $_SERVER['HTTP_REFERER'] ?>" class="btn btn-outline-light bg-white d-none d-sm-inline-flex"><em class="icon ni ni-arrow-left"></em><span>Back</span></a>
                                        <a href="html/user-list-regular.html" class="btn btn-icon btn-outline-light bg-white d-inline-flex d-sm-none"><em class="icon ni ni-arrow-left"></em></a>
                                    </div>
                                <div class="nk-block nk-block-lg">
                                     <div class="nk-block nk-block-lg">
                                    <div class="nk-block-head">
                                        <div class="nk-block-head-content">
                                            <h4 class="title nk-block-title"><?php echo $data['mandate_info']->company_name; ?></h4>
                                            <div class="nk-block-des">
                                           
                                            </div>
                                        </div>
                                    </div>
                                    <div class="card card-preview">
                                        <?php flash('alert_message'); ?>
                                        <div class="card-inner">
                                            <ul class="nav nav-tabs mt-n3">
                                                <li class="nav-item">
                                                    <a class="nav-link active" data-toggle="tab" href="#tabItem5"><em class="icon ni ni-users"></em><span>Organization </span></a>
                                                </li>

                                                <li class="nav-item">
                                                    <a class="nav-link" data-toggle="tab" href="#tabItem4"><em class="icon ni ni-user"></em><span>Manager Details </span></a>
                                                </li>

                                                <li class="nav-item">
                                                    <a class="nav-link" data-toggle="tab" href="#tabItem6"><em class="icon ni ni-lock-alt"></em><span>Account Details </span></a>
                                                </li>
                                                <li class="nav-item">
                                                    <a class="nav-link" data-toggle="tab" href="#tabItem7"><em class="icon ni ni-file-img"></em><span>Mandate Files </span></a>
                                                </li>

                                                 <?php if ($data['mandate_info']->category  !== "ISSUINGHOUSE") : ?>
                                                 <li class="nav-item">
                                                    <a class="nav-link" data-toggle="tab" href="#tabItem8"><em class="icon ni ni-users"></em><span>Traders </span></a>
                                                </li>
                                            <?php endif; ?>
                                               
                                            </ul>
                                            <div class="tab-content">
                                                <div class="tab-pane active" id="tabItem5">
                                                    <div class="nk-block-head">
                                    <div class="nk-block-head-content">
                                        <h5 class="nk-block-title">Organization  Information</h5> 
                                        <div class="nk-block-des" style="text-align: left;">

                                            
                                          <?php if ($data['mandate_info']->mandate_status == '1') {
                                                  echo ' <span class="badge badge-sm badge-success" data-toggle="tooltip" data-placement="top" title="'.$data['mandate_info']->status_note.'" style="margin: -70px 0px 0px 300px">Active</span>';

                                          }  
                                          if ($data['mandate_info']->mandate_status == '2') {
                                                  echo ' <span class="badge badge-sm badge-warning" data-toggle="tooltip" data-placement="top" title="'.$data['mandate_info']->status_note.'"  style="margin: -70px 0px 0px 300px">Suspended</span>';
                                          }


                                          if ($data['mandate_info']->mandate_status == '3') {
                                                  echo ' <span class="badge badge-sm badge-danger" data-toggle="tooltip" data-placement="top" title="'.$data['mandate_info']->status_note.'"  style="margin: -70px 0px 0px 300px">Revoked</span>';
                                          }

                                          if ($data['mandate_info']->mandate_status == '4') {
                                                  echo ' <span class="badge badge-sm badge-danger" data-toggle="tooltip" data-placement="top" title="'.$data['mandate_info']->status_note.'"  style="margin: -70px 0px 0px 300px">Revoked</span>';
                                          }


                                          if ($data['mandate_info']->mandate_status == '5') {
                                                  echo ' <span class="badge badge-sm badge-danger" data-toggle="tooltip" data-placement="top" title="'.$data['mandate_info']->status_note.'"  style="margin: -70px 0px 0px 300px">Revoked</span>';
                                          }

                                          if ($data['mandate_info']->mandate_status == '6') {
                                                  echo ' <span class="badge badge-sm badge-danger" data-toggle="tooltip" data-placement="top" title="'.$data['mandate_info']->status_note.'"  style="margin: -70px 0px 0px 300px">Revoked</span>';
                                          }

                                          if ($data['mandate_info']->mandate_status == '7') {
                                                  echo ' <span class="badge badge-sm badge-danger" data-toggle="tooltip" data-placement="top" title="'.$data['mandate_info']->status_note.'"  style="margin: -70px 0px 0px 300px">Revoked</span>';
                                          }


                                           ?> <a href="#change-status" data-toggle="modal"  data-toggle="dropdown"><span class="btn btn-round btn-primary" style="margin: -70px 0px 0px 200px">Change Status</span></a>


                                           <a href="<?php echo URLROOT; ?>/accounts/mandate_activities/<?php echo $data['mandate_info']->mandate_code; ?>"><span class="btn btn-round btn-secondary" style="margin: -70px 0px 0px 100px">View Activities</span></a>

                                      

                                         
                                         
                                         


                                             <?php if ($data['mandate_info']->category  == 'ISSUINGHOUSE') : ?>
                                              <p>FIRM FEES FOR <?php  error_reporting(0); echo date("Y"); ?></p> 

                                                        <table class="table">
                                                            <thead class="thead-light">
                                                          <tr>
                                                            <th>FEES</th>
                                                            <th>AMOUNT</th>
                                                            <th>STATUS</th>
                                                            <th>CURRENT PAYMENT</th>
                                                             <th>CURRENT CREDIT</th>
                                                            
                                                          </tr>
                                                          <tr>
                                                            <td>ANNUAL FEE ISSUING HOUSE </td>
                                                            <td>₦<?php echo number_format($data['T_Fee5']->amount) ?> </td>
                                                            <td><?php if ($data['cyf5']->fee_code == "") {
                                                               echo '<span class="tb-status text-warning">Not Paid</span></td>';
                                                            } 

                                                            if ($data['cyf5']->fee_code == !"") {
                                                               echo '<span class="tb-status text-success">Paid</span></td>';
                                                            }


                                                            ?>
                                                        </td>
                                                        <td></td>
                                                          <td></td>
                                                                
                                                          </tr>

                                                          <tr>
                                                            <td>ANNUAL FEE PLATFORM MAINTENANCE </td>
                                                            <td>₦<?php echo number_format( $data['T_Fee2']->amount) ?>
                                                                </td>
                                                             <td><?php if ($data['cyf2']->fee_code == "") {
                                                               echo '<span class="tb-status text-warning">Not Paid</span></td>';
                                                            } 

                                                            if ($data['cyf2']->fee_code == !"") {
                                                               echo '<span class="tb-status text-success">Paid</span></td>';
                                                            }


                                                            ?>
                                                        </td>
                                                        <td></td>
                                                         <td></td>
                                                          </tr>



                                                       

                                                          <tr>
                                                              <td><b>TOTAL DUE</b></td>
                                                              <td><b style="color: red;">₦<?php  $totaldue = $data['T_Fee5']->amount + $data['T_Fee2']->amount;
                                                               echo   number_format($totaldue) ; ?></b></td>
                                                              <td></td>
                                                              <td><b style="color: green;">₦<?php $current_payment =  $data['toalf5']->TotalISH + $data['toalf2']->TotalMadatePM;
                                                                echo   number_format($current_payment) ;  ?></b></td>

                                                                <td><b style="color: green;">N<?php  
                                                                   echo number_format($data['allaccamount_credit']->amount);
                                                                     ?></b></td>

                                                          </tr>



                                                          
                                                        </table>

                                                        <?php endif; ?>


                                                        
                                                       <!--  <?php if ($data['mandate_info']->category  == 'BROKER') : ?>
                                                          <p>FIRM FEES FOR <?php  error_reporting(0); echo date("Y"); ?></p> 

                                                        <table class="table">
                                                            <thead class="thead-light">
                                                           <tr>
                                                            <th>FEES</th>
                                                            <th>AMOUNT</th>
                                                            <th>STATUS</th>
                                                            <th>CURRENT PAYMENT</th>
                                                             <th>CURRENT CREDIT</th>
                                                            
                                                          </tr>
                                                          <tr>
                                                            <td>ANNUAL FEE BROKER   </td>
                                                            <td>₦<?php echo number_format($data['T_Fee4']->amount) ?> </td>
                                                            <td><?php if ($data['cyf4']->fee_code == "") {
                                                               echo '<span class="tb-status text-warning">Not Paid</span></td>';
                                                            } 

                                                            if ($data['cyf4']->fee_code == !"") {
                                                               echo '<span class="tb-status text-success">Paid</span></td>';
                                                            }


                                                            ?>
                                                        </td>
                                                        <td></td>
                                                          <td></td>
                                                                
                                                          </tr>

                                                          <tr>
                                                            <td>ANNUAL FEE PLATFORM MAINTENANCE </td>
                                                            <td>₦<?php echo number_format( $data['T_Fee2']->amount) ?>
                                                                </td>
                                                             <td><?php if ($data['cyf2']->fee_code == "") {
                                                               echo '<span class="tb-status text-warning">Not Paid</span></td>';
                                                            } 

                                                            if ($data['cyf2']->fee_code == !"") {
                                                               echo '<span class="tb-status text-success">Paid</span></td>';
                                                            }


                                                            ?>
                                                        </td>
                                                        <td></td>
                                                         <td></td>
                                                          </tr>



                                                            <tr>
                                                            <td>ANNUAL FEE AUTHORISED TRADER  (<?php echo $alltraders = $data['ALL_traders']->TotalTraders; ?>)</td>

                                                            <td>₦<?php  $trader_amount = $data['T_Fee3']->amount;
                                                            $traderfees = $alltraders * $trader_amount; 
                                                            echo   number_format($traderfees);
                                                            ?></td>
                                                            <td><span class="tb-status text-success"> (<?php if ($data['T_traderPaid']->TotalTraderPaid == "") {
                                                                   echo '0';
                                                                } 

                                                                    if ($data['T_traderPaid']->TotalTraderPaid == !"") {
                                                                   echo $data['T_traderPaid']->TotalTraderPaid;
                                                                } 
                                                                 ?>)</span> </td>
                                                                 <td></td>
                                                                  <td></td>
                                                          </tr>

                                                          <tr>
                                                              <td><b>TOTAL DUE</b></td>
                                                              <td><b style="color: red;">₦<?php  $totaldue = $data['T_Fee4']->amount + $data['T_Fee2']->amount + $traderfees;
                                                               echo   number_format($totaldue) ; ?></b></td>
                                                              <td></td>
                                                              <td><b style="color: green;">₦<?php $current_payment =  $data['toalf4']->TotalBAF + $data['toalf2']->TotalMadatePM + $data['toalf3']->TotalTF;
                                                                echo   number_format($current_payment) ;  ?></b></td>

                                                                   <td><b style="color: green;">N<?php  
                                                                   echo number_format($data['allaccamount_credit']->amount);
                                                                     ?></b></td>




                                                          </tr>

                                                          
                                                        </table>

                                                        <?php endif; ?> -->






                                                         <?php if ($data['mandate_info']->category  == 'BROKER') : ?>
                                                          <p>FIRM FEES FOR <?php  error_reporting(0); echo date("Y"); ?></p> 

                                                        <table class="table">
                                                            <thead class="thead-light">
                                                           <tr>
                                                            <th>FEES</th>
                                                            <th>AMOUNT</th>
                                                            <th>AMOUNT PAID</th>
                                                            <th>STATUS</th>
                                                            <th>CURRENT PAYMENT</th>
                                                             <th>CURRENT CREDIT</th>
                                                            
                                                          </tr>
                                                          <tr>
                                                            <td>ANNUAL FEE BROKER   </td>
                                                            <td>₦<?php echo number_format($data['T_Fee4']->amount) ?> </td>
                                                              <td>₦

                                                                 <?php  if($data['cyf4']->discount_amount == "" ) : ?>
                                                                        <?php echo number_format($data['cyf4']->amount) ?>
                                                                     <?php endif ?>

                                                                        <?php  if($data['cyf4']->discount_amount !== "" ) : ?>
                                                                         <?php echo number_format($data['cyf4']->discount_amount) ?>

                                                                     <?php endif ?> 

                                                                     <?php  if($data['cyf4']->discount == 1 ) : ?>
                                                                        (5%)
                                                                         
                                                                     <?php endif ?> 


                                                                     <?php  if($data['cyf4']->discount == 2 ) : ?>
                                                                        (10%)
                                                                         
                                                                     <?php endif ?> 


                                                                </td>
                                                            <td><?php if ($data['cyf4']->fee_code == "") {
                                                               echo '<span class="tb-status text-warning">Not Paid</span></td>';
                                                            } 

                                                            if ($data['cyf4']->fee_code == !"") {
                                                               echo '<span class="tb-status text-success">Paid</span></td>';
                                                            }


                                                            ?>
                                                        </td>
                                                        <td></td>
                                                          <td></td>
                                                                
                                                          </tr>

                                                          <tr>
                                                            <td>ANNUAL FEE PLATFORM MAINTENANCE </td>
                                                            <td>₦<?php echo number_format( $data['T_Fee2']->amount) ?>
                                                                </td>
                                                                <td>₦

                                                                 <?php  if($data['cyf2']->discount_amount == "" ) : ?>
                                                                        <?php echo number_format($data['cyf2']->amount) ?>
                                                                     <?php endif ?>

                                                                        <?php  if($data['cyf2']->discount_amount !== "" ) : ?>
                                                                         <?php echo number_format($data['cyf2']->discount_amount) ?>

                                                                     <?php endif ?> 

                                                                     <?php  if($data['cyf2']->discount == 1 ) : ?>
                                                                        (5%)
                                                                         
                                                                     <?php endif ?> 


                                                                     <?php  if($data['cyf2']->discount == 2 ) : ?>
                                                                        (10%)
                                                                         
                                                                     <?php endif ?> 


                                                                </td>
                                                             <td><?php if ($data['cyf2']->fee_code == "") {
                                                               echo '<span class="tb-status text-warning">Not Paid</span></td>';
                                                            } 

                                                            if ($data['cyf2']->fee_code == !"") {
                                                               echo '<span class="tb-status text-success">Paid</span></td>';
                                                            }


                                                            ?>
                                                        </td>
                                                        <td></td>
                                                         <td></td>
                                                          </tr>



                                                            <tr>
                                                            <td>ANNUAL FEE AUTHORISED TRADER  (<?php echo $alltraders = $data['ALL_traders']->TotalTraders; ?>)</td>

                                                            <td>₦<?php  $trader_amount = $data['T_Fee3']->amount;
                                                            $traderfees = $alltraders * $trader_amount; 
                                                            echo   number_format($traderfees);
                                                            ?></td>
                                                             <td>₦
                                                                  <?php  if($data['toalf3_firm']->discount_amount == "" ) : ?>
                                                                        <?php echo number_format($data['toalf3_firm']->amount) ?>
                                                                     <?php endif ?>

                                                                        <?php  if($data['toalf3_firm']->discount_amount !== "" ) : ?>
                                                                         <?php echo number_format($data['toalf3_firm']->discount_amount) ?>

                                                                     <?php endif ?> 

                                                                     <?php  if($data['toalf3_firm']->discount == 1 ) : ?>
                                                                        (5%)
                                                                         
                                                                     <?php endif ?> 


                                                                     <?php  if($data['toalf3_firm']->discount == 2 ) : ?>
                                                                        (10%)
                                                                         
                                                                     <?php endif ?> 


                                                                  


                                                                </td>
                                                            <td><span class="tb-status text-success"> (<?php if ($data['T_traderPaid']->TotalTraderPaid == "") {
                                                                   echo '0';
                                                                } 

                                                                    if ($data['T_traderPaid']->TotalTraderPaid == !"") {
                                                                   echo $data['T_traderPaid']->TotalTraderPaid;
                                                                } 
                                                                 ?>)</span> </td>
                                                                 <td></td>
                                                                  <td></td>
                                                          </tr>

                                                          <tr>
                                                              <td><b>TOTAL DUE</b></td>
                                                              <td><b style="color: red;">₦<?php  $totaldue = $data['T_Fee4']->amount + $data['T_Fee2']->amount + $traderfees;
                                                               echo   number_format($totaldue) ; ?></b></td>
                                                              <td></td>
                                                               <td></td>
                                                              <td><b style="color: green;">₦<?php $current_payment =  $data['toalf4']->TotalBAF + $data['toalf2']->TotalMadatePM + $data['toalf3']->TotalTF;
                                                                echo   number_format($current_payment) ;  ?></b></td>

                                                                   <td><b style="color: green;">N<?php  
                                                                   echo number_format($data['allaccamount_credit']->amount);
                                                                     ?></b></td>




                                                          </tr>

                                                          
                                                        </table>

                                                        <?php endif; ?>


 


                                        
                                          
                                                  <?php if ($data['mandate_info']->category  == 'BROKER/DEALER') : ?>
                                                    <p>FIRM FEES FOR <?php  error_reporting(0); echo date("Y"); ?></p> 

                                                        <table class="table">
                                                            <thead class="thead-light">
                                                          <tr>
                                                            <th>FEES</th>
                                                            <th>AMOUNT</th>
                                                            <th>STATUS</th>
                                                            <th>CURRENT PAYMENT</th>
                                                            <th>CURRENT CREDIT</th>
                                                          </tr>
                                                          <tr>
                                                            <td>ANNUAL FEE BROKER DEALER   </td>
                                                            <td>₦<?php echo number_format($data['T_Fee']->amount) ?> </td>
                                                            <td><?php if ($data['cyf']->fee_code == "") {
                                                               echo '<span class="tb-status text-warning">Not Paid</span></td>';
                                                            } 

                                                            if ($data['cyf']->fee_code == !"") {
                                                               echo '<span class="tb-status text-success">Paid</span></td>';
                                                            }


                                                            ?>
                                                        </td>
                                                        <td></td>
                                                          <td></td>
                                                                
                                                          </tr>

                                                          <tr>
                                                            <td>ANNUAL FEE PLATFORM MAINTENANCE </td>
                                                            <td>₦<?php echo number_format( $data['T_Fee2']->amount) ?>
                                                                </td>
                                                             <td><?php if ($data['cyf2']->fee_code == "") {
                                                               echo '<span class="tb-status text-warning">Not Paid</span></td>';
                                                            } 

                                                            if ($data['cyf2']->fee_code == !"") {
                                                               echo '<span class="tb-status text-success">Paid</span></td>';
                                                            }


                                                            ?>
                                                        </td>
                                                        <td></td>
                                                         <td></td>
                                                          </tr>



                                                            <tr>
                                                            <td>ANNUAL FEE AUTHORISED TRADER  (<?php echo $alltraders = $data['ALL_traders']->TotalTraders; ?>)</td>

                                                            <td>₦<?php  $trader_amount = $data['T_Fee3']->amount;
                                                            $traderfees = $alltraders * $trader_amount; 
                                                            echo   number_format($traderfees);
                                                            ?></td>
                                                            <td><span class="tb-status text-success"> (<?php if ($data['T_traderPaid']->TotalTraderPaid == "") {
                                                                   echo '0';
                                                                } 

                                                                    if ($data['T_traderPaid']->TotalTraderPaid == !"") {
                                                                   echo $data['T_traderPaid']->TotalTraderPaid;
                                                                } 
                                                                 ?>)</span> </td>
                                                                 <td></td>
                                                                  <td></td>

                                                          </tr>

                                                          <tr>
                                                              <td><b>TOTAL DUE</b></td>
                                                              <td><b style="color: red;">₦<?php  $totaldue = $data['T_Fee']->amount + $data['T_Fee2']->amount + $traderfees;
                                                               echo   number_format($totaldue) ; ?></b></td>
                                                              <td></td>
                                                              <td><b style="color: green;">₦<?php $current_payment =  $data['toalf1']->TotalBDF + $data['toalf2']->TotalMadatePM + $data['toalf3']->TotalTF;
                                                                echo   number_format($current_payment) ;  ?></b></td>
                                                                 <td><b style="color: green;">N<?php  
                                                                   echo number_format($data['allaccamount_credit']->amount);
                                                                     ?></b></td>

                                                          </tr>

                                                          
                                                        </table>

                                                        <?php endif; ?>



                                                            <?php if ($data['mandate_info']->category  == 'SETTLEMENTBANK') : ?>
                                                    <p>FIRM FEES FOR <?php  error_reporting(0); echo date("Y"); ?></p> 

                                                        <table class="table">
                                                            <thead class="thead-light">
                                                          <tr>
                                                            <th>FEES</th>
                                                            <th>AMOUNT</th>
                                                            <th>STATUS</th>
                                                            <th>CURRENT PAYMENT</th>
                                                            <th>CURRENT CREDIT</th>
                                                          </tr>
                                                          <tr>
                                                            <td>ANNUAL FEE SETTLEMENT BANK </td>
                                                            <td>₦<?php echo number_format($data['T_Fee6']->amount) ?> </td>
                                                            <td><?php if ($data['cyf6']->fee_code == "") {
                                                               echo '<span class="tb-status text-warning">Not Paid</span></td>';
                                                            } 

                                                            if ($data['cyf6']->fee_code == !"") {
                                                               echo '<span class="tb-status text-success">Paid</span></td>';
                                                            }


                                                            ?>
                                                        </td>
                                                        <td></td>
                                                          <td></td>
                                                                
                                                          



                                                       

                                                          <tr>
                                                              <td><b>TOTAL DUE</b></td>
                                                              <td><b style="color: red;">₦<?php  $totaldue = $data['T_Fee6']->amount;
                                                               echo   number_format($totaldue) ; ?></b></td>
                                                              <td></td>
                                                              <td><b style="color: green;">₦<?php $current_payment =  $data['toalf6']->TotalSUB;
                                                                echo   number_format($current_payment) ;  ?></b></td>
                                                                 <td><b style="color: green;">₦<?php  
                                                                   echo number_format($data['allaccamount_credit']->amount);
                                                                     ?></b></td>

                                                          </tr>

                                                          
                                                        </table>

                                                        <?php endif; ?>






                                                            <?php if ($data['mandate_info']->category  == 'SUB-BROKER') : ?>
                                                    <p>FIRM FEES FOR <?php  error_reporting(0); echo date("Y"); ?></p> 

                                                        <table class="table">
                                                            <thead class="thead-light">
                                                          <tr>
                                                            <th>FEES</th>
                                                            <th>AMOUNT</th>
                                                            <th>STATUS</th>
                                                            <th>CURRENT PAYMENT</th>
                                                            <th>CURRENT CREDIT</th>
                                                          </tr>
                                                          <tr>
                                                            <td>ANNUAL FEE SETTLEMENT BANK </td>
                                                            <td>₦<?php echo number_format($data['T_Fee7']->amount) ?> </td>
                                                            <td><?php if ($data['cyf7']->fee_code == "") {
                                                               echo '<span class="tb-status text-warning">Not Paid</span></td>';
                                                            } 

                                                            if ($data['cyf7']->fee_code == !"") {
                                                               echo '<span class="tb-status text-success">Paid</span></td>';
                                                            }


                                                            ?>
                                                        </td>
                                                        <td></td>
                                                          <td></td>
                                                                
                                                          



                                                       

                                                          <tr>
                                                              <td><b>TOTAL DUE</b></td>
                                                              <td><b style="color: red;">₦<?php  $totaldue = $data['T_Fee7']->amount;
                                                               echo   number_format($totaldue) ; ?></b></td>
                                                              <td></td>
                                                              <td><b style="color: green;">₦<?php $current_payment =  $data['toalf7']->TotalSUB;
                                                                echo   number_format($current_payment) ;  ?></b></td>
                                                                 <td><b style="color: green;">N<?php  
                                                                   echo number_format($data['allaccamount_credit']->amount);
                                                                     ?></b></td>

                                                          </tr>

                                                          
                                                        </table>

                                                        <?php endif; ?>



                            
                                        </div>
                                    </div>
                                </div><!-- .nk-block-head -->
                                <div class="nk-data data-list">
                                    <div class="data-head">
                                        <h6 class="overline-title">Basics</h6>
                                    </div>
                                    <div class="data-item" >
                                        <div class="data-col">
                                            <span class="data-label">Organization</span>
                                            <span class="data-value"><?php echo $data['mandate_info']->company_name; ?></span>
                                        </div>

                                        

                                         <?php  if ($_SESSION['role'] !== 'User') :   ?>

                                            <a href="<?php echo URLROOT; ?>/accounts/edit_mandate/<?php echo $data['mandate_info']->mandate_code; ?>">
                                        <div class="data-col data-col-end"><span class="btn btn-round btn-secondary">Edit Details</span></div>  </a>

                                    <?php endif;  ?>
                                       
                                        

                                    </div><!-- .data-item -->
                                    <div class="data-item">
                                        <div class="data-col">
                                            <span class="data-label">Mandate Code</span>
                                            <span class="data-value"><?php echo $data['mandate_info']->mandate_code; ?></span>
                                        </div>
                                        <div class="data-col data-col-end"></div>
                                    </div><!-- .data-item -->
                                     <div class="data-item">
                                        <div class="data-col">
                                            <span class="data-label">Category</span>
                                            <span class="data-value"><?php echo $data['mandate_info']->category; ?></span>
                                        </div>
                                        <div class="data-col data-col-end"></div>
                                    </div><!-- .data-item -->
                                    <div class="data-item">
                                        <div class="data-col">
                                            <span class="data-label">RC Number</span>
                                            <span class="data-value"><?php echo $data['mandate_info']->rec_number; ?></span>
                                        </div>
                                        <div class="data-col data-col-end"></div>
                                    </div><!-- .data-item -->
                                    <div class="data-item">
                                        <div class="data-col">
                                            <span class="data-label">Date Of Incorporation</span>
                                            <span class="data-value"><?php echo $data['mandate_info']->date_of_incorporation; ?></span>
                                        </div>
                                        <div class="data-col data-col-end"></div>
                                    </div><!-- .data-item -->
                                    <div class="data-item">
                                        <div class="data-col">
                                            <span class="data-label">Sec Registered</span>
                                            <span class="data-value"><?php echo $data['mandate_info']->sec_registered; ?></span>
                                        </div>
                                        <div class="data-col data-col-end"></div>
                                    </div><!-- .data-item -->
                                    <div class="data-item">
                                        <div class="data-col">
                                            <span class="data-label">Email</span>
                                            <span class="data-value"><?php echo $data['mandate_info']->email;   ?></span>
                                        </div>
                                         <div class="data-col data-col-end"></div>
                                    </div><!-- .data-item -->
                                    <div class="data-item">
                                        <div class="data-col">
                                            <span class="data-label">Phone Number</span>
                                            <span class="data-value text-soft"><?php echo $data['mandate_info']->phone;   ?></span>
                                        </div>
                                        <div class="data-col data-col-end"></div>
                                    </div><!-- .data-item -->
                                    <div class="data-item">
                                        <div class="data-col">
                                            <span class="data-label">Website</span>
                                            <span class="data-value"><?php echo $data['mandate_info']->website;   ?></span>
                                        </div>
                                        <div class="data-col data-col-end"></div>
                                    </div><!-- .data-item -->
                                    <div class="data-item" data-tab-target="#address">
                                        <div class="data-col">
                                            <span class="data-label">Address</span>
                                            <span class="data-value"><?php echo $data['mandate_info']->address;   ?></span>
                                        </div>
                                        <div class="data-col data-col-end"></div>
                                    </div><!-- .data-item -->
                                </div><!-- .nk-data -->
                                 <?php  foreach($data['all_names'] as $all_names) :  ?>
                                 <?php endforeach ?>

                    <?php if ($all_names->mandate_code == $data['mandate_info']->mandate_code) : ?>

                                  <div class="nk-data data-list">
                                    <div class="data-head">
                                        <h6 class="overline-title">Previous Names </h6>
                                    </div>



                                    <div class="row g-4">

                                            
                                       
                                                    
                                                    <div class="col-lg-6">

                                                        <div class="form-group">
                                                            
                                                            <div class="form-control-wrap">
                                                             <ol type="a" class="col-lg-12">
                                            <?php  foreach($data['all_names'] as $all_names) :  ?>
                                               <b> <li>  <?php echo $all_names->old_name; ?></li> </b>
                                                <?php endforeach; ?>

                                            </ol>

                                                            </div>
                                                        </div>
                                                    </div>
                                                

                                                        </div>
                                                    </div>
                                                <?php  endif;  ?>

                                                        <div class="nk-data data-list">
                                    <div class="data-head">
                                        <h6 class="overline-title">Other Contact Details </h6>
                                    </div>

                                   
                                          
                                                <div class="row g-4">
                                                    <div class="col-lg-6">
                                                        <div class="form-group">
                                                            <label class="form-label" for="full-name-1">Principal Contact Name</label>
                                                            <div class="form-control-wrap">
                                                               <?php echo $data['mandate_info']->principal_contact_name; ?>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-6">
                                                        <div class="form-group">
                                                            <label class="form-label" for="email-address-1">Principal Contact Email</label>
                                                            <div class="form-control-wrap">
                                                              <?php echo $data['mandate_info']->principal_contact_email; ?>
                                                            </div>
                                                        </div>
                                                    </div>

                                                    <div class="col-lg-6">
                                                        <div class="form-group">
                                                            <label class="form-label" for="email-address-1">Principal Contact Phone</label>
                                                            <div class="form-control-wrap">
                                                              <?php echo $data['mandate_info']->principal_contact_phone; ?>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    
                                                    
                                                        </div>

                                                        <br>
                                                        <hr>
                                                        <div class="row g-4">
                                                    <div class="col-lg-6">
                                                        <div class="form-group">
                                                            <label class="form-label" for="full-name-1">Enquiries Contact Name </label>
                                                            <div class="form-control-wrap">
                                                               <?php echo $data['mandate_info']->enquiries_contact_name; ?>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-6">
                                                        <div class="form-group">
                                                            <label class="form-label" for="email-address-1">Enquiries Contact Email</label>
                                                            <div class="form-control-wrap">
                                                              <?php echo $data['mandate_info']->enquiries_contact_email; ?>
                                                            </div>
                                                        </div>
                                                    </div>

                                                    <div class="col-lg-6">
                                                        <div class="form-group">
                                                            <label class="form-label" for="email-address-1">Enquiries Contact Phone</label>
                                                            <div class="form-control-wrap">
                                                              <?php echo $data['mandate_info']->enquiries_contact_phone; ?>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    
                                                    
                                                        </div>


                                                        <br>
                                                        <hr>
                                                        <div class="row g-4">
                                                    <div class="col-lg-6">
                                                        <div class="form-group">
                                                            <label class="form-label" for="full-name-1">Compliance Contact Name</label>
                                                            <div class="form-control-wrap">
                                                               <?php echo $data['mandate_info']->compliance_contact_name; ?>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-6">
                                                        <div class="form-group">
                                                            <label class="form-label" for="email-address-1">Compliance Contact Email</label>
                                                            <div class="form-control-wrap">
                                                              <?php echo $data['mandate_info']->compliance_contact_email; ?>
                                                            </div>
                                                        </div>
                                                    </div>

                                                    <div class="col-lg-6">
                                                        <div class="form-group">
                                                            <label class="form-label" for="email-address-1">Compliance Contact Phone</label>
                                                            <div class="form-control-wrap">
                                                              <?php echo $data['mandate_info']->compliance_contact_phone; ?>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    
                                                    
                                                        </div>
                                             



                                    <div class="data-item"  data-toggle="modal" data-target="#profile-edit">
                                       
                                         
                                    </div><!-- .data-item -->


                                  

                                    <div class="nk-data data-list">
                                    <div class="data-head">
                                        <h6 class="overline-title">Settlement Bank Details</h6>
                                    </div>
                                   
                                     <div class="data-item">
                                        <div class="data-col">
                                            <span class="data-label">Bank Name</span>
                                            <span class="data-value"><?php echo $data['mandate_info']->settlement_bank_name; ?></span>
                                        </div>
                                        <div class="data-col data-col-end"></div>
                                    </div><!-- .data-item -->
                                       <?php if ($_SESSION['role'] == 'Admin') : ?>
                                    <div class="data-item">
                                        <div class="data-col">
                                            <span class="data-label">Bank Branch</span>
                                            <span class="data-value"><?php echo $data['mandate_info']->settlement_bank_branch; ?></span>
                                        </div>
                                        <div class="data-col data-col-end"></div>
                                    </div><!-- .data-item -->
                                    
                                    <div class="data-item">
                                        <div class="data-col">
                                           <span class="data-label"> Bank Account Number</span>
                                            <span class="data-value"><?php echo $data['mandate_info']->settlement_bank_account_number; ?></span>
                                        </div>
                                        <div class="data-col data-col-end"></div>
                                    </div><!-- .data-item -->

                                    <div class="data-item">
                                        <div class="data-col">
                                           <span class="data-label"> Bank Account Name``</span>
                                            <span class="data-value"><?php echo $data['mandate_info']->settlement_bank_account_name; ?></span>
                                        </div>
                                        <div class="data-col data-col-end"></div>
                                    </div><!-- .data-item -->  
                                        <?php endif; ?>       
                                </div><!-- .nk-data -->
                                 
                                    
                                   
                                    
                                    
                                    
                                </div><!-- .nk-data -->
                               
                                                </div>


                                        <div class="tab-pane" id="tabItem4">
                                                    <div class="tab-content">
                                                <div class="tab-pane active" id="file-grid-view">
                                                   <div class="toggle-wrap nk-block-tools-toggle">
                                            <a href="#" class="btn btn-icon btn-trigger toggle-expand mr-n1" data-target="pageMenu"><em class="icon ni ni-menu-alt-r"></em></a>
                                            <div class="toggle-expand-content" data-content="pageMenu" style="float: right;">
                                                <ul class="nk-block-tools g-3">
                                                       <?php  if ($_SESSION['role'] !== 'User') :   ?>
                                                    <li class="nk-block-tools-opt">
                                                        <div class="drodown">
                                                            <a href="#add-manager" data-toggle="modal" class="dropdown-toggle btn btn-icon btn-primary" data-toggle="dropdown"><em class="icon ni ni-plus"></em></a>
                                                            
                                                        </div>
                                                    </li>
                                                <?php endif ?>
                                                </ul>
                                            </div>
                                            <br><br><br>
                                        </div><!-- .toggle-wrap -->
                                                    <div>
                                                        
                                                       <table class="datatable-init nk-tb-list nk-tb-ulist" data-auto-responsive="false">
                                                <thead>
                                                    <tr class="nk-tb-item nk-tb-head">
                                                        <th class="nk-tb-col nk-tb-col-check">
                                                            <div class="custom-control custom-control-sm custom-checkbox notext">
                                                                <input type="checkbox" class="custom-control-input" id="uid">
                                                                <label class="custom-control-label" for="uid"></label>
                                                            </div>
                                                        </th>
                                                        <th class="nk-tb-col"><span class="sub-text">Manger</span></th>
                                                        <th class="nk-tb-col tb-col-mb"><span class="sub-text">Email</span></th>
                                                        <th class="nk-tb-col tb-col-md"><span class="sub-text">Phone</span></th>

                                                        <th class="nk-tb-col tb-col-md"><span class="sub-text">Role</span></th>
                                                     
                                                        <th class="nk-tb-col tb-col-lg"><span class="sub-text">Company Code</span></th>
                                                        <th class="nk-tb-col tb-col-md"><span class="sub-text">Status</span></th>
                                                        <th class="nk-tb-col nk-tb-col-tools text-right">
                                                        </th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <?php $count = 0;  foreach($data['mandate_managers'] as $mandate_manager) : $count++; ?>
                                                    <tr class="nk-tb-item">
                                                        <td class="nk-tb-col nk-tb-col-check">
                                                           <span><?php echo $count; ?></span>
                                                        </td>
                                                        <td class="nk-tb-col">
                                                            <div class="user-card">
                                                              
                                                                <div class="user-info">
                                                                    <span class="tb-lead"><?php echo $mandate_manager->manager_name; ?><span class="dot dot-success d-md-none ml-1"></span></span>
                                                                  
                                                                </div>
                                                            </div>
                                                        </td>
                                                        <td class="nk-tb-col tb-col-mb" data-order="35040.34">
                                                            <span class="tb-amount"><?php echo $mandate_manager->manager_email; ?></span>
                                                        </td>
                                                        <td class="nk-tb-col tb-col-md">
                                                            <span class="tb-amount"><?php echo $mandate_manager->manager_phone; ?></span>
                                                        </td>

                                                        <td class="nk-tb-col tb-col-md">
                                                            <span class="tb-amount"><?php echo $mandate_manager->manager_role; ?></span>
                                                        </td>
                                                        
                                                        <td class="nk-tb-col tb-col-lg">
                                                            <span class="tb-amount"><?php echo $mandate_manager->mandate_code; ?></span>
                                                        </td>
                                                        <td class="nk-tb-col tb-col-md">
                                                            <?php if ($mandate_manager->status == 1) {
                                                               echo ' <span class="tb-status text-success">Active</span>';
                                                            } 

                                                            if ($mandate_manager->status == 2) {
                                                               echo ' <span class="tb-status text-warning">Suspended</span>';
                                                            }


                                                            if ($mandate_manager->status == 3) {
                                                               echo '<span class="tb-status text-danger">Resigned</span>';
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
                                                                    <button class="btn" data-toggle="modal" data-target="#exampleModal<?php echo $mandate_manager->id; ?>">
                                                                        <i class="icon ni ni-edit"></i>
                                                                            &nbsp;Edit Manager
                                                                    </button>
                                                          
                                                                     </li>                  
                                                                            </ul>
                                                                        </div>
                                                                    </div>
                                                                </li>
                                                             
                                                            </ul>
                                                        </td>
                                                    </tr><!-- .nk-tb-item  -->


                                                     <div class="modal fade" tabindex="-1" role="dialog" id="exampleModal<?php echo $mandate_manager->id; ?>">
        <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
            <div class="modal-content">
                <a href="#" class="close" data-dismiss="modal"><em class="icon ni ni-cross-sm"></em></a>
                <div class="modal-body modal-body-lg">
                    <h5 class="title">Edit Manager</h5>
                    <div class="tab-content">
                        <form method="post" action="<?php echo URLROOT; ?>/accounts/edit_manager/<?php echo $mandate_manager->id; ?>" >
                        <div class="tab-pane active" id="personal">
                            <div class="row gy-4">
                                <div class="col-md-12">
                                   <div class="form-group">
                                        <label class="form-label" for="full-name">Full Name</label>
                                        <input value="<?php echo $mandate_manager->manager_name; ?>" name="manager_name" type="text" class="form-control form-control-lg" id="full-name" >
                                    </div>
                                </div>

                                <div class="col-md-6">
                                   <div class="form-group">
                                        <label class="form-label" for="full-name">Email</label>
                                        <input value="<?php echo $mandate_manager->manager_email; ?>" name="manager_email" type="text" class="form-control form-control-lg" id="full-name" >
                                    </div>
                                </div>


                                <div class="col-md-6">
                                   <div class="form-group">
                                        <label class="form-label" for="full-name">Phone</label>
                                        <input value="<?php echo $mandate_manager->manager_phone; ?>" name="manager_phone" type="number" class="form-control form-control-lg" id="full-name" >
                                    </div>
                                </div>

                                <div class="col-md-6">
                                   <div class="form-group">
                                        <label class="form-label" for="full-name">Role</label>
                                        <select name="manager_role" data-msg="Required" class="form-control " >
                                          
                                            <option selected value="<?php echo $mandate_manager->manger_role; ?>"><?php echo $mandate_manager->manager_role; ?></option>
                                                  <?php foreach($data['load_roles'] as $load_role) : ?>
                                                <option value="<?php echo $load_role->position_title; ?>"><?php echo $load_role->position_title; ?></option>
                                                <?php endforeach; ?>
                                                                    </select>
                                        
                                    </div>
                                </div>



                                <div class="col-md-6">
                                   <div class="form-group">
                                        <label class="form-label" for="full-name">Status</label>
                                        <select name="status" data-msg="Required" class="form-control" >
                                           <option value="<?php echo $mandate_manager->status; ?>">



                                                            <?php if ($mandate_manager->status == 1) {
                                                               echo 'Active';
                                                            } 

                                                            if ( $mandate_manager->status == 2) {
                                                               echo 'Suspended';
                                                            }


                                                            if ( $mandate_manager->status == 3) {
                                                               echo 'Resigned';
                                                            }  



                                                            ?>


                                            </option>
                                        <option value="1">Active</option>  
                                        <option value="2">Suspended</option>  
                                        <option value="3">Resigned</option>                          
                                         </select>
                                    </div>
                                </div>

                                 


                              
                                <input type="hidden" value="<?php echo $mandate_manager->id; ?>" name="id" >
                                <input type="hidden" value="<?php echo $mandate_manager->mandate_code; ?>" name="mandate_code" >
                               

                               



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
                                                    </div><!-- .nk-files -->


                                                
                                            </div>
                                                </div>
                                               
                                            </div>

                                       

                            <div class="tab-pane" id="tabItem6">
                               <ul class="nk-block-tools gx-3" style="align-items: center;" >
                                              <?php  if ($_SESSION['role'] !== 'User') :   ?>
                                            <li class="btn-wrap"><a href="#add-payment" data-toggle="modal" class="btn btn-icon btn-xl btn-dark"><em class="icon ni ni-plus"></em></a><span class="btn-extext">Add Bank Payment</span></li>

                                            <?php if($data['allaccamount_credit']->amount != 0) :  ?>

                                            <li class="btn-wrap"><a href="<?php echo URLROOT; ?>/accounts/add_credit/<?php echo $data['mandate_info']->mandate_code; ?>"  class="btn btn-icon btn-xl btn-dark"><em class="icon ni ni-plus"></em></a><span class="btn-extext">Add Payment</span></li>

                                               <?php endif; ?>

                                           <?php endif; ?>

                                             <li class="btn-wrap"><a href="#gen-receipt" data-toggle="modal" class="btn btn-icon btn-xl btn-dark"><em class="icon ni ni-plus"></em></a><span class="btn-extext"> Generate Receipt</span></li>
                                           
                                        </ul>
                                                    <div class="nk-block-content">
                                                    


                                    </div>
                                    <br>
                                  
                                    <div class="row g-gs">
                                            <div class="col-md-3">
                                            <div class="card card-bordered card-full">
                                                <div class="card-inner">
                                                    <div class="card-title-group align-start mb-0">
                                                        <div class="card-title">
                                                            <h6 class="overline-title-alt">Available Balance</h6>
                                                        </div>
                                                        <div class="card-tools">
                                                            <em class="card-hint icon ni ni-help-fill" data-toggle="tooltip" data-placement="left" title="Available Balance"></em>
                                                        </div>
                                                    </div>
                                                    <div class="card-amount">
                                                        <span class="amount"> <b class="user-balance">₦<?php echo number_format($data['allaccamount_credit']->amount)  ?></b> <span class="currency currency-usd"></span>
                                                        </span>
                                                      
                                                    </div>
                                                   
                                                </div>
                                            </div><!-- .card -->
                                        </div><!-- .col -->
                                            <div class="col-md-3">
                                            <div class="card card-bordered card-full">
                                                <div class="card-inner">
                                                    <div class="card-title-group align-start mb-0">
                                                        <div class="card-title">
                                                            <h6 class="overline-title-alt">Total Bank Payment</h6>
                                                        </div>
                                                        <div class="card-tools">
                                                            <em class="card-hint icon ni ni-help-fill" data-toggle="tooltip" data-placement="left" title=""></em>
                                                        </div>
                                                    </div>
                                                    <div class="card-amount">
                                                        <span class="amount"> <b style="color: black;">₦<?php 
                                                     


                                                        echo number_format($data['mandate_accounts_bank']->total_acc_amount) ?></b> <span class="currency currency-usd"></span>
                                                        </span>
                                                      
                                                    </div>
                                                    
                                                </div>
                                            </div><!-- .card -->
                                        </div><!-- .col -->


                                        <div class="col-md-3">
                                            <div class="card card-bordered card-full">
                                                <div class="card-inner">
                                                    <div class="card-title-group align-start mb-0">
                                                        <div class="card-title">
                                                            <h6 class="overline-title-alt">Total Paid <?php echo date('Y'); ?></h6>
                                                        </div>
                                                        <div class="card-tools">
                                                            <em class="card-hint icon ni ni-help-fill" data-toggle="tooltip" data-placement="left" title=""></em>
                                                        </div>
                                                    </div>
                                                    <div class="card-amount">
                                                        <span class="amount"> <b style="color: black;">₦<?php 
                                                     $all_sumyear =   $data['mandate_accounts_current_year']->TotalAmountPaidYear;
                                                        $all_sumyeardiscount =  $data['mandate_accounts_current_yeardiscount']->TotalAmountPaidYeardiscount;
                                                        $allAmountYear =  $all_sumyear + $all_sumyeardiscount;


                                                        echo number_format($allAmountYear) ?></b> <span class="currency currency-usd"></span>
                                                        </span>
                                                      
                                                    </div>
                                                    
                                                </div>
                                            </div><!-- .card -->
                                        </div><!-- .col -->


                                         <div class="col-md-3">
                                            <div class="card card-bordered card-full">
                                                <div class="card-inner">
                                                    <div class="card-title-group align-start mb-0">
                                                        <div class="card-title">
                                                            <h6 class="overline-title-alt">Total Paid</h6>
                                                        </div>
                                                        <div class="card-tools">
                                                            <em class="card-hint icon ni ni-help-fill" data-toggle="tooltip" data-placement="left" title=""></em>
                                                        </div>
                                                    </div>
                                                    <div class="card-amount">
                                                        <span class="amount"> <b style="color: black;">₦<?php 
                                                     $total_all_sum =   $data['mandate_accounts_payment']->TotalAmountPaid;
                                                        $total_all_sum_iscount =  $data['mandate_accounts_payment_discount']->TotalAmountPaid_discount;
                                                        $allPaidAmount =  $total_all_sum + $total_all_sum_iscount;


                                                        echo number_format($allPaidAmount) ?></b> <span class="currency currency-usd"></span>
                                                        </span>
                                                      
                                                    </div>
                                                   
                                                </div>
                                            </div><!-- .card -->
                                        </div><!-- .col -->

                                    </div>



                            <br><br>
                           <div class="nk-block">

                         
   
    



                                <div class="card card-bordered card-stretch">
                                    <div class="card-inner-group">


                                       
                                    
                                         <ul class="nav nav-tabs">
                        <li class="nav-item">
                            <a class="nav-link active" data-toggle="tab" href="#PaymentList">Payment List</a>
                        </li>
                       
                        <li class="nav-item">
                            <a class="nav-link" data-toggle="tab" href="#ArchivedPayment">Archived Payment</a>
                        </li>

                    
                       
                    </ul>
                      <div class="tab-content">
                          <div class="tab-pane active" id="PaymentList">
                             <div class="nk-files nk-files-view-grid">
                                                                              
                                                  <table class="datatable-init nk-tb-list nk-tb-ulist" data-auto-responsive="false">
                                                <thead>
                                                    <tr class="nk-tb-item nk-tb-head">
                                                        <th class="nk-tb-col nk-tb-col-check">
                                                            <div class="custom-control custom-control-sm custom-checkbox notext">
                                                                #
                                                            </div>
                                                        </th>
                                                        <th class="nk-tb-col"><span class="sub-text">BILL FOR</span></th>
                                                        <th class="nk-tb-col tb-col-md"><span class="sub-text">AMOUNT</span></th>
                                                         <th class="nk-tb-col tb-col-md"><span class="sub-text">DISCOUNT</span></th>
                                                        <th class="nk-tb-col tb-col-mb"><span class="sub-text">ISSUE DATE</span></th>
                                                        <th class="nk-tb-col tb-col-md"><span class="sub-text">DUE DATE</span></th>

                                                        <th class="nk-tb-col tb-col-md"><span class="sub-text">CREATED AT</span></th>
                                                        
                                                        
                                                      
                                                        <th class="nk-tb-col tb-col-md"><span class="sub-text">STATUS</span></th>
                                                      
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                     <?php $count = 0;  foreach($data['mandate_accounts'] as $mandate_account) : $count++; ?>

                                                    <tr class="nk-tb-item">
                                                        <td class="nk-tb-col nk-tb-col-check">
                                                            <div class="nk-tnx-type-icon">
                                                              <?php echo $count;  ?>
                                                            </div>
                                                        </td>
                                                        <td class="nk-tb-col">
                                                            <div class="user-card"> 
                                                                
                                                                <div class="nk-tnx-type-text">
                                                                <span class="tb-lead"><?php echo $mandate_account->fee_title; ?> <?php echo "($mandate_account->qty)"; ?></span>
                                                               
                                                            </div>
                                                            </div>
                                                        </td>
                                                         <td class="nk-tb-col tb-col-mb" data-order="35040.34">
                                                            <span class="tb-amount">₦<?php echo number_format($mandate_account->amount); ?></span>
                                                        </td>

                                                         <td class="nk-tb-col tb-col-mb" data-order="35040.34">
                                                           

                                                             <?php  if($mandate_account->discount !== "" ) : ?>
                                                                     <span class="tb-amount">₦<?php echo number_format($mandate_account->discount_amount); ?>
                                                                     <?php endif ?>


                                                                  <?php  if($mandate_account->discount == 2 ) : ?>
                                                                          (10%)
                                                                     <?php endif ?>

                                                                       <?php  if($mandate_account->discount == 1 ) : ?>
                                                                          (5%)
                                                                     <?php endif ?>

                                                            </span>
                                                        </td>


                                                       
                                                        <td class="nk-tb-col tb-col-mb" data-order="35040.34">
                                                            <span class="tb-amount"><?php echo $mandate_account->issued_year; ?></span>
                                                        </td>
                                                        <td class="nk-tb-col tb-col-mb" data-order="35040.34">
                                                            <span class="tb-amount"><?php

                                                            if ($mandate_account->due_date == "") {
                                                                         echo '0000'; 
                                                                  } else{
                                                                    echo ' '.$mandate_account->due_date.' '; 
                                                                  }
                                                                  
                                                             
                                                              ?></span> 
                                                        </td>


                                                        <td class="nk-tb-col tb-col-mb" data-order="35040.34">
                                                            <span class="tb-amount"><?php echo $mandate_account->created_at; ?></span>
                                                        </td>

                                                       
                                                        
                                                        
                                                        <td class="nk-tb-col tb-col-md">
                                                             <?php 
                                                                    $due = $mandate_account->due_date;
                                                                      $today = date("Y"); 

                                                                      if ($mandate_account->renewal_status == 1 AND $today >= $due ) {
                                                                         echo '<span class="badge badge-sm badge-warning"> Expired </span>'; 
                                                                      }

                                                                      elseif ($mandate_account->renewal_status == 1 AND $today <= $due ) {
                                                                         echo '<span class="badge badge-sm badge-success"> Active </span>'; 
                                                                      }


                                                                      if ($mandate_account->renewal_status == 2 AND $due =="" ) {
                                                                         echo ''; 
                                                                      }

                                                                         ?>
                                                   
                                                        </td>
                                                        
                                                    </tr><!-- .nk-tb-item  -->


                                                 
                                                     <?php endforeach; ?>
                                                </tbody>
                                            </table>
                                                    </div><!-- .nk-files -->
                            </div>
                            <div class="tab-pane" id="ArchivedPayment">
                               <div class="nk-files nk-files-view-grid">
                                                        
                                                       <table class="datatable-init nk-tb-list nk-tb-ulist" data-auto-responsive="false">
                                                <thead>
                                                    <tr class="nk-tb-item nk-tb-head">
                                                        <th class="nk-tb-col nk-tb-col-check">
                                                            <div class="custom-control custom-control-sm custom-checkbox notext">
                                                                #
                                                            </div>
                                                        </th>
                                                        <th class="nk-tb-col"><span class="sub-text">FEE TITLE</span></th>
                                                        <th class="nk-tb-col tb-col-md"><span class="sub-text">AMOUNT</span></th>
                                                        <th class="nk-tb-col tb-col-mb"><span class="sub-text">ISSUE DATE</span></th>
                                                         <th class="nk-tb-col tb-col-mb"><span class="sub-text">ISSUE YEAR</span></th>
                                                        <th class="nk-tb-col tb-col-md"><span class="sub-text">DUE DATE</span></th>

                                                        <!-- <th class="nk-tb-col tb-col-md"><span class="sub-text">CREATED AT</span></th>
                                                        
                                                        
                                                      
                                                        <th class="nk-tb-col tb-col-md"><span class="sub-text">STATUS</span></th> -->
                                                      
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                     <?php $count = 0;  foreach($data['mandate_accounts_payment_archive'] as $payment_archive) : $count++; ?>

                                                    <tr class="nk-tb-item">
                                                        <td class="nk-tb-col nk-tb-col-check">
                                                            <div class="nk-tnx-type-icon">
                                                              <?php echo $count;  ?>
                                                            </div>
                                                        </td>
                                                        <td class="nk-tb-col">
                                                            <div class="user-card"> 
                                                                
                                                                <div class="nk-tnx-type-text">
                                                                <span class="tb-lead"><?php echo $payment_archive->fee_title; ?></span>
                                                               
                                                            </div>
                                                            </div>
                                                        </td>
                                                         <td class="nk-tb-col tb-col-mb" data-order="35040.34">
                                                            <span class="tb-amount">₦<?php echo number_format($payment_archive->amount); ?></span>
                                                        </td>
                                                        <td class="nk-tb-col tb-col-mb" data-order="35040.34">
                                                            <span class="tb-amount"><?php echo $payment_archive->issued_date; ?></span>
                                                        </td>
                                                          <td class="nk-tb-col tb-col-mb" data-order="35040.34">
                                                            <span class="tb-amount"><?php echo $payment_archive->issued_year; ?></span>
                                                        </td>

                                                          <td class="nk-tb-col tb-col-mb" data-order="35040.34">
                                                            <span class="tb-amount"><?php echo $payment_archive->due_date; ?></span>
                                                        </td>
                                                        <!-- <td class="nk-tb-col tb-col-mb" data-order="35040.34">
                                                            <span class="tb-amount"><?php

                                                            if ($mandate_account->due_date == "") {
                                                                         echo '0000'; 
                                                                  } else{
                                                                    echo ' '.$mandate_account->due_date.' '; 
                                                                  }
                                                                  
                                                             
                                                              ?></span> 
                                                        </td> -->


                                                       <!--  <td class="nk-tb-col tb-col-mb" data-order="35040.34">
                                                            <span class="tb-amount"><?php echo $mandate_account->created_at; ?></span>
                                                        </td> -->

                                                       
                                                        
                                                        
                                                      <!--   <td class="nk-tb-col tb-col-md">
                                                             <?php 
                                                                    $due = $mandate_account->due_date;
                                                                      $today = date("Y"); 

                                                                      if ($mandate_account->renewal_status == 1 AND $today >= $due ) {
                                                                         echo '<span class="badge badge-sm badge-warning"> Expired </span>'; 
                                                                      }

                                                                      elseif ($mandate_account->renewal_status == 1 AND $today <= $due ) {
                                                                         echo '<span class="badge badge-sm badge-success"> Active </span>'; 
                                                                      }


                                                                      if ($mandate_account->renewal_status == 2 AND $due =="" ) {
                                                                         echo ''; 
                                                                      }

                                                                         ?>
                                                   
                                                        </td> -->
                                                        
                                                    </tr><!-- .nk-tb-item  -->


                                                 
                                                     <?php endforeach; ?>
                                                </tbody>
                                            </table>
                                                    </div><!-- .nk-files -->
    </div>
   
</div>
                                           
                                       
                                    </div><!-- .card-inner-group -->
                                </div><!-- .card -->
                            </div><!-- .nk-block -->
                                                </div>
                                                <div class="tab-pane" id="tabItem7">
                                                    <div class="tab-content">
                                                <div class="tab-pane active" id="file-grid-view">
                                                    <div class="nk-fmg-actions" style="float: right;">
                                            <ul class="nk-block-tools g-3">
                                                  <?php  if ($_SESSION['role'] !== 'User') :   ?>
                                                <li><a href="<?php echo URLROOT; ?>/accounts/update_mandate_files/<?php echo $data['mandate_info']->mandate_code; ?>" class="btn btn-primary" ><em class="icon ni ni-upload-cloud"></em> <span>Upload Files</span></a></li>
                                            <?php endif; ?>
                                            </ul>
                                        </div>
                                        <br><br>

                                        <ul class="nav nav-tabs">
                        <li class="nav-item">
                            <a class="nav-link active" data-toggle="tab" href="#ActiveFiles">Active Files</a>
                        </li>
                         <?php if ($_SESSION['role'] =='Admin') : ?>
                        <li class="nav-item">
                            <a class="nav-link" data-toggle="tab" href="#DeletedFiles">Deleted Files</a>
                        </li>

                      <?php endif; ?>
                       
                    </ul>
                      <div class="tab-content">
                          <div class="tab-pane active" id="ActiveFiles">
                             <div class="nk-files nk-files-view-grid">
                                                                              
                                                       <table class="datatable-init nk-tb-list nk-tb-ulist" data-auto-responsive="false">
                                                <thead>
                                                    <tr class="nk-tb-item nk-tb-head">
                                                       
                                                      
                                                        <th class="nk-tb-col tb-col-mb"><span class="sub-text"></span></th>
                                                        
                                                       
                                                      
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                   <?php   foreach($data['mandate_docs'] as $mandate_doc) : ?>
                                                    <tr class="nk-tb-item">
                                                        
                                                      
                                                        <td class="nk-tb-col tb-col-mb" data-order="35040.34">
                                                          <div class="card card-bordered">
                                                         <object  style="width: 1000px; height: 1000px" data="<?php echo URLROOT; ?>/gallery/<?php echo $mandate_doc->files; ?>" class="card-img-top" ></object>
                                                        <div class="card-inner">
                                                            <!-- <h5 class="card-title">Card with stretched link</h5>
                                                            <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p> -->


                                                           <div class="nk-file-actions" style="margin: 0px 0px 0px 0px">
                                                            <h5>  <?php echo $mandate_doc->doc_name; ?> </h5>
                                                                    <div class="dropdown">
                                                                        <a href="" class="dropdown-toggle btn btn-sm btn-icon btn-trigger" data-toggle="dropdown"><em class="icon ni ni-more-h"></em></a>
                                                                        <div class="dropdown-menu dropdown-menu-right">
                                                                            <ul class="link-list-plain no-bdr">
                                                                            
                                                                               
                                                                                <li><a href="<?php echo URLROOT; ?>/gallery/<?php echo $mandate_doc->files; ?>" download class="file-dl-toast"><em class="icon ni ni-download"></em><span>Download</span></a></li>


                                                                                <li><a href="<?php echo URLROOT; ?>/accounts/delete_mandate_file/<?php echo $mandate_doc->id; ?>"  class="file-dl-toast"><em class="icon ni ni-trash"></em><span>Delete</span></a></li>


                                                                                

                                                                            </ul>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                             
                                                        </div>
                                                    </div>
                                                        </td>
                                                     
                                                      
                                                       
                                                    </tr><!-- .nk-tb-item  -->

                                       

                                                  
                                                    <?php endforeach; ?>
                                                </tbody>
                                            </table>
                                                    </div><!-- .nk-files -->
    </div>
    <div class="tab-pane" id="DeletedFiles">
       <div class="nk-files nk-files-view-grid">
                                                        
                                                       <table class="datatable-init nk-tb-list nk-tb-ulist" data-auto-responsive="false">
                                                <thead>
                                                    <tr class="nk-tb-item nk-tb-head">
                                                       
                                                      
                                                        <th class="nk-tb-col tb-col-mb"><span class="sub-text"></span></th>
                                                        
                                                       
                                                      
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                   <?php   foreach($data['mandate_deleted_docs'] as $mandate_doc) : ?>
                                                    <tr class="nk-tb-item">
                                                        
                                                      
                                                        <td class="nk-tb-col tb-col-mb" data-order="35040.34">
                                                          <div class="card card-bordered">
                                                         <object  style="width: 1000px; height: 1000px" data="<?php echo URLROOT; ?>/gallery/<?php echo $mandate_doc->files; ?>" class="card-img-top" ></object>
                                                        <div class="card-inner">
                                                            <!-- <h5 class="card-title">Card with stretched link</h5>
                                                            <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p> -->


                                                           <div class="nk-file-actions" style="margin: 0px 0px 0px 0px">
                                                            <h5>  <?php echo $mandate_doc->doc_name; ?> </h5>
                                                                    <div class="dropdown">
                                                                        <a href="" class="dropdown-toggle btn btn-sm btn-icon btn-trigger" data-toggle="dropdown"><em class="icon ni ni-more-h"></em></a>
                                                                        <div class="dropdown-menu dropdown-menu-right">
                                                                            <ul class="link-list-plain no-bdr">
                                                                            
                                                                               
                                                                                <li><a href="<?php echo URLROOT; ?>/gallery/<?php echo $mandate_doc->files; ?>" download class="file-dl-toast"><em class="icon ni ni-download"></em><span>Download</span></a></li>


                                                                                <li><a href="<?php echo URLROOT; ?>/accounts/restore_mandate_file/<?php echo $mandate_doc->id; ?>"  class="file-dl-toast"><em class="icon ni ni-save"></em><span>Restore</span></a></li>


                                                                                

                                                                            </ul>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                             
                                                        </div>
                                                    </div>
                                                        </td>
                                                     
                                                      
                                                       
                                                    </tr><!-- .nk-tb-item  -->

                                       

                                                  
                                                    <?php endforeach; ?>
                                                </tbody>
                                            </table>
                                                    </div><!-- .nk-files -->
    </div>
   
</div>
                                                      


                                                
                                            </div>
                                                </div>
                                               
                                            </div>



                                            <div class="tab-pane" id="tabItem8">
                                                    <div class="tab-content">
                                                <div class="tab-pane active" id="file-grid-view">
                                                   <div class="toggle-wrap nk-block-tools-toggle">
                                            <a href="#" class="btn btn-icon btn-trigger toggle-expand mr-n1" data-target="pageMenu"><em class="icon ni ni-menu-alt-r"></em></a>
                                            <div class="toggle-expand-content" data-content="pageMenu" style="float: right;">
                                                <ul class="nk-block-tools g-3">
                                                     <?php  if ($_SESSION['role'] !== 'User') :   ?>
                                                    <li class="nk-block-tools-opt">
                                                        <div class="drodown">
                                                            <a href="#add-trader" data-toggle="modal" class="dropdown-toggle btn btn-icon btn-primary" data-toggle="dropdown"><em class="icon ni ni-plus"></em></a>
                                                            
                                                        </div>
                                                    </li>
                                                <?php endif; ?>
                                                </ul>
                                            </div>
                                            <br><br><br>
                                        </div><!-- .toggle-wrap -->
                                                    <div class="nk-files nk-files-view-grid">
                                                        
                                                       <table class="datatable-init nk-tb-list nk-tb-ulist" data-auto-responsive="false">
                                                <thead>
                                                    <tr class="nk-tb-item nk-tb-head">
                                                        <th class="nk-tb-col nk-tb-col-check">
                                                            <div class="custom-control custom-control-sm custom-checkbox notext">
                                                                <input type="checkbox" class="custom-control-input" id="uid">
                                                                <label class="custom-control-label" for="uid"></label>
                                                            </div>
                                                        </th>
                                                        <th class="nk-tb-col"><span class="sub-text">Trader</span></th>
                                                        <th class="nk-tb-col tb-col-mb"><span class="sub-text">Email</span></th>
                                                        <th class="nk-tb-col tb-col-md"><span class="sub-text">Phone</span></th>
                                                        <th class="nk-tb-col tb-col-lg"><span class="sub-text">Company Code</span></th>
                                                        <th class="nk-tb-col tb-col-md"><span class="sub-text">Status</span></th>
                                                        <th class="nk-tb-col nk-tb-col-tools text-right">
                                                        </th>
                                                    </tr> 
                                                </thead>
                                                <tbody>
                                                    <?php $count = 0;  foreach($data['mandate_traders'] as $mandate_trader) : $count++; ?>
                                                    <tr class="nk-tb-item">
                                                        <td class="nk-tb-col nk-tb-col-check">
                                                           <span><?php echo $count; ?></span>
                                                        </td>
                                                        <td class="nk-tb-col">
                                                            <div class="user-card">
                                                              
                                                                <div class="user-info">
                                                                   <a href="#" data-toggle="modal" data-target="#tranxDetails<?php echo $mandate_trader->trader_code; ?>"> <span class="tb-lead"><?php echo $mandate_trader->fullname; ?><span class="dot dot-success d-md-none ml-1"></span></span> </a>
                                                                    <p><?php echo $mandate_trader->trader_code; ?></p>
                                                                </div>
                                                            </div>
                                                        </td>
                                                        <td class="nk-tb-col tb-col-mb" data-order="35040.34">
                                                            <span class="tb-amount"><?php echo $mandate_trader->email; ?></span>
                                                        </td>
                                                        <td class="nk-tb-col tb-col-md">
                                                            <span class="tb-amount"><?php echo $mandate_trader->phone; ?></span>
                                                        </td>
                                                       
                                                        <td class="nk-tb-col tb-col-lg">
                                                            <span class="tb-amount"><?php echo $mandate_trader->mandate_code; ?></span>
                                                        </td>
                                                        <td class="nk-tb-col tb-col-md">
                                                            <?php if ($mandate_trader->status == 1) {
                                                               echo ' <span class="tb-status text-success">Active</span>';
                                                            } 

                                                            if ($mandate_trader->status == 2) {
                                                               echo ' <span class="tb-status text-warning">Suspended</span>';
                                                            }


                                                            if ($mandate_trader->status == 3) {
                                                               echo '<span class="tb-status text-danger">Resigned</span>';
                                                            }  




                                                            ?>
                                                           
                                                        </td>
                                                        <td class="nk-tb-col nk-tb-col-tools">
                                                            <ul class="nk-tb-actions gx-1">
                                                              
                                                                  <?php  if ($_SESSION['role'] !== 'User') :   ?>
                                                                <li>
                                                                    <div class="drodown">
                                                                        <a href="#" class="dropdown-toggle btn btn-icon btn-trigger" data-toggle="dropdown"><em class="icon ni ni-more-h"></em></a>
                                                                        <div class="dropdown-menu dropdown-menu-right">
                                                                            <ul class="link-list-opt no-bdr">
                                                                               
                                                                                <li>
                                                                    <button class="btn" data-toggle="modal" data-target="#exampleModal<?php echo $mandate_trader->id; ?>">
                                                                        <i class="icon ni ni-edit"></i>
                                                                            &nbsp;Edit Trader
                                                                    </button>
                                                          
                                                                     </li>

                                                                                <li>
                                                                    <button class="btn" data-toggle="modal" data-target="#ChangeFirm<?php echo $mandate_trader->id; ?>">
                                                                        <i class="icon ni ni-edit"></i>
                                                                            &nbsp;Change Firm
                                                                    </button>
                                                          
                                                                     </li>  

                                                                        <li>
                                                                   <button class="btn">
                                                                        <i class="icon ni ni-edit"></i>
                                                                            &nbsp; <a href="<?php echo URLROOT; ?>/accounts/traders_movement/<?php echo $mandate_trader->trader_code; ?>">History</a>
                                                                    </button>
                                                                
                                                          
                                                                     </li>  
                                                                     <?php endif;  ?>                
                                                                            </ul>
                                                                        </div>
                                                                    </div>
                                                                </li>
                                                            
                                                            </ul>
                                                        </td>
                                                    </tr><!-- .nk-tb-item  -->

                                         <div class="modal fade" tabindex="-1" role="dialog" id="ChangeFirm<?php echo $mandate_trader->id; ?>">
        <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
            <div class="modal-content">
                <a href="#" class="close" data-dismiss="modal"><em class="icon ni ni-cross-sm"></em></a>
                <div class="modal-body modal-body-lg">
                    <h5 class="title">Change Firm</h5>
                    <div class="tab-content">
                        <form method="post" action="<?php echo URLROOT; ?>/accounts/change_mandate_trader/<?php echo $mandate_trader->id; ?>" >
                        <div class="tab-pane active" id="personal">
                            <div class="row gy-4">
                                <div class="col-md-12">
                                   <div class="form-group">
                                        <label class="form-label" for="full-name">Select Firm</label>
                                        <select name="mandate_code" data-msg="Required" class="form-control required" required>
                                                  <?php foreach($data['allmandates'] as $allmandate) : ?>
                                                <option value="<?php echo $allmandate->mandate_code; ?>"><?php echo $allmandate->company_name; ?></option>
                                                <?php endforeach; ?>
                                                                    </select>
                                    </div>
                                </div>
                               
                                <input type="hidden" value="<?php echo $mandate_trader->id; ?>" name="id" >
                                <input type="hidden" value="<?php echo $mandate_trader->fullname; ?>" name="fullname" >
                                 <input type="hidden" value="<?php echo $mandate_trader->trader_code; ?>" name="trader_code" >
                                <input type="hidden" value="<?php echo $mandate_trader->mandate_code; ?>" name="mandate_code2" >
                               
                               

                               
 


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





     <div class="modal fade" tabindex="-1" role="dialog" id="exampleModal<?php echo $mandate_trader->id; ?>">
        <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
            <div class="modal-content">
                <a href="#" class="close" data-dismiss="modal"><em class="icon ni ni-cross-sm"></em></a>
                <div class="modal-body modal-body-lg">
                    <h5 class="title">Edit Trader</h5>
                    <div class="tab-content">
                        <form method="post" action="<?php echo URLROOT; ?>/accounts/edit_trader/<?php echo $mandate_trader->id; ?>" >
                        <div class="tab-pane active" id="personal">
                            <div class="row gy-4">
                                <div class="col-md-12">
                                   <div class="form-group">
                                        <label class="form-label" for="full-name">Full Name</label>
                                        <input value="<?php echo $mandate_trader->fullname; ?>" name="fullname" type="text" class="form-control form-control-lg" id="full-name" >
                                    </div>
                                </div>

                                <div class="col-md-6">
                                   <div class="form-group">
                                        <label class="form-label" for="full-name">Email</label>
                                        <input value="<?php echo $mandate_trader->email; ?>" name="email" type="text" class="form-control form-control-lg" id="full-name" >
                                    </div>
                                </div>


                                <div class="col-md-6">
                                   <div class="form-group">
                                        <label class="form-label" for="full-name">Phone</label>
                                        <input value="<?php echo $mandate_trader->phone; ?>" name="phone" type="number" class="form-control form-control-lg" id="full-name" >
                                    </div>
                                </div>

                                 <div class="col-md-6">
                                   <div class="form-group">
                                        <label class="form-label" for="full-name">Trader Code</label>
                                        <input value="<?php echo $mandate_trader->trader_code; ?>" name="trader_code" type="text" class="form-control form-control-lg" id="full-name" >
                                    </div>
                                </div>


                              <div class="col-md-6">
                                   <div class="form-group">
                                        <label class="form-label" for="full-name">Chnage Status</label>
                                        <select name="status" data-msg="Required" class="form-control required" required>

                                        <option value="1">Active</option>  
                                        <option value="2">Suspended</option>  
                                        <option value="3">Resigned</option>                          
                                         </select>
                                    </div>
                                </div>

                                 <div class="col-md-6">
                                   <div class="form-group">
                                        <label class="form-label" for="full-name">Designation</label>
                                        <input name="designation" value="<?php echo $mandate_trader->designation; ?>" type="text" class="form-control form-control-lg" id="full-name" >
                                    </div>
                                </div>

                                <div class="col-md-6">
                                   <div class="form-group">
                                        <label class="form-label" for="full-name">Date Of Birth</label>
                                        <input name="d_o_b" type="text" value="<?php echo $mandate_trader->d_o_b; ?>" class="form-control form-control-lg" id="full-name" >
                                    </div>
                                </div>


                                <div class="col-md-6">
                                   <div class="form-group">
                                        <label class="form-label" for="full-name">State Of Origin</label>
                                        <input name="state_of_origin" type="text" value="<?php echo $mandate_trader->state_of_origin; ?>" class="form-control form-control-lg" id="full-name" >
                                    </div>
                                </div>

                                <div class="col-md-6">
                                   <div class="form-group">
                                        <label class="form-label" for="full-name">Nationality</label>
                                        <input name="nationality" value="<?php echo $mandate_trader->nationality; ?>" type="text" class="form-control form-control-lg" id="full-name" >
                                    </div>
                                </div>


                                <div class="col-md-12">
                                   <div class="form-group">
                                        <label class="form-label" for="full-name">Residential Address</label>
                                        <textarea name="residential_address" class="form-control"><?php echo $mandate_trader->residential_address; ?></textarea>
                                      
                                    </div>
                                </div>

                              
                                <input type="hidden" value="<?php echo $mandate_trader->id; ?>" name="id" >
                                <input type="hidden" value="<?php echo $mandate_trader->mandate_code; ?>" name="mandate_code" >
                               

                               
 


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

     <div class="modal fade" tabindex="-1" id="tranxDetails<?php echo $mandate_trader->trader_code; ?>">
        <div class="modal-dialog modal-lg" role="document">
            <div class="modal-content">
                <a href="#" class="close" data-dismiss="modal" aria-label="Close">
                    <em class="icon ni ni-cross"></em>
                </a>
                <div class="modal-body modal-body-md">
                    <div class="nk-modal-head mb-3 mb-sm-5">
                        <h4 class="nk-modal-title title"><?php echo $mandate_trader->fullname; ?><h4>
                    </div>
                    <div class="nk-tnx-details">
                        
                        <div class="nk-modal-head mt-sm-5 mt-4 mb-4">
                          
                        </div>
                        <div class="row gy-3">
                            <div class="col-lg-6">
                                <span class="sub-text">EMAIL</span>
                                <span class="caption-text"><?php echo $mandate_trader->email; ?></span>
                            </div>
                            <div class="col-lg-6">
                                <span class="sub-text">PHONE</span>
                                <span class="caption-text text-break"><?php echo $mandate_trader->phone; ?></span>
                            </div>
                            <div class="col-lg-6">
                                <span class="sub-text">TRADER CODE</span>
                                <span class="caption-text"><?php echo $mandate_trader->trader_code; ?>
                                   </span>
                            </div>
                            <div class="col-lg-6">
                                <span class="sub-text">COMPANY</span>
                                <span class="caption-text"> <?php echo $data['mandate_info']->company_name; ?></span>
                            </div>

                             <div class="col-lg-6">
                                <span class="sub-text">DESIGNATION</span>
                                <span class="caption-text"> <?php echo $mandate_trader->designation; ?></span>
                            </div>

                             <div class="col-lg-6">
                                <span class="sub-text">DATE OF BIRTH</span>
                                <span class="caption-text"> <?php echo $mandate_trader->d_o_b; ?></span>
                            </div>

                             <div class="col-lg-6">
                                <span class="sub-text">STATE OF ORIGIN</span>
                                <span class="caption-text"> <?php echo $mandate_trader->state_of_origin; ?></span>
                            </div>
                             <div class="col-lg-6">
                                <span class="sub-text">NATIONALITY</span>
                                <span class="caption-text"> <?php echo $mandate_trader->nationality; ?></span>
                            </div>
                             <div class="col-lg-12">
                                <span class="sub-text">RESIDENCE ADDRESS</span>
                                <span class="caption-text"> <?php echo $mandate_trader->residential_address; ?></span>
                            </div>

                        </div><!-- .row -->
                        
                        
                           
                            
                        </div><!-- .row -->
                    </div><!-- .nk-tnx-details -->
                </div><!-- .modal-body -->
            </div><!-- .modal-content -->
        </div><!-- .modal-dialog -->

                                                  
                                                    <?php endforeach; ?>
                                                </tbody>
                                            </table>
                                                    </div><!-- .nk-files -->


                                                
                                            </div>
                                                </div>
                                               
                                            </div>
                                        </div>
                                    </div><!-- .card-preview -->
                                  
                                    
                                           <!-- .row -->
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                </div><!-- .nk-block -->
                            </div><!-- .components-preview -->
                        </div>
                    </div>
                </div>












    <div class="modal fade" tabindex="-1" role="dialog" id="add-payment">
        <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
            <div class="modal-content">
                <a href="#" class="close" data-dismiss="modal"><em class="icon ni ni-cross-sm"></em></a>
                <div class="modal-body modal-body-lg">
                    <h5 class="title">Add Bank Payment</h5>
                    
                    <div class="tab-content">
                        <div class="tab-pane active" id="personal">
                           <form method="post" action="<?php echo URLROOT; ?>/accounts/add_mandatePayment">
                            <div class="row gy-4">
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label class="form-label" for="phone-no">Amount</label>
                                        <input type="number" name="amount" class="form-control form-control-lg">
                                      
                                    </div>
                                </div>

                                <input type="hidden" value="<?php echo $data['mandate_info']->mandate_code; ?>" name="mandate_code">
                                


                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label class="form-label" for="full-name">Date</label>
                                        <input name="paid_date" type="date" class="form-control form-control-lg" id="full-name" >
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




    <div class="modal fade" tabindex="-1" role="dialog" id="add-fund">
        <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
            <div class="modal-content">
                <a href="#" class="close" data-dismiss="modal"><em class="icon ni ni-cross-sm"></em></a>
                <div class="modal-body modal-body-lg">
                    <h5 class="title">Add Fee</h5>
                    
                    <div class="tab-content">
                        <div class="tab-pane active" id="personal">
                           <form method="post" action="<?php echo URLROOT; ?>/accounts/add_mandatefee">
                            <div class="row gy-4">
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label class="form-label" for="phone-no">Fee Ttitle</label>

                                        <select name="fee_code" class="form-control form-control-lg">
                                             <?php foreach($data['allfees'] as $allfee) : ?>
                                                <option value="<?php echo $allfee->fee_code; ?>"><?php echo $allfee->fee_title; ?></option>
                                                <?php endforeach; ?>

                                           
                                        </select>
                                       
                                    </div>
                                </div>

                                <input type="hidden" value="<?php echo $data['mandate_info']->mandate_code; ?>" name="mandate_code">
                                


                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label class="form-label" for="full-name">Issue Date</label>
                                        <input name="issued_date" type="date" class="form-control form-control-lg" id="full-name" >
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


     <div class="modal fade" tabindex="-1" role="dialog" id="gen-receipt">
        <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
            <div class="modal-content">
                <a href="#" class="close" data-dismiss="modal"><em class="icon ni ni-cross-sm"></em></a>
                <div class="modal-body modal-body-lg">
                    <h5 class="title">Generate Receipt</h5>
                    
                    <div class="tab-content">
                        <div class="tab-pane active" id="personal">
                           <form method="post" action="<?php echo URLROOT; ?>/accounts/invoice">
                            <div class="row gy-4">
                              

                                <input type="hidden" value="<?php echo $data['mandate_info']->mandate_code; ?>" name="mandate_code">
                                


                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label class="form-label" for="full-name">Select Year</label>
                                        <select class="form-control form-control-lg" name="select_year">
                                       
                                        <option value="2015">2015</option>
                                        <option value="2016">2016</option>
                                        <option value="2017">2017</option>
                                        <option value="2018">2018</option>
                                        <option value="2019">2019</option>
                                        <option value="2020">2020</option>
                                        <option value="2021">2021</option>
                                        <option value="2022">2022</option>
                                        <option value="2023">2023</option>
                                        <option value="2024">2024</option>
                                        <option value="2025">2025</option>
                                        <option value="2026">2026</option>
                                        <option value="2027">2027</option>
                                        <option value="2028">2028</option>
                                        <option value="2029">2029</option>
                                       
                                        </select>
                                    </div>
                                </div>


                                  <div class="col-md-12">
                                    <div class="form-group">
                                        <label class="form-label" for="full-name">Receipt Date</label>
                                        <input type="date" class="form-control form-control-lg" name="receipt_date">
                                    </div>
                                </div>


                                 <div class="col-md-12">
                                    <div class="form-group">
                                        <label class="form-label" for="full-name">Receipt Number</label>
                                        <input type="number"  class="form-control form-control-lg" name="receipt_number">
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




     <div class="modal fade" tabindex="-1" role="dialog" id="add-trader">
        <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
            <div class="modal-content">
                <a href="#" class="close" data-dismiss="modal"><em class="icon ni ni-cross-sm"></em></a>
                <div class="modal-body modal-body-lg">
                    <h5 class="title">Add Trader</h5>
                    
                    <div class="tab-content">
                        <div class="tab-pane active" id="personal">
                           <form method="post" action="<?php echo URLROOT; ?>/accounts/add_mandatetrader">
                            <div class="row gy-4">
                                <div class="col-md-12">
                                   <div class="form-group">
                                        <label class="form-label" for="full-name">Full Name</label>
                                        <input name="fullname" type="text" class="form-control form-control-lg" id="full-name" >
                                    </div>
                                </div>

                                <div class="col-md-6">
                                   <div class="form-group">
                                        <label class="form-label" for="full-name">Email</label>
                                        <input name="email" type="text" class="form-control form-control-lg" id="full-name" >
                                    </div>
                                </div>


                                <div class="col-md-6">
                                   <div class="form-group">
                                        <label class="form-label" for="full-name">Phone</label>
                                        <input name="phone" type="number" class="form-control form-control-lg" id="full-name" >
                                    </div>
                                </div>

                                 <div class="col-md-6">
                                   <div class="form-group">
                                        <label class="form-label" for="full-name">Trader Code</label>
                                        <input name="trader_code" type="text" class="form-control form-control-lg" id="full-name" >
                                    </div>
                                </div>


                                 <div class="col-md-6">
                                   <div class="form-group">
                                        <label class="form-label" for="full-name">Designation</label>
                                        <input name="designation" type="text" class="form-control form-control-lg" id="full-name" >
                                    </div>
                                </div>

                                <div class="col-md-6">
                                   <div class="form-group">
                                        <label class="form-label" for="full-name">Date Of Birth</label>
                                        <input name="d_o_b" type="text" class="form-control form-control-lg" id="full-name" >
                                    </div>
                                </div>


                                <div class="col-md-6">
                                   <div class="form-group">
                                        <label class="form-label" for="full-name">State Of Origin</label>
                                        <input name="state_of_origin" type="text" class="form-control form-control-lg" id="full-name" >
                                    </div>
                                </div>

                                <div class="col-md-6">
                                   <div class="form-group">
                                        <label class="form-label" for="full-name">Nationality</label>
                                        <input name="nationality" type="text" class="form-control form-control-lg" id="full-name" >
                                    </div>
                                </div>


                                <div class="col-md-6">
                                   <div class="form-group">
                                        <label class="form-label" for="full-name">Residential Address</label>
                                        <textarea name="residential_address" class="form-control"></textarea>
                                      
                                    </div>
                                </div>

                              
                               
                                 <input name="mandate_code" type="hidden" value="<?php echo $data['mandate_info']->mandate_code; ?>" class="form-control form-control-lg" id="full-name" >
                                
                               
                                
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




     <div class="modal fade" tabindex="-1" role="dialog" id="add-manager">
        <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
            <div class="modal-content">
                <a href="#" class="close" data-dismiss="modal"><em class="icon ni ni-cross-sm"></em></a>
                <div class="modal-body modal-body-lg">
                    <h5 class="title">Add Manager</h5>
                    
                    <div class="tab-content">
                        <div class="tab-pane active" id="personal">
                           <form method="post" action="<?php echo URLROOT; ?>/accounts/add_manager">
                            <div class="row gy-4">
                                <div class="col-md-12">
                                   <div class="form-group">
                                        <label class="form-label" for="full-name">Full Name</label>
                                        <input name="manager_name" type="text" class="form-control form-control-lg" id="full-name" >
                                    </div>
                                </div>

                                <div class="col-md-6">
                                   <div class="form-group">
                                        <label class="form-label" for="full-name">Email</label>
                                        <input name="manager_email" type="text" class="form-control form-control-lg" id="full-name" >
                                    </div>
                                </div>


                                <div class="col-md-6">
                                   <div class="form-group">
                                        <label class="form-label" for="full-name">Phone</label>
                                        <input name="manager_phone" type="number" class="form-control form-control-lg" id="full-name" >
                                    </div>
                                </div>


                                 <div class="col-md-12">
                                   <div class="form-group">
                                        <label class="form-label" for="full-name">Role</label>
                                        <select name="manager_role" data-msg="Required" class="form-control required" required>
                                                  <?php foreach($data['load_roles'] as $load_role) : ?>
                                                <option value="<?php echo $load_role->position_title; ?>"><?php echo $load_role->position_title; ?></option>
                                                <?php endforeach; ?>
                                                                    </select>
                                        
                                    </div>
                                </div> 

                                 

                                
                                        <input name="mandate_code" type="hidden" value="<?php echo $data['mandate_info']->mandate_code; ?>" class="form-control form-control-lg" id="full-name" >
                                   

                                
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



      <div class="modal fade" tabindex="-1" role="dialog" id="change-status">
                    <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
                        <div class="modal-content">
                            <a href="#" class="close" data-dismiss="modal"><em class="icon ni ni-cross-sm"></em></a>
                            <div class="modal-body modal-body-lg">
                                <h5 class="title">Change Firm Status</h5>
                                <div class="tab-content">
                            <form method="post" action="<?php echo URLROOT; ?>/accounts/change_mandate_status" >
                                    <div class="tab-pane active" id="personal">
                            <div class="row gy-4">
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label class="form-label" for="full-name">Select Status</label>
                                       <select name="mandate_status" data-msg="Required" class="form-control required" required>
                                        <option value="1">Active</option>
                                         <option value="2">Suspended</option>
                                        <option value="3">Revoked</option> 
                                       

                                                                 
                                         </select>
                                    </div>
                                </div> 


                                 <div class="col-md-12">
                                      <div class="form-group">
                                        <label class="form-label" for="fw-nationality">Note</label>
                                          <div class="form-control-wrap">
                                                                    
                                    <textarea required="" name="status_note" class="form-control required"></textarea>
                                                                        
                                                                    
                                       </div>
                                      </div>
                                        </div><!-- .col -->


                                <input type="hidden" value="<?php echo $data['mandate_info']->mandate_code; ?>" name="mandate_code" >
                               

                               



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










  



<style>
    .box{
        color: #fff;
        padding: 20px;
        display: none;
        margin-top: 20px;
    }
    .red{ background:; }
    .green{ background: ; }
   
    label{ margin-right: 15px; }
</style>
<script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
<script>


$('#yearPicker').datetimepicker({
    format      :   "YYYY",
    viewMode    :   "years", 
});
</script>