<?php
/*
  ./app/vues/categories/index.php
  Variables disponibles:
    - $categorie: ARRAY(id, name)
    - $post: ARRAY (ARRAY(id, title, created_at, content, image, author_id, categorie_id))
 */
 ?>

 <h1>Posts de la catégorie <?php echo $categorie['name']; ?></h1>

 <!-- LISTE DES POSTS PAR CATEGORIE -->

  <?php include '../app/vues/posts/liste.php'; ?>
