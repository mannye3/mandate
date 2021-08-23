<?php
  class Admins extends Controller {
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





      if(!isLoggedInAdmin()){
        redirect('admin_logins');
      }

      $this->adminModel = $this->model('Admin');
      $this->utilityModel = $this->model('Utility');
      $this->accountModel = $this->model('Account');
 
    }

 


     public function index(){


        
       $fee_cod_c = 'SD-BDAF'; //BROKER DEALER ANNUAL FEE 

       $fee_cod_c2 = 'PM'; // PLATFORM MAINTENANCE

       $fee_cod_c3 = 'TF'; // TRADER FEE

       $fee_cod_c4 = 'SD-BNF'; // BROKER FEE

       $fee_cod_c5 = 'ISH'; // ISSUING HOUSE FEE

       $current_year = date("Y"); // CURRENT YEAR FUNCTION 

       $total1 = $this->accountModel->AllTotalBFAmount($fee_cod_c);
        $total2 = $this->accountModel->AllTotalPFAmount($fee_cod_c2);
        $total3 = $this->accountModel->AllTotalTFAmount($fee_cod_c3);
        $totaly1= $this->accountModel->AllTotalBDYear($fee_cod_c,$current_year);
        $totaly2= $this->accountModel->AllTotalPMYear($fee_cod_c2,$current_year);
        $totaly3= $this->accountModel->AllTotalTFYear($fee_cod_c3,$current_year);
        // $totalw2 = $this->accountModel->AllTotalTFweek2($fee_code2);
        // $totalw3 = $this->accountModel->AllTotalTFweek3($fee_code3);
        // $totalm1 = $this->accountModel->AllTotalTFmonth1($fee_code1);
        // $totalm2 = $this->accountModel->AllTotalTFmonth2($fee_code2);
        // $totalm3 = $this->accountModel->AllTotalTFmonth3($fee_code3);



                $data = [
                'total1' => $total1,
                'total2' => $total2,
                'total3' => $total3,
                'totaly1' => $totaly1,
                'totaly2' => $totaly2,
                'totaly3' => $totaly3,
                            
                           
                            ];

                    $this->view('inc/user_header');
                   $this->view('admins/home', $data);
                  $this->view('inc/user_footer');
                  }





         public function profile(){
          $total_funds = $this->adminModel->Totalfunds($_SESSION['user_email']);

                

          $data = [
                'total_funds' => $total_funds
                  ];

              $this->view('inc/user_header');
               $this->view('admin/profile', $data);
              $this->view('inc/user_footer');
        }




                     public function categories(){
                     
                           if($_SERVER['REQUEST_METHOD'] == 'POST'){
                            // Sanitize POST array       
                           
                            $_POST = filter_input_array(INPUT_POST, FILTER_SANITIZE_STRING);
                          
                             $data = [
                             
                              'cat_title' => trim($_POST['cat_title']),
                              'cat_code' => trim($_POST['cat_code']),
                               'subscription_rate' => trim($_POST['subscription_rate']),
                               'cat_title_err' => ''             
                                 ];


                          $data['cat_title'] = ucwords($data['cat_title']);

                        
                         
                              // Validated
                              if($this->accountModel->AddCat($data)){
                                
                                  flash('alert_message', 'Category Added');
                                  redirect('admins/categories');
                            }
                        
                        
                             else {



                       $allcategories = $this->accountModel->getCat(); 
                        $data = [
                                'allcategories' => $allcategories
                                  ];
                                // Load view with errors
                                 $this->view('inc/user_header');
                                $this->view('admins/categories', $data);
                                $this->view('inc/user_footer');
                              }

                          } else {

                        $allcategories = $this->accountModel->getCat();    

                            $data = [
                                  'allcategories' => $allcategories
                                    ];
                               
                               $this->view('inc/user_header');
                              $this->view('admins/categories', $data);
                              $this->view('inc/user_footer');
                              }


                        }



                        public function edit_category($id){

                           if($_SERVER['REQUEST_METHOD'] == 'POST'){
                            // Sanitize POST array
                           
                           
                            $_POST = filter_input_array(INPUT_POST, FILTER_SANITIZE_STRING);



                          
                             // Init data
                                  $data =[
                                     'id' => $id,
                                    'cate_title' => trim($_POST['cate_title']),
                                    'cat_code' => trim($_POST['cat_code']),
                                    'subscription_rate' => trim($_POST['subscription_rate']),
                                    'cate_title_err' => '',
                                   
                                  ];

                                  

                                    // Validate Email
                                  if(empty($data['cate_title'])){
                                    $data['cate_title_err'] = 'Pleae enter Category';
                                  } 

                                   

                            
                                  /// Make sure errors are empty
                                  if(empty($data['cate_title_err'])){
                                    // Validated
                                   
                                $data['cate_title'] = strtoupper($data['cate_title']);

                        
                           
                              // Validated
                              if($this->adminModel->updateCat($data)){
                                  flash('alert_message', 'Category Updated');
                                  redirect('admins/categories');
                                
                              } 

                              else {
                                die('Something went wrong');
                              }
                            } else {
                              // Load view with errors
                               $this->view('inc/user_header');
                              $this->view('admins/categories', $data);
                              $this->view('inc/user_footer');
                            }

                          } else {

                        $allroles = $this->adminModel->getRoles();    

                        $data = [
                              'allroles' => $allroles
                                ];
                           
                           $this->view('inc/admin_header');
                          $this->view('admins/categories', $data);
                          $this->view('inc/admin_footer');
                          }
                        }






                         public function delete_category($id)
                    {

                        if ($this->accountModel->deleteCat($id))
                        {
                            flash('alert_message', 'Category Removed');
                            redirect('admins/categories');
                        }
                        else
                        {
                            die('Something went wrong');
                        }

                    }







                    public function fees(){
     
           if($_SERVER['REQUEST_METHOD'] == 'POST'){
            // Sanitize POST array       
           
            $_POST = filter_input_array(INPUT_POST, FILTER_SANITIZE_STRING);
          
             $data = [
             
              'fee_title' => trim($_POST['fee_title']),
              'amount' => trim($_POST['amount']),
               'fee_code' => trim($_POST['fee_code']),
               'fee_title_err' => ''             
                 ];


          $data['fee_title'] = ucwords($data['fee_title']);

        
         
              // Validated
              if($this->accountModel->AddFee($data)){
                
                  flash('alert_message', 'Category Added');
                  redirect('admins/fees');
            }
        
        
             else {



       $allfees = $this->accountModel->getFees(); 
        $data = [
                'allfees' => $allfees
                  ];
                // Load view with errors
                 $this->view('inc/user_header');
                $this->view('admins/fees', $data);
                $this->view('inc/user_footer');
              }

          } else {

        $allfees = $this->accountModel->getFees();    

            $data = [
                  'allfees' => $allfees
                    ];
               
               $this->view('inc/user_header');
              $this->view('admins/fees', $data);
              $this->view('inc/user_footer');
              }


        }






          public function edit_fee($id){

           if($_SERVER['REQUEST_METHOD'] == 'POST'){
            // Sanitize POST array
           
           
            $_POST = filter_input_array(INPUT_POST, FILTER_SANITIZE_STRING);



          
             // Init data
                  $data =[
                     'id' => $id,
                    'fee_title' => trim($_POST['fee_title']),
                    'amount' => trim($_POST['amount']),
                    'fee_code' => trim($_POST['fee_code']),
                    'fee_title_err' => '',
                   
                  ];

                  

                    // Validate Email
                  if(empty($data['fee_title'])){
                    $data['fee_title_err'] = 'Pleae enter Category';
                  } 

                   

            
                  /// Make sure errors are empty
                  if(empty($data['fee_title_err'])){
                    // Validated
                   
                $data['fee_title'] = strtoupper($data['fee_title']);

        
           
              // Validated
              if($this->accountModel->updateFee($data)){
                  flash('alert_message', 'Category Updated');
                  redirect('admins/fees');
                
              } 

              else {
                die('Something went wrong');
              }
            } else {
              // Load view with errors
               $this->view('inc/user_header');
              $this->view('admins/categories', $data);
              $this->view('inc/user_footer');
            }

          } else {

        $allroles = $this->adminModel->getRoles();    

        $data = [
              'allroles' => $allroles
                ];
           
           $this->view('inc/admin_header');
          $this->view('admins/categories', $data);
          $this->view('inc/admin_footer');
          }
        }



             public function delete_fee($id)
    {

        if ($this->accountModel->deleteFee($id))
        {
            flash('alert_message', 'Fee Removed');
            redirect('admins/fees');
        }
        else
        {
            die('Something went wrong');
        }

    }







      public function mandates(){
            
                    $allmandates = $this->accountModel->getAllMandate();
                     // $get_brokerinfo = $this->accountModel->getBroker();
                     // $get_accountinfo = $this->accountModel->getAccount();
                     
                      

                  
                   
                    $data = [
                  'allmandates' => $allmandates
                  // 'get_brokerinfo' => $get_brokerinfo
                   // 'get_accountinfo' => $get_accountinfo
                   
                    ];

                    $this->view('inc/user_header');
                     $this->view('admins/mandates', $data);
                    $this->view('inc/user_footer');
                    }






        public function change_mandate_status($id){

           

           if($_SERVER['REQUEST_METHOD'] == 'POST'){
            // Sanitize POST array
           
           
            $_POST = filter_input_array(INPUT_POST, FILTER_SANITIZE_STRING);

          
             // Init data
                  $data =[
                     'id' => $id,
                     'mandate_status' => trim($_POST['mandate_status']),  
                  ];
                  
              // Validated
              if($this->accountModel->ChangeMandateStatus($data)){
                  flash('alert_message', 'Status Changed');
                  redirect('admins/mandates');
                
              } 

              else {
                die('Something went wrong');
              }
            

          } 
        }








     public function add_mandate_files(){

            $this->view('inc/user_header');
           $this->view('admins/add_mandate_files');
            $this->view('inc/user_footer');
          
    }





    public function update_mandate_files($mandate_code){


      
       $data = [
            
             'mandate_code' => $mandate_code
              ];

            $this->view('inc/user_header');
           $this->view('admins/update_mandate_files', $data);
            $this->view('inc/user_footer');
          
    }










     public function add_mandate(){
     
           if($_SERVER['REQUEST_METHOD'] == 'POST'){
            // Sanitize POST array       
           
            $_POST = filter_input_array(INPUT_POST, FILTER_SANITIZE_STRING);
          
             $data = [
             
              'company_name' => trim($_POST['company_name']),
              'category' => trim($_POST['category']),
               'phone' => trim($_POST['phone']),
              'email' => trim($_POST['email']),
               'address' => trim($_POST['address']),
              'website' => trim($_POST['website']),
              'mandate_code' => trim($_POST['mandate_code']),
               'company_name_err' => ''             
                 ];


          $data['company_name'] = ucwords($data['company_name']);
           $_SESSION['mandate_code'] =  $data['mandate_code'];

        
         
              // Validated
              if($this->accountModel->AddMandate($data)){

               
                flash('alert_message', 'Mandate Added Successfully');
                redirect('admins/mandates');
                
                 
            }
        
        
           

          } else {

         $load_cat = $this->accountModel->getCatList();


            $data = [
                  'load_cat' => $load_cat
                    ];


               
               $this->view('inc/user_header');
              $this->view('admins/add_mandate', $data);
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
                      'mandate_code' => $mandate_code
                     
                      
                      );
                      $this->accountModel->addGallery($data);
                      flash('alert_message', 'Mandate Added Successfully');
             
            // echo "file Uploaded Successfully";
            
           // $this->view('accounts/index', $data);
            }
         redirect('add_mandate_file');
            }







         public function delete_mandate_file($id)

     
    {

       $mandate = $this->accountModel->getFileByCode($id);

       $madate_url = $mandate->mandate_code; 

      

        if ($this->accountModel->deleteFile($id))
        {
            flash('alert_message', 'File Removed');
            redirect('admins/mandate/'.$madate_url.'');
        }
        else
        {
            die('Something went wrong');
        }

    }







 public function mandate($mandate_code){
      
    


       $fee_cod_c = 'SD-BDAF'; //BROKER DEALER ANNUAL FEE 

       $fee_cod_c2 = 'PM'; // PLATFORM MAINTENANCE

       $fee_cod_c3 = 'TF'; // TRADER FEE

       $fee_cod_c4 = 'SD-BNF'; // BROKER FEE

       $fee_cod_c5 = 'ISH'; // ISSUING HOUSE FEE

       $current_year = date("Y"); // CURRENT YEAR FUNCTION 

          //GET FIRM DETAILS USING MANDATE CODE 
        $mandate_docs = $this->accountModel->getMandateByCode($mandate_code);
        $mandate_info = $this->accountModel->getInfoMandateByCode($mandate_code);
        $mandate_accounts = $this->accountModel->getAccountMandateByCode($mandate_code);
        $mandate_traders = $this->accountModel->getTraderMandateByCode($mandate_code);
        $mandate_managers = $this->accountModel->getManagerMandateByCode($mandate_code);
        $mandate_managers = $this->accountModel->getManagerMandateByCode($mandate_code);
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
        $toalf1 = $this->accountModel->TotalHDFAmount($mandate_code,$fee_cod_c,$current_year);
        $toalf2 = $this->accountModel->TotalPMFAmount($mandate_code,$fee_cod_c2,$current_year);
        $toalf3 = $this->accountModel->TotalTFAmount($mandate_code,$fee_cod_c3,$current_year);
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
         // END SUM TOTAL FEE FOR MANDATE


            $data = [
            'allmandates' => $allmandates,
            'mandate_docs' => $mandate_docs,
             'mandate_info' => $mandate_info,
              'mandate_accounts' => $mandate_accounts,
              'mandate_traders' => $mandate_traders,
               'mandate_managers' => $mandate_managers,
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
                'allfees' => $allfees,
                 'toalf1' => $toalf1,
                 'toalf2' => $toalf2,
                 'toalf3' => $toalf3,
                 'toalf4' => $toalf4,
                 'toalf5' => $toalf5,
                 'total_fee1' => $total_fee1,
                 'total_fee2' => $total_fee2,
                 'total_fee3' => $total_fee3,
                 'total_fee4' => $total_fee4,
                 'total_fee5' => $total_fee5,


          ];


             
               
               $this->view('inc/user_header');
              $this->view('admins/mandate', $data);
              $this->view('inc/user_footer');


              }


        





         public function add_mandatefee(){
           $tran_code= rand(100000,999999);
     
           if($_SERVER['REQUEST_METHOD'] == 'POST'){
            // Sanitize POST array       
            $_POST = filter_input_array(INPUT_POST, FILTER_SANITIZE_STRING);
          
             $data = [
             
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

              // echo $due_date; 
              // echo "<br>";
              // echo $fee_code;

              $fee_amount =  $this->accountModel->findFeeByCode($fee_code); 

             $amount =  $fee_amount->amount;

        

                    
                



               if($this->accountModel->AddMandateFee($fee_code,$issued_date,$due_date,$mandate_code,$tran_code)){
                
                   if($this->accountModel->Updateamount($amount, $tran_code)){

                  flash('alert_message', 'Fee Added');
                  redirect('admins/mandate/'.$data['mandate_code'].'');
                
              } 
            }
          

  
               

          } else {

         $load_cat = $this->accountModel->getCatList();


            $data = [
                  'load_cat' => $load_cat
                    ];


               
               $this->view('inc/user_header');
              $this->view('admins/add_mandate', $data);
              $this->view('inc/user_footer');
              }


        }





         public function add_mandatetrader(){
     
           if($_SERVER['REQUEST_METHOD'] == 'POST'){
            // Sanitize POST array       
            $_POST = filter_input_array(INPUT_POST, FILTER_SANITIZE_STRING);
          
             $data = [
             
              'fullname' => trim($_POST['fullname']),
              'email' => trim($_POST['email']),
               'phone' => trim($_POST['phone']), 
                'trader_code' => trim($_POST['trader_code']), 
               'mandate_code' => trim($_POST['mandate_code']),            
                 ];


                  // Validated
                  if($this->accountModel->AddMandateTrader($data)){

                      flash('alert_message', ''.$data['fullname'].' Added');
                       redirect('admins/mandate/'.$data['mandate_code'].'');
                    
                     
                }
            
               

          } else {

         $load_cat = $this->accountModel->getCatList();


            $data = [
                  'load_cat' => $load_cat
                    ];


               
               $this->view('inc/user_header');
              $this->view('admins/add_mandate', $data);
              $this->view('inc/user_footer');
              }


        }



          public function change_mandate_trader($id){

           

           if($_SERVER['REQUEST_METHOD'] == 'POST'){
            // Sanitize POST array
           
           
            $_POST = filter_input_array(INPUT_POST, FILTER_SANITIZE_STRING);

          
             // Init data
                  $data =[
                     'id' => $id,
                    'mandate_code' => trim($_POST['mandate_code']),
                    'fullname' => trim($_POST['fullname']),
                    'phone' => trim($_POST['phone']),
                    'email' => trim($_POST['email']),
                    'trader_code' => trim($_POST['trader_code']),
                    'mandate_code' => trim($_POST['mandate_code']),
                    'mandate_code2' => trim($_POST['mandate_code2']),
            
                    'mandate_code_err' => '',
                   
                  ];

                 
                  /// Make sure errors are empty
                  if(empty($data['mandate_code_err'])){
                    // Validated
                   
                  
              // Validated
              if($this->accountModel->ChangeMandateTrade($data)){
                  flash('alert_message', 'Trader Details Updated');
                  redirect('admins/mandate/'.$data['mandate_code2'].'');
                
              } 

              else {
                die('Something went wrong');
              }
            } else {
              // Load view with errors
               $this->view('inc/user_header');
              $this->view('admins/mandate/'.$data['mandate_code2'].'', $data);
              $this->view('inc/user_footer');
            }

          } 
        }





         public function change_mandate_manager($id){

           

           if($_SERVER['REQUEST_METHOD'] == 'POST'){
            // Sanitize POST array
           
           
            $_POST = filter_input_array(INPUT_POST, FILTER_SANITIZE_STRING);

          
             // Init data
                  $data =[
                     'id' => $id,
                    'manager_name' => trim($_POST['manager_name']),
                    'manager_phone' => trim($_POST['manager_phone']),
                    'manager_email' => trim($_POST['manager_email']),
                    'mandate_code2' => trim($_POST['mandate_code2']),
            
                    'mandate_code_err' => '',
                   
                  ];

                 
                  /// Make sure errors are empty
                  if(empty($data['mandate_code_err'])){
                    // Validated
                   
                  
              // Validated
              if($this->accountModel->ChangeMandateManager($data)){
                  flash('alert_message', 'Manager Details Updated');
                  redirect('admins/mandate/'.$data['mandate_code2'].'');
                
              } 

              else {
                die('Something went wrong');
              }
            } else {
              // Load view with errors
               $this->view('inc/user_header');
              $this->view('admins/mandate/'.$data['mandate_code2'].'', $data);
              $this->view('inc/user_footer');
            }

          } 
        }










        public function add_manager(){
     
           if($_SERVER['REQUEST_METHOD'] == 'POST'){
            // Sanitize POST array       
            $_POST = filter_input_array(INPUT_POST, FILTER_SANITIZE_STRING);
          
             $data = [

             
              'manager_name' => trim($_POST['manager_name']),
              'manager_email' => trim($_POST['manager_email']),
               'manager_phone' => trim($_POST['manager_phone']), 
               'mandate_code' => trim($_POST['mandate_code']),            
                 ];


                  // Validated
                  if($this->accountModel->AddMandatemanager($data)){

                      flash('alert_message', ''.$data['manager_name'].' Added');
                       redirect('admins/mandate/'.$data['mandate_code'].'');
                    
                     
                }
            
               

          } else {

         $load_cat = $this->accountModel->getCatList();


            $data = [
                  'load_cat' => $load_cat
                    ];


               
               $this->view('inc/user_header');
              $this->view('admins/add_mandate', $data);
              $this->view('inc/user_footer');
              }


        }








     public function users(){
      $All_Users = $this->adminModel->getUsers();
      // $load_roles = $this->utilityModel->getRoles();

            

      $data = [
            'All_Users' => $All_Users
             // 'load_roles' => $load_roles
              ];

          $this->view('inc/user_header');
           $this->view('admins/users', $data);
          $this->view('inc/user_footer');
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
                    redirect('admins/users');
                    die();
          }
          
            // Make sure no errors
            if(empty($data['email_err'])){
            $data['name'] = ucwords($data['name']);
             $data['password'] = password_hash($data['password'], PASSWORD_DEFAULT);
              // Validated
              if($this->adminModel->AddUser($data)){
                
              flash('alert_message', 'Account Created');
              redirect('admins/users');
            }

              else {
                die('Something went wrong');
              }
            } else {
              // Load view with errors
               $this->view('inc/user_header');
              $this->view('admin/users', $data);
              $this->view('inc/user_footer');
            }

          } else {
           
           $this->view('inc/user_header');
          $this->view('admin/users', $data);
          $this->view('inc/user_footer');
          }
        }



    



          public function edit_user($id){

           if($_SERVER['REQUEST_METHOD'] == 'POST'){
            // Sanitize POST array
           
           
            $_POST = filter_input_array(INPUT_POST, FILTER_SANITIZE_STRING);



          
             // Init data

              $data =[
              'id' => $id,
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
                    flash('alert_message', 'Account Updated without password');
                    redirect('accounts/users');
                
                  } 


            
                  /// Make sure errors are empty
                  if(empty($data['email_err'])){
                    // Validated
                   
              $data['password'] = password_hash($data['password'], PASSWORD_DEFAULT);
            // Make sure no errors
           
              // Validated
              if($this->accountModel->UpdateAccountPassword($data)){
                  flash('alert_message', 'Account Updated With Password');
                  redirect('admins/users');
                
              } 

              else {
                die('Something went wrong');
              }
            } else {
              // Load view with errors
               $this->view('inc/user_header');
              $this->view('admin/accounts', $data);
              $this->view('inc/user_footer');
            }

          } else {
              $issuer_info = $this->adminModel->getIssuerById($id);

            $data = [
            'issuer_info' => $issuer_info

            ];

            
      
           $this->view('inc/admin_header');
          $this->view('admin/edit_issuer', $data);
          $this->view('inc/admin_footer');
          }
        }


     
         public function delete_user($id){
            

              if($this->adminModel->deleteUser($id)){
                flash('alert_message', 'Account Removed');
                redirect('admins/users');
              } 
                  else {
                    die('Something went wrong');
                  }

              }




        public function logs(){
      $All_Logs = $this->adminModel->getLogs();
      // $load_roles = $this->utilityModel->getRoles();

            

      $data = [
            'All_Logs' => $All_Logs
             // 'load_roles' => $load_roles
              ];

          $this->view('inc/user_header');
           $this->view('admins/logs', $data); 
          $this->view('inc/user_footer');
    }








               function updateissuerlogo(){
                          if(isset($_POST['submit']))
                          {

                      $target_dir = PROFILE_PIC_ROOT_PATH;
                      $RandomNum = time();
                      $target_file = $target_dir . basename($_FILES["file"]["name"]);
                      $filename = explode('.', $_FILES["file"]["name"]);
                      $picname = end($filename);
                      $new_name = rand(1000, 9999) . '.' . $picname;
                      $ImageName = str_replace(' ','-',strtolower($new_name));
                      $ImageType = $_FILES['file']['type']; //"file/png", file/jpeg etc.
                      $ImageExt = substr($ImageName, strrpos($ImageName, '.'));
                      $ImageExt = str_replace('.','',$ImageExt);
                      $ImageName = preg_replace("/\.[^.\s]{3,4}$/", "", $ImageName);
                      $NewImageName = $ImageName.'-'.$RandomNum.'.'.$ImageExt;
                      $ret[$NewImageName]= $target_dir.$NewImageName;
                      move_uploaded_file($_FILES["file"]["tmp_name"],$target_dir."/".$NewImageName );

                      $data = array(
                      'id' => trim($_POST['id']),
                      'logo' => $NewImageName,
                      
                      );

            

                      
                    $this->adminModel->issuerlogoupdate($data);
                    }
                    flash('alert_message', 'Account Updated');
                    redirect('admins/issuers');
                 
                    }




          public function add_account(){


            
            $password = 'password123';
           if($_SERVER['REQUEST_METHOD'] == 'POST'){
            // Sanitize POST array
           
           
            $_POST = filter_input_array(INPUT_POST, FILTER_SANITIZE_STRING);
 
            $data = [
              
              'password' => $password,
              'role' => trim($_POST['role']),
              'name' => trim($_POST['name']),
              'email' => trim($_POST['email']),
              'phone' => trim($_POST['phone']),
               'company' => trim($_POST['company']),
              'email_err' => ''
             
             
            ];

            // Validate data
            if(empty($data['email'])){
              $data['email_err'] ='Email Field is Empty';


            }
             // Check email
          if($this->adminModel->findClientByEmail($data['email'])){
            error_flash('alert_message', ''.$data['email'].' is already taken');
                    redirect('admins/clients');
                    die();
          }
          
            // Make sure no errors
            if(empty($data['email_err'])){
            $data['name'] = ucwords($data['name']);
             $data['password'] = password_hash($data['password'], PASSWORD_DEFAULT);
              // Validated
              if($this->adminModel->AddUser($data)){
                
              flash('alert_message', 'Account Created');
              redirect('admins/accounts');
            }

              else {
                die('Something went wrong');
              }
            } else {
              // Load view with errors
               $this->view('inc/admin_header');
              $this->view('admin/accounts', $data);
              $this->view('inc/admin_footer');
            }

          } else {
           
           $this->view('inc/admin_header');
          $this->view('admin/accounts', $data);
          $this->view('inc/admin_footer');
          }
        }






              


        public function roles(){
     
           if($_SERVER['REQUEST_METHOD'] == 'POST'){
            // Sanitize POST array       
           
            $_POST = filter_input_array(INPUT_POST, FILTER_SANITIZE_STRING);
          
            $data = [
             // 'username' => trim($_POST['username']),
              'role_title' => trim($_POST['role_title']),
              'reg_date' => date('jS \ F Y h:i:s A'),
              'role_title_err' => '' 
             
            ];

            $data['role_title'] = strtoupper($data['role_title']);

                // CHECK FOR EXISTING ROLE NAME
          if($this->adminModel->findRoleByName($data['role_title'])){
            error_flash('alert_message', ''.$data['role_title'].' is an existing role');
                    redirect('admins/roles');
                    die();
          }

            if(empty($data['role_title_err'])){
                    $this->adminModel->AddRole($data);
                   flash('alert_message', 'Role Added');
                    redirect('admins/roles');
                
                  } 
        
        
             else {


        $allroles = $this->adminModel->getRoles();    

        $data = [
              'allroles' => $allroles
                ];
              // Load view with errors
               $this->view('inc/admin_header');
              $this->view('admin/roles', $data);
              $this->view('inc/admin_footer');
            }

          } else {

        $allroles = $this->adminModel->getRoles();    

        $data = [
              'allroles' => $allroles
                ];
           
           $this->view('inc/admin_header');
          $this->view('admin/roles', $data);
          $this->view('inc/admin_footer');
          }


        }



          



   




  }