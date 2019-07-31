<?php
  class Pages extends Controller {
    public function __construct(){
      $this->postModel = $this->model('Post');
    }
    
    public function index(){
       $data = [
        'title' => 'About Us'
      ];
     
      $this->view('pages/index', $data);
    }



    public function forget_password(){
      $data = [
        'title' => 'About Us'
      ];

      $this->view('pages/forget_password', $data);
    }
  }