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

  <section id="actions" class="py-4 mb-4 bg-light">
    <div class="container">
      <div class="row">
        <div class="col-md-3">
          <a href="<?php echo URLROOT; ?>adminboardposts/add" class="btn btn-primary btn-block">
            <i class="fas fa-plus"></i> Ajouter un nouvel article
          </a>
        </div>
        <div class="col-md-3">
         <a href="#" class="btn btn-success btn-block">
            <i class="fas fa-plus"></i> Ajouter un nouveau cours
          </a>
        </div>
        <div class="col-md-3">
        <a href="<?php echo URLROOT; ?>admins/register" class="btn btn-warning btn-block">
            <i class="fas fa-plus"></i> Inscrir un nouvel admin
          </a>
        </div>
      </div>
    </div>
  </section>

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
              <strong><?php echo $data['admin']->name; ?></strong>
            </div>
            <div class="form-group">
              <label for="familyname">Nom de famille :</label> 
              <strong><?php echo $data['admin']->familyname; ?></strong>
            </div>
            <div class="form-group">
             <label for="nick">Identifiant :</label> 
             <strong><?php echo $data['admin']->nick; ?></strong>
            </div>
            <div class="form-group">
              <label for="email">Adresse email :</label> 
              <strong><?php echo $data['admin']->email; ?></strong>
            </div>
            <div class="form-group">
              <label for="date">Date de la création du profil :</label> 
               <strong><?php echo date('Y-m-d', strtotime($data['admin']->created_at)) ?></strong>
            </div>
              <br>
            </div>
            <div class="card-footer text-center" style = "height:4rem">
              <a  href="<?php echo URLROOT; ?>adminboard/editprofil/<?php echo $data['admin']->id;  ?>" class="btn btn-danger mx-auto text-dark btn-sm"><i class="fas fa-exchange-alt"></i> Modifier votre profil</a>
            </div>
          </div>
        </div>

        <div class="col-md-3">
          <div class="card text-center bg-primary text-secondary mb-3" style="height: 8.5rem">
            <div class="card-body">
              <h4>Vos articles publiés</h4>
              <h5 class="display-5 mt-4">
                <i class="fas fa-pencil-alt"></i> <?php echo $data['postsCountById']; ?>
              </h5>
            </div>
          </div>

          <div class="card text-center bg-success text-secondary mb-3" style="height: 8.5rem">
            <div class="card-body">
              <h4> Vos cours</h4>
              <h5 class="display-5 mt-4">
                 <i class="fas fa-heartbeat"></i> <?php echo $data['flowsCountById']; ?> 
              </h5>
            </div>
          </div>

          <div class="card text-center bg-warning text-secondary mb-3" style="height: 8.5rem">
            <div class="card-body">
              <h4>Inscrits à vos cours</h4>
              <h5 class="display-5 mt-4">
                <i class="fas fa-users"></i> 0
              </h5>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

 

<?php require APPROOT . '/views/inc/footer.php'; ?>