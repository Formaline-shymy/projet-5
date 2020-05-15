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
    <div class="container">
      <div class="row">
        <div class="col-md-9 my-3">
          <div class="card">
            <div class="card-header">
              <h4 class="text-center ml-2 my-auto text-danger" style = "height:3rem"> Votre Profil </h4>
            </div>           
            <div class="card-body text-center">
              <div class="form-group">
              <label for="name">Prénom :</label> 
              <strong><?php echo $data['user']->name; ?></strong>
            </div>
            <div class="form-group">
              <label for="familyname">Nom de famille :</label> 
              <strong><?php echo $data['user']->familyname; ?></strong>
            </div>
            <div class="form-group">
              <label for="nick">Identifiant :</label> 
              <strong><?php echo $data['user']->nick; ?></strong>
            </div>
            <div class="form-group">
              <label for="email">Adresse email :</label> 
              <strong><?php echo $data['user']->email; ?></strong>
            </div>
            <div class="form-group">
              <label for="date">Date d'inscription :</label> 
               <strong><?php echo date('Y-m-d', strtotime($data['user']->created_at)) ?></strong>
            </div>
            <div class="form-group">
              <label for="date">Votre abonnement va expirer : </label> 
              <strong><?php $date = $data['user']->created_at;  echo date('Y-m-d', strtotime($date. ' + 365 days'));?></strong>
            </div>
             <br>
            </div>
            <div class="card-footer text-center" style = "height:4rem">
              <a  href="<?php echo URLROOT; ?>userboard/editprofil/<?php echo $data['user_id']; ?>" class="btn btn-outline-danger  text-secondary btn-sm mt-1"><i class="fas fa-exchange-alt"></i> Modifier votre profil</a>
            </div>
          </div>
        </div>
              
<!-- container profile -->

        <div class="col-md-3 mt-3">
              <div class="card text-center bg-primary text-secondary mb-4" style = "height:14.5rem">
                <div class="card-body">
                  <h4 class ="pb-2">Votre abonnement :</h4>
                  <h6 class="display-5 pb-3">
                  <i class="fas fa-spa fa-3x mb-2"></i><br>
                    <h4><?php echo $data['user']->plan; ?></h4>
                  </h6>
                </div>
              </div>

              <div class="card text-center bg-success text-secondary mb-4" style = "height:14.5rem">
                <div class="card-body">
                  <h4 class ="pb-2">Voirs les cours : </h4>
                  <h6 class="display-6">
                  <i class="fas fa-heartbeat fa-3x mb-4"></i>
                  </h6>
                  <a href="<?php echo URLROOT; ?>userboardflows/index"class="btn btn-outline-light text-secondary btn-sm">Détails</a>
                </div>
              </div>
        </div>
      </div>
    </div>
  </section>

<?php require APPROOT . '/views/inc/footer.php'; ?>