<?php  
 

$output = '';

  $output .= '
   <table class="table" bordered="1">  
                    <tr>  
                         <th>Institution</th>  
                         <th>Member Code</th>  
                         <th>Trader Name</th>  
                         <th>Residential Address</th>
                         <th>Designation</th>
                         <th>DOB</th>
                         <th>Email</th>
                         <th>Phone</th>
                         <th>State Of Origin</th>
                         <th>Nationality</th>
                         <th>Outstanding documents</th>
                         
                       
                        
                    </tr>
  ';
  
   
   foreach($data['AllManTraders'] as $AllManTrader) :
     


    $output .= '
                          <td>'.$AllManTrader->company_name.'</td>
                           <td>'.$AllManTrader->trader_code.'</td>  
                            <td>'.$AllManTrader->fullname.'</td>  
                             <td>'.$AllManTrader->residential_address.'</td>  
                              <td>'.$AllManTrader->designation.'</td>  
                               <td>'.$AllManTrader->d_o_b.'</td>  
                                <td>'.$AllManTrader->email.'</td>  
                                 <td>'.$AllManTrader->phone.'</td>  
                                  <td>'.$AllManTrader->state_of_origin.'</td>   
                                  <td>'.$AllManTrader->nationality.'</td>  

                       
                         '; 
                        
                             




                                  



                    $output .= ' </tr>';
   

 endforeach;
  
  $output .= '</table>';
   header('Content-Type: application/xls');
  header('Content-Disposition: attachment; filename=Authorized_Traders_Export.php.xls');
  echo $output;
 

?>
