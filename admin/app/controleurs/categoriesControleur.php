<?php
/*
  ./app/controleurs/categoriesControleur.php
 */
namespace App\Controleurs\CategoriesControleur;
use \App\Modeles\CategoriesModele;

function indexAction(\PDO $connexion) {
  // Je mets la liste des categories dans $categories
  include_once '../app/modeles/categoriesModele.php';
  $categories = CategoriesModele\findAll($connexion);

  // Je charge la vue index dans $content
  GLOBAL $content, $title;
  $title = TITRE_CATEGORIES_INDEX;
  ob_start();
    include '../app/vues/categories/index.php';
  $content = ob_get_clean();
}

function addFormAction() {
  // Je charge la vue addForm dans $content
  GLOBAL $content, $title;
  $title = TITRE_CATEGORIES_ADDFORM;
  ob_start();
    include '../app/vues/categories/addForm.php';
  $content = ob_get_clean();
}

function addAction(\PDO $connexion, array $data = null) {
  // Je demande au modèle d'ajouter la catégorie
  include_once '../app/modeles/categoriesModele.php';
  $id = CategoriesModele\insert($connexion, $data);

  // Je redirige vers la liste des catégories
  header('location: ' . BASE_URL_ADMIN . 'categories');
}

function deleteAction(\PDO $connexion, int $id) {
  // Je demande au modèle de supprimer la catégorie
  include_once '../app/modeles/categoriesModele.php';
  $return = CategoriesModele\delete($connexion, $id);

  // Je redirige vers la liste des catégories
  header('location: ' . BASE_URL_ADMIN . 'categories');
}

function editFormAction(\PDO $connexion, int $id) {
  // Je demande au modèle de modifier la catégorie
  include_once '../app/modeles/categoriesModele.php';
  $categorie = CategoriesModele\findOneById($connexion, $id);

  // Je charge la vue editForm dans $content
  GLOBAL $content, $title;
  $title = TITRE_CATEGORIES_EDITFORM;
  ob_start();
    include '../app/vues/categories/editForm.php';
  $content = ob_get_clean();
}

function editAction(\PDO $connexion, array $data = null) {
  // Je demande au modèle de modifier la catégorie
  include_once '../app/modeles/categoriesModele.php';
  $return = CategoriesModele\update($connexion, $data);

  // Je redirige vers la liste des catégories
  header('location: ' . BASE_URL_ADMIN . 'categories');
}
