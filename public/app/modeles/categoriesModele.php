<?php
/*
  .app/modeles/categoriesModele.php
*/

namespace App\Modeles\CategoriesModele;

/**
 * [findAll description]
 * @param  PDO   $connexion [description]
 * @return array            [description]
 */
function findAll (\PDO $connexion) :array {
  $sql = "SELECT *
          FROM categories
          ORDER BY name ASC;";
  $rs = $connexion->query($sql);
  return $rs->fetchAll(\PDO::FETCH_ASSOC);
}

function findOneById(\PDO $connexion, int $id) : array {
  $sql = "SELECT *
          FROM categories
          WHERE id = :id;";
  $rs = $connexion->prepare($sql);
  $rs->bindValue(':id', $id, \PDO::PARAM_INT);
  $rs->execute();
  return $rs->fetch(\PDO::FETCH_ASSOC);
}
