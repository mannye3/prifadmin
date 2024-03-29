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

              $agents_info = $this->accountModel->getAgents();
              $agents_pro = $this->accountModel->GetTotalAgentPro();


              $data = [
                 'agents_info' => $agents_info,
                 'agents_pro' => $agents_pro
              ];

              $this->view('accounts/agents', $data);
            }





     public function agent($id){
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
          if($this->accountModel->updateAgentInfo($data)){
            flash('update_message', 'User Info Updated Successfully');
            redirect('accounts/agents');
          } else {
            die('Something went wrong');
          }
        } else {
          // Load view with errors
          $this->view('accounts/user', $data);
        }

      } else {
 
        $agent_info = $this->accountModel->getAgentById($id);
        $agent_property = $this->accountModel->getAgentsProperties($id);
        $active_property = $this->accountModel->getAgentsActiveProperties($id);
        $pending_property = $this->accountModel->getAgentsPendingProperties($id);
         $agentpro = $this->accountModel->getAllAgentsPro($id);

            $data = [
               'agent_info' => $agent_info,
               'agent_property' => $agent_property,
               'active_property' => $active_property,
               'pending_property' => $pending_property,
               'agentpro' => $agentpro
            ];
  
        $this->view('accounts/agent', $data);
      }
    }


     public function edit_agentpass($id){
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
          if($this->accountModel->updateAgentPassword($data)){
            flash('update_message', 'User Password Updated');
            redirect('accounts/agents');
          } else {
            die('Something went wrong');
          }
        } else {
          // Load view with errors
          $this->view('accounts/agent', $data);
        }

      } else {
      
        $user_info = $this->accountModel->getUserById($id);

            $data = [
               'user_info' => $user_info
            ];
  
        $this->view('accounts/agent', $data);
      }
    }


           public function delete_agent($id){
            
            
              if($this->accountModel->deleteAgent($id)){
                flash('update_message', 'User Removed');
                redirect('accounts/agents');
              } else {
                die('Something went wrong');
              }


              }


               public function agent_status($id){

                $active = 1;

                $inactive = 0;
              
               $agent_info = $this->accountModel->getAgentById($id);

               if ($agent_info->status == 1) {

                 if($this->accountModel->agentStatusDisactive($id,$inactive)){
                flash('update_message', 'User Disable');
                redirect('accounts/agents');
                
               }
             }

               elseif ($agent_info->status == 0) {

                 if($this->accountModel->agentStatusActive($id,$active)){
                flash('update_message', 'User Enable');
                redirect('accounts/agents');
               }
             }

            
              else {
                die('Something went wrong');
              }


              

            }




    public function properties(){
      $properties_info = $this->accountModel->getProperties();
      
          $data = [
        'properties_info' => $properties_info 
         
      ];

       $this->view('accounts/properties', $data);

    }


    public function property($ref_id){

       
      $pro_info = $this->accountModel->getPropertyByRef($ref_id);
      $pro_pics = $this->accountModel->getPropertyPictures($ref_id);
      
      
      

      $data = [
        'pro_info' => $pro_info,
         'pro_pics' => $pro_pics,
         
         
        
      ];

      $this->view('accounts/property', $data);
    }


     public function edit_property($ref_id){
          if($_SERVER['REQUEST_METHOD'] == 'POST'){
            // Sanitize POST array
            $_POST = filter_input_array(INPUT_POST, FILTER_SANITIZE_STRING);

            $data = [
              'ref_id' => $ref_id,
              'title' => trim($_POST['title']),
              'type' => trim($_POST['type']),
              'purpose' => trim($_POST['purpose']),
              'price' => trim($_POST['price']),
              'rooms' => trim($_POST['rooms']),
              'bathrooms' => trim($_POST['bathrooms']),
              'details' => trim($_POST['editor1']),
              'address' => trim($_POST['address']),
              'latitude' => trim($_POST['latitude']),
              'longitude' => trim($_POST['longitude']),
              'state' => trim($_POST['state']),
              'lga' => trim($_POST['lga']),
              'title_err' => '',
              'address_err' => ''
            ];


            // Validate data
            if(empty($data['title'])){
              $data['title_err'] = 'Please enter title';
            }
           
            // Make sure no errors
            if(empty($data['title_err'])){
              // Validated
              if($this->accountModel->updateProperty($data)){
                flash('update_message', 'Property Updated');
            
                redirect('accounts/properties');
              } else {
                die('Something went wrong');
              }
            } else {
              // Load view with errors
              $this->view('accounts/edit_property', $data);
            }

          } else {
            // Get existing post from model
             $pro_info = $this->accountModel->getPropertyByRef($ref_id);

          

            $data = [
            'pro_info' => $pro_info,
            
          ];

      
            $this->view('accounts/edit_property', $data);
          }
        }


         public function delete_property($ref_id){
            
              // Get existing post from model
             $pro_info = $this->accountModel->getPropertyByRef($ref_id);
            
           
              if($this->accountModel->deleteProperty($ref_id)){
                flash('update_message', 'Property Removed');
                redirect('accounts/properties');
              } else {
                die('Something went wrong');
              }

              }


               public function property_status($ref_id){

                $active = 1;

                $inactive = 0;
              
               $pro_info = $this->accountModel->getPropertyByRef($ref_id);

               if ($pro_info->status == 1) {

                 if($this->accountModel->propertyStatusDisactive($ref_id,$inactive)){
                flash('update_message', 'Property Disable');
                redirect('accounts/properties');
                
               }
             }

               elseif ($agent_info->status == 0) {

                 if($this->accountModel->propertyStatusActive($ref_id,$active)){
                flash('update_message', 'Property Enable');
                redirect('accounts/properties');
               }
             }

            
              else {
                die('Something went wrong');
              }


              

            }
  }