<?php
/*
  ./app/vues/categories/editForm.php
  Variables disponibles
    - $categorie ARRAY(id, name)
 */
?>

<h1><?php echo TITRE_CATEGORIES_EDITFORM; ?></h1>
<div class="">
  <a href="categories">Retour vers la liste des catégories</a>
</div>

<form action="categories/edit/<?php echo $categorie['id']; ?>" method="post" class="edit">
  <div>
    <label for="name">Titre</label>
    <input type="text" name="name" value="<?php echo $categorie['name']; ?>">
  </div>
  <div>
    <input type="submit" />
  </div>
</form>
