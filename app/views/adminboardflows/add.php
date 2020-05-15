<?php require APPROOT . '/views/inc/adminboardheader.php'; ?>
<!-- HEADER -->
<header id="main-header" class="py-2 bg-success text-secondary">
    <div class="container">
      <div class="row">
        <div class="col-md-6">
          <h1>
          <i class="fas fa-heartbeat"></i></i> Cours</h1>
        </div>
      </div>
    </div>
  </header>   

  <section id="addflow">
  <div class="container my-4">
    <h2 class="text-uppercase text-center text-success mt-0 mb-3">
      <i class="fas fa-keyboard"></i> Ajouter un nouveau cours</h2> 

    <form action="<?php echo URLROOT; ?>adminboardflows/add" method="post" enctype="multipart/form-data">
      <div class="card card-body bg-light mt-2">
        <div class="row mx-5 mb-2">
          <div class="form-group mx-3">
            <label for="type">Type: <sup>*</sup></label>
              <input type="text" name="type" class="form-control form-control-lg <?php echo (!empty($data['type_err'])) ? 'is-invalid' : ''; ?>" value="<?php echo $data['type']; ?>">
            <span class="invalid-feedback"><?php echo $data['type_err']; ?></span>
          </div>
          <br><br>
        
          <div class="form-group mx-3 ">
           <label for="timing">Heure: <sup>*</sup></label>
           <input type="time" name="timing" class="form-control form-control-lg <?php echo (!empty($data['timing_err'])) ? 'is-invalid' : ''; ?>" value="<?php echo  date ('H:i:s', strtotime($data['timing'])); ?>">
            <span class="invalid-feedback"><?php echo $data['timing_err']; ?></span>
          </div>
          <div class="form-group mx-3">
           <label for="frequency">Jour: <sup>*</sup></label>
              <input type="text" name="frequency" class="form-control form-control-lg <?php echo (!empty($data['frequency_err'])) ? 'is-invalid' : ''; ?>" value="<?php echo $data['frequency']; ?>">
            <span class="invalid-feedback"><?php echo $data['frequency_err']; ?></span>
          </div>
         <div class="form-group mx-auto">
           <label for="text">Professeur: </label>
              <input type="name" name="name"class="form-control form-control-lg" value="<?php echo  $_SESSION['admin_name']; ?>"readonly>
          </div>
        </div>
          <input type="submit" class="btn btn-success btn-block mt-3" value="Ajouter">
      </div>   
    </form>  
  </div>
</section>

<?php require APPROOT . '/views/inc/footer.php'; ?>
  