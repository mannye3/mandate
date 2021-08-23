<?php
  class User {
    private $db;

    public function __construct(){
      $this->db = new Database;
    }

  
     // Regsiter user
    public function register($data){
      $this->db->query('INSERT INTO users (fname, lname, username, email, phone, password, country, zipcode, account_type, currency_type, reg_date) VALUES(:fname, :lname, :username, :email, :phone, :password, :country, :zipcode, :account_type, :currency_type, :reg_date)');
      // Bind values
      $this->db->bind(':fname', $data['fname']);
       $this->db->bind(':lname', $data['lname']);
       $this->db->bind(':username', $data['username']);
      $this->db->bind(':email', $data['email']);
      $this->db->bind(':phone', $data['phone']);
      $this->db->bind(':password', $data['password']);
      $this->db->bind(':country', $data['country']);
      $this->db->bind(':zipcode', $data['zipcode']);
      $this->db->bind(':account_type', $data['account_type']);
      $this->db->bind(':currency_type', $data['currency_type']);
       $this->db->bind(':reg_date', $data['reg_date']);

      // Execute
      if($this->db->execute()){ 
        return true;
      } else {
        return false;
      }
    }

    // Login User
    public function login($email, $password){
      $this->db->query('SELECT * FROM e_mandate_accounts WHERE email = :email');
      $this->db->bind(':email', $email);

      $row = $this->db->single();

      $hashed_password = $row->password;
      if(password_verify($password, $hashed_password)){
        return $row;
      } else {
        return false;
      }
    }









    public function findUserByUsername($username){
      $this->db->query('SELECT * FROM e_mandate_accounts WHERE username = :username');
      // Bind value
      $this->db->bind(':username', $username);

      $row = $this->db->single();

      // Check row
      if($this->db->rowCount() > 0){
        return true;
      } else {
        return false;
      }
    }




      // Forget Password
    public function forgetPassword($email){
      $this->db->query('SELECT * FROM e_mandate_accounts WHERE email = :email');
      $this->db->bind(':email', $email);

      $row = $this->db->single();

 
        return $row;
    }




    public function ResetToken($data){
      $this->db->query('UPDATE e_mandate_accounts SET pass_res_token = :pass_res_token  WHERE email = :email');
      // Bind values
      $this->db->bind(':pass_res_token',  $data['pass_res_token']);
      $this->db->bind(':email',  $data['email']);



          // Execute
      if($this->db->execute()){
        return true;
      } else {
        return false;
      }
    }





public function DeleteResetToken($data){
      $this->db->query('UPDATE e_mandate_accounts SET pass_res_token = :empty_token  WHERE email = :email');
      // Bind values
      $this->db->bind(':empty_token',  $data['empty_token']);
      $this->db->bind(':email',  $data['email']);



          // Execute
      if($this->db->execute()){
        return true;
      } else {
        return false;
      }
    }



 

    public function updateUserPassword($data){
      $this->db->query('UPDATE e_mandate_accounts SET password = :password  WHERE email = :email');
      // Bind values
      $this->db->bind(':email',  $data['email']);
      $this->db->bind(':password', $data['password']);
    
      

      // Execute
      if($this->db->execute()){
        return true;
      } else {
        return false;
      }
    }



    public function getUserDetail($pass_res_token){
      $this->db->query('SELECT * FROM e_mandate_accounts WHERE pass_res_token = :pass_res_token');
      $this->db->bind(':pass_res_token', $pass_res_token);

      $row = $this->db->single();

      return $row;
    }







    // Find user by email
    public function findUserByEmail($email){
      $this->db->query('SELECT * FROM e_mandate_accounts WHERE email = :email');
      // Bind value
      $this->db->bind(':email', $email);

      $row = $this->db->single();

      // Check row
      if($this->db->rowCount() > 0){
        return true;
      } else {
        return false;
      }
    }



   
  }