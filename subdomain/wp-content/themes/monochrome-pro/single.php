<?php
/**
 * Monochrome Pro.
 *
 * This file adds the single post template to the Monochrome Pro Theme.
 *
 * @package Monochrome
 * @author  StudioPress
 * @license GPL-2.0-or-later
 * @link    https://my.studiopress.com/themes/monochrome/
 */

add_filter( 'body_class', 'monochrome_body_class_post' );
/**
 * Adds body class if post has featured image.
 *
 * @since 1.0.0
 *
 * @param array $classes Original body classes.
 * @return array Modified body classes.
 */
function monochrome_body_class_post( $classes ) {

	if ( has_post_thumbnail() ) {
		$classes[] = 'featured-image';
	}

	return $classes;

}

add_action( 'genesis_before', 'monochrome_setup_full_width' );
/**
 * Runs function if post has featured image and full-width content layout.
 *
 * @since 1.0.0
 */
function monochrome_setup_full_width() {

	$run = genesis_site_layout() === 'full-width-content' && has_post_thumbnail();

	if ( ! $run ) {
		return;
	}

	add_action( 'genesis_after_header', 'monochrome_entry_background_post' );
	/**
	 * Outputs background image.
	 *
	 * @since 1.0.0
	 */
	function monochrome_entry_background_post() {

		$image = genesis_get_image( [ 'format' => 'url' ] );

		echo '<div class="entry-background" style="background-image: url(' . esc_url( $image ) . ')"></div>';

	}

	add_action( 'genesis_entry_header', 'monochrome_gravatar_post', 7 );
	/**
	 * Outputs Gravatar.
	 *
	 * @since 1.0.0
	 */
	function monochrome_gravatar_post() {

		echo '<div class="entry-avatar">';
		echo get_avatar( get_the_author_meta( 'user_email' ), 110 );
		echo '</div>';

	}

}

// Adds entry meta in entry footer.
add_action( 'genesis_entry_footer', 'genesis_entry_footer_markup_open', 5 );
add_action( 'genesis_entry_footer', 'genesis_post_meta' );
add_action( 'genesis_entry_footer', 'genesis_entry_footer_markup_close', 15 );

// Runs the Genesis loop.
genesis();
