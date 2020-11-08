<?php
/*
  ./app/modeles/categoriesModele.php
 */
namespace App\Modeles\PostsModele;


/**
 * [findAll description]
 * @param  PDO   $connexion [description]
 * @return array            [description]
 */
function findAll(\PDO $connexion) :array {
  $sql = "SELECT *, posts.id as postID
          FROM posts
          JOIN authors ON posts.author_id = authors.id
          ORDER BY posts.created_at DESC
          LIMIT 5;";

  $rs = $connexion->query($sql);
  return $rs->fetchAll(\PDO::FETCH_ASSOC);
}

function insertOne(\PDO $connexion, array $data) :int{
  $sql = "INSERT INTO posts
          SET title      = :title,
              content    = :content,
              author  = :author,
              created_at = NOW;";
  $rs = $connexion->prepare($sql);
  $rs->bindValue(':title', $data['title'], \PDO::PARAM_STR);
  $rs->bindValue(':content', $data['content'], \PDO::PARAM_STR);
  $rs->bindValue(':author', $data['author'], \PDO::PARAM_INT);
  $rs->execute();
  return $connexion->lastInsertId();
}

//function insertCategorieById(\PDO $connexion, array $data) :bool {
  //$sql = "INSERT INTO posts_has_categories
          //SET post = :post,
              //categorie = :categorie;";
  //$rs = $connexion->prepare($sql);
  //$rs->bindValue(':post', $data['postID'], \PDO::PARAM_INT);
  //$rs->bindValue(':categorie', $data['categorieID'], \PDO::PARAM_INT);
  //return $rs->execute();
//}

//function deletePostsHasCategoriesByPostId (\PDO $connexion, int $id) :bool {
//$sql = "DELETE FROM posts_has_categories
        //WHERE post = :post;";
//$rs = $connexion->prepare($sql);
//$rs->bindValue(':post', $postID, \PDO::PARAM_INT);
//return $rs->execute();}

function deleteOneById(\PDO $connexion, int $id) :bool {
  $sql = "DELETE FROM posts
          WHERE id = :id;";
  $rs = $connexion->prepare($sql);
  $rs->bindValue(':post', $id, \PDO::PARAM_INT);
  return $rs->execute();
}
