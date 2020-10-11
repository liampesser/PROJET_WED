<?php
/*
  ./app/vues/categories/addForm.php
 */
?>

<h1>Ajout d'une catégorie</h1>
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
