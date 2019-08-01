<?php
  class Account {
    private $db;

    public function __construct(){
      $this->db = new Database;
    }

   

    // Login User
    public function login($email, $password){
      $this->db->query('SELECT * FROM admin WHERE email = :email');
      $this->db->bind(':email', $email);

      $row = $this->db->single();

      $hashed_password = $row->password;
      if(password_verify($password, $hashed_password)){
        return $row;
      } else {
        return false;
      }
    }




      // Forget Password
    public function forgetPassword($email){
      $this->db->query('SELECT * FROM users WHERE email = :email');
      $this->db->bind(':email', $email);

      $row = $this->db->single();

 
        return $row;
    }




    // Find user by email
    public function findUserByEmail($email){
      $this->db->query('SELECT * FROM admin WHERE email = :email');
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



    



     public function getUserDetail($email){
      $this->db->query('SELECT * FROM admin WHERE email = :email');
      $this->db->bind(':email', $email);

      $row = $this->db->single();

      return $row;
    }



    public function updateUserPassword($data){
      $this->db->query('UPDATE admin SET password = :password  WHERE email = :email');
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




    public function GetAllProperties(){
      $this->db->query('SELECT COUNT(id) AS TotalCountProperty FROM property ');

      // Bind Values
     

      $row = $this->db->single();
      
      if($this->db->rowCount() > 0){
        return $row;
      } else {
        return 0;
      }
    }





     public function GetAllAgents(){
      $this->db->query('SELECT COUNT(id) AS TotalCountAgents FROM users WHERE type= "Agent" ');

      // Bind Values
     

      $row = $this->db->single();
      
      if($this->db->rowCount() > 0){
        return $row;
      } else {
        return 0;
      }
    }





    public function GetAllUsers(){
      $this->db->query('SELECT COUNT(id) AS TotalCountUsers FROM users WHERE type= "User" ');

      // Bind Values
     

      $row = $this->db->single();
      
      if($this->db->rowCount() > 0){
        return $row;
      } else {
        return 0;
      }
    }




   
  }