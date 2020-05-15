<?php require APPROOT . '/views/inc/header.php'; ?>

<!--  SLIDER -->
  <section id="slider">
    <div id="myCarousel" class="carousel slide" data-ride="carousel">
      <ol class="carousel-indicators">
        <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
        <li data-target="#myCarousel" data-slide-to="1"></li>
        <li data-target="#myCarousel" data-slide-to="2"></li>
      </ol>
      <div class="carousel-inner">
        <div class="carousel-item carousel-image-1 active">
          <div class="container">
            <div class="carousel-caption text-right mb-5">
              <h2 class="display-5 text-dark">Vos cours de yoga en ligne</h2>
              <p class="lead text-danger">Consequatur nemo illo consequuntur facere reprehenderit dolorem.</p>
              <a href="<?php echo URLROOT; ?>posts" class="btn btn-info btn-lg">Je découvre</a>
            </div>
          </div>
        </div>

        <div class="carousel-item carousel-image-2">
          <div class="container">
            <div class="carousel-caption  text-right mb-5">
              <h2 class="display-5 text-dark">Cours</h2>
              <p class="lead text-dark">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Consequatur nemo illo consequuntur facere reprehenderiteos pariatur.</p>
              <a href="<?php echo URLROOT; ?>planning" class="btn btn-primary btn-lg">Voir nos cours</a>
            </div>
          </div>
        </div>

        <div class="carousel-item carousel-image-3">
          <div class="container">
            <div class="carousel-caption text-center mb-5">
              <h2 class="display-5 text-dark">Différents types d'abonnements</h2>
              <p class="lead text-dark">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Consequatur nemo illo consequuntur facere, odit delectus sunt, eos pariatur.</p>
              <a href="<?php echo URLROOT; ?>abonnements" class="btn btn-info btn-lg">Voir nos offres</a>
            </div>
          </div>
        </div>
      </div> 

      <a href="#myCarousel" data-slide="prev" class="carousel-control-prev">
        <span class="carousel-control-prev-icon"></span>
      </a>

      <a href="#myCarousel" data-slide="next" class="carousel-control-next">
        <span class="carousel-control-next-icon"></span>
      </a>
    </div>
  </section> 

  <!-- CONCEPT SECTION -->
  <section id="home-heading" class=" mt-4 mb-5 p-5">
    <div class="row">
        <div class="col">
          <div class="container pt-3">
          <?php foreach ($data['pages'] as $page): ?>
            <h1 class="text-center mb-3"><?php echo $page->pageTitle; ?></h1>
            <h4 class="text-center my-3"><?php echo $page->description; ?></h4>
            <?php endforeach; ?>
            <a href="<?php echo URLROOT; ?>abonnements" class="btn btn-primary btn-lg mt-3">Nos abonnements</a>
          </div>
        </div>
    </div>
  </section>

   <!--HOME ICONS SECTION  -->
   <section id="home-icons" class="py-5">
    <div class="container">
      <div class="row">
        <div class="col-md-4 mb-4 text-center">
          <i class="fas fa-spa fa-3x mb-2 rounded-circle"></i>
      
          <h4> Yoga. Avec nos 3 professeurs !</h4>
        </div>
        <div class="col-md-4 mb-4 text-center">
          <i class="fas fa-clock fa-3x mb-2 rounded-circle"></i>
         
          <h4>Matin, midi et soir, online et en direct et bientôt en replay.</h4>
        </div>
        <div class="col-md-4 mb-4 text-center">
          <i class="fas fa-users fa-3x mb-2 rounded-circle"></i>
        
          <h4>Cours tous niveaux. Pour tous.</h4>
        </div>
      </div>
    </div>
  </section>

     <!-- TEAM -->
  <section id="team" class="text center mt-3 mb-5">
    <header class="section-header text-center ">
      <h2>Nos professeurs</h2>
      <p class="mx-5 my-5">
         Nous sommes des professeurs certifiés et expérimentés pour vous offrir la meilleure qualité et variété de cours : hatha, vinyasa, yin, power, etc…
      </p>
    </header>
    <div class="row mx-5 my-5">
      <div class="col-md-4 mb-4 text-center">
        <img src="img/photos/Eva.jpg" class="rounded-circle" alt="" />
        <h4>Eva</h4>
      </div>
      <div class="col-md-4 mb-4 text-center">
        <img src="img/photos/Karen.jpg" class="rounded-circle" alt="" />
        <h4>Karen</h4>
      </div>
      <div class="col-md-4 mb-4 text-center">
        <img src="img/photos/Megan.jpg" class="rounded-circle" alt="" /> 
        <h4>Megan</h4>
      </div>
      </div>
  </section>

 <!-- NEWSLETTER -->
 <section id="newsletter" class="text-center mt-5 p-5 bg-primary text-dark">
    <div class="container">
      <div class="row">
        <div class="col">
          <h1>Inscrivez-vous pour recevoir notre newsletter</h1>
          <p> en indiquant votre adresse e-mail ci-dessous.</p>
          <form class="form-inline justify-content-center">
            <input type="text" class="form-control mb-2 mr-2" placeholder="Votre Prénom">
            <input type="text" class="form-control mb-2 mr-2" placeholder="Votre Email">
            <button class="btn btn-primary mb-2">Envoyer</button>
          </form>
        </div>
      </div>
    </div>
  </section>

<?php require APPROOT . '/views/inc/footer.php'; ?>
