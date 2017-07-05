<!DOCTYPE html>
<html>
   <!-- add languages attributes automatic from wordpress -->
   <head <?php language_attributes(); ?>>
      <!-- add meta chraset automatic from wordpress -->
      <meta charset="<?php bloginfo('charset'); ?>">
      <!-- add site name in feature applications will be the_title(); with if conditions -->
      <title><?php bloginfo('name'); ?></title>
      <!-- add allow pingback links for your site -->
      <link rel="pingback" href="<?php bloginfo('pingback_url') ?>">
      <!-- make wordpress add its functions -->
      <?php wp_head(); ?>
   </head>
