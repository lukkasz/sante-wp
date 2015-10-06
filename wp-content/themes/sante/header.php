<?php
/**
 * The header for our theme.
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Sante
 */
 global $address, $phone, $email;

 $address = get_field('adresa', 8);
 $phone = get_field('telefon', 8);
 $email = get_field('email', 8);
?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="profile" href="http://gmpg.org/xfn/11">
<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">

<!-- Vendor CSS -->
<link rel="stylesheet" href="<?php bloginfo('stylesheet_directory'); ?>/assets/styles/vendor.css">

<?php wp_head(); ?>


<!-- Modernizr -->
<script src="<?php bloginfo('stylesheet_directory'); ?>/assets/scripts/vendor/modernizr.js"></script>

</head>

<body <?php body_class(); ?>>
<div id="page" class="hfeed site">
	<a class="skip-link screen-reader-text" href="#content"><?php esc_html_e( 'Skip to content', 'sante' ); ?></a>
	<!--[if lt IE 9]>
      <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
  <![endif]-->
  <header>
      <div class="container">
          <div class="topbar">
              <span class="topbar__item"><i class="glyphicon glyphicon-earphone"></i><?php echo $phone; ?></span>
              <span class="topbar__item hidden-xs"><i class="glyphicon glyphicon-envelope"></i><?php echo $email?></span>
              <span class="topbar__item"><i class="glyphicon glyphicon-home"></i><?php echo $address; ?></span>
          </div>
          <div class="navbar"> <!-- edit navbar default -->
               <!-- Brand and toggle get grouped for better mobile display -->
              <div class="navbar-header">
                  <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#main-navbar-collapse" aria-expanded="false">
                      <span class="sr-only">Toggle navigation</span>
                      <span class="icon-bar"></span>
                      <span class="icon-bar"></span>
                      <span class="icon-bar"></span>
                  </button>
                  <a href="index.html"><img class="brand__logo" src="<?php bloginfo('stylesheet_directory'); ?>/assets/images/logo.png" alt=""><h1 class="brand__name">Sante <span>zdravlje, njega i ljepota</span></h1></a>
              </div><!-- end navbar-header -->
							
							<?php 
								wp_nav_menu( array(

									'theme_location' 		=> 'primary',
									'container'					=> 'nav',
                  'depth'             => 0,
									'container_class'		=> 'collapse navbar-collapse navbar-right',
									'container_id'			=> 'main-navbar-collapse',
									'menu_class'				=> 'nav navbar-nav',
                  'walker'            => new BootstrapNavMenuWalker()

								) );
							?>

              <!-- Collect the nav links, forms, and other content for toggling -->
              
          </div><!-- end .navbar -->
      </div><!-- end .container -->
  </header>
