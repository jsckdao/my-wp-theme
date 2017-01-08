<?php
/**
 * Jetpack Compatibility File
 * See: http://jetpack.me/
 *
 * @package Terminal Lite
 */

/**
 * Add theme support for Infinite Scroll.
 * See: http://jetpack.me/support/infinite-scroll/
 */
function terminal_lite_jetpack_setup() {
	add_theme_support( 'infinite-scroll', array(
		'container' => 'sitemain',
		'footer'    => 'page',
	) );
}
add_action( 'after_setup_theme', 'terminal_lite_jetpack_setup' );