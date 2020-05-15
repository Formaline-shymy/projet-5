<?php
  class Mentions extends Controller {
   
    public function __construct(){
      $this->pageModel = $this->model('Page');    
    }
    
    public function index(){
        $data = [  
          'heading' =>'Mentions légales',
          'description' => '',
        ];
    
          $this->view('pages/mentions', $data);
          
    }
  }