<?php
/*
** // To add the style sheet correctly with wp method
** wp_enqueue_style($handle, $src = '', array $deps = array(),|bool|null $ver = false, $media = 'all')
** https://developer.wordpress.org/reference/functions/wp_enqueue_style/
** // To add the script sheet correctly with wp method
** wp_enqueue_script($handle, $src = '', array $deps = array(),|bool|null $ver = false, $media = 'all')
** https://developer.wordpress.org/reference/functions/wp_enqueue_script/
** // Register styles and scripts and make it ready to call it back any where in the wordpress
** wp_register_script
** // De-Register styles and scripts from the wordpress
** wp_deregister_script
** // To get the template directory
** get_template_directory_uri();
** // To get the wp-includes directory
** includes_url('your path');
*/

// define styles
function elzero_style() {
   wp_enqueue_style('font-awesome-style' , get_template_directory_uri() . '/assets/css/font-awesome.min.css', array(),'4.7.0');
   wp_enqueue_style('bootstrap-style' , get_template_directory_uri() . '/assets/css/bootstrap.min.css', array(),'4.0.0-alpha.6');
   wp_enqueue_style('my-style' , get_template_directory_uri() . '/assets/css/style.min.css', array(),'1.0.0');
}

// define scripts
function elzero_scripts() {
   // Remove registeration of old jquery
   wp_deregister_script('jquery');
   // register jquery in the footer of the front-end page
   wp_register_script('jquery', includes_url('/js/jquery/jquery.js'), array(), '1.12.4', 'true');
   // add the jquery to the front-end pages
   wp_enqueue_script('jquery');
   // add the theme js file to the front-end pages
   wp_enqueue_script('tether-script', get_template_directory_uri() . '/assets/js/tether.min.js', array(), '1.3.3', true);
   wp_enqueue_script('bootstrap-script', get_template_directory_uri() . '/assets/js/bootstrap.min.js', array(), '4.0.0-alpha.6', true);
   wp_enqueue_script('my-main-script', get_template_directory_uri() . '/assets/js/main.js', array(), '1.0.0', true);
   // add html5shiv to the header
   wp_enqueue_script('html5shiv', get_template_directory_uri() . '/assets/js/html5shiv.js', array(), '3.7.3', false);
   // make if condition to just import it if the browser was less than IE 9
   wp_script_add_data('html5shiv', 'conditional', 'lt IE 9');
   wp_enqueue_script('respond', get_template_directory_uri() . '/assets/js/respond.js', array(), '1.4.2', false);
   wp_script_add_data('respond', 'conditional', 'lt IE 9');
}


/*
** add function menu
** register_nav_menu('location', __('description'));
** register_nav_menus(array(
   'location-1' => 'descriptions-1',
   'location-2' => 'description-2'
));
*/

function elzero_add_menu() {
   register_nav_menu('manin-menu', __('Main Navigation Menu'));
   // register_nav_menus(array(
   //    'main-menu' => 'main navigation bar menu'
   // ));
}

function bootstrap_nav_menu() {
   wp_nav_menu();
}


/*
** Add actions
** add_action();
** // Add styles and scripts to the front end pages
** wp_enqueue_scripts
*/

add_action('wp_enqueue_scripts', 'elzero_style');
add_action('wp_enqueue_scripts', 'elzero_scripts');
add_action('init', 'elzero_add_menu');
