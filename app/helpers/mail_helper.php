<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

require_once __DIR__ . '/vendor/phpmailer/src/Exception.php';
require_once __DIR__ . '/vendor/phpmailer/src/PHPMailer.php';
require_once __DIR__ . '/vendor/phpmailer/src/SMTP.php';

$current_year = date('Y');

function PasswordReseted($data,$name){



    $mail = new PHPMailer(true);

        // $htmlversion="<p style='color:red;'>Hi ".$name.", <br><br> This is your promo code HTML : ".$promoCode.". </p>";
        $htmlversion = '<!DOCTYPE html>
<html lang="en" xmlns="http://www.w3.org/1999/xhtml" xmlns:v="urn:schemas-microsoft-com:vml" xmlns:o="urn:schemas-microsoft-com:office:office">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="x-apple-disable-message-reformatting">
    <title></title>
    
    <link href="https://fonts.googleapis.com/css?family=Roboto:400,600" rel="stylesheet" type="text/css">
    <!-- Web Font / @font-face : BEGIN -->
    <!--[if mso]>
        <style>
            * {
                font-family: sans-serif !important;
            }
        </style>
    <![endif]-->

    <!--[if !mso]>
        <link href="https://fonts.googleapis.com/css?family=Roboto:400,600" rel="stylesheet" type="text/css">
    <![endif]-->

    <!-- Web Font / @font-face : END -->

    <!-- CSS Reset : BEGIN -->
    
    
    <style>
        /* What it does: Remove spaces around the email design added by some email clients. */
        /* Beware: It can remove the padding / margin and add a background color to the compose a reply window. */
        html,
        body {
            margin: 0 auto !important;
            padding: 0 !important;
            height: 100% !important;
            width: 100% !important;
            font-family: sans-serif !important;
            font-size: 14px;
            margin-bottom: 10px;
            line-height: 24px;
            color: #8094ae;
            font-weight: 400;
        }
        * {
            -ms-text-size-adjust: 100%;
            -webkit-text-size-adjust: 100%;
            margin: 0;
            padding: 0;
        }
        table,
        td {
            mso-table-lspace: 0pt !important;
            mso-table-rspace: 0pt !important;
        }
        table {
            border-spacing: 0 !important;
            border-collapse: collapse !important;
            table-layout: fixed !important;
            margin: 0 auto !important;
        }
        table table table {
            table-layout: auto;
        }
        a {
            text-decoration: none;
        }
        img {
            -ms-interpolation-mode:bicubic;
        }


    </style>

</head>

<body width="100%" style="margin: 0; padding: 0 !important; mso-line-height-rule: exactly; background-color: #f5f6fa;">
    <center style="width: 100%; background-color: #f5f6fa;">
        <table width="100%" border="0" cellpadding="0" cellspacing="0" bgcolor="#f5f6fa">
            <tr>
               <td style="padding: 40px 0;">
                    <table style="width:100%;max-width:620px;margin:0 auto;">
                        <tbody>
                            <tr>
                                <td style="text-align: center; padding-bottom:25px">
                                    <a href="#"><img style="height: 40px" src="https://nasdotcng.com/issuersportal/assets/images/nasdlogop.jpg" alt="logo"></a>
                                    
                                </td>
                            </tr>
                        </tbody>
                    </table>
                    <table style="width:100%;max-width:620px;margin:0 auto;background-color:#ffffff;">
                        <tbody>
                            <tr>
                                <td style="padding: 30px 30px 15px 30px;">
                                <h2 style="font-size: 18px; color: red; font-weight: 600; margin: 0;">Password Reseted</h2>
                                </td>
                            </tr>
                            <tr>
                                <td style="padding: 0 30px 20px">
                                    <p style="margin-bottom: 10px;">Dear '. $name.',</p>
                                    <p style="margin-bottom: 10px;">You Successfully Reseted Your Password.</p>

                                    
                                </td>
                            </tr>
                           
                            <tr>
                                <td style="padding: 20px 30px 40px">
                                    <p>This is an automatically generated email please do not reply to this email. If you face any issues, please contact us at : marketreports@nasdng.com</p>
                                   
                                    <br><br>
                                    

                                    
                                </td>



                            </tr>

                        </tbody>

                    </table>

                  
               </td>
            </tr>
        </table>
    </center>
</body>
</html>';
    //$mail->SMTPDebug = SMTP::DEBUG_SERVER; // for detailed debug output
    $mail->isSMTP();
    $mail->Host = 'smtp.gmail.com';
    $mail->SMTPAuth = true;
    $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;
    $mail->Port = 587;

    $mail->Username = 'marketreports@nasdng.com';                     // SMTP username
    $mail->Password = 'operations';  

    // Sender and recipient settings
    $mail->setFrom('no-reply@nasdng.com');
    $mail->addAddress($data['email']);  

    // Setting the email content
     $mail->isHTML(true);                                  // Set email format to HTML
        $mail->Subject = 'Password Reseted';
        $mail->Body    = $htmlversion;
 

             if (!$mail->send()) {
        echo "Mailer Error: " . $mail->ErrorInfo;
    }
    else{
        return true;
    }

    

    }


    function PasswordResetEmail($data,$name){

  require 'PHPMailerAutoload.php';

        $mail = new PHPMailer(true);

        // $htmlversion="<p style='color:red;'>Hi ".$name.", <br><br> This is your promo code HTML : ".$promoCode.". </p>";
        $htmlversion = '<!DOCTYPE html>
<html lang="en" xmlns="http://www.w3.org/1999/xhtml" xmlns:v="urn:schemas-microsoft-com:vml" xmlns:o="urn:schemas-microsoft-com:office:office">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="x-apple-disable-message-reformatting">
    <title></title>
    <link href="https://fonts.googleapis.com/css?family=Roboto:400,600" rel="stylesheet" type="text/css">
    <style>
        
        html,
        body {
            margin: 0 auto !important;
            padding: 0 !important;
            height: 100% !important;
            width: 100% !important;
            
            font-size: 14px;
            margin-bottom: 10px;
            line-height: 24px;
            color:#8094ae;
            font-weight: 400;
        }
        * {
            -ms-text-size-adjust: 100%;
            -webkit-text-size-adjust: 100%;
            margin: 0;
            padding: 0;
        }
        table,
        td {
            mso-table-lspace: 0pt !important;
            mso-table-rspace: 0pt !important;
        }
        table {
            border-spacing: 0 !important;
            border-collapse: collapse !important;
            table-layout: fixed !important;
            margin: 0 auto !important;
        }
        table table table {
            table-layout: auto;
        }
        a {
            text-decoration: none;
        }
        img {
            -ms-interpolation-mode:bicubic;
        }
    </style>

</head>

<body width="100%" style="margin: 0; padding: 0 !important; mso-line-height-rule: exactly; background-color: #f5f6fa;">
    <center style="width: 100%; background-color: #f5f6fa;">
        <table width="100%" border="0" cellpadding="0" cellspacing="0" bgcolor="#f5f6fa">
            <tr>
               <td style="padding: 40px 0;">
                    <table style="width:100%;max-width:620px;margin:0 auto;">
                        <tbody>
                            <tr>
                                <td style="text-align: center; padding-bottom:25px">
                                    <a href="#"><img style="height: 40px" src="https://nasdotcng.com/issuersportal/assets/images/nasdlogop.jpg" alt="logo"></a>
                                    
                                </td>
                            </tr>
                        </tbody>
                    </table>
                    <table style="width:100%;max-width:620px;margin:0 auto;background-color:#ffffff;">
                        <tbody>
                            <tr>
                                <td style="text-align:center;padding: 30px 30px 15px 30px;">
                                    <h2 style="font-size: 18px; color: black; font-weight: 600; margin: 0;">Reset Password</h2>
                                </td>
                            </tr>
                            <tr>
                                <td style="text-align:center;padding: 0 30px 20px">
                                    <p style="margin-bottom: 10px;">Hi '. $name.',</p>
                                    <p style="margin-bottom: 25px;">Click On The link blow to reset your password.</p>
                                    <a href="' . URLROOT . '/users/reset_password/'. $data['pass_res_token'] .'" style="background-color:blue;border-radius:4px;color:#ffffff;display:inline-block;font-size:13px;font-weight:600;line-height:44px;text-align:center;text-decoration:none;text-transform: uppercase; padding: 0 25px">Reset Password</a>
                                </td>
                            </tr>
                            <tr>
                                <td style="text-align:center;padding: 20px 30px 40px">
                                    <p>If you did not make this request, please contact us or ignore this message.</p>
                                    <p style="margin: 0; font-size: 13px; line-height: 22px; color:#9ea8bb;">This is an automatically generated email please do not reply to this email. If you face any issues, please contact us at  marketreports@nasdng.com</p>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                    
               </td>
            </tr>
        </table>
    </center>
</body>
</html>';
      //$mail->SMTPDebug = SMTP::DEBUG_SERVER; // for detailed debug output
    $mail->isSMTP();
    $mail->Host = 'smtp.gmail.com';
    $mail->SMTPAuth = true;
    $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;
    $mail->Port = 587;

    $mail->Username = 'marketreports@nasdng.com';                     // SMTP username
    $mail->Password = 'operations';  

    // Sender and recipient settings
    $mail->setFrom('no-reply@nasdng.com');
    $mail->addAddress($data['email']);  

    // Setting the email content
     $mail->isHTML(true);                                  // Set email format to HTML
        $mail->Subject = 'Password Reset';
        $mail->Body    = $htmlversion;
 

             if (!$mail->send()) {
        echo "Mailer Error: " . $mail->ErrorInfo;
    }
    else{
        return true;
    }


    }



  




