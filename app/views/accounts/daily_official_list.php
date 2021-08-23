
  <?php     
$file='DAILY OFFICIAL LIST '.$data['sumreportdate']->tran_date.'.xls'; ?>

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
      

         <h3> <?php echo date('jS \ F Y ', strtotime($data['sumreportdate']->tran_date));?>
             &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;NASD OTC (Official List)</h3>
                

                <tr style="color: #000 !important; text-shadow: none !important; -webkit-box-shadow: none !important; box-shadow: none !important; page-break-inside: avoid; -webkit-box-sizing: border-box; -moz-box-sizing: border-box; box-sizing: border-box;">
                 <th style="color: #000 !important; text-shadow: none !important; -webkit-box-shadow: none !important; box-shadow: none !important; -webkit-box-sizing: border-box; -moz-box-sizing: border-box; box-sizing: border-box; padding: 0; bold: 1px  #585858;" align="left" bgcolor="#fff">Security Name</th>
                 <th style="color: #000 !important; text-shadow: none !important; -webkit-box-shadow: none !important; box-shadow: none !important; -webkit-box-sizing: border-box; -moz-box-sizing: border-box; box-sizing: border-box; padding: 0; bold: 1px  #585858;" align="left" bgcolor="#fff">Symbol</th>
                 <th style="color: #000 !important; text-shadow: none !important; -webkit-box-shadow: none !important; box-shadow: none !important; -webkit-box-sizing: border-box; -moz-box-sizing: border-box; box-sizing: border-box; padding: 0; bold: 1px  #585858;" align="left" bgcolor="#fff"><?php echo $data['sumreportdate']->tran_date; ?><br>Open Price</th>
              
                 <th style="color: #000 !important; text-shadow: none !important; -webkit-box-shadow: none !important; box-shadow: none !important; -webkit-box-sizing: border-box; -moz-box-sizing: border-box; box-sizing: border-box; padding: 0; bold: 1px  #585858;" align="left" bgcolor="#fff"><?php echo $data['sumreportdate']->tran_date; ?><br>Close Price</th>
                 <th style="color: #000 !important; text-shadow: none !important; -webkit-box-shadow: none !important; box-shadow: none !important; -webkit-box-sizing: border-box; -moz-box-sizing: border-box; box-sizing: border-box; padding: 0; bold: 1px  #585858;" align="left" bgcolor="#fff">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;52 Weeks<br> High </th>
                 <th style="color: #000 !important; text-shadow: none !important; -webkit-box-shadow: none !important; box-shadow: none !important; -webkit-box-sizing: border-box; -moz-box-sizing: border-box; box-sizing: border-box; padding: 0; bold: 1px  #585858;" align="left" bgcolor="#fff">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <br>Low </th>
                </tr>
               

                     <tbody>
                                                   <?php  foreach ($data['Sumreport'] as $Sumreport) : ?> 
                    <tr style="color: #000 !important; text-shadow: none !important; -webkit-box-shadow: none !important; box-shadow: none !important; page-break-inside: avoid; -webkit-box-sizing: border-box; -moz-box-sizing: border-box; box-sizing: border-box;">
                        <td style="color: #000 !important; text-shadow: none !important; -webkit-box-shadow: none !important; box-shadow: none !important; -webkit-box-sizing: border-box; -moz-box-sizing: border-box; box-sizing: border-box; padding: 0; border: 1px solid #585858;" bgcolor="#fff"><?php echo $Sumreport->securityName; ?></td>
                        <td style="color: #000 !important; text-shadow: none !important; -webkit-box-shadow: none !important; box-shadow: none !important; -webkit-box-sizing: border-box; -moz-box-sizing: border-box; box-sizing: border-box; padding: 0; border: 1px solid #585858;" bgcolor="#fff"><?php echo $Sumreport->security; ?></td>
                        <td style="color: #000 !important; text-shadow: none !important; -webkit-box-shadow: none !important; box-shadow: none !important; -webkit-box-sizing: border-box; -moz-box-sizing: border-box; box-sizing: border-box; padding: 0; border: 1px solid #585858;" bgcolor="#fff"><?php echo $Sumreport->open; ?></td>
                      
                        <td style="color: #000 !important; text-shadow: none !important; -webkit-box-shadow: none !important; box-shadow: none !important; -webkit-box-sizing: border-box; -moz-box-sizing: border-box; box-sizing: border-box; padding: 0; border: 1px solid #585858;" bgcolor="#fff"><?php echo $Sumreport->close; ?></td>
                        <td style="color: #000 !important; text-shadow: none !important; -webkit-box-shadow: none !important; box-shadow: none !important; -webkit-box-sizing: border-box; -moz-box-sizing: border-box; box-sizing: border-box; padding: 0; border: 1px solid #585858;" bgcolor="#fff"><?php echo $Sumreport->I52WH; ?></td>
                        <td style="color: #000 !important; text-shadow: none !important; -webkit-box-shadow: none !important; box-shadow: none !important; -webkit-box-sizing: border-box; -moz-box-sizing: border-box; box-sizing: border-box; padding: 0; border: 1px solid #585858;" bgcolor="#fff"><?php echo $Sumreport->I52WL; ?></td>
                    </tr>
                      <?php endforeach; ?>
                                                </tbody>
                                        </table>
        
        
        </table>


            
