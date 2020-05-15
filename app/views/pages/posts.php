<?php require APPROOT . '/views/inc/header.php'; ?>
<?php require APPROOT . '/views/inc/pageheader.php'; ?>
  <section id="guide" class="py-5">
    <div class="container text-center">
      <h2 class="mb-4">LES COURS DE YOGA BY SUNDARATA </h2>
           <p class= "mb-5">Le Yoga est une pratique accessible à tous. 
            Chez SUNDARATA nous avons à coeur de vous apporter de la facilité, de l’accessibilité, de la qualité et du lien humain pour faire de chaque cours une expérience forte et addictive !</p>
    </div>      
    <div class="container">
      <div class="row">
          <?php foreach ($data['posts'] as $post): ?>
            <div class="col-md-4">
              <div class="card-mb-4 shadow-sm">
                <div class="card bg-light border-primary h-100" style = "width: 100%" >
                  <img src="https://source.unsplash.com/random/270x150" alt="" class="img-fluid card-img-top">
                    <div class="card-body bg-light">
                      <a href="<?php echo URLROOT; ?>posts/<?php echo $post->id; ?>">
                        <h4 class="card-title text-dark"><?php echo $post->title; ?></h4>
                      </a> 
                      <small class="body-muted">Ecrit le <?php setlocale (LC_TIME, 'fr_FR.utf8','fra');  echo strftime('%d %B %Y', strtotime($post->created_at)); ?></small>
                      <hr>
                      <p class="card-text bg-light"> <?php if (strlen($post->body) > 100): ?>
                        <?php echo substr($post->body, 0, strrpos(substr($post->body, 0, 125), ' ')); ?>  ...
                        <p><a href="<?php echo URLROOT; ?>posts/<?php echo $post->id; ?>" class="btn btn-primary">Lire la suite</a></p>
                        <?php else: ?>
                        <?php echo $post->body; ?>
                        <?php endif;?>
                    </div>
                </div>
              </div>
            </div>
        <?php endforeach; ?>
      </div>
    </div> 
  </section>

  <?php require APPROOT . '/views/inc/footer.php'; ?>
      
      

    

