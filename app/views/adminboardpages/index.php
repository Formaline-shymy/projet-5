<?php require APPROOT . '/views/inc/adminboardheader.php'; ?>
<!-- HEADER -->
<header id="main-header" class="py-2 bg-primary text-secondary">
    <div class="container">
      <div class="row">
        <div class="col-md-6">
          <h1>
          <i class="fas fa-file-signature"></i> Contenu</h1>
        </div>
      </div>
    </div>
  </header>


  <section id="pageslist ">
    <div class="container my-5">
      <div class="row">
        <div class="col">
          <div class="card">
            <div class="card-header bg-primary text-center">
              <h4>Contenu des pages à modifier</h4>
            </div>
            <table class="table table-striped">
              <thead class="thead-dark">
                <tr>
                  <th>Emplacement d'un contenu</th>
                  <th class="text-center">Description</th>
                  <th>Modifications</th>
                </tr>
              </thead>
              <tbody class="text-center">
                <tr> 
                <?php foreach ($data['pagesPl'] as $page): ?>
                  <td><?php echo $page->pageType; ?></td>
                  <td ><?php echo $page->description; ?> </td>
                  <td>
                    <a href="<?php echo URLROOT; ?>adminboardpages/plansedit/<?php echo $page->id; ?>" class="btn btn-primary text-secondary"><i class="fas fa-angle-double-right"></i>Modifier</a>
                  </td>
                </tr>
                <?php endforeach; ?>
                <?php foreach ($data['pagesCon'] as $page): ?>
                  <td><?php echo $page->pageType; ?></td>
                  <td><?php echo $page->description; ?> </td>
                  <td>
                    <a href="<?php echo URLROOT; ?>adminboardpages/contactedit/<?php echo $page->id; ?>" class="btn btn-primary text-secondary"><i class="fas fa-angle-double-right"></i>Modifier</a>
                  </td>
                </tr>
                <?php endforeach; ?><?php foreach ($data['pagesHom'] as $page): ?>
                  <td><?php echo $page->pageType; ?></td>
                  <td><?php echo $page->description; ?> </td>
                  <td>
                    <a href="<?php echo URLROOT; ?>adminboardpages/homedit/<?php echo $page->id; ?>" class="btn btn-primary text-secondary"><i class="fas fa-angle-double-right"></i>Modifier</a> 
                  </td>
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
