<?php require APPROOT . '/views/inc/adminboardheader.php'; ?>
<!-- HEADER -->
<header id="main-header" class="py-2 bg-warning text-secondary">
    <div class="container">
      <div class="row">
        <div class="col-md-6">
          <h1>
          <i class="fas fa-users"></i> Membres</h1>
        </div>
      </div>
    </div>
  </header>


  <section id="userslist ">
    <div class="container my-5">
      <div class="row">
        <div class="col">
          <div class="card">
            <div class="card-header bg-warning text-center">
              <h4>Tous les membres</h4>
            </div>
            <table class="table table-striped">
              <thead class="thead-dark">
                <tr>
                  <th>Prénom </th>
                  <th>Nom</th>
                  <th>Abonnement</th>
                  <th>Date d'inscription</th>
                </tr>
              </thead>
              <tbody>
              <tr> 
               <?php foreach($data['users'] as $user) : ?>
                <td><?php echo $user->name; ?></td>
                <td><?php echo $user->familyname; ?></td>
                <td><?php echo $user->plan; ?> </td>
                <td><?php echo date('Y-m-d', strtotime($user->created_at)) ?> </td>
              </tr>
              <?php endforeach; ?>
              </tbody>
            </table>  
           </div>
        </div>
      </div>
    </div> 
  </section>

<?php require APPROOT . '/views/inc/footer.php'; ?>     
