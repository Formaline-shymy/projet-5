<?php
  class Post {
    private $db;

    public function __construct(){
      $this->db = new Database;
    }

    public function getPosts(){
      $this->db->query('SELECT *,
                        posts.id as postId,
                        admins.id as adminId,
                        posts.created_at as postCreated,
                        admins.created_at as adminCreated
                        FROM posts
                        INNER JOIN admins
                        ON posts.admin_id = admins.id
                        ORDER BY posts.created_at DESC
                        ');

      $results = $this->db->resultSet();

      return $results;
    }

    public function countPosts() {
      $this->db->query('SELECT * FROM posts');
           
        $this->db->resultSet();
           
        $results = $this->db->rowCount();
           
        return $results;
    }

    public function countPostsById($admin_id) {
      $this->db->query('SELECT * FROM posts WHERE admin_id = :admin_id');
      $this->db->bind(':admin_id', $admin_id);

        $this->db->resultSet();
           
        $results = $this->db->rowCount();
           
        return $results;
     }
  

    public function addPost($data){
      $this->db->query('INSERT INTO posts (title, admin_id, body) VALUES(:title, :admin_id, :body)');
      // Bind values
      $this->db->bind(':title', $data['title']);
      $this->db->bind(':admin_id', $data['admin_id']);
      $this->db->bind(':body', $data['body']);

      // Execute
      if($this->db->execute()){
        return true;
      } else {
        return false;
      }
    }

    public function updatePost($data){
      $this->db->query('UPDATE posts SET title = :title, body = :body WHERE id = :id');
      // Bind values
      $this->db->bind(':id', $data['id']);
      $this->db->bind(':title', $data['title']);
      $this->db->bind(':body', $data['body']); 

      // Execute
      if($this->db->execute()){
        return true;
      } else {
        return false;
      }
    }
  

    public function getPostById($id){
      $this->db->query('SELECT * FROM posts WHERE id = :id');
      $this->db->bind(':id', $id);

      $row = $this->db->single();

      return $row;
    }
  
    public function getPostsByAdminId($admin_id){
      $this->db->query('SELECT * FROM posts WHERE admin_id = :admin_id');
      $this->db->bind(':admin_id', $admin_id);

      $row = $this->db->single();

      return $row;
    }

    public function deletePost($id){
      $this->db->query('DELETE FROM posts WHERE id = :id');
      // Bind values
      $this->db->bind(':id', $id);

      // Execute
      if($this->db->execute()){
        return true;
      } else {
        return false;
      }
    }
  }