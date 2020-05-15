<?php
    class Users extends Controller {
        public function __construct(){
           $this->userModel = $this ->model('User');
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
                'plan'=>trim($_POST['plan']),
                'password'=>trim($_POST['password']),
                'confirm_password' => trim($_POST['confirm_password']),
                'name_err' =>'',
                'familyname_err' =>'',
                'nick_err' =>'',
                'email_err' =>'',
                'plan_err' =>'',
                'password_err' =>'',
                'confirm_password_err' =>'',
                'heading' =>'',
                'description' => ' ',      
            ];
                 
            // Validate name
                if (empty($data['name'])){
                    $data['name_err'] = 'Veuillez renseigner votre prénom';}

                // Validate family Name
                if (empty($data['familyname'])){
                    $data['familyname_err'] = 'Veuillez renseigner votre nom'; }

                // Validate nick
                if (empty($data['nick'])){
                    $data['nick_err'] = 'Veuillez renseigner votre identifiant'; } 
                    
                    else{
                    //Check nick
                    if($this -> userModel -> findUserByNick($data['nick'])){
                    $data['nick_err'] = 'Cet identifiant est déjà utilisé. Veuillez en saisir un autre';}
                }
                //Validate email
                if (empty($data['email'])){
                    $data['email_err'] = 'Veuillez renseigner votre adresse mail';}

                // Validate password
                if(empty($data['password'])){
                    $data['password_err'] = 'Veuillez renseigner votre mot de passe';
                  } elseif(strlen($data['password']) < 6){
                    $data['password_err'] = 'Le mot de pass doit contenir au moins 6 caracteres'; }
                     
                // Validate name
                if (empty($data['plan'])){
                    $data['plan_err'] = 'Veuillez choisir votre abonnement';}

                // Validate confirm password
                if(empty($data['confirm_password'])){
                    $data['confirm_password_err'] = 'Veuillez confirmez votre mot de passe'; 
                }  else {
                    if($data['password'] != $data['confirm_password']) {
                    $data['confirm_password_err'] = 'Les mots de passe saisis ne sont pas identiques';
                    }
                }
                //make sure errors are empty
                if(empty($data['name_err']) && empty($data['familyname_err']) && empty($data['nick_err']) && empty($data['email_err']) && empty($data['plan_err']) && empty($data['password_err']) && empty($data['confirm_password_err'])){
                // Validated
                // to hash password
                    $data['password'] = password_hash($data['password'], PASSWORD_DEFAULT);

                    // Register User
                    if ($this->userModel->register($data)){
                        // return redirect('/dashboard')->with('success', 'vous etes inscrit');   
                    redirect('users/login');
                    } else{
                        die("Oups, il y a un problème");
                    }

                } else {
                // Load view with errors
                $this->view('users/register', $data);
                }


            }else{
            // Init data
                $data= [
                    'name'=>'',
                    'familyname'=>'',
                    'nick'=>'',
                    'email'=>'',
                    'plan' => '',
                    'password'=>'',
                    'confirm_password'=>'',

                    'nick_err'=>'',
                    'email_err'=>'',
                    'plan' => '',
                    'password_err'=>'',
                    'confirm_password_err'=>'',
                    'heading' =>'Inscription à Mon Compte',
                    'description' => 'Pour vous inscrire, merci de remplir tous les champs obligatoires: ',
                ];
                // Load view
                $this->view('users/register', $data);
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

                //Check user's nick
                if ($this ->userModel -> findUserByNick($data['nick'])){
                    //User is found
                }else{
                    //User not found
                    $data['nick_err'] = 'Identifiant invalide';
                }

                //make sure errors are empty
                if(empty($data['nick_err']) && empty($data['password_err'])){
                 // Validated
                // Check and set logged in user
                  $loggedInUser = $this ->userModel -> login($data['nick'], $data['password']);
                   
                  if ($loggedInUser){
                      //create a session
                      $this-> createUserSession($loggedInUser);
                  }else{
                    $data['password_err'] = 'Mot de passe invalide';
                    
                    $this -> view('users/login', $data);
                  }
                
             } else {
                 // Load view with errors
                 $this->view('users/login', $data);
                        }     


                }else{
                // Init data   
                    $data= [
                        'nick'=>'',
                        'password'=>'',
                        'heading' =>'Connexion à Mon Compte',
                        'description' => 'Pour vous connecter, merci de remplir tous les champs obligatoires: ',
                    ];
                    //Load view
                    $this->view('users/login', $data);
                }
        }

        public function createUserSession($user){
                $_SESSION['user_id'] = $user->id;
                $_SESSION['user_email'] = $user->email;
                $_SESSION['user_name'] = $user->name;  
                redirect('userboard/index');
            }
            
        public function logout(){
                unset($_SESSION['user_id']);
                unset($_SESSION['user_email']);
                unset($_SESSION['user_name']);
                session_destroy();
                redirect('users/login');
            } 
 }