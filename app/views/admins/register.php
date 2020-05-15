<?php require APPROOT . '/views/inc/adminboardheader.php'; ?>
   <div class="row">  
    <div class="col-md-5 py-5 mx-auto">
      <div class="card card-body bg-light">
      <h3>Inscription</h3> 
        <form action="<?php echo URLROOT; ?>admins/register" method="post">
          <div class="form-group">
            <label for="name">Votre prénom: <sup>*</sup></label>
            <input type="text" name="name" class="form-control form-control-lg <?php echo (!empty($data['name_err'])) ? 'is-invalid' : ''; ?>" value="<?php echo $data['name']; ?>">
            <span class="invalid-feedback"><?php echo $data['name_err']; ?></span>
          </div>
          <div class="form-group">
            <label for="familyname">Votre nom: <sup>*</sup></label>
            <input type="text" name="familyname" class="form-control form-control-lg <?php echo (!empty($data['familyname_err'])) ? 'is-invalid' : ''; ?>" value="<?php echo $data['familyname']; ?>">
            <span class="invalid-feedback"><?php echo $data['familyname_err']; ?></span>
          </div>
          <div class="form-group">
            <label for="nick">Votre identifiant: <sup>*</sup></label>
            <input type="text" name="nick" class="form-control form-control-lg <?php echo (!empty($data['nick_err'])) ? 'is-invalid' : ''; ?>" value="<?php echo $data['nick']; ?>">
            <span class="invalid-feedback"><?php echo $data['nick_err']; ?></span>
          </div>
          <div class="form-group">
            <label for="email">Votre adresse mail: <sup>*</sup></label>
            <input type="email" name="email" class="form-control form-control-lg <?php echo (!empty($data['email_err'])) ? 'is-invalid' : ''; ?>" value="<?php echo $data['email']; ?>">
            <span class="invalid-feedback"><?php echo $data['email_err']; ?></span>
          </div>
          <div class="form-group">
            <label for="password">Votre mot de passe: <sup>*</sup></label>
            <input type="password" name="password" class="form-control form-control-lg <?php echo (!empty($data['password_err'])) ? 'is-invalid' : ''; ?>" value="<?php echo $data['password']; ?>">
            <span class="invalid-feedback"><?php echo $data['password_err']; ?></span>
          </div>
          <div class="form-group">
            <label for="confirm_password">Confirmez votre mot de passe: <sup>*</sup></label>
            <input type="password" name="confirm_password" class="form-control form-control-lg <?php echo (!empty($data['confirm_password_err'])) ? 'is-invalid' : ''; ?>" value="<?php echo $data['confirm_password']; ?>">
            <span class="invalid-feedback"><?php echo $data['confirm_password_err']; ?></span>
          </div>

          <div class="row">
            <div class="col">
              <input type="submit" value="S'inscrire" class="btn btn-info btn-block">
            </div>
          </div>
        </form>
      </div>
    </div>
  </div>
  <?php require APPROOT . '/views/inc/footer.php'; ?>
