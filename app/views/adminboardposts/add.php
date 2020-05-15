<?php require APPROOT . '/views/inc/adminboardheader.php'; ?>
<!-- HEADER -->
<header id="main-header" class="py-2 bg-primary text-secondary">
    <div class="container">
      <div class="row">
        <div class="col-md-9">
          <h2>
           <i class="fas fa-pencil-alt"></i> Guide
        </h2>
        </div>
      </div>
    </div>
</header>
<section id="addpost ">
  <div class="container my-4">
    <h2 class="text-uppercase text-center text-danger mt-0 mb-3">
      <i class="fas fa-keyboard"></i> Ecrire un nouveau article</h2> 

    <form action="<?php echo URLROOT; ?>adminboardposts/add" method="post" enctype="multipart/form-data">
      <div class="card card-body bg-light mt-2">
        <div class="row mb-2">
          <div class="form-group pl-3 mx-3">
            <label for="title">Titre: <sup>*</sup></label>
              <input type="text" name="title" class="form-control form-control-lg <?php echo (!empty($data['title_err'])) ? 'is-invalid' : ''; ?>" value="<?php echo $data['title']; ?>">
            <span class="invalid-feedback"><?php echo $data['title_err']; ?></span>
          </div>
          <br><br>
        </div>
          <div class="form-group mx-3">
            <label for="body">Contenu: <sup>*</sup></label>
            <textarea id="format-custom" name="body" class="form-control form-control-lg <?php echo (!empty($data['body_err'])) ? 'is-invalid' : ''; ?>"><?php echo $data['body']; ?></textarea>
          <span class="invalid-feedback"><?php echo $data['body_err']; ?></span>
          </div>
          <input type="submit" class="btn btn-info btn-block mt-3" value="Publier">
      </div>   
    </form>  
  </div>
</section>
<?php require APPROOT . '/views/inc/footer.php'; ?>