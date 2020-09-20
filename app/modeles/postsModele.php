<?php
/*
  .app/modeles/tagsModele.php
*/

namespace App\Modeles\PostsModele;

/**
 * [findAll description]
 * @param  PDO   $connexion [description]
 * @return array            [description]
 */
function findAll (\PDO $connexion) :array {
  $sql = "SELECT *
          FROM posts
          ORDER BY created_at DESC
          LIMIT 5;";
  $rs = $connexion->query($sql);
  return $rs->fetchAll(\PDO::FETCH_ASSOC);
}
