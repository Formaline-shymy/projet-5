<?php
  class Adminboard extends Controller {
    private $adminModel;
    private $userModel;
    private $postModel;
    private $flowModel;

    public function __construct(){
      if(!isAdminLoggedIn()) {
        redirect('index');
        // block access to admin profile for non register users
    }
    
      $this->adminModel = $this ->model('Admin');
      $this->userModel = $this ->model('User');
      $this->postModel = $this->model('Post');
      $this->flowModel = $this->model('Flow');
      $this->userModel = $this->model('User');

   }  
  
    public function index(){
       $postsCount = $this->postModel->countPosts();
       $flowsCount = $this->flowModel->countFlows();
       $usersCount = $this->userModel->countUsers();
        $data = [ 
        'postsCount'=>$postsCount,
        'flowsCount'=>$flowsCount,
        'usersCount'=>$usersCount,
        ] ;

        $this->view('adminboard/index', $data); 
    }
    
    public function editProfil($id){
      if(!isAdminLoggedIn()) {
        redirect('index');
      } 
      if($_SERVER['REQUEST_METHOD'] == 'POST'){
        // Sanitize POST array
        $_POST = filter_input_array(INPUT_POST, FILTER_SANITIZE_STRING);  

        $data = [
          'id' =>$id,
          'name' => $_POST['name'],
          'familyname' => $_POST['familyname'],
          'nick' => $_POST['nick'],
          'email'=> $_POST['email'],
           
          'admin_id' => $_SESSION['admin_id'],

          'name_err' => '',
          'family_err' => '',
          'nick_err'=> '',
          'email_err' =>'',  
        ];
        
        // Validate data
        if(empty($data['name'])){
          $data['name_err'] = 'Veuillez remplir ce champ';}
        if(empty($data['familyname'])){
          $data['familyname_err'] = 'Veuillez remplir ce champ';}
          if(empty($data['nick'])){
            $data['nick_err'] = 'Veuillez remplir ce champ';}
          if(empty($data['email'])){
            $data['email_err'] = 'Veuillez remplir ce champ';}
        
        // Make sure there is no errors
        if(empty($data['name_err']) && empty($data['familyname_err'])&& empty($data['nick_err']) && empty($data['email_err'])){
          // Validated
          if($this->adminModel->editProfil($data)){
           
            redirect('adminboard/index');
          } else {
            die('Oups, alors!');
          }
        } else {
          // Load view with errors
          $this->view('adminboard/editprofil', $data);
        }
        
      } else {
  
        // Get existing admin's data from model
        $admin = $this->adminModel->getAdminById($id);

      
        // Check for owner
        if($admin->id != $_SESSION['admin_id']){
           redirect('adminboard/index');
      }
            $data = [
              'id'=>$id,
              'name' =>$admin->name,
              'familyname' =>$admin->familyname,
              'nick' =>$admin->nick,
              'email'=> $admin->email,
            ];
          $this->view('adminboard/editprofil', $data);
       
      }
    } 
        

    public function showProfil($id){
      $postsCountById = $this->postModel->countPostsById($id);
      $flowsCountById = $this->flowModel->countFlowsById($id);
      $flow = $this->flowModel->getFlowById($id);
      $admin = $this->adminModel->getAdminById($id);
      // Check for owner
      if($admin->id != $_SESSION['admin_id']){
          redirect('adminboard/index');
      }
        $data = [ 
        'postsCountById'=>$postsCountById,
        'flowsCountById'=>$flowsCountById,
        'flow' =>$flow,

          'admin' => $admin,
          'admin_id' => $_SESSION['admin_id'],
        ];

        $this->view('adminboard/showprofil', $data); 
    }

  
  }
  
