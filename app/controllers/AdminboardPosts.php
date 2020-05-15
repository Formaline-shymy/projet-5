<?php
class AdminboardPosts extends Controller {
    public function __construct(){
      if(!isAdminLoggedIn()){
        redirect('index');
      }

      $this->postModel = $this->model('Post');
      $this->adminModel = $this->model('Admin');
    }

    public function index(){
      // Get posts
      $posts = $this->postModel->getPosts();

      $data = [
        'posts' => $posts
      ];

      $this->view('adminboardposts/index', $data);
    }

    public function add(){
      if($_SERVER['REQUEST_METHOD'] == 'POST'){
        // Sanitize POST array
        $_POST = filter_input_array(INPUT_POST, FILTER_SANITIZE_STRING);

        $data = [
          'title' => trim($_POST['title']),
          'body' => trim($_POST['body']),
          'admin_id' => $_SESSION['admin_id'],
          'title_err' => '',
          'body_err' => ''
        ];

        // Validate data
        if(empty($data['title'])){
          $data['title_err'] = 'Veuillez remplir ce champ';}
        if(empty($data['body'])){
          $data['body_err'] = 'Veuillez remplir ce champ';}
 

        // Make sure no errors
        if(empty($data['title_err']) && empty($data['body_err'])){
          // Validated
          if($this->postModel->addPost($data)){
            redirect('adminboardposts/index');
          } else {
            die('oups');
          }
        } else {
          // Load view with errors
          $this->view('adminboardposts/add', $data);
        }

      } else {
        $data = [
          'title' => '',
          'body' => '',
        ];
  
        $this->view('adminboardposts/add', $data);
      }
    }

    public function edit($id){
      if($_SERVER['REQUEST_METHOD'] == 'POST'){ 
        // Sanitize POST array
        $_POST = filter_input_array(INPUT_POST, FILTER_SANITIZE_STRING);

        $data = [
          'id' => $id,
          'title' => trim($_POST['title']),
          'body' => trim($_POST['body']),

          'admin_id' => $_SESSION['admin_id'],

          'title_err' => '',
          'body_err' => ''
        ];

        // Validate data
        if(empty($data['title'])){
          $data['title_err'] = 'Veuillez remplir ce champ';}
        if(empty($data['body'])){
          $data['body_err'] = 'Veuillez remplir ce champ'; }

        // Make sure no errors
        if(empty($data['title_err']) && empty($data['body_err'])){
          // Validated
          if($this->postModel->updatePost($data)){

            redirect('adminboardposts/index');
          } else {
            die('oups');
          }
        } else {
          // Load view with errors
          $this->view('adminboardposts/edit', $data);
        }

      } else {
        // Get existing post from model
        $post = $this->postModel->getPostById($id);

        // Check for owner
        if($post->admin_id != $_SESSION['admin_id']){
          redirect('adminboardposts/index');
        }

        $data = [
          'id' => $id,
          'title' => $post->title,
          'body' => $post->body
        ];
  
        $this->view('adminboardposts/edit', $data);
      }
    }

    public function show($id){
      $post = $this->postModel->getPostById($id);
      $admin = $this->adminModel->getAdminById($post->admin_id);

      $data = [
        'post' => $post,
        'admin' => $admin, 
      ];

      $this->view('adminboardposts/show', $data);
    }
    

    public function delete($id){
      if($_SERVER['REQUEST_METHOD'] == 'POST'){
        // Get existing post from model
        $post = $this->postModel->getPostById($id);
        
        // Check for owner
        if($post->admin_id != $_SESSION['admin_id']){
          redirect('adminboardposts/index');
        }

        if($this->postModel->deletePost($id)){
          redirect('adminboardposts/index');
        } else {
          die('oups!');
        }
      } else {
        redirect('adminboardposts/index');
      }
    }


  }
   
  