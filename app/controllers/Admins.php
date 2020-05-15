<?php
    class Admins extends Controller {
        public function __construct(){
           $this->adminModel = $this ->model('Admin');
        }

        public function register(){
            //check for POST
            if ($_SERVER['REQUEST_METHOD'] =='POST'){
            //Process form
            // Sanitize POST data
            $_POST = filter_input_array(INPUT_POST, FILTER_SANITIZE_STRING);
            
            $data=[
                'name'=>trim($_POST['name']),
                'familyname'=>trim($_POST['familyname']),
                'nick'=>trim($_POST['nick']),
                'email'=>trim($_POST['email']),
                'password'=>trim($_POST['password']),
                'confirm_password' => trim($_POST['confirm_password']),
                'name_err' =>'',
                'familyname_err' =>'',
                'nick_err' =>'',
                'email_err' =>'',
                'password_err' =>'',
                'confirm_password_err' =>'',
                'heading' =>'',
                'description' => ' ',
                  
         ];
                 
            // Validate name
                if (empty($data['name'])){
                    $data['name_err'] = 'Veuillez renseigner votre prénom'; 
                }

                // Validate family Name
                if (empty($data['familyname'])){
                    $data['familyname_err'] = 'Veuillez renseigner votre nom'; 
                }

                // Validate nick
                if (empty($data['nick'])){
                    $data['nick_err'] = 'Veuillez renseigner votre identifiant'; 
                } else{
                    //Check nick
                    if($this -> adminModel -> findAdminByNick($data['nick'])){
                    $data['nick_err'] = 'Cet identifiant est déjà utilisé. Veuillez en saisir un autre'; 
                    }
                }
                //Validate email
                if (empty($data['email'])){
                    $data['email_err'] = 'Veuillez renseigner votre adresse mail'; 
                }

                // Validate password
                if(empty($data['password'])){
                    $data['password_err'] = 'Veuillez renseigner votre mot de passe';
                  } elseif(strlen($data['password']) < 6){
                    $data['password_err'] = 'Le mot de pass doit contenir au moins 6 caracteres';
                  }

                // Validate confirm password
                if(empty($data['confirm_password'])){
                    $data['confirm_password_err'] = 'Veuillez confirmez votre mot de passe'; 
                }  else {
                    if($data['password'] != $data['confirm_password']) {
                    $data['confirm_password_err'] = 'Les mots de passe saisis ne sont pas identiques';
                    }
                }
                //make sure errors are empty
                if(empty($data['name_err']) && empty($data['familyname_err']) && empty($data['nick_err']) && empty($data['email_err']) && empty($data['password_err']) && empty($data['confirm_password_err'])){
                // Validated
                // to hash password
                    $data['password'] = password_hash($data['password'], PASSWORD_DEFAULT);

                    // Register admin
                    if ($this->adminModel->register($data)){
                    redirect('admins/login'); 
            
                    } else{
                        die("Oups, il y a un problème");
                    }

                } else {
                // Load view with errors
                $this->view('admins/register', $data);
                }


            }else{
            // Init data
                $data= [
                    'name'=>'',
                    'familyname'=>'',
                    'nick'=>'',
                    'email'=>'',
                    'password'=>'',
                    'confirm_password'=>'',
                    'nick_err'=>'',
                    'email_err'=>'',
                    'password_err'=>'',
                    'confirm_password_err'=>'',
                    'heading' =>'',
                    'description' => ' ',
                ];
                // Load view
                $this->view('admins/register', $data);
            }
        }
    

        public function login(){
            //check for POST
            if ($_SERVER['REQUEST_METHOD'] =='POST'){
                //Process form

                $data=[
                    'nick'=>trim($_POST['nick']),
                    'password'=>trim($_POST['password']),
                    'nick_err' =>'',
                    'password_err' =>'',
                    'heading' =>'',
                    'description' => '',
             ];

                //Validation
                if (empty($data['nick'])){
                    $data['nick_err'] = 'Veuillez renseigner votre identifiant'; 
                }

                if(empty($data['password'])){
                    $data['password_err'] = 'Veuillez renseigner votre mot de passe';
                  } 

                //Check Admin's nick
                if ($this ->adminModel -> findAdminByNick($data['nick'])){
                    //Admin is found
                }else{
                    //Admin not found
                    $data['nick_err'] = 'Identifiant invalide';
                }

                //make sure errors are empty
                if(empty($data['nick_err']) && empty($data['password_err'])){
                 // Validated
                // Check and set logged in admin
                  $loggedInAdmin = $this ->adminModel -> login($data['nick'], $data['password']);
                   
                  if ($loggedInAdmin){
                      //create a session
                      $this-> createAdminSession($loggedInAdmin);
                  }else{
                    $data['password_err'] = 'Mot de passe invalide';
                    
                    $this -> view('admins/login', $data);
                  }
                
             } else {
                 // Load view with errors
                 $this->view('admins/login', $data);
                        }     


                }else{
                // Init data   
                    $data= [
                        'nick'=>'',
                        'password'=>'',
                        'heading' =>'Connexion à adminboard',
                        'description' => ' ',
                    ];
                    //Load view
                    $this->view('admins/login', $data);
                }
        }

        public function createAdminSession($admin){
                $_SESSION['admin_id'] = $admin->id;
                $_SESSION['admin_email'] = $admin->email;
                $_SESSION['admin_name'] = $admin->name; 
                $_SESSION['admin_familyname'] = $admin->familyname; 
                $_SESSION['admin_nick'] = $admin->nick;
                redirect('adminboard/index');
                
            }
            
        public function logout(){
                unset($_SESSION['admin_id']);
                unset($_SESSION['admin_email']);
                unset($_SESSION['admin_name']);
                unset($_SESSION['admin_familyname']);
                unset($_SESSION['admin_nick']);
                session_destroy();
                redirect('admins/login');
            }
 }