<?php require APPROOT . '/views/inc/header.php'; ?>
<?php require APPROOT . '/views/inc/pageheader.php'; ?>
<section class="contact-section bg-light mt-5" id="contact-icons">
      <div class="container">
        <div class="row contact-info pl-5 ml-5">
        <?php foreach ($data['pages'] as $page): ?>
          <div class="col-md-3">
          	<div class="box  py-5 text-center">
          		<div class="icon align-items-center justify-content-center">
          			<span> <i class="fas fa-map-signs fa-2x mb-2 rounded-circle"></i></span>
          		</div>
              <h3 class="mb-4 text-secondary">Notre addresse:</h3>
              <p class="text-secondary"><?php echo $page->description; ?></p>
	          </div> 
          </div>
          <div class="col-md-3">
          	<div class=" py-5 text-center">
          		<div class="icon align-items-center justify-content-center">
          			<span><i class="fas fa-phone fa-2x mb-2 rounded-circle"></i></span>
          		</div>
          		<h3 class="mb-4 text-secondary">Télephone:</h3>
	           <p class ="text-secondary">+ 33 0 <?php echo $page->mobileNumber; ?></p> 
	          </div>
          </div>
          <div class="col-md-3">
          	<div class="py-5 text-center">
          		<div class="icon d-flex align-items-center justify-content-center">
          			<span><i class="fas fa-paper-plane fa-2x mb-2 rounded-circle"></i></span>
          		</div>
          		<h3 class="mb-4 text-secondary">Email:</h3>
	       <p class="text-secondary"><?php echo $page->email; ?></p>
	          </div>
          </div>
    
          <?php endforeach; ?>
        </div>
      </div>
</section>
	
 <section class= "mt-5 d-flex p-3 " id="contact">
 <div class="container">
  <div class="row mb-5">
    <div class= "col-md-6 contact-form1">
 
    <div class="container py-2 bg-white">
      <div class="row">
        <div class="col-lg-12  ">
          <h3 class="pt-0 pb-3 text-danger text-center">Formulaire de contact</h3>        
          <form>
            <div class="input-group input-group-lg pb-3">
              <div class="input-group-prepend">
                <span class="input-group-text bg-primary">
                  <i class="fas fa-user"></i>
                </span>
              </div>
              <input type="text" class="form-control" id="name" placeholder="Votre prénom" required>
            </div>

            <div class="input-group input-group-lg pb-3">
              <div class="input-group-prepend">
                <span class="input-group-text bg-primary">
                  <i class="fas fa-envelope"></i>
                </span>
              </div>
              <input type="text" class="form-control" id="email" placeholder="Email" required>
            </div>

            <div class="input-group input-group-lg pb-1">
              <div class="input-group-prepend">
                <span class="input-group-text bg-primary">
                  <i class="fas fa-pencil-alt"></i>
                </span>
              </div>
              <textarea class="form-control" id="message" placeholder="Message" rows="5" required></textarea>
            </div>
            <div class="custom-control custom-checkbox">
                <input type="checkbox" class="custom-control-input" id="customCheck1" required>
                <label class="custom-control-label" for="customCheck1">J'accepte la politique de confidentialité de SUNDARATA YOGA</label>
              </div>
            <input type="submit" value="Envoyer" class="btn btn-primary btn-block btn-lg">
          </form>
        </div>
      </div>
    </div>
    </div>
    <div class="col-md-6 map sm-hidden"></div>
  </div>

 
</div>
</section> 
    
  <!-- Local JS File -->
  <script src="js/main.js"></script>

  <!-- Google Maps -->
  <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBmi0lrUScWE4JvUQSumQCpyvPxpzLNQqo&callback=initMap"
    async defer></script>



<?php require APPROOT . '/views/inc/footer.php'; ?>
