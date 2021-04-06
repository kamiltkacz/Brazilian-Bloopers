<?php
/**
 * Navigation Pro.
 *
 * This file adds the unboxed content template to the Navigation Pro Theme.
 *
 * Template Name: Unboxed Content
 * Template Post Type: page
 *
 * @package Navigation
 * @author  StudioPress
 * @license GPL-2.0-or-later
 * @link    https://my.studiopress.com/themes/navigation/
 */

add_filter( 'body_class', 'navigation_unboxed_body_class' );
/**
 * Adds unboxed body class.
 *
 * @since 1.0.0
 *
 * @param array $classes Original body classes.
 * @return array Modified body classes.
 */
function navigation_unboxed_body_class( $classes ) {

	$classes[] = 'unboxed';
	return $classes;

}

// Runs the Genesis loop.
genesis();
