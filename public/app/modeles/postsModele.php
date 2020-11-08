<?php
/*
  .app/modeles/postsModele.php
*/

namespace App\Modeles\PostsModele;

/**
 * [findAll description]
 * @param  PDO    $connexion [description]
 * @param  array  $params    [description]
 * @return [type]            [description]
 */
function findAll (\PDO $connexion, array $params = []) {
  $params_default = [
    'orderBy'   => 'id',
    'orderSens' => 'ASC',
    'limit'     => null
  ];
  $params = array_merge($params_default, $params);

  $orderBy   = htmlentities($params['orderBy']);
  $orderSens = htmlentities($params['orderSens']);

  $sql = "SELECT *
          FROM posts
          ORDER BY $orderBy $orderSens";

    $sql .= ($params['limit'] !== null)?" LIMIT :limit;":';';

  $rs = $connexion->prepare($sql);
  if($params['limit'] !== null):
    $rs->bindValue(':limit', $params['limit'], \PDO::PARAM_INT);
  endif;
  $rs->execute();
  return $rs->fetchAll(\PDO::FETCH_ASSOC);
}

// ---------------------------------------------------------------------------------

/**
 * [findOneById description]
 * @param  PDO   $connexion [description]
 * @param  int   $id        [description]
 * @return array            [description]
 */
function findOneById (\PDO $connexion, int $id) :array {
  $sql = "SELECT *
          FROM posts
          JOIN authors ON author_id = authors.id
          WHERE posts.id = :id;";
  $rs = $connexion->prepare($sql);
  $rs->bindValue(':id', $id, \PDO::PARAM_INT);
  $rs->execute();
  return $rs->fetch(\PDO::FETCH_ASSOC);
}


function findAllByCategorie(\PDO $connexion, int $id): array {
  $sql = "SELECT *
          FROM posts p
          JOIN categories c ON p.categorie_id = c.id
          WHERE p.categorie_id = :p.categorie_id
          ORDER BY created_at DESC;";
  $rs = $connexion->prepare($sql);
  $rs->bindValue(':p.categorie_id', $id, \PDO::PARAM_INT);
  $rs->execute();
  return $rs->fetchAll(\PDO::FETCH_ASSOC);
}
