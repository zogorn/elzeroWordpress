<?php
/*
******
68 - Separate Pages Css Selectors
   - make the css classes each page has its own style and parent class name
******

******
69 - Post Pagination
   == %link => the next post link
   == %title => the next post title
   - next_post_link('%link', '%title')
******

******
70 - Post Comments
   == show comments
   - comments_template()
   == make a comments.php file (template)
   == check if the comments are open or not
   - comments_open()
   == list the comments
   - wp_list_comments()
******

******
72 - Post Comments
   == show comments Number
   - comments_number('0 comment message', '1 comment message', '% comments message')
******

******
73 - Post Comments Style
******

******
74 - Post Comments Form
   == enable add comment form
   - comment_form()
******

******
77 - post Author
   - get_the_author_meta()
   - get_the_author()
   - the_author_meta()
   ---------------------
   == Get the user information from usermeta database table
      1- the_author_meta('first_name'); // get the author first name from database usermeta table
      2- the_author_meta('last_name'); // get the author last name from database usermeta table
      3- the_author_meta('nickname'); // get the author nickname from database usermeta table
      4- the_author_meta('description'); // get the author description information from database usermeta table
   ----------------------
   == Check if any meta there
      - get_the_author_meta('table-name'); // check if the table-name exist
******

******
78 - Author Avatar
   - get_avatar($usrID or mail); => HINT: you can bring it using get_the_author_meta('ID');
******

******
79 - Author Avatar Style
******

******
80 - Author Posts and Link
   - count_user_posts(userID);
   - the_author_posts_link();
******

*/
