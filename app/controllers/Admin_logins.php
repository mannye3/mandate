<?php
  class Admin_logins extends Controller {
    public function __construct(){


      if(isLoggedInAdmin()){
       
         redirect('admins');
      }
 

      $this->admin_loginModel = $this->model('Admin_login');
    }

      public function index(){
          
         
      // Check for POST
      if($_SERVER['REQUEST_METHOD'] == 'POST'){
        // Process form
        // Sanitize POST data
        $_POST = filter_input_array(INPUT_POST, FILTER_SANITIZE_STRING);
        
        // Init data
        $data =[
          'admin_name' => trim($_POST['admin_name']),
          'password' => trim($_POST['password']),
          'admin_name_err' => '',
          'password_err' => '',      
        ];

        // Validate username
        if(empty($data['admin_name'])){
          $data['admin_name_err'] = 'Pleae enter username';
        }

        // Validate Password
        if(empty($data['password'])){
          $data['password_err'] = 'Please enter password';
        }

        // Check for user/username
        if($this->admin_loginModel->findAdminByadmin_name($data['admin_name'])){
          // User found
        } else {
          // User not found
          $data['admin_name_err'] = 'No user found';
        }



        // Make sure errors are empty
        if(empty($data['admin_name_err']) && empty($data['password_err'])){
          // Validated
          // Check and set logged in user


          $loggedInUser = $this->admin_loginModel->login($data['admin_name'], $data['password']);

         

          if($loggedInUser){
            // Create Session
             
            $this->createAdminSession($loggedInUser);

          } else {
            $data['password_err'] = 'Password incorrect';

              $this->view('inc/login_header');
              $this->view('admin_login/login', $data);
              $this->view('inc/login_footer');
          }
        } else {
          // Load view with errors
          
         
           $this->view('inc/login_header');
              $this->view('admin_login/login', $data);
              $this->view('inc/login_footer');
        }


      } else {
        // Init data
        $data =[    
          'admin_name' => '',
          'password' => '',
          'admin_name_err' => '',
          'password_err' => '',        
        ];

        // Load view
         $this->view('inc/login_header');
        $this->view('admin_login/login', $data);
          $this->view('inc/login_footer');
        //   $this->view('inc/login_header');
        //   $this->view('Admin_login/login', $data);
        //   $this->view('inc/login_footer');
      }
    }



    public function createAdminSession($admin){

       $temp_url =   $_SESSION['url']; 
       $temp_url;

      

     
       $_SESSION['admin_id'] = $admin->id;
      $_SESSION['admin_email'] = $admin->email;
       $_SESSION['admin_name'] = $admin->admin_name;
       $_SESSION['adminname'] = $admin->name;
      $_SESSION['admin_phone'] = $admin->phone;
      $_SESSION['role'] = $admin->role;
      $_SESSION['admin_company'] = $admin->company;
      $_SESSION['admin_symbol'] = $admin->symbol;
       $_SESSION['admin_address'] = $admin->address;
       $_SESSION['admin_website'] = $admin->website;
        $_SESSION['reg_date'] = $admin->reg_date;
        $_SESSION['status'] = $admin->status;


          if ($temp_url =="") {
          redirect('admins');
        }


        if ($temp_url ==!"") {
          temp_redirect($temp_url);
        }


       
    
    }

    public function logout(){
      unset($_SESSION['admin_id']);
      unset($_SESSION['admin_email']);
      unset($_SESSION['admin_name']);
      unset($_SESSION['lname']);
       unset($_SESSION['adminname']);
      unset($_SESSION['admin_phone']);
      session_destroy();
      redirect('admin_logins');
    }



public function username($username){

  $user_profile = $this->userModel->getUserDetail($username);

     $data = [
    'user_profile' => $user_profile
      ];


      $this->view('users/username', $data);
    }





        public function reset($username){
      if($_SERVER['REQUEST_METHOD'] == 'POST'){

        // Sanitize POST array
        $_POST = filter_input_array(INPUT_POST, FILTER_SANITIZE_STRING);

        // Init data
            $data =[
              'username' => trim($_POST['username']),
              'password' => trim($_POST['password']),
              'password_err' => '',
            ];

            // Validate username
            if(empty($data['password'])){
              $data['password_err'] = 'Pleae enter name';
            } 
            // Make sure errors are empty
            if(empty($data['password_err'])){
              // Validated
         $data['password'] = password_hash($data['password'], PASSWORD_DEFAULT);
          // Validated
          if($this->userModel->updateUserPassword($data)){
            flash('post_message', 'Password Updated Successfully');
            redirect('users/login');
          } else {
            die('Something went wrong');
          }
        } else {
          // Load view with errors
          $this->view('users/reset', $data);
        }

      } else {
      
        $user_profile = $this->userModel->getUserDetail($username);

        $data = [
         'user_profile' => $user_profile
           ];
  
        $this->view('users/reset', $data);
      }
    }

    
  }

 