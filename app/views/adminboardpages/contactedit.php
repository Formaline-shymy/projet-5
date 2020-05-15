<?php require APPROOT . '/views/inc/adminboardheader.php'; ?>
<!-- HEADER -->
<header id="main-header" class="py-2 bg-primary text-secondary">
    <div class="container">
      <div class="row">
        <div class="col-md-6">
          <h1>
          <i class="fas fa-file-signature"></i> Contenu de contact </h1>
        </div>
      </div>
    </div>
  </header>

<section id="pageslist ">
  <div class="container my-5">
    <div class="card">
      <div class="card-header bg-light text-center">
          <h4>Contenu à modifier</h4>
          <form action="<?php echo URLROOT; ?>adminboardpages/contactedit/<?php echo $data['id']; ?>" method="post">
            <div class="form-group">
              <label for="description">Adresse: <sup>*</sup></label>
              <input type="text" name="description" class="form-control form-control-lg <?php echo (!empty($data['description_err'])) ? 'is-invalid' : ''; ?>" value="<?php echo $data['description']; ?>">
              <span class="invalid-feedback"><?php echo $data['description_err']; ?></span>
            </div>
            <div class="form-group">
              <label for="email">Email: <sup>*</sup></label>
              <input type="email" name="email" class="form-control form-control-lg <?php echo (!empty($data['email_err'])) ? 'is-invalid' : ''; ?>" value="<?php echo $data['email']; ?>">
              <span class="invalid-feedback"><?php echo $data['email_err']; ?></span>
            </div>
            <div class="form-group">
              <label for="mobileNumber">Numero de téléphone: <sup>*</sup></label>
              <input type="text" name="mobileNumber" class="form-control form-control-lg <?php echo (!empty($data['mobileNumber_err'])) ? 'is-invalid' : ''; ?>" value="<?php echo $data['mobileNumber']; ?>">
              <span class="invalid-feedback"><?php echo $data['mobileNumber_err']; ?></span>
            </div>
              <input type="submit" class="btn btn-primary btn-block" value="Modifier">
          </form> 
      </div>
    </div>
  </div>
</section> 
<?php require APPROOT . '/views/inc/footer.php'; ?>     