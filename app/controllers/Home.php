<?php
  class Home extends Controller {

    public function __construct(){
     $this->pageModel = $this->model('Page');    
    }
    
    public function index(){
      $pages = $this->pageModel-> getHomePage();
      $data = [
        'pages' => $pages,
     ];
     
      $this->view('pages/index', $data);
    }
  }

 