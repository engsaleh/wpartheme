<!DOCTYPE html>

<html <?php language_attributes(); ?>>

<head class='wparhead'>

    <title> 
     <?php wp_title('&laquo;', true, 'right'); ?>
     <?php bloginfo('name'); ?> 
    </title>

    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">

    <?php wp_head(); ?>

</head>
  
<body <?php body_class(); ?>>
<nav class="navbar navbar-expand-md navbar-dark fixed-top bg-dark">
  <a class="navbar-brand" href="#">
    <!-- Bootstrap 5 Nav Walker Main Menu -->

    <?php bloginfo('name'); ?>
  </a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <?php
    wp_nav_menu(array(
      'theme_location' => 'main-menu',
      'container' => false,
      'menu_class' => '',
      'fallback_cb' => '__return_false',
      'items_wrap' => '<ul id="bootscore-navbar" class="navbar-nav ms-auto %2$s">%3$s</ul>',
      'depth' => 2,
      'walker' => new bootstrap_5_wp_nav_menu_walker()
  ));
  ?>
</nav>
<!-- Bootstrap 5 Nav Walker Main Menu End -->




