<?php require APPROOT . '/views/inc/adminboardheader.php'; ?>
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

  <section id="postslist ">
    <div class="container my-5">
      <div class="row">
        <div class="col-md-3 my-3">
            <a href="<?php echo URLROOT; ?>adminboardflows/add" class="btn btn-success btn-block">
              <i class="fas fa-plus"></i> Ajouter un nouveau cours
            </a>   
        </div>
        <div class="col-md-3 my-3">
            <a href="<?php echo URLROOT; ?>adminboardflows/show" class="btn btn-success btn-block">
              <i class="far fa-eye"></i>&nbsp&nbsp Voir le calendrier
            </a>
        </div>
      </div>
      <div class="row">
        <div class="col">
          <div class="card">
            <div class="card-header bg-success text-center">
              <h4>Tous les cours</h4>
            </div>
             <div class="container">
              <div class="input-group my-3">
                <select class="custom-select" id="maxRows">
                  <option value="6">2</option>
                  <option value="12">12</option>
                  <option value="3000">Tous</option>
                </select>
                <div class="input-group-append">
                  <label class="input-group-text bg-success" for="maxRows">Choisir le type d'affichage</label>
                </div>
              </div>

              <table class="table table-striped table-class" id= "table-id">
                <thead class="thead-dark">
                  <tr>
                    <th>Type de cours</th>
                    <th>Jour de la semaine</th>
                    <th>Heure</th>
                    <th>Professeur</th>
                  </tr>
                </thead>
                <tbody>
                <?php foreach($data['flows'] as $flow) : ?> 
                  <tr>               
                    <td><?php echo $flow->type; ?></td>
                    <td><?php echo $flow->frequency; ?></td>
                    <td><?php echo  date ('H:i', strtotime($flow->timing)); ?> </td>          
                    <td><?php echo $flow->name; ?> </td>   
                  </tr>
                <?php endforeach; ?>
                </tbody>
              </table>      
              <!--Start Pagination -->
              <div class='pagination-container' >
                <nav>
                  <ul class="pagination d-flex justify-content-around">
                    <li data-page="prev" >
                      <div> Précedent  <span class="sr-only">(current)</span> </div>
                    </li> 
                      <!--	Here the JS Function Will Add the Rows -->
                    <li data-page="next" id="prev">
                      <div> Suivant  <span class="sr-only">(current)</span> </div>
                    </li>
                  </ul>
                </nav>
              </div>
             </div>
          </div>
        </div>
    </div> 
  </section>


 
<?php require APPROOT . '/views/inc/footer.php'; ?>     


