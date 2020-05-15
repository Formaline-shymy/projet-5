<?php
  class Abonnements extends Controller {
   
    public function __construct(){
      $this->pageModel = $this->model('Page');    
    }
    
    public function index(){
      $pages = $this->pageModel-> getPlansPage();
        $data = [  
          'pages' => $pages,
          'heading' =>'Abonnement',
          'description' => 'Quel fréquence de règlement ? ',
        ];
    
          $this->view('pages/abonnements', $data);
          
    }
  }