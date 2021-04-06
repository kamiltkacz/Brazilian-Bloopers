<?php
/**
 * Gutenberg theme support.
 *
 * @package Magazine Pro
 * @author  StudioPress
 * @license GPL-2.0-or-later
 * @link    https://www.studiopress.com/
 */

add_action( 'wp_enqueue_scripts', 'magazine_pro_enqueue_gutenberg_frontend_styles' );
/**
 * Enqueues Gutenberg front-end styles.
 *
 * @since 3.3.0
 */
function magazine_pro_enqueue_gutenberg_frontend_styles() {

	wp_enqueue_style(
		genesis_get_theme_handle() . '-gutenberg',
		get_stylesheet_directory_uri() . '/lib/gutenberg/front-end.css',
		[ genesis_get_theme_handle() ],
		genesis_get_theme_version()
	);

}

add_action( 'enqueue_block_editor_assets', 'magazine_pro_block_editor_styles' );
/**
 * Enqueues Gutenberg admin editor fonts and styles.
 *
 * @since 3.3.0
 */
function magazine_pro_block_editor_styles() {

	$appearance = genesis_get_config( 'appearance' );

	wp_enqueue_style(
		genesis_get_theme_handle() . '-gutenberg-editor',
		$appearance['fonts-url'],
		[],
		genesis_get_theme_version()
	);

}

// Adds support for editor styles.
add_theme_support( 'editor-styles' );

// Enqueues editor styles.
add_editor_style( '/lib/gutenberg/style-editor.css' );

// Adds support for block alignments.
add_theme_support( 'align-wide' );

// Makes media embeds responsive.
add_theme_support( 'responsive-embeds' );

$magazine_appearance = genesis_get_config( 'appearance' );

// Adds support for editor font sizes.
add_theme_support(
	'editor-font-sizes',
	$magazine_appearance['editor-font-sizes']
);
// Adds support for editor color palette.
add_theme_support(
	'editor-color-palette',
	$magazine_appearance['editor-color-palette']
);

require_once get_stylesheet_directory() . '/lib/gutenberg/inline-styles.php';

add_action( 'after_setup_theme', 'magazine_pro_content_width', 0 );
/**
 * Sets content width to match the “wide” Gutenberg block width.
 */
function magazine_pro_content_width() {

	$appearance = genesis_get_config( 'appearance' );

	// phpcs:ignore WordPress.NamingConventions.PrefixAllGlobals.NonPrefixedVariableFound -- See https://github.com/WordPress-Coding-Standards/WordPress-Coding-Standards/issues/924
	$GLOBALS['content_width'] = apply_filters( 'magazine_content_width', $appearance['content-width'] );

}
