<?php
/*
  ./app/vues/posts/show.php
  Variables disponibles:
    - $post: ARRAY(id, title, created_at, content, image, author_id, categorie_id)
 */
 ?>
 <div class="single-post">
    <div class="feature-img">
       <img class="img-fluid" src='../www/assets/img/blog/<?php echo $post['image']; ?>' alt="">
    </div>
    <div class="blog_details">
       <h2><?php echo $post['title']; ?></h2>
       <ul class="blog-info-link mt-3 mb-4">
          <li><a href="#"><i class="fa fa-user"></i> Travel, Lifestyle</a></li>
       </ul>
       <div class="">
         <?php echo $post['content']; ?>
       </div>
    </div>
  <!-- AUTHOR DETAILS -->
    <div class="blog-author">
     <div class="media align-items-center">
        <img src='assets/img/blog/<?php echo $post['avatar']; ?>' alt="">
        <div class="media-body">
           <a href="#">
              <h4><?php echo $post['firstname']; ?> <?php echo $post['lastname']; ?></h4>
           </a>
           <p><?php echo $post['biography']; ?></p>
        </div>
     </div>
   </div>
 </div>
