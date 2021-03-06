<?php
  class Users extends Controller {
    public function __construct(){
     

     
      $this->userModel = $this->model('User');
   


    }
  public function index(){

       

      // Check for POST 
      if($_SERVER['REQUEST_METHOD'] == 'POST'){
        // Process form
        // Sanitize POST data
        $_POST = filter_input_array(INPUT_POST, FILTER_SANITIZE_STRING);
        
        // Init data
        $data =[
          'email' => trim($_POST['email']),
          'password' => trim($_POST['password']),
          'email_err' => '',
          'password_err' => '',      
        ];

        // Validate Email
        if(empty($data['email'])){
          $data['email_err'] = 'Pleae enter email';
        }

        // Validate Password
        if(empty($data['password'])){
          $data['password_err'] = 'Please enter password';
        }

        // Check for user/email
        if($this->userModel->findUserByEmail($data['email'])){
          // User found
        } else {
          // User not found
          $data['email_err'] = 'No user found';
        }

        // Make sure errors are empty
        if(empty($data['email_err']) && empty($data['password_err'])){
          // Validated
          // Check and set logged in user
          $loggedInUser = $this->userModel->login($data['email'], $data['password']);

          if($loggedInUser){
            // Create Session
            $this->createUserSession($loggedInUser);
          } else {
            $data['password_err'] = 'Password incorrect';

              $this->view('inc/login_header');
              $this->view('users/login', $data);
              $this->view('inc/login_footer');
          }
        } else {
          // Load view with errors
           $this->view('inc/login_header');
              $this->view('users/login', $data);
              $this->view('inc/login_footer');
        }


      } else {
        // Init data
        $data =[    
          'email' => '',
          'password' => '',
          'email_err' => '',
          'password_err' => '',        
        ];

        // Load view
          $this->view('inc/login_header');
          $this->view('users/login', $data);
          $this->view('inc/login_footer');
      }
    }


  





    public function register(){
      // Check for POST
      if($_SERVER['REQUEST_METHOD'] == 'POST'){
        // Process form
  
        // Sanitize POST data
        $_POST = filter_input_array(INPUT_POST, FILTER_SANITIZE_STRING);

        // Init data
        $data =[
          'fname' => trim($_POST['fname']),
          'lname' => trim($_POST['lname']),
          'username' => trim($_POST['username']),
          'email' => trim($_POST['email']),
          'zipcode' => trim($_POST['zipcode']),
          'password' => trim($_POST['password']),
          'phone' => trim($_POST['phone']),
          'account_type' => trim($_POST['account_type']),
          'country' => trim($_POST['country']),
          'currency_type' => trim($_POST['currency_type']),
          'reg_date' => date('jS \ F Y h:i:s A'),
          'fname_err' => '',
          'lname_err' => '',
          'username_err' => '',
          'zipcode' => '',
          'email_err' => '',
          'password_err' => '',
          'phone_err' => '',
          'account_type_err' => '',
          'country_err' => '',
          'currency_type_err' => ''
        ];

        // Validate Email
        if(empty($data['email'])){
          $data['email_err'] = 'Pleae enter email';
        } else {
          // Check email
          if($this->userModel->findUserByEmail($data['email'])){
            $data['email_err'] = 'Email is already taken';
          }
        }

        // Validate Phone
        if(empty($data['phone'])){
          $data['phone_err'] = 'Pleae enter phone';
        } else {
          // Check email
          if($this->userModel->findUserByPhone($data['phone'])){

              $data['phone_err'] = 'Phone number is already taken';
            

          }
        }

    

        // Make sure errors are empty
        if(empty($data['email_err']) && empty($data['name_err']) && empty($data['password_err']) && empty($data['phone_err'])){
          // Validated
          
          // Hash Password
          $data['password'] = password_hash($data['password'], PASSWORD_DEFAULT);

          // Register User

          // if(sendMail_LOCAL_Registration($data)){
          //   flash_success('register_success', 'Check your email and comfirm the email address used');
          //   redirect('users/register');
          // }


          if($this->userModel->register($data)){
           flash('register_success', '<div class="notification success closeable">
                <p><span>You are registered and can log in</span> </p>
                <a class="close" href="#"></a>
            </div>');
            redirect('users/login');
          } 
          else {
            die('Something went wrong');
          }

        } else {
          // Load view with errors
         $this->view('inc/login_header');
          $this->view('users/register', $data);
          $this->view('inc/login_footer');
        }

      } else {
        // Init data
        $data =[
          'fname' => '',
          'lname' => '',
          'username' => '',
          'email' => '',
          'password' => '',
          'phone' => '',
          'country' => '',
          'account_type' => '',
          'currency_type' => '',
          'fname_err' => '',
          'lname_err' => '',
          'username' => '',
          'zipcode' => '',
          'email_err' => '',
          'country_err' => '',
          'password_err' => '',
          'phone_err' => '',
          'account_type_err' => '',
          'currency_type_err' => ''
        ];

        // Load view
        $this->view('inc/login_header');
          $this->view('users/register', $data);
          $this->view('inc/login_footer');
      }
    }

  


  


      public function forget_password(){
        $pass_res_token = bin2hex(openssl_random_pseudo_bytes(64));
      // Check for POST
      if($_SERVER['REQUEST_METHOD'] == 'POST'){
        // Process form
        // Sanitize POST data
        $_POST = filter_input_array(INPUT_POST, FILTER_SANITIZE_STRING);
        
        // Init data
        $data =[
          'email' => trim($_POST['email']),
          'pass_res_token' => $pass_res_token,
          'email_err' => '',     
        ];

        // Validate Email
        if(empty($data['email'])){
          $data['email_err'] = 'Pleae enter email';
        }

       
        // Check for user/email
        if($this->userModel->findUserByEmail($data['email'])){
          // User found
          $user_dl = $this->userModel->findUserByEmail($data['email']);
          $name =  $user_dl->name; 
        } else {
          // User not found
          $data['email_err'] = 'No user found for '.$data['email'].'';
        }



        // Make sure errors are empty
        if(empty($data['email_err'])){
           if($this->userModel->ResetToken($data)){
            if($this->userModel->forgetPassword($data['email'])){
              
                  if(PasswordResetEmail($data,$name)){   
               
               flash('alert_message', 'Check your email for the reset link');
                redirect('users/forget_password');  
              } else{
                error_flash('alert_message', '<div class="notification success closeable">
                    <p><span>ERROR</span> </p>
                    <a class="close" href="#"></a>
                </div>');
              }

        }

      }

        } else {
          // Load view with errors
           $this->view('inc/login_header');
          $this->view('users/forget_password', $data);
           $this->view('inc/login_footer');
        }


      } else {
        // Init data
        $data =[    
          'email' => '',
          'email_err' => ''
                
        ];

        // Load view
         $this->view('inc/login_header');
        $this->view('users/forget_password', $data);
         $this->view('inc/login_footer');
      }
    }



    public function reset_password($pass_res_token){
      if($_SERVER['REQUEST_METHOD'] == 'POST'){
        $empty_token = '';
        // Sanitize POST array
        $_POST = filter_input_array(INPUT_POST, FILTER_SANITIZE_STRING);

        

        // Init data
            $data =[
              'email' => trim($_POST['email']),
              'pass_res_token' => trim($_POST['pass_res_token']),
              'empty_token' => $empty_token,
              'password' => trim($_POST['password']),
              'password_err' => '',
            ];

            // Validate Email
            if(empty($data['password'])){
              $data['password_err'] = 'Pleae enter name';
            } 
            // Make sure errors are empty
            if(empty($data['password_err'])){
              // Validated
         $data['password'] = password_hash($data['password'], PASSWORD_DEFAULT);
          // Validated'
          $user_dl = $this->userModel->findUserByEmail($data['email']);
          $name =  $user_dl->name; 
         if(PasswordReseted($data,$name)){    
              
           if($this->userModel->DeleteResetToken($data)){  
          if($this->userModel->updateUserPassword($data)){
            flash('alert_message', 'Password Updated Successfully, Login with yoir new password');
            redirect('users/login');
          } 
        }
      }
        else {
            die('Something went wrong');
          }
        } else {
          // Load view with errors
        $this->view('inc/login_header');
          $this->view('users/reset_password', $data);
           $this->view('inc/login_footer');
        }

        //  CHECK IF TOKEN IS VALID AND ACTIVE
        } if (!$this->userModel->getUserDetail($pass_res_token)) {

        flash('alert_message', 'Sorry, your password reset token expired!');
            redirect('users/login');
          
        }else {
        
        $user_profile = $this->userModel->getUserDetail($pass_res_token);

          $data = ['user_profile' => $user_profile
             ];
           $this->view('inc/login_header');
          $this->view('users/reset_password', $data);
           $this->view('inc/login_footer');
          }
        }




    public function createUserSession($user){
       $temp_url =   $_SESSION['url']; 
       $temp_url;

       

      $_SESSION['user_id'] = $user->id;
      $_SESSION['user_email'] = $user->email;
      $_SESSION['user_name'] = $user->username;
      $_SESSION['name'] = $user->name;
      $_SESSION['email'] = $user->email;
      $_SESSION['user_phone'] = $user->phone;
      $_SESSION['role'] = $user->role;
      $_SESSION['department'] = $user->department;
      $_SESSION['user_company'] = $user->company;
      $_SESSION['user_address'] = $user->address;
      $_SESSION['user_website'] = $user->website;
      $_SESSION['reg_date'] = $user->reg_date;
      $_SESSION['status'] = $user->status;
      $_SESSION['account'] = $user->account;
      $_SESSION['password_update'] = $user->password_update;

      

        

        if ($temp_url =="") {
          redirect('accounts');
        }


        if ($temp_url ==!"") {
          temp_redirect($temp_url);
        }

         

       
     
    }

     public function expired_token(){
      
  
          $this->view('inc/login_header');
           $this->view('users/410');
          $this->view('inc/login_footer');
    }

    public function logout(){
      unset($_SESSION['user_id']);
      unset($_SESSION['user_email']);
      unset($_SESSION['fname']);
      unset($_SESSION['lname']);
      unset($_SESSION['user_phone']);
      session_destroy();
      redirect('');
    }


function send_mail2(){
    if(isset($_POST['send']))
        {
    $to_email='aboajahemmanuel@gmail.com';
    $subject='Test mail';
    $message='fuck you bin2hex';

    
      
    $to = $to_email;
        $subject = $subject;
        $txt = $message;
        $headers = "From: afasina@nasdotcng.com" . "\r\n" .
        "CC: eaboajah@nasdng.com";
    mail($to,$subject,$txt,$headers);
    }

    flash('alert_message', 'Message Sent');
                    redirect('users/forget_password');
        // $this->view->render('accounts/send_mail');
  }


    
  }

 