<?php
/*
** to add the style sheet correctly with wp method
** wp_enqueue_style($handle, $src = '', array $deps = array(),|bool|null $ver = false, $media = 'all')
** https://developer.wordpress.org/reference/functions/wp_enqueue_style/
** to get the template directory
** get_template_directory_uri();
*/

function elzero_style() {
   wp_enqueue_style('my-style' , get_template_directory_uri() . '/assets/css/style.min.css','','1.0.0');
}
