<?php
  class Accounts extends Controller {
    public function __construct(){
      // $this->postModel = $this->model('Post');
    }
    
    public function index(){
       $data = [
        'title' => 'About Us'
      ];
     
      $this->view('accounts/index', $data);
    }



    public function users(){
      $data = [
        'title' => 'About Us'
      ];

      $this->view('accounts/users', $data);
    }



    public function user(){
      $data = [
        'title' => 'About Us'
      ];

      $this->view('accounts/user', $data);
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