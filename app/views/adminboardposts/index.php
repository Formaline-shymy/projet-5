<?php require APPROOT . '/views/inc/adminboardheader.php'; ?>
<!-- HEADER -->
<header id="main-header" class="py-2 bg-primary text-secondary">
    <div class="container">
      <div class="row">
        <div class="col-md-6">
          <h1>
          <i class="fas fa-pencil-alt"></i> Guide</h1>
        </div>
      </div>
    </div>
  </header>

  <section id="postslist ">
    <div class="container my-5">
      <div class="row">
        <div class="col-md-3 my-3">
          <a href="<?php echo URLROOT; ?>adminboardposts/add" class="btn btn-primary btn-block">
            <i class="fas fa-plus"></i> Ajouter un nouveau article
          </a>
       </div>
      </div>
      <div class="row">
        <div class="col">
          <div class="card">
            <div class="card-header bg-primary text-center">
              <h4>Tous les articles publiés</h4>
            </div>
            <table class="table table-striped">
              <thead class="thead-dark">
                <tr>
                  <th>Titre</th>
                  <th>Date</th>
                  <th>Auteur</th>
                  <th>Contenu</th>
                  <th>Modifications</th>
                </tr>
              </thead>
              <tbody>
              <tr> 
                <?php foreach($data['posts'] as $post) : ?>
                <td><?php echo $post->title; ?></td>
                <td><?php echo date('d M Y', strtotime($post->postCreated)); ?></td>
                <td><?php echo $post->name; ?> </td>
               <td><?php echo substr($post->body, 0, strrpos(substr($post->body, 0, 30), ' ')); ?> ...
              </td>      
               <td>
               <a href="<?php echo URLROOT; ?>adminboardposts/show/<?php echo $post->postId; ?>" class="btn btn-primary text-secondary"><i class="fas fa-angle-double-right"></i>  Modifier</a>
               </td>
              </tr>
              <?php endforeach; ?>
              </tbody>
            </table> 
           </div>
        </div>
      </div>
    </div> 
  </section>

<?php require APPROOT . '/views/inc/footer.php'; ?>     
