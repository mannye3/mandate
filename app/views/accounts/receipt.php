
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8" />
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link href="images/favicon.png" rel="icon" />
<title>Mandate - Receipt</title>

<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css" integrity="sha512-HK5fgLBL+xu6dm/Ii3z4xhlSUyZgTT9tuc/hSrtw6uzJOvgRr2a9jyxxT1ely+B+xFAmJKVSTbpM/CuL7qxO8w==" crossorigin="anonymous" />
<!-- Web Fonts
======================= -->
<link rel='stylesheet' href='https://fonts.googleapis.com/css?family=Poppins:100,200,300,400,500,600,700,800,900' type='text/css'>

<!-- Stylesheet
======================= -->
<link rel="stylesheet" type="text/css" href="<?php echo URLROOT; ?>/assets/bootstrap.min.css"/>
<link rel="stylesheet" type="text/css" href="<?php echo URLROOT; ?>/assets/all.min.css"/>
<link rel="stylesheet" type="text/css" href="<?php echo URLROOT; ?>/assets/stylesheet.css"/>
</head>
<body>
<!-- Container -->
<div class="container-fluid invoice-container">
  <!-- Header -->
  <header>
  <div class="row align-items-center">
    <div class="col-sm-7 text-center text-sm-left mb-3 mb-sm-0">
      <img id="logo" src="https://nasdng.com/wp-content/uploads/2018/10/NASD-LOGO-PLC.png"/>
    </div>
    <div class="col-sm-5 text-center text-sm-right">
      <h4 class="text-7 mb-0">Receipt  </h4>
    </div>
  </div>
  <hr>
  </header>
  
  <!-- Main Content -->
  <main>
  <div class="row">
    <div class="col-sm-6">
       <address>
        9th Floor, UBA House,<br>
        57 Marina, Lagos State,<br>
        Nigeria.<br>

        P.O. Box 4454.<br>
        Tel: +23412808676, +23414605008<br>
        Email: info@nasdng.com

    
      </address>
 </div>

    <div class="col-sm-6 text-sm-right"> 
      <strong>Receipt  No:</strong> <?php echo $_SESSION['receipt_number'];  ?>
      <br>
      <strong>Date:</strong> <?php echo  $_SESSION['receipt_date']; ?>

    </div>
      
  </div>
  <hr>
  <div class="row">
   
    <div class="col-sm-6 order-sm-0"> <strong>Received From:</strong>
      <address>
    <?php echo $data['mandate_info']->company_name; ?><br />
     <?php echo $data['mandate_info']->address; ?><br />
       <?php echo $data['mandate_info']->phone; ?><br />
       <?php echo $data['mandate_info']->email; ?>
      </address>
    </div>
  </div>  
  <div class="card">
    <div class="card-header px-2 py-0">



                         <table class="table table-condensed">
                            <thead>
                                <tr>
                                    <td><strong>#</strong></td>
                                     <td><strong>Fee</strong></td>
                                    <td class="text-center"><strong>Year</strong></td>
                                    <td class="text-center"><strong>Amount</strong></td>
                                    <td class="text-right"><strong>Total</strong></td>
                                </tr>
                            </thead>
                            <tbody>
                                 <?php $count = 0;  foreach($data['mandate_accounts'] as $mandate_account) : $count++; ?>
                                <tr>
                                    <td> <?php echo $count;  ?></td>
                                    <td><?php echo $mandate_account->fee_title; ?></td>
                                    <td class="text-center"><?php echo $mandate_account->issued_year; ?></td>
                                    <td class="text-center"><?php echo number_format($mandate_account->amount); ?></td>
                                    <td class="text-right"></td>


                                </tr>
                                 <?php endforeach; ?>
                               
                              
                               

                               
                               
                              
                               
                            <!--     <tr>
                                    <td class="emptyrow"></td>
                                    <td class="emptyrow"></td>
                                    <td class="emptyrow"></td>
                                    <td class="emptyrow text-center"><strong>Shipping</strong></td>
                                    <td class="emptyrow text-right">$20</td>
                                </tr> -->
                                <tr>
                                    <td class="emptyrow"></td>
                                    <td class="emptyrow"></td>
                                    <td class="emptyrow"></td>
                                    <td class="emptyrow text-center"><strong>Total</strong></td>
                                    <td class="emptyrow text-right">₦<?php echo number_format($data['mandate_accounts_Total']->TotalPAYMENT); ?></td>
                                </tr>
                                 
                            </tbody>
                        </table>
  <!--     <table class="table mb-0">
        <thead>
          <tr>
            <td class="col-1 border-0"><strong>#</strong></td>
            <td class="col-8 border-0"><strong>Description</strong></td>
             <td class="col-8 border-0"><strong>Description</strong></td>
            <td class="col-2 text-right border-0"><strong>Amount</strong></td>
          </tr>
        </thead>
      </table>
    </div>
    <div class="card-body px-2">
      <div class="table-responsive">
        <table class="table">
          <tbody>
            

            <tr>
              <td>2</td>
              <td class="text-1">ANNUAL FEE BROKER</td>
              <td class="text-center"></td>
               <td class="text-center"></td>
              <td class="text-right">50,000</td>
            </tr>
             

         
            <tr>
              <td colspan="4" class="bg-light-2 text-right"><strong>Total:</strong></td>
              <td class="bg-light-2 text-right">₦150,000</td>
            </tr>
          </tbody>
        </table> -->


      </div>

    </div>
 <footer class="text-center mt-4">
  <p class="text-1"><strong>NOTE :</strong> This is computer generated receipt and does not require physical signature.</p>
  <div class="btn-group btn-group-sm d-print-none"> <a href="javascript:window.print()" class="btn btn-light border text-black-50 shadow-none"><i class="fa fa-print"></i> Print</a> <!-- <a href="" class="btn btn-light border text-black-50 shadow-none"><i class="fa fa-download"></i> Download</a> --> </div>
  </footer>
  </div>

  </main>
  <!-- Footer -->
 
</div>
</body>
</html>