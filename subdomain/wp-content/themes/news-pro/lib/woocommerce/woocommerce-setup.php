<?php
/**
 * News Pro.
 *
 * This file adds the required WooCommerce setup functions to the News Pro Theme.
 *
 * @package News
 * @author  StudioPress
 * @license GPL-2.0-or-later
 * @link    https://my.studiopress.com/themes/news/
 */

// Add product gallery support.
if ( class_exists( 'WooCommerce' ) ) {

	add_theme_support( 'wc-product-gallery-lightbox' );
	add_theme_support( 'wc-product-gallery-slider' );
	add_theme_support( 'wc-product-gallery-zoom' );

}

add_action( 'wp_enqueue_scripts', 'news_products_match_height', 99 );
/**
 * Print an inline script to the footer to keep products the same height.
 *
 * @since 3.2.0
 */
function news_products_match_height() {

	// If WooCommerce isn't active or not on a WooCommerce page, exit early.
	if ( ! class_exists( 'WooCommerce' ) || ( ! is_shop() && ! is_woocommerce() && ! is_cart() ) ) {
		return;
	}

	wp_add_inline_script( 'news-match-height', "jQuery(document).ready( function() { jQuery( '.product .woocommerce-LoopProduct-link').matchHeight(); });" );

}

add_filter( 'woocommerce_style_smallscreen_breakpoint', 'news_woocommerce_breakpoint' );
/**
 * Modify the WooCommerce breakpoints.
 *
 * @since 3.2.0
 */
function news_woocommerce_breakpoint() {

	$current = genesis_site_layout();
	$layouts = [
		'one-sidebar' => [
			'content-sidebar',
			'sidebar-content',
		],
		'two-sidebar' => [
			'content-sidebar-sidebar',
			'sidebar-content-sidebar',
			'sidebar-sidebar-content',
		],
	];

	if ( in_array( $current, $layouts['two-sidebar'], true ) ) {
		return '2000px'; // Return high number to initiate mobile styles on desktop.
	} elseif ( in_array( $current, $layouts['one-sidebar'], true ) ) {
		return '1188px';
	} else {
		return '1023px';
	}

}

add_filter( 'genesiswooc_default_products_per_page', 'news_default_products_per_page' );
/**
 * Set the default products per page value.
 *
 * @since 3.2.0
 *
 * @return int Number of products to show per page.
 */
function news_default_products_per_page() {

	return 8;

}

add_filter( 'woocommerce_pagination_args', 'news_woocommerce_pagination' );
/**
 * Updates the next and previous arrows to the default Genesis style.
 *
 * @since 3.2.0
 *
 * @param array $args The previous and next text arguments.
 * @return array New next and previous text arguments.
 */
function news_woocommerce_pagination( $args ) {

	$args['prev_text'] = sprintf( '&laquo; %s', __( 'Previous Page', 'news-pro' ) );
	$args['next_text'] = sprintf( '%s &raquo;', __( 'Next Page', 'news-pro' ) );

	return $args;

}

add_action( 'after_switch_theme', 'news_woocommerce_image_dimensions_after_theme_setup', 1 );
/**
 * Defines WooCommerce image sizes on theme activation.
 *
 * @since 3.2.0
 */
function news_woocommerce_image_dimensions_after_theme_setup() {

	global $pagenow;

	// Checks conditionally to see if we're activating the current theme and that WooCommerce is installed.
	if ( ! isset( $_GET['activated'] ) || 'themes.php' !== $pagenow || ! class_exists( 'WooCommerce' ) ) { // phpcs:ignore WordPress.CSRF.NonceVerification.NoNonceVerification -- low risk, follows official snippet at https://goo.gl/nnHHQa.
		return;
	}

	news_update_woocommerce_image_dimensions();

}

add_action( 'activated_plugin', 'news_woocommerce_image_dimensions_after_woo_activation', 10, 2 );
/**
 * Defines the WooCommerce image sizes on WooCommerce activation.
 *
 * @since 3.2.0
 *
 * @param string $plugin The path of the plugin being activated.
 */
function news_woocommerce_image_dimensions_after_woo_activation( $plugin ) {

	// Checks to see if WooCommerce is being activated.
	if ( 'woocommerce/woocommerce.php' !== $plugin ) {
		return;
	}

	news_update_woocommerce_image_dimensions();

}

/**
 * Updates WooCommerce image dimensions.
 *
 * @since 3.2.0
 */
function news_update_woocommerce_image_dimensions() {

	// Updates image size options.
	update_option( 'woocommerce_single_image_width', 700 );    // Single product image.
	update_option( 'woocommerce_thumbnail_image_width', 500 ); // Catalog image.

	// Updates image cropping option.
	update_option( 'woocommerce_thumbnail_cropping', '1:1' );

}

add_filter( 'woocommerce_get_image_size_gallery_thumbnail', 'news_gallery_image_thumbnail' );
/**
 * Filters the WooCommerce gallery image dimensions.
 *
 * @since 3.2.3
 *
 * @param array $size The gallery image size and crop arguments.
 * @return array The modified gallery image size and crop arguments.
 */
function news_gallery_image_thumbnail( $size ) {

	$size = [
		'width'  => 180,
		'height' => 180,
		'crop'   => 1,
	];

	return $size;

}
