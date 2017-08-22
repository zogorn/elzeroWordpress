<?php get_header(); ?>

<div class="container">
   <div class="row">
      <?php if (have_posts()) :// check for posts
         while (have_posts()) :// loop to get all posts
            the_post(); ?>
            <div class="col-xs-12">
               <div class="blog-post single-post">
                  <div class="heading text-capitalize">
                     <h3 class="h1 text-capitalize">
                        <!-- link for the post title -->
                        <a href="<?php the_permalink() ?>">
                           <?php the_title(); ?>
                        </a>
                     </h3>
                     <span><i class="fa fa-user fa-fw text-muted" aria-hidden="true"></i>
                        <?php the_author_posts_link() ?>
                     </span>
                     <span><i class="fa fa-calendar fa-fw text-muted" aria-hidden="true"></i>
                        <?php the_time('F, j, M') ?>
                     </span>

                     <span><i class="fa fa-comments fa-fw text-muted" aria-hidden="true"></i>
                        <?php comments_popup_link('0 comments', '1 comment', '% comments', 'comments desabled') ?>
                     </span>
                     <span><i class="fa fa-pencil-square-o fa-fw text-muted" aria-hidden="true"></i>
                        <?php edit_post_link('Edit Post') ?>
                     </span>
                  </div><!-- heading -->
                  <div class="image">
                     <?php the_post_thumbnail('', ['class' => 'image-responsive img-thumbnail']) ?>
                  </div><!-- image -->
                  <div class="content text-justify">
                     <p class="lead text-muted">
                        <?php the_content() ?>
                     </p>
                  </div><!-- content -->
                  <div class="tags text-uppercase">
                     <i class="fa fa-tags fa-fw text-muted" aria-hidden="true"></i>
                     <span class="category"><?php the_category(' , ') ?></span>
                     <span class="tag">
                        <?php
                           if (has_tag()) {
                              the_tags();
                           } else {
                              echo "tags: there is no tags";
                           }
                        ?>
                     </span>
                  </div><!-- tags -->
               </div><!-- blog-post -->
            </div><!-- col-md-6 -->
   <?php endwhile;
   endif; ?>


<?php
echo "<div class='posts-pagination'>";
if (get_previous_post_link()) {
   previous_post_link('%link', '<i class="fa fa-chevron-left fa-fw" aria-hidden="true"></i> Previous Article');
} else {
   echo '<span class="prev-span"><i class="fa fa-chevron-left fa-fw" aria-hidden="true"></i> Previous Article None</span>';
}
if (get_next_post_link()) {
   next_post_link('%link', 'Next Article <i class="fa fa-chevron-right fa-fw" aria-hidden="true"></i>');
} else {
   echo '<span class="next-span">Next Article None <i class="fa fa-chevron-right fa-fw" aria-hidden="true"></i></span>';
}
echo "</div>";
 ?>

   </div><!-- row -->
   
   <div class="post-comments">
      <?php comments_template(); ?>
   </div><!-- post-comments -->


</div><!-- container -->








<?php get_footer(); ?>
