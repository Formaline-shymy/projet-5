<?php require APPROOT . '../views/inc/userboardheader.php'; ?>
 <!-- HEADER -->
<header id="main-header" class="py-2 bg-success text-secondary">
    <div class="container">
      <div class="row">
        <div class="col-md-6">
          <h1>
          <i class="fas fa-heartbeat"></i></i> Cours</h1>
        </div>
      </div>
    </div>
</header>

<section>
  <div class="container my-5">
  	<h3 class="mb-2 text-center text-success text-uppercase">Consulter le planning</h3>
  	<div id='calendar'></div>
  </div>
</section>

<section class="booking" >
	<div class="container my-5" style = "width: 50%">
  		<h3 class="mb-2 text-center text-success text-uppercase">Réserver votre cours</h3>
		<form action="#" method="post" class="appointment-form">
			<div class="row">
			    <div class="col-sm-12">
			        <div class="form-group">
                        <input type="text" name="name" class="form-control" value="<?php echo $_SESSION['user_name']; ?>"readonly >
					</div>
			    </div>
			    <div class="col-sm-12">
			        <div class="form-group">
                        <input type="email" name="email" class="form-control" value="<?php echo $_SESSION['user_email']; ?>"readonly >
					</div>
			    </div>
				<div class="col-sm-12">
			        <div class="form-group">
                     	<div class="select-wrap">
							<div class="icon"><span class="ion-ios-arrow-down"></span></div>                   
								<select name="services" id="services" required="true" class="form-control">
									<option value="">Choisir le cours</option>
									<?php foreach ($data['flowsdifff'] as $flow): ?> 
									<option value="<?php echo $flow->type; ?>"><?php echo $flow->type; ?></option>
	   								<?php endforeach; ?>
								</select>
						</div>
					</div>
			    </div>
			    <div class="col-sm-12">
					<div class="form-group">
                     	<div class="select-wrap">
							<div class="icon"><span class="ion-ios-arrow-down"></span></div>                   
								<select name="services" id="day" required="true" class="form-control">
									<option value="">Choisir le jour</option>
									<?php foreach ($data['flowsdiffd'] as $flow): ?> 
									<option value="<?php echo $flow->frequency; ?>"><?php echo $flow->frequency; ?></option>
	   								<?php endforeach; ?>
								</select>
						</div>
					</div> 
			    </div>
			    <div class="col-sm-12">
					<div class="form-group">
						<div class="select-wrap">
							<div class="icon"><span class="ion-ios-arrow-down"></span></div>                   
								<select name="services" id="time" required="true" class="form-control">
									<option value="">Choisir l'heure</option>
									<?php foreach ($data['flowsdifft'] as $flow): ?> 
									<option value="<?php echo $flow->timing; ?>"><?php echo  date ('H:i', strtotime($flow->timing)); ?></option>
									<?php endforeach; ?>
								</select>
						</div>
					</div>
			    </div>
			</div>
				    <div class="form-group">
			            <input type="submit" value="Confirmer" class="btn btn-success">
			        </div>
		</form>
    </div>
</section>

<?php require APPROOT . '/views/inc/footer.php'; ?>