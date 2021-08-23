<?php
  class Apis extends Controller {
    public function __construct(){


      $this->accountModel = $this->model('Account');
       $this->account3Model = $this->model('Account3');
      $this->utilityModel = $this->model('Utility');


    }

     public function new_account(){

                  
                  $this->accountModel->deleteallaccount();
                  $this->accountModel->Addnewallaccount();

                  $allAccount = $this->accountModel->getAllAccount();      
                    $data = [
                  'allAccount' => $allAccount,
                 
                    ];

                     $json_response = json_encode($data);
                    echo $json_response; die();

                  
                 
            }



  



  }