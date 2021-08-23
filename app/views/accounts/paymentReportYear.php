<?php  
 

$output = '';

  $output .= '
   <table class="table" bordered="1">  
                    <tr>  
                         <th>Institution</th>  
                         <th>Status</th>  
                         <th>Category</th>  
                         <th>Number Of Trader</th>
                         <th>Year ('.$_SESSION['report_year'].')</th>
                         <th>Total To Date</th>
                          <th>Outstanding</th>
                    </tr>
  ';
  
   
   foreach($data['allpis'] as $allpis) :
     $report_year  =  $_SESSION['report_year']; 
     $mandate_code = $allpis->mandate_code;
     $ALL_traders = $this->accountModel->getTotatalTrader($mandate_code);
      $Total_amountREP = $this->accountModel->getTotalPaymentyear($mandate_code,$report_year);
    



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
  header('Content-Disposition: attachment; filename=Payment_Report.xls');

  echo $output;
 

?>
