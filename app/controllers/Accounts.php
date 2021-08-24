<?php
  class Accounts extends Controller {
    public function __construct(){

   if(isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] === 'on')   
     $url = "https://";   
    else  
      $url = "http://";   
    // Append the host(domain name, ip) to the URL.   
    $url.= $_SERVER['HTTP_HOST'];    
    // Append the requested resource location to the URL   
      $url.= $_SERVER['REQUEST_URI'];    
       $_SESSION['url'] = $url;


     

        if(!isLoggedIn()){
        redirect('users');
      }
     

       $this->adminModel = $this->model('Admin');
      $this->utilityModel = $this->model('Utility');
      $this->accountModel = $this->model('Account');
    }

      public function index(){



 

       $status = 'Ok';
       $dealer_broker = 'BROKER/DEALER';
       $broker = 'BROKER';
       $issuehouse = 'ISSUINGHOUSE';
       $registionfee = 'REGISTRATION';


       $fee_cod_c = 'BDAF'; //BROKER DEALER ANNUAL FEE 

       $fee_cod_c2 = 'AFPM'; // PLATFORM MAINTENANCE

       $fee_cod_c3 = 'AFAT'; // TRADER FEE

       $fee_cod_c4 = 'AFB'; // BROKER FEE

       $fee_cod_c5 = 'AFIH'; // ISSUING HOUSE FEE

       $fee_cod_c6 = 'DP'; // DATA PORTAL FEE

       $current_year = date("Y"); // CURRENT YEAR FUNCTION 

       $total1 = $this->accountModel->AllTotalBFAmount($fee_cod_c);
        $total2 = $this->accountModel->AllTotalPFAmount($fee_cod_c2);
        $total3 = $this->accountModel->AllTotalTFAmount($fee_cod_c3);
        $total4 = $this->accountModel->AllTotalDPAmount($fee_cod_c6);
        $totaly1= $this->accountModel->AllTotalBDYear($fee_cod_c,$current_year);
        $totaly2= $this->accountModel->AllTotalPMYear($fee_cod_c2,$current_year);
        $SumTraders= $this->accountModel->getTotatalTraders();
        $totaly4= $this->accountModel->AllTotalDPYear($fee_cod_c6,$current_year);
        $totaldatraining= $this->accountModel->AllSumTraining();
        $totaldatarequest= $this->accountModel->AllSumdatarequest();
        $totaldatarequestyear= $this->accountModel->AllSumdatarequestYear($current_year);
        $totalDB = $this->accountModel->getTotatalDB($dealer_broker,$status);
        $totalBK = $this->accountModel->getTotatalbk($broker,$status);
        $totalIH = $this->accountModel->getTotatalih($issuehouse,$status);
        $totalTraderYear = $this->accountModel->AllTotalTFYear($fee_cod_c3,$current_year);
        $annualfee = $this->accountModel->getAllAnnual(); 
        $annualfee1 = $this->accountModel->getAllAnnual1(); 
        $annualfee2 = $this->accountModel->getAllAnnual2(); 
        $annualfee3 = $this->accountModel->getAllAnnual3();
        $annualfeepayment = $this->accountModel->getAllAnnualPayment(); 
        $annualfeepayment1 = $this->accountModel->getAllAnnualPayment1(); 
        $annualfeepayment2 = $this->accountModel->getAllAnnualPayment2(); 
        $annualfeepayment3 = $this->accountModel->getAllAnnualPayment3();
        $annualfeepaymentyear = $this->accountModel->getAllAnnualPaymentYear($current_year); 
        $annualfeepaymentyear1 = $this->accountModel->getAllAnnualPaymentYear1($current_year);
        $annualfeepaymentyear2 = $this->accountModel->getAllAnnualPaymentYear2($current_year);
        $annualfeepaymentyear3 = $this->accountModel->getAllAnnualPaymentYear3($current_year);
        $annualSTB = $this->accountModel->getALLSTB();
        $annualSTBPayment = $this->accountModel->getALLSTBPAYMENT();
        $annualSTBPaymentyear = $this->accountModel->getALLSTBPAYMENTYEAR($current_year);

        $regpayment = $this->accountModel->getAllRegPaymment();
        $regpayment1 = $this->accountModel->getAllRegPaymment1();
        $regpayment2 = $this->accountModel->getAllRegPaymment2();
        $regpayment3 = $this->accountModel->getAllRegPaymment3();
        $regpayment4 = $this->accountModel->getAllRegPaymment4();
        $regpayment5 = $this->accountModel->getAllRegPaymment5();
        $regpayment6 = $this->accountModel->getAllRegPaymment6();
        $regpayment7 = $this->accountModel->getAllRegPaymment7();



        $regpaymentyear = $this->accountModel->getAllRegPaymmentyear($current_year);
        $regpaymentyear1 = $this->accountModel->getAllRegPaymmentyear1($current_year);
        $regpaymentyear2 = $this->accountModel->getAllRegPaymmentyear2($current_year);
        $regpaymentyear3 = $this->accountModel->getAllRegPaymmentyear3($current_year);
        $regpaymentyear4 = $this->accountModel->getAllRegPaymmentyear4($current_year);
        $regpaymentyear5 = $this->accountModel->getAllRegPaymmentyear5($current_year);
        $regpaymentyear6 = $this->accountModel->getAllRegPaymmentyear6($current_year);
        $regpaymentyear7 = $this->accountModel->getAllRegPaymmentyear7($current_year);


        $allISH = $this->accountModel->getALLISH();
        $T_Fee5 = $this->accountModel->findMandateFeeByCode5($fee_cod_c5);
        $T_ISHPAY = $this->accountModel->TotalISHPAYMENT($fee_cod_c5);
        $T_ISHPAY_YEAR = $this->accountModel->TotalISHPAYMENTYEAR($fee_cod_c5,$current_year);

        $ALLPMPAY = $this->accountModel->getALLPM();
        $ALLPMPAY_YEAR = $this->accountModel->getALLPMYEAR($current_year);






       

        // $ substr($regfee->fee_title,0,12); die();

           // echo  $de_cl = $annualfee3->toltal4; die();

           
        // $totalm2 = $this->accountModel->AllTotalTFmonth2($fee_code2);
        // $totalm3 = $this->accountModel->AllTotalTFmonth3($fee_code3);



                $data = [
                'total1' => $total1,
                'total2' => $total2,
                'total3' => $total3,
                'total4' => $total4,
                'totaly1' => $totaly1,
                'totaly2' => $totaly2,
                'SumTraders' => $SumTraders,
                'totaly4' => $totaly4,
                'totaldatraining' => $totaldatraining,
                'totaldatarequest' => $totaldatarequest,
                'totaldatarequestyear' => $totaldatarequestyear,
                'totalDB' => $totalDB,
                 'totalBK' => $totalBK,
                 'totalIH' => $totalIH,
                 'totalTraderYear' => $totalTraderYear,
                 'annualfee' => $annualfee,
                 'annualfee1' => $annualfee1,
                 'annualfee2' => $annualfee2,
                 'annualfee3' => $annualfee3,
                 'annualfeepayment' => $annualfeepayment,
                 'annualfeepayment1' => $annualfeepayment1,
                 'annualfeepayment2' => $annualfeepayment2,
                 'annualfeepayment3' => $annualfeepayment3,
                  'annualfeepaymentyear' => $annualfeepaymentyear,
                  'annualfeepaymentyear1' => $annualfeepaymentyear1,
                  'annualfeepaymentyear2' => $annualfeepaymentyear2,
                  'annualfeepaymentyear3' => $annualfeepaymentyear3,
                   'annualSTB' => $annualSTB,
                   'annualSTBPayment' => $annualSTBPayment,

                    'regpayment' => $regpayment,
                    'regpayment1' => $regpayment1,
                    'regpayment2' => $regpayment2,
                    'regpayment3' => $regpayment3,
                    'regpayment4' => $regpayment4,
                    'regpayment5' => $regpayment5,
                    'regpayment6' => $regpayment6,
                    'regpayment7' => $regpayment7,

                    'regpaymentyear' => $regpaymentyear,
                    'regpaymentyear1' => $regpaymentyear1,
                    'regpaymentyear2' => $regpaymentyear2,
                    'regpaymentyear3' => $regpaymentyear3,
                    'regpaymentyear4' => $regpaymentyear4,
                    'regpaymentyear5' => $regpaymentyear5,
                    'regpaymentyear6' => $regpaymentyear6,
                    'regpaymentyear7' => $regpaymentyear7,


                    'allISH' => $allISH,
                    'T_Fee5' => $T_Fee5,
                    'T_ISHPAY' => $T_ISHPAY,
                    'T_ISHPAY_YEAR' => $T_ISHPAY_YEAR,
                     'ALLPMPAY' => $ALLPMPAY,
                     'ALLPMPAY_YEAR' => $ALLPMPAY_YEAR





                
                            
                
                   
                                ];

                   

                      $this->view('inc/user_header');
                       $this->view('accounts/index',$data);
                      $this->view('inc/user_footer');
                } 


     


     public function profile(){
            if($_SERVER['REQUEST_METHOD'] == 'POST'){

              // Sanitize POST array
              $_POST = filter_input_array(INPUT_POST, FILTER_SANITIZE_STRING);

              // Init data
                  $data =[
                    'id' => $_SESSION['user_id'],
                    'email' => trim($_POST['email']),
                    'password' => trim($_POST['password']),
                    'name' => trim($_POST['name']),
                    'department' => trim($_POST['department']),
                    'email_err' => ''
                    
                  ];

                  

                    // Validate Email
                  if(empty($data['email'])){
                    $data['email_err'] = 'Pleae enter name';
                  } 


                  // EMPTY PASSWORD INPUT
                  if(empty($data['password'])){

                $this->accountModel->updateUser($data);

                  $_SESSION['email'] = $data['email'];
                  $_SESSION['name'] = ucwords($data['name']);
                  $_SESSION['department'] = $data['department'];

                    flash('alert_message', 'Account Updated');
                    redirect('accounts/profile');
                
                  } 

   
              

                  /// Make sure errors are empty
                  if(empty($data['email_err'])){
                    // Validated
                   
            
                $data['password'] = password_hash($data['password'], PASSWORD_DEFAULT);

              
            // Make sure no errors
           
              // Validated
              if($this->accountModel->updateUserPassword($data)){

                  $data['name'] = ucwords($data['name']);
                  $_SESSION['email'] = $data['email'];
                  $_SESSION['department'] = $data['department'];

                  flash('alert_message', 'Account Updated with password');
                  redirect('accounts/profile');
                
              } 


                   else {
                  die('Something went wrong');
                }
              } else {
                // Load view with errors
             $this->view('inc/user_header');
              $this->view('accounts/profile', $data);
              $this->view('inc/user_footer');
              }

            } else {
            

               $data =[
                    'email' => '',
                    'name' => '',
                    'email_err' => ''
                    
                  ];
              $this->view('inc/user_header');
              $this->view('accounts/profile', $data);
              $this->view('inc/user_footer');
            }
          }









          public function profilepasswordupdate(){
            $password_update = date('Y/m/d h:i:s A');
            if($_SERVER['REQUEST_METHOD'] == 'POST'){

              // Sanitize POST array
              $_POST = filter_input_array(INPUT_POST, FILTER_SANITIZE_STRING);

              // Init data
                  $data =[
                    'id' => $_SESSION['user_id'],
                   
                    'password' => trim($_POST['password']),
                     'password_update' => $password_update,
                  
                    'password_err' => ''
                    
                  ];

                  

                    // Validate Email
                  if(empty($data['password'])){
                    $data['password_err'] = 'Pleae enter password';
                  } 


                 
              

                  /// Make sure errors are empty
                  if(empty($data['password_err'])){
                    // Validated
                   
            
                $data['password'] = password_hash($data['password'], PASSWORD_DEFAULT);

              
            // Make sure no errors
           
              // Validated
              if($this->accountModel->updateUserPassword($data)){

                 

                  flash('alert_message', 'Password Updated');
                  redirect('accounts/profile');
                
              } 


                   else {
                  die('Something went wrong');
                }
              } else {
                // Load view with errors
             $this->view('inc/user_header');
              $this->view('accounts/profile', $data);
              $this->view('inc/user_footer');
              }

            } else {
            

               $data =[
                    'email' => '',
                    'name' => '',
                    'email_err' => ''
                    
                  ];
              $this->view('inc/user_header');
              $this->view('accounts/profile', $data);
              $this->view('inc/user_footer');
            }
          }














                public function mandates()
                {
                  

                   
                  $active_mandates = 1; 
                   $revoked_mandates = 3;

                   $allmandates = $this->accountModel->getAllActiveMandate($revoked_mandates);
                   $mandate_code =  $allmandates->mandate_code;  


                  
                    $data = [
                  'allmandates' => $allmandates
                 
                   
                    ];

                    

                    $this->view('inc/user_header');
                     $this->view('accounts/mandates', $data);
                    $this->view('inc/user_footer');
                }





                



                public function revoked_mandates()
                {
                  

                  
                    $revoked_mandates = 3;

                   $allmandates = $this->accountModel->getAllRevokeMandate($revoked_mandates);
               
                    
                    $data = [
                  'allmandates' => $allmandates,
                
                   
                    ];

                    

                    $this->view('inc/user_header');
                     $this->view('accounts/revoked_mandates', $data);
                    $this->view('inc/user_footer');
                }
            
                   
                    


                    public function change_mandate_status()

                    {

                       if($_SERVER['REQUEST_METHOD'] == 'POST'){
                        // Sanitize POST array
                       
                       
                        $_POST = filter_input_array(INPUT_POST, FILTER_SANITIZE_STRING);

                      
                         // Init data
                              $data =[

                                  'name' => $_SESSION['name'],
                                  'email' => $_SESSION['email'],
                                  'department' => $_SESSION['department'],
                                  'role' => $_SESSION['role'],
                               
                                 'mandate_status' => trim($_POST['mandate_status']), 
                                 'status_note' => trim($_POST['status_note']),  
                                 'mandate_code' => trim($_POST['mandate_code']),  
                              ];

                                 $mandate_status = $data['mandate_status'];

                                 if ($mandate_status == 'Ok') {
                                   $mandate_status = 'Active';
                                   $activity_status = $mandate_status;                                   
                                 }elseif ($mandate_status == 'S') {
                                    $mandate_status = 'Suspended';
                                   $activity_status = $mandate_status;
                                 }if ($mandate_status == 'D') {
                                    $mandate_status = 'Delisted';
                                   $activity_status = $mandate_status;
                                 }

                        


                               $user_log = ''.$data['mandate_code'].' Update Mandate Status ';
                               $activities = 'Mandate Status : Changed To '.$activity_status.', By '.$data['name'].' ';
                              $status = '2';

                            

                          // Validated
                            $this->accountModel->AddMandateActivities($data,$activities);
                          if($this->accountModel->ChangeMandateStatus($data)){
                           if($this->accountModel->AddLog($data,$user_log,$status)){

                             
                           flash('alert_message', 'Status Changed');
                            header('Location: ' . $_SERVER["HTTP_REFERER"] );
                            exit;


          
                          }
                            
                          } 

                          else {
                            die('Something went wrong');
                          }
                        

                      } 
                    }




        







                       public function add_mandate_files(){

                              $this->view('inc/user_header');
                             $this->view('accounts/add_mandate_files');
                              $this->view('inc/user_footer');
                            
                      }





              public function update_mandate_files($mandate_code){


                
                 $data = [
                      
                       'mandate_code' => $mandate_code
                        ];

                      $this->view('inc/user_header');
                     $this->view('accounts/update_mandate_files', $data);
                      $this->view('inc/user_footer');
                    
              }







    




   




            public function fees(){
             
                   if($_SERVER['REQUEST_METHOD'] == 'POST'){
                    // Sanitize POST array       
                   
                    $_POST = filter_input_array(INPUT_POST, FILTER_SANITIZE_STRING);
                  
                     $data = [
                     
                      'fee_title' => trim($_POST['fee_title']),
                      'amount' => trim($_POST['amount']),
                       'fee_code' => trim($_POST['fee_code']),
                        'renewal_status' => trim($_POST['renewal_status']),
                       'fee_title_err' => ''             
                         ];


                  $data['fee_title'] = strtoupper($data['fee_title']);

              
                 
                      // Validated
                      if($this->accountModel->AddFee($data)){
                        
                          flash('alert_message', 'Category Added');
                          redirect('accounts/fees');
                    }
                
          
              

                      } else {

                  $allfees = $this->accountModel->getFees();    

                      $data = [
                            'allfees' => $allfees
                              ];
                         
                         $this->view('inc/user_header');
                        $this->view('accounts/fees', $data);
                        $this->view('inc/user_footer');
                        }


                            }






          public function edit_fee($id)
          {
             if($_SERVER['REQUEST_METHOD'] == 'POST'){
            // Sanitize POST array
           
           
            $_POST = filter_input_array(INPUT_POST, FILTER_SANITIZE_STRING);



          
             // Init data
                  $data =[
                     'id' => $id,
                    'fee_title' => trim($_POST['fee_title']),
                    'amount' => trim($_POST['amount']),
                     'renewal_status' => trim($_POST['renewal_status']),
                 
                    'fee_title_err' => '',
                   
                  ];

                  

                    // Validate Email
                  if(empty($data['fee_title'])){
                    $data['fee_title_err'] = 'Pleae enter title';
                  } 

                   

            
                  /// Make sure errors are empty
                  if(empty($data['fee_title_err'])){
                    // Validated
                   
                $data['fee_title'] = strtoupper($data['fee_title']);

        
           
              // Validated
              if($this->accountModel->updateFee($data)){
                  flash('alert_message', 'Fee Updated');
                  redirect('accounts/fees');
                
              } 

              else {
                die('Something went wrong');
              }
            } 

          } 
          }

          
        



                public function delete_fee($id)
                {

                        if ($this->accountModel->deleteFee($id))
                        {
                            flash('alert_message', 'Fee Removed');
                            redirect('accounts/fees');
                        }
                        else
                        {
                            die('Something went wrong');
                        }
                }
                           









                public function positions(){
             
                   if($_SERVER['REQUEST_METHOD'] == 'POST'){
                    // Sanitize POST array       
                   
                    $_POST = filter_input_array(INPUT_POST, FILTER_SANITIZE_STRING);
                  
                     $data = [
                     
                      'position_title' => trim($_POST['position_title']),
                      'position_title_err' => ''             
                         ];

                        $data['position_title'] = strtoupper($data['position_title']);

                      // Validated
                      if($this->accountModel->AddPosition($data)){
                        
                          flash('alert_message', 'Position Added');
                          redirect('accounts/positions');
                    }
                

                      } else {

                  $allpositions = $this->accountModel->getpositions();    

                      $data = [
                            'allpositions' => $allpositions
                              ];
                         
                         $this->view('inc/user_header');
                        $this->view('accounts/positions', $data);
                        $this->view('inc/user_footer');
                        }


                            }






                public function edit_position($id)
                {
                   if($_SERVER['REQUEST_METHOD'] == 'POST'){
                  // Sanitize POST array
                 
                 
                  $_POST = filter_input_array(INPUT_POST, FILTER_SANITIZE_STRING);



                
                   // Init data
                        $data =[
                           'id' => $id,
                          'position_title' => trim($_POST['position_title']),
                          'position_title_err' => '',
                         
                        ];

                        

                          // Validate Email
                        if(empty($data['position_title'])){
                          $data['position_title_err'] = 'Pleae enter title';
                        } 

                        /// Make sure errors are empty
                        if(empty($data['position_title_err'])){
                          // Validated
                         
                      $data['position_title'] = ucwords($data['position_title']);

      
                    // Validated
                    if($this->accountModel->updatePosition($data)){
                        flash('alert_message', 'Position Updated');
                        redirect('accounts/positions');
                      
                    } 

                    else {
                      die('Something went wrong');
                    }
                  } 

                } 
                }

                
              



              

                 public function categories(){
                     
                           if($_SERVER['REQUEST_METHOD'] == 'POST'){
                            // Sanitize POST array       
                           
                            $_POST = filter_input_array(INPUT_POST, FILTER_SANITIZE_STRING);
                          
                             $data = [

                              'name' => $_SESSION['name'],
                              'email' => $_SESSION['email'],
                              'department' => $_SESSION['department'],
                              'role' => $_SESSION['role'],
                             
                              'cat_title' => trim($_POST['cat_title']),
                              'cat_code' => trim($_POST['cat_code']),
                              
                               'cat_title_err' => ''             
                                 ];


                              $data['cat_title'] = strtoupper($data['cat_title']);
                              

                               $user_log = 'Category : '.$data['cat_title'].' Added, By '.$data['name'].' ';
                               $status = '1';

                        
                              $this->accountModel->AddLog($data,$user_log,$status);
                              // Validated
                              if($this->accountModel->AddCat($data)){
                                
                                  flash('alert_message', 'Category Added');
                                  redirect('accounts/categories');
                            }
                        
                        
                        

                          } else {

                        $allcategories = $this->accountModel->getCat();    

                            $data = [
                                  'allcategories' => $allcategories
                                    ];
                               
                               $this->view('inc/user_header');
                              $this->view('accounts/categories', $data);
                              $this->view('inc/user_footer');
                              }


                        }





                        public function edit_category($id){
                        
 
                           if($_SERVER['REQUEST_METHOD'] == 'POST'){
                            // Sanitize POST array
                           
                           
                            $_POST = filter_input_array(INPUT_POST, FILTER_SANITIZE_STRING);



                          
                             // Init data
                                  $data =[

                                    'name' => $_SESSION['name'],
                                    'email' => $_SESSION['email'],
                                    'department' => $_SESSION['department'],
                                    'role' => $_SESSION['role'],

                                     'id' => $id,
                                    'cat_title' => trim($_POST['cat_title']),
                                    'cat_code' => trim($_POST['cat_code']),
                                   
                                    'cate_title_err' => '',
                                   
                                  ];



                                  

                                    // Validate Email
                                  if(empty($data['cat_title'])){
                                    $data['cat_title_err'] = 'Pleae enter Category';
                                  } 

                                   

                            
                                  /// Make sure errors are empty
                                  if(empty($data['cat_title_err'])){
                                    // Validated
                                   
                                $data['cat_title'] = strtoupper($data['cat_title']);

                        
                               $user_log = 'Category : '.$data['cat_title'].' Updated, By '.$data['name'].' ';
                               $status = '2';

                        
                              $this->accountModel->AddLog($data,$user_log,$status);
                              // Validated
                              if($this->accountModel->updateCat($data)){
                                  flash('alert_message', 'Category Updated');
                                  redirect('accounts/categories');
                                
                              } 

                              else {
                                die('Something went wrong');
                              }
                            } 
                          } 
                        }






                         public function delete_category($id)
                    {

                        if ($this->accountModel->deleteCat($id))
                        {
                            flash('alert_message', 'Category Removed');
                            redirect('accounts/categories');
                        }
                        else
                        {
                            die('Something went wrong');
                        }

                    }












        public function add_mandate(){
         
     
           if($_SERVER['REQUEST_METHOD'] == 'POST'){
            // Sanitize POST array       
           
            $_POST = filter_input_array(INPUT_POST, FILTER_SANITIZE_STRING);
          
             $data = [
              
              'name' => $_SESSION['name'],
              'email' => $_SESSION['email'],
              'department' => $_SESSION['department'],
              'role' => $_SESSION['role'],

              'company_name' => trim($_POST['company_name']),
              'category' => trim($_POST['category']),
               'phone' => trim($_POST['phone']),
              'email' => trim($_POST['email']),
               'address' => trim($_POST['address']),
              'website' => trim($_POST['website']),
              'mandate_code' => trim($_POST['mandate_code']),

              'rec_number' => trim($_POST['rec_number']),
              'date_of_incorporation' => trim($_POST['date_of_incorporation']),
              'sec_registered' => trim($_POST['sec_registered']),
              'principal_contact_name' => trim($_POST['principal_contact_name']),
              'principal_contact_phone' => trim($_POST['principal_contact_phone']),
              'principal_contact_email' => trim($_POST['principal_contact_email']),
              'enquiries_contact_name' => trim($_POST['enquiries_contact_name']),
              'enquiries_contact_phone' => trim($_POST['enquiries_contact_phone']),
              'enquiries_contact_email' => trim($_POST['enquiries_contact_email']),
              'compliance_contact_name' => trim($_POST['compliance_contact_name']),
              'compliance_contact_phone' => trim($_POST['compliance_contact_phone']),
              'compliance_contact_email' => trim($_POST['compliance_contact_email']),
              'settlement_bank_name' => trim($_POST['settlement_bank_name']),
              'settlement_bank_account_number' => trim($_POST['settlement_bank_account_number']),
              'settlement_bank_branch' => trim($_POST['settlement_bank_branch']),
              'settlement_bank_account_name' => trim($_POST['settlement_bank_branch']),

              'mandate_status' => trim($_POST['mandate_status']),
               

               'company_name_err' => ''             
                 ];


          $data['company_name'] = ucwords($data['company_name']);
           $_SESSION['mandate_code'] =  $data['mandate_code'];


            $user_log = 'Mandate : '.$data['company_name'].' Added, By '.$data['name'].' ';
            $status = '1';

           
        
         
              // Validated
              if($this->accountModel->AddMandate($data)){

                if($this->accountModel->AddLog($data,$user_log,$status)){

                flash('alert_message', 'Mandate Added Successfully');
                redirect('accounts/mandates');

                
                 
            }
          }
         
        
           

          } else {

         $load_cat = $this->accountModel->getCatList();


            $data = [
                  'load_cat' => $load_cat
                    ];


               
               $this->view('inc/user_header');
              $this->view('accounts/add_mandate', $data);
              $this->view('inc/user_footer');
              }


        }




         public function add_mandate_file(){  
           if($_FILES["file"]["name"] != '')
            {
            $target_dir = gallery;
            $RandomNum = time();
            $target_file = $target_dir . basename($_FILES["file"]["name"]);
            $filename = explode('.', $_FILES["file"]["name"]);
            $picname = end($filename); 
            $new_name = rand(100, 999) . '.' . $picname;
            $ImageName = str_replace(' ','-',strtolower($new_name));
            $ImageType = $_FILES['file']['type']; //"file/png", file/jpeg etc.
            $ImageExt = substr($ImageName, strrpos($ImageName, '.'));
            $ImageExt = str_replace('.','',$ImageExt);
            $ImageName = preg_replace("/\.[^.\s]{3,4}$/", "", $ImageName);
            $NewImageName = $ImageName.'-'.$RandomNum.'.'.$ImageExt;
            $ret[$NewImageName]= $target_dir.$NewImageName;
            move_uploaded_file($_FILES["file"]["tmp_name"],$target_dir."/".$NewImageName);
           


              $data = array(
                      'files' => $NewImageName,
                      'mandate_code' => $_SESSION['mandate_code']
                     
                      
                      );
                      $this->accountModel->addGallery($data);
                      flash('alert_message', 'Mandate Added Successfully');
             
            // echo "file Uploaded Successfully";
            
           // $this->view('accounts/index', $data);
            }
         redirect('add_mandate_file');
            }




            public function update_mandate_file($mandate_code){  


            


           if($_FILES["file"]["name"] != '')
            {
            $target_dir = gallery;
            $RandomNum = time();
            $target_file = $target_dir . basename($_FILES["file"]["name"]);
            $filename = explode('.', $_FILES["file"]["name"]);
            $picname = end($filename); 
            $new_name = rand(100, 999) . '.' . $picname;
            $ImageName = str_replace(' ','-',strtolower($new_name));
            $ImageType = $_FILES['file']['type']; //"file/png", file/jpeg etc.
            $ImageExt = substr($ImageName, strrpos($ImageName, '.'));
            $ImageExt = str_replace('.','',$ImageExt);
            $ImageName = preg_replace("/\.[^.\s]{3,4}$/", "", $ImageName);
            $NewImageName = $ImageName.'-'.$RandomNum.'.'.$ImageExt;
            $ret[$NewImageName]= $target_dir.$NewImageName;
            move_uploaded_file($_FILES["file"]["tmp_name"],$target_dir."/".$NewImageName);
           


              $data = array(
                      'files' => $NewImageName,
                      'mandate_code' => $mandate_code,
                      'doc_name' =>  $_FILES["file"]["name"],

                    'name' => $_SESSION['name'],
                    'email' => $_SESSION['email'],
                    'department' => $_SESSION['department'],
                    'role' => $_SESSION['role'],
                     
                      
                      );
              $activities = 'Mandate Files : '.$data['doc_name'].' Added, By '.$data['name'].' ';

               $user_log = 'Mandate Files : '.$data['doc_name'].' Added, By '.$data['name'].' ';
              $status = '1';
                
                  $this->accountModel->AddMandateActivities($data,$activities);
                  $this->accountModel->AddLog($data,$user_log,$status);
                  $this->accountModel->addGallery($data);
                      flash('alert_message', 'Mandate Added Successfully');
             
            // echo "file Uploaded Successfully";
            
           // $this->view('accounts/index', $data);
            }
         redirect('add_mandate_file');
            }



            public function edit_mandate($mandate_code){

           if($_SERVER['REQUEST_METHOD'] == 'POST'){
            // Sanitize POST array
           
           
            $_POST = filter_input_array(INPUT_POST, FILTER_SANITIZE_STRING);



          
             // Init data
                  $data =[
                    'name' => $_SESSION['name'],
                    'email' => $_SESSION['email'],
                    'department' => $_SESSION['department'],
                    'role' => $_SESSION['role'],

                    'mandate_code' => $mandate_code,
                    'company_name' => trim($_POST['company_name']),
                     'old_name' => trim($_POST['old_name']),
                    'category' => trim($_POST['category']),
                    'phone' => trim($_POST['phone']),
                    'email' => trim($_POST['email']),
                    'address' => trim($_POST['address']),
                    'website' => trim($_POST['website']),
                     'mandate_code' => trim($_POST['mandate_code']),

                      'rec_number' => trim($_POST['rec_number']),
                      'date_of_incorporation' => trim($_POST['date_of_incorporation']),
                      'sec_registered' => trim($_POST['sec_registered']),
                      'principal_contact_name' => trim($_POST['principal_contact_name']),
                      'principal_contact_phone' => trim($_POST['principal_contact_phone']),
                      'principal_contact_email' => trim($_POST['principal_contact_email']),
                      'enquiries_contact_name' => trim($_POST['enquiries_contact_name']),
                      'enquiries_contact_phone' => trim($_POST['enquiries_contact_phone']),
                      'enquiries_contact_email' => trim($_POST['enquiries_contact_email']),
                      'compliance_contact_name' => trim($_POST['compliance_contact_name']),
                      'compliance_contact_phone' => trim($_POST['compliance_contact_phone']),
                      'compliance_contact_email' => trim($_POST['compliance_contact_email']),
                      'settlement_bank_name' => trim($_POST['settlement_bank_name']),
                      'settlement_bank_account_number' => trim($_POST['settlement_bank_account_number']),
                      'settlement_bank_branch' => trim($_POST['settlement_bank_branch']),
                      'settlement_bank_account_name' => trim($_POST['settlement_bank_branch']),
                      'mandate_code2' => trim($_POST['mandate_code2']),

                    'mandate_code_err' => '',
                   
                  ];

                $company_name =   $data['company_name'];
                $old_name =  $data['old_name'];

                    // Validate Email
                  if(empty($data['mandate_code'])){
                    $data['mandate_code_err'] = 'Pleae enter Mandate Code';
                  } 

                  if ($company_name !==  $old_name ) {

                    $this->accountModel->ChangeMandateNmae($data,$old_name);
               
                  }

                   

            
                  /// Make sure errors are empty
                  if(empty($data['mandate_code_err'])){
                    // Validated
                   
                   // USER LOGS RECORD
                 $user_log = 'Firm  Details : '.$data['company_name'].' Details Updated, By '.$data['name'].' ';
                 $activities = 'Firm Details : '.$data['company_name'].' Details Updated, By '.$data['name'].' ';
                 $status = '2';


                             
                           
           
              // Validated
                  $this->accountModel->AddMandateActivities($data,$activities);
              if($this->accountModel->UpdateMandate($data)){
                 if($this->accountModel->AddLog($data,$user_log,$status)){
                  flash('alert_message', 'Mandate Updated');
                  redirect('accounts/mandate/' .$data['mandate_code2']. '');
                
              } 

            }

              else {
                die('Something went wrong');
              }
            } else {
              // Load view with errors
               $this->view('inc/user_header');
              $this->view('accounts/edit_mandate', $data);
              $this->view('inc/user_footer');
            }

          } else {

         $load_cat = $this->accountModel->getCatList();
         $mandate_info = $this->accountModel->getInfoMandateByCode($mandate_code);


            $data = [
                  'load_cat' => $load_cat,
                  'mandate_info' => $mandate_info
                    ];
           
           $this->view('inc/user_header');
          $this->view('accounts/edit_mandate', $data);
          $this->view('inc/user_footer');
          }
        }







         public function delete_mandate_file($id)

     
    {

       $mandate = $this->accountModel->getFileByCode($id);

       $madate_url = $mandate->mandate_code; 

      

        if ($this->accountModel->deleteFile($id))
        {
            flash('alert_message', 'File Removed');
            redirect('accounts/mandate/'.$madate_url.'');
        }
        else
        {
            die('Something went wrong');
        }

    }








     public function restore_mandate_file($id)

     
    {

       $mandate = $this->accountModel->getFileByCode($id);

       $madate_url = $mandate->mandate_code; 

      

        if ($this->accountModel->restoreFile($id))
        {
            flash('alert_message', 'File Restored');
            redirect('accounts/mandate/'.$madate_url.'');
        }
        else
        {
            die('Something went wrong');
        }

    }







           public function mandate($mandate_code){
                
   


       $fee_cod_c = 'BDAF'; //BROKER DEALER ANNUAL FEE 

       $fee_cod_c2 = 'AFPM'; // PLATFORM MAINTENANCE

       $fee_cod_c3 = 'AFAT'; // TRADER FEE

       $fee_cod_c4 = 'AFB'; // BROKER FEE

       $fee_cod_c5 = 'AFIH'; // ISSUING HOUSE FEE


        $fee_cod_c6 = 'ASB'; // SETTLEMENT HOUSE

       $current_year = date("Y"); // CURRENT YEAR FUNCTION 

          //GET FIRM DETAILS USING MANDATE CODE 
        $mandate_docs = $this->accountModel->getMandateByCode($mandate_code);
        $mandate_deleted_docs = $this->accountModel->getMandateDeletedFiles($mandate_code); 
        $mandate_info = $this->accountModel->getInfoMandateByCode($mandate_code);
        $mandate_accounts = $this->accountModel->getAccountMandateByCode($mandate_code);
       
        $mandate_accounts_payment_archive = $this->accountModel->getAccountMandate_payment_archiveByCode($mandate_code);
        $mandate_accounts23 = $this->accountModel->getAccountMandateByCode23($mandate_code);
        $mandate_traders = $this->accountModel->getTraderMandateByCode($mandate_code);
        $mandate_managers = $this->accountModel->getManagerMandateByCode($mandate_code);
        $mandate_managers = $this->accountModel->getManagerMandateByCode($mandate_code);
        $allaccamount_credit = $this->accountModel->TotalAccountCredit($mandate_code); 
         // END GET FIRM DETAILS USING MANDATE CODE 

         // LIST OF MADATE FROM DB
        $allmandates = $this->accountModel->getAllMandate();

       
        // END LIST OF MADATE FROM DB

        // MANDATE EXPECTED FEES FOR THE CURRENT YEAR  BROKER DEALER
        $cyf = $this->accountModel->getFeeYear($mandate_code,$current_year,$fee_cod_c);
        $cyf2 = $this->accountModel->getFeeYear2($mandate_code,$current_year,$fee_cod_c2);
        $ALL_traders = $this->accountModel->getTotatalTrader($mandate_code);
        $T_traderPaid = $this->accountModel->TotalPaidTrader($mandate_code,$current_year,$fee_cod_c3);  
        $T_Fee = $this->accountModel->findMandateFeeByCode($fee_cod_c);
        $T_Fee2 = $this->accountModel->findMandateFeeByCode2($fee_cod_c2);
        $T_Fee3 = $this->accountModel->findMandateFeeByCode3($fee_cod_c3);
        $T_Fee6 = $this->accountModel->findMandateFeeByCode3($fee_cod_c6);
        $toalf1 = $this->accountModel->TotalHDFAmount($mandate_code,$fee_cod_c,$current_year);
        $toalf2 = $this->accountModel->TotalPMFAmount($mandate_code,$fee_cod_c2,$current_year);
        $toalf3 = $this->accountModel->TotalTFAmount($mandate_code,$fee_cod_c3,$current_year);
        $toalf6 = $this->accountModel->TotalSHAmount($mandate_code,$fee_cod_c6,$current_year);
        $cyf6 = $this->accountModel->getFeeYear6($mandate_code,$current_year,$fee_cod_c6);
         // END MANDATE EXPECTED FEES FOR THE CURRENT YEAR 


        // MANDATE EXPECTED FEE FOR CURRENT YEAR BROKER 
        $cyf4 = $this->accountModel->getFeeYear4($mandate_code,$current_year,$fee_cod_c4);
        $T_Fee4 = $this->accountModel->findMandateFeeByCode4($fee_cod_c4);
        $toalf4 = $this->accountModel->AllTotalBAFAmount($mandate_code,$fee_cod_c4,$current_year);



        // MANDATE EXPECTED FEE FOR CURRENT YEAR ISSUING HOUSE FEE 
        $cyf5 = $this->accountModel->getFeeYear5($mandate_code,$current_year,$fee_cod_c5);
        $T_Fee5 = $this->accountModel->findMandateFeeByCode5($fee_cod_c5);
        $toalf5 = $this->accountModel->AllTotalISHAmount($mandate_code,$fee_cod_c5,$current_year);


        // GET ALL FEES FROM DB
        $allfees = $this->accountModel->getFees();
        // END LIST OF FEES FROM DB 


        // SUM TOTAL FEE FOR MANDATE
        $total_fee1 = $this->accountModel->TotalFeeBD($mandate_code,$fee_cod_c);
        $total_fee2 = $this->accountModel->TotalFeePM($mandate_code,$fee_cod_c2);
        $total_fee3 = $this->accountModel->TotalFeeTF($mandate_code,$fee_cod_c3);
        $total_fee4 = $this->accountModel->TotalFeeBF($mandate_code,$fee_cod_c4);
        $total_fee5 = $this->accountModel->TotalFeeIS($mandate_code,$fee_cod_c5);
        $total_fee6 = $this->accountModel->TotalFeeSH($mandate_code,$fee_cod_c6);
         // END SUM TOTAL FEE FOR MANDATE

        // 
         $load_roles = $this->accountModel->getManagerRoles();
         $load_cat = $this->accountModel->getCatList();

  

         


            $data = [
            'allmandates' => $allmandates,
    
            'mandate_docs' => $mandate_docs,
            'mandate_deleted_docs' => $mandate_deleted_docs,
             'mandate_info' => $mandate_info,
              'mandate_accounts' => $mandate_accounts,
              'mandate_accounts_payment_archive' => $mandate_accounts_payment_archive,
              'mandate_accounts23' => $mandate_accounts23,
              'mandate_traders' => $mandate_traders,
               'mandate_managers' => $mandate_managers,
                'allaccamount_credit' => $allaccamount_credit,
               'cyf' => $cyf,
               'cyf2' => $cyf2,
               'cyf4' => $cyf4,
               'cyf5' => $cyf5,
               'ALL_traders' => $ALL_traders,
               'T_traderPaid' => $T_traderPaid,
               'T_Fee' => $T_Fee,
                'T_Fee2' => $T_Fee2,
                'T_Fee3' => $T_Fee3,
                'T_Fee4' => $T_Fee4,
                'T_Fee5' => $T_Fee5,
                'T_Fee6' => $T_Fee6,
                'allfees' => $allfees,
                 'toalf1' => $toalf1,
                 'toalf2' => $toalf2,
                 'toalf3' => $toalf3,
                 'toalf4' => $toalf4,
                 'toalf5' => $toalf5,
                 'toalf6' => $toalf6,
                 'total_fee1' => $total_fee1,
                 'total_fee2' => $total_fee2,
                 'total_fee3' => $total_fee3,
                 'total_fee4' => $total_fee4,
                 'total_fee5' => $total_fee5,
            
                 'load_roles' => $load_roles,
                   'load_cat' => $load_cat,
                 
                 

          ];




                         
                         $this->view('inc/user_header');
                        $this->view('accounts/mandate', $data);
                        $this->view('inc/user_footer');


                        }









        





        public function add_mandatefee(){
           $tran_code= rand(100000,999999);
     
           if($_SERVER['REQUEST_METHOD'] == 'POST'){
            // Sanitize POST array       
            $_POST = filter_input_array(INPUT_POST, FILTER_SANITIZE_STRING);
          
             $data = [

              
              'name' => $_SESSION['name'],
                'email' => $_SESSION['email'],
                'department' => $_SESSION['department'],
                'role' => $_SESSION['role'],
             
              'fee_code' => trim($_POST['fee_code']),
               'issued_date' => trim($_POST['issued_date']), 
               'mandate_code' => trim($_POST['mandate_code']),
             
               

               'fee_err' => ''             
                 ];




            
              $fee_code = $data['fee_code'];
              $mandate_code = $data['mandate_code'];
              $issued_date = $data['issued_date'];


              $expire = strtotime($issued_date);
              $change_date = date('Y', $expire);
              $due_date = $change_date + 1 ;
              $today = strtotime("today midnight");
              $issued_year = date('Y');

              // echo $due_date; 
              // echo "<br>";
              // echo $fee_code;

              $fee_details =  $this->accountModel->findFeeByCode($fee_code); 

             $amount =  $fee_details->amount;
             $fee_title =  $fee_details->fee_title;

             $renewal_status =  $fee_details->renewal_status;

        

              if ($renewal_status == 1) {
              $user_log = 'Mandate Fee : '.$fee_title.' Added, By '.$data['name'].' ';

              $activities = 'Mandate Fee : '.$fee_title.' Added, By '.$data['name'].' ';
              $status = '1';

                  $this->accountModel->AddMandateActivities($data,$activities);
                  $this->accountModel->AddMandateFee($fee_code,$issued_date,$issued_year,$due_date,$mandate_code,$tran_code);
                  $this->accountModel->Updateamount($amount, $tran_code);
                  $this->accountModel->AddLog($data,$user_log,$status);

             

                   flash('alert_message', 'Fee Added');
                  redirect('accounts/mandate/'.$data['mandate_code'].'');

                  die();



              }





               if ($renewal_status == 2) {
              $user_log = 'Manager : '.$data['manager_name'].' details Updated, By '.$data['name'].' ';
                $activities = 'Manager : '.$data['manager_name'].' details Updated, By '.$data['name'].' ';
             $status = '1';
                
                  $this->accountModel->AddMandateActivities($data,$activities);
                  $this->accountModel->AddMandateFeeNoDue($fee_code,$issued_date,$issued_year,$mandate_code,$tran_code);
                  $this->accountModel->Updateamount($amount, $tran_code);
                  $this->accountModel->AddLog($data,$user_log,$status);




                   flash('alert_message', 'Fee Added');
                  redirect('accounts/mandate/'.$data['mandate_code'].'');

                  die();
              }

                    
        
          } 


        }





         public function add_mandatePayment(){
         
     
           if($_SERVER['REQUEST_METHOD'] == 'POST'){
            // Sanitize POST array       
            $_POST = filter_input_array(INPUT_POST, FILTER_SANITIZE_STRING);
          
             $data = [

              
              'name' => $_SESSION['name'],
                'email' => $_SESSION['email'],
                'department' => $_SESSION['department'],
                'role' => $_SESSION['role'],
             
                'amount' => trim($_POST['amount']),
                'paid_date' => trim($_POST['paid_date']), 
                'mandate_code' => trim($_POST['mandate_code']),
             
         
                 ];


                 $amount = $data['amount'];

                  

            
                 

                  $mandate_credit = $this->accountModel->TotalCreditAmount($data['mandate_code']);


                   $sum_credit_total = $mandate_credit->total_credit_amount;

                   $t_sum_credit_total =  $amount + $sum_credit_total;
                  


                   $allcredit =  $this->accountModel->SelectCredit($data['mandate_code']);

                 

                    if(!empty($allcredit->mandate_code)) :
                       $this->accountModel->UpdateCredit($data['mandate_code'],$t_sum_credit_total);
                      else :

                       $this->accountModel->AddCredit($data['mandate_code'],$t_sum_credit_total);
                      endif;

                       $this->accountModel->AddMandatePayment($data);



                  $user_log = 'Bank Payment: '.$data['amount'].' Added To '.$data['mandate_code'].' Account , By '.$data['name'].' ';
                   $activities = 'Bank Payment Payment: '.$data['amount'].' Added To Account,  By '.$data['name'].' ';
                   $status = '1';

                  

                  $this->accountModel->AddMandateActivities($data,$activities);
                  $this->accountModel->AddLog($data,$user_log,$status);

                   flash('alert_message', 'Amount Added');
                  redirect('accounts/mandate/'.$data['mandate_code'].'');

           

                    
        
          } 


        }






         public function add_mandatetrader(){
     
           if($_SERVER['REQUEST_METHOD'] == 'POST'){
            // Sanitize POST array       
            $_POST = filter_input_array(INPUT_POST, FILTER_SANITIZE_STRING);
          
             $data = [
               'name' => $_SESSION['name'],
                'email' => $_SESSION['email'],
                'department' => $_SESSION['department'],
                'role' => $_SESSION['role'],

              'fullname' => trim($_POST['fullname']),
              'email' => trim($_POST['email']),
               'phone' => trim($_POST['phone']), 
              'trader_code' => trim($_POST['trader_code']), 

              'designation' => trim($_POST['designation']), 
              'residential_address' => trim($_POST['residential_address']), 
              'd_o_b' => trim($_POST['d_o_b']), 
              'state_of_origin' => trim($_POST['state_of_origin']), 
              'nationality' => trim($_POST['nationality']), 
               'mandate_code' => trim($_POST['mandate_code']),            
                 ];


                   $user_log = 'Trader: '.$data['fullname'].' Added, By '.$data['name'].' ';
                   $activities = 'Trader: '.$data['fullname'].' Added, By '.$data['name'].' ';
                   $status = '1';


                  // Validated
                    $this->accountModel->AddMandateActivities($data,$activities);
                  if($this->accountModel->AddMandateTrader($data)){
                     if($this->accountModel->AddLog($data,$user_log,$status)){

                        // header("location:javascript://history.go(-1)");
                    flash('alert_message', ''.$data['fullname'].' Added');
                      header('Location: ' . $_SERVER["HTTP_REFERER"] );
                      exit;


                      // flash('alert_message', ''.$data['fullname'].' Added');
                      //  redirect('accounts/mandate/'.$data['mandate_code'].'');
                    
                     
                }
              }
            
               

          } else {

         $load_cat = $this->accountModel->getCatList();


            $data = [
                  'load_cat' => $load_cat
                    ];


               
               $this->view('inc/user_header');
              $this->view('accounts/add_trader', $data);
              $this->view('inc/user_footer');
              }


        }


        public function edit_trader($id){

           

           if($_SERVER['REQUEST_METHOD'] == 'POST'){
            // Sanitize POST array
           
           
            $_POST = filter_input_array(INPUT_POST, FILTER_SANITIZE_STRING);

          
             // Init data
                  $data =[
                    'name' => $_SESSION['name'],
                    'email' => $_SESSION['email'],
                    'department' => $_SESSION['department'],
                    'role' => $_SESSION['role'],
                     
                  
                    'id' => trim($_POST['id']),
                    'fullname' => trim($_POST['fullname']),
                    'phone' => trim($_POST['phone']),
                    'email' => trim($_POST['email']),
                    'trader_code' => trim($_POST['trader_code']),
                    'mandate_code' => trim($_POST['mandate_code']),
                    'status' => trim($_POST['status']),
            
                    'mandate_code_err' => '',
                   
                  ];

                 
                  /// Make sure errors are empty
                  if(empty($data['mandate_code_err'])){
                    // Validated
                      // USER LOGS RECORD
                
               $trader_details =  $this->accountModel->getTraderMandateByid($id);


            if ($data['status'] !== $trader_details->status) {

              if ($data['status']  == '1') {
                                                 
                }elseif ($data['status'] == '2') {
                  $trader_status = 'Suspended';
                }if ($data['status']  == '3') {
                $trader_status = 'Resigned';
                }

              
             
            }

             $user_log = 'Trader : '.$data['fullname'].' status changed to '.$trader_status.' ,  By '.$data['name'].' ';
                
                 $activities = 'Trader : '.$data['fullname'].' status changed to '.$trader_status.' ,  By '.$data['name'].' ';
                 $status = '2';

   

                  
              // Validated
                   $this->accountModel->AddMandateActivities($data,$activities);
              if($this->accountModel->UpdateMandateTrader($data)){
                  if($this->accountModel->AddLog($data,$user_log,$status)){
                  flash('alert_message', 'Trader Details Updated');
                  redirect('accounts/mandate/'.$data['mandate_code'].'');
                
              } 

            }

              else {
                die('Something went wrong');
              }
            } else {
              // Load view with errors
               $this->view('inc/user_header');
              $this->view('accounts/mandate/'.$data['mandate_code'].'', $data);
              $this->view('inc/user_footer');
            }

          } 
        }



           public function change_mandate_trader($id){
           if($_SERVER['REQUEST_METHOD'] == 'POST'){
            // Sanitize POST array
           
           
            $_POST = filter_input_array(INPUT_POST, FILTER_SANITIZE_STRING);

          
             // Init data
                  $data =[
                     'name' => $_SESSION['name'],
                    'email' => $_SESSION['email'],
                    'department' => $_SESSION['department'],
                    'role' => $_SESSION['role'],




                     'id' => $id,
                    'mandate_code' => trim($_POST['mandate_code']),
                    'mandate_code2' => trim($_POST['mandate_code2']),
                    'fullname' => trim($_POST['fullname']),
                    'mandate_code_err' => '',
                   
                  ];



                 
                  /// Make sure errors are empty
                  if(empty($data['mandate_code_err'])){
                    // Validated
                $user_log = 'Trader :  '.$data['fullname'].' Firm Changed From '.$data['mandate_code2'].' To '.$data['mandate_code'].' , By '.$data['name'].' ';
                 $activities = 'Trader : '.$data['fullname'].' status changed to '.$trader_status.' ,  By '.$data['name'].' ';
                 $status = '2';

   

                  
              // Validated
                   $this->accountModel->AddMandateActivities($data,$activities);
                  $this->accountModel->AddLog($data,$user_log,$status);
              if($this->accountModel->ChangeMandateTrade($data)){
                  flash('alert_message', 'Trader Details Updated ');
                      header('Location: ' . $_SERVER["HTTP_REFERER"] );
                      exit;
                
              } 

              else {
                die('Something went wrong');
              }
            } else {
              // Load view with errors
               $this->view('inc/user_header');
              $this->view('accounts/mandate/'.$data['mandate_code2'].'', $data);
              $this->view('inc/user_footer');
            }

          } 
        }




        public function add_manager(){
     
           if($_SERVER['REQUEST_METHOD'] == 'POST'){
            // Sanitize POST array       
            $_POST = filter_input_array(INPUT_POST, FILTER_SANITIZE_STRING);
          
             $data = [

              'name' => $_SESSION['name'],
              'email' => $_SESSION['email'],
              'department' => $_SESSION['department'],
              'role' => $_SESSION['role'],
              'manager_name' => trim($_POST['manager_name']),
              'manager_email' => trim($_POST['manager_email']),
               'manager_phone' => trim($_POST['manager_phone']), 
               'mandate_code' => trim($_POST['mandate_code']),
               'manager_role' => trim($_POST['manager_role']),            
                 ];

                   $user_log = 'Manager : '.$data['manager_name'].' Added To '.$data['mandate'].' . By '.$data['name'].' ';
                    $activities = 'Manager : '.$data['manager_name'].' Added. By '.$data['name'].' ';
                    $status = '1';

                  // Validated
                     $this->accountModel->AddMandateActivities($data,$activities);
                  if($this->accountModel->AddMandatemanager($data)){
                     if($this->accountModel->AddLog($data,$user_log,$status)){

                    flash('alert_message', ''.$data['manager_name'].' Added');
                      header('Location: ' . $_SERVER["HTTP_REFERER"] );
                      exit;

                      // flash('alert_message', ''.$data['manager_name'].' Added');
                      //  redirect('accounts/mandate/'.$data['mandate_code'].'');
                    
                                 
                            }

                          }


                        
                           

                      } 


                    }





           public function edit_manager($id){

           

           if($_SERVER['REQUEST_METHOD'] == 'POST'){
            // Sanitize POST array
           
           
            $_POST = filter_input_array(INPUT_POST, FILTER_SANITIZE_STRING);

          
             // Init data
                  $data =[
                    'name' => $_SESSION['name'],
                    'email' => $_SESSION['email'],
                    'department' => $_SESSION['department'],
                    'role' => $_SESSION['role'],

                    
                     'id' => $id,
                    'manager_name' => trim($_POST['manager_name']),
                    'manager_phone' => trim($_POST['manager_phone']),
                    'manager_email' => trim($_POST['manager_email']),
                    'mandate_code' => trim($_POST['mandate_code']),

                    'manager_role' => trim($_POST['manager_role']),
                    'status' => trim($_POST['status']),
            
                    'mandate_code_err' => '',
                   
                  ];

                 
                  /// Make sure errors are empty
                  if(empty($data['mandate_code_err'])){
                    // Validated
                      // USER LOGS RECORD
                 $manager_details =  $this->accountModel->getManagerMandateByid($id);


            if ($data['status'] !== $manager_details->status) {

              if ($data['status']  == '1') {
                $manager_status = 'Active';                           
                }elseif ($data['status'] == '2') {
                  $manager_status = 'Suspended';
                }if ($data['status']  == '3') {
                $manager_status = 'Resigned';
                }

              
             
            }

             $user_log = 'Manager :  '.$data['manager_name'].' status changed to '.$manager_status.' ,  By '.$data['name'].' ';
               $activities = 'Manager : '.$data['manager_name'].' status changed to '.$manager_status.' ,  By '.$data['name'].' ';
                 $status = '2';


                  
              // Validated
               $this->accountModel->AddMandateActivities($data,$activities);
              if($this->accountModel->UpdateMandateManager($data)){
                  if($this->accountModel->AddLog($data,$user_log,$status)){
                  flash('alert_message', 'Manager Details Updated');
                  redirect('accounts/mandate/'.$data['mandate_code'].'');
                
              } 

            }

              else {
                die('Something went wrong');
              }
            } else {
              // Load view with errors
               $this->view('inc/user_header');
              $this->view('accounts/mandate/'.$data['mandate_code2'].'', $data);
              $this->view('inc/user_footer');
            }

          } 
        }







        public function delete_manager($id){
            
              // Get mangers  from model
             $de_cl = $this->accountModel->getManagerById($id);

            $mandate_code = $de_cl->mandate_code;

              $data =[
                    'name' => $_SESSION['name'],
                    'email' => $_SESSION['email'],
                    'department' => $_SESSION['department'],
                    'role' => $_SESSION['role'],
                    'mandate_code' => $mandate_code        
                   
                  ];


              
              $user_log = 'Manager : '.$data['manager_name'].' Removed, By '.$data['name'].' ';
              $status = '3';

              if($this->accountModel->DeleMangerUser($id)){
                if($this->accountModel->AddLog($data,$user_log,$status)){
                flash('alert_message', 'Account Removed');
                redirect('accounts/mandate/' .$data['mandate_code']. '', $data);
              } else {
                die('Something went wrong');
              }

              }

            }





             public function Alltraders(){
      $AllManTraders = $this->accountModel->getTraders();
      $allmandates = $this->accountModel->getAllMandate();
      // $load_roles = $this->utilityModel->getRoles();

            

      $data = [
            'AllManTraders' => $AllManTraders,
             'allmandates' => $allmandates,
             // 'load_roles' => $load_roles
              ];

          $this->view('inc/user_header');
           $this->view('accounts/Alltraders', $data);
          $this->view('inc/user_footer');
    }






    public function Allmanagers(){
      $AllManManagers = $this->accountModel->getManagers();
       $load_roles = $this->accountModel->getManagerRoles();
        $allmandates = $this->accountModel->getAllMandate();
      // $load_roles = $this->utilityModel->getRoles();

            

      $data = [
            'AllManManagers' => $AllManManagers,
              'load_roles' => $load_roles,
               'allmandates' => $allmandates,
             // 'load_roles' => $load_roles
              ];

          $this->view('inc/user_header');
           $this->view('accounts/Allmanagers', $data);
          $this->view('inc/user_footer');
    }








