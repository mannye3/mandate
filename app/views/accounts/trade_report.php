
  <?php     
$file='TRADE REPORT '.$data['TradeSumreport_date']->tran_date.'.xls'; ?>

<?php   
header("Content-type: application/vnd.ms-excel");
header("Content-Disposition: attachment; filename=$file");

?>     




<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.0 Transitional//EN" "http://www.w3.org/TR/REC-html40/loose.dtd">
        <html style="font-family: sans-serif; -webkit-text-size-adjust: 100%; -ms-text-size-adjust: 100%; color: #000 !important; text-shadow: none !important; -webkit-box-shadow: none !important; box-shadow: none !important; -webkit-box-sizing: border-box; -moz-box-sizing: border-box; box-sizing: border-box; font-size: 10px; -webkit-tap-highlight-color: rgba(0,0,0,0);">


        
        <body style="color: white !important; text-shadow: none !important; -webkit-box-shadow: none !important; box-shadow: none !important; -webkit-box-sizing: border-box; -moz-box-sizing: border-box; box-sizing: border-box; font-family: "Helvetica Neue",Helvetica,Arial,sans-serif; font-size: 14px; line-height: 1.42857143; margin: 0;" bgcolor="#fff">

            <img src="https://nasdng.com/wp-content/uploads/2018/09/logo-17.png" style="vertical-align: top; padding: 0;" align="right">
