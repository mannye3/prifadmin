<?php
  class Accounts extends Controller {
    public function __construct(){
      if(!isLoggedIn()){
        redirect('pages/index');
      }

      $this->accountModel = $this->model('Account');
     
    }
    public function index(){

     // $TotalPro_list = $this->accountModel->GetAllProperties();
      $listing_num_pro = $this->accountModel->GetAllProperties();
      $listing_num_agent = $this->accountModel->GetAllAgents();
      $listing_num_user = $this->accountModel->GetAllUsers();

       $data = [
         'listing_num_pro' => $listing_num_pro,
         'listing_num_agent' => $listing_num_agent,
          'listing_num_user' => $listing_num_user
      ];
     
      $this->view('accounts/index', $data);
    }



    public function users(){

      $users_info = $this->accountModel->getUsers();

      $data = [
         'users_info' => $users_info
      ];

      $this->view('accounts/users', $data);
    }





     public function user($id){
      if($_SERVER['REQUEST_METHOD'] == 'POST'){

        // Sanitize POST array
        $_POST = filter_input_array(INPUT_POST, FILTER_SANITIZE_STRING);

        // Init data
            $data =[
              'id' => $id,
              'name' => trim($_POST['name']),
              'email' => trim($_POST['email']),
              'phone' => trim($_POST['phone']),
              'name_err' => ''
            ];

            // Validate Email
            if(empty($data['name'])){
              $data['name_err'] = 'Pleae enter name';
            } 
            // Make sure errors are empty
            if(empty($data['name_err'])){
              // Validated
         // $data['password'] = password_hash($data['password'], PASSWORD_DEFAULT);
          // Validated
          if($this->accountModel->updateUserInfo($data)){
            flash('update_message', 'User Info Updated Successfully');
            redirect('accounts/users');
          } else {
            die('Something went wrong');
          }
        } else {
          // Load view with errors
          $this->view('accounts/user', $data);
        }

      } else {
      
        $user_info = $this->accountModel->getUserById($id);

            $data = [
               'user_info' => $user_info
            ];
  
        $this->view('accounts/user', $data);
      }
    }


     public function edit_userpass($id){
      if($_SERVER['REQUEST_METHOD'] == 'POST'){

        // Sanitize POST array
        $_POST = filter_input_array(INPUT_POST, FILTER_SANITIZE_STRING);

        // Init data
            $data =[
              'id' => $id,
              'password' => trim($_POST['password']),
              'password_err' => ''
            ];

            // Validate Email
            if(empty($data['password'])){
              $data['password_err'] = 'Pleae enter name';
            } 
            // Make sure errors are empty
            if(empty($data['password_err'])){
              // Validated
         $data['password'] = password_hash($data['password'], PASSWORD_DEFAULT);
          // Validated
          if($this->accountModel->updateUserPassword($data)){
            flash('update_message', 'User Password Updated');
            redirect('accounts/users');
          } else {
            die('Something went wrong');
          }
        } else {
          // Load view with errors
          $this->view('accounts/user', $data);
        }

      } else {
      
        $user_info = $this->accountModel->getUserById($id);

            $data = [
               'user_info' => $user_info
            ];
  
        $this->view('accounts/user', $data);
      }
    }


           public function delete_user($id){
            
            
              if($this->accountModel->deleteUser($id)){
                flash('update_message', 'User Removed');
                redirect('accounts/users');
              } else {
                die('Something went wrong');
              }


              }


               public function user_staus($id){

                $active = 1;

                $inactive = 0;
              
               $user_info = $this->accountModel->getUserById($id);

               if ($user_info->status == 1) {

                 if($this->accountModel->userStatusDisactive($id,$inactive)){
                flash('update_message', 'User Disable');
                redirect('accounts/users');
                
               }
             }

               elseif ($user_info->status == 0) {

                 if($this->accountModel->userStatusActive($id,$active)){
                flash('update_message', 'User Enable');
                redirect('accounts/users');
               }
             }

            
              else {
                die('Something went wrong');
              }


              

            }
      



     public function agents(){
      $data = [
        'title' => 'About Us'
      ];

      $this->view('accounts/agents', $data);
    }


     public function agent(){
      $data = [
        'title' => 'About Us'
      ];

      $this->view('accounts/agent', $data);
    }

    public function properties(){
      $data = [
        'title' => 'About Us'
      ];

      $this->view('accounts/properties', $data);
    }


     public function property(){
      $data = [
        'title' => 'About Us'
      ];

      $this->view('accounts/property', $data);
    }

    public function edit_property(){
      $data = [
        'title' => 'About Us'
      ];

      $this->view('accounts/edit_property', $data);
    }
  }