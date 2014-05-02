<?php
/**
 * Jetpack Compatibility File
 * See: http://jetpack.me/
 *
 * @package UF CLAS Stories
 */

/**
 * Add theme support for Infinite Scroll.
 * See: http://jetpack.me/support/infinite-scroll/
 */
function ufclas_stories_jetpack_setup() {
	add_theme_support( 'infinite-scroll', array(
		'container' => 'main',
		'footer'    => 'page',
	) );
}
add_action( 'after_setup_theme', 'ufclas_stories_jetpack_setup' );
