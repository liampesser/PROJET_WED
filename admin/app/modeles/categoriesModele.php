<?php
/*
  ./app/modeles/categoriesModele.php
 */
namespace App\Modeles\CategoriesModele;

function findOneById(\PDO $connexion, int $id) : array {
  $sql = "SELECT *
          FROM categories
          WHERE id = :id;";
  $rs = $connexion->prepare($sql);
  $rs->bindValue(':id', $id, \PDO::PARAM_INT);
  $rs->execute();
  return $rs->fetch(\PDO::FETCH_ASSOC);
}

function findAll(\PDO $connexion) {
  $sql = "SELECT *
          FROM categories
          ORDER BY name ASC;";
  $rs = $connexion->query($sql);
  return $rs->fetchAll(\PDO::FETCH_ASSOC);
}

function insert(\PDO $connexion, array $data = null) {
  $sql = "INSERT INTO categories
          SET name = :name;";
  $rs = $connexion->prepare($sql);
  $rs->bindValue(':name', $data['name'], \PDO::PARAM_STR);
  $rs->execute();
  return $connexion->lastInsertId();
}

function delete(\PDO $connexion, int $id) {
  $sql = "DELETE FROM categories
          WHERE id = :id;";
  $rs = $connexion->prepare($sql);
  $rs->bindValue(':id', $id, \PDO::PARAM_INT);
  return intval($rs->execute());
}

function update(\PDO $connexion, array $data = null) {
  $sql = "UPDATE categories
          SET name = :name
          WHERE id = :id;";
  $rs = $connexion->prepare($sql);
  $rs->bindValue(':name', $data['name'], \PDO::PARAM_STR);
  $rs->bindValue(':id', $data['id'], \PDO::PARAM_INT);
  $rs->execute();
  return intval($rs->execute());
}
