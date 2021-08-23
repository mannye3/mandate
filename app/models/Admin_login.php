<?php
  class Admin_login {
    private $db;

    public function __construct(){
      $this->db = new Database;
    }

    
    // Login Admin
    public function login($admin_name, $password){
      $this->db->query('SELECT * FROM e_mandae_admin WHERE admin_name = :admin_name');
      $this->db->bind(':admin_name', $admin_name);

      $row = $this->db->single();

      $hashed_password = $row->password;
      if(password_verify($password, $hashed_password)){
        return $row;
      } else {
        return false;
      }
    }




      // Forget Password
    public function forgetPassword($admin_name){
      $this->db->query('SELECT * FROM e_mandae_admin WHERE admin_name = :admin_name');
      $this->db->bind(':admin_name', $admin_name);

      $row = $this->db->single();

 
        return $row;
    }




    // Find user by admin_name
    public function findAdminByadmin_name($admin_name){
      $this->db->query('SELECT * FROM e_mandae_admin WHERE admin_name = :admin_name');
      // Bind value
      $this->db->bind(':admin_name', $admin_name);

      $row = $this->db->single();

      // Check row
      if($this->db->rowCount() > 0){
        return true;
      } else {
        return false;
      }
    }



    public function findUserByPhone($phone){
      $this->db->query('SELECT * FROM e_mandae_admin WHERE phone = :phone');
      // Bind value
      $this->db->bind(':phone', $phone);

      $row = $this->db->single();

      // Check row
      if($this->db->rowCount() > 0){
        return true;
      } else {
        return false;
      }
    }



     public function getUserDetail($admin_name){
      $this->db->query('SELECT * FROM e_mandae_admin WHERE admin_name = :admin_name');
      $this->db->bind(':admin_name', $admin_name);

      $row = $this->db->single();

      return $row;
    }



    public function updateUserPassword($data){
      $this->db->query('UPDATE e_mandae_admin SET password = :password  WHERE admin_name = :admin_name');
      // Bind values
      $this->db->bind(':admin_name',  $data['admin_name']);
      $this->db->bind(':password', $data['password']);
    
      

      // Execute
      if($this->db->execute()){
        return true;
      } else {
        return false;
      }
    }




   
  }