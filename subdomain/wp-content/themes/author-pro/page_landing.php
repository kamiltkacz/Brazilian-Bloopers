<?php
/**
 * Author Pro.
 *
 * This file adds the landing page template to the Author Pro Theme.
 *
 * Template Name: Landing
 *
 * @package Author
 * @author  StudioPress
 * @license GPL-2.0+
 * @link    http://my.studiopress.com/themes/author/
 */

add_filter( 'body_class', 'author_add_body_class' );
/**
 * Adds landing page body class.
 *
 * @since 1.0.0
 *
 * @param array $classes Original body classes.
 * @return array Modified body classes.
 */
function author_add_body_class( $classes ) {

	$classes[] = 'landing-page';

	return $classes;

}

// Removes skip links.
remove_action( 'genesis_before_header', 'genesis_skip_links', 5 );

add_action( 'wp_enqueue_scripts', 'author_dequeue_skip_links' );
/**
 * Dequeues skip links script.
 *
 * @since 1.0.0
 */
function author_dequeue_skip_links() {
	wp_dequeue_script( 'skip-links' );
}

// Forces full width content layout.
add_filter( 'genesis_site_layout', '__genesis_return_full_width_content' );

// Removes site header elements.
remove_action( 'genesis_header', 'genesis_header_markup_open', 5 );
remove_action( 'genesis_header', 'genesis_do_header' );
remove_action( 'genesis_header', 'genesis_header_markup_close', 15 );

// Removes navigation.
remove_theme_support( 'genesis-menus' );

// Removes breadcrumbs.
remove_action( 'genesis_before_loop', 'genesis_do_breadcrumbs' );

// Removes site footer widgets.
remove_action( 'genesis_before_footer', 'genesis_footer_widget_areas' );

// Removes site footer elements.
remove_action( 'genesis_footer', 'genesis_footer_markup_open', 5 );
remove_action( 'genesis_footer', 'genesis_do_footer' );
remove_action( 'genesis_footer', 'genesis_footer_markup_close', 15 );

// Runs the Genesis loop.
genesis();
