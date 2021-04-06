<?php
/**
 * Author Pro.
 *
 * This file adds the required WooCommerce setup functions to the Author Pro Theme.
 *
 * @package Author
 * @author  StudioPress
 * @license GPL-2.0+
 * @link    http://my.studiopress.com/themes/author/
 */

// Adds product gallery support.
if ( class_exists( 'WooCommerce' ) ) {

	add_theme_support( 'wc-product-gallery-lightbox' );
	add_theme_support( 'wc-product-gallery-slider' );
	add_theme_support( 'wc-product-gallery-zoom' );

}

add_action( 'wp_enqueue_scripts', 'author_products_match_height', 99 );
/**
 * Prints an inline script to the footer to keep products the same height.
 *
 * @since 1.2.0
 */
function author_products_match_height() {

	// If WooCommerce isn't active or not on a WooCommerce page, exit early.
	if ( ! class_exists( 'WooCommerce' ) || ( ! is_shop() && ! is_woocommerce() && ! is_cart() ) ) {
		return;
	}

	wp_enqueue_script( 'author-match-height', get_stylesheet_directory_uri() . '/js/jquery.matchHeight.min.js', [ 'jquery' ], CHILD_THEME_VERSION, true );
	wp_add_inline_script( 'author-match-height', "jQuery(document).ready( function() { jQuery( '.product .woocommerce-LoopProduct-link').matchHeight(); });" );

}

add_filter( 'woocommerce_style_smallscreen_breakpoint', 'author_woocommerce_breakpoint' );
/**
 * Modifies the WooCommerce breakpoints.
 *
 * @since 1.2.0
 *
 * @return string Pixel width of the theme's breakpoint.
 */
function author_woocommerce_breakpoint() {

	$current = genesis_site_layout( false );
	$layouts = [
		'one-sidebar' => [
			'content-sidebar',
			'sidebar-content',
		],
	];

	if ( in_array( $current, $layouts['one-sidebar'], true ) ) {
		return '1200px';
	}

	return '860px';

}

add_filter( 'genesiswooc_default_products_per_page', 'author_default_products_per_page' );
/**
 * Sets the default products per page value.
 *
 * @since 1.2.0
 *
 * @return int Number of products to show per page.
 */
function author_default_products_per_page() {
	return 8;
}

add_filter( 'woocommerce_pagination_args', 'author_woocommerce_pagination' );
/**
 * Updates the next and previous arrows to the default Genesis style.
 *
 * @since 1.2.0
 *
 * @param array $args The previous and next text arguments.
 * @return string New next and previous text string.
 */
function author_woocommerce_pagination( $args ) {

	$args['prev_text'] = sprintf( '&laquo; %s', __( 'Previous Page', 'author-pro' ) );
	$args['next_text'] = sprintf( '%s &raquo;', __( 'Next Page', 'author-pro' ) );

	return $args;

}

add_action( 'after_switch_theme', 'author_woocommerce_image_dimensions_after_theme_setup', 1 );
/**
 * Defines WooCommerce image sizes on theme activation.
 *
 * @since 1.2.0
 */
function author_woocommerce_image_dimensions_after_theme_setup() {

	global $pagenow;

	// Checks to see if we're activating the current theme and that WooCommerce is installed.
	if ( ! isset( $_GET['activated'] ) || 'themes.php' !== $pagenow || ! class_exists( 'WooCommerce' ) ) { // phpcs:ignore WordPress.CSRF.NonceVerification.NoNonceVerification -- low risk, follows official snippet at https://goo.gl/nnHHQa.
		return;
	}

	author_update_woocommerce_image_dimensions();

}

add_action( 'activated_plugin', 'author_woocommerce_image_dimensions_after_woo_activation', 10, 2 );
/**
 * Defines the WooCommerce image sizes on WooCommerce activation.
 *
 * @since 1.2.0
 *
 * @param string $plugin The path of the plugin being activated.
 */
function author_woocommerce_image_dimensions_after_woo_activation( $plugin ) {

	// Checks to see if WooCommerce is being activated.
	if ( 'woocommerce/woocommerce.php' !== $plugin ) {
		return;
	}

	author_update_woocommerce_image_dimensions();

}

/**
 * Updates WooCommerce image dimensions.
 *
 * @since 1.2.0
 */
function author_update_woocommerce_image_dimensions() {

	// Updates image size options.
	update_option( 'woocommerce_single_image_width', 740 );    // Single product image.
	update_option( 'woocommerce_thumbnail_image_width', 550 ); // Catalog image.

	// Updates image cropping option.
	update_option( 'woocommerce_thumbnail_cropping', '1:1' );

}

add_filter( 'woocommerce_get_image_size_gallery_thumbnail', 'author_gallery_image_thumbnail' );
/**
 * Filters the WooCommerce gallery image dimensions.
 *
 * @since 1.2.4
 *
 * @param array $size The gallery image size and crop arguments.
 * @return array The modified gallery image size and crop arguments.
 */
function author_gallery_image_thumbnail( $size ) {

	$size = [
		'width'  => 180,
		'height' => 180,
		'crop'   => 1,
	];

	return $size;

}
