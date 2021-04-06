<?php
/**
 * News Pro.
 *
 * This file adds the front page to the News Pro Theme.
 *
 * @package News
 * @author  StudioPress
 * @license GPL-2.0-or-later
 * @link    https://my.studiopress.com/themes/news/
 */

add_action( 'genesis_meta', 'news_home_genesis_meta' );
/**
 * Adds widget support for homepage. If no widgets active, display the default loop.
 *
 * @since 3.0.0
 */
function news_home_genesis_meta() {

	if ( is_active_sidebar( 'home-top' ) || is_active_sidebar( 'home-middle-left' ) || is_active_sidebar( 'home-middle-right' ) || is_active_sidebar( 'home-bottom' ) ) {

		// Forces content-sidebar layout setting.
		add_filter( 'genesis_pre_get_option_site_layout', '__genesis_return_content_sidebar' );

		// Adds news-home body class.
		add_filter( 'body_class', 'news_body_class' );

		// Adds content heading.
		add_action( 'genesis_before_loop', 'news_content_heading' );

	}

	if ( is_active_sidebar( 'home-top' ) ) {

		// Adds excerpt length filter.
		add_action( 'genesis_before_loop', 'news_top_excerpt_length' );

		// Adds homepage widgets.
		add_action( 'genesis_before_loop', 'news_homepage_top_widget' );

		// Removes excerpt length filter.
		add_action( 'genesis_before_loop', 'news_remove_top_excerpt_length' );

	}

	if ( is_active_sidebar( 'home-middle-left' ) || is_active_sidebar( 'home-middle-right' ) || is_active_sidebar( 'home-bottom' ) ) {

		// Removes the default Genesis loop.
		remove_action( 'genesis_loop', 'genesis_do_loop' );

		// Adds homepage widgets.
		add_action( 'genesis_loop', 'news_homepage_widgets' );

	}

}

/**
 * Defines the news-pro-home body class.
 *
 * @since 1.0.0
 *
 * @param array $classes Classes array.
 * @return array $classes Updated class array.
 */
function news_body_class( $classes ) {

	$classes[] = 'news-pro-home';

	return $classes;

}

/**
 * Defines excert length.
 *
 * @since 1.0.0
 *
 * @param string $length Original length.
 * @return string Modified length.
 */
function news_excerpt_length( $length ) {

	return 25; // Pull first 25 words.

}

/**
 * Adds excerpt length filter.
 *
 * @since 1.0.0
 */
function news_top_excerpt_length() {

	add_filter( 'excerpt_length', 'news_excerpt_length' );

}

/**
 * Removes excerpt length filter.
 *
 * @since 1.0.0
 */
function news_remove_top_excerpt_length() {

	remove_filter( 'excerpt_length', 'news_excerpt_length' );

}

/**
 * Outputs Main Content heading.
 *
 * @since 1.0.0
 */
function news_content_heading() {

	echo '<h2 class="screen-reader-text">' . esc_html__( 'Main Content', 'news-pro' ) . '</h2>';

}

/**
 * Outputs the home-top widget area.
 *
 * @since 1.0.0
 */
function news_homepage_top_widget() {

	genesis_widget_area(
		'home-top',
		[
			'before' => '<div class="home-top widget-area">',
			'after'  => '</div>',
		]
	);

}

/**
 * Outputs the home-middle and home-bottom widget areas.
 *
 * @since 1.0.0
 */
function news_homepage_widgets() {

	if ( is_active_sidebar( 'home-middle-left' ) || is_active_sidebar( 'home-middle-right' ) ) {

		echo '<div class="home-middle">';

		genesis_widget_area(
			'home-middle-left',
			[
				'before' => '<div class="home-middle-left widget-area">',
				'after'  => '</div>',
			]
		);

		genesis_widget_area(
			'home-middle-right',
			[
				'before' => '<div class="home-middle-right widget-area">',
				'after'  => '</div>',
			]
		);

		echo '</div>';

	}

	genesis_widget_area(
		'home-bottom',
		[
			'before' => '<div class="home-bottom widget-area">',
			'after'  => '</div>',
		]
	);

}

// Runs the Genesis loop.
genesis();
