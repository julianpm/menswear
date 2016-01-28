<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
	<?php // Load Meta ?>
  <meta charset="<?php bloginfo( 'charset' ); ?>" />
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title><?php  wp_title('|', true, 'right'); ?></title>
  <link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>" />

  <?php // Load our CSS ?>
  <link rel="stylesheet" type="text/css" href="<?php bloginfo( 'stylesheet_url' ); ?>" />
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">
  <link href='https://fonts.googleapis.com/css?family=Droid+Sans|Poiret+One|Quicksand' rel='stylesheet' type='text/css'>

  <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>

<header>
    
  <section>
    <nav class="siteNav flex container">
        
      <ul class="mainMenu flex">
        <?php wp_nav_menu( array( 'container' => false, 'theme_location' => 'primary', 'items_wrap'=> '%3$s' ) ); ?>
      </ul> <!-- END OF MAINMENU -->
      
      <ul class="secondaryMenu flex">
        <?php wp_nav_menu( array( 'container' => false, 'theme_location' => 'secondary', 'items_wrap'=> '%3$s') ); ?>
        <a href="#"><i class="fa fa-search"></i></a>
        <?php get_template_part( 'searchform'); ?>
        <a href="#"><i class="fa fa-shopping-bag"></i></a>
      </ul> <!-- END OF SECONDARY MENU -->
      
    </nav> <!-- END OF SITEMENU -->
  </section>
  
</header><!--/.header-->

