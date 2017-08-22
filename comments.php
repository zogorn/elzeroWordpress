<?php

if (comments_open()) {
   $comments_props = array(
      'max_depth'   => 3,
      'type'        => 'comment',
      'avatar_size' => 64
   );
   echo "<ul class = 'comments-list list-unstyled'>";
      wp_list_comments($comments_props);
   echo "</ul>";
} else {
   echo "Comments Are Disabled";
}