public function logs(){
      $All_Logs = $this->accountModel->getLogs();
      // $load_roles = $this->utilityModel->getRoles();

            

      $data = [
            'All_Logs' => $All_Logs
             // 'load_roles' => $load_roles
              ];

          $this->view('inc/user_header2');
           $this->view('admins/logs', $data);
          $this->view('inc/user_footer2');
    }



    public function table(){
      $All_Logs = $this->accountModel->getLogs();
      // $load_roles = $this->utilityModel->getRoles();

            

      $data = [
            'All_Logs' => $All_Logs
             // 'load_roles' => $load_roles
              ];

          $this->view('inc/user_header');
           $this->view('accounts/table', $data);
          $this->view('inc/user_footer2');
    }










        public function invoice(){



              if($_SERVER['REQUEST_METHOD'] == 'POST'){
                    // Sanitize POST array

                    
                   
                    $_POST = filter_input_array(INPUT_POST, FILTER_SANITIZE_STRING);

                  
                    $data = [
                      
                      'mandate_code' => trim($_POST['mandate_code']),
                      'select_year' => trim($_POST['select_year']),
                       'receipt_date' => trim($_POST['receipt_date']),
                      'receipt_number' => trim($_POST['receipt_number']),
                      
                    ];

                     $_SESSION['mandate_code'] = $data['mandate_code'];  
                     $_SESSION['select_year'] = $data['select_year'];
                      $_SESSION['receipt_number'] = $data['receipt_number'];  
                     $_SESSION['receipt_date'] = $data['receipt_date'];


                       redirect('accounts/receipt');
                  

                  }


             
        }





           public function receipt(){

                 $mandate_code  =  $_SESSION['mandate_code'];
                 $select_year =  $_SESSION['select_year'];
                $receipt_number  =  $_SESSION['receipt_number'];
                 $receipt_date =  $_SESSION['receipt_date'];

                  

                 
                $this->accountModel->Add_reciept_records($mandate_code,$select_year);
            
               $mandate_info = $this->accountModel->getInfoMandateByCode($mandate_code);
               $mandate_accounts = $this->accountModel->getAccountMandateByCode12($mandate_code,$select_year);
                $mandate_accounts_Total = $this->accountModel->getPaymentRecipt($mandate_code,$select_year);

                   $data = [
                 
                    'mandate_accounts' => $mandate_accounts,
                    'mandate_accounts_Total' => $mandate_accounts_Total,
                    'mandate_info' => $mandate_info
                    
                ];

                var_dump($data['mandate_accounts']);

                die();
              
                 $this->view('accounts/receipt', $data);
              
          }





