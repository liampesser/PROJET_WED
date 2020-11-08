<?php
/*
  ./app/vues/posts/index.php
  Variables disponibles:
    - $authors: ARRAY(ARRAY(id, firstname, lastname))
    - $categories: ARRAY(ARRAY(id,name,created_at))
 */
?>
<h1><?php echo TITRE_POSTS_ADDFORM; ?></h1>
<div>
  <a href="posts">Retour vers la liste des posts</a>
</div>

<form action="posts/add/insert" method="post">
  <div>
    <label for="title">Titre</label>
    <input type="text" name="title" id="title">
  </div>
  <div>
    <label for="content">Content</label>
    <input type="text" name="content" id="content">
  </div>
  <div>
    <label for="image">Image</label>
    <input type="file" name="image" id="image">
  </div>

<!-- MENU DEROULANT DYNAMIQUE -->
<fieldset>
  <div>
    <label for="author">Author</label>
    <select name="author" id="author">
      <?php foreach ($authors as $author): ?>
        <option value="<?php echo $author['id'] ?>">
          <?php echo $author['firstname'] ?>
          <?php echo $author['lastname'] ?>
        </option>
      <?php endforeach; ?>
    </select>
  </div>
  <!-- FIN MENU DEROULANT DYNAMIQUE -->
</fieldset>

<fieldset>
  <legend>Catégories</legend>
  <!-- LISTE DYNAMIQUE DE CHECKBOXES -->
  <div>
    <?php foreach ($categories as $categorie): ?>
      <input type="checkbox" name="<?php echo $categorie['name'] ?>" id="<?php echo $categorie['name'] ?>">
      <label for="<?php echo $categorie['name'] ?>"><?php echo $categorie['name'] ?></label>
    <?php endforeach; ?>
  </div>
  <!-- FIN LISTE DYNAMIQUE DE CHECKBOXES -->
</fieldset>

  <div><input type="submit"/></div>
</form>
