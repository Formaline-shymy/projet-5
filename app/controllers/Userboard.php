<?php
  class Userboard extends Controller {
    private $userModel;

    public function __construct(){
      if(!isUserLoggedIn()) {
        redirect('index');
        // block access to user profile for non registered users
      }
          $this->userModel = $this ->model('User');
   }  
  
    public function index(){
     
        $data = [ ] ;

        $this->view('userboard/index', $data); 
    }

    public function showProfil($id){
      $user = $this->userModel->getUserById($id);
       // Check for owner
       if($user->id != $_SESSION['user_id']){
           redirect('userboard/index');
       }
        $data = [ 
          'user' => $user,
          'user_id' => $_SESSION['user_id'],
        ];
  
        $this->view('userboard/showprofil', $data); 
    }
    
    public function editProfil($id){
        if(!isUserLoggedIn()) {
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
             
            'user_id' => $_SESSION['user_id'],
  
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
            if($this->userModel->editProfil($data)){
             
              redirect('userboard/index');
            } else {
              die('Oups, alors!');
            }
          } else {
            // Load view with errors
            $this->view('userboard/editprofil', $data);
          }
          
        } else {
    
          // Get existing user's data from model
          $user = $this->userModel->getUserById($id);
  
        
          // Check for owner
          if($user->id != $_SESSION['user_id']){
             redirect('userboard/index');
        }
              $data = [
                'id'=>$id,
                'name' =>$user->name,
                'familyname' =>$user->familyname,
                'nick' =>$user->nick,
                'email'=> $user->email,
              ];
            $this->view('userboard/editprofil', $data);
         
        }
      } 
  



  }