<?php
/*
** // To add the style sheet correctly with wp method
** wp_enqueue_style($handle, $src = '', array $deps = array(),|bool|null $ver = false, $media = 'all')
** https://developer.wordpress.org/reference/functions/wp_enqueue_style/
** // To add the script sheet correctly with wp method
** wp_enqueue_script($handle, $src = '', array $deps = array(),|bool|null $ver = false, $media = 'all')
** https://developer.wordpress.org/reference/functions/wp_enqueue_script/
** // To get the template directory
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


/*
** Add actions
** add_action();
** // Add styles and scripts to the front end pages
** wp_enqueue_scripts
** // Register styles and scripts and make it ready to call it back any where in the wordpress
** wp_register_scripts
*/

add_action('wp_enqueue_scripts', 'elzero_style');
add_action('wp_enqueue_scripts', 'elzero_scripts');
