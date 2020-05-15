<?php
  class Flow {
    private $db;
  
    public function __construct(){
      $this->db = new Database;
    }
    

    public function getFlows(){
      
      $this->db->query('SELECT *,
                        flows.id as flowId,
                        admins.id as adminId,
                        admins.created_at as adminCreated
                        FROM flows
                        INNER JOIN admins
                        ON flows.admin_id = admins.id
                        ORDER BY flowId ASC
                        ');

      $results = $this->db->resultSet();
      return $results;
    }

    public function getDiffFlows(){
      $this->db->query('SELECT DISTINCT type FROM flows ORDER BY id');
     
      $results = $this->db->resultSet();
      return $results;
    }
     
    public function getDiffDay(){
      $this->db->query('SELECT DISTINCT frequency FROM flows ORDER BY id');
      
      $results = $this->db->resultSet();
      return $results;
    }

    public function getDiffTime(){
      $this->db->query('SELECT DISTINCT timing FROM flows ORDER BY `flows`.`timing` ASC');
      
      $results = $this->db->resultSet();
      return $results;
    }


    public function countFlows() {
      $this->db->query('SELECT * FROM flows');
           
        $this->db->resultSet();
           
        $results = $this->db->rowCount();
           
        return $results;
    }

    public function countFlowsById($admin_id) {
      $this->db->query('SELECT * FROM flows WHERE admin_id = :admin_id');
      $this->db->bind(':admin_id', $admin_id);
      
        $this->db->resultSet();
           
        $results = $this->db->rowCount();
           
        return $results;
    }

    public function getFlowById($admin_id){
      $this->db->query('SELECT * FROM flows WHERE admin_id = :admin_id');
      $this->db->bind(':admin_id', $admin_id);

     $row = $this->db->single();

      return $row;
    }
  

    public function addFlow($data){
      $this->db->query('INSERT INTO flows (admin_id, type, frequency, timing) VALUES(:admin_id, :type, :frequency, :timing)');
      // Bind values
      $this->db->bind(':admin_id', $data['admin_id']);
      $this->db->bind(':type', $data['type']);
      $this->db->bind(':frequency', $data['frequency']);  
      $this->db->bind(':timing', $data['timing']);

      // Execute
      if($this->db->execute()){
        return true;
      } else {
        return false;
      }
    }

    public function listYoga(){
      $this->db->query('SELECT * FROM flowslist');
      
      $results = $this->db->resultSet();

      return $results;
    }

  }