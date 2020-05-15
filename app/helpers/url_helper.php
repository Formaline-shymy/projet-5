<?php
  // to  redirect page easily//file with helpers functions
  function redirect($page){
    header('location: ' . URLROOT . $page);
  }