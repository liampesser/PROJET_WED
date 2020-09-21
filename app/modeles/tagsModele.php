<?php
/*
  .app/modeles/postsModele.php
*/

namespace App\Modeles\TagsModele;

/**
 * [findAllByPostId description]
 * @param  PDO   $connexion [description]
 * @param  int   $postId    [description]
 * @return array            [description]
 */
  $sql = "SELECT *
          FROM tags t
          JOIN posts_has_tags pht ON t.id = pht.tag_id
          WHERE pht.post_id = :postId
          ORDER BY t.name ASC;";
  $rs = $connexion->prepare($sql);
<<<<<<< HEAD
  $rs->bindValue(':postId', $postId, \PDO::PARAM_INT);
=======
  $rs-> bindValue(':postId', $postId, \PDO::PARAM_INT);
>>>>>>> main
  $rs->execute();
  return $rs->fetchAll(\PDO::FETCH_ASSOC);
}
