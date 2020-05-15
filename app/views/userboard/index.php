<?php require APPROOT . '../views/inc/userboardheader.php'; ?>
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

  <section id="table">
    <div class="container my-5">
      <div class="row">
        <div class="col-md-9">
          <div class="card" style = "height:29rem">
            <div class="card-header">
              <h4 class="text-center ml-2 my-auto text-danger" style = "height:3rem"><i class="fas fa-user "></i> Bienvenue <?php echo $_SESSION['user_name']; ?></h4>
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
              <a href="<?php echo URLROOT; ?>userboard/showprofil/<?php echo  $_SESSION['user_id']; ?>" class="btn btn-outline-danger m-auto text-secondary btn-sm"> 
               <i class="fas fa-exchange-alt"></i> Voir votre profile</a>
              </div>
            </div>
           
          </div>
        </div>
        <div class="col-md-3">
          <div class="card text-center bg-primary text-secondary mb-4" style = "height:13.5rem">
            <div class="card-body">
              <h4 class ="pb-1"> Tous les abonements</h4>
              <h6 class="display-6 pb-1">
              <i class="fas fa-spa fa-3x"></i></i> 
              </h6>
              <a href="<?php echo URLROOT; ?>abonnements" class="btn btn-outline-light text-secondary btn-sm">Détails</a>
            </div>
          </div>

          <div class="card text-center bg-success text-secondary mb-4" style ="height:13.5rem">
            <div class="card-body">
              <h4 class ="pb-1">Descriptions des cours </h4>
              <h6 class="display-6 pb-1">
              <i class="fas fa-heartbeat fa-3x"></i>
              </h6>
              <a href="<?php echo URLROOT; ?>planning" class="btn btn-outline-light text-secondary btn-sm">Détails</a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

<?php require APPROOT . '/views/inc/footer.php'; ?>