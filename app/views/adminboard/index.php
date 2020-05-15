<?php require APPROOT . '/views/inc/adminboardheader.php'; ?>
 <!-- HEADER -->
  <header id="main-header" class="py-2 bg-info text-secondary">
    <div class="container">
      <div class="row">
        <div class="col-md-6">
          <h1>
            <i class="fas fa-cog"></i> Tableau de bord</h1>
        </div>
      </div>
    </div>
  </header>

  <!-- ACTIONS -->
  <section id="actions" class="py-4 mb-4 bg-light">
  
    <div class="container">
      <div class="row">
        <div class="col-md-3">
          <a href="<?php echo URLROOT; ?>adminboardposts/add" class="btn btn-primary btn-block">
            <i class="fas fa-plus"></i> Ajouter un nouvel article
          </a>
        </div>
        <div class="col-md-3">
        <a href="<?php echo URLROOT; ?>adminboardflows/add" class="btn btn-success btn-block">
            <i class="fas fa-plus"></i> Ajouter un nouveau cours 
          </a>
        </div>
        <div class="col-md-3">
        <a href="<?php echo URLROOT; ?>admins/register" class="btn btn-warning btn-block">
            <i class="fas fa-plus"></i> Inscrire un nouvel admin 
          </a>
        </div>
      </div>
    </div>
  </section>


  <section id="table">
    <div class="container">
      <div class="row">
        <div class="col-md-9">
          <div class="card" style = "height:29rem">
            <div class="card-header">
              <h4 class="text-center ml-2 my-auto text-danger" style = "height:3rem"><i class="fas fa-user "></i> Bienvenue Admin <?php echo $_SESSION['admin_name']; ?></h4>
            </div>           
            <div class="card-body">
              <div class="row">
                 <div class="col">
                   <h2 class = "todaydate text-center text-danger my-5" >Aujourd'hui nous sommes <br><br> le <?php setlocale(LC_TIME, 'fra_fra'); echo strftime('%d %B %Y')?> <br> <br> et il est
                   <?php
                     date_default_timezone_set('Europe/Paris');
                     echo date("H");?>h<?php echo date ("i");?>
                  </h2>
                </div>
              </div>
              <div class="row">
              <a href="<?php echo URLROOT; ?>adminboard/showprofil/<?php echo  $_SESSION['admin_id']; ?>" class="btn btn-danger m-auto text-dark"><i class="fas fa-exchange-alt"></i> Voir votre profile</a>
              </div>
            </div>
           
          </div>
        </div>
        <div class="col-md-3">
          <div class="card text-center bg-primary text-secondary mb-3">
            <div class="card-body">
              <h4>Articles publiés</h4>
              <h5 class="display-5">
                <i class="fas fa-pencil-alt"></i> <?php echo $data['postsCount']; ?>
              </h5>
              <a href="<?php echo URLROOT; ?>adminboardposts/index" class="btn btn-outline-light text-secondary btn-sm">Détails</a>
            </div>
          </div>

          <div class="card text-center bg-success text-secondary mb-3">
            <div class="card-body">
              <h4>Cours</h4>
              <h5 class="display-5">
              <i class="fas fa-heartbeat"></i> <?php echo $data['flowsCount']; ?>
              </h5>
              <a href="<?php echo URLROOT; ?>adminboardflows/index" class="btn btn-outline-light text-secondary btn-sm">Détails</a>
            </div>
          </div>

          <div class="card text-center bg-warning text-secondary mb-3">
            <div class="card-body">
              <h4>Membres inscrits</h4>
              <h5 class="display-5">
                <i class="fas fa-users"></i> <?php echo $data['usersCount']; ?>
              </h5>
              <a href="<?php echo URLROOT; ?>adminboardusers/index" class="btn btn-outline-light text-secondary btn-sm">Détails</a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <?php require APPROOT . '/views/inc/footer.php'; ?>