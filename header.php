<!DOCTYPE html>
<!-- add languages attributes automatic from wordpress -->
<html <?php language_attributes(); ?>>
   <head>
      <!-- add meta chraset automatic from wordpress -->
      <meta charset="<?php bloginfo('charset'); ?>">
      <!-- add site name in feature applications will be the_title(); with if conditions -->
      <title>
         <?php wp_title('|', true , 'right') ?>
         <?php bloginfo('name'); ?>
      </title>
      <!-- add allow pingback links for your site -->
      <link rel="pingback" href="<?php bloginfo('pingback_url') ?>">
      <!-- make wordpress add its functions -->
      <?php wp_head(); ?>
   </head>
   <body>
      <nav class="navbar navbar-toggleable-md navbar-inverse bg-inverse">
         <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#main-navbar" aria-controls="main-navbar" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
         </button>
         <a class="navbar-brand text-capitalize" href="<?php bloginfo('url') ?>"><?php bloginfo('name') ?></a>
         <div class="collapse navbar-collapse" id="main-navbar">
            <?php bootstrap_nav_menu(); ?>
            <!-- <ul class="navbar-nav ml-auto">
               <li class="nav-item active">
                 <a class="nav-link" href="#">Home</a>
               </li>
            </ul> -->
         </div>
      </nav>
