<?php
/*
  ./app/routeurs/user.php
 */

include '../app/controleurs/userControleur.php';

switch ($_GET['user']) {
  // DECONNEXION DU USER
  // PATTERN: index.php?user=logout
  // CTRL: userControleur
  // ACTION: logout
    case 'logout':
      \App\Controleurs\UserControleur\logoutAction();
      break;

    default:
      // code...
      break;
