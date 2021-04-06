<?php
/**
 * Author Pro.
 *
 * This file adds the front page to the Author Pro Theme.
 *
 * @package Author
 * @author  StudioPress
 * @license GPL-2.0+
 * @link    http://my.studiopress.com/themes/author/
 */

add_action( 'genesis_meta', 'author_front_page_genesis_meta' );
/**
 * Adds widget support for homepage. If no widgets active, display the default loop.
 *
 * @since 1.0.0
 */
function author_front_page_genesis_meta() {

	if ( is_active_sidebar( 'front-page-1' ) || is_active_sidebar( 'front-page-2' ) || is_active_sidebar( 'front-page-3' ) || is_active_sidebar( 'front-page-4' ) || is_active_sidebar( 'front-page-5' ) ) {

		// Add front-page body class.
		add_filter( 'body_class', 'author_body_class' );

		// Force full width content layout.
		add_filter( 'genesis_pre_get_option_site_layout', '__genesis_return_full_width_content' );

		// Remove breadcrumbs.
		remove_action( 'genesis_before_loop', 'genesis_do_breadcrumbs' );

		// Remove the default Genesis loop.
		remove_action( 'genesis_loop', 'genesis_do_loop' );

		// Add front page 1 widget.
		add_action( 'genesis_after_header', 'author_front_page_1_widget', 5 );

		// Add the rest of front page widgets.
		add_action( 'genesis_loop', 'author_front_page_widgets' );

	}

}

/**
 * Adds to front page body classes.
 *
 * @param array $classes Original body classes.
 * @return array Modified body classes.
 */
function author_body_class( $classes ) {

	$classes[] = 'front-page';

	return $classes;

}

/**
 * Adds markup for front page widgets.
 */
function author_front_page_1_widget() {

	genesis_widget_area(
		'front-page-1',
		[
			'before' => '<div class="featured-widget-area"><div class="wrap"><div id="front-page-1" class="front-page-1"><div class="flexible-widgets widget-area' . author_widget_area_class( 'front-page-1' ) . '">',
			'after'  => '</div></div></div></div>',
		]
	);

}
/**
 * Registers front page widget areas.
 */
function author_front_page_widgets() {

	genesis_widget_area(
		'front-page-2',
		[
			'before' => '<div id="front-page-2" class="front-page-2"><div class="flexible-widgets widget-area' . author_widget_area_class( 'front-page-2' ) . '">',
			'after'  => '</div></div>',
		]
	);

	genesis_widget_area(
		'front-page-3',
		[
			'before' => '<div id="front-page-3" class="front-page-3"><div class="flexible-widgets widget-area' . author_widget_area_class( 'front-page-3' ) . '">',
			'after'  => '</div></div>',
		]
	);

	genesis_widget_area(
		'front-page-4',
		[
			'before' => '<div id="front-page-4" class="front-page-4"><div class="flexible-widgets widget-area' . author_widget_area_class( 'front-page-4' ) . '">',
			'after'  => '</div></div>',
		]
	);

	genesis_widget_area(
		'front-page-5',
		[
			'before' => '<div id="front-page-5" class="front-page-5"><div class="flexible-widgets widget-area' . author_widget_area_class( 'front-page-5' ) . '">',
			'after'  => '</div></div>',
		]
	);

}

// Runs the Genesis loop.
genesis();
