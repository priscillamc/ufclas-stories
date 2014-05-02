<?php
/**
 * The Header for our theme.
 *
 * Displays all of the <head> section and everything up till <div id="content">
 *
 * @package UF CLAS Stories
 */
?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title><?php wp_title( '|', true, 'right' ); ?></title>
<link rel="profile" href="http://gmpg.org/xfn/11">
<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">

<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<div id="page" class="hfeed site">

	<header id="masthead" class="site-header" role="banner">
		<div class="site-branding">
			<div class="container_24">
                <div class="grid_16">
                	<h1 class="site-title"><span><?php echo get_bloginfo('name'); ?></span> <a href="http://oral.history.ufl.edu/"><?php echo get_bloginfo('description'); ?></a></h1>
                </div>
                <div class="grid_8">
                    <h2 class="site-description"><a href="http://clas.ufl.edu/">College of Liberal Arts and Sciences</a>
                    <br /><a href="http://ufl.edu/">University of Florida</a></h2>
                </div>
            </div>
		</div>

		<nav id="site-navigation" class="main-navigation container_24" role="navigation">
			<button class="menu-toggle"><?php _e( 'Primary Menu', 'ufclas-stories' ); ?></button>
			<a class="skip-link screen-reader-text" href="#content"><?php _e( 'Skip to content', 'ufclas-stories' ); ?></a>

			<?php wp_nav_menu( array( 'theme_location' => 'primary' ) ); ?>
		</nav><!-- #site-navigation -->
	</header><!-- #masthead -->

	<div id="content" class="site-content container_24">
