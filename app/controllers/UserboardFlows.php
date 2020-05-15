<?php
class UserboardFlows extends Controller {
    public function __construct(){
      if(!isUserLoggedIn()){
        redirect('index');
      }

      $this->flowModel = $this->model('Flow');
      $this->userModel = $this->model('User');
    }


    public function index() {
      $flowsdifff = $this->flowModel->getDiffFlows();
      $flowsdiffd = $this->flowModel->getDiffDay();
      $flowsdifft = $this->flowModel->getDiffTime();

      $data = [
             'flowsdifff' => $flowsdifff,
             'flowsdiffd' => $flowsdiffd,
             'flowsdifft' => $flowsdifft,
             ];
    
      $this->view('userboardflows/index', $data);
    }
}