<!DOCTYPE html>
<html lang="fr-FR">
<head>
<meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.13/css/all.css" integrity="sha384-DNOHZ68U8hZfKXOrtjWvjxusGo9WQnrNx2sqG0tfsghAvtVlRW3tvkXWZh58N9jp"
    crossorigin="anonymous">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" integrity="sha384-WskhaSGFgHYWDcbwN70/dfYBj47jz9qbsMId/iRN3ewGhXQFZCSftd1LZCfmhktB"
    crossorigin="anonymous">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/ekko-lightbox/5.3.0/ekko-lightbox.css" />
     <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css"
   integrity="sha384-B4dIYHKNBt8Bc12p+WXckhzcICo0wtJAoU8YZTY5qE0Id1GSseTk6S+L3BlXeVIU" crossorigin="anonymous"/>
    <link rel="stylesheet" href="<?php echo URLROOT; ?>/css/style.css">
    <link rel="stylesheet" href="<?php echo URLROOT; ?>/css/colorchange.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>

    <title><?php echo SITENAME;?></title>
    <meta name="description" content=" SUNDARATA - yoga studio- Aneta LAURENT - Projet 5 DWJ  OpenClassrooms" />
    <link rel="icon" type="image/jpg" href="public/img/icona.png" />

</head>
<body>

 <!-- NAVBAR -->
  <nav class="navbar fixed-top navbar-expand-md navbar-light bg-light">
    <div class="container">
      <a href="<?php echo URLROOT; ?>" class="navbar-brand #top"><img src="img/sundarata.png"  class="float-left " alt="logo" style="width:100px"></a>
      <button class="navbar-toggler" data-toggle="collapse" data-target="#navbarCollapse">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarCollapse">
        <ul class="navbar-nav ml-auto">
          <li class="nav-item active">
            <a href="<?php echo URLROOT; ?>" class="nav-link">Accueil</a>
          </li>
          <li class="nav-item">
            <a href= "<?php echo URLROOT; ?>planning" class="nav-link">Nos Cours</a>
          </li>
          <li class="nav-item">
            <a href= "<?php echo URLROOT; ?>posts" class="nav-link">Guide</a>
          </li>
          <li class="nav-item">
            <a href= "<?php echo URLROOT; ?>abonnements" class="nav-link">Tarifs</a>
          </li>
          <li class="nav-item">
            <a href= "<?php echo URLROOT; ?>contact" class="nav-link">Contact</a>
          </li>
          <li class="nav-item">
            <a href= "<?php echo URLROOT; ?>users/login" class="nav-link">Mon compte</a>
          </li>
        </ul>
      </div>
    </div>
</nav>
  <!-- END OF NAVBAR -->
  
  <div id="page-container">
   <div id="content-wrap">
