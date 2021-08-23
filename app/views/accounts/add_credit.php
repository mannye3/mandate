 <div class="nk-content nk-content-fluid">
                    <div class="container-xl wide-lg">
                        <div class="nk-content-body">
                            <div class="components-preview wide-md mx-auto">
                                <div class="nk-block-head nk-block-head-lg wide-sm">
                                 
                                    </div>
                                </div><!-- .nk-block-head -->
                                <div class="nk-block nk-block-lg">
                                    <div class="nk-block-head">
                                         <div class="nk-block-head-content" style="margin: 0px 0px 0px 1000px ">
                                        <a href="<?php echo URLROOT; ?>/accounts/mandate/<?php echo $data['mandate_info']->mandate_code; ?>" class="btn btn-outline-light bg-white d-none d-sm-inline-flex"><em class="icon ni ni-arrow-left"></em><span>Back</span></a>
                                        <a href="html/user-list-regular.html" class="btn btn-icon btn-outline-light bg-white d-inline-flex d-sm-none"><em class="icon ni ni-arrow-left"></em></a>
                                    </div>
                                        <div class="nk-block-head-content">
                                            <h4 class="title nk-block-title">Add Payment</h4>


                                        </div>
                                    </div>

                                    <div class="card card-bordered">
                                        <div class="card-inner">
                                              <?php flash('alert_message'); ?>
                                          
                                               
                                        
                                                <div class="card card-bordered">
                                        <div class="nk-kycfm">
                                           
                                          <div class="row g-gs">
                                            <div class="col-lg-5">
                                                <div class="card card-bordered h-100">
                                                    <div class="card-inner">
                                                        <div class="card-head">
                                                            <h5 class="card-title"></h5>
                                                        </div>
                                                       <form action="<?php echo URLROOT; ?>/accounts/add_credit_process" method="post">
                                                             <div class="form-group">
                                                                    <label class="form-label" for="phone-no">Fee Ttitle</label>

                                                                    <select name="fee_code" class="form-control form-control-lg">
                                                                         <?php foreach($data['allfees'] as $allfee) : ?>
                                                                            <option value="<?php echo $allfee->fee_code; ?>"><?php echo $allfee->fee_title; ?></option>
                                                                            <?php endforeach; ?>

                                                                       
                                                                    </select>

                                                                     <input type="hidden" value="<?php echo $data['mandate_info']->mandate_code; ?>" name="mandate_code">
                                                                   
                                                                </div>
                                                            <div class="form-group">
                                        <label class="form-label" for="full-name">Issue Date</label>
                                        <input name="issued_date" required="" type="date" class="form-control form-control-lg" id="full-name" >
                                    </div>
                                                           
                                                            <div class="form-group">
                                                                <label class="form-label">Apply Discount</label>
                                                             <div class="form-group">

                                 
                                  <br>
                                <input type="radio" id="male" name="discount" value="1">
                                <label for="male">5%</label><br>
                                <input type="radio" id="female" name="discount" value="2">
                                <label for="female">10%</label><br>
                                
                             
                                    </div>
                                                            </div>
                                                           
                                                           
                                                            <div class="form-group">
                                                                <button type="submit" class="btn btn-lg btn-primary">Submit</button>
                                                            </div>
                                                        </form>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-lg-7">
                                                <div class="card card-bordered h-100">
                                                    <div class="card-inner">
                                                        <div class="card-head">
                                                            <h5 class="card-title">Payment Details</h5>
                                                        </div>
                                                        <form action="#">
                                                           <table class="stripe">
                                                                  <tr>
                                                                    <th>Fee Title</th>
                                                                    <th>Amount</th>
                                                                    <th>Discount</th>
                                                                    <th>Total</th>
                                                                     <th></th>
                                                                    
                                                                  </tr>
                                                                  <?php  foreach($data['allcart'] as $allcart) :?>
                                                                  <tr>
                                                                    <td><?php echo $allcart->fee_title; ?></td>
                                                                    <td><?php echo $allcart->amount; ?></td>
                                                                    <td><?php if ($allcart->discount == 1) {
                                                                      echo "5%";
                                                                    }elseif ($allcart->discount == 2) {
                                                                       echo "10%";
                                                                    }  ?></td>
                                                                    <td><?php echo $allcart->total_cart_amount; ?></td>
                                                                     <td><a href="<?php echo URLROOT; ?>/accounts/delete_cart/<?php echo $allcart->id; ?>"><em class="icon ni ni-trash-alt"></em></a></td>
                                                                     
                                                                  </tr>
                                                                  <?php endforeach; ?>
                                                                 <tr>
                                                                        <td><b>Total Sum</b></td>
                                                                        <td></td>
                                                                        <td></td>
                                                                        <td><b><?php echo $sum_cart =  $data['allamount']->total_cart; ?></b></td>
                                                                       
                                                                    </tr>
                                                                </table>

                                                               
                                                                <div class="user-account-main" style="margin: 20px 0px 0px 400px">
                                                                    <h6 class="overline-title-alt">Available Balance</h6>
                                                                    <div class="user-balance">₦<?php  
                                                                    $sum_credit = $data['allaccamount_credit']->amount;

                                                                    $total_avai =  $sum_credit - $sum_cart;

                                                                    echo number_format($total_avai);

                                                                     ?> </div>
                                                                   
                                                                </div>
                               
                                                
                                                                
                                                             <br>                                                  
                                                            <div class="form-group">

                                                             

                                                                <?php if(!empty($data['cart_mandate']->mandate_code)) : ?>
                                                                     <a href="<?php echo URLROOT; ?>/accounts/submit_cart/<?php echo $data['cart_mandate']->mandate_code; ?>">  <p  class="btn btn-lg btn-primary">Submit</p></a>
                                                              <?php endif; ?>
                                                            </div>
                                                        </form>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                          
                                            
                                           
                                           
                                        </div><!-- .nk-kycfm -->
                                    </div>
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





                <style>
table {
  font-family: arial, sans-serif;
  border-collapse: collapse;
  width: 100%;
}

td, th {
  border: 1px solid #dddddd;
  text-align: left;
  padding: 8px;
}

tr:nth-child(even) {
  background-color: #dddddd;
}
</style>


