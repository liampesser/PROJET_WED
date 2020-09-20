<?php
/*
  ./app/controleurs/tagsControleur.php
*/

namespace App\Controleurs\TagsControleur;
use \App\Modeles\TagsModele;

// INDEXACTION
/**
 * [indexByPostIdAction description]
 * @param  PDO    $connexion [description]
 * @param  int    $postId    [description]
 * @return [type]            [description]
 */
/*function indexByPostIdAction (\PDO $connexion, int $postId) {
  // Je mets dans $posts la liste des 10 derniers posts que je demande au modèle
  include_once '../app/modeles/tagsModele.php';
  $tags = TagsModele\findAllByPostId ($connexion, $postId);

  // Je charge la vue tags/indexByPostId directement (pas dans $content)
    include '../app/vues/tags/indexByPostId.php';
}
*/
