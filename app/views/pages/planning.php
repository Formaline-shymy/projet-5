<?php require APPROOT . '/views/inc/header.php'; ?>
<?php require APPROOT . '/views/inc/pageheader.php'; ?>

<section id="presentation" class="my-5 mx-5">
    <div class="container">
         <div class="card-deck ml-5 pl-5 mb-3 text-center">
           <div class="mb-4">
             <div class="cardEva" style="width: 18rem;">
                <img src="img/photos/Eva.jpg" class="card-img-top" alt="...">
                <div class="card-body text-center">
                    <h5 class="card-title">Cours d'Eva</h5>
                    <p class="card-text ">Lorem ipsum dolor sit, amet consectetur adipisicing elitxpedita placeat.</p>
                </div>
                <ul class="list-group list-group-flush text-center">
                    <li class="list-group-item"> Hatha Yoga</li>
                    <li class="list-group-item">Vinyasa Yoga</li>
                    <li class="list-group-item">Iyengar Yoga</li>
                    <li class="list-group-item">Power Yoga</li>
                </ul>
             </div>
           </div>
           <div class="mb-4">
             <div class="cardKaren" style="width: 18rem;">
                <img src="img/photos/Karen.jpg" class="card-img-top" alt="...">
                <div class="card-body text-center">
                    <h5 class="card-title">Cours de Karen</h5>
                    <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit atque, quam.</p>
                </div>
                <ul class="list-group list-group-flush text-center">
                    <li class="list-group-item"> Hatha Yoga</li>
                    <li class="list-group-item">Vinyasa Yoga</li>
                    <li class="list-group-item">Ashtanga Yoga</li>
                    <li class="list-group-item">Yin Yoga</li>
                </ul>
              </div>
           </div>
           <div class="mb-4">
             <div class="cardMegan" style="width: 18rem;">
                <img src="img/photos/Megan.jpg" class="card-img-top" alt="...">
                <div class="card-body text-center">
                    <h5 class="card-title">Cours de Megan</h5>
                    <p class="card-text">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Numquam, veniam.</p>
                </div>
                <ul class="list-group list-group-flush text-center">
                    <li class="list-group-item">Ashtanga Yoga</li>
                    <li class="list-group-item">Bikram Yoga</li>
                    <li class="list-group-item">Iyengar Yoga</li>
                    <li class="list-group-item">Power Yoga</li>
                </ul>
              </div>
           </div>
         </div>
    </div> 
</section>

<h2 class="text-danger text-center pb-3">Pour accéder à tous nos vidéos vous devez vous connecter ou vous abonner</h2>

 <!-- BOXES YOGA TYPE EXPLANATION-->
 <section id="boxes" class=" pt-0 pb-3">
    <div class="container">
      <div class="row">
        <div class="col">
        <div class="info-header pt-3">
            <h2 class="text-danger text-center pb-5">
              Tous nos cours
            </h2>
            <p class="text-justify text-muted px-2 pb-3">
              Possimus obcaecati alias rerum dolore fugiat debitis vorem pipsum dolor sit amet consectetur adipisicing elit. 
            </p>
          </div>
        </div>
      <?php foreach ($data['flows'] as $flow): ?>
        <div class="col-md-3 my-3" style = "min-height:15rem">
          <div class="card h-100 text-center border-danger mb-resp">
            <div class="card-body">
              <h3 class="text-danger text-uppercase"><?php echo $flow->yogatype; ?></h3>
              <p class="text-secondary pt-2 mb-0"><?php echo $flow->description; ?></p>
            </div>
          </div>
        </div>
        <?php endforeach; ?>
      </div>
    </div>
</section>

<?php require APPROOT . '/views/inc/footer.php'; ?>


 