<?php  
 

$output = '';

  $output .= '
   <table class="table" bordered="1">  
                    <tr>  
                         <th>Institution</th>  
                         <th>Status</th>  
                         <th>Category</th>  
                         <th>Number Of Trader</th>
                         <th>Due 2014</th>
                         <th>Due 2015</th>
                         <th>Due 2016</th>
                         <th>Due 2017</th>
                         <th>Due 2018</th>
                         <th>Due 2019</th>
                         <th>Due 2020</th>
                          <th>Due 2021</th>
                         <th>Total To Date</th>
                          <th>Outstanding</th>
                    </tr>
  ';
  
   
   foreach($data['allpis'] as $allpis) :
     $mandate_code = $allpis->mandate_code;
     $ALL_traders = $this->accountModel->getTotatalTrader($mandate_code);
      $Total_amountREP = $this->accountModel->getTotalPayment($mandate_code);
      $Total_amountREP2014 = $this->accountModel->getTotalPayment2014($mandate_code);
      $Total_amountREP2015 = $this->accountModel->getTotalPayment2015($mandate_code);
      $Total_amountREP2016 = $this->accountModel->getTotalPayment2016($mandate_code);
      $Total_amountREP2017 = $this->accountModel->getTotalPayment2017($mandate_code);
      $Total_amountREP2018 = $this->accountModel->getTotalPayment2018($mandate_code);
      $Total_amountREP2019 = $this->accountModel->getTotalPayment2019($mandate_code);
      $Total_amountREP2020 = $this->accountModel->getTotalPayment2020($mandate_code);



      /// ANNUAL DUE FOR BROKER
      $broker_annual = $data['AFB_amount']->amount; 
      $traders_annual = $data['AFAT_amont']->amount * $ALL_traders->TotalTraders;
      $platform_m = $data['AFPM_amount']->amount; 
      $brokerdue = $broker_annual + $traders_annual + $platform_m;


       /// ANNUAL DUE FOR BROKER DEALER
      $broker_dealer_annual = $data['BDAF_amount']->amount; 
      $traders_annual = $data['AFAT_amont']->amount * $ALL_traders->TotalTraders;
      $platform_m = $data['AFPM_amount']->amount; 
      $broker_dealerdue = $broker_dealer_annual + $traders_annual + $platform_m;



       /// ANNUAL DUE FOR ISSUING HOUSE
      $issuing_house_annual = $data['AFIH_amount']->amount;  
      $platform_m = $data['AFPM_amount']->amount; 
      $issuing_house = $issuing_house_annual  + $platform_m;


      $pay_2014 = $Total_amountREP2014->toltal_payment_report2014;
      $pay_2015 = $Total_amountREP2015->toltal_payment_report2015;
      $pay_2016 = $Total_amountREP2016->toltal_payment_report2016;
      $pay_2017 = $Total_amountREP2017->toltal_payment_report2017;
      $pay_2018 = $Total_amountREP2018->toltal_payment_report2018;
      $pay_2019 = $Total_amountREP2019->toltal_payment_report2019;
      $pay_2020 = $Total_amountREP2020->toltal_payment_report2020;
      $current_pay = $Total_amountREP->toltal_payment_report;

      

      // Outstanding Broker
      $actual_paybroker =  $brokerdue -  $current_pay;


       // Outstanding Brokerdealer
      $actual_paybrokerdealer =  $broker_dealerdue -  $current_pay;



       // Outstanding issuing house
      $actual_payissuinghouse =  $issuing_house -  $current_pay;






     



    $output .= '
    <tr>  
                         <td>'.$allpis->company_name.'</td>   ';


                         if ($allpis->mandate_status == 'Ok') :
                                $output .= '<td>Active</td>';
                                  endif;


                                   if ($allpis->mandate_status == 'S') :
                                $output .= '<td>Suspended</td>';
                                  endif;



                                   if ($allpis->mandate_status == 'D') :
                                $output .= '<td>Delisted</td>';
                                  endif;



                       
                           $output .= '<td>'.$allpis->category.'</td>  
                         <td> '.$ALL_traders->TotalTraders.'</td>
                          <td> '.number_format($pay_2014).'</td>
                          <td> '.number_format($pay_2015).'</td>
                             <td> '.number_format($pay_2016).'</td>
                             <td> '.number_format($pay_2017).'</td>
                               <td> '.number_format($pay_2018).'</td>
                               <td> '.number_format($pay_2019).'</td>
                                <td> '.number_format($pay_2020).'</td>
                         '; 
                        
                             if ($allpis->category  == 'BROKER') :
                                $output .= '<td>

                                 '. number_format($brokerdue).'

                                  

                                </td>'; 

                                    endif;


                                if ($allpis->category  == 'BROKER/DEALER') :
                                $output .= '<td>

                                 '.number_format($broker_dealerdue) .'


                                </td>'; 

                                    endif;


                                if ($allpis->category  == 'ISSUINGHOUSE') :
                                $output .= '<td>

                                 '. number_format($issuing_house).'


                                </td>'; 

                              endif;

                        $output .= ' <td> '.number_format($current_pay) .'</td> ';



                        if ($allpis->category  == 'BROKER') :
                                $output .= '<td>

                                 '. number_format($actual_paybroker).'

                                  

                                </td>'; 

                                    endif;



                                    if ($allpis->category  == 'BROKER/DEALER') :
                                $output .= '<td>

                                 '. number_format($actual_paybrokerdealer).'

                                  

                                </td>'; 

                                    endif;


                                     if ($allpis->category  == 'ISSUINGHOUSE') :
                                $output .= '<td>

                                 '. number_format($actual_payissuinghouse).'

                                  

                                </td>'; 

                                    endif;



                    $output .= ' </tr>';
   

 endforeach;
  
  $output .= '</table>';
  header('Content-Type: application/xls');
  header('Content-Disposition: attachment; filename=All_Payment_Report.xls');
  echo $output;
 

?>
