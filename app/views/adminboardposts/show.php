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
<section id="showpost ">
  <div class="container my-4">
    <h2 class="text-center text-danger mt-0 mb-3">
    <i class="fas fa-eye"></i>  <?php echo $data['post']->title; ?> </h2> 
    <div class="bg-info text-white p-2 mb-3">
      Ecrit par <?php echo $data['admin']->name; ?> le <?php echo $data['post']->created_at; ?>
    </div>
    <p class="text-justify"><?php echo $data['post']->body; ?></p>

   <?php if($data['post']->admin_id == $_SESSION['admin_id']) : ?>
    <hr>
    <div class="row ">
      <div class="col mt-2"> 
        <a href="<?php echo URLROOT; ?>adminboardposts/edit/<?php echo $data['post']->id; ?>" class="btn btn-info btn-block">Modifier</a>
      </div>
      <div class="col mt-2">
        <form class="pull-right" action="<?php echo URLROOT; ?>adminboardposts/delete/<?php echo $data['post']->id; ?>" method="post">
        <input type="submit" value="Supprimer" class="btn btn-danger btn-block">
      </form>
      </div>
    </div>
  <?php endif; ?>
  </div>
</section>
<?php require APPROOT . '/views/inc/footer.php'; ?>