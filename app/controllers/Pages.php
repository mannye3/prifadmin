<?php
  class Pages extends Controller {
    public function __construct(){
      $this->accountModel = $this->model('Account');
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
        if($this->accountModel->findUserByEmail($data['email'])){
          // User found
        } else {
          // User not found
          $data['email_err'] = 'No user found';
        }
 
        // Make sure errors are empty
        if(empty($data['email_err']) && empty($data['password_err'])){
          // Validated
          // Check and set logged in user
          $loggedInUser = $this->accountModel->login($data['email'], $data['password']);


          if($loggedInUser){
            // Create Session
            $this->createUserSession($loggedInUser);
          } else {
            $data['password_err'] = 'Password incorrect';

            $this->view('pages/index', $data);
          }
        } else {
          // Load view with errors
          $this->view('pages/index', $data);
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
        $this->view('pages/index', $data);
      }
    }



      public function forget_password(){
      // Check for POST
      if($_SERVER['REQUEST_METHOD'] == 'POST'){
        // Process form
        // Sanitize POST data
        $_POST = filter_input_array(INPUT_POST, FILTER_SANITIZE_STRING);
        
        // Init data
        $data =[
          'email' => trim($_POST['email']),
          'email_err' => '',     
        ];

        // Validate Email
        if(empty($data['email'])){
          $data['email_err'] = 'Pleae enter email';
        }

       
        // Check for user/email
        if($this->userModel->findUserByEmail($data['email'])){
          // User found
        } else {
          // User not found
          $data['email_err'] = 'No user found';
        }



        // Make sure errors are empty
        if(empty($data['email_err'])){

           if($this->userModel->forgetPassword($data['email'])){
           flash('register_success', '<div class="notification success closeable">
                <p><span>check your email for the reset link</span> </p>
                <a class="close" href="#"></a>
            </div>');
            redirect('users/email/'.$data['email'].'');
          } 

        } else {
          // Load view with errors
          $this->view('users/forget_password', $data);
        }


      } else {
        // Init data
        $data =[    
          'email' => '',
          'email_err' => ''
                
        ];

        // Load view
        $this->view('users/forget_password', $data);
      }
    }

    public function createUserSession($user){
      $_SESSION['user_id'] = $user->id;
      $_SESSION['user_email'] = $user->email;
      $_SESSION['user_name'] = $user->name;
      $_SESSION['user_phone'] = $user->phone;
      
      redirect('accounts');
    }

    public function logout(){
      unset($_SESSION['user_id']);
      unset($_SESSION['user_email']);
      unset($_SESSION['user_name']);
      unset($_SESSION['user_phone']);
      session_destroy();
      redirect('pages/index');
    }

  }