<?php
  class Admin {
    private $db;

    public function __construct(){
      $this->db = new Database;
    }




      public function updateAccoutNoPass($data){
      $this->db->query('UPDATE e_mandate_accounts SET  name = :name, email = :email,  department = :department,  role = :role WHERE id = :id');
      // Bind values
     $this->db->bind(':name', $data['name']);
      $this->db->bind(':email', $data['email']);
      $this->db->bind(':department', $data['department']);
       $this->db->bind(':role', $data['role']);
      $this->db->bind(':id', $data['id']);

     
      

      // Execute
      if($this->db->execute()){
        return true;
      } else {
        return false;
      }
    }


    


      public function UpdateAccountPassword($data){
      $this->db->query('UPDATE e_mandate_accounts SET password = :password , name = :name, email = :email,  department = :department ,  role = :role WHERE id = :id');
      // Bind values
     $this->db->bind(':name', $data['name']);
      $this->db->bind(':email', $data['email']);
      $this->db->bind(':department', $data['department']);
      $this->db->bind(':role', $data['role']);
      $this->db->bind(':password', $data['password']);
      $this->db->bind(':id', $data['id']);

     
      

      // Execute
      if($this->db->execute()){
        return true;
      } else {
        return false;
      }
    }



    // Regsiter user
    public function AddIssuer($data){
      $this->db->query('INSERT INTO issuers_cop_accounts (company, symbol, email, phone, password, website, address, role, reg_date) VALUES(:company, :symbol, :email, :phone, :password, :website, :address, :role, :reg_date)');
      // Bind values
      $this->db->bind(':company', $data['company']);
      $this->db->bind(':symbol', $data['symbol']);
      $this->db->bind(':phone', $data['phone']);
      $this->db->bind(':email', $data['email']);
      $this->db->bind(':password', $data['password']);
      $this->db->bind(':website', $data['website']);
      $this->db->bind(':address', $data['address']);
      $this->db->bind(':role', $data['role']);
       $this->db->bind(':reg_date', $data['reg_date']);

      // Execute
      if($this->db->execute()){
        return true;
      } else {
        return false;
      }
    }



     public function AddIssuerUsername($username, $symbol){
       $this->db->query('UPDATE issuers_cop_accounts SET username = :username WHERE symbol = :symbol');
      // Bind values
      $this->db->bind(':username', $username);
      $this->db->bind(':symbol', $symbol);
     
      

      // Execute
      if($this->db->execute()){
        return true;
      } else {
        return false;
      }
    }





     public function issuerlogoupdate($data){
       $this->db->query('UPDATE issuers_cop_accounts SET logo = :logo WHERE id = :id');
      // Bind values
      $this->db->bind(':logo', $data['logo']);
      $this->db->bind(':id', $data['id']);
     
      

      // Execute
      if($this->db->execute()){
        return true;
      } else {
        return false;
      }
    } 



    public function getUsers(){
      $this->db->query('SELECT *  FROM e_mandate_accounts  ORDER BY id DESC');
      //$this->db->bind(':ref_id', $ref_id);

      

    $results = $this->db->resultSet();

    return $results;

 
  }



    public function deleteUser($id){
      $this->db->query('DELETE FROM e_mandate_accounts WHERE id = :id');
      // Bind values
      $this->db->bind(':id', $id);

      // Execute
      if($this->db->execute()){
        return true;
      } else {
        return false;
      }
    }



    


     // Regsiter user
    public function AddUser($data){
      $this->db->query('INSERT INTO e_mandate_accounts (name, email, department, role, password) VALUES(:name, :email, :department, :role, :password)');
      // Bind values
      
      $this->db->bind(':name', $data['name']);
       $this->db->bind(':email', $data['email']);
      $this->db->bind(':department', $data['department']);
      $this->db->bind(':role', $data['role']);
      $this->db->bind(':password', $data['password']);
      

      // Execute
      if($this->db->execute()){
        return true;
      } else {
        return false;
      }
    }





    public function getLogs(){
      $this->db->query('SELECT *  FROM users_activities  ORDER BY id DESC');
      //$this->db->bind(':ref_id', $ref_id);

      

    $results = $this->db->resultSet();

    return $results;

 
  }







     public function AddClientUsername($username, $email){
       $this->db->query('UPDATE issuers_cop_accounts SET username = :username WHERE email = :email');
      // Bind values
      $this->db->bind(':username', $username);
      $this->db->bind(':email', $email);
     
      

      // Execute
      if($this->db->execute()){
        return true;
      } else {
        return false;
      }
    }




    public function getClients(){
      $this->db->query('SELECT *  FROM issuers_cop_accounts WHERE role = "client" ORDER BY id DESC');
      //$this->db->bind(':ref_id', $ref_id);

      

    $results = $this->db->resultSet();

    return $results;

 
  }



// public function getMsgById($id){
//       $this->db->query('SELECT * FROM issuers_inbox_messages WHERE id = :id');
//       $this->db->bind(':id', $id);

//       $row = $this->db->single();

//       return $row;
//     }



    public function getMsgByCode($msg_code){
      $this->db->query('SELECT * FROM issuers_inbox_messages WHERE msg_code = :msg_code');
      $this->db->bind(':msg_code', $msg_code);

      $row = $this->db->single();

      return $row;
    }




    public function getMsgByCodeSent($msg_code){
      $this->db->query('SELECT * FROM messages WHERE msg_code = :msg_code');
      $this->db->bind(':msg_code', $msg_code);

      $row = $this->db->single();

      return $row;
    }


    public function updateMsgStatus($msg_code, $read){
       $this->db->query('UPDATE issuers_inbox_messages SET read_status = :read WHERE msg_code = :msg_code');
      // Bind values
      $this->db->bind(':msg_code', $msg_code);
      $this->db->bind(':read', $read);
     
     

   // Execute
      if($this->db->execute()){
        return true;
      } else {
        return false;
      }
    }




 public function Totalsent($symbol){
      $this->db->query('SELECT SUM(num) AS totalmsgsent FROM issuers_messages WHERE sender_symbol = :symbol  ');

      $this->db->bind(':symbol', $symbol);

     $results = $this->db->resultSet();

      return $results;
    }




      


    public function Totalinbox($symbol){
      $this->db->query('SELECT SUM(num) AS totalmsginbox FROM issuers_inbox_messages WHERE receiver_symbol = :symbol AND read_status = 1 ');

      $this->db->bind(':symbol', $symbol);

     $results = $this->db->resultSet();

      return $results;
    }

      





    //Add New Properties
      public function SendMessage($data){
      
      $this->db->query('INSERT INTO issuers_messages (subject, message, sender_username, sender_email, sender_symbol, receiver_symbol, msg_date, msg_code) VALUES(:subject, :message, :sender_username, :sender_email, :sender_symbol, :receiver_symbol, :msg_date, :msg_code)');
    
      // Bind Values      
      $this->db->bind(':subject', $data['subject']);
      $this->db->bind(':message', $data['message']);
      $this->db->bind(':sender_username', $data['sender_username']);
      $this->db->bind(':sender_email', $data['sender_email']);
      $this->db->bind(':sender_symbol', $data['sender_symbol']);
      $this->db->bind(':receiver_symbol', $data['receiver_symbol']);
      $this->db->bind(':msg_date', $data['msg_date']);
      $this->db->bind(':msg_code', $data['msg_code']);
      


     
    

      // Execute
      if($this->db->execute()){
        return true;
      }
      else{
        return false;
      }           
            
    }


    //Add New Properties
      public function ReplyMessage($data){
      
      $this->db->query('INSERT INTO issuers_messages (subject, message, sender_username, sender_email, sender_symbol, receiver_username, receiver_symbol , receiver_email ,  msg_date, msg_code) VALUES(:subject, :message, :sender_username, :sender_email, :sender_symbol, :receiver_username, :receiver_symbol , :receiver_email ,  :msg_date, :msg_code)');
    
      // Bind Values      
      $this->db->bind(':subject', $data['subject']);
      $this->db->bind(':message', $data['message']);
      $this->db->bind(':sender_username', $data['sender_username']);
      $this->db->bind(':sender_email', $data['sender_email']);
      $this->db->bind(':sender_symbol', $data['sender_symbol']);
      $this->db->bind(':receiver_username', $data['receiver_username']);
      $this->db->bind(':receiver_symbol', $data['receiver_symbol']);
      $this->db->bind(':receiver_email', $data['receiver_email']);
      $this->db->bind(':msg_date', $data['msg_date']);
      $this->db->bind(':msg_code', $data['reply_msg_code']);
      


     
    

      // Execute
      if($this->db->execute()){
        return true;
      }
      else{
        return false;
      }           
            
    }



    //Add New Properties
      public function SendMessageInbox($data){
      
      $this->db->query('INSERT INTO issuers_inbox_messages (subject, message, sender_username, sender_email, sender_symbol, receiver_symbol, msg_date, msg_code) VALUES(:subject, :message, :sender_username, :sender_email, :sender_symbol, :receiver_symbol,  :msg_date, :msg_code)');
    
      // Bind Values      
      $this->db->bind(':subject', $data['subject']);
      $this->db->bind(':message', $data['message']);
      $this->db->bind(':sender_username', $data['sender_username']);
      $this->db->bind(':sender_email', $data['sender_email']);
      $this->db->bind(':sender_symbol', $data['sender_symbol']);
      $this->db->bind(':receiver_symbol', $data['receiver_symbol']);
      $this->db->bind(':msg_date', $data['msg_date']);
      $this->db->bind(':msg_code', $data['msg_code']);
      


     
    

      // Execute
      if($this->db->execute()){
        return true;
      }
      else{
        return false;
      }           
            
    }



    //Add New Properties
      public function AdminSendMessageInbox($data){
      
      $this->db->query('INSERT INTO issuers_inbox_messages (subject, message, sender_username, sender_email, sender_symbol, receiver_symbol, msg_date, msg_code) VALUES(:subject, :message, :sender_username, :sender_email, :sender_symbol, :receiver_symbol,  :msg_date, :msg_code)');
    
      // Bind Values      
      $this->db->bind(':subject', $data['subject']);
      $this->db->bind(':message', $data['message']);
      $this->db->bind(':sender_username', $data['sender_username']);
      $this->db->bind(':sender_email', $data['sender_email']);
      $this->db->bind(':sender_symbol', $data['sender_symbol']);
      $this->db->bind(':receiver_symbol', $data['receiver_symbol']);
      $this->db->bind(':msg_date', $data['msg_date']);
      $this->db->bind(':msg_code', $data['msg_code']);
      


     
    

      // Execute
      if($this->db->execute()){
        return true;
      }
      else{
        return false;
      }           
            
    }



    //Add New Properties
      public function ReplyMessageInbox($data){
      
      $this->db->query('INSERT INTO issuers_inbox_messages (subject, message, sender_username, sender_email, sender_symbol, receiver_username, receiver_symbol , receiver_email ,  msg_date, msg_code) VALUES(:subject, :message, :sender_username, :sender_email, :sender_symbol, :receiver_username, :receiver_symbol , :receiver_email , :msg_date, :msg_code)');
    
      // Bind Values      
      $this->db->bind(':subject', $data['subject']);
      $this->db->bind(':message', $data['message']);
      $this->db->bind(':sender_username', $data['sender_username']);
      $this->db->bind(':sender_email', $data['sender_email']);
      $this->db->bind(':sender_symbol', $data['sender_symbol']);
      $this->db->bind(':receiver_username', $data['receiver_username']);
      $this->db->bind(':receiver_symbol', $data['receiver_symbol']);
      $this->db->bind(':receiver_email', $data['receiver_email']);
      $this->db->bind(':msg_date', $data['msg_date']);
      $this->db->bind(':msg_code', $data['reply_msg_code']);
      


     
    

      // Execute
      if($this->db->execute()){
        return true;
      }
      else{
        return false;
      }           
            
    }




 public function deleteMessageinbox($msg_code){
      $this->db->query('DELETE FROM issuers_inbox_messages WHERE msg_code = :msg_code');
      // Bind values
      $this->db->bind(':msg_code', $msg_code);

      // Execute
      if($this->db->execute()){
        return true;
      } else {
        return false;
      }
    }


    public function deleteMessagesent($msg_code){
      $this->db->query('DELETE FROM issuers_messages WHERE msg_code = :msg_code');
      // Bind values
      $this->db->bind(':msg_code', $msg_code);

      // Execute
      if($this->db->execute()){
        return true;
      } else {
        return false;
      }
    }




   





      public function getReport($symbol){ 
      $this->db->query('SELECT data.`TO ACCOUNT` AS BUYER_ACCOUNT , data.`TO MEMBER` AS TO_MEMBER , data.`FROM MEMBER` AS FROM_MEMBER , data.`VOLUME` AS VOLUME, data.`TRADE DATE` AS TRADE_DATE , data.`PRICE` AS PRICE    , smsNewAccount.SHAREHOLDERSNAME AS BUYER_NAME  ,
      data.`FROM ACCOUNT`  AS SELLER_ACCOUNT , smsNewAccount2.SHAREHOLDERSNAME AS SELLER_NAME
      FROM data
        INNER JOIN smsNewAccount ON data.`TO ACCOUNT` = smsNewAccount.ACCOUNTNUMBER
           INNER JOIN smsNewAccount2 ON data.`FROM ACCOUNT` = smsNewAccount2.ACCOUNTNUMBER
         WHERE data.SYMBOL=:symbol ORDER BY id DESC');

      
           // WHERE data.SYMBOL='SDCSCSPLC'

      // Bind Values
      $this->db->bind(':symbol', $symbol);

      $results = $this->db->resultSet();

      return $results;
    }


      public function SentMsg($symbol){
      $this->db->query('SELECT *  FROM issuers_messages WHERE sender_symbol = :symbol ORDER BY id DESC');

      // Bind Values
      $this->db->bind(':symbol', $symbol);

      $results = $this->db->resultSet();

      return $results;
    }



 public function InboxMsg($symbol){
      $this->db->query('SELECT *  FROM issuers_inbox_messages WHERE receiver_symbol = :symbol ORDER BY id DESC');

      // Bind Values
      $this->db->bind(':symbol', $symbol);

      $results = $this->db->resultSet();

      return $results;
    }


   public function getNews(){
      $this->db->query('SELECT *  FROM issuers_blog ORDER BY id DESC');
      //$this->db->bind(':ref_id', $ref_id);

      

    $results = $this->db->resultSet();

    return $results;

 
  }



  public function updateNews($data){
      $this->db->query('UPDATE issuers_blog SET page_title = :page_title,  page_content = :page_content WHERE id = :id');
      // Bind values
         $this->db->bind(':id',  $data['id']);
         $this->db->bind(':page_title',  $data['page_title']);
         $this->db->bind(':page_content', $data['page_content']);
     
      

      // Execute
      if($this->db->execute()){
        return true;
      } else {
        return false;
      }
    }







  public function getNewsById($id){
      $this->db->query('SELECT * FROM issuers_blog WHERE id = :id ' );
      $this->db->bind(':id', $id);

      $row = $this->db->single();

      return $row;
    }


     public function getannual_reports(){
      $this->db->query('SELECT *  FROM issuers_annual_report ORDER BY id DESC');
      //$this->db->bind(':ref_id', $ref_id);

      

    $results = $this->db->resultSet();

    return $results;

 
  }



   public function getfinancial_statements(){
      $this->db->query('SELECT *  FROM issuers_fin_statement ORDER BY id DESC');
      //$this->db->bind(':ref_id', $ref_id);

      

    $results = $this->db->resultSet();

    return $results;

 
  }


    public function deleteNews($id){
      $this->db->query('DELETE FROM issuers_blog WHERE id = :id');
      // Bind values
      $this->db->bind(':id', $id);

      // Execute
      if($this->db->execute()){
        return true;
      } else {
        return false;
      }
    }




    public function AddNews($data){
      
      $this->db->query('INSERT INTO issuers_blog (page_title, page_content, picture, date_published) VALUES(:page_title, :page_content, :picture, :date_published)');
      // Bind Values      
     
      $this->db->bind(':picture', $data['picture']);
      $this->db->bind(':page_title', $data['page_title']);
      $this->db->bind(':page_content', $data['page_content']);
       $this->db->bind(':date_published', $data['date_published']);
       
           

      // Execute
      if($this->db->execute()){
        return true;
      }
      else{
        return false;
      }     
            
    }


     public function UpdateNewsPic($data){
      
      $this->db->query('UPDATE issuers_blog SET picture = :picture WHERE id = :id');
      // Bind Values      
     
      $this->db->bind(':id', $data['id']);
      $this->db->bind(':picture', $data['picture']);
     
       
           

      // Execute
      if($this->db->execute()){
        return true;
      }
      else{
        return false;
      }     
            
    }





    public function CloseDeal(){
      $this->db->query('SELECT `TRADE DATE` AS   TRADE_DATE, `PRICE` AS Price  FROM data');
      // $this->db->bind(':symbol', $symbol);

      $results = $this->db->resultSet();

    return $results;

 
  }


    public function GetAllIssuers(){
      $this->db->query('SELECT COUNT(id) AS TotalIssuers FROM issuers_cop_accounts ');

      // Bind Values
     

      $row = $this->db->single();
      
      if($this->db->rowCount() > 0){
        return $row;
      } else {
        return 0;
      }
    }



    public function GetAllannualReports(){
      $this->db->query('SELECT COUNT(id) AS TotalannualReports FROM issuers_annual_report ');

      // Bind Values
     

      $row = $this->db->single();
      
      if($this->db->rowCount() > 0){
        return $row;
      } else {
        return 0;
      }
    }




    public function GetAllfinancialStatement(){
      $this->db->query('SELECT COUNT(id) AS TotalfinancialStatement FROM issuers_fin_statement ');

      // Bind Values
     

      $row = $this->db->single();
      
      if($this->db->rowCount() > 0){
        return $row;
      } else {
        return 0;
      }
    }



// Regsiter user
    public function AddRole($data){
      $this->db->query('INSERT INTO roles (role_title, reg_date) VALUES(:role_title, :reg_date)');
      // Bind values
      $this->db->bind(':role_title', $data['role_title']);
       $this->db->bind(':reg_date', $data['reg_date']);

      // Execute
      if($this->db->execute()){
        return true;
      } else {
        return false;
      }
    }

  


public function getRoles(){
      $this->db->query('SELECT *  FROM roles ORDER BY id DESC');
      //$this->db->bind(':ref_id', $ref_id);

      

    $results = $this->db->resultSet();

    return $results;

 
  }



   public function updateRole($data){
      $this->db->query('UPDATE roles SET role_title = :role_title  WHERE id = :id');
      // Bind values
      $this->db->bind(':role_title',  $data['role_title']);
      $this->db->bind(':id',  $data['id']);
     
      

      // Execute
      if($this->db->execute()){
        return true;
      } else {
        return false;
      }
    }


   public function deleteRole($id){
      $this->db->query('DELETE FROM roles WHERE id = :id');
      // Bind values
      $this->db->bind(':id', $id);

      // Execute
      if($this->db->execute()){
        return true;
      } else {
        return false;
      }
    }


    


   // Find user by Symbol
    public function findUserBySymbol($symbol){
      $this->db->query('SELECT * FROM issuers_cop_accounts WHERE symbol = :symbol');
      // Bind value
      $this->db->bind(':symbol', $symbol);

      $row = $this->db->single();

      // Check row
      if($this->db->rowCount() > 0){
        return true;
      } else {
        return false;
      }
    }



   // Find user by email
    public function findClientByEmail($email){
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



    // Find user by email
    public function findUserByEmail($email){
      $this->db->query('SELECT * FROM issuers_cop_accounts WHERE email = :email');
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







// Find role by name
    public function findRoleByName($role_title){
      $this->db->query('SELECT * FROM roles WHERE role_title = :role_title');
      // Bind value
      $this->db->bind(':role_title', $role_title);

      $row = $this->db->single();

      // Check row
      if($this->db->rowCount() > 0){
        return true;
      } else {
        return false;
      }
    }


   

  }