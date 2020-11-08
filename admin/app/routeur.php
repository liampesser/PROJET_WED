<?php
/*
  ./app/routeur.php
 */

// ROUTE DE CATEGORIES
  if (isset($_GET['categories'])) :
    include_once '../app/routeurs/categoriesRouteur.php';

// ROUTE DES USERS
  elseif (isset($_GET['user'])):
    include_once '../app/routeurs/usersRouteur.php';

// ROUTE DES POSTS
  elseif (isset($_GET['posts'])):
    include_once '../app/routeurs/postsRouteur.php';
 endif;
