<?php
/**
 * Navigation Pro.
 *
 * This file adds the title functions to the Navigation Pro Theme.
 *
 * @package Navigation
 * @author  StudioPress
 * @license GPL-2.0-or-later
 * @link    https://my.studiopress.com/themes/navigation/
 */

// Forces the layout on the search page.
add_filter( 'genesis_pre_get_option_site_layout', '__genesis_return_full_width_content' );

add_filter( 'genesis_pre_get_option_content_archive', 'navigation_search_excerpts' );
/**
 * Forces the search results page to use excerpts.
 *
 * @since 1.0.0
 */
function navigation_search_excerpts() {

	return 'content';

}

add_filter( 'genesis_pre_get_option_content_archive_limit', 'navigation_search_content_limit' );
/**
 * Forces the search results page to use 130 character content limit.
 *
 * @since 1.0.0
 */
function navigation_search_content_limit() {

	return '180';

}

add_filter( 'genesis_pre_get_option_image_size', 'navigation_search_image_size' );
/**
 * Forces the image size.
 *
 * @since 1.0.0
 */
function navigation_search_image_size() {

	return 'genesis-singular-images';

}

add_filter( 'genesis_pre_get_option_image_alignment', 'navigation_search_image_alignment' );
/**
 * Forces the image alignment.
 *
 * @since 1.0.0
 */
function navigation_search_image_alignment() {

	return 'aligncenter';

}

// Removes the entry footer and markup.
remove_action( 'genesis_entry_footer', 'genesis_entry_footer_markup_open', 5 );
remove_action( 'genesis_entry_footer', 'genesis_post_info' );
remove_action( 'genesis_entry_footer', 'genesis_entry_footer_markup_close', 15 );

add_action( 'genesis_after_header', 'navigation_do_search_title', 15 );
/**
 * Echo the title with the search term.
 *
 * @since 1.9.0
 */
function navigation_do_search_title() {

	// phpcs:ignore WordPress.NamingConventions.PrefixAllGlobals.NonPrefixedHooknameFound -- preserving the Genesis filter
	$title = sprintf( '<div class="archive-description"><div class="description-wrap"><h1 class="archive-title">%s %s</h1></div></div>', apply_filters( 'genesis_search_title_text', __( 'Search Results for:', 'navigation-pro' ) ), get_search_query() );

	echo apply_filters( // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped
		'genesis_search_title_output', // phpcs:ignore WordPress.NamingConventions.PrefixAllGlobals.NonPrefixedHooknameFound -- preserving the Genesis filter
		$title
	) . "\n";

}

// Runs the genesis loop.
genesis();
