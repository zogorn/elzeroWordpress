<?php get_header(); ?>
<div class="author">
   <div class="container">
      <h1 class="author-title h1 text-center text-capitalize"><?php the_author_meta('nickname'); ?> Page</h1>
      <div class="row">
         <div class="col-md-2">
            <?php
               $avatar_args = array(
                  'class' => 'img-responsive img-thumbnail'
               );
            ?>
            <?php echo get_avatar(get_the_author_meta('ID'), 200, '', 'Author Profile', $avatar_args); ?>
         </div><!-- col-md-3 -->
         <div class="col-md-10">
            <h4 class="author-name text-capitalize"><?php
               the_author_meta('first_name'); echo " ";
               the_author_meta('last_name'); echo " - ";
               the_author_meta('nickname');
            ?></h4>
            <p class="author-description text-muted text-capitalize lead"><?php
               if (get_the_author_meta('description')) {
                  the_author_meta('description');
               } else {
                  echo "Some Times Silence is Golden";
               }
            ?></p>
         </div><!-- col-md-9 -->
      </div><!-- row -->
   </div><!-- container -->
</div><!-- author -->
<?php get_footer(); ?>
