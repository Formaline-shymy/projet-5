<?php require APPROOT . '/views/inc/userboardheader.php'; ?>
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
 <section id="details ">  
    <div class="container">
      <div class="row">
        <div class="col">
          <div class="card my-5">
            <div class="card-header bg-success">
              <h4>Modifier votre Profil</h4>
            </div>
            <div class="card-body">
             
              <form action="<?php echo URLROOT; ?>userboard/editprofil/<?php echo $data['id']; ?>" method= "post">
                <div class="form-group">
                  <label for="name">Prénom :</label>
                  <input type="text" name="name" class="form-control form-control-lg <?php echo (!empty($data['name_err'])) ? 'is-invalid' : ''; ?>" value="<?php echo $data['name']; ?>">
                </div>
                <div class="form-group">
                  <label for="familyname">Nom de famille :</label>
                  <input type="text" name="familyname" class="form-control form-control-lg <?php echo (!empty($data['familyname_err'])) ? 'is-invalid' : ''; ?>" value="<?php echo $data['familyname']; ?>">
                </div>
                <div class="form-group">
                  <label for="nick">Identifiant :</label>
                  <input type="text" name="nick" class="form-control form-control-lg <?php echo (!empty($data['nick_err'])) ? 'is-invalid' : ''; ?>" value="<?php echo $data['nick']; ?>">
                </div>
                <div class="form-group">
                <label for="email">Email :</label>
                <input type="email" name="email" class="form-control form-control-lg <?php echo (!empty($data['email_err'])) ? 'is-invalid' : ''; ?>" value="<?php echo $data['email']; ?>">
                </div>
                <div class="row">
                  <div class="col md-6">
                    <input type="submit" class="btn btn-success btn-block" value="Modifier">
                  </div>
                </div>
              </form>
            </div>
          </div>
        </div>
      </div>
    </div>  
 </section>


  <?php require APPROOT . '/views/inc/footer.php'; ?>