<?php
class AdminboardFlows extends Controller {
    public function __construct(){
      if(!isAdminLoggedIn()){
        redirect('index');
      }

      $this->flowModel = $this->model('Flow');
      $this->adminModel = $this->model('Admin');
    }


    public function index(){
     
      $flows = $this->flowModel->getFlows();
     
      $data = [
         'flows' => $flows,  
      
      ];
    
      $this->view('adminboardflows/index', $data);
    }


    public function add(){
      if($_SERVER['REQUEST_METHOD'] == 'POST'){
        // Sanitize POST array
        $_POST = filter_input_array(INPUT_POST, FILTER_SANITIZE_STRING);

        $data = [
          'admin_id' => $_SESSION['admin_id'],
          'type' => trim($_POST['type']),
          'frequency' => trim($_POST['frequency']),
          'timing' =>trim($_POST['timing']),

          'type_err' => '',
          'frequency_err' => '',
          'timing_err' => '',
        ];

        // Validate data
        if(empty($data['type'])){
          $data['type_err'] = 'Veuillez remplir ce champ';}
        if(empty($data['frequency'])){
          $data['frequency_err'] = 'Veuillez remplir ce champ';}
        if(empty($data['timing'])){
          $data['timing_err'] = 'Veuillez remplir ce champ';}
 

        // Make sure no errors
        if(empty($data['type_err']) && empty($data['frequency_err']) && empty($data['time_err'])){
          // Validated
          if($this->flowModel->addFlow($data)){
            redirect('adminboardflows/index');
          } else {
            die('oups');
          }
        } else {
          // Load view with errors
          $this->view('adminboardflows/add', $data);
        }

      } else {
        $data = [
          'type' => '',
          'frequency' => '',
          'timing' =>'',
        ];
  
        $this->view('adminboardflows/add', $data);
      }
    }

    public function show(){
      
      $data = [  ];

      $this->view('adminboardflows/show', $data);
    }
   

    }
    
  
