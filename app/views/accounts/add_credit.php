 <div class="nk-content nk-content-fluid">
                   
<div>

    <select id="selector" onchange="yesnoCheck(this);">
        <option value="select">__Select__</option>
        <option value="aadhar">Aadhaar Card</option>
        <option value="pan">Pan Card</option>
        <option value="pass">Passport</option>
    </select>
    <label for="selector">Select ID Proof</label>
</div>







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
                                                                  <!-- <a href="#change-status" data-toggle="modal"  data-toggle="dropdown">  <p class="form-label" style="margin: 0px 0px 0px 230px ;" >Enter Ouststanding payment</p> </a> -->
                                                                   

                                                                     <label class="form-label" for="phone-no">Fee Ttitle</label>

                                                                     <select name="fee_code" class="form-control form-control-lg" id="selector" onchange="yesnoCheck(this);">
                                                                    <?php foreach($data['allfees'] as $allfee) : ?>
                                                                            <option   id="<?php echo $allfee->fee_code; ?>" value="<?php echo $allfee->fee_code; ?>"><?php echo $allfee->fee_title; ?></option>
                                                                            <?php endforeach; ?>
                                                                   
                                                                    </select>


                                                                    <div id="adc" style="display: none;">
                                                                                  <div class="col-md-12">
                                                                            <br>
                                                        <div class="form-group">
                                                          <table id="myTable">
                                                        <thead>
                                                        Quantity
                                                        <tbody>
                                                        
                                                        <tr><td>
                                                            <div class="form-group">
                                                            <select value="" class="qty form-control" name="qty">
                                                            <option value="1">1</option>
                                                            <option value="2">2</option>
                                                            <option value="3">3</option>
                                                            <option value="4">4</option>
                                                            <option value="5">5</option>
                                                            <option value="6">6</option>
                                                            <option value="7">7</option>
                                                            <option value="8">8</option>
                                                            <option value="9">9</option>
                                                            <option value="10">10</option>
                                                    </select>
                                                    </div>
                                                </td><td align="right">N<span id="total" class="total">TOTAL</span> </td>

                                                    <input type="hidden" value="20000" class="price">
                                                        
                                                    </tbody></table>
                                                        </div>
                                                    </div> 
                                                                    </div>
                                                                    <br>
                                                                    <div id="pc" style="display: none;">
                                                                        <label for="pan">Amount</label> 
                                                                        <input type="text" id="pan" name="pan" class="form-control form-control-lg" />
                                                                    </div>
                                                                    <div id="ps" style="display: none;">
                                                                        <label for="pass">Enter Passport No.</label> 
                                                                        <input type="text" id="pass" name="pass" /><br />
                                                                    </div>

                                                                     

                                                                    <div id="admDivCheck" style="display:none;">
                                                             
                                                                         </div>
                                                                        <!-- 
                                                                    <select name="fee_code" class="form-control form-control-lg">
                                                                         <?php foreach($data['allfees'] as $allfee) : ?>
                                                                            <option data-toggle="modal" data-target="#<?php echo $allfee->fee_code; ?>" value="<?php echo $allfee->fee_code; ?>"><?php echo $allfee->fee_title; ?></option>
                                                                            <?php endforeach; ?>

                                                                       
                                                                    </select> -->

                                                                    


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






                        <div class="modal" tabindex="-1" role="dialog" id="AFAT">
                    <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
                        <div class="modal-content">
                            <a href="#" class="close" data-dismiss="modal"><em class="icon ni ni-cross-sm"></em></a>
                            <div class="modal-body modal-body-lg">
                                <h5 class="title">Add Trader Fee</h5>
                                <div class="tab-content">
                            <form method="post" action="<?php echo URLROOT; ?>/accounts/add_credit_process_trader" >
                                    <div class="tab-pane active" id="personal">
                            <div class="row gy-4">
                               <div class="col-md-12">
                                    <div class="form-group">
                                        <label class="form-label" for="full-name">Fee Title</label>
                                        <input class="form-control required" readonly="" value="ANNUAL FEE AUTHORISED TRADER" type="text" name="fee_title">
                                      
                                    </div>
                                </div> 

                                 <div class="col-md-12">
                                    <div class="form-group">
                                     
                                    </div>
                                </div> 


                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label class="form-label" for="full-name">Date</label>
                                        <input class="form-control required" type="date" name="issued_date">
                                      
                                    </div>
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


                                <input type="hidden" value="<?php echo $data['mandate_info']->mandate_code; ?>" name="mandate_code" >

                                   <input type="hidden" value="AFAT" name="fee_code" >
                               

                               



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


<script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>



<script type="text/javascript">
    $(document).ready(function(){

    update_amounts();
    $('.qty').change(function() {
        update_amounts();
    });
});


function update_amounts()
{
    var sum = 0.0;
    $('#myTable > tbody  > tr').each(function() {
        var qty = $(this).find('option:selected').val();
        var price = $(this).find('.price').val();
        var amount = (qty*price)
        sum+=amount;
        $(this).find('.amount').text(''+amount);
    });
    //just update the total to sum  
    $('.total').text(sum);
}

function admSelectCheck(nameSelect)
{
    if(nameSelect){
        admOptionValue = document.getElementById("AFAT").value;
        if(admOptionValue == nameSelect.value){
            document.getElementById("admDivCheck").style.display = "block";
        }
        else{
            document.getElementById("admDivCheck").style.display = "none";
        }
    }
    else{
        document.getElementById("admDivCheck").style.display = "none";
    }
}


function yesnoCheck(that) 
{
    if (that.value == "AFAT") 
    {
        document.getElementById("adc").style.display = "block";
    }
    else
    {
        document.getElementById("adc").style.display = "none";
    }
    if (that.value == "OUTSTANDING")
    {
        document.getElementById("pc").style.display = "block";
    }
    else
    {
        document.getElementById("pc").style.display = "none";
    }
    if (that.value == "pass")
    {
        document.getElementById("ps").style.display = "block";
    }
    else
    {
        document.getElementById("ps").style.display = "none";
    }
}
</script>