public function users(){
      $All_Users = $this->accountModel->getUsers();
      // $load_roles = $this->utilityModel->getRoles();

            

      $data = [
            'All_Users' => $All_Users
             // 'load_roles' => $load_roles
              ];

          $this->view('inc/user_header');
           $this->view('accounts/users', $data);
          $this->view('inc/user_footer');
    }






       public function user($id){
            if($_SERVER['REQUEST_METHOD'] == 'POST'){

              // Sanitize POST array
              $_POST = filter_input_array(INPUT_POST, FILTER_SANITIZE_STRING);

              // Init data
                  $data =[
                    'id' => $_SESSION['user_id'],
                    'email' => trim($_POST['email']),
                    'name' => trim($_POST['name']),
                    'department' => trim($_POST['department']),
                    'role' => trim($_POST['role']),
                    'email_err' => ''
                    
                  ];

                  
                
         

                $this->accountModel->updateUser($data);

                    flash('alert_message', 'Account Updated');
                    header('Location: ' . $_SERVER["HTTP_REFERER"] );
                      exit;
                
            
            } else {
            
            $user_info = $this->accountModel->getUserById($id);

             $user_info->email;

             $user_log = $this->accountModel->getLogsByemail($user_info->email);


               $data =[
                   
                    'user_info' => $user_info,
                    'user_log' => $user_log,
                    
                  ];

                  

              $this->view('inc/user_header');
              $this->view('accounts/user', $data);
              $this->view('inc/user_footer');
            }
          }





      

          public function add_users(){


            
            $password = 'password123';
           if($_SERVER['REQUEST_METHOD'] == 'POST'){
            // Sanitize POST array
           
           
            $_POST = filter_input_array(INPUT_POST, FILTER_SANITIZE_STRING);
 
            $data = [
              
               'name' => trim($_POST['name']),
              'email' => trim($_POST['email']),
               'department' => trim($_POST['department']), 
               'role' => trim($_POST['role']), 
               'password' => $password,
                'email_err' => '',      
             
             
            ];

            // Validate data
            if(empty($data['email'])){
              $data['email_err'] ='Email Field is Empty';


            }
             // Check email
          if($this->adminModel->findClientByEmail($data['email'])){
            error_flash('alert_message', ''.$data['email'].' is already taken');
                    redirect('accounts/users');
                    die();
          }
          
            // Make sure no errors
            if(empty($data['email_err'])){
            $data['name'] = ucwords($data['name']);
             $data['password'] = password_hash($data['password'], PASSWORD_DEFAULT);
              // Validated
              if($this->adminModel->AddUser($data)){
                
              flash('alert_message', 'Account Created');
              redirect('accounts/users');
            }

              else {
                die('Something went wrong');
              }
            } else {
              // Load view with errors
               $this->view('inc/user_header');
              $this->view('accounts/users', $data);
              $this->view('inc/user_footer');
            }

          } else {
           
           $this->view('inc/user_header');
          $this->view('accounts/users', $data);
          $this->view('inc/user_footer');
          }
        }



         public function edit_user($id){
           $password_update = date('Y/m/d h:i:s A');
           if($_SERVER['REQUEST_METHOD'] == 'POST'){
            // Sanitize POST array
           
           
            $_POST = filter_input_array(INPUT_POST, FILTER_SANITIZE_STRING);



          
             // Init data

              $data =[
              'id' => $id,
               'password_update' => $password_update,
              'name' => trim($_POST['name']),
              'email' => trim($_POST['email']),
              'department' => trim($_POST['department']),
               'role' => trim($_POST['role']),
              'password' => trim($_POST['password']),
              'email_err' => ''


            ];


                    // Validate Email
                  if(empty($data['email'])){
                    $data['email_err'] = 'Pleae enter email';
                  }

 
                    // EMPTY PASSWORD INPUT
                  if(empty($data['password'])){
                    $this->accountModel->updateAccoutNoPass($data);
                    flash('alert_message', 'User Account Updated');
                    header('Location: ' . $_SERVER["HTTP_REFERER"] );
                
                  } 


            
                  /// Make sure errors are empty
                  if(empty($data['email_err'])){
                    // Validated
                   
              $data['password'] = password_hash($data['password'], PASSWORD_DEFAULT);
            // Make sure no errors
           
              // Validated
              if($this->accountModel->UpdateAccountPassword($data)){
                   flash('alert_message', 'User Account Updated');
                    header('Location: ' . $_SERVER["HTTP_REFERER"] );
                
              } 

              else {
                die('Something went wrong');
              }
            } else {
              // Load view with errors
               $this->view('inc/user_header');
              $this->view('accounts/accounts', $data);
              $this->view('inc/user_footer');
            }

          }
        }





     
         public function delete_user($id){
            

              if($this->accountModel->deleteUser($id)){
                flash('alert_message', 'Account Removed');
                redirect('accounts/users');
              } 
                  else {
                    die('Something went wrong');
                  }

              }





               public function data_portal_request(){
      $AllDataRequests = $this->accountModel->getDataPortalRequest();
      $allmandates = $this->accountModel->getAllMandate();
      // $load_roles = $this->utilityModel->getRoles();

            

      $data = [
            'AllDataRequests' => $AllDataRequests,
             'allmandates' => $allmandates,
             // 'load_roles' => $load_roles
              ];


          $this->view('inc/user_header2');
           $this->view('accounts/data_portal_request', $data);
          $this->view('inc/user_footer2');
    }


     public function add_data_request(){
           $tran_code= rand(100000,999999);
     
           if($_SERVER['REQUEST_METHOD'] == 'POST'){
            // Sanitize POST array       
           
            $_POST = filter_input_array(INPUT_POST, FILTER_SANITIZE_STRING);
          
             $data = [
              
              'name' => $_SESSION['name'],
              'email' => $_SESSION['email'],
              'department' => $_SESSION['department'],
              'role' => $_SESSION['role'],

              'data_type' => trim($_POST['data_type']),
              'amount' => trim($_POST['amount']),
               'issue_date' => trim($_POST['issue_date']),
              'contact_person_name' => trim($_POST['contact_person_name']),
               'contact_person_email' => trim($_POST['contact_person_email']),
              'contact_person_phone' => trim($_POST['contact_person_phone']),
              'company_name' => trim($_POST['company_name']),
              'company_phone' => trim($_POST['company_phone']),
              'company_email' => trim($_POST['company_email']),
               'company_address' => trim($_POST['company_address']),
               'tran_code' => $tran_code,

               'data_type_err' => ''             
                 ];


          $data['company_name'] = ucwords($data['company_name']);
           $data['contact_person_name'] = ucwords($data['contact_person_name']);
          

           $user_log = 'Data Request : '.$data['data_type'].' Added, By '.$data['name'].' ';
            $status = '1';

           
                 $change_date = strtotime($data['issue_date']);
                 $issue_year = date('Y', $change_date);
         
              // Validated
              if($this->accountModel->AddDataRequest($data,$issue_year)){

                if($this->accountModel->AddLog($data,$user_log,$status)){

                flash('alert_message', 'Data Request');
                redirect('accounts/data_portal_request');

                
                 
            }
          }
         
        
           

          } else {

         $load_cat = $this->accountModel->getCatList();


            $data = [
                  'load_cat' => $load_cat
                    ];


               
               $this->view('inc/user_header');
              $this->view('accounts/add_data_request', $data);
              $this->view('inc/user_footer');
              }


        }




        public function add_credit($mandate_code){


        $allfees = $this->accountModel->getFees(); 
       $allcart = $this->accountModel->getCart($mandate_code);

       $cart_mandate = $this->accountModel->getCartByCode($mandate_code);
       $allamount = $this->accountModel->TotalCart($mandate_code); 
       $allaccamount = $this->accountModel->TotalAccountAmount($mandate_code); 
       $allaccamount_credit = $this->accountModel->TotalAccountCredit($mandate_code); 
       $mandate_info = $this->accountModel->getInfoMandateByCode($mandate_code);

        
         $allcredit =  $this->accountModel->SelectCredit($mandate_code);

                        
      


            $data = [

              

                  'allfees' => $allfees,
                  'allcart' => $allcart,
                   'allamount' => $allamount,
                     'allaccamount' => $allaccamount,
                      'mandate_info' => $mandate_info,
                       'allcredit' => $allcredit,
                         'cart_mandate' => $cart_mandate,
                         'allaccamount_credit' => $allaccamount_credit
                    ];





            

          $this->view('inc/user_header');
           $this->view('accounts/add_credit', $data);
          $this->view('inc/user_footer');
    }











   





        public function add_credit_process(){

        $tran_code= rand(100000,999999);
           if($_SERVER['REQUEST_METHOD'] == 'POST'){
            // Sanitize POST array       
            $_POST = filter_input_array(INPUT_POST, FILTER_SANITIZE_STRING);
          
            
                  $data = [

              
                  'name' => $_SESSION['name'],
                    'email' => $_SESSION['email'],
                    'department' => $_SESSION['department'],
                    'role' => $_SESSION['role'],
                 
                  'fee_code' => trim($_POST['fee_code']),
                   'issued_date' => trim($_POST['issued_date']), 
                   'mandate_code' => trim($_POST['mandate_code']),
                    'discount' => trim($_POST['discount']),
                     
                     
                            
                 ];

             $fee_details =  $this->accountModel->findFeeByCode($data['fee_code']);
             $fee_details_cart =  $this->accountModel->findFeeByCodeCart($data['fee_code']);
             $fee_details_payment =  $this->accountModel->findFeeByCodePayment($data['fee_code'],$data['mandate_code']);





        

             $fee_code_check = $fee_details_cart->fee_code;
             $issued_year_check = $fee_details_cart->issued_year;

             $issued_year_payment_check = $fee_details_payment->issued_year;
             $fee_code_payment_check = $fee_details_payment->fee_code;
             $mandate_code_payment_check = $fee_details_payment->mandate_code;




             $amount =  $fee_details->amount;
            $fee_title =  $fee_details->fee_title;
            $fee_code =  $fee_details->fee_code;
            $renewal_status =  $fee_details->renewal_status;
            $mandate_code = $data['mandate_code'];
            $issued_date = $data['issued_date'];
            $discount = $data['discount']; 



              $expire = strtotime($issued_date);
              $change_date = date('Y', $expire);
              $due_date = $change_date + 1 ;

              $today = strtotime("today midnight");
              $issued_year = $change_date;

         



                 if ($discount == "") {



                      $allamount = $this->accountModel->TotalCart($mandate_code); 
                      

                        $allcredit =  $this->accountModel->SelectCredit($mandate_code);

                        $sum_cart = $allamount->total_cart +  $amount; 

                        $sum_credit = $allcredit->amount;

                        
                      //   if ($mandate_code_payment_check = $data['mandate_code'] AND $fee_code_payment_check = $data['fee_code'] AND $issued_year_payment_check = $issued_year   ) {
                      //     error_flash('alert_message', 'Error Adding Payment - Payment Already Exist');
                      // header('Location: ' . $_SERVER["HTTP_REFERER"] );
                      // exit;
                     
                      //     die();
                      //    }


                      //     if ($fee_code_check = $data['fee_code'] AND $issued_year_check = $issued_year  ) {
                      //     error_flash('alert_message', 'Error Adding Payment - Payment Already Exist');
                      // header('Location: ' . $_SERVER["HTTP_REFERER"] );
                      // exit;
                     
                      //     die();
                      //    }


                         

                         if ($sum_cart > $sum_credit) {
                          error_flash('alert_message', 'Error Adding Payment - Insufficient Balance');
                      header('Location: ' . $_SERVER["HTTP_REFERER"] );
                      exit;
                     
                          die();
                         }



                         


                      $this->accountModel->AddMandateCartNoDis($fee_title,$fee_code,$amount,$mandate_code,$tran_code,$issued_date,$issued_year);

                      if($renewal_status == 1) :
                         $this->accountModel->UpdateCartTotalWithDueNoDies($tran_code,$amount,$due_date);
                        else :
                          $this->accountModel->UpdateCartTotalNoDueNoDies($tran_code,$amount);
                        endif;


                         $data = [

                            
                            'name' => $_SESSION['name'],
                              'email' => $_SESSION['email'],
                              'department' => $_SESSION['department'],
                              'role' => $_SESSION['role'],


                              'mandate_code' => $mandate_code,
                           
                                  
                               ];

                         $user_log = ' '.$fee_title.' payment Added To '.$mandate_code.' Account , By '.$data['name'].' ';
                         $activities = ''.$fee_title.' payment Added To Account,  By '.$data['name'].' ';
                         $status = '1';
                  

                          $this->accountModel->AddMandateActivities($data,$activities);
                          $this->accountModel->AddLog($data,$user_log,$status);

                          

                      

                       flash('alert_message', 'FEE Added');
                      header('Location: ' . $_SERVER["HTTP_REFERER"] );
                      exit;
                     
                   }

                    if ($discount == 1) {

                      $new_amount =  0.05 * $amount;  
                       $discount_amount = $amount - $new_amount; 



                      $allamount = $this->accountModel->TotalCart($mandate_code); 
                      

                        $allcredit =  $this->accountModel->SelectCredit($mandate_code);

                        $sum_cart = $allamount->total_cart +  $discount_amount; 

                        $sum_credit = $allcredit->amount;

                        


                         

                         if ($sum_cart > $sum_credit) {
                          error_flash('alert_message', 'Error Adding Payment - Insufficient Balance');
                      header('Location: ' . $_SERVER["HTTP_REFERER"] );
                      exit;
                     
                          die();
                         }

                      $new_amount =  0.05 * $amount; 
                       $discount_amount = $amount - $new_amount;
                   
                       $this->accountModel->AddMandateCartDis($fee_title,$fee_code,$amount,$discount_amount,$discount,$mandate_code,$tran_code,$issued_date,$issued_year,$due_date);

                       if($renewal_status == 1) :
                         $this->accountModel->UpdateCartTotalDisDue($tran_code,$discount_amount,$due_date);
                        else :
                          $this->accountModel->UpdateCartTotalDisNoDue($tran_code,$amount);
                        endif;

                        $data = [

                            
                            'name' => $_SESSION['name'],
                              'email' => $_SESSION['email'],
                              'department' => $_SESSION['department'],
                              'role' => $_SESSION['role'],


                              'mandate_code' => $mandate_code,
                           
                                  
                               ];

                         $user_log = ' '.$fee_title.' payment Added To '.$mandate_code.' Account , By '.$data['name'].' ';
                         $activities = ''.$fee_title.' payment Added To Account,  By '.$data['name'].' ';
                         $status = '1';
                  

                          $this->accountModel->AddMandateActivities($data,$activities);
                          $this->accountModel->AddLog($data,$user_log,$status);


                         flash('alert_message', 'FEE Added');
                      header('Location: ' . $_SERVER["HTTP_REFERER"] );
                      exit;
                     


                    }




                     if ($discount == 2) {


                      $new_amount =  0.1 * $amount;  
                       $discount_amount = $amount - $new_amount; 



                      $allamount = $this->accountModel->TotalCart($mandate_code); 
                      

                        $allcredit =  $this->accountModel->SelectCredit($mandate_code);

                        $sum_cart = $allamount->total_cart +  $discount_amount; 

                        $sum_credit = $allcredit->amount;

                        

                         

                         if ($sum_cart > $sum_credit) {
                          error_flash('alert_message', 'Error Adding Payment - Insufficient Balance');
                      header('Location: ' . $_SERVER["HTTP_REFERER"] );
                      exit;
                     
                          die();
                         }







                       $new_amount =  0.1 * $amount; 
                       $discount_amount = $amount - $new_amount;
                   
                       $this->accountModel->AddMandateCartDis($fee_title,$fee_code,$amount,$discount_amount,$discount,$mandate_code,$tran_code,$issued_date,$issued_year,$due_date);

                       if($renewal_status == 1) :
                         $this->accountModel->UpdateCartTotalDisDue($tran_code,$discount_amount,$due_date);
                        else :
                          $this->accountModel->UpdateCartTotalDisNoDue($tran_code,$amount);
                        endif;


                        $data = [

                            
                            'name' => $_SESSION['name'],
                              'email' => $_SESSION['email'],
                              'department' => $_SESSION['department'],
                              'role' => $_SESSION['role'],


                              'mandate_code' => $mandate_code,
                           
                                  
                               ];

                         $user_log = ' '.$fee_title.' payment Added To '.$mandate_code.' Account , By '.$data['name'].' ';
                         $activities = ''.$fee_title.' payment Added To Account,  By '.$data['name'].' ';
                         $status = '1';
                  

                          $this->accountModel->AddMandateActivities($data,$activities);
                          $this->accountModel->AddLog($data,$user_log,$status);

                  
                         flash('alert_message', 'FEE Added');
                      header('Location: ' . $_SERVER["HTTP_REFERER"] );
                      exit;
                     


                    }



                     

                        
                           

                      } 


                    }





                    public function delete_cart($id)

                          {

                              if ($this->accountModel->deleteCart($id))
                                {
                                    
                                 header('Location: ' . $_SERVER["HTTP_REFERER"] );
                                 }
                                  else
                                  {
                                      die('Something went wrong');
                                  }
                          }









                          public function submit_cart($mandate_code){


                          $allamount = $this->accountModel->TotalCart($mandate_code); 
                          $allcredit =  $this->accountModel->SelectCredit($mandate_code);

                          $sum_cart = $allamount->total_cart; 

                          $sum_credit = $allcredit->amount;

                         $sum_total = $sum_credit - $sum_cart; 

                         // UPDATE CREDIT TABLE
                         $this->accountModel->UpdateCredit($mandate_code,$sum_total);
                         // SELECT AND INSERT INTO ACCOUNT TABLE



                        $this->accountModel->getSubmitCart($mandate_code);
                         // DELETE CART TABLE 


                       

                         

                           if($this->accountModel->deleteAllCart($mandate_code)){
                              flash('alert_message', 'Fee Updated');
                              redirect('accounts/mandate/' .$mandate_code. '');
                            
                                } 

                                else
                                  {
                                      die('Something went wrong');
                                  }

                            
                            }
                           
                           














