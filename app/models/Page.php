<?php
class Page {
    private $db;
  
    public function __construct(){
      $this->db = new Database;
    }

 // Contact Page
    public function getContactPage(){
      $this->db->query("SELECT * FROM tblpage WHERE pageType='Contact' ");

      $results = $this->db->resultSet();

      return $results;
    } 

    public function getPagecontactById($id){
      $this->db->query("SELECT * FROM tblpage WHERE id = :id");
      $this->db->bind(':id', $id);

      $row = $this->db->single();

      return $row;
    }

    public function updateContactPage($data){
      $this->db->query("UPDATE tblpage SET description = :description, email= :email, mobileNumber = :mobileNumber  WHERE id = :id");
      // Bind values
      $this->db->bind(':id', $data['id']);
      $this->db->bind(':description', $data['description']);
      $this->db->bind(':email', $data['email']);
      $this->db->bind(':mobileNumber', $data['mobileNumber']);
  
      // Execute
      if($this->db->execute()){
        return true;
      } else {
        return false;
      }
    }

// HomePage
    public function getHomePage(){
      $this->db->query("SELECT * FROM tblpage WHERE pageType='Acceuil'");
      // Bind values
    
      $results = $this->db->resultSet();

      return $results;
    } 

    public function getPagehomeById($id){
      $this->db->query('SELECT * FROM tblpage WHERE id = :id');
      $this->db->bind(':id', $id);

      $row = $this->db->single();

      return $row;
    }

    public function updateHomePage($data){
      $this->db->query("UPDATE tblpage SET description = :description  WHERE id = :id");
      // Bind values
      $this->db->bind(':id', $data['id']);
      $this->db->bind(':description', $data['description']);
    
      // Execute
      if($this->db->execute()){
        return true;
      } else {
        return false;
      }
    }

   // Plans Page
    public function getPlansPage(){
      $this->db->query("SELECT * FROM tblplan");

      $results = $this->db->resultSet();

      return $results;
    } 

    
    public function getPageplanById($id){
      $this->db->query('SELECT * FROM tblplan WHERE id = :id');
      $this->db->bind(':id', $id);

      $row = $this->db->single();

      return $row;
    }

    public function updatePlansPage($data){
      $this->db->query("UPDATE tblplan SET type= :type, price = :price, description = :description, detail1= :detail1, detail2= :detail2, detail3= :detail3, summary = :summary WHERE id = :id");
      // Bind values
      $this->db->bind(':id', $data['id']);
      $this->db->bind(':type', $data['type']);
      $this->db->bind(':price', $data['price']);
      $this->db->bind(':description', $data['description']);
      $this->db->bind(':detail1', $data['detail1']);
      $this->db->bind(':detail2', $data['detail2']);
      $this->db->bind(':detail3', $data['detail3']);
      $this->db->bind(':summary', $data['summary']);


      // Execute
      if($this->db->execute()){
        return true;
      } else {
        return false;
      }
    }
      

}
