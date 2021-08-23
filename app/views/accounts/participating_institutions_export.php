<?php  
 

$output = '';

  $output .= '
   <table class="table" bordered="1">  
                    <tr>  
                         <th>Institution</th>  
                         <th>Firm Code</th>  
                         <th>Category</th>  
                         <th>Phone</th>
                         <th>Email</th>
                         <th>Website</th>
                         <th>Office Address</th>
                         <th>Rec Number</th>
                         <th>Date Of Incorporation</th>
                         <th>Sec Registered</th>
                         <th>Principal Contact Name</th>
                         <th>Principal Contact Phone</th>
                         <th>Principal Contact Email</th>
                         <th>Enquiries Contact Name</th>
                         <th>Enquiries Contact Phone</th>
                         <th>Enquiries Contact Email</th>
                         <th>Compliance Contact Name</th>
                         <th>Compliance Contact Phone</th>
                         <th>Compliance Contact Email</th>
                         <th>Settlement Bank Name</th>
                         <th>Settlement Bank Branch</th>
                         <th>Settlement Bank Account Number</th>
                         <th>Settlement Bank Account Name</th>
                       

                         
                       
                        
                    </tr>
  ';
  
   
   foreach($data['allmandates'] as $allmandates) :
     


    $output .= '
                          <td>'.$allmandates->company_name.'</td>
                           <td>'.$allmandates->mandate_code.'</td>  
                            <td>'.$allmandates->category.'</td>  
                             <td>'.$allmandates->phone.'</td>  
                              <td>'.$allmandates->email.'</td>  
                               <td>'.$allmandates->website.'</td>  
                                <td>'.$allmandates->address.'</td>  
                                 <td>'.$allmandates->rec_number.'</td>  
                                  <td>'.$allmandates->date_of_incorporation.'</td>   
                                  <td>'.$allmandates->sec_registered.'</td>


                                  <td>'.$allmandates->principal_contact_name.'</td>  
                                  <td>'.$allmandates->principal_contact_phone.'</td> 
                                  <td>'.$allmandates->principal_contact_email.'</td> 
                                  <td>'.$allmandates->enquiries_contact_name.'</td> 
                                  <td>'.$allmandates->enquiries_contact_phone.'</td> 
                                  <td>'.$allmandates->enquiries_contact_email.'</td> 
                                  <td>'.$allmandates->compliance_contact_name.'</td> 
                                  <td>'.$allmandates->compliance_contact_phone.'</td> 
                                  <td>'.$allmandates->compliance_contact_email.'</td> 
                                  <td>'.$allmandates->settlement_bank_name.'</td> 
                                  <td>'.$allmandates->settlement_bank_branch.'</td> 
                                   <td>'.$allmandates->settlement_bank_account_number.'</td> 
                                  <td>'.$allmandates->settlement_bank_account_name.'</td> 

                       
                         '; 
                        
                             




                                  



                    $output .= ' </tr>';
   

 endforeach;
  
  $output .= '</table>';
   header('Content-Type: application/xls');
  header('Content-Disposition: attachment; filename=Participating_Institutions_Export.php.xls');
  echo $output;
 

?>
