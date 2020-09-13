<?php
/*
  ./app/vues/post/index.php
  Variables disponibles:
    - $posts: ARRAY (ARRAY(id, title, created_at, content, image, author_id, categorie_id))
 */
 ?>

 <div class="blog_left_sidebar">

   <?php
     foreach ($posts as $post):
     $created_at = strtotime($post['created_at']);
   ?>
     <article class="blog_item">
         <div class="blog_item_img">
             <img class="card-img rounded-0" src="../../www/assets/img/blog/<?php echo $post['image']; ?>;" alt="">
             <a href="#" class="blog_item_date">
                 <h3><?php echo date('d', $created_at); ?></h3>
                 <p></p>
             </a>
         </div>

         <div class="blog_details">
             <a class="d-inline-block" href="single-blog.html">
                 <h2><?php echo $post['title']; ?></h2>
             </a>
             <p><?php echo $post['content']; ?></p>
             <ul class="blog-info-link">
                 <li><a href="#"><i class="fa fa-user"></i> Travel, Lifestyle</a></li>
             </ul>
         </div>
     </article>
    <?php endforeach; ?>

     <nav class="blog-pagination justify-content-center d-flex">
       <ul class="pagination">
             <li class="page-item">
                 <a href="#" class="page-link" style="width: auto; padding: 0 1em;">More posts</a>
             </li>
       </ul>
     </nav>

 </div>
