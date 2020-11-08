<?php
/*
  ./app/vues/categories/addForm.php
 */
?>

<h1><?php echo TITRE_CATEGORIES_ADDFORM; ?></h1>
<div>
  <a href="categories">Retour vers la liste des catégories</a>
</div>

<form action="categories/add/insert" method="post">
  <div>
    <label for="name">Titre</label>
    <input type="text" name="name" id="name">
  </div>
  <div><input type="submit"/></div>
</form>
