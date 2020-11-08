<?php
/*
  ./app/vues/categories/index.php
  Variables disponibles:
    - $categories: ARRAY (ARRAY(id, name))
 */
 ?>

<!-- LISTE DES CATEGORIES -->

    <h4 class="widget_title">Category</h4>
    <ul class="list cat-list">

      <?php foreach ($categories as $categorie): ?>
        <li>
            <a href="categories/<?php echo $categorie['id']; ?>/<?php echo Noyau\Fonctions\slugify($categorie['name']); ?>" class="d-flex">
                <p><?php echo $categorie['name']; ?></p>
                <p>(37)</p>
            </a>
        </li>
      <?php endforeach; ?>

    </ul>
