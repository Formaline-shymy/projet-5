<?php
  class User {
        private $db;

        public function __construct(){
        $this->db = new Database;
        }
       
        
        //Register User
        public function register ($data){
            $this->db-> query('INSERT INTO users (name, familyname, nick, password, email, plan) VALUES (:name,:familyname, :nick, :password,:email, :plan)');
            // Bind all values
            $this->db->bind(':name', $data ['name']);
            $this->db->bind(':familyname', $data ['familyname']);
            $this->db->bind(':nick', $data ['nick']);
            $this->db->bind(':password', $data ['password']);
            $this->db->bind(':email', $data ['email']);
            $this->db->bind(':plan', $data ['plan']);
            
            //Execute
            if ($this->db ->execute()){
                return true;
            }else{
                return false;
            }
        }
        //login user
        public function login($nick, $password){
          $this->db->query('SELECT * FROM users WHERE nick = :nick');
          $this->db->bind(':nick', $nick);

          $row = $this->db->single();

          $hashed_password = $row ->password;

          if(password_verify($password, $hashed_password)){
            return $row;
          } else{
            return false;         
           }
        }

        // Check user by nick
         public function findUserByNick($nick){
          $this->db->query('SELECT * FROM users WHERE nick = :nick');
          $this->db->bind(':nick', $nick);
    
          $row = $this->db->single();
    
          // Check row
          if($this->db->rowCount() > 0){
            return true;
          } else {
            return false;
          }
        }
      
        public function getUserById($id){
          $this->db->query('SELECT * FROM users WHERE id = :id');
          $this->db->bind(':id', $id);
    
          $row = $this->db->single();

          return $row;
        }
        
        public function getUsers(){
          $this->db->query('SELECT * FROM users               
                            ORDER BY created_at DESC
                            ');
    
          $results = $this->db->resultSet();
    
          return $results;
        }


        public function countUsers() {
          $this->db->query('SELECT * FROM users');
               
            $this->db->resultSet();
               
            $results = $this->db->rowCount();
               
            return $results;
        }

        public function editProfil($data){
          $this->db->query('UPDATE users SET name = :name, familyname = :familyname, nick = :nick, email=:email WHERE id = :id');
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


  

