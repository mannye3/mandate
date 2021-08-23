<?php  
 

$output = '';

  $output .= '
   <table class="table" bordered="1">  
                    <tr>  
                         <th>Email</th>  

                         <th>Date Created</th>  
                        
                         
                       
                        
                    </tr>
  ';
  
   
   foreach ($data['AllEmailList'] as $AllEmailList) :
     


    $output .= '
                          <td>'.$AllEmailList->email.'</td>
                            <td>'.$AllEmailList->created_at.'</td>
                          

                       
                         '; 
                        
                             




                                  



                    $output .= ' </tr>';
   

 endforeach;
  
  $output .= '</table>';
   header('Content-Type: application/xls');
  header('Content-Disposition: attachment; filename=email_List_Export.php.xls');
  echo $output;
 

?>
