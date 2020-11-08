<?php
/*
  ./app/controleurs/CategoriesControleur.php
*/

namespace App\Controleurs\CategoriesControleur;
use \App\Modeles\CategoriesModele;

function indexAction(\PDO $connexion){
  // Je demande la liste des categories au modèle
  include_once '../app/modeles/categoriesModele.php';
  $categories = CategoriesModele\findAll($connexion);

  // Je charge directement la vue index
  include '../app/vues/categories/index.php';
}

function showAction(\PDO $connexion, int $id){
  // Je demande la catégorie au modèle
  include_once '../app/modeles/categoriesModele.php';
  $categorie = CategoriesModele\findOneById($connexion, $id);

  // Je demande les posts de la catégorie au modèle
  include_once '../app/modeles/postsModele.php';
  $posts = \App\Modeles\PostsModele\findAllByCategorie($connexion, $id);

  // Je charge la vue show dans $content
  GLOBAL $content, $title;
  $title = $categorie['name'];
  ob_start();
    include '../app/vues/categories/show.php';
  $content = ob_get_clean();
}
