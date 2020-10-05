<?php
/*
  ./app/routeur.php
 */

  if (isset($_GET['user'])):
    include_once '../app/routeurs/user.php';
  endif;
