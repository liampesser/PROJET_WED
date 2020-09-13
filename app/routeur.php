<?php
/*
  ./app/routeur.php
  ROUTEUR PRINCIPAL
  HYDRATE LES ZONES DYNAMIQUES
 */

 // ROUTE PAR DEFAUT
 // PATTERN: /
 // CTRL: postsControleur
 // ACTION: index

 include_once '../app/controleurs/postsControleur.php';
 \App\Controleurs\PostsControleur\indexAction($connexion);
