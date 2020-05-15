<?php
class AdminboardUsers extends Controller {
    public function __construct(){
      if(!isAdminLoggedIn()){
        redirect('index');
      }

      $this->userModel = $this->model('User');
      $this->adminModel = $this->model('Admin');
    }

    public function index() {
      $users = $this->userModel->getUsers();
  
      $data = [
        'users' => $users,  
      ];
    
      $this->view('adminboardusers/index', $data);
    }
      
}