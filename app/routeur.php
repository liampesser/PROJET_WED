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
<<<<<<< HEAD
 if (isset($_GET['postId'])):
   include_once '../app/controleurs/postsControleur.php';
   \App\Controleurs\PostsControleur\showAction($connexion, $_GET['postId']);
=======
 if(isset($_GET['postID'])):
   include_once '../app/controleurs/postsControleur.php';
   \App\Controleurs\PostsControleur\showAction($_GET['postID']);
>>>>>>> main
 // ROUTE PAR DEFAUT
 // PATTERN: /
 // CTRL: postsControleur
 // ACTION: index
 else:
   include_once '../app/controleurs/postsControleur.php';
   \App\Controleurs\PostsControleur\indexAction($connexion);
 endif;