<br><br><br>

        <table class="display nowrap table table-hover table-striped table-bordered" cellspacing="0" width="50%" style="border-spacing: 0; border-collapse: collapse !important; color: #000 !important; text-shadow: none !important; -webkit-box-shadow: none !important; box-shadow: none !important; -webkit-box-sizing: border-box; -moz-box-sizing: border-box; box-sizing: border-box; width: 50%; max-width: 50%; margin-bottom: 20px; border: 1px solid #585858;" bgcolor="transparent">
      

         <h3> <?php echo date('jS \ F Y ', strtotime($data['TradeSumreport_date']->tran_date));?>
             &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;NASD OTC (Official List)</h3>
                

                <tr style="color: #000 !important; text-shadow: none !important; -webkit-box-shadow: none !important; box-shadow: none !important; page-break-inside: avoid; -webkit-box-sizing: border-box; -moz-box-sizing: border-box; box-sizing: border-box;">
                 <th style="color: #000 !important; text-shadow: none !important; -webkit-box-shadow: none !important; box-shadow: none !important; -webkit-box-sizing: border-box; -moz-box-sizing: border-box; box-sizing: border-box; padding: 0; bold: 1px  #585858;" align="left" bgcolor="#fff">SECURITY</th>
                 <th style="color: #000 !important; text-shadow: none !important; -webkit-box-shadow: none !important; box-shadow: none !important; -webkit-box-sizing: border-box; -moz-box-sizing: border-box; box-sizing: border-box; padding: 0; bold: 1px  #585858;" align="left" bgcolor="#fff">SYMBOL</th>
                 <th style="color: #000 !important; text-shadow: none !important; -webkit-box-shadow: none !important; box-shadow: none !important; -webkit-box-sizing: border-box; -moz-box-sizing: border-box; box-sizing: border-box; padding: 0; bold: 1px  #585858;" align="left" bgcolor="#fff">Open Price</th>
              
                 <th style="color: #000 !important; text-shadow: none !important; -webkit-box-shadow: none !important; box-shadow: none !important; -webkit-box-sizing: border-box; -moz-box-sizing: border-box; box-sizing: border-box; padding: 0; bold: 1px  #585858;" align="left" bgcolor="#fff">Close Price</th>
                 <th style="color: #000 !important; text-shadow: none !important; -webkit-box-shadow: none !important; box-shadow: none !important; -webkit-box-sizing: border-box; -moz-box-sizing: border-box; box-sizing: border-box; padding: 0; bold: 1px  #585858;" align="left" bgcolor="#fff">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Change</th>
                 <th style="color: #000 !important; text-shadow: none !important; -webkit-box-shadow: none !important; box-shadow: none !important; -webkit-box-sizing: border-box; -moz-box-sizing: border-box; box-sizing: border-box; padding: 0; bold: 1px  #585858;" align="left" bgcolor="#fff">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; </th>
                
                   <th style="color: #000 !important; text-shadow: none !important; -webkit-box-shadow: none !important; box-shadow: none !important; -webkit-box-sizing: border-box; -moz-box-sizing: border-box; box-sizing: border-box; padding: 0; bold: 1px  #585858;" align="left" bgcolor="#fff">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Trades </th>

                    <th style="color: #000 !important; text-shadow: none !important; -webkit-box-shadow: none !important; box-shadow: none !important; -webkit-box-sizing: border-box; -moz-box-sizing: border-box; box-sizing: border-box; padding: 0; bold: 1px  #585858;" align="left" bgcolor="#fff">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Volume </th>



                     <th style="color: #000 !important; text-shadow: none !important; -webkit-box-shadow: none !important; box-shadow: none !important; -webkit-box-sizing: border-box; -moz-box-sizing: border-box; box-sizing: border-box; padding: 0; bold: 1px  #585858;" align="left" bgcolor="#fff">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Value </th>




                    

                </tr>
               

                     <tbody>
                    <?php  foreach ($data['TradeSumreport'] as $TradeSumreport) : 

                     $closeref =   $TradeSumreport->CLOSE_PRICE;
                     $refclose =   $TradeSumreport->refprice;

                    $change = $closeref - $refclose; 

                 if($change == 0){
                   $chn = "<i class='fa fa-arrows-h' style='font-size:15px; color:yellow'> &harr;</i>";
                }if($change > 0){
                   $chn = "<i class='fa fa-arrow-up' style='font-size:15px; color:green'> &uarr;</i>";
                }if($change < 0){
                   $chn = "<i class='fa fa-arrow-down' style='font-size:15px; color:red'> &darr;</i>";
                }

                $pecentage = ($change / $refclose) * 100; 
                $pecentage = number_format($pecentage,2);
                                                    ?> 
                    <tr style="color: #000 !important; text-shadow: none !important; -webkit-box-shadow: none !important; box-shadow: none !important; page-break-inside: avoid; -webkit-box-sizing: border-box; -moz-box-sizing: border-box; box-sizing: border-box;">
                        <td style="color: #000 !important; text-shadow: none !important; -webkit-box-shadow: none !important; box-shadow: none !important; -webkit-box-sizing: border-box; -moz-box-sizing: border-box; box-sizing: border-box; padding: 0; border: 1px solid #585858;" bgcolor="#fff"><?php echo $TradeSumreport->SECURITY; ?></td>
                        <td style="color: #000 !important; text-shadow: none !important; -webkit-box-shadow: none !important; box-shadow: none !important; -webkit-box-sizing: border-box; -moz-box-sizing: border-box; box-sizing: border-box; padding: 0; border: 1px solid #585858;" bgcolor="#fff"><?php echo $TradeSumreport->SYMBOL; ?></td>
                        <td style="color: #000 !important; text-shadow: none !important; -webkit-box-shadow: none !important; box-shadow: none !important; -webkit-box-sizing: border-box; -moz-box-sizing: border-box; box-sizing: border-box; padding: 0; border: 1px solid #585858;" bgcolor="#fff"><?php echo $TradeSumreport->refprice; ?></td>
                      
                        <td style="color: #000 !important; text-shadow: none !important; -webkit-box-shadow: none !important; box-shadow: none !important; -webkit-box-sizing: border-box; -moz-box-sizing: border-box; box-sizing: border-box; padding: 0; border: 1px solid #585858;" bgcolor="#fff"><?php echo $TradeSumreport->CLOSE_PRICE; ?></td>
                        <td style="color: #000 !important; text-shadow: none !important; -webkit-box-shadow: none !important; box-shadow: none !important; -webkit-box-sizing: border-box; -moz-box-sizing: border-box; box-sizing: border-box; padding: 0; border: 1px solid #585858;" bgcolor="#fff"><?php echo $change ?> </td>
                        <td style="color: #000 !important; text-shadow: none !important; -webkit-box-shadow: none !important; box-shadow: none !important; -webkit-box-sizing: border-box; -moz-box-sizing: border-box; box-sizing: border-box; padding: 0; border: 1px solid #585858;" bgcolor="#fff"><?php echo $chn; ?></td>
                         <td style="color: #000 !important; text-shadow: none !important; -webkit-box-shadow: none !important; box-shadow: none !important; -webkit-box-sizing: border-box; -moz-box-sizing: border-box; box-sizing: border-box; padding: 0; border: 1px solid #585858;" bgcolor="#fff"><?php echo $TradeSumreport->DEALS; ?></td>

                          <td style="color: #000 !important; text-shadow: none !important; -webkit-box-shadow: none !important; box-shadow: none !important; -webkit-box-sizing: border-box; -moz-box-sizing: border-box; box-sizing: border-box; padding: 0; border: 1px solid #585858;" bgcolor="#fff"><?php echo number_format($TradeSumreport->VOLUME) ?></td>

                           <td style="color: #000 !important; text-shadow: none !important; -webkit-box-shadow: none !important; box-shadow: none !important; -webkit-box-sizing: border-box; -moz-box-sizing: border-box; box-sizing: border-box; padding: 0; border: 1px solid #585858;" bgcolor="#fff"><?php echo number_format($TradeSumreport->VALUE) ?></td>
                        
                    </tr>
                      <?php endforeach; ?>
                                                </tbody>
                                        </table>
        
        
        </table>


            
