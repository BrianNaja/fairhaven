<?php
/**
 * The Header for our theme.
 *
 * Displays all of the <head> section and everything up till <main id="main">
 *
 * @package fairhaven
 */
?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta name="viewport" content="width=device-width">
<!-- <meta name="viewport" content="width=device-width, initial-scale=1.0"> -->
<title><?php wp_title( '|', true, 'right' ); ?> 2415 Saw Mill Run Blvd, Pittsburgh, PA 15234</title>
<link rel="profile" href="http://gmpg.org/xfn/11">
<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">

<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<div class="main-header">
	
	<?php do_action( 'before' ); ?>
	<header role="banner">
	  <div class="title-description">
		  <h1 class="site-title">
		    <a href="<?php echo esc_url( home_url( '/' ) ); ?>" title="<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a>
		    </h1>
			<h2 class="site-description"><?php bloginfo( 'description' ); ?></h2>
	  		<a href="#" class="menu-link">Menu</a>
	  </div>
        <div class="nav">		
          <nav id="menu" class="hide" role="navigation">
            <?php wp_nav_menu( array( 'theme_location' => 'primary' ) ); ?>
          </nav><!-- #site-navigation -->	
        </div>
    </header>
    
</div>

<div class="wrapper">



