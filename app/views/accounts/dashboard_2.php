<div class="nk-content ">
                    <div class="container-fluid">
                        <div class="nk-content-inner">
                            <div class="nk-content-body">
                                <div class="nk-block-head nk-block-head-sm">
                                    <div class="nk-block-between">
                                        <div class="nk-block-head-content">
                                            <h3 class="nk-block-title page-title"> Dashboard</h3>
                                            <div class="nk-block-des text-soft">
                                                <p>WELCOME TO  NASD E-MANDATE</p>
                                            </div>
                                        </div><!-- .nk-block-head-content -->
                                      
                                    </div><!-- .nk-block-between -->
                                </div><!-- .nk-block-head -->
                                <div class="nk-block">
                                    <div class="row g-gs">
                                         <div class="col-md-4">
                                            <div class="card card-bordered card-full">
                                                <div class="card-inner">
                                                    <div class="card-title-group align-start mb-0">
                                                        <div class="card-title">
                                                            <h6 class="subtitle">PIS ANNUAL FEE (BROKER, BROKERDEALER, DEALER, SUB-BROKER)</h6>
                                                        </div>
                                                        <div class="card-tools">
                                                            <em class="card-hint icon ni ni-help-fill" data-toggle="tooltip" data-placement="left" title="PIS ANNUAL FEE (BROKER, BROKERDEALER, DEALER, SUB-BROKER)"></em>
                                                        </div>
                                                    </div>
                                                    <div class="card-amount">
                                                        <span class="amount"> <b style="color: black;">₦<?php 

                                                                error_reporting(0);

                                                                    $ANNUALFEEPAYMENT = $data['annualfeepayment']->toltal_payment;
                                                                    $ANNUALFEEPAYMENT1 = $data['annualfeepayment1']->toltal_payment1;
                                                                    $ANNUALFEEPAYMENT2 = $data['annualfeepayment2']->toltal_payment2;
                                                                    $ANNUALFEEPAYMENT3 = $data['annualfeepayment3']->toltal_payment3;

                                                            $ALLANNUALPAYMENT =   $ANNUALFEEPAYMENT +  $ANNUALFEEPAYMENT1 + $ANNUALFEEPAYMENT2 + $ANNUALFEEPAYMENT3;
  



                                                        echo number_format($ALLANNUALPAYMENT) ?></b> <span class="currency currency-usd"></span>
                                                        </span>
                                                      
                                                    </div>
                                                    <div class="invest-data">
                                                        <div class="invest-data-amount g-2">
                                                            <div class="invest-data-history">
                                                                <div class="title">Total Due <?php echo date('Y'); ?> </div>
                                                                <div class="amount"><b style="color: red;">₦<?php 

 
                                                                      error_reporting(0);

                                                                      $ANNUALFEE = $data['annualfee']->toltal * 35000;
                                                                      $ANNUALFEE1 = $data['annualfee1']->toltal1 * 50000;
                                                                      $ANNUALFEE2 = $data['annualfee2']->toltal2 * 20000;
                                                                      $ANNUALFEE2 = $data['annualfee2']->toltal3 * 50000;

                                                            $ALLANNUAL =   $ANNUALFEE +  $ANNUALFEE1 + $ANNUALFEE2 + $ANNUALFEE3;

                                                                echo number_format($ALLANNUAL) ?></b> <span class="currency currency-usd"></span></div>
                                                            </div>
                                                            <div class="invest-data-history">
                                                                <div class="title">Total Paid <?php echo date('Y'); ?></div>
                                                                <div class="amount"><b style="color: black;">₦<?php 

                                                                error_reporting(0);

                                                                    $ANNUALFEEPAYMENTYEAR = $data['annualfeepaymentyear']->toltal_paymentYear;
                                                                    $ANNUALFEEPAYMENTYEAR1 = $data['annualfeepaymentyear1']->toltal_paymentYear1;
                                                                    $ANNUALFEEPAYMENTYEAR2 = $data['annualfeepaymentyear2']->toltal_paymentYear2;
                                                                    $ANNUALFEEPAYMENTYEAR3 = $data['annualfeepaymentyear3']->toltal_paymentYear3;

                                                            $ALLANNUALPAYMENTYEAR =   $ANNUALFEEPAYMENTYEAR +  $ANNUALFEEPAYMENTYEAR1 + $ANNUALFEEPAYMENTYEAR2 + $ANNUALFEEPAYMENTYEAR3;




                                                        echo number_format($ALLANNUALPAYMENTYEAR) ?></b>  <span class="currency currency-usd"></span></div>
                                                            </div>
                                                        </div>
                                                       
                                                    </div>
                                                </div>
                                            </div><!-- .card -->
                                        </div><!-- .col -->

                                         <div class="col-md-4">
                                            <div class="card card-bordered  card-full">
                                                <div class="card-inner">
                                                    <div class="card-title-group align-start mb-0">
                                                        <div class="card-title">
                                                            <h6 class="subtitle">TOTAL TRADER FEE</h6>
                                                        </div>
                                                        <div class="card-tools">
                                                            <em class="card-hint icon ni ni-help-fill" data-toggle="tooltip" data-placement="left" title="Total Trader Fee"></em>
                                                        </div>
                                                    </div>
                                                    <div class="card-amount">
                                                        <span class="amount"><b style="color: black;">₦<?php echo number_format($data['total3']->TotalAllTF) ?></b> <span class="currency currency-usd"></span>
                                                        </span>
                                                    </div>
                                                    <div class="invest-data">
                                                        <div class="invest-data-amount g-2">
                                                            <div class="invest-data-history">
                                                                <div class="title">Total Due <?php echo date('Y'); ?></div>
                                                                <div class="amount"><b style="color: red;">₦<?php 

                                                                    
                                                                $sumtraders =  $data['SumTraders']->Totaltraders;
                                                                $sumalltraders = $sumtraders * 20000;

                                                                echo  number_format($sumalltraders); ?> <span class="currency currency-usd"></b></span></div>
                                                            </div>
                                                            <div class="invest-data-history">
                                                                <div class="title">Total Paid <?php echo date('Y'); ?></div>
                                                                <div class="amount"><b style="color: black;">₦<?php echo number_format($data['totalTraderYear']->TotalY3) ?></b> <span class="currency currency-usd"></span></div>
                                                            </div>
                                                        </div>
                                                       
                                                    </div>
                                                </div>
                                            </div><!-- .card -->
                                        </div><!-- .col -->

                                         <div class="col-md-4">
                                            <div class="card card-bordered  card-full">
                                                <div class="card-inner">
                                                    <div class="card-title-group align-start mb-0">
                                                        <div class="card-title">
                                                            <h6 class="subtitle">ISSUING HOUSE</h6>
                                                        </div>
                                                        <div class="card-tools">
                                                            <em class="card-hint icon ni ni-help-fill" data-toggle="tooltip" data-placement="left" title="Total Trader Fee"></em>
                                                        </div>
                                                    </div>
                                                    <div class="card-amount">
                                                        <span class="amount"><b style="color: black;">₦<?php echo number_format($data['T_ISHPAY']->toltal_ish_payment) ?></b> <span class="currency currency-usd"></span>
                                                        </span>
                                                    </div>
                                                    <div class="invest-data">
                                                        <div class="invest-data-amount g-2">
                                                            <div class="invest-data-history">
                                                                <div class="title">Total Due <?php echo date('Y'); ?></div>
                                                                <div class="amount"><b style="color: red;">₦<?php 

                                                                    
                                                                $sumISH =  $data['allISH']->totalISH;
                                                                $sumISHAM =  $data['T_Fee5']->amount;
                                                                $totalSUMISH = $sumISH * $sumISHAM;

                                                                echo  number_format($totalSUMISH); ?> <span class="currency currency-usd"></b></span></div>
                                                            </div>
                                                            <div class="invest-data-history">
                                                                <div class="title">Total Paid <?php echo date('Y'); ?></div>
                                                                <div class="amount"><b style="color: black;">₦<?php echo number_format($data['T_ISHPAY_YEAR']->toltal_ish_payment_year) ?></b> <span class="currency currency-usd"></span></div>
                                                            </div>
                                                        </div>
                                                       
                                                    </div>
                                                </div>
                                            </div><!-- .card -->
                                        </div><!-- .col -->

                                         <div class="col-md-4">
                                            <div class="card card-bordered card-full">
                                                <div class="card-inner">
                                                    <div class="card-title-group align-start mb-0">
                                                        <div class="card-title">  
                                                            <h6 class="subtitle">SETTLEMENT BANK</h6>
                                                        </div>
                                                        <div class="card-tools">
                                                            <em class="card-hint icon ni ni-help-fill" data-toggle="tooltip" data-placement="left" title="SETTLEMENT BANK"></em>
                                                        </div>
                                                    </div>
                                                    <div class="card-amount">
                                                        <span class="amount"> <b style="color: black;">₦<?php echo number_format($data['annualSTBPayment']->toltal_stb) ?> </b><span class="currency currency-usd"></span>
                                                        </span>
                                                       
                                                    </div>
                                                    <div class="invest-data">
                                                        <div class="invest-data-amount g-2">
                                                            
                                                            <div class="invest-data-history">
                                                                <div class="title">Total Due <?php echo date('Y'); ?></div>
                                                                <div class="amount"><b style="color: red;">₦<?php

                                                                
                                                                     $allISH =  $data['annualSTB']->totalSTB * 500000;
                                                                  

                                                                    echo number_format($allISH);

                                                                 ?> <span class="currency currency-usd"></span></b></div>
                                                            </div>

                                                            <div class="invest-data-history">
                                                                <div class="title">Total Paid <?php echo date('Y'); ?></div>
                                                                <div class="amount"><b style="color: black;">₦<?php echo number_format($data['annualSTBPaymentyear']->toltal_stbyear) ?> <span class="currency currency-usd"></span></b></div>
                                                            </div>


                                                        </div>
                                                       
                                                    </div>
                                                </div>
                                            </div><!-- .card -->
                                        </div><!-- .col -->


                                        <div class="col-md-4">
                                            <div class="card card-bordered card-full">
                                                <div class="card-inner">
                                                    <div class="card-title-group align-start mb-0">
                                                        <div class="card-title">  
                                                            <h6 class="subtitle">TOTAL PLATFORM MAINTENANCE</h6>
                                                        </div>
                                                        <div class="card-tools">
                                                            <em class="card-hint icon ni ni-help-fill" data-toggle="tooltip" data-placement="left" title="Total Platform  Maintenance fee"></em>
                                                        </div>
                                                    </div>
                                                    <div class="card-amount">
                                                        <span class="amount"> <b style="color: black;">₦<?php  

                                                         $TPF =    $data['total2']->TotalAllPF;
                                                        $TPF2 =    $data['ALLPMPAY']->totalPM * 15000 ;

                                                       $platformtotal =  $data['total2']->TotalAllPF - $TPF2;

                                                      echo number_format($platformtotal); ?> </b><span class="currency currency-usd"></span>
                                                        </span>
                                                       
                                                    </div>
                                                    <div class="invest-data">
                                                        <div class="invest-data-amount g-2">
                                                            
                                                            <div class="invest-data-history">
                                                                <div class="title">Total Due <?php echo date('Y'); ?></div>
                                                                <div class="amount"><b style="color: red;">₦<?php



                                                                      $broker = $data['annualfee']->toltal;
                                                                      $broker_dealer = $data['annualfee1']->toltal1;
                                                                      $dealer = $data['annualfee2']->toltal2;
                                                                      $sub_broker = $data['annualfee2']->toltal3;

                                                           

                                                             $platform = $broker_dealer + $broker + $dealer + $sub_broker  ;



                                                                    echo number_format($platform * 75000 );

                                                                 ?> <span class="currency currency-usd"></span></b></div>
                                                            </div>

                                                            <div class="invest-data-history">
                                                                <div class="title">Total Paid <?php echo date('Y'); ?></div>
                                                                <div class="amount"><b style="color: black;">₦<?php

                                                                   $platyear = $data['totaly2']->TotalY2 - $TPF2;

                                                                echo  number_format($platyear) ?> <span class="currency currency-usd"></span></b></div>
                                                            </div>


                                                        </div>
                                                       
                                                    </div>
                                                </div>
                                            </div><!-- .card -->
                                        </div><!-- .col -->


                                         <div class="col-md-4">
                                            <div class="card card-bordered card-full">
                                                <div class="card-inner">
                                                    <div class="card-title-group align-start mb-0">
                                                        <div class="card-title">  
                                                            <h6 class="subtitle">DATA PORTAL MAINTENANCE ANNUAL FEE</h6>
                                                        </div>
                                                        <div class="card-tools">
                                                            <em class="card-hint icon ni ni-help-fill" data-toggle="tooltip" data-placement="left" title="Total Platform  Maintenance fee"></em>
                                                        </div>
                                                    </div>
                                                    <div class="card-amount">
                                                        <span class="amount"> <b style="color: black;">₦<?php 

                                                       
                
                                                        echo number_format($TPF2) ?> </b><span class="currency currency-usd"></span>
                                                        </span>
                                                       
                                                    </div>
                                                    <div class="invest-data">
                                                        <div class="invest-data-amount g-2">
                                                            
                                                            <div class="invest-data-history">
                                                                <div class="title">Total Due <?php echo date('Y'); ?></div>
                                                                <div class="amount"><b style="color: red;">₦<?php

                                                                
                                                            $platformyear = $broker_dealer + $broker + $dealer + $sub_broker  ;

                                                                    echo number_format($platformyear * 15000 );

                                                                 ?> <span class="currency currency-usd"></span></b></div>
                                                            </div>

                                                            <div class="invest-data-history">
                                                                <div class="title">Total Paid <?php echo date('Y'); ?></div>
                                                                <div class="amount"><b style="color: black;">₦<?php 


                                                                $allpmyear =  $data['ALLPMPAY_YEAR']->totalPMYEAR * 15000 ;

                                                                echo number_format($allpmyear);
                                                                  ?> <span class="currency currency-usd"></span></b></div>
                                                            </div>


                                                        </div>
                                                       
                                                    </div>
                                                </div>
                                            </div><!-- .card -->
                                        </div><!-- .col -->
                                       

                                        <div class="col-md-4">
                                            <div class="card card-bordered card-full">
                                                <div class="card-inner">
                                                    <div class="card-title-group align-start mb-0">
                                                        <div class="card-title">
                                                            <h6 class="subtitle">DATA PORTAL SALES</h6>
                                                        </div>
                                                        <div class="card-tools">
                                                            <em class="card-hint icon ni ni-help-fill" data-toggle="tooltip" data-placement="left" title="Total Data Portal Fee"></em>
                                                        </div>
                                                    </div>
                                                    <div class="card-amount">
                                                        <span class="amount"> <b style="color: black;">₦<?php 

                                                                      $TDP = $data['total4']->TotalAllDP;
                                                                      $TDR = $data['totaldatarequest']->TotalAmountDR;

                                                                      $ALLDP =   $TDP +  $TDR;




                                                        echo number_format($ALLDP) ?></b> <span class="currency currency-usd"></span>
                                                        </span>
                                                      
                                                    </div>
                                                    <div class="invest-data">
                                                        <div class="invest-data-amount g-2">
                                                            <div class="invest-data-history">
                                                                <div class="title">Total Paid  <?php echo date('Y'); ?> </div>
                                                                <div class="amount"><b style="color: black;">₦<?php 


                                                                      $TDPRY = $data['totaly4']->TotalY4;
                                                                      $TDRY = $data['totaldatarequestyear']->TotalAmountDRYear;

                                                                      $ALLDPRQ =   $TDPRY +  $TDRY;

                                                                echo number_format($ALLDPRQ) ?></b> <span class="currency currency-usd"></span></div>
                                                            </div>
                                                            <!-- <div class="invest-data-history">
                                                                <div class="title">This Week</div>
                                                                <div class="amount">₦<?php echo number_format($data['totalw1']->Totalw1) ?> <span class="currency currency-usd"></span></div>
                                                            </div> -->
                                                        </div>
                                                       
                                                    </div>
                                                </div>
                                            </div><!-- .card -->
                                        </div><!-- .col -->




                                         <div class="col-md-4">
                                            <div class="card card-bordered card-full">
                                                <div class="card-inner">
                                                    <div class="card-title-group align-start mb-0">
                                                        <div class="card-title">
                                                            <h6 class="subtitle">N-ETS Training</h6>
                                                        </div>
                                                        <div class="card-tools">
                                                            <em class="card-hint icon ni ni-help-fill" data-toggle="tooltip" data-placement="left" title="Total Data Portal Fee"></em>
                                                        </div>
                                                    </div>
                                                    <div class="card-amount">
                                                        <span class="amount"> <b style="color: black;">₦<?php 

                                                                     
                                                                      $NTF = $data['totaldatraining']->TotalAmountNT;

                                                                    




                                                        echo number_format($NTF) ?></b> <span class="currency currency-usd"></span>
                                                        </span>
                                                      
                                                    </div>
                                                    <div class="invest-data">
                                                        <div class="invest-data-amount g-2">
                                                            <div class="invest-data-history">
                                                                <!-- <div class="title">Total Paid  <?php echo date('Y'); ?> </div>
                                                                <div class="amount"><b style="color: black;">₦<?php 


                                                                      $TDPRY = $data['totaly4']->TotalY4;
                                                                      $TDRY = $data['totaldatarequestyear']->TotalAmountDRYear;

                                                                      $ALLDPRQ =   $TDPRY +  $TDRY;

                                                                echo number_format($ALLDPRQ) ?></b> <span class="currency currency-usd"></span></div> -->
                                                            </div>
                                                            <!-- <div class="invest-data-history">
                                                                <div class="title">This Week</div>
                                                                <div class="amount">₦<?php echo number_format($data['totalw1']->Totalw1) ?> <span class="currency currency-usd"></span></div>
                                                            </div> -->
                                                        </div>
                                                       
                                                    </div>
                                                </div>
                                            </div><!-- .card -->
                                        </div><!-- .col -->
                                        
                                      <div class="col-md-4">
                                            <div class="card card-bordered  card-full">
                                                <div class="card-inner">
                                                    <div class="card-title-group align-start mb-0">
                                                        <div class="card-title">
                                                            <h6 class="subtitle">REGISTRATION FEE</h6>
                                                        </div>
                                                        <div class="card-tools">
                                                            <em class="card-hint icon ni ni-help-fill" data-toggle="tooltip" data-placement="left" title="Total Trader Fee"></em>
                                                        </div>
                                                    </div>
                                                    <div class="card-amount">
                                                        <span class="amount"><b style="color: black;">₦<?php 

                                                                error_reporting(0);

                                                                    $REGPAYMMENT = $data['regpayment']->toltal_reg_payment;

                                                                    $REGPAYMMENT1 = $data['regpayment1']->toltal_reg_payment1;

                                                                    $REGPAYMMENT2 = $data['regpayment2']->toltal_reg_payment2;

                                                                    $REGPAYMMENT3 = $data['regpayment3']->toltal_reg_payment3;

                                                                     $REGPAYMMENT4 = $data['regpayment4']->toltal_reg_payment4;

                                                                      $REGPAYMMENT5 = $data['regpayment5']->toltal_reg_payment5;

                                                                       $REGPAYMMENT6 = $data['regpayment6']->toltal_reg_payment6;

                                                                       $REGPAYMMENT7 = $data['regpayment7']->toltal_reg_payment7;


                                                            $ALLREGPAYMMENT =   $REGPAYMMENT +  $REGPAYMMENT1 + $REGPAYMMENT2 + $REGPAYMMENT3 + $REGPAYMMENT4 + $REGPAYMMENT5 + $REGPAYMMENT6 + $REGPAYMMENT7;




                                                        echo number_format($ALLREGPAYMMENT) ?></b> <span class="currency currency-usd"></span>
                                                        </span>
                                                    </div>
                                                    <div class="invest-data">
                                                        <div class="invest-data-amount g-2">
                                                            <div class="invest-data-history">
                                                                <div class="title">Total Paid <?php echo date('Y'); ?></div>
                                                                <div class="amount"><b style="color: black;">₦<?php 

                                                                error_reporting(0);

                                                                    $REGPAYMMENTYEAR = $data['regpaymentyear']->toltal_reg_payment_year;

                                                                    $REGPAYMMENTYEAR1 = $data['regpaymentyear1']->toltal_reg_payment_year1;

                                                                    $REGPAYMMENTYEAR2 = $data['regpaymentyear2']->toltal_reg_payment_year2;

                                                                    $REGPAYMMENTYEAR3 = $data['regpaymentyear3']->toltal_reg_payment_year3;

                                                                     $REGPAYMMENTYEAR4 = $data['regpaymentyear4']->toltal_reg_payment_year4;

                                                                      $REGPAYMMENTYEAR5 = $data['regpaymentyear5']->toltal_reg_payment_year5;

                                                                       $REGPAYMMENTYEAR6 = $data['regpaymentyear6']->toltal_reg_payment_year6;

                                                                       $REGPAYMMENTYEAR7 = $data['regpaymentyear7']->toltal_reg_payment_year7;


                                                            $ALLREGPAYMMENTYEAR =   $REGPAYMMENTYEAR +  $REGPAYMMENTYEAR1 + $REGPAYMMENTYEAR2 + $REGPAYMMENTYEAR3 + $REGPAYMMENTYEAR4 + $REGPAYMMENTYEAR5 + $REGPAYMMENTYEAR6 + $REGPAYMMENTYEAR7;




                                                        echo number_format($ALLREGPAYMMENTYEAR) ?><span class="currency currency-usd"></b></span></div>
                                                            </div>
                                                            <!-- <div class="invest-data-history">
                                                                <div class="title">This Week</div>
                                                                <div class="amount"><b style="color: black;">₦<?php echo number_format($data['totalTraderYear']->TotalY3) ?></b> <span class="currency currency-usd"></span></div>
                                                            </div> -->
                                                        </div>
                                                       
                                                    </div>
                                                </div>
                                            </div><!-- .card -->
                                        </div><!-- .col -->
                                       
                           
                                    </div>




                                </div>








                                


                                    
                                </div>
                            </div>
                        </div>
                    </div>
                </div>


