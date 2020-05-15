<?php
  class Posts extends Controller {
   
    public function __construct(){
      $this->postModel = $this->model('Post');    
    }
    
    public function index($id = null){
      $posts = $this->postModel->getPosts();
      $post = $this->postModel->getPostById($id);

        $data = [
          'posts' => $posts,
          'post' => $post,
          'id' => $id,
          'heading'=> 'Guide',
          'description' => 'Tous nos conseils de bien-être et plus encore...',
        ];
    
        if (is_null($id)) {
          $this->view('pages/posts', $data); 
        }
        else {
          $this->view('pages/post', $data);
          }
    }
  }