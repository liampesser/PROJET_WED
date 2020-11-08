<?php
/*
  ./app/controleurs/postsControleur.php
 */
namespace App\Controleurs\PostsControleur;
use \App\Modeles\PostsModele;

function indexAction(\PDO $connexion) {
  // Je mets la liste des categories dans $categories
  include_once '../app/modeles/postsModele.php';
  $posts = PostsModele\findAll($connexion);

  // Je charge la vue index dans $content
  GLOBAL $content, $title;
  $title = TITRE_POSTS_INDEX;
  ob_start();
    include '../app/vues/posts/index.php';
  $content = ob_get_clean();
}

function addFormAction(\PDO $connexion) {
  // Je vais chercher les auteurs
  include_once '../app/modeles/authorsModele.php';
  $authors = \App\Modeles\AuthorsModele\findAll($connexion);

  // Je vais chercher les catégories
  include_once '../app/modeles/categoriesModele.php';
  $categories = \App\Modeles\CategoriesModele\findAll($connexion);
  // Je charge la vue addForm dans $content
  GLOBAL $content, $title;
  $title = TITRE_POSTS_ADDFORM;
  ob_start();
    include '../app/vues/posts/addForm.php';
    $content = ob_get_clean();
}

function addInsertAction(\PDO $connexion, array $data) {
  // Je demande au modèle d'ajouter le post
  include_once '../app/modeles/postsModele.php';
  $id = PostsModele\insertOne($connexion, $data);

  // Je redirige vers la liste des posts
  header('location:' . BASE_URL_ADMIN . 'posts');
}

function deleteAction(\PDO $connexion, int $id) {
  // Je demande au modèle de supprimer les liaisons N-M correspondantes
  //include_once '../app/modeles/postsModele.php';
  //$return1 = PostsModele\deletePostsHasCategoriesByPostId($connexion, $id);

  // Je demande au modèle de supprimer le post
  $return2 = PostsModele\deleteOneById($connexion, $id);

  // Je redirige vers la liste des posts
  header('location:' . BASE_URL_ADMIN . 'posts');
}