public function mandate_activities($mandate_code){
      $All_Activies = $this->accountModel->getMandateActivies($mandate_code);
      // $load_roles = $this->utilityModel->getRoles();

            

      $data = [
            'All_Activies' => $All_Activies
             // 'load_roles' => $load_roles
              ];

          $this->view('inc/user_header');
           $this->view('accounts/mandate_activities', $data);
          $this->view('inc/user_footer');
    }











               public function NesTraining(){
      $AllTraining = $this->accountModel->getNesTraining();
      $allmandates = $this->accountModel->getAllMandate();
      // $load_roles = $this->utilityModel->getRoles();

            

      $data = [
            'AllTraining' => $AllTraining,
             'allmandates' => $allmandates,
             // 'load_roles' => $load_roles
              ];


          $this->view('inc/user_header2');
           $this->view('accounts/NesTraining', $data);
          $this->view('inc/user_footer2');
    }






         public function add_trainingFee(){
     
           if($_SERVER['REQUEST_METHOD'] == 'POST'){
            // Sanitize POST array       
            $_POST = filter_input_array(INPUT_POST, FILTER_SANITIZE_STRING);
          
             $data = [
               'name' => $_SESSION['name'],
                'email' => $_SESSION['email'],
                'department' => $_SESSION['department'],
                'role' => $_SESSION['role'],

              'broker' => trim($_POST['broker']),
              'training_date' => trim($_POST['training_date']),
               'amount' => trim($_POST['amount']), 
               'mandate_code' => trim($_POST['mandate_code']),            
                 ];


                  $user_log = 'NesTraining  By '.$data['name'].' ';
                  $status = '1';


                  // Validated
                   
                  if($this->accountModel->AddTrainingFee($data)){
                     if($this->accountModel->AddLog($data,$user_log,$status)){

                        // header("location:javascript://history.go(-1)");
                    flash('alert_message', 'NesTraining List Updated ');
                      header('Location: ' . $_SERVER["HTTP_REFERER"] );
                      exit;


                      // flash('alert_message', ''.$data['fullname'].' Added');
                      //  redirect('accounts/mandate/'.$data['mandate_code'].'');
                    
                     
                }
              }
            
               

          } else {

         $load_cat = $this->accountModel->getCatList();


            $data = [
                  'load_cat' => $load_cat
                    ];


               
               $this->view('inc/user_header');
              $this->view('accounts/add_mandate', $data);
              $this->view('inc/user_footer');
              }


        }





        public function Allpayments(){
      $Allpay = $this->accountModel->getPayments();
       // $load_roles = $this->accountModel->getManagerRoles();
       //  $allmandates = $this->accountModel->getAllMandate();
      // $load_roles = $this->utilityModel->getRoles();

            

      $data = [
            'Allpay' => $Allpay,
              // 'load_roles' => $load_roles,
              //  'allmandates' => $allmandates,
             // 'load_roles' => $load_roles
              ];

          $this->view('inc/user_header2');
           $this->view('accounts/Allpayments', $data);
          $this->view('inc/user_footer2');
    }





        public function Bankpayments(){
      $AllBankpay = $this->accountModel->getBankPayments();
       // $load_roles = $this->accountModel->getManagerRoles();
       //  $allmandates = $this->accountModel->getAllMandate();
      // $load_roles = $this->utilityModel->getRoles();

            

      $data = [
            'AllBankpay' => $AllBankpay,
              // 'load_roles' => $load_roles,
              //  'allmandates' => $allmandates,
             // 'load_roles' => $load_roles
              ];

          $this->view('inc/user_header2');
           $this->view('accounts/Bankpayments', $data);
          $this->view('inc/user_footer2');
    }





     public function ArchivePayment(){
      $AllArchivePayment = $this->accountModel->getArchivePayment();
       // $load_roles = $this->accountModel->getManagerRoles();
       //  $allmandates = $this->accountModel->getAllMandate();
      // $load_roles = $this->utilityModel->getRoles();

            

      $data = [
            'AllArchivePayment' => $AllArchivePayment,
              // 'load_roles' => $load_roles,
              //  'allmandates' => $allmandates,
             // 'load_roles' => $load_roles
              ];

          $this->view('inc/user_header');
           $this->view('accounts/ArchivePayment', $data);
          $this->view('inc/user_footer');
    }





     public function issuers()
                {
                  


                   $allissuers = $this->accountModel->getAllIssuers();
                   


                  
                    $data = [
                  'allissuers' => $allissuers
                 
                   
                    ];

                    

                    $this->view('inc/user_header');
                     $this->view('accounts/issuers', $data);
                    $this->view('inc/user_footer');
                }





 public function add_issuer(){
           $num = rand(1000, 9999);
            $issuer_code = 'SD-' . $num; 
     
           if($_SERVER['REQUEST_METHOD'] == 'POST'){
            // Sanitize POST array       
           
            $_POST = filter_input_array(INPUT_POST, FILTER_SANITIZE_STRING);
          
             $data = [
              
              'name' => $_SESSION['name'],
              'email' => $_SESSION['email'],
              'department' => $_SESSION['department'],
              'role' => $_SESSION['role'],

              'security_name' => trim($_POST['security_name']),
               'symbol' => trim($_POST['symbol']),
              'name_of_contact' => trim($_POST['name_of_contact']),
               'designation' => trim($_POST['designation']),
              'phone' => trim($_POST['phone']),
               'mobile' => trim($_POST['mobile']),
              'website' => trim($_POST['website']),
              'email' => trim($_POST['email']),
              'registras' => trim($_POST['registras']),
              'issuer_code' => $issuer_code,
                   
                 ];


            $data['security_name'] = ucwords($data['security_name']);
         

            $user_log = 'Issuer : '.$data['security_name'].' Added, By '.$data['name'].' ';
            $status = '1';

           
        
         
              // Validated
              if($this->accountModel->AddIssuer($data)){

                if($this->accountModel->AddLog($data,$user_log,$status)){

                flash('alert_message', 'Issuer Added Successfully');
                redirect('accounts/issuers');

                
                 
            }
          }
         
        
           

          } else {

         $load_cat = $this->accountModel->getCatList();


            $data = [
                  'load_cat' => $load_cat
                    ];


               
               $this->view('inc/user_header');
              $this->view('accounts/add_issuer', $data);
              $this->view('inc/user_footer');
              }


        }











         public function issuer($issuer_code){
        $issuer_info = $this->accountModel->getIssuerByCode($issuer_code);
      
            $data = [
            
             'issuer_info' => $issuer_info
              

          ];

 
                         $this->view('inc/user_header');
                        $this->view('accounts/issuer', $data);
                        $this->view('inc/user_footer');


                        }









          public function edit_issuer($issuer_code)
          {
             if($_SERVER['REQUEST_METHOD'] == 'POST'){
            // Sanitize POST array
           
           
            $_POST = filter_input_array(INPUT_POST, FILTER_SANITIZE_STRING);



          
             // Init data
                  $data =[
                    'security_name' => trim($_POST['security_name']),
               'symbol' => trim($_POST['symbol']),
              'name_of_contact' => trim($_POST['name_of_contact']),
               'designation' => trim($_POST['designation']),
              'phone' => trim($_POST['phone']),
               'mobile' => trim($_POST['mobile']),
              'website' => trim($_POST['website']),
              'email' => trim($_POST['email']),
              'registras' => trim($_POST['registras']),
              'issuer_code' => $issuer_code,

                 
                    'security_name_err' => '',
                   
                  ];

                  

                    // Validate Email
                  if(empty($data['security_name'])){
                    $data['security_name_err'] = 'Pleae enter title';
                  } 

                   

            
                  /// Make sure errors are empty
                  if(empty($data['security_name_err'])){
                    // Validated
                   
               

        
           
              // Validated
              if($this->accountModel->updateIssuer($data)){
                 flash('alert_message', 'Issuer Updated');
                      header('Location: ' . $_SERVER["HTTP_REFERER"] );
                      exit;
                
              } 

              else {
                die('Something went wrong');
              }
            } 

          } 
          }





           public function change_issuer_status()

                    {

                       if($_SERVER['REQUEST_METHOD'] == 'POST'){
                        // Sanitize POST array
                       
                       
                        $_POST = filter_input_array(INPUT_POST, FILTER_SANITIZE_STRING);

                      
                         // Init data
                              $data =[

                                  'name' => $_SESSION['name'],
                                  'email' => $_SESSION['email'],
                                  'department' => $_SESSION['department'],
                                  'role' => $_SESSION['role'],
                               
                                 'issuer_status' => trim($_POST['issuer_status']), 
                                 'issuer_code' => trim($_POST['issuer_code']),  
                                  
                              ];

                                 $issuer_status = $data['issuer_status'];

                                 if ($issuer_status == '1') {
                                   $issuer_status = 'Active';
                                   $activity_status = $issuer_status;                                   
                                 }elseif ($issuer_status == '2') {
                                    $issuer_status = 'Delisted';
                                   $activity_status = $issuer_status;
                                 }

                        


                               $user_log = ''.$data['issuer_code'].' Update Issuer Status ';
                               // $activities = 'Issuer Status : Changed To '.$activity_status.', By '.$data['name'].' ';
                              $status = '2';

                            

                          // Validated
                            // $this->accountModel->AddMandateActivities($data,$activities);
                          if($this->accountModel->ChangeIssuersStatus($data)){
                           if($this->accountModel->AddLog($data,$user_log,$status)){

                             
                           flash('alert_message', 'Status Changed');
                            header('Location: ' . $_SERVER["HTTP_REFERER"] );
                            exit;


          
                          }
                            
                          } 

                          else {
                            die('Something went wrong');
                          }
                        

                      } 
                    }






                      public function report_pis()
                {
                  


                   $allpis = $this->accountModel->getAllPIS();

                   
              

                  
                    $data = [
                  'allpis' => $allpis
                 
                   
                    ];

                    

                    $this->view('inc/user_header');
                     $this->view('accounts/report_pis', $data);
                    $this->view('inc/user_footer');
                }








                 public function report_traders(){
      $AllManTraders = $this->accountModel->getTraders();
      $allmandates = $this->accountModel->getAllMandate();
      // $load_roles = $this->utilityModel->getRoles();

            

      $data = [
            'AllManTraders' => $AllManTraders,
             'allmandates' => $allmandates,
             // 'load_roles' => $load_roles
              ];

          $this->view('inc/user_header');
           $this->view('accounts/report_traders', $data);
          $this->view('inc/user_footer');
    }






                      public function report_pi_payment($selected_year)
                {
                  

                  $_SESSION['selected_year'] = $selected_year;  

                   $allpis = $this->accountModel->getAllPIS();
                 

                  $AFB_amount = $this->accountModel->findMandateFeeAmountAFB();
                  $AFAT_amont = $this->accountModel->findMandateFeeAmountAFAT();
                  $AFPM_amount = $this->accountModel->findMandateFeeAmountAFPM();
                  $BDAF_amount = $this->accountModel->findMandateFeeAmountBDAF();
                  $AFIH_amount = $this->accountModel->findMandateFeeAmountAFIH();

                  


                    


                  
                    $data = [
                  'allpis' => $allpis,
                  'AFB_amount' => $AFB_amount,
                  'AFAT_amont' => $AFAT_amont,
                  'AFPM_amount' => $AFPM_amount,
                  'BDAF_amount' => $BDAF_amount,
                  'AFIH_amount' => $AFIH_amount,
                  'AFIH_amount' => $AFIH_amount,

                 
                   
                    ];

                    

                    $this->view('inc/user_header2');
                     $this->view('accounts/report_pi_payment', $data);
                    $this->view('inc/user_footer2');
                }






            public function paymentReportSelectedYearProcess(){



              if($_SERVER['REQUEST_METHOD'] == 'POST'){
                    // Sanitize POST array

                    
                   
                    $_POST = filter_input_array(INPUT_POST, FILTER_SANITIZE_STRING);

                  
                    $data = [
                      
                      
                      'selected_year' => trim($_POST['selected_year']),
                      
                    ];

                     
                    $_SESSION['selected_year'] = $data['selected_year']; 


                       redirect('accounts/report_pi_payment/' .$data['selected_year']. '');
                  

                  }


         
                        }











                 public function excel(){
     
                  $allpis = $this->accountModel->getAllPIS();
                 

                  $AFB_amount = $this->accountModel->findMandateFeeAmountAFB();
                  $AFAT_amont = $this->accountModel->findMandateFeeAmountAFAT();
                  $AFPM_amount = $this->accountModel->findMandateFeeAmountAFPM();
                  $BDAF_amount = $this->accountModel->findMandateFeeAmountBDAF();
                  $AFIH_amount = $this->accountModel->findMandateFeeAmountAFIH();

                  


                    


                  
                    $data = [
                  'allpis' => $allpis,
                  'AFB_amount' => $AFB_amount,
                  'AFAT_amont' => $AFAT_amont,
                  'AFPM_amount' => $AFPM_amount,
                  'BDAF_amount' => $BDAF_amount,
                  'AFIH_amount' => $AFIH_amount,
                  'AFIH_amount' => $AFIH_amount,

                 
                   
                    ];

                  
                   $this->view('accounts/excel', $data);
                 
            }









            public function paymentReportYear(){
     
                  $allpis = $this->accountModel->getAllPIS();
                 

                  $AFB_amount = $this->accountModel->findMandateFeeAmountAFB();
                  $AFAT_amont = $this->accountModel->findMandateFeeAmountAFAT();
                  $AFPM_amount = $this->accountModel->findMandateFeeAmountAFPM();
                  $BDAF_amount = $this->accountModel->findMandateFeeAmountBDAF();
                  $AFIH_amount = $this->accountModel->findMandateFeeAmountAFIH();

                  


                    


                  
                    $data = [
                  'allpis' => $allpis,
                  'AFB_amount' => $AFB_amount,
                  'AFAT_amont' => $AFAT_amont,
                  'AFPM_amount' => $AFPM_amount,
                  'BDAF_amount' => $BDAF_amount,
                  'AFIH_amount' => $AFIH_amount,
                  'AFIH_amount' => $AFIH_amount,

                 
                   
                    ];

                  
                   $this->view('accounts/paymentReportYear', $data);
                 
            }







             public function paymentReportYearProcess(){



      if($_SERVER['REQUEST_METHOD'] == 'POST'){
            // Sanitize POST array

            
           
            $_POST = filter_input_array(INPUT_POST, FILTER_SANITIZE_STRING);

          
            $data = [
              
              
              'report_year' => trim($_POST['report_year']),
              
            ];

             
            $_SESSION['report_year'] = $data['report_year']; 


               redirect('accounts/paymentReportYear');
          

          }


         
    }
















  public function childtable(){
  //  $response = file_get_contents('http://38.17.52.42/ATS/Dealing/marketdataquant.aspx');

  // $data = [
  //                 'response' => $response,
                 

                 
                   
  //                   ];

  //                   echo $data['response'];



$api_url = 'http://38.17.52.42/ATS/Dealing/marketdataquant.aspx';

// Read JSON file
 $json_data = file_get_contents($api_url); 

// Decode JSON data into PHP array
  $response_data = json_decode($json_data); 

  

// All user data exists in 'data' object
 $user_data = $response_data; 

// Cut long data into small & select only first 10 records
$user_data = array_slice($user_data, 0, 200);

// Print data if need to debug
//print_r($user_data);

// Traverse array and display user data


foreach ($user_data as $user) {

  if ($user->count != 0) {
  echo "Security: ".$user->Security;
  echo "<br />";
  echo "Open Price: ".$user->openprice;
  echo "<br /> <br />";

  echo "Close Price: ".$user->closeprice;
  echo "<br /> <br />";

   echo "Count: ".$user->count;
  echo "<br /> <br />";
  }


  
}





    }



     public function testapi(){
     
                  $allpis = $this->accountModel->getAllPIS();
                 


                  
                    $data = [
                  'allpis' => $allpis,
                 
                    ];

                     $json_response = json_encode($data);
                    echo $json_response; die();

                  
                 
            }








     // public function paymentReportYear(){
     
     //              $allpis = $this->accountModel->getAllPIS();
                 

     //              $AFB_amount = $this->accountModel->findMandateFeeAmountAFB();
     //              $AFAT_amont = $this->accountModel->findMandateFeeAmountAFAT();
     //              $AFPM_amount = $this->accountModel->findMandateFeeAmountAFPM();
     //              $BDAF_amount = $this->accountModel->findMandateFeeAmountBDAF();
     //              $AFIH_amount = $this->accountModel->findMandateFeeAmountAFIH();

                  


                    


                  
     //                $data = [
     //              'allpis' => $allpis,
     //              'AFB_amount' => $AFB_amount,
     //              'AFAT_amont' => $AFAT_amont,
     //              'AFPM_amount' => $AFPM_amount,
     //              'BDAF_amount' => $BDAF_amount,
     //              'AFIH_amount' => $AFIH_amount,
     //              'AFIH_amount' => $AFIH_amount,

                 
                   
     //                ];

                  
     //               $this->view('accounts/paymentReportYear', $data);
                 
     //        }











  
                 public function authorized_traders_export(){
     
                 $AllManTraders = $this->accountModel->getTraders();
                 


                  
                    $data = [
                  'AllManTraders' => $AllManTraders,
                 

                 
                   
                    ];

                  
                   $this->view('accounts/authorized_traders_export', $data);
                 
            }





                 public function participating_institutions_export(){
     
              $active_mandates = 1; 
                   $revoked_mandates = 3;

                   $allmandates = $this->accountModel->getAllActiveMandate($revoked_mandates);
                 


                  
                    $data = [
                  'allmandates' => $allmandates
                 
                   
                    ];


                  
                   $this->view('accounts/participating_institutions_export', $data);
                 
            }

     




     public function email_list(){
      $AllEmailList = $this->accountModel->getEmailList();
    
            

      $data = [
            'AllEmailList' => $AllEmailList,
            
   
              ];

          $this->view('inc/user_header');
           $this->view('accounts/email_list', $data);
          $this->view('inc/user_footer');
    }





    public function add_to_email_list(){

              if($_SERVER['REQUEST_METHOD'] == 'POST'){
                    // Sanitize POST array  
                   
                    $_POST = filter_input_array(INPUT_POST, FILTER_SANITIZE_STRING);

                  
                    $data = [
                      
                      
                      'email' => trim($_POST['email']),
                      
                    ];


                        $this->accountModel->AddToEmailList($data);
                       flash('alert_message', 'Email Added Successfully');
                        redirect('accounts/email_list');
                  

                  }


         
                        }


           

                         public function email_ist_export(){
     
                 $AllEmailList = $this->accountModel->getEmailList();
                 


                  
                    $data = [
                  'AllEmailList' => $AllEmailList,                 
                   
                    ];

                  
                   $this->view('accounts/email_ist_export', $data);
                 
            }




                      public function edit_email($id){
                        
 
                           if($_SERVER['REQUEST_METHOD'] == 'POST'){
                            // Sanitize POST array
                           
                           
                            $_POST = filter_input_array(INPUT_POST, FILTER_SANITIZE_STRING);



                          
                             // Init data
                                  $data =[

                                    'name' => $_SESSION['name'],
                                    'email' => $_SESSION['email'],
                                    'department' => $_SESSION['department'],
                                    'role' => $_SESSION['role'],

                                     'id' => $id,
                                    'email' => trim($_POST['email']),
                                    
                                   
                                   'email_err' => '',
                                   
                                  ];


                                   
                            
                                  /// Make sure errors are empty
                                  if(empty($data['email_err'])){
                                    // Validated
                                   
                              
                        
                               $user_log = 'Email List : '.$data['email'].' Updated, By '.$data['name'].' ';
                               $status = '2';

                        
                              $this->accountModel->AddLog($data,$user_log,$status);
                              // Validated
                              if($this->accountModel->updateEmailList($data)){
                                  flash('alert_message', 'Email Updated');
                                  redirect('accounts/email_list');
                                
                              } 

                              else {
                                die('Something went wrong');
                              }
                            } 
                          } 
                        }






                         public function delete_email($id)
                    {

                        if ($this->accountModel->deleteEmail($id))
                        {
                            flash('alert_message', 'Email Removed');
                            redirect('accounts/email_list');
                        }
                        else
                        {
                            die('Something went wrong');
                        }

                    }






                  





                    public function add_credit_outstanding(){

        $tran_code= rand(100000,999999);
           if($_SERVER['REQUEST_METHOD'] == 'POST'){
            // Sanitize POST array       
            $_POST = filter_input_array(INPUT_POST, FILTER_SANITIZE_STRING);
          
            
                  $data = [

              
                  'name' => $_SESSION['name'],
                    'email' => $_SESSION['email'],
                    'department' => $_SESSION['department'],
                    'role' => $_SESSION['role'],
                 
                    'fee_code' => trim($_POST['fee_code']),
                    'fee_title' => trim($_POST['fee_title']),
                      'amount' => trim($_POST['amount']),
                      'credit_note' => trim($_POST['credit_note']),
                   'issued_date' => trim($_POST['issued_date']), 
                   'mandate_code' => trim($_POST['mandate_code']),
                  
                     
                            
                 ];

       
                  $mandate_code = $data['mandate_code'];
                  $fee_code = $data['fee_code'];
                  $fee_title = $data['fee_title'];
                  $amount = $data['amount'];
                  $credit_note = $data['credit_note'];
                  $issued_date = $data['issued_date'];









                   if ($fee_code == "OUSTANDING") {



                      $allamount = $this->accountModel->TotalCart($mandate_code); 
                      

                        $allcredit =  $this->accountModel->SelectCredit($mandate_code);

                        $sum_cart = $allamount->total_cart +  $amount; 

                        $sum_credit = $allcredit->amount;

                        
                     


                         

                         if ($sum_cart > $sum_credit) {
                          error_flash('alert_message', 'Error Adding Payment - Insufficient Balance');
                      header('Location: ' . $_SERVER["HTTP_REFERER"] );
                      exit;
                     
                          die();
                         }



                         


                      $this->accountModel->AddMandateoutstanding($fee_title,$fee_code,$amount,$mandate_code,$tran_code,$issued_date,$credit_note);

                        $this->accountModel->UpdateCartTotalNoDueNoDies($tran_code,$amount);

              

                         $data = [

                            
                            'name' => $_SESSION['name'],
                              'email' => $_SESSION['email'],
                              'department' => $_SESSION['department'],
                              'role' => $_SESSION['role'],


                              'mandate_code' => $mandate_code,
                           
                                  
                               ];

                         $user_log = ' '.$fee_title.' payment Added To '.$mandate_code.' Account , By '.$data['name'].' ';
                         $activities = ''.$fee_title.' payment Added To Account,  By '.$data['name'].' ';
                         $status = '1';
                  

                          $this->accountModel->AddMandateActivities($data,$activities);
                          $this->accountModel->AddLog($data,$user_log,$status);

                          

                      

                       flash('alert_message', 'FEE Added');
                      header('Location: ' . $_SERVER["HTTP_REFERER"] );
                      exit;
                     
                   }

         

                 }

               
                    }


                     public function demo_page()
                {
                  

                   
                 

                   
                     $this->view('accounts/demo_page');
                    
                }


  }