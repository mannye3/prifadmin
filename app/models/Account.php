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



    // public function updateUserPassword($data){
    //   $this->db->query('UPDATE admin SET password = :password  WHERE email = :email');
    //   // Bind values
    //   $this->db->bind(':email',  $data['email']);
    //   $this->db->bind(':password', $data['password']);
    
      

    //   // Execute
    //   if($this->db->execute()){
    //     return true;
    //   } else {
    //     return false;
    //   }
    // }




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





      public function getUsers(){
      $this->db->query('SELECT *  FROM users WHERE type= "User" ');
      
      $results = $this->db->resultSet();

      return $results;
    }



    public function getUserById($id){
      $this->db->query('SELECT *  FROM users WHERE id= :id ');
      
       $this->db->bind(':id', $id);

      $row = $this->db->single();

      return $row;
    }


     public function updateUserInfo($data){
      $this->db->query('UPDATE users SET name = :name, email = :email, phone = :phone WHERE id = :id');
      // Bind values
       $this->db->bind(':id', $data['id']);
       $this->db->bind(':name', $data['name']);
      $this->db->bind(':email',  $data['email']);
      $this->db->bind(':phone',  $data['phone']);
     
    
      

      // Execute
      if($this->db->execute()){
        return true;
      } else {
        return false;
      }
    }



     public function updateUserPassword($data){
      $this->db->query('UPDATE users SET password = :password  WHERE id = :id');
      // Bind values
       $this->db->bind(':id', $data['id']);
      $this->db->bind(':password', $data['password']);
    
      

      // Execute
      if($this->db->execute()){
        return true;
      } else {
        return false;
      }
    }



    public function deleteUser($id){
      $this->db->query('DELETE FROM users WHERE id = :id');
      // Bind values
      $this->db->bind(':id', $id);

      // Execute
      if($this->db->execute()){
        return true;
      } else {
        return false;
      }
    }


    public function userStatusActive($id,$active){
      $this->db->query('UPDATE users SET status = 1  WHERE id = :id');
      // Bind values
      $this->db->bind(':id', $id);

      // Execute
      if($this->db->execute()){
        return true;
      } else {
        return false;
      }
    }


    public function userStatusDisactive($id,$inactive){
      $this->db->query('UPDATE users SET status = 0  WHERE id = :id');
      // Bind values
      $this->db->bind(':id', $id);

      // Execute
      if($this->db->execute()){
        return true;
      } else {
        return false;
      }
    }



       public function getAgents(){
        $this->db->query('SELECT *  FROM users WHERE type= "Agent" ');
        
        $results = $this->db->resultSet();

        return $results;
      }


      //  public function getAgentsProperties($id){
      //   $this->db->query('SELECT *  FROM property WHERE user_id= :id ');
        
      //   $results = $this->db->resultSet();

      //   return $results;
      // }


    //  public function getAgentsProperties($id){
    //   $this->db->query('SELECT *  FROM property WHERE user_id = :id ');
      
    //    $this->db->bind(':id', $id);

    //   $row = $this->db->single();

    //   return $row;
    // }



    public function getAgentById($id){
      $this->db->query('SELECT *  FROM users WHERE id= :id ');
      
       $this->db->bind(':id', $id);

      $row = $this->db->single();

      return $row;
    }


     public function updateAgentInfo($data){
      $this->db->query('UPDATE users SET name = :name, email = :email, phone = :phone WHERE id = :id');
      // Bind values
       $this->db->bind(':id', $data['id']);
       $this->db->bind(':name', $data['name']);
      $this->db->bind(':email',  $data['email']);
      $this->db->bind(':phone',  $data['phone']);
     
    
      

      // Execute
      if($this->db->execute()){
        return true;
      } else {
        return false;
      }
    }



     public function updateAgentPassword($data){
      $this->db->query('UPDATE users SET password = :password  WHERE id = :id');
      // Bind values
       $this->db->bind(':id', $data['id']);
      $this->db->bind(':password', $data['password']);
    
      

      // Execute
      if($this->db->execute()){
        return true;
      } else {
        return false;
      }
    }



    public function deleteAgent($id){
      $this->db->query('DELETE FROM users WHERE id = :id');
      // Bind values
      $this->db->bind(':id', $id);

      // Execute
      if($this->db->execute()){
        return true;
      } else {
        return false;
      }
    }


    public function agentStatusActive($id,$active){
      $this->db->query('UPDATE users SET status = 1  WHERE id = :id');
      // Bind values
      $this->db->bind(':id', $id);

      // Execute
      if($this->db->execute()){
        return true;
      } else {
        return false;
      }
    }


    public function agentStatusDisactive($id,$inactive){
      $this->db->query('UPDATE users SET status = 0  WHERE id = :id');
      // Bind values
      $this->db->bind(':id', $id);

      // Execute
      if($this->db->execute()){
        return true;
      } else {
        return false;
      }
    }



      public function getAgentsProperties($id){
      $this->db->query('SELECT COUNT(id) AS TotalAgentProperty FROM property WHERE user_id = :id  ');

      // Bind Values
     $this->db->bind(':id', $id);

      $row = $this->db->single();
      
      if($this->db->rowCount() > 0){
        return $row;
      } else {
        return 0;
      }
    }


    public function getAgentsActiveProperties($id){
      $this->db->query('SELECT COUNT(id) AS TotalActiveProperty FROM property WHERE user_id = :id AND status =1  ');

      // Bind Values
     $this->db->bind(':id', $id);

      $row = $this->db->single();
      
      if($this->db->rowCount() > 0){
        return $row;
      } else {
        return 0;
      }
    }


    public function getAgentsPendingProperties($id){
      $this->db->query('SELECT COUNT(id) AS TotalPendingProperty FROM property WHERE user_id = :id AND status =0  ');

      // Bind Values
     $this->db->bind(':id', $id);

      $row = $this->db->single();
      
      if($this->db->rowCount() > 0){
        return $row;
      } else {
        return 0;
      }
    }



     public function getAllAgentsPro($id){
        $this->db->query('SELECT *  FROM property WHERE user_id= :id ');

         // Bind Values
        $this->db->bind(':id', $id);

        $results = $this->db->resultSet();

        return $results;
      }



       public function getPropertyByRef($ref_id){
      $this->db->query('SELECT * FROM property WHERE ref_id = :ref_id');
      $this->db->bind(':ref_id', $ref_id);

      $row = $this->db->single();

      return $row;
    }



    public function getPropertyPictures($ref_id){
      $this->db->query('SELECT * FROM pro_img WHERE ref_id = :ref_id');
      $this->db->bind(':ref_id', $ref_id);

      $results = $this->db->resultSet();

      return $results;
    }


    

   
  }