<?php require APPROOT . '/views/inc/header1.php'; ?> 
<?php require APPROOT . '/views/inc/pageheader.php'; ?> 

  <div class="container">
    <div class="p-3">

      <div class="row">
        <div class="col-md-3 mb-3  ">
        <a class="text-dark" href=" <?php echo URLROOT; ?>posts">
           <i class="fas fa-arrow-left text-dark"></i> Retour à la liste d'articles
          </a>
        </div>
      </div>

        <p class= "datePost text-left">
        <small class="text-muted "><?php setlocale (LC_TIME, 'fr_FR.utf8','fra');  echo strftime('%A %d %B %Y', strtotime($data['post']->created_at)); ?></small>
        </p>
        <h4 class="titlePost text-danger text-uppercase text-left"> 
         <strong> <?php echo $data['post']->title; ?></strong>
        </h4>
        <hr>
        <p class="contentPost text-justify ">
          <?php echo $data['post']->body; ?>
        </p>         
        <hr>
    </div>
  </div>
    

<?php require APPROOT . '/views/inc/footer.php'; ?>

