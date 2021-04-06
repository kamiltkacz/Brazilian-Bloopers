<?php
/**
 * Gutenberg theme support.
 *
 * @package Revolution Pro
 * @author  StudioPress
 * @license GPL-2.0-or-later
 * @link    https://my.studiopress.com/themes/revolution/
 */

add_action( 'wp_enqueue_scripts', 'revolution_pro_enqueue_gutenberg_frontend_styles' );
/**
 * Enqueues Gutenberg front-end styles.
 *
 * @since 1.0.0
 */
function revolution_pro_enqueue_gutenberg_frontend_styles() {

	wp_enqueue_style(
		genesis_get_theme_handle() . '-gutenberg',
		CHILD_URL . '/lib/gutenberg/front-end.css',
		[ genesis_get_theme_handle() ],
		genesis_get_theme_version()
	);

}

add_action( 'enqueue_block_editor_assets', 'revolution_pro_block_editor_styles' );
/**
 * Enqueues Gutenberg admin editor fonts and styles.
 *
 * @since 1.0.0
 */
function revolution_pro_block_editor_styles() {

	wp_enqueue_style(
		genesis_get_theme_handle() . '-gutenberg-fonts',
		'https://fonts.googleapis.com/css?family=Noto+Serif+SC:300,600|Playfair+Display:400,700,700i|Poppins:400',
		[],
		genesis_get_theme_version()
	);

}

add_theme_support( 'editor-styles' );

add_editor_style( '/lib/gutenberg/style-editor.css' );

add_theme_support( 'align-wide' );

add_theme_support( 'responsive-embeds' );

add_theme_support( 'editor-font-sizes', genesis_get_config( 'editor-font-sizes' ) );

add_theme_support( 'editor-color-palette', genesis_get_config( 'editor-color-palette' ) );

require_once CHILD_DIR . '/lib/gutenberg/inline-styles.php';

add_action( 'after_setup_theme', 'revolution_pro_content_width', 0 );
/**
 * Sets content width to match the “wide” Gutenberg block width.
 */
function revolution_pro_content_width() {

	// phpcs:ignore WordPress.NamingConventions.PrefixAllGlobals.NonPrefixedVariableFound -- See https://github.com/WordPress-Coding-Standards/WordPress-Coding-Standards/issues/924
	$GLOBALS['content_width'] = apply_filters( 'revolution_pro_content_width', 1200 );

}
