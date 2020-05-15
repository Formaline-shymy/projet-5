<?php require APPROOT . '/views/inc/header.php'; ?>
<?php require APPROOT . '/views/inc/pageheader.php'; ?>

 <!-- SERVICES SECTION -->
 <section id="tarifs" class="py-5">
    <div class="container">
      <div class="row">
       <?php foreach ($data['pages'] as $page): ?>
        <div class="col-md-6 mb-5">
          <div class="card text-center">
            <div class="card-header bg-primary text-dark">
              <h3><?php echo $page->type; ?></h3>
            </div>
            <div class="card-body">
              <h4 class="card-title"><?php echo $page->price; ?> €/1 mois</h4>
              <p class="card-text"><?php echo $page->description; ?></p>
              <ul class="list-group">
                <li class="list-group-item">
                  <i class="fas fa-check"></i> <?php echo $page->detail1; ?>
                </li>
                <li class="list-group-item">
                  <i class="fas fa-check"></i> <?php echo $page->detail2; ?>
                </li>
                <li class="list-group-item">
                  <i class="fas fa-check"></i> <?php echo $page->detail3; ?> 
                </li>
              </ul>
            </div>
            <div class="card-footer bg-primary">
            <?php echo $page->summary; ?>
            </div>
          </div>
        </div>
       <?php endforeach; ?>
      </div>
    </div>
  </section>
<?php require APPROOT . '/views/inc/footer.php'; ?>