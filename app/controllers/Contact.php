<?php
  class Contact extends Controller {
   
    public function __construct(){
      $this->pageModel = $this->model('Page');    
    }
    
    public function index(){
      $pages = $this->pageModel->getContactPage();
        $data = [
          'pages' => $pages,
          'heading' => 'Nous contacter',
          'description' => 'Vous avez une question ? Découvrez les   différents moyens de nous contacter', 
        ];
    
          $this->view('pages/contact', $data);
          
    }
    
  }


  