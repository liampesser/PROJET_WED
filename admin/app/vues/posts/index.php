<?php
/*
  ./app/vues/posts/index.php
  Variables disponibles:
    - $posts ARRAY(ARRAY(id, name, created_at))
 */
?>
<div class="jumbotron">
  <h1><?php echo TITRE_POSTS_INDEX; ?></h1>
  <p>This is a template showcasing the optional theme stylesheet included in Bootstrap. Use it as a starting point to create something more unique by building on or modifying it.</p>
</div>
<div class="">
    <a href="posts/add/form">Add a new post</a>
</div>
<table class="table table-striped">
  <thead>
    <tr>
      <th>#</th>
      <th>Title</th>
      <th>Slug</th>
      <th>Content</th>
      <th>Created_at</th>
      <th>image</th>
      <th>Author</th>
    </tr>
  </thead>
  <tbody>
    <?php foreach ($posts as $post): ?>
      <tr>
        <td><?php echo $post['postID']; ?></td>
        <td><?php echo $post['title']; ?></td>
        <td><?php echo \Noyau\Fonctions\slugify($post['title']); ?></td>
        <td><?php echo \Noyau\Fonctions\tronquer($post['content'], 50); ?></td>
        <td><?php echo \Noyau\Fonctions\formater_date($post['created_at'], 'd-m-Y'); ?></td>
        <td><img src="<?php echo $post['image']; ?>" alt="" width="50"</td>
        <td><?php echo $post['firstname']," ", $post['lastname']; ?></td>

        <td>
          <a href="posts/edit/form/<?php echo $post['id']; ?>" class="edit">Edit</a> |
          <a href="posts/<?php echo $post['postID']; ?>delete/<?php echo $post['id']; ?>" class="delete">Delete</a>
        </td>
      </tr>
    <?php endforeach; ?>
  </tbody>
</table
