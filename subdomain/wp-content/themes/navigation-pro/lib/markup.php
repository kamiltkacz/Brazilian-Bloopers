<?php
/**
 * Navigation Pro.
 *
 * This file defines markup functions used in the Navigation Pro Theme.
 *
 * @package Navigation
 * @author  StudioPress
 * @license GPL-2.0-or-later
 * @link    https://my.studiopress.com/themes/navigation/
 */

/**
 * Outputs the header search form toggle button.
 *
 * @return string HTML output of the Show Search button.
 *
 * @since 1.0.0
 */
function navigation_get_header_search_toggle() {
	return sprintf( '<a href="#header-search-wrap" aria-controls="header-search-wrap" aria-expanded="false" role="button" class="toggle-header-search"><span class="screen-reader-text">%s</span><span class="ionicons ion-ios-search"></span></a>', __( 'Show Search', 'navigation-pro' ) );
}

/**
 * Outputs the header search form.
 *
 * @since 1.0.0
 */
function navigation_do_header_search_form() {

	$button = sprintf( '<a href="#" role="button" aria-expanded="false" aria-controls="header-search-wrap" class="toggle-header-search close"><span class="screen-reader-text">%s</span><span class="ionicons ion-ios-close"></span></a>', __( 'Hide Search', 'navigation-pro' ) );

	printf(
		'<div id="header-search-wrap" class="header-search-wrap">%s %s</div>',
		get_search_form( false ),
		$button // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped
	);

}

add_action( 'genesis_entry_header', 'navigation_entry_wrapper', 2 );
/**
 * Opens the entry-container wrapper.
 *
 * @since 1.0.0
 */
function navigation_entry_wrapper() {
	// Exit early if on a singular entry.
	if ( ! is_singular() ) {
		genesis_markup(
			[
				'open'    => '<div %s>',
				'context' => 'entry-container',
			]
		);
	}
}

add_action( 'genesis_entry_footer', 'navigation_entry_wrapper_end', 20 );
/**
 * Closes the entry-container wrapper.
 *
 * @since 1.0.0
 */
function navigation_entry_wrapper_end() {
	// Exit early if on a singular entry.
	if ( ! is_singular() ) {
		genesis_markup(
			[
				'open'    => '</div>',
				'context' => 'entry-container',
			]
		);
	}
}

add_action( 'genesis_archive_title_descriptions', 'navigation_archive_wrap_open', 5 );
/**
 * Opens the archive description wrap.
 *
 * @since 1.0.0
 */
function navigation_archive_wrap_open() {

	genesis_markup(
		[
			'open'    => '<div %s>',
			'context' => 'description-wrap',
		]
	);

}

add_action( 'genesis_archive_title_descriptions', 'navigation_archive_wrap_close', 13 );
/**
 * Closes the archive description wrap.
 *
 * @since 1.0.0
 */
function navigation_archive_wrap_close() {

	genesis_markup(
		[
			'close'   => '</div>',
			'context' => 'description-wrap',
		]
	);

}

add_action( 'genesis_archive_title_descriptions', 'navigation_archive_content_open', 11 );
/**
 * Opens the archive description wrap.
 *
 * @since 1.0.0
 */
function navigation_archive_content_open() {

	if ( ! is_search() ) {
		genesis_markup(
			[
				'open'    => '<div %s>',
				'context' => 'description-content',
			]
		);
	}

}

add_action( 'genesis_archive_title_descriptions', 'navigation_archive_content_close', 13 );
/**
 * Closes the archive description wrap.
 *
 * @since 1.0.0
 */
function navigation_archive_content_close() {

	if ( ! is_search() ) {
		genesis_markup(
			[
				'close'   => '</div>',
				'context' => 'description-content',
			]
		);
	}

}
