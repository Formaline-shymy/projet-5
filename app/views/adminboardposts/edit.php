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
      <i class="fas fa-keyboard"></i> Modifier cet article </h2> 
    <div class="container">
      <div class="row">
        <div class="col-md-3 mb-3 ">
          <a class="text-dark" href=" <?php echo URLROOT; ?>adminboardposts/index">
            <i class="fas fa-arrow-left text-dark"></i> Retour au liste d'articles
          </a>
        </div>
      </div>
    </div>
 

   <!-- MODIFICATIONS -->
    <form action="<?php echo URLROOT; ?>adminboardposts/edit/<?php echo $data['id']; ?>" method="post">
      <div class="form-group">
        <label for="title">Titre: <sup>*</sup></label>
        <input type="text" name="title" class="form-control form-control-lg <?php echo (!empty($data['title_err'])) ? 'is-invalid' : ''; ?>" value="<?php echo $data['title']; ?>">
        <span class="invalid-feedback"><?php echo $data['title_err']; ?></span>
      </div>
      <div class="form-group">
        <label for="body">Contenu: <sup>*</sup></label>
        <textarea id="format-custom" name="body" class="form-control form-control-lg <?php echo (!empty($data['body_err'])) ? 'is-invalid' : ''; ?>"><?php echo $data['body']; ?></textarea>
        <span class="invalid-feedback"><?php echo $data['body_err']; ?></span>
      </div>
      <input type="submit" class="btn btn-primary btn-block" value="Modifier">
    </form>
  </div>
</section>
<?php require APPROOT . '/views/inc/footer.php'; ?>
