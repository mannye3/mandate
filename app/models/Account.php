<?php
  class Account {
    private $db;

    public function __construct(){
      $this->db = new Database;
    }

     public function getFeeYear($mandate_code,$current_year,$fee_cod_c){
      $this->db->query('SELECT * FROM mandate_payment  WHERE fee_code =:fee_cod_c AND issued_year = :current_year 
        AND mandate_code = :mandate_code');

      $this->db->bind(':mandate_code', $mandate_code);
       $this->db->bind(':current_year', $current_year);
       $this->db->bind(':fee_cod_c', $fee_cod_c);

      $row = $this->db->single();

      return $row;
    }




      public function getFeeYear2($mandate_code,$current_year,$fee_cod_c2){
      $this->db->query('SELECT * FROM mandate_payment  WHERE fee_code =:fee_cod_c2 AND issued_year = :current_year 
        AND mandate_code = :mandate_code');

      $this->db->bind(':mandate_code', $mandate_code);
       $this->db->bind(':current_year', $current_year);
       $this->db->bind(':fee_cod_c2', $fee_cod_c2);

      $row = $this->db->single();

      return $row;
    }





    public function getFeeYear4($mandate_code,$current_year,$fee_cod_c4){
      $this->db->query('SELECT * FROM mandate_payment  WHERE fee_code =:fee_cod_c4 AND issued_year = :current_year 
        AND mandate_code = :mandate_code');

      $this->db->bind(':mandate_code', $mandate_code);
       $this->db->bind(':current_year', $current_year);
       $this->db->bind(':fee_cod_c4', $fee_cod_c4);

      $row = $this->db->single();

      return $row;
    }





    public function getFeeYear5($mandate_code,$current_year,$fee_cod_c5){
      $this->db->query('SELECT * FROM mandate_payment  WHERE fee_code =:fee_cod_c5 AND issued_year = :current_year 
        AND mandate_code = :mandate_code');

      $this->db->bind(':mandate_code', $mandate_code);
       $this->db->bind(':current_year', $current_year);
       $this->db->bind(':fee_cod_c5', $fee_cod_c5);

      $row = $this->db->single();

      return $row;
    }





    public function getFeeYear6($mandate_code,$current_year,$fee_cod_c6){
      $this->db->query('SELECT * FROM mandate_payment  WHERE fee_code =:fee_cod_c6 AND issued_year = :current_year 
        AND mandate_code = :mandate_code');

      $this->db->bind(':mandate_code', $mandate_code);
       $this->db->bind(':current_year', $current_year);
       $this->db->bind(':fee_cod_c6', $fee_cod_c6);

      $row = $this->db->single();

      return $row;
    }





    public function getTotatalTrader($mandate_code){
      $this->db->query('SELECT COUNT(id) AS TotalTraders FROM traders WHERE mandate_code = :mandate_code');

      $this->db->bind(':mandate_code', $mandate_code);
      

      $row = $this->db->single();

      return $row;
    }



    public function TotalPaidTrader($mandate_code,$current_year,$fee_cod_c3){
      $this->db->query('SELECT SUM(qty) AS TotalTraderPaid, issued_year AS Trader FROM mandate_payment  WHERE 
        issued_year = :current_year AND  mandate_code = :mandate_code AND fee_code = :fee_cod_c3');

      $this->db->bind(':mandate_code', $mandate_code);
      $this->db->bind(':current_year', $current_year);
      $this->db->bind(':fee_cod_c3', $fee_cod_c3);
      
      $row = $this->db->single();


      return $row;
    }





 

    public function TotalFeeBD($mandate_code,$fee_cod_c){
      $this->db->query('SELECT SUM(amount) AS TotalAmountBD FROM mandate_payment  WHERE fee_code = :fee_cod_c');

      $this->db->bind(':fee_cod_c', $fee_cod_c);

      $row = $this->db->single();

      return $row;
    }



    public function TotalFeePM($mandate_code,$fee_cod_c2){
      $this->db->query('SELECT SUM(amount) AS TotalAmountPM FROM mandate_payment  WHERE fee_code = :fee_cod_c2');

      $this->db->bind(':fee_cod_c2', $fee_cod_c2);

      $row = $this->db->single();

      return $row;
    }


    public function TotalFeeTF($mandate_code,$fee_cod_c3){
      $this->db->query('SELECT SUM(amount) AS TotalAmountTF FROM mandate_payment  WHERE fee_code = :fee_cod_c3');

      $this->db->bind(':fee_cod_c3', $fee_cod_c3);

      $row = $this->db->single();

      return $row;
    }



  public function TotalFeeBF($mandate_code,$fee_cod_c4){
      $this->db->query('SELECT SUM(amount) AS TotalAmountBF FROM mandate_payment  WHERE fee_code = :fee_cod_c4');

      $this->db->bind(':fee_cod_c4', $fee_cod_c4);

      $row = $this->db->single();

      return $row;
    }






    public function TotalFeeIS($mandate_code,$fee_cod_c5){
      $this->db->query('SELECT SUM(amount) AS TotalAmountIS FROM mandate_payment  WHERE fee_code = :fee_cod_c5');

      $this->db->bind(':fee_cod_c5', $fee_cod_c5);

      $row = $this->db->single();

      return $row;
    }



 public function TotalFeeSH($mandate_code,$fee_cod_c6){
      $this->db->query('SELECT SUM(amount) AS TotalAmountSH FROM mandate_payment  WHERE fee_code = :fee_cod_c6');

      $this->db->bind(':fee_cod_c6', $fee_cod_c6);

      $row = $this->db->single();

      return $row;
    }







    public function AllTotalBFAmount($fee_cod_c){
      $this->db->query('SELECT SUM(amount) AS TotalAllBD FROM mandate_payment WHERE fee_code = :fee_cod_c');

      $this->db->bind(':fee_cod_c', $fee_cod_c);

      $row = $this->db->single();

      return $row;
    }



    public function AllTotalPFAmount($fee_cod_c2){
      $this->db->query('SELECT SUM(amount) AS TotalAllPF FROM mandate_payment WHERE fee_code = :fee_cod_c2');

      $this->db->bind(':fee_cod_c2', $fee_cod_c2);

      $row = $this->db->single();

      return $row;
    }




    public function AllTotalTFAmount($fee_cod_c3){
      $this->db->query('SELECT SUM(amount) AS TotalAllTF FROM mandate_payment WHERE fee_code = :fee_cod_c3');

         $this->db->bind(':fee_cod_c3', $fee_cod_c3);
      $row = $this->db->single();

      return $row;
    }




    public function AllTotalDPAmount($fee_cod_c6){
      $this->db->query('SELECT SUM(amount) AS TotalAllDP FROM mandate_payment WHERE fee_code = :fee_cod_c6');

         $this->db->bind(':fee_cod_c6', $fee_cod_c6);
      $row = $this->db->single();

      return $row;
    }


     public function AllTotalDPYear($fee_cod_c6,$current_year){
      $this->db->query('SELECT SUM(amount) AS TotalY4 FROM mandate_payment
                        WHERE fee_code = :fee_cod_c6 AND  issued_year = :current_year');

         $this->db->bind(':fee_cod_c6', $fee_cod_c6);
         $this->db->bind(':current_year', $current_year);
      $row = $this->db->single();

      return $row;
    }











     public function AllTotalBDYear($fee_cod_c,$current_year){
      $this->db->query('SELECT SUM(amount) AS TotalY1 FROM mandate_payment
                        WHERE fee_code = :fee_cod_c AND  issued_year = :current_year');

         $this->db->bind(':fee_cod_c', $fee_cod_c);
         $this->db->bind(':current_year', $current_year);
      $row = $this->db->single();

      return $row;
    }






    public function AllTotalPMYear($fee_cod_c2,$current_year){
      $this->db->query('SELECT SUM(amount) AS TotalY2 FROM mandate_payment
                        WHERE fee_code = :fee_cod_c2 AND  issued_year = :current_year');

         $this->db->bind(':fee_cod_c2', $fee_cod_c2);
         $this->db->bind(':current_year', $current_year);
      $row = $this->db->single();

      return $row;
    }



    public function AllTotalTFYear($fee_cod_c3,$current_year){
      $this->db->query('SELECT SUM(amount) AS TotalY3 FROM mandate_payment
                        WHERE fee_code = :fee_cod_c3 AND  issued_year = :current_year');

         $this->db->bind(':fee_cod_c3', $fee_cod_c3);
         $this->db->bind(':current_year', $current_year);
      $row = $this->db->single();

      return $row;
    }






    public function AllTotalTFweek2($fee_code2){
      $this->db->query('SELECT SUM(amount) AS Totalw2 FROM mandate_payment
                        WHERE fee_code = :fee_code2 AND YEARWEEK(issued_date) = YEARWEEK(NOW() - INTERVAL 0 WEEK)');

         $this->db->bind(':fee_code2', $fee_code2);
        $row = $this->db->single();

      return $row;
    }



    public function AllTotalTFweek3($fee_code3){
      $this->db->query('SELECT SUM(amount) AS Totalw3 FROM mandate_payment
                        WHERE fee_code = :fee_code3 AND YEARWEEK(issued_date) = YEARWEEK(NOW() - INTERVAL 0 WEEK)');

         $this->db->bind(':fee_code3', $fee_code3);
      $row = $this->db->single();

      return $row;
    }




     public function AllTotalTFmonth1($fee_code1){
      $this->db->query('SELECT SUM(amount) AS Totalm1 FROM mandate_payment
                        WHERE  fee_code = :fee_code1 AND `issued_date` >= DATE_SUB(CURDATE(), INTERVAL 30 DAY)');

         $this->db->bind(':fee_code1', $fee_code1);
      $row = $this->db->single();

      return $row;
    }



    public function AllTotalTFmonth2($fee_code2){
      $this->db->query('SELECT SUM(amount) AS Totalm2 FROM mandate_payment
                        WHERE fee_code = :fee_code2 AND `issued_date` >= DATE_SUB(CURDATE(), INTERVAL 30 DAY)');

         $this->db->bind(':fee_code2', $fee_code2);
      $row = $this->db->single();

      return $row;
    }




    public function AllTotalTFmonth3($fee_code3){
      $this->db->query('SELECT SUM(amount) AS Totalm3 FROM mandate_payment
                        WHERE fee_code = :fee_code3 AND `issued_date` >= DATE_SUB(CURDATE(), INTERVAL 30 DAY)');

         $this->db->bind(':fee_code3', $fee_code3);    
      $row = $this->db->single();

      return $row;
    }







    public function getManagerRoles(){
      $this->db->query('SELECT  * FROM positions');

      $results = $this->db->resultSet();

      return $results;
    }




public function getCatList(){
      $this->db->query('SELECT  * FROM account_categories');

      $results = $this->db->resultSet();

      return $results;
    }






    public function getCat(){
      $this->db->query('SELECT *  FROM account_categories ORDER BY id DESC');
      //$this->db->bind(':ref_id', $ref_id);

      

    $results = $this->db->resultSet();

    return $results;

 
  }


    // Regsiter Category
    public function AddCat($data){
      $this->db->query('INSERT INTO account_categories (cat_title, cat_code) VALUES(:cat_title, :cat_code)');
      // Bind values
      
      $this->db->bind(':cat_title', $data['cat_title']);
      $this->db->bind(':cat_code', $data['cat_code']);
     
      

      // Execute
      if($this->db->execute()){
        return true;
      } else {
        return false;
      }
    }



    public function updateCat($data){
      $this->db->query('UPDATE account_categories SET cat_title = :cat_title WHERE id = :id');
      // Bind values
      $this->db->bind(':cat_title',  $data['cat_title']);

      $this->db->bind(':id',  $data['id']);
     
      

      // Execute
      if($this->db->execute()){
        return true;
      } else {
        return false;
      }
    }




    public function deleteCat($id){
      $this->db->query('DELETE FROM account_categories WHERE id = :id');
      // Bind values
      $this->db->bind(':id', $id);

      // Execute
      if($this->db->execute()){
        return true;
      } else {
        return false;
      }
    }






     public function getFees(){
      $this->db->query('SELECT *  FROM mandates_fees ORDER BY id DESC');
      //$this->db->bind(':ref_id', $ref_id);

      

    $results = $this->db->resultSet();

    return $results;

 
  }



 public function getCart($mandate_code){
      $this->db->query('SELECT *  FROM mandate_cart  WHERE mandate_code =  :mandate_code ORDER BY id DESC');
     $this->db->bind(':mandate_code', $mandate_code);

      

    $results = $this->db->resultSet();

    return $results;

 
  }




      public function TotalCart($mandate_code){
      $this->db->query('SELECT SUM(total_cart_amount) AS total_cart FROM mandate_cart
      WHERE mandate_code =  :mandate_code ' );

      $this->db->bind(':mandate_code', $mandate_code);
  


      $row = $this->db->single();

      return $row;
    }



 public function TotalAccountAmount($mandate_code){
      $this->db->query('SELECT SUM(amount) AS total_acc_amount FROM mandate_account_payment
      WHERE mandate_code =  :mandate_code ' );

      $this->db->bind(':mandate_code', $mandate_code);
  


      $row = $this->db->single();

      return $row;
    }



     public function TotalCreditAmount($mandate_code){
      $this->db->query('SELECT SUM(amount) AS total_credit_amount FROM mandate_credit
      WHERE mandate_code =  :mandate_code ' );

      $this->db->bind(':mandate_code', $mandate_code);
  


      $row = $this->db->single();

      return $row;
    }



    public function TotalAccountCredit($mandate_code){
      $this->db->query('SELECT *  FROM mandate_credit
      WHERE mandate_code =  :mandate_code ' );

      $this->db->bind(':mandate_code', $mandate_code);
  


      $row = $this->db->single();

      return $row;
    }



      public function SelectCredit($mandate_code){ 
      $this->db->query(' SELECT  * FROM mandate_credit  WHERE mandate_code = :mandate_code ');         
      // Bind Values
      $this->db->bind(':mandate_code', $mandate_code);

       $row = $this->db->single();

          return $row;
        }





    // Regsiter Category
    public function AddCredit($mandate_code,$t_sum_credit_total){
      $this->db->query('INSERT INTO mandate_credit (mandate_code, amount) VALUES(:mandate_code, :t_sum_credit_total)');
      // Bind values
      
      $this->db->bind(':t_sum_credit_total', $t_sum_credit_total);
      $this->db->bind(':mandate_code', $mandate_code);
    
      

      // Execute
      if($this->db->execute()){
        return true;
      } else {
        return false;
      }
    }



    






     public function UpdateCredit($mandate_code,$t_sum_credit_total){
      $this->db->query('UPDATE mandate_credit SET amount = :t_sum_credit_total  WHERE mandate_code = :mandate_code');
      // Bind values
      $this->db->bind(':mandate_code',  $mandate_code);
      $this->db->bind(':t_sum_credit_total',  $t_sum_credit_total);
     
      

      // Execute
      if($this->db->execute()){
        return true;
      } else {
        return false;
      }
    }




  // Regsiter Category
    public function AddFee($data){
      $this->db->query('INSERT INTO mandates_fees (fee_title, amount, renewal_status, fee_code) VALUES(:fee_title, :amount, :renewal_status, :fee_code)');
      // Bind values
      
      $this->db->bind(':fee_title', $data['fee_title']);
      $this->db->bind(':amount', $data['amount']);
      $this->db->bind(':fee_code', $data['fee_code']);
      $this->db->bind(':renewal_status', $data['renewal_status']);
      

      // Execute
      if($this->db->execute()){
        return true;
      } else {
        return false;
      }
    }




      public function updateFee($data){
      $this->db->query('UPDATE mandates_fees SET fee_title = :fee_title, amount = :amount, renewal_status = :renewal_status  WHERE id = :id');
      // Bind values
      $this->db->bind(':fee_title',  $data['fee_title']);
      $this->db->bind(':amount',  $data['amount']);
      $this->db->bind(':id',  $data['id']);
      $this->db->bind(':renewal_status', $data['renewal_status']);
     
      

      // Execute
      if($this->db->execute()){
        return true;
      } else {
        return false;
      }
    }






    public function getPositions(){
      $this->db->query('SELECT *  FROM positions ORDER BY id DESC');
      //$this->db->bind(':ref_id', $ref_id);

      $results = $this->db->resultSet();

    return $results;

 
  }



  // Regsiter Category
    public function AddPosition($data){
      $this->db->query('INSERT INTO positions (position_title) VALUES(:position_title)');
      // Bind values
      
      $this->db->bind(':position_title', $data['position_title']);
      

      // Execute
      if($this->db->execute()){
        return true;
      } else {
        return false;
      }
    }




      public function updatePosition($data){
      $this->db->query('UPDATE positions SET position_title = :position_title  WHERE id = :id');
      // Bind values
      $this->db->bind(':position_title',  $data['position_title']);
      $this->db->bind(':id',  $data['id']);
     
      

      // Execute
      if($this->db->execute()){
        return true;
      } else {
        return false;
      }
    }







  public function findFeeByCode($fee_code){ 
      $this->db->query(' SELECT  * FROM mandates_fees  WHERE fee_code = :fee_code ');         
      // Bind Values
      $this->db->bind(':fee_code', $fee_code);

       $row = $this->db->single();

          return $row;
        }





  public function findFeeByCodeCart($fee_code){ 
      $this->db->query(' SELECT  * FROM mandate_cart  WHERE fee_code = :fee_code ');         
      // Bind Values
      $this->db->bind(':fee_code', $fee_code);

       $row = $this->db->single();

          return $row;
        }



         // ANNUAL FEE PLATFORM MAINTENANCE 
    public function findFeeByCodePayment($mandate_code,$fee_code){
      $this->db->query('SELECT  * FROM mandate_payment  WHERE mandate_code = :mandate_code AND fee_code = :fee_code ');

      $this->db->bind(':mandate_code', $mandate_code);
      $this->db->bind(':fee_code', $fee_code);

      $row = $this->db->single();

      return $row;
    }




   public function findMandateFeeByCode($fee_cod_c){ 
      $this->db->query(' SELECT  * FROM mandates_fees  WHERE fee_code = :fee_cod_c ');         
      // Bind Values
      $this->db->bind(':fee_cod_c', $fee_cod_c);

       $row = $this->db->single();

          return $row;
        }



        public function findMandateFeeByCode2($fee_cod_c2){ 
      $this->db->query(' SELECT  * FROM mandates_fees  WHERE fee_code = :fee_cod_c2 ');         
      // Bind Values
      $this->db->bind(':fee_cod_c2', $fee_cod_c2);

       $row = $this->db->single();

          return $row;
        }



        public function findMandateFeeByCode3($fee_cod_c3){ 
      $this->db->query(' SELECT  * FROM mandates_fees  WHERE fee_code = :fee_cod_c3 ');         
      // Bind Values
      $this->db->bind(':fee_cod_c3', $fee_cod_c3);

       $row = $this->db->single();

          return $row;
        }


      public function findMandateFeeByCode4($fee_cod_c4){ 
      $this->db->query(' SELECT  * FROM mandates_fees  WHERE fee_code = :fee_cod_c4 ');         
      // Bind Values
      $this->db->bind(':fee_cod_c4', $fee_cod_c4);

       $row = $this->db->single();

          return $row;
        }




         public function findMandateFeeByCode5($fee_cod_c5){ 
      $this->db->query(' SELECT  * FROM mandates_fees  WHERE fee_code = :fee_cod_c5 ');         
      // Bind Values
      $this->db->bind(':fee_cod_c5', $fee_cod_c5);

       $row = $this->db->single();

          return $row;
        }








         public function Updateamount($amount,$tran_code){
      $this->db->query('UPDATE mandate_payment SET amount = :amount, tran_code = :tran_code  WHERE tran_code = :tran_code');
      // Bind values
      $this->db->bind(':amount',  $amount);
      $this->db->bind(':tran_code',  $tran_code);
    
      // Execute
      if($this->db->execute()){
        return true;
      } else {
        return false;
      }
    }





    public function deleteFee($id){
      $this->db->query('DELETE FROM mandates_fees WHERE id = :id');
      // Bind values
      $this->db->bind(':id', $id);

      // Execute
      if($this->db->execute()){
        return true;
      } else {
        return false;
      }
    }










      // Update 
    public function addGallery($data){
      
      $this->db->query('INSERT INTO mandate_doc  (files, doc_name,  mandate_code) VALUES(:files, :doc_name, :mandate_code)');
      // Bind Values      
     
      $this->db->bind(':files', $data['files']);
      $this->db->bind(':mandate_code', $data['mandate_code']);
      $this->db->bind(':doc_name', $data['doc_name']);
     
   
            

      // Execute
      if($this->db->execute()){
        return true;
      }
      else{
        return false;
      }     
            
    }




    public function deleteFile($id){
      $this->db->query('UPDATE mandate_doc SET status = 0 WHERE id = :id');
      // Bind values
      $this->db->bind(':id', $id); 

      // Execute
      if($this->db->execute()){
        return true;
      } else {
        return false;
      }
    }




      public function restoreFile($id){
      $this->db->query('UPDATE mandate_doc SET status = 1 WHERE id = :id');
      // Bind values
      $this->db->bind(':id', $id); 

      // Execute
      if($this->db->execute()){
        return true;
      } else {
        return false;
      }
    }





    public function getFileByCode($id){
      $this->db->query('SELECT * FROM mandate_doc WHERE id = :id');
      $this->db->bind(':id', $id);

      $row = $this->db->single();

      return $row;
    }




     //Add New Mandate
      public function AddMandate($data){
      
      $this->db->query('INSERT INTO mandates (company_name, category, phone, email, address, website, rec_number, date_of_incorporation, sec_registered, principal_contact_name, principal_contact_phone, principal_contact_email, enquiries_contact_name, enquiries_contact_phone, enquiries_contact_email, compliance_contact_name, compliance_contact_phone, compliance_contact_email, settlement_bank_name, settlement_bank_account_number, settlement_bank_branch, settlement_bank_account_name, mandate_code, mandate_status) VALUES(:company_name, :category, :phone, :email, :address, :website, :rec_number, :date_of_incorporation, :sec_registered, :principal_contact_name, :principal_contact_phone, :principal_contact_email, :enquiries_contact_name, :enquiries_contact_phone, :enquiries_contact_email, :compliance_contact_name, :compliance_contact_phone, :compliance_contact_email, :settlement_bank_name, :settlement_bank_account_number, :settlement_bank_branch, :settlement_bank_account_name, :mandate_code, :mandate_status)');
    
      // Bind Values      
      $this->db->bind(':company_name', $data['company_name']);
      $this->db->bind(':category', $data['category']);
      $this->db->bind(':phone', $data['phone']);
      $this->db->bind(':email', $data['email']);
      $this->db->bind(':address', $data['address']);
      $this->db->bind(':website', $data['website']);
      $this->db->bind(':rec_number', $data['rec_number']);
      $this->db->bind(':date_of_incorporation', $data['date_of_incorporation']);
      $this->db->bind(':sec_registered', $data['sec_registered']);
      $this->db->bind(':principal_contact_name', $data['principal_contact_name']);
      $this->db->bind(':principal_contact_phone', $data['principal_contact_phone']);
      $this->db->bind(':principal_contact_email', $data['principal_contact_email']);
      $this->db->bind(':enquiries_contact_name', $data['enquiries_contact_name']);
      $this->db->bind(':enquiries_contact_phone', $data['enquiries_contact_phone']);
      $this->db->bind(':enquiries_contact_email', $data['enquiries_contact_email']);
      $this->db->bind(':compliance_contact_name', $data['compliance_contact_name']);
      $this->db->bind(':compliance_contact_phone', $data['compliance_contact_phone']);
      $this->db->bind(':compliance_contact_email', $data['compliance_contact_email']);
      $this->db->bind(':settlement_bank_name', $data['settlement_bank_name']);
      $this->db->bind(':settlement_bank_account_number', $data['settlement_bank_account_number']);
      $this->db->bind(':settlement_bank_branch', $data['settlement_bank_branch']);
      $this->db->bind(':settlement_bank_account_name', $data['settlement_bank_account_name']);

      $this->db->bind(':mandate_code', $data['mandate_code']);
      $this->db->bind(':mandate_status', $data['mandate_status']);
      


     
    

      // Execute
      if($this->db->execute()){
        return true;
      }
      else{
        return false;
      }           
            
    }



     public function UpdateMandate($data){
      $this->db->query('UPDATE mandates SET company_name = :company_name, category = :category, phone = :phone,  email = :email, address = :address, website = :website, rec_number = :rec_number, date_of_incorporation = :date_of_incorporation, sec_registered = :sec_registered, principal_contact_name = :principal_contact_name,principal_contact_phone = :principal_contact_phone, principal_contact_email = :principal_contact_email, enquiries_contact_name = :enquiries_contact_name, enquiries_contact_phone = :enquiries_contact_phone, enquiries_contact_email = :enquiries_contact_email, compliance_contact_name = :compliance_contact_name, compliance_contact_phone = :compliance_contact_phone, compliance_contact_email = :compliance_contact_email, settlement_bank_name = :settlement_bank_name, settlement_bank_account_number = :settlement_bank_account_number,   settlement_bank_branch = :settlement_bank_branch, settlement_bank_account_name = :settlement_bank_account_name,
       mandate_code = :mandate_code2  WHERE mandate_code = :mandate_code');

       // Bind Values      
      $this->db->bind(':company_name', $data['company_name']);
      $this->db->bind(':category', $data['category']);
      $this->db->bind(':phone', $data['phone']);
      $this->db->bind(':email', $data['email']);
      $this->db->bind(':address', $data['address']);
      $this->db->bind(':website', $data['website']);
      $this->db->bind(':mandate_code2', $data['mandate_code2']);
      $this->db->bind(':mandate_code', $data['mandate_code']);


      $this->db->bind(':rec_number', $data['rec_number']);
      $this->db->bind(':date_of_incorporation', $data['date_of_incorporation']);
      $this->db->bind(':sec_registered', $data['sec_registered']);
      $this->db->bind(':principal_contact_name', $data['principal_contact_name']);
      $this->db->bind(':principal_contact_phone', $data['principal_contact_phone']);
      $this->db->bind(':principal_contact_email', $data['principal_contact_email']);
      $this->db->bind(':enquiries_contact_name', $data['enquiries_contact_name']);
      $this->db->bind(':enquiries_contact_phone', $data['enquiries_contact_phone']);
      $this->db->bind(':enquiries_contact_email', $data['enquiries_contact_email']);
      $this->db->bind(':compliance_contact_name', $data['compliance_contact_name']);
      $this->db->bind(':compliance_contact_phone', $data['compliance_contact_phone']);
      $this->db->bind(':compliance_contact_email', $data['compliance_contact_email']);
      $this->db->bind(':settlement_bank_name', $data['settlement_bank_name']);
      $this->db->bind(':settlement_bank_account_number', $data['settlement_bank_account_number']);
      $this->db->bind(':settlement_bank_branch', $data['settlement_bank_branch']);
      $this->db->bind(':settlement_bank_account_name', $data['settlement_bank_account_name']);
      
     
      

      // Execute
      if($this->db->execute()){
        return true;
      } else {
        return false;
      }
    }






     //Add New Mandate
      public function AddLog($data,$user_log,$status){
      
      $this->db->query('INSERT INTO users_activities (name, email, department, role, user_log,status) VALUES(:name, :email, :department, :role, :user_log, :status)');
    
      // Bind Values      
      $this->db->bind(':name', $data['name']);
      $this->db->bind(':email', $data['email']);
      $this->db->bind(':department', $data['department']);
      $this->db->bind(':role', $data['role']);
      $this->db->bind(':user_log', $user_log);
      $this->db->bind(':status', $status);
      
      

      // Execute
      if($this->db->execute()){
        return true;
      }
      else{
        return false;
      }           
            
    }





    //Add New Properties
      public function AddMandateTrader($data){
      
      $this->db->query('INSERT INTO traders (fullname, email, phone, trader_code,  residential_address,  designation,  d_o_b,  state_of_origin,  nationality,  mandate_code) VALUES(:fullname, :email, :phone, :trader_code,   :residential_address,  :designation,  :d_o_b,  :state_of_origin,  :nationality, :mandate_code)');
    
      // Bind Values      
      $this->db->bind(':fullname', $data['fullname']);
      $this->db->bind(':email', $data['email']);
      $this->db->bind(':phone', $data['phone']);
      $this->db->bind(':trader_code', $data['trader_code']);

      $this->db->bind(':residential_address', $data['residential_address']);
      $this->db->bind(':designation', $data['designation']);
      $this->db->bind(':d_o_b', $data['d_o_b']);
      $this->db->bind(':state_of_origin', $data['state_of_origin']);
      $this->db->bind(':nationality', $data['nationality']);
      $this->db->bind(':mandate_code', $data['mandate_code']);
      


     
    

      // Execute
      if($this->db->execute()){
        return true;
      }
      else{
        return false;
      }           
            
    }



     public function UpdateMandateTrader($data){
      $this->db->query('UPDATE traders SET status = :status, fullname = :fullname, phone = :phone, email =:email, trader_code = :trader_code   WHERE id = :id');

       // Bind Values      
       $this->db->bind(':id', $data['id']);
      $this->db->bind(':status', $data['status']);
      $this->db->bind(':fullname', $data['fullname']);
      $this->db->bind(':email', $data['email']);
      $this->db->bind(':phone', $data['phone']);
      $this->db->bind(':trader_code', $data['trader_code']);

      
     
      

      // Execute
      if($this->db->execute()){
        return true;
      } else {
        return false;
      }
    }




    public function ChangeMandateTrade($data){
      $this->db->query('UPDATE traders SET mandate_code = :mandate_code   WHERE id = :id');
      // Bind values
      $this->db->bind(':id', $data['id']);
      $this->db->bind(':mandate_code', $data['mandate_code']);
    



      // Execute
      if($this->db->execute()){
        return true;
      } else {
        return false;
      }
    }



    public function ChangeMandateManager($data){
      $this->db->query('UPDATE mandate_managers SET  manager_name = :manager_name, manager_phone = :manager_phone, manager_email =:manager_email  WHERE id = :id');
      // Bind values
       $this->db->bind(':manager_name', $data['manager_name']);
      $this->db->bind(':manager_email', $data['manager_email']);
      $this->db->bind(':manager_phone', $data['manager_phone']);
      $this->db->bind(':role', $data['role']);
      $this->db->bind(':status', $data['status']);
      $this->db->bind(':id', $data['id']);
      



      // Execute
      if($this->db->execute()){
        return true;
      } else {
        return false;
      }
    }





     public function ChangeMandateStatus($data){
      $this->db->query('UPDATE mandates SET mandate_status = :mandate_status,  status_note = :status_note  WHERE mandate_code = :mandate_code');
      // Bind values
      $this->db->bind(':mandate_status', $data['mandate_status']);
      $this->db->bind(':status_note', $data['status_note']);
      $this->db->bind(':mandate_code', $data['mandate_code']);


      // Execute
      if($this->db->execute()){
        return true;
      } else {
        return false;
      }
    }





    //Add New Properties
      public function AddMandatemanager($data){
      
      $this->db->query('INSERT INTO mandate_managers (manager_name, manager_email, manager_phone, manager_role,  mandate_code) VALUES(:manager_name, :manager_email, :manager_phone, :manager_role, :mandate_code)');
    
      // Bind Values      
      $this->db->bind(':manager_name', $data['manager_name']);
      $this->db->bind(':manager_email', $data['manager_email']);
      $this->db->bind(':manager_phone', $data['manager_phone']);
      $this->db->bind(':mandate_code', $data['mandate_code']);
      $this->db->bind(':manager_role', $data['manager_role']);
      


     
    

      // Execute
      if($this->db->execute()){
        return true;
      }
      else{
        return false;
      }           
            
    }




     public function UpdateMandateManager($data){
      $this->db->query('UPDATE mandate_managers SET manager_name = :manager_name, manager_email = :manager_email, manager_phone = :manager_phone , manager_role = :manager_role , status = :status  WHERE id = :id');

       // Bind Values      
      $this->db->bind(':manager_name', $data['manager_name']);
      $this->db->bind(':manager_email', $data['manager_email']);
      $this->db->bind(':manager_phone', $data['manager_phone']);
      $this->db->bind(':manager_role', $data['manager_role']);
      $this->db->bind(':status', $data['status']);
      $this->db->bind(':id', $data['id']);
      
     
      

      // Execute
      if($this->db->execute()){
        return true;
      } else {
        return false;
      }
    }


    public function getManagerById($id){
      $this->db->query('SELECT * FROM mandate_managers WHERE id = :id');

      $this->db->bind(':id', $id);

      $row = $this->db->single();

      return $row;
    }



// DELETE MANGER DETAILS FOR USERS
    public function DeleMangerUser($id){
      $this->db->query('UPDATE mandate_managers SET status = 3  WHERE id = :id');

       // Bind Values      
       $this->db->bind(':id', $id);
     
      
      // Execute
      if($this->db->execute()){
        return true;
      } else {
        return false;
      }
    }









     //Add New Fee
      public function AddMandateFee($fee_code,$issued_date,$issued_year,$due_date,$mandate_code,$tran_code){
      
      $this->db->query('INSERT INTO mandate_payment (fee_code, issued_date, issued_year, due_date,  mandate_code,tran_code) VALUES(:fee_code, :issued_date, :issued_year, :due_date, :mandate_code, :tran_code)');
    
      // Bind Values      
      $this->db->bind(':fee_code', $fee_code);
      $this->db->bind(':issued_date', $issued_date);
      $this->db->bind(':issued_year', $issued_year);
      $this->db->bind(':due_date', $due_date);
      $this->db->bind(':mandate_code', $mandate_code);
       $this->db->bind(':tran_code', $tran_code);

      
     
    

      // Execute
      if($this->db->execute()){
        return true;
      }
      else{
        return false;
      }           
            
    }



//Add New Fee
      public function AddMandateCartNoDis($fee_title,$fee_code,$amount,$qty,$mandate_code,$tran_code,$issued_date,$issued_year){
      
      $this->db->query('INSERT INTO mandate_cart (fee_title, fee_code, amount, qty, mandate_code, tran_code, issued_date, issued_year) VALUES(:fee_title, :fee_code, :amount, :qty, :mandate_code, :tran_code, :issued_date, :issued_year)');
    
      // Bind Values      
      $this->db->bind(':fee_title', $fee_title);
      $this->db->bind(':fee_code', $fee_code);
      $this->db->bind(':amount', $amount);
      $this->db->bind(':qty', $qty);
      $this->db->bind(':mandate_code', $mandate_code);
      $this->db->bind(':tran_code', $tran_code);
      $this->db->bind(':issued_date', $issued_date);
      $this->db->bind(':issued_year', $issued_year);
      


      
     
    

      // Execute
      if($this->db->execute()){
        return true;
      }
      else{
        return false;
      }           
            
    }






  //Add New Fee
      public function AddMandateoutstanding($fee_title,$fee_code,$amount,$mandate_code,$tran_code,$issued_date,$credit_note){
      
      $this->db->query('INSERT INTO mandate_cart (fee_title, fee_code, amount, credit_note,  mandate_code, tran_code, issued_date) VALUES(:fee_title, :fee_code, :amount, :credit_note, :mandate_code, :tran_code, :issued_date)');
    
      // Bind Values      
      $this->db->bind(':fee_title', $fee_title);
      $this->db->bind(':fee_code', $fee_code);
      $this->db->bind(':credit_note', $credit_note);
      $this->db->bind(':amount', $amount);
      $this->db->bind(':mandate_code', $mandate_code);
      $this->db->bind(':tran_code', $tran_code);
      $this->db->bind(':issued_date', $issued_date);
     
      


      
     
    

      // Execute
      if($this->db->execute()){
        return true;
      }
      else{
        return false;
      }           
            
    }





//Add New Fee
      public function AddMandateCartDis($fee_title,$fee_code,$amount,$discount_amount,$qty, $discount,$mandate_code,$tran_code,$issued_date,$issued_year,$due_date){
      
      $this->db->query('INSERT INTO mandate_cart (fee_title, fee_code, amount, discount_amount,qty,  discount, mandate_code, tran_code, issued_date, issued_year) VALUES(:fee_title, :fee_code, :amount, :discount_amount,  :qty, :discount, :mandate_code, :tran_code, :issued_date, :issued_year)');
    
      // Bind Values      
      $this->db->bind(':fee_title', $fee_title);
      $this->db->bind(':fee_code', $fee_code);
      $this->db->bind(':amount', $amount);
      $this->db->bind(':discount_amount', $discount_amount);
      $this->db->bind(':qty', $qty);
      $this->db->bind(':discount', $discount);
      $this->db->bind(':mandate_code', $mandate_code);
       $this->db->bind(':tran_code', $tran_code);
      $this->db->bind(':issued_date', $issued_date);
       $this->db->bind(':issued_year', $issued_year);
     


      
     
    

      // Execute
      if($this->db->execute()){
        return true;
      }
      else{
        return false;
      }           
            
    }




    //Add New Fee
      public function AddMandateFeeNoDue($fee_code,$issued_date,$issued_year,$mandate_code,$tran_code){
      
      $this->db->query('INSERT INTO mandate_payment (fee_code, issued_date,issued_year,mandate_code,tran_code) VALUES(:fee_code, :issued_date, :issued_year, :mandate_code, :tran_code)');
    
      // Bind Values      
      $this->db->bind(':fee_code', $fee_code);
      $this->db->bind(':issued_date', $issued_date);
      $this->db->bind(':issued_year', $issued_year);
      $this->db->bind(':mandate_code', $mandate_code);
       $this->db->bind(':tran_code', $tran_code);
      
     
      
      


     
    

      // Execute
      if($this->db->execute()){
        return true;
      }
      else{
        return false;
      }           
            
    }





    //Add New Fee
      public function AddMandatePayment($data){
      
      $this->db->query('INSERT INTO mandate_account_payment (amount, mandate_code, paid_date) 
        VALUES(:amount, :mandate_code, :paid_date)');
    

      // Bind Values      
       $this->db->bind(':amount',  $data['amount']);
      $this->db->bind(':mandate_code',  $data['mandate_code']);
      $this->db->bind(':paid_date',  $data['paid_date']);
     

      // Execute
      if($this->db->execute()){
        return true;
      }
      else{
        return false;
      }           
            
    }








    public function getAllMandate(){
      $this->db->query('SELECT * FROM mandates  ORDER BY id DESC');
      
      

      $results = $this->db->resultSet();

      return $results;
    }





    public function getAllActiveMandate($revoked_mandates){
      $this->db->query('SELECT * FROM mandates WHERE mandate_status !=:revoked_mandates  ORDER BY id DESC');
      $this->db->bind(':revoked_mandates', $revoked_mandates);
      

      $results = $this->db->resultSet();

      return $results;
    }



    public function getAllRevokeMandate($revoked_mandates){
      $this->db->query('SELECT  * FROM mandates WHERE mandate_status =:revoked_mandates  ORDER BY id DESC');
      $this->db->bind(':revoked_mandates', $revoked_mandates);
      

      $results = $this->db->resultSet();

      return $results;
    }



    




public function getMandateByCode($mandate_code){
      $this->db->query('SELECT * FROM mandate_doc WHERE mandate_code = :mandate_code AND status = 1');

      $this->db->bind(':mandate_code', $mandate_code);

      $results = $this->db->resultSet();

      return $results;
    }



    public function getMandateDeletedFiles($mandate_code){
      $this->db->query('SELECT * FROM mandate_doc WHERE mandate_code = :mandate_code AND status = 0');

      $this->db->bind(':mandate_code', $mandate_code);

      $results = $this->db->resultSet();

      return $results;
    }





    public function getInfoMandateByCode($mandate_code){
      $this->db->query('SELECT * FROM mandates WHERE mandate_code = :mandate_code');

      $this->db->bind(':mandate_code', $mandate_code);

      $row = $this->db->single();

      return $row;
    }




    public function TotalHDFAmount($mandate_code,$fee_cod_c,$current_year){
      $this->db->query('SELECT SUM(amount) AS TotalBDF FROM mandate_payment
      WHERE fee_code =  :fee_cod_c AND mandate_code = :mandate_code AND issued_year =:current_year' );

      $this->db->bind(':mandate_code', $mandate_code);
       $this->db->bind(':fee_cod_c', $fee_cod_c);
       $this->db->bind(':current_year', $current_year);


      $row = $this->db->single();

      return $row;
    }



    public function TotalPMFAmount($mandate_code,$fee_cod_c2,$current_year){
      $this->db->query('SELECT SUM(amount) AS TotalMadatePM FROM mandate_payment
      WHERE fee_code =  :fee_cod_c2 AND mandate_code = :mandate_code AND issued_year =:current_year' );

      $this->db->bind(':mandate_code', $mandate_code);
       $this->db->bind(':fee_cod_c2', $fee_cod_c2);
       $this->db->bind(':current_year', $current_year);


      $row = $this->db->single();

      return $row;
    }





    public function TotalTFAmount($mandate_code,$fee_cod_c3,$current_year){
      $this->db->query('SELECT SUM(amount) AS TotalTF FROM mandate_payment
      WHERE fee_code =  :fee_cod_c3 AND mandate_code = :mandate_code AND issued_year =:current_year' );

      $this->db->bind(':mandate_code', $mandate_code);
       $this->db->bind(':fee_cod_c3', $fee_cod_c3);
       $this->db->bind(':current_year', $current_year);


      $row = $this->db->single();

      return $row;
    }


     public function TotalTFAmountFirm($mandate_code,$fee_cod_c3,$current_year){
      $this->db->query('SELECT * FROM mandate_payment
      WHERE fee_code =  :fee_cod_c3 AND mandate_code = :mandate_code AND issued_year =:current_year' );

      $this->db->bind(':mandate_code', $mandate_code);
       $this->db->bind(':fee_cod_c3', $fee_cod_c3);
       $this->db->bind(':current_year', $current_year);


      $row = $this->db->single();

      return $row;
    }


     public function AllTotalBAFAmount($mandate_code,$fee_cod_c4,$current_year){
      $this->db->query('SELECT SUM(amount) AS TotalBAF FROM mandate_payment
      WHERE fee_code =  :fee_cod_c4 AND mandate_code = :mandate_code AND issued_year =:current_year' );

      $this->db->bind(':mandate_code', $mandate_code);
       $this->db->bind(':fee_cod_c4', $fee_cod_c4);
       $this->db->bind(':current_year', $current_year);


      $row = $this->db->single();

      return $row;
    }




     public function AllTotalISHAmount($mandate_code,$fee_cod_c5,$current_year){
      $this->db->query('SELECT SUM(amount) AS TotalISH FROM mandate_payment
      WHERE fee_code =  :fee_cod_c5 AND mandate_code = :mandate_code AND issued_year =:current_year' );

      $this->db->bind(':mandate_code', $mandate_code);
       $this->db->bind(':fee_cod_c5', $fee_cod_c5);
       $this->db->bind(':current_year', $current_year);


      $row = $this->db->single();

      return $row;
    }



 public function TotalSHAmount($mandate_code,$fee_cod_c6,$current_year){
      $this->db->query('SELECT SUM(amount) AS TotalSH FROM mandate_payment
      WHERE fee_code =  :fee_cod_c6 AND mandate_code = :mandate_code AND issued_year =:current_year' );

      $this->db->bind(':mandate_code', $mandate_code);
       $this->db->bind(':fee_cod_c6', $fee_cod_c6);
       $this->db->bind(':current_year', $current_year);


      $row = $this->db->single();

      return $row;
    }




    public function getAccountMandateByCode($mandate_code){
      $this->db->query('SELECT mandates_fees.fee_title, mandates_fees.amount, mandates_fees.renewal_status, mandates_fees.fee_code,
       mandate_payment.mandate_code, mandate_payment.issued_date, mandate_payment.due_date,mandate_payment.issued_year, mandate_payment.discount, mandate_payment.discount_amount, mandate_payment.qty, mandate_payment.created_at
       FROM `mandates_fees` 
        INNER JOIN mandate_payment ON mandates_fees.fee_code = mandate_payment.fee_code
          WHERE mandate_payment.mandate_code =:mandate_code');


        $this->db->bind(':mandate_code', $mandate_code);

      
       $results = $this->db->resultSet();

      return $results;
    }



    public function getAccountMandate_payment_archiveByCode($mandate_code){
      $this->db->query('SELECT * FROM  payment_archive 
          WHERE mandate_code =:mandate_code');


        $this->db->bind(':mandate_code', $mandate_code);

      
       $results = $this->db->resultSet();

      return $results;
    }




    public function getAccountMandateByCode23($mandate_code){
      $this->db->query('SELECT mandates_fees.fee_title, mandates_fees.amount, mandates_fees.fee_code,
       mandate_payment.mandate_code, mandate_payment.issued_date, mandate_payment.due_date
       FROM `mandates_fees` 
        INNER JOIN mandate_payment ON mandates_fees.fee_code = mandate_payment.fee_code
          WHERE mandate_payment.mandate_code =:mandate_code AND due_date=0');


        $this->db->bind(':mandate_code', $mandate_code);

      
       $results = $this->db->resultSet();

      return $results;
    }








     public function getTraderMandateByCode($mandate_code){
      $this->db->query('SELECT * FROM traders WHERE mandate_code = :mandate_code');

      $this->db->bind(':mandate_code', $mandate_code);

      
       $results = $this->db->resultSet();

      return $results;
    }



    public function getTraderMandateByid($id){
      $this->db->query('SELECT * FROM traders WHERE id = :id');

      $this->db->bind(':id', $id);

      
      $row = $this->db->single();

      return $row;
    }




    public function getManagerMandateByCode($mandate_code){
      $this->db->query('SELECT * FROM mandate_managers WHERE mandate_code = :mandate_code');

      $this->db->bind(':mandate_code', $mandate_code);

      
       $results = $this->db->resultSet();

      return $results;
    }




     public function getManagerMandateByid($id){
      $this->db->query('SELECT * FROM mandate_managers WHERE id = :id');

      $this->db->bind(':id', $id);

      
       $results = $this->db->resultSet();

      return $results;
    }







    public function updateUser($data){
      $this->db->query('UPDATE e_mandate_accounts SET name = :name, email = :email, department = :department WHERE id = :id');
      // Bind values
      $this->db->bind(':id',  $data['id']);
      $this->db->bind(':name',  $data['name']);
      $this->db->bind(':email',  $data['email']);
      $this->db->bind(':department',  $data['department']);
     
     
      

      // Execute
      if($this->db->execute()){
        return true;
      } else {
        return false;
      }
    }





    public function updateUserPassword($data){
      $this->db->query('UPDATE e_mandate_accounts SET password = :password, password_update = :password_update WHERE id = :id');
      // Bind values
      $this->db->bind(':password',  $data['password']);
      $this->db->bind(':password_update',  $data['password_update']);
      
      $this->db->bind(':id',  $data['id']);
      

      // Execute
      if($this->db->execute()){
        return true;
      } else {
        return false;
      }
    }




 public function getTraders(){
      $this->db->query(' SELECT traders.fullname, traders.trader_code, traders.email, traders.phone, traders.residential_address,traders.designation,traders.d_o_b,traders.state_of_origin,traders.nationality,traders.status, mandates.company_name, mandates.mandate_code
       FROM `traders` 
        INNER JOIN mandates ON traders.mandate_code = mandates.mandate_code ORDER BY ceated_at  DESC ');
     

      

    $results = $this->db->resultSet();

    return $results;

 
  }




   public function getManagers(){
      $this->db->query('SELECT mandate_managers.manager_name,  mandate_managers.manager_phone,  mandate_managers.manager_email,  mandate_managers.manager_role,  mandate_managers.status,mandate_managers.created_at, mandates.company_name, mandates.mandate_code
       FROM `mandate_managers` 
        INNER JOIN mandates ON mandate_managers.mandate_code = mandates.mandate_code ORDER BY created_at DESC');
      //$this->db->bind(':ref_id', $ref_id);

      

    $results = $this->db->resultSet();

    return $results;

 
  }





public function getLogs(){
      $this->db->query('SELECT *  FROM users_activities  ORDER BY id DESC');
      //$this->db->bind(':ref_id', $ref_id);

      

    $results = $this->db->resultSet();

    return $results;

 
  }



public function getLogsByemail($email){
      $this->db->query('SELECT *  FROM users_activities  WHERE email = :email');
      $this->db->bind(':email', $email);

      

    $results = $this->db->resultSet();

    return $results;

 
  }





   public function getUserById($id){
      $this->db->query('SELECT *  FROM e_mandate_accounts  WHERE id = :id');
      $this->db->bind(':id', $id);

      

      $row = $this->db->single();

      return $row;
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
      $this->db->query('UPDATE e_mandate_accounts SET password = :password , name = :name, email = :email,  department = :department ,  role = :role, password_update = :password_update WHERE id = :id');
      // Bind values
     $this->db->bind(':name', $data['name']);
      $this->db->bind(':email', $data['email']);
      $this->db->bind(':department', $data['department']);
      $this->db->bind(':role', $data['role']);
      $this->db->bind(':password', $data['password']);
      $this->db->bind(':id', $data['id']);
       $this->db->bind(':password_update',  $data['password_update']);

     
      

      // Execute
      if($this->db->execute()){
        return true;
      } else {
        return false;
      }
    }





 public function getDataPortalRequest(){
      $this->db->query(' SELECT * FROM data_portal_request  ORDER BY id  DESC ');
     

      

    $results = $this->db->resultSet();

    return $results;

 
  }





     //Add New Mandate
      public function AddDataRequest($data,$issue_year){
      
      $this->db->query('INSERT INTO data_portal_request (data_type, amount, company_name, company_phone, company_email, company_address, contact_person_name, contact_person_email, contact_person_phone, issue_date, issue_year, tran_code) VALUES(:data_type, :amount, :company_name, :company_phone, :company_email, :company_address, :contact_person_name, :contact_person_email, :contact_person_phone, :issue_date, :issue_year, :tran_code)');
    
      // Bind Values      
      $this->db->bind(':data_type', $data['data_type']);
      $this->db->bind(':amount', $data['amount']);
      $this->db->bind(':company_name', $data['company_name']);
      $this->db->bind(':company_phone', $data['company_phone']);
      $this->db->bind(':company_email', $data['company_email']);
      $this->db->bind(':company_address', $data['company_address']);
      $this->db->bind(':contact_person_name', $data['contact_person_name']);
      $this->db->bind(':contact_person_email', $data['contact_person_email']);
      $this->db->bind(':contact_person_phone', $data['contact_person_phone']);
      $this->db->bind(':issue_date', $data['issue_date']);
      $this->db->bind(':issue_year', $issue_year);
      $this->db->bind(':tran_code', $data['tran_code']);
      
      


     
    

      // Execute
      if($this->db->execute()){
        return true;
      }
      else{
        return false;
      }           
            
    }




public function getMandateActivies($mandate_code){
      $this->db->query('SELECT *  FROM mandate_activities WHERE mandate_code = :mandate_code  ORDER BY id DESC');
      $this->db->bind(':mandate_code', $mandate_code);

      

    $results = $this->db->resultSet();

    return $results;

 
  }



  //Add New Mandate
      public function AddMandateActivities($data,$activities){
      
      $this->db->query('INSERT INTO mandate_activities (mandate_code, activities, action_by, department) VALUES(:mandate_code, :activities, :action_by, :department)');
    
      // Bind Values      
      
      $this->db->bind(':mandate_code', $data['mandate_code']);
      $this->db->bind(':activities', $data['activities']);
      $this->db->bind(':action_by', $data['name']);
      $this->db->bind(':department', $data['department']);
      $this->db->bind(':activities', $activities);
 
      
      

      // Execute
      if($this->db->execute()){
        return true;
      }
      else{
        return false;
      }           
            
    }





    //Add New Mandate
      public function ChangeMandateNmae($data,$old_name){
      
      $this->db->query('INSERT INTO mandate_name_change (mandate_code, old_name) VALUES(:mandate_code, :old_name)');
    
      // Bind Values      
      
      $this->db->bind(':mandate_code', $data['mandate_code']);
      $this->db->bind(':old_name', $data['old_name']);
     
 
      
      

      // Execute
      if($this->db->execute()){
        return true;
      }
      else{
        return false;
      }           
            
    }




public function getAllMandateNames($mandate_code){
      $this->db->query('SELECT  old_name FROM mandate_name_change  WHERE mandate_code = :mandate_code');

      $this->db->bind(':mandate_code', $mandate_code);

      $row = $this->db->single();

      return $row;
    }




 public function AllSumdatarequest(){
      $this->db->query(' SELECT SUM(amount) AS TotalAmountDR FROM data_portal_request   ');
     
 $row = $this->db->single();

      return $row;
    }



    public function AllSumdatarequestYear($current_year){
      $this->db->query(' SELECT SUM(amount) AS TotalAmountDRYear FROM data_portal_request WHERE issue_year =:current_year  ');

       $this->db->bind(':current_year', $current_year);
     
 $row = $this->db->single();

      return $row;
    }





    public function AllSumTraining(){
      $this->db->query(' SELECT SUM(amount) AS TotalAmountNT FROM nes_training   ');
     
 $row = $this->db->single();

      return $row;
    }



 //    public function AllSumdatarequestYear($current_year){
 //      $this->db->query(' SELECT SUM(amount) AS TotalAmountDRYear FROM nes_training WHERE issue_year =:current_year  ');

 //       $this->db->bind(':current_year', $current_year);
     
 // $row = $this->db->single();

 //      return $row;
 //    }






public function getNesTraining(){
      $this->db->query(' SELECT nes_training.broker, nes_training.training_date, nes_training.amount, nes_training.mandate_code, nes_training.created_at, mandates.company_name, mandates.mandate_code
       FROM `nes_training` 
        INNER JOIN mandates ON nes_training.mandate_code = mandates.mandate_code ORDER BY created_at  DESC ');



     

      

    $results = $this->db->resultSet();

    return $results;

 
  }






    //Add New Properties
      public function AddTrainingFee($data){
      
      $this->db->query('INSERT INTO nes_training (mandate_code, broker, training_date, amount) VALUES(:mandate_code, :broker, :training_date, :amount)');
    
      // Bind Values      
   
      $this->db->bind(':amount', $data['amount']);
      $this->db->bind(':training_date', $data['training_date']);
      $this->db->bind(':broker', $data['broker']);
      $this->db->bind(':mandate_code', $data['mandate_code']);
      


     
    

      // Execute
      if($this->db->execute()){
        return true;
      }
      else{
        return false;
      }           
            
    }




public function getTotatalDB($dealer_broker,$status){
      $this->db->query('SELECT COUNT(id) AS TotalBD FROM mandates WHERE 
        category = :dealer_broker AND mandate_status = :status');

      $this->db->bind(':dealer_broker', $dealer_broker);
      $this->db->bind(':status', $status);
      

      $row = $this->db->single();

      return $row;
    }


    public function getTotatalbk($broker,$status){
      $this->db->query('SELECT COUNT(id) AS TotalBK FROM mandates WHERE 
        category = :broker AND mandate_status = :status');

      $this->db->bind(':broker', $broker);
      $this->db->bind(':status', $status);
      

      $row = $this->db->single();

      return $row;
    }


    public function getTotatalih($issuehouse,$status){
      $this->db->query('SELECT COUNT(id) AS TotalIH FROM mandates WHERE 
        category = :issuehouse AND mandate_status = :status');

      $this->db->bind(':issuehouse', $issuehouse);
      $this->db->bind(':status', $status);
      

      $row = $this->db->single();

      return $row;
    }


    public function getTotatalTraders(){
      $this->db->query('SELECT COUNT(id) AS Totaltraders FROM traders WHERE status = 1 ');

      
      

      $row = $this->db->single();

      return $row;
    }






     public function getAllAnnual(){
      $this->db->query('SELECT
   COUNT(id) AS toltal
    FROM mandates WHERE category = "BROKER" AND mandate_status = "Ok" ');     


     $row = $this->db->single();

      return $row;
    }



    public function getAllAnnual1(){
      $this->db->query('SELECT
   COUNT(id) AS toltal1
    FROM mandates WHERE category = "BROKER/DEALER" AND mandate_status = "Ok" ');     


     $row = $this->db->single();

      return $row;
    }





public function getAllAnnual2(){
      $this->db->query('SELECT
   COUNT(id) AS toltal2
    FROM mandates WHERE category = "DEALER" AND mandate_status = "Ok" ');     


     $row = $this->db->single();

      return $row;
    }





public function getAllAnnual3(){
      $this->db->query('SELECT
   COUNT(id) AS toltal3
    FROM mandates WHERE category = "SUB-BROKER" AND mandate_status = "Ok" ');     


     $row = $this->db->single();

      return $row;
    }











public function getAllAnnualPayment(){
      $this->db->query('SELECT
   SUM(amount) AS toltal_payment
    FROM mandate_payment WHERE fee_code = "AFB" ');     


     $row = $this->db->single();

      return $row;
    }



    public function getAllAnnualPayment1(){
      $this->db->query('SELECT
  SUM(amount) AS toltal_payment1
    FROM mandate_payment WHERE fee_code = "BDAF" ');     


     $row = $this->db->single();

      return $row;
    }





public function getAllAnnualPayment2(){
      $this->db->query('SELECT
   SUM(amount)  AS toltal_payment2
    FROM mandate_payment WHERE fee_code = "AFD" ');     


     $row = $this->db->single();

      return $row;
    }





public function getAllAnnualPayment3(){
      $this->db->query('SELECT
   SUM(amount) AS toltal_payment3
    FROM mandate_payment WHERE fee_code = "AFSB" ');     


     $row = $this->db->single();

      return $row;
    }


   












public function getAllAnnualPaymentYear($current_year){
      $this->db->query('SELECT
   SUM(amount) AS toltal_paymentYear
    FROM mandate_payment WHERE fee_code = "AFB" AND issued_year =:current_year ');     


      $this->db->bind(':current_year', $current_year);


     $row = $this->db->single();

      return $row;
    }



    public function getAllAnnualPaymentYear1($current_year){
      $this->db->query('SELECT
  SUM(amount) AS toltal_paymentYear1
    FROM mandate_payment WHERE fee_code = "BDAF"  AND issued_year =:current_year ');     


      $this->db->bind(':current_year', $current_year);


     $row = $this->db->single();

      return $row;
    }





public function getAllAnnualPaymentYear2($current_year){
      $this->db->query('SELECT
   SUM(amount)  AS toltal_paymentYear2
    FROM mandate_payment WHERE fee_code = "AFD" AND issued_year =:current_year ');     


      $this->db->bind(':current_year', $current_year);


     $row = $this->db->single();

      return $row;
    }




public function getAllAnnualPaymentYear3($current_year){
      $this->db->query('SELECT
   SUM(amount) AS toltal_paymentYear3
    FROM mandate_payment WHERE fee_code = "AFSB" AND issued_year =:current_year ');     


      $this->db->bind(':current_year', $current_year);


     $row = $this->db->single();

      return $row;
    }


   





public function getALLSTB(){
      $this->db->query('SELECT
   COUNT(id) AS totalSTB
    FROM mandates WHERE category = "SETTLEMENTBANK" AND mandate_status = "Ok" ');     


     $row = $this->db->single();

      return $row;
    }




public function getALLSTBPAYMENT(){
      $this->db->query('SELECT
   SUM(amount) AS toltal_stb
    FROM mandate_payment WHERE fee_code = "ASB"  ');     



     $row = $this->db->single();

      return $row;
    }







    public function getALLSTBPAYMENTYEAR($current_year){
      $this->db->query('SELECT
   SUM(amount) AS toltal_stbyear
    FROM mandate_payment WHERE fee_code = "ASB" AND issued_year =:current_year ');     


      $this->db->bind(':current_year', $current_year);


     $row = $this->db->single();

      return $row;
    }







    public function getAllRegPaymment(){
      $this->db->query('SELECT
  SUM(amount) AS toltal_reg_payment
    FROM mandate_payment WHERE fee_code = "RFPCUST" ');     


     $row = $this->db->single();

      return $row;
    }




     public function getAllRegPaymment1(){
      $this->db->query('SELECT
  SUM(amount) AS toltal_reg_payment1
    FROM mandate_payment WHERE fee_code = "RFCUST" ');     


     $row = $this->db->single();

      return $row;
    }




    public function getAllRegPaymment2(){
      $this->db->query('SELECT
  SUM(amount) AS toltal_reg_payment2
    FROM mandate_payment WHERE fee_code = "RFIH" ');     


     $row = $this->db->single();

      return $row;
    }




    public function getAllRegPaymment3(){
      $this->db->query('SELECT
  SUM(amount) AS toltal_reg_payment3
    FROM mandate_payment WHERE fee_code = "RFAT" ');     


     $row = $this->db->single();

      return $row;
    }






 public function getAllRegPaymment4(){
      $this->db->query('SELECT
  SUM(amount) AS toltal_reg_payment4
    FROM mandate_payment WHERE fee_code = "RFSB" ');     


     $row = $this->db->single();

      return $row;
    }





    public function getAllRegPaymment5(){
      $this->db->query('SELECT
  SUM(amount) AS toltal_reg_payment5
    FROM mandate_payment WHERE fee_code = "RFD" ');     


     $row = $this->db->single();

      return $row;
    }




 public function getAllRegPaymment6(){
      $this->db->query('SELECT
  SUM(amount) AS toltal_reg_payment6
    FROM mandate_payment WHERE fee_code = "RFBD" ');     


     $row = $this->db->single();

      return $row;
    }


    public function getAllRegPaymment7(){
      $this->db->query('SELECT
  SUM(amount) AS toltal_reg_payment7
    FROM mandate_payment WHERE fee_code = "RFB" ');     


     $row = $this->db->single();

      return $row;
    }
















 public function getAllRegPaymmentyear($current_year){
      $this->db->query('SELECT
  SUM(amount) AS toltal_reg_payment_year
    FROM mandate_payment WHERE fee_code = "RFPCUST" AND issued_year = :current_year ');     
 $this->db->bind(':current_year', $current_year); 

     $row = $this->db->single();

      return $row;
    }




     public function getAllRegPaymmentyear1($current_year){
      $this->db->query('SELECT
  SUM(amount) AS toltal_reg_payment_year1
    FROM mandate_payment WHERE fee_code = "RFCUST" AND issued_year =:current_year '); 

     $this->db->bind(':current_year', $current_year); 

     $row = $this->db->single();

      return $row;
    }




    public function getAllRegPaymmentyear2($current_year){
      $this->db->query('SELECT
  SUM(amount) AS toltal_reg_payment_year2
    FROM mandate_payment WHERE fee_code = "RFIH" AND issued_year =:current_year '); 

     $this->db->bind(':current_year', $current_year); 
     $row = $this->db->single();

      return $row;
    }




    public function getAllRegPaymmentyear3($current_year){
      $this->db->query('SELECT
  SUM(amount) AS toltal_reg_payment_year3
    FROM mandate_payment WHERE fee_code = "RFAT" AND issued_year =:current_year '); 

     $this->db->bind(':current_year', $current_year); 

     $row = $this->db->single();

      return $row;
    }






 public function getAllRegPaymmentyear4($current_year){
      $this->db->query('SELECT
  SUM(amount) AS toltal_reg_payment_year4
    FROM mandate_payment WHERE fee_code = "RFSB" AND issued_year =:current_year '); 

     $this->db->bind(':current_year', $current_year); 
     $row = $this->db->single();

      return $row;
    }





    public function getAllRegPaymmentyear5($current_year){
      $this->db->query('SELECT
  SUM(amount) AS toltal_reg_payment_year5
    FROM mandate_payment WHERE fee_code = "RFD" AND issued_year =:current_year '); 

     $this->db->bind(':current_year', $current_year); 

     $row = $this->db->single();

      return $row;
    }




 public function getAllRegPaymmentyear6($current_year){
      $this->db->query('SELECT
  SUM(amount) AS toltal_reg_payment_year6
    FROM mandate_payment WHERE fee_code = "RFBD" AND issued_year =:current_year '); 

     $this->db->bind(':current_year', $current_year); 
     $row = $this->db->single();

      return $row;
    }


    public function getAllRegPaymmentyear7($current_year){
      $this->db->query('SELECT
  SUM(amount) AS toltal_reg_payment_year7
    FROM mandate_payment WHERE fee_code = "RFB" AND issued_year =:current_year '); 

     $this->db->bind(':current_year', $current_year);  


     $row = $this->db->single();

      return $row;
    }




public function getPayments(){
      $this->db->query('SELECT mandates_fees.fee_title, mandates_fees.amount, mandates_fees.renewal_status, mandates_fees.fee_code,
       mandate_payment.mandate_code, mandate_payment.issued_date, mandate_payment.due_date, mandate_payment.created_at, mandates.company_name
       FROM `mandates_fees` 
        INNER JOIN mandate_payment ON mandates_fees.fee_code = mandate_payment.fee_code

        INNER JOIN mandates ON mandates.mandate_code = mandate_payment.mandate_code ');

    
$results = $this->db->resultSet();

      return $results;
    }




    public function getBankPayments(){
      $this->db->query('SELECT  mandate_account_payment.amount, mandate_account_payment.paid_date, mandate_account_payment.created_at, mandates.company_name
       FROM `mandate_account_payment` 
 
        INNER JOIN mandates ON mandates.mandate_code = mandate_account_payment.mandate_code ');

    
$results = $this->db->resultSet();

      return $results;
    }



     public function getArchivePayment(){
      $this->db->query('SELECT  payment_archive.amount,payment_archive.mandate_code,payment_archive.issued_date, payment_archive.issued_year,payment_archive.due_date, payment_archive.fee_title, mandates.company_name
       FROM `payment_archive` 
 
        INNER JOIN mandates ON mandates.mandate_code = payment_archive.mandate_code ');

    
$results = $this->db->resultSet();

      return $results;
    }




    public function getALLISH(){
      $this->db->query('SELECT
   COUNT(id) AS totalISH
    FROM mandates WHERE category = "ISSUINGHOUSE" AND mandate_status = "Ok" ');     


     $row = $this->db->single();

      return $row;
    }


       public function TotalISHPAYMENT($fee_cod_c5){ 
      $this->db->query(' SELECT
  SUM(amount) AS toltal_ish_payment
    FROM  mandate_payment  WHERE fee_code = :fee_cod_c5 ');         
      // Bind Values
      $this->db->bind(':fee_cod_c5', $fee_cod_c5);

       $row = $this->db->single();

          return $row;
        }






        public function TotalISHPAYMENTYEAR($fee_cod_c5,$current_year){ 
      $this->db->query(' SELECT
  SUM(amount) AS toltal_ish_payment_year
    FROM  mandate_payment  WHERE fee_code = :fee_cod_c5 AND  issued_year = :current_year');

         $this->db->bind(':fee_cod_c5', $fee_cod_c5);
         $this->db->bind(':current_year', $current_year);
      $row = $this->db->single();

      return $row;
    }






    public function getALLPM(){
      $this->db->query('SELECT
   COUNT(id) AS totalPM
    FROM mandate_payment WHERE fee_code = "AFPM"  ');     


     $row = $this->db->single();

      return $row;
    }




    public function getALLPMYEAR($current_year){
      $this->db->query('SELECT
   COUNT(id) AS totalPMYEAR
    FROM mandate_payment WHERE fee_code = "AFPM" AND issued_year = :current_year  ');     

    $this->db->bind(':current_year', $current_year);
     $row = $this->db->single();

      return $row;
    }



public function getPaymentRecipt($mandate_code,$select_year){
      $this->db->query(' SELECT SUM(amount) AS TotalPAYMENT FROM mandate_payment WHERE mandate_code = :mandate_code AND issued_year = :select_year   ');


         $this->db->bind(':select_year', $select_year);
          $this->db->bind(':mandate_code', $mandate_code);
     
 $row = $this->db->single();

      return $row;
    }

    public function getAccountMandateByCode12($mandate_code,$select_year){
      $this->db->query('SELECT mandates_fees.fee_title, mandates_fees.amount, mandates_fees.renewal_status, mandates_fees.fee_code,
       mandate_payment.mandate_code, mandate_payment.issued_date, mandate_payment.issued_year, mandate_payment.created_at
       FROM `mandates_fees` 
        INNER JOIN mandate_payment ON mandates_fees.fee_code = mandate_payment.fee_code
          WHERE mandate_payment.mandate_code =:mandate_code AND   mandate_payment.issued_year =:select_year');


        $this->db->bind(':mandate_code', $mandate_code);
         $this->db->bind(':select_year', $select_year);

      
       $results = $this->db->resultSet();

      return $results;
    }









     //Add New Properties
       public function Add_reciept_records($mandate_code,$select_year,$receipt_date,$receipt_number){
      
      $this->db->query('INSERT INTO receipt_records (mandate_code, select_year, receipt_date, receipt_number) VALUES(:mandate_code, :select_year, :receipt_date, :receipt_number)');
    
      // Bind Values      
   
        $this->db->bind(':mandate_code', $mandate_code);
         $this->db->bind(':select_year', $select_year);
         $this->db->bind(':receipt_date', $receipt_date);
         $this->db->bind(':receipt_number', $receipt_number);
      


     
    

      // Execute
      if($this->db->execute()){
        return true;
      }
      else{
        return false;
      }           
            
    }







    public function UpdateCartTotalWithDueNoDies($tran_code,$amount,$due_date){
      $this->db->query('UPDATE mandate_cart SET total_cart_amount = :amount, tran_code = :tran_code, due_date = :due_date  WHERE tran_code = :tran_code');
      // Bind values
      $this->db->bind(':amount',  $amount);
      $this->db->bind(':tran_code',  $tran_code);
       $this->db->bind(':due_date',  $due_date);
    
      // Execute
      if($this->db->execute()){
        return true;
      } else {
        return false;
      }
    }




     public function UpdateCartTotalNoDueNoDies($tran_code,$amount){
      $this->db->query('UPDATE mandate_cart SET total_cart_amount = :amount, tran_code = :tran_code  WHERE tran_code = :tran_code');
      // Bind values
      $this->db->bind(':amount',  $amount);
      $this->db->bind(':tran_code',  $tran_code);
    
    
      // Execute
      if($this->db->execute()){
        return true;
      } else {
        return false;
      }
    }




     public function UpdateCartTotalDisDue($tran_code,$discount_amount,$due_date){
      $this->db->query('UPDATE mandate_cart SET total_cart_amount = :discount_amount, tran_code = :tran_code, due_date = :due_date  WHERE tran_code = :tran_code');
      // Bind values
      $this->db->bind(':discount_amount',  $discount_amount);
      $this->db->bind(':tran_code',  $tran_code);
      $this->db->bind(':due_date',  $due_date);
    
      // Execute
      if($this->db->execute()){
        return true;
      } else {
        return false;
      }
    }





 public function UpdateCartTotalDisNoDue($tran_code,$discount_amount){
      $this->db->query('UPDATE mandate_cart SET total_cart_amount = :discount_amount, tran_code = :tran_code  WHERE tran_code = :tran_code');
      // Bind values
      $this->db->bind(':discount_amount',  $discount_amount);
      $this->db->bind(':tran_code',  $tran_code);
     
    
      // Execute
      if($this->db->execute()){
        return true;
      } else {
        return false;
      }
    }



     public function deleteCart($id){
      $this->db->query('DELETE FROM mandate_cart WHERE id = :id');
      // Bind values
      $this->db->bind(':id', $id);

      // Execute
      if($this->db->execute()){
        return true;
      } else {
        return false;
      }
    }




  public function deleteAllCart($mandate_code){
      $this->db->query('DELETE FROM mandate_cart WHERE mandate_code = :mandate_code');
      // Bind values
      $this->db->bind(':mandate_code', $mandate_code);

      // Execute
      if($this->db->execute()){
        return true;
      } else {
        return false;
      }
    }



    public function getSubmitCart($mandate_code){
      $this->db->query('INSERT INTO mandate_payment (`fee_title`, `fee_code`, `amount`, `discount_amount`, `qty`, `discount`, `total_cart_amount`, `mandate_code`, `tran_code`, `issued_date`, `issued_year`, `due_date`) 
        SELECT fee_title,fee_code,amount,discount_amount,qty,discount,total_cart_amount,mandate_code,tran_code, issued_date, issued_year, due_date FROM mandate_cart  WHERE mandate_code = :mandate_code ');


                 
          $this->db->bind(':mandate_code', $mandate_code);
         // Execute
      if($this->db->execute()){
        return true;
      } else {
        return false;
      }
    }
            




 public function getCartByCode($mandate_code){
      $this->db->query('SELECT * FROM mandate_cart WHERE mandate_code = :mandate_code ');


         
  $this->db->bind(':mandate_code', $mandate_code);
     
  $row = $this->db->single();

      return $row;
    }






     public function getAllIssuers(){
      $this->db->query('SELECT * FROM issuers  ORDER BY id DESC');
    
      

      $results = $this->db->resultSet();

      return $results;
    }




     //Add New Mandate
      public function AddIssuer($data){
      
      $this->db->query('INSERT INTO issuers (security_name, symbol,  name_of_contact , designation, phone, mobile, website, email, registras , issuer_code) VALUES(:security_name, :symbol, :name_of_contact, :designation, :phone, :mobile, :website,  :email, :registras, :issuer_code)');
    
      // Bind Values      
      $this->db->bind(':security_name', $data['security_name']);
      $this->db->bind(':symbol', $data['symbol']);
      $this->db->bind(':name_of_contact', $data['name_of_contact']);
      $this->db->bind(':designation', $data['designation']);
      $this->db->bind(':phone', $data['phone']);
      $this->db->bind(':mobile', $data['mobile']);
      $this->db->bind(':email', $data['email']);
       $this->db->bind(':website', $data['website']);
      $this->db->bind(':registras', $data['registras']);
      $this->db->bind(':issuer_code', $data['issuer_code']);
      
      


     
    

      // Execute
      if($this->db->execute()){
        return true;
      }
      else{
        return false;
      }           
            
    }





    public function getIssuerByCode($issuer_code){
      $this->db->query('SELECT * FROM issuers WHERE issuer_code = :issuer_code');

      $this->db->bind(':issuer_code', $issuer_code);

      $row = $this->db->single();

      return $row;
    }




    public function updateIssuer($data){
      $this->db->query('UPDATE issuers SET security_name = :security_name, symbol = :symbol,  name_of_contact = :name_of_contact, designation = :designation, phone = :phone, mobile = :mobile, website = :website,  email = :email, registras = :registras  WHERE issuer_code = :issuer_code');
      // Bind values
       $this->db->bind(':security_name', $data['security_name']);
      $this->db->bind(':symbol', $data['symbol']);
      $this->db->bind(':name_of_contact', $data['name_of_contact']);
      $this->db->bind(':designation', $data['designation']);
      $this->db->bind(':phone', $data['phone']);
      $this->db->bind(':mobile', $data['mobile']);
      $this->db->bind(':email', $data['email']);
       $this->db->bind(':website', $data['website']);
      $this->db->bind(':registras', $data['registras']);
      $this->db->bind(':issuer_code', $data['issuer_code']);
     
      

      // Execute
      if($this->db->execute()){
        return true;
      } else {
        return false;
      }
    }





     public function ChangeIssuersStatus($data){
      $this->db->query('UPDATE issuers SET issuer_status = :issuer_status   WHERE issuer_code = :issuer_code');
      // Bind values
      $this->db->bind(':issuer_status', $data['issuer_status']);
      $this->db->bind(':issuer_code', $data['issuer_code']);


      // Execute
      if($this->db->execute()){
        return true;
      } else {
        return false;
      }
    }







    public function getAllPIS(){
      $this->db->query('SELECT * FROM mandates
                      WHERE category="BROKER"
                      UNION
                      SELECT * FROM mandates
                      WHERE category="BROKER/DEALER"
                      UNION
                      SELECT * FROM mandates
                      WHERE category="ISSUINGHOUSE" ');
    
      

                    $results = $this->db->resultSet();

                    return $results;
                  }






      public function getAllMandateByCode($mandate_code){
      $this->db->query('SELECT  * FROM mandates  WHERE mandate_code = :mandate_code');

      $this->db->bind(':mandate_code', $mandate_code);

      $row = $this->db->single();

      return $row;
    }

  
    // ANNUAL FEE BROKER DEALER 
    public function getAllMandatePaymentBDAF($mandate_code){
      $this->db->query('SELECT  * FROM mandate_payment  WHERE mandate_code = :mandate_code AND fee_code = "BDAF" ');

      $this->db->bind(':mandate_code', $mandate_code);

      $row = $this->db->single();

      return $row;
    }




      // ANNUAL FEE BROKER 
     public function getAllMandatePaymentAFB($mandate_code){
      $this->db->query('SELECT  * FROM mandate_payment  WHERE mandate_code = :mandate_code AND fee_code = "AFB" ');

      $this->db->bind(':mandate_code', $mandate_code);

      $row = $this->db->single();

      return $row;
    }



      // ANNUAL FEE PLATFORM MAINTENANCE 
    public function getAllMandatePaymentAFPM($mandate_code){
      $this->db->query('SELECT  * FROM mandate_payment  WHERE mandate_code = :mandate_code AND fee_code = "AFPM" ');

      $this->db->bind(':mandate_code', $mandate_code);

      $row = $this->db->single();

      return $row;
    }



    /// ANNUAL FEE ISSUING HOUSE 
     public function getAllMandatePaymentAFIH($mandate_code){
      $this->db->query('SELECT  * FROM mandate_payment  WHERE mandate_code = :mandate_code AND fee_code = "AFIH" ');

      $this->db->bind(':mandate_code', $mandate_code);

      $row = $this->db->single();

      return $row;
    }





     


    /// ANNUAL FEE AUTHORISED TRADER 
     public function getAllMandatePaymentAFAT($mandate_code){
      $this->db->query('SELECT  * FROM mandate_payment  WHERE mandate_code = :mandate_code AND fee_code = "AFAT" ');

      $this->db->bind(':mandate_code', $mandate_code);

      $row = $this->db->single();

      return $row;
    }




      /// broker fee
      public function findMandateFeeAmountAFB(){ 
      $this->db->query(' SELECT  * FROM mandates_fees  WHERE fee_code = "AFB" ');         
      // Bind Values
     

       $row = $this->db->single();

          return $row;
        }




        /// trader fee
      public function findMandateFeeAmountAFAT(){ 
      $this->db->query(' SELECT  * FROM mandates_fees  WHERE fee_code = "AFAT" ');         
      // Bind Values
     

       $row = $this->db->single();

          return $row;
        }




   /// platform fee
      public function findMandateFeeAmountAFPM(){ 
      $this->db->query(' SELECT  * FROM mandates_fees  WHERE fee_code = "AFPM" ');         
      // Bind Values
     

       $row = $this->db->single();

          return $row;
        }




   /// broker dealer
      public function findMandateFeeAmountBDAF(){ 
      $this->db->query(' SELECT  * FROM mandates_fees  WHERE fee_code = "BDAF" ');         
      // Bind Values
     

       $row = $this->db->single();

          return $row;
        }





        /// issuing house
      public function findMandateFeeAmountAFIH(){ 
      $this->db->query(' SELECT  * FROM mandates_fees  WHERE fee_code = "AFIH" ');         
      // Bind Values
     

       $row = $this->db->single();

          return $row;
        }



        public function getTotalPayment($mandate_code){
      $this->db->query('SELECT
       SUM(amount) AS toltal_payment_report
        FROM mandate_payment WHERE mandate_code = :mandate_code ');     


      $this->db->bind(':mandate_code', $mandate_code);
     $row = $this->db->single();

      return $row;
    }



      public function getTotalPaymentSelectYear($mandate_code,$selected_year){
      $this->db->query('SELECT
       SUM(amount) AS toltal_payment_report
        FROM mandate_payment WHERE mandate_code = :mandate_code AND issued_year = :selected_year AND due_date !="" ');     


      $this->db->bind(':mandate_code', $mandate_code);
       $this->db->bind(':selected_year', $selected_year);
     $row = $this->db->single();

      return $row;
    }





    public function getTotalPayment2020($mandate_code){
      $this->db->query('SELECT
       SUM(amount) AS toltal_payment_report2020
        FROM mandate_payment WHERE mandate_code = :mandate_code AND issued_year = 2020');     


      $this->db->bind(':mandate_code', $mandate_code);
     $row = $this->db->single();

      return $row;
    }





     public function getTotalPayment2019($mandate_code){
      $this->db->query('SELECT
       SUM(amount) AS toltal_payment_report2019
        FROM mandate_payment WHERE mandate_code = :mandate_code AND issued_year = 2019');     


      $this->db->bind(':mandate_code', $mandate_code);
     $row = $this->db->single();

      return $row;
    }



     public function getTotalPayment2018($mandate_code){
      $this->db->query('SELECT
       SUM(amount) AS toltal_payment_report2018
        FROM mandate_payment WHERE mandate_code = :mandate_code AND issued_year = 2018');     


      $this->db->bind(':mandate_code', $mandate_code);
     $row = $this->db->single();

      return $row;
    }



     public function getTotalPayment2017($mandate_code){
      $this->db->query('SELECT
       SUM(amount) AS toltal_payment_report2017
        FROM mandate_payment WHERE mandate_code = :mandate_code AND issued_year = 2017');     


      $this->db->bind(':mandate_code', $mandate_code);
     $row = $this->db->single();

      return $row;
    }


     public function getTotalPayment2016($mandate_code){
      $this->db->query('SELECT
       SUM(amount) AS toltal_payment_report2016
        FROM mandate_payment WHERE mandate_code = :mandate_code AND issued_year = 2016');     


      $this->db->bind(':mandate_code', $mandate_code);
     $row = $this->db->single();

      return $row;
    }




     public function getTotalPayment2015($mandate_code){
      $this->db->query('SELECT
       SUM(amount) AS toltal_payment_report2015
        FROM mandate_payment WHERE mandate_code = :mandate_code AND issued_year = 2015');     


      $this->db->bind(':mandate_code', $mandate_code);
     $row = $this->db->single();

      return $row;
    }



     public function getTotalPayment2014($mandate_code){
      $this->db->query('SELECT
       SUM(amount) AS toltal_payment_report2014
        FROM mandate_payment WHERE mandate_code = :mandate_code AND issued_year = 2014');     


      $this->db->bind(':mandate_code', $mandate_code);
     $row = $this->db->single();

      return $row;
    }





    public function getTotalPaymentyear($mandate_code,$report_year){
      $this->db->query('SELECT
       SUM(amount) AS toltal_payment_report
        FROM mandate_payment WHERE mandate_code = :mandate_code AND issued_year = :report_year AND due_date !="" ');     


      $this->db->bind(':mandate_code', $mandate_code);
      $this->db->bind(':report_year', $report_year);
     $row = $this->db->single();

      return $row;
    }









     public function getEmailList(){
      $this->db->query('SELECT * FROM nasd_email_list  ORDER BY id DESC');
    
      

      $results = $this->db->resultSet();

      return $results;
    }




     //Add New Mandate
      public function AddToEmailList($data){
      
      $this->db->query('INSERT INTO nasd_email_list (email) VALUES(:email)');
    
      // Bind Values      
    
      $this->db->bind(':email', $data['email']);
    


     
    

      // Execute
      if($this->db->execute()){
        return true;
      }
      else{
        return false;
      }           
            
    }






     public function updateEmailList($data){
      $this->db->query('UPDATE nasd_email_list SET email = :email WHERE id = :id');
      // Bind values
      $this->db->bind(':email',  $data['email']);

      $this->db->bind(':id',  $data['id']);
     
      

      // Execute
      if($this->db->execute()){
        return true;
      } else {
        return false;
      }
    }




      public function deleteEmail($id){
      $this->db->query('DELETE FROM nasd_email_list WHERE id = :id');
      // Bind values
      $this->db->bind(':id', $id);

      // Execute
      if($this->db->execute()){
        return true;
      } else {
        return false;
      }
    }





    //Add New Mandate
      public function add_test_me($data){
      
      $this->db->query('INSERT INTO messages (message) VALUES(:message)');
    
      // Bind Values      
      
      $this->db->bind(':message', $data['message']);
     
 
      
      

      // Execute
      if($this->db->execute()){
        return true;
      }
      else{
        return false;
      }           
            
    }



     public function getresults(){
      $this->db->query('SELECT  * FROM messages');

    

    $row = $this->db->single();

      return $row;
    }




     public function Updateqty(){
      $this->db->query('UPDATE mandate_payment SET qty = 1 WHERE qty = "" ');
      // Bind values
      
    
    
      // Execute
      if($this->db->execute()){
        return true;
      } else {
        return false;
      }
    }




    // //Add New Mandate
    //   public function add_test_me($data){
      
    //   $this->db->query('INSERT INTO pi_receipt (mandate_code, fee_code, issued_year, receipt_date, receipt_code) VALUES(:mandate_code, :fee_code, :issued_year, :receipt_date, :receipt_code)');
    
    //   // Bind Values      
      
    //   $this->db->bind(':mandate_code', $data['mandate_code']);
    //   $this->db->bind(':fee_code', $data['fee_code']);
    //   $this->db->bind(':issued_year', $data['issued_year']);
    //   $this->db->bind(':receipt_date', $data['receipt_date']);
    //   $this->db->bind(':receipt_code', $data['receipt_code']);
     
 
      
      

    //   // Execute
    //   if($this->db->execute()){
    //     return true;
    //   }
    //   else{
    //     return false;
    //   }           
            
    // }







  }