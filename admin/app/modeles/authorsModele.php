<?php
/*
  ./app/modeles/authorsModele.php
 */
namespace App\Modeles\AuthorsModele;

/**
 * [findAll description]
 * @param  PDO   $connexion [description]
 * @return array            [description]
 */
 function findAll(\PDO $connexion) :array {
   $sql = "SELECT *
           FROM authors
           ORDER BY firstname ASC;";
   $rs = $connexion->query($sql);
   return $rs->fetchAll(\PDO::FETCH_ASSOC);
 }
