<?php
/*
** to add the style sheet correctly with wp method
** wp_enqueue_style($handle, $src = '', array $deps = array(),|bool|null $ver = false, $media = 'all')
** https://developer.wordpress.org/reference/functions/wp_enqueue_style/
** to get the template directory
** get_template_directory_uri();
*/

// define styles
function elzero_style() {
   wp_enqueue_style('font-awesome-style' , get_template_directory_uri() . '/assets/css/font-awesome.min.css', array(),'4.7.0');
   wp_enqueue_style('my-style' , get_template_directory_uri() . '/assets/css/style.min.css', array(),'1.0.0');
}

// define scripts
function elzero_scripts() {
   wp_enqueue_script('my-main-script', get_template_directory_uri() . 'assets/js/main.js', array(), '1.0.0', true);
}
