<?php

if (comments_open()) {
   // comments properties
   $comments_props = array(
      'max_depth'   => 3,
      'type'        => 'comment',
      'avatar_size' => 64
   );

   // comments number
   echo "<h3 class='comments-number text-capitalize'>";
      comments_number('0 comment', '1 comment', '% comments');
   echo "</h3>";

   // comments list
   echo "<ul class = 'comments-list list-unstyled'>";
      wp_list_comments($comments_props);
   echo "</ul>";
} else {
   echo "Comments Are Disabled";
}
