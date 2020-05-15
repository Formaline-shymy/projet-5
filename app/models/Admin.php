<?php
  class Admin {
    private $db;

    public function __construct(){
      $this->db = new Database;
    }
       
    public function register ($data){
      $this->db-> query('INSERT INTO admins (name, familyname, nick, password, email) VALUES (:name,:familyname, :nick, :password,:email)');
     // Bind all values
      $this->db->bind(':name', $data ['name']);
      $this->db->bind(':familyname', $data ['familyname']);
      $this->db->bind(':nick', $data ['nick']);
      $this->db->bind(':password', $data ['password']);
      $this->db->bind(':email', $data ['email']);
            
        //Execute
        if ($this->db ->execute()){
          return true;
       }else{
          return false;
            }    
    }
  
    public function login($nick, $password){
      $this->db->query('SELECT * FROM admins WHERE nick = :nick');
      $this->db->bind(':nick', $nick);

          $row = $this->db->single();

          $hashed_password = $row ->password;

          if(password_verify($password, $hashed_password)){
            return $row;
          } else{
            return false;         
           }
    }

        // Check admin by nick
    public function findAdminByNick($nick){
      $this->db->query('SELECT * FROM admins WHERE nick = :nick');
      $this->db->bind(':nick', $nick);
    
      $row = $this->db->single();
    
          // Check row
          if($this->db->rowCount() > 0){
            return true;
          } else {
            return false;
          }
    }

         // Get Admin by ID
    public function getAdminById($id){
      $this->db->query('SELECT * FROM admins WHERE id = :id');
      // Bind value
      $this->db->bind(':id', $id);

      $row = $this->db->single();

      return $row;
    }

    public function editProfil($data){
      $this->db->query('UPDATE admins SET name = :name, familyname = :familyname, nick = :nick, email=:email WHERE id = :id');
      $this->db->bind(':id', $data ['id']);
      $this->db->bind(':name', $data ['name']);
      $this->db->bind(':familyname', $data ['familyname']);
      $this->db->bind(':nick', $data ['nick']);
      $this->db->bind(':email', $data ['email']);
          // Execute
          if ($this->db->execute()) {
          return true;
          } else {
          return false;
          }
    }

  }
        
 