<?php
class AdminboardPages extends Controller {
    public function __construct(){
      if(!isAdminLoggedIn()){
        redirect('index');
      }

      $this->pageModel = $this->model('Page');
    }

    public function index() {
      $pagesCon = $this->pageModel->getContactPage();
      $pagesHom= $this->pageModel->getHomePage();
      $pagesPl = $this->pageModel->getPlansPage();
  
      $data = [
        'pagesCon' => $pagesCon, 
        'pagesHom' =>$pagesHom,
        'pagesPl' => $pagesPl,
      ];
    
      $this->view('adminboardpages/index', $data);
      }
    

      public function homedit($id){
        if(!isAdminLoggedIn()) {
          redirect('index');
        } 
        if($_SERVER['REQUEST_METHOD'] == 'POST'){ 
          // Sanitize POST array
          $_POST = filter_input_array(INPUT_POST, FILTER_SANITIZE_STRING);
  
          $data = [
            'id'=>$id,
            'description'=>$_POST['description'],
            'description_err' => '',
          ];
  
          // Validate data
          if(empty($data['description'])){
            $data['description_err'] = 'Veuillez remplir ce champ';}
       
          // Make sure no errors
          if(empty($data['description_err'])){
            // Validated
            if($this->pageModel-> updateHomePage($data)){
              redirect('adminboardpages/index');
            } else {
              die('oups');
            }
          } else {
            // Load view with errors
            $this->view('adminboardpages/homedit', $data);
          }
  
        } else {
          // Get existing page from model
          $page = $this->pageModel->getPagehomeById($id);
 
          $data = [
            'id'=>$page->id,
            'description' =>$page->description,
          ];
    
          $this->view('adminboardpages/homedit', $data);
        }
      }
      
      public function contactedit($id){
        if(!isAdminLoggedIn()) {
          redirect('index');
        } 
        if($_SERVER['REQUEST_METHOD'] == 'POST'){ 
          // Sanitize POST array
          $_POST = filter_input_array(INPUT_POST, FILTER_SANITIZE_STRING);
  
          $data = [
            'id'=>$id,
            'description'=>$_POST['description'],
            'email'=>$_POST['email'],
            'mobileNumber'=>$_POST['mobileNumber'],

            'description_err' => '',
            'email_err' =>'',
            'mobileNumber_err'=>'',
          ];
  
          // Validate data
          if(empty($data['description'])){
            $data['description_err'] = 'Veuillez remplir ce champ';}
          if(empty($data['email'])){
            $data['email_err'] = 'Veuillez remplir ce champ';}
          if(empty($data['mobileNumber'])){
            $data['mobileNumber_err'] = 'Veuillez remplir ce champ';}
  
          // Make sure no errors
          if(empty($data['description_err']) && empty($data['email_err'])&& empty($data['mobileNumber_err'])){
            // Validated
            if($this->pageModel-> updateContactPage($data)){
              redirect('adminboardpages/index');
            } else {
              die('oups');
            }
          } else {
            // Load view with errors
            $this->view('adminboardpages/contactedit', $data);
          }
  
        } else {
          // Get existing data from model
          $page = $this->pageModel->getPagecontactById($id);
 
          $data = [
            'id'=>$page->id,
            'description' =>$page->description,
            'email' =>$page->email,
            'mobileNumber'=>$page->mobileNumber,
        
          ];
    
          $this->view('adminboardpages/contactedit', $data);
        }
      }
     
      public function plansedit($id){
        if(!isAdminLoggedIn()) {
          redirect('index');
        } 
        if($_SERVER['REQUEST_METHOD'] == 'POST'){
          // Sanitize POST array
          $_POST = filter_input_array(INPUT_POST, FILTER_SANITIZE_STRING);  
  
          $data = [
            'id'=>$id,
            'type' => $_POST['type'],
            'price' => $_POST['price'],
            'description' => $_POST['description'],
            'detail1'=> $_POST['detail1'],
            'detail2' => $_POST['detail2'],
            'detail3' => $_POST['detail3'],
            'summary' => $_POST['summary'],
              
            'type_err' => '',
            'price_err' => '',
            'description_err' => '',
            'detail1_err'=> '',
            'detail2_err' =>'',
            'detail3_err' =>'',
            'summary_err' =>'',
          ];
          
          // Validate data
          if(empty($data['type'])){
            $data['type_err'] = 'Veuillez remplir ce champ';}
          if(empty($data['price'])){
            $data['price_err'] = 'Veuillez remplir ce champ';}
            if(empty($data['description'])){
              $data['description_err'] = 'Veuillez remplir ce champ';}
            if(empty($data['detail1'])){
              $data['detail1_err'] = 'Veuillez remplir ce champ';}
            if(empty($data['detail2'])){
              $data['detail2_err'] = 'Veuillez remplir ce champ';}
            if(empty($data['detail3'])){
              $data['detail3_err'] = 'Veuillez remplir ce champ';}
            if(empty($data['summary'])){
              $data['summary_err'] = 'Veuillez remplir ce champ';}
          
          // Make sure there is no errors
          if(empty($data['tape_err']) && empty($data['price_err']) && empty($data['description_err']) && empty($data['detail1_err']) && empty($data['detail2_err'])&& empty($data['detail3_err']) &&  empty($data['summary_err'])){
             // Validated
             if($this->pageModel-> updatePlansPage($data)){
              redirect('adminboardpages/index');
            } else {
              die('oups');
            }
          } else {
            // Load view with errors
            $this->view('adminboardpages/plansedit', $data);
          }
          
        } else {
    
          // Get existing data from model
          $page = $this->pageModel->getPageplanById($id);
  
    
              $data = [
                'id'=>$page->id,
                'type' =>$page->type, 
                'price' =>$page->price,
                'description' =>$page->description,
                'detail1'=>$page->detail1,
                'detail2' =>$page->detail2,
                'detail3' =>$page->detail3,
                'summary' =>$page->summary,
                
              ];
            $this->view('adminboardpages/plansedit', $data);
         
        }
      }   

    }

    