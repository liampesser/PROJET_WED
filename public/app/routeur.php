<?php
/*
  ./app/routeur.php
  ROUTEUR PRINCIPAL
  HYDRATE LES ZONES DYNAMIQUES
 */

// ROUTES DES POSTS
 // ROUTE DU DETAIL D'UN POST
 // PATTERN: ?postID=x
 // CTRL: postsControleur
 // ACTION: show

   if (isset($_GET['postID'])):
     include_once '../app/controleurs/postsControleur.php';
     \App\Controleurs\PostsControleur\showAction($connexion, $_GET['postID']);

// ROUTES DES USERS
  elseif (isset($_GET['users'])):
    include_once '../app/routeurs/users.php';

 // ROUTE PAR DEFAUT
 // PATTERN: /
 // CTRL: postsControleur
 // ACTION: index
   else:
     include_once '../app/controleurs/postsControleur.php';
     \App\Controleurs\PostsControleur\indexAction($connexion);
   endif;
