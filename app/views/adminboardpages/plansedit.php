<?php require APPROOT . '/views/inc/adminboardheader.php'; ?>
<!-- HEADER -->
<header id="main-header" class="py-2 bg-primary text-secondary">
    <div class="container">
      <div class="row">
        <div class="col-md-6">
          <h1>
          <i class="fas fa-file-signature"></i> Contenu d'abbonements </h1>
        </div>
      </div>
    </div>
  </header>

<section id="pageslist ">
  <div class="container my-5">
    <div class="card">
      <div class="card-header bg-primary text-center">
          <h4>Contenu à modifier</h4>
          <form action="<?php echo URLROOT; ?>adminboardpages/plansedit/<?php echo $data['id']; ?>" method="post">
          <div class="form-group">
              <label for="type">Contenu: <sup>*</sup></label>
              <input type="text" name="type" class="form-control form-control-lg <?php echo (!empty($data['type_err'])) ? 'is-invalid' : ''; ?>" value="<?php echo $data['type']; ?>">
              <span class="invalid-feedback"><?php echo $data['type_err']; ?></span>
            </div>
            <div class="form-group">
              <label for="price">Prix: <sup>*</sup></label>
              <input type="text" name="price" class="form-control form-control-lg <?php echo (!empty($data['price_err'])) ? 'is-invalid' : ''; ?>" value="<?php echo $data['price']; ?>">
              <span class="invalid-feedback"><?php echo $data['price_err']; ?></span>
            </div>
            <div class="form-group">
              <label for="description">Description: <sup>*</sup></label>
              <input type="text" name="description" class="form-control form-control-lg <?php echo (!empty($data['description_err'])) ? 'is-invalid' : ''; ?>" value="<?php echo $data['description']; ?>">
              <span class="invalid-feedback"><?php echo $data['description_err']; ?></span>
            </div>
            <div class="form-group">
              <label for="detail1">Detail1: <sup>*</sup></label>
              <input type="text" name="detail1" class="form-control form-control-lg <?php echo (!empty($data['detail1_err'])) ? 'is-invalid' : ''; ?>" value="<?php echo $data['detail1']; ?>">
              <span class="invalid-feedback"><?php echo $data['detail1_err']; ?></span>
            </div>
            <div class="form-group">
              <label for="detail2">Detail2: <sup>*</sup></label>
              <input type="text" name="detail2" class="form-control form-control-lg <?php echo (!empty($data['detail2_err'])) ? 'is-invalid' : ''; ?>" value="<?php echo $data['detail2']; ?>">
              <span class="invalid-feedback"><?php echo $data['detail2_err']; ?></span>
            </div>
            <div class="form-group">
              <label for="detail3">Detail3: <sup>*</sup></label>
              <input type="text" name="detail3" class="form-control form-control-lg <?php echo (!empty($data['detail3_err'])) ? 'is-invalid' : ''; ?>" value="<?php echo $data['detail3']; ?>">
              <span class="invalid-feedback"><?php echo $data['detail3_err']; ?></span>
            </div>
            <div class="form-group">
              <label for="summary">Sommaire: <sup>*</sup></label>
              <input type="text" name="summary" class="form-control form-control-lg <?php echo (!empty($data['summary_err'])) ? 'is-invalid' : ''; ?>" value="<?php echo $data['summary']; ?>">
              <span class="invalid-feedback"><?php echo $data['summary_err']; ?></span>
            </div>
        
              <input type="submit" class="btn btn-primary btn-block" value="Modifier">
          </form> 
      </div>
    </div>
  </div>
</section> 
<?php require APPROOT . '/views/inc/footer.php'; ?>     