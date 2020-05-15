<?php
  class Planning extends Controller {
   
    public function __construct(){
      $this->pageModel = $this->model('Page'); 
      $this->flowModel = $this->model('Flow');   
    }
    
    public function index(){
      $flows = $this->flowModel->listYoga();

        $data = [
          'flows' => $flows,
          'heading' =>'Nos cours',
          'description' => 'Des dizaines de cours online en live chaque jour pour vous !',
        ];
    
          $this->view('pages/planning', $data);
          
    }
  }

  