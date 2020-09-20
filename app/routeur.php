<?php
/*
  ./app/routeur.php
  ROUTEUR PRINCIPAL
  HYDRATE LES ZONES DYNAMIQUES
 */

 // ROUTE DU DETAIL D'UN POST
 // PATTERN: posts/id-slug.html
 // CTRL: postsControleur
 // ACTION: SHOW
 if(isset($_GET['postID'])):
   include_once '../app/controleurs/postsControleur.php';
   \App\Controleurs\PostsControleur\showAction($_GET['postID']);
 // ROUTE PAR DEFAUT
 // PATTERN: /
 // CTRL: postsControleur
 // ACTION: index
 else:
   include_once '../app/controleurs/postsControleur.php';
   \App\Controleurs\PostsControleur\indexAction($connexion);
 endif;
