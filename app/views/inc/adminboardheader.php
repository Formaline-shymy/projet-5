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
      
    <title> SUNDARATA ~ AdminBoard </title>
    <meta name="description" content=" SUNDARATA - yoga studio- Aneta LAURENT - Projet 5 DWJ  OpenClassrooms" />
    <link rel="icon" type="image/jpg" href="../public/img/icona.png" />
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.2.2/jquery.min.js"></script>
    <script src="https://cdn.tiny.cloud/1/fzc9m4sl280q4anrxhe3qwryw7j89uok7zpg83alck8qkh01/tinymce/5/tinymce.min.js" referrerpolicy="origin"></script>
   
   <script>
    tinymce.init({
    selector: '#format-custom',
    language : 'fr_FR',
    height: 500,
    });
    </script>

    <link rel="stylesheet" href="<?php echo URLROOT; ?>/css/fullcalendar/core/main.css">
    <link rel="stylesheet" href="<?php echo URLROOT; ?>/css/fullcalendar/daygrid/main.css">
    <link rel="stylesheet" href="<?php echo URLROOT; ?>/css/fullcalendar/timegrid/main.css">
    <script src="<?php echo URLROOT; ?>/js/fullcalendar/core/main.js "></script>
    <script src="<?php echo URLROOT; ?>/js/fullcalendar/daygrid/main.js "></script>
    <script src="<?php echo URLROOT; ?>/js/fullcalendar/interaction/main.js "></script>
    <script src="<?php echo URLROOT; ?>/js/fullcalendar/google-calendar/main.js "></script>
    <script src="<?php echo URLROOT; ?>/js/fullcalendar/timegrid/main.js "></script>
        
    <script>
        document.addEventListener('DOMContentLoaded', function() {
          var calendarEl = document.getElementById('calendar');
          var calendar = new FullCalendar.Calendar(calendarEl, {
            firstDay: 1, 
            hiddenDays: [ 0 ],
            minTime: "09:00:00",
            maxTime: "22:00:00",
            locale: 'fr',
            plugins: [ 'interaction','timeGrid' ,'list','googleCalendar' ],
            googleCalendarApiKey: 'AIzaSyA-CrXvkQmOI45KiMB1Yia8_8cX_xys3_8',
            events: {
            googleCalendarId: 'sundarata.yoga.studio@gmail.com',
            color: 'lightgreen', 
            textColor: 'black',
            },
            selectable: true,
            allDaySlot: false,
            buttonText:{
              today:   "aujourd'hui"
            },
            header: {
              left:   '',
              center: 'title',
              right:  'today, prev,next',
            },
        
          });
          calendar.render();
        });
    </script>
</head>
<body>


  <!-- NAVBAR -->
  <nav class="navbar navbar-expand-sm navbar-light bg-light p-0">
    <div class="container">
      <button class="navbar-toggler" data-toggle="collapse" data-target="#navbarCollapse">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarCollapse">
        <ul class="navbar-nav">
          <li class="nav-item">
            <a href="<?php echo URLROOT; ?>" class="nav-link">
              <i class="fas fa-home"></i>
            </a>
          </li>
          <li class="nav-item px-1">
          <a href="<?php echo URLROOT; ?>adminboard/index" class="nav-link active">Tableau de bord</a>
          </li>
          <li class="nav-item px-1">
            <a href="<?php echo URLROOT; ?>adminboardposts/index" class="nav-link">Guide</a>
          </li>
          <li class="nav-item px-1">
            <a href="<?php echo URLROOT; ?>adminboardpages/index" class="nav-link">Pages</a>
          </li>
          <li class="nav-item px-1">
            <a href="<?php echo URLROOT; ?>adminboardflows/index" class="nav-link">Cours </a>
          </li>
          <li class="nav-item px-1">
            <a href="<?php echo URLROOT; ?>adminboardusers/index" class="nav-link">Membres </a>
          </li>
          <li class="nav-item pl-5  ml-5 ">
          <strong> <a href="<?php echo URLROOT; ?>adminboard/showprofil/<?php echo  $_SESSION['admin_id']; ?>" class="nav-link  text-danger ml-5"> <?php echo $_SESSION['admin_name']; ?> </a></strong>
          </li>
        </ul>

        <ul class="navbar-nav ml-auto">
           <li class="nav-item">
            <a href="<?php echo URLROOT; ?>admins/logout" class="nav-link">
              <i class="fas fa-user-times"></i> Déconnexion
            </a>
          </li>
        </ul>
      </div>
    </div>
  </nav>
 
 <!-- END OF NAVBAR  -->
  <div id="container">
        <div id="inner-container">

            <div id="results"></div>
            <div id="loader"></div>

        </div>
    </div>

    <div id="page-container">
   <div id="content-wrap">
   