function NewAccountCreation($data,$password){



    $mail = new PHPMailer(true);

        // $htmlversion="<p style='color:red;'>Hi ".$name.", <br><br> This is your promo code HTML : ".$promoCode.". </p>";
        $htmlversion = '<!DOCTYPE html>
<html lang="en" xmlns="http://www.w3.org/1999/xhtml" xmlns:v="urn:schemas-microsoft-com:vml" xmlns:o="urn:schemas-microsoft-com:office:office">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="x-apple-disable-message-reformatting">
    <title></title>
    
    <link href="https://fonts.googleapis.com/css?family=Roboto:400,600" rel="stylesheet" type="text/css">
    <!-- Web Font / @font-face : BEGIN -->
    <!--[if mso]>
        <style>
            * {
                font-family:  sans-serif !important;
            }
        </style>
    <![endif]-->

    <!--[if !mso]>
        <link href="https://fonts.googleapis.com/css?family=Roboto:400,600" rel="stylesheet" type="text/css">
    <![endif]-->

    <!-- Web Font / @font-face : END -->

    <!-- CSS Reset : BEGIN -->
    
    
    <style>
        /* What it does: Remove spaces around the email design added by some email clients. */
        /* Beware: It can remove the padding / margin and add a background color to the compose a reply window. */
        html,
        body {
            margin: 0 auto !important;
            padding: 0 !important;
            height: 100% !important;
            width: 100% !important;
            font-family:  sans-serif !important;
            font-size: 14px;
            margin-bottom: 10px;
            line-height: 24px;
            color: #8094ae;
            font-weight: 400;
        }
        * {
            -ms-text-size-adjust: 100%;
            -webkit-text-size-adjust: 100%;
            margin: 0;
            padding: 0;
        }
        table,
        td {
            mso-table-lspace: 0pt !important;
            mso-table-rspace: 0pt !important;
        }
        table {
            border-spacing: 0 !important;
            border-collapse: collapse !important;
            table-layout: fixed !important;
            margin: 0 auto !important;
        }
        table table table {
            table-layout: auto;
        }
        a {
            text-decoration: none;
        }
        img {
            -ms-interpolation-mode:bicubic;
        }


    </style>

</head>

<body width="100%" style="margin: 0; padding: 0 !important; mso-line-height-rule: exactly; background-color: #f5f6fa;">
    <center style="width: 100%; background-color: #f5f6fa;">
        <table width="100%" border="0" cellpadding="0" cellspacing="0" bgcolor="#f5f6fa">
            <tr>
               <td style="padding: 40px 0;">
                    <table style="width:100%;max-width:620px;margin:0 auto;">
                        <tbody>
                            <tr>
                                <td style="text-align: center; padding-bottom:25px">
                                    <a href="#"><img style="height: 40px" src="https://nasdotcng.com/issuersportal/assets/images/nasdlogop.jpg" alt="logo"></a>
                                    
                                </td>
                            </tr>
                        </tbody>
                    </table>
                    <table style="width:100%;max-width:620px;margin:0 auto;background-color:#ffffff;">
                        <tbody>
                            <tr>
                                <td style="padding: 30px 30px 15px 30px;">
                                    <h2 style="font-size: 18px; color: red; font-weight: 600; margin: 0;"> NEW ACCOUNT
</h2>
                                </td>
                            </tr>
                            <tr>
                                <td style="padding: 0 30px 20px">
                                    <p style="margin-bottom: 10px;">Dear '.$data['name'].',</p>
                                    <p style="margin-bottom: 10px;">Your account has been successfully created on E-MANDATE Portal.</p>
                                    <p style="margin-bottom: 10px;">Please find below details for your account.</p>
                                   
                                    
                                    <p style="color: black;"><b>LINK : <a href="https://nasdotcng.com/e_mandate/">https://nasdotcng.com/e_mandate</a> </b></p>

                                     <p style="color: black;"><b> Email :  '.$data['email'].' </b></p>

                                      <p style="color: black;"><b> PASSWORD :  '.$password.' </b></p>

                                       <p style="color: black;"><b> DATE CREATED :  '.$data['reg_date'].'</b></p>
                                </td>    
                            </tr>
                           
                            <tr>
                                <td style="padding: 20px 30px 40px">
                                    
                                    <p style="margin: 0; font-size: 13px; line-height: 22px; color:#9ea8bb;">This is an automatically generated email please do not reply to this email. If you face any issues, please contact us at  marketreports@nasdng.com</p>


                                     
                                </td>



                            </tr>

                        </tbody>

                    </table>

                 
               </td>
            </tr>
        </table>
    </center>
</body>
</html>';
    //$mail->SMTPDebug = SMTP::DEBUG_SERVER; // for detailed debug output
    $mail->isSMTP();
    $mail->Host = 'smtp.gmail.com';
    $mail->SMTPAuth = true;
    $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;
    $mail->Port = 587;

    $mail->Username = 'marketreports@nasdng.com';                     // SMTP username
    $mail->Password = 'operations';  

    // Sender and recipient settings
    $mail->setFrom('no-reply@nasdng.com');
    $mail->addAddress($data['email']);  

    // Setting the email content
     $mail->isHTML(true);                                  // Set email format to HTML
        $mail->Subject = 'New Account';
        $mail->Body    = $htmlversion;
 

             if (!$mail->send()) {
        echo "Mailer Error: " . $mail->ErrorInfo;
    }
    else{
        return true;
    }

    

    }



?>