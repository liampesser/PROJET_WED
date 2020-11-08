<?php
/*
  ./app/controleurs/postsControleur.php
*/

namespace App\Controleurs\PostsControleur;
use \App\Modeles\PostsModele;

// INDEXACTION
/**
 * [indexAction description]
 * @param  PDO    $connexion [description]
 * @return [type]            [description]
 */
function indexAction(\PDO $connexion, array $params = []) {
  // Je mets dans $posts la liste des 10 derniers posts que je demande au modèle
    include_once '../app/modeles/postsModele.php';
    $posts = PostsModele\findAll($connexion, $params);

  // Je charge la vue posts/index dans $content
    GLOBAL $title, $content;
    $title = TITRE_POSTS_INDEX;
    ob_start();
      include '../app/vues/posts/index.php';
    $content = ob_get_clean();
}

function showAction(\PDO $connexion, int $id) {
  // Je mets dans $post les infos du post que je demande au modèle
    include_once '../app/modeles/postsModele.php';
    $post = PostsModele\findOneById($connexion, $id);

  

  // Je charge la vue show dans $content
    GLOBAL $content, $title;
    $title = $post['title'];
    ob_start();
      include '../app/vues/posts/show.php';
    $content = ob_get_clean();
}
