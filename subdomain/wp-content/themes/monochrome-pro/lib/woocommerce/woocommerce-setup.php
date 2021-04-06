<?php
/**
 * Monochrome Pro.
 *
 * This file adds the required WooCommerce setup functions to the Monochrome Pro Theme.
 *
 * @package Monochrome
 * @author  StudioPress
 * @license GPL-2.0-or-later
 * @link    https://my.studiopress.com/themes/monochrome/
 */

// Add product gallery support.
if ( class_exists( 'WooCommerce' ) ) {
	add_theme_support( 'wc-product-gallery-lightbox' );
	add_theme_support( 'wc-product-gallery-slider' );
	add_theme_support( 'wc-product-gallery-zoom' );
}

add_filter( 'woocommerce_style_smallscreen_breakpoint', 'monochrome_woocommerce_breakpoint' );
/**
 * Modifies the WooCommerce breakpoints.
 *
 * @since 1.1.0
 */
function monochrome_woocommerce_breakpoint() {

	$current = genesis_site_layout( false );
	$layouts = [
		'content-sidebar',
		'sidebar-content',
	];

	if ( in_array( $current, $layouts, true ) ) {
		return '1200px';
	} else {
		return '800px';
	}

}

add_filter( 'genesiswooc_default_products_per_page', 'monochrome_default_products_per_page' );
/**
 * Sets the default products per page value.
 *
 * @since 1.1.0
 *
 * @return int Number of products to show per page.
 */
function monochrome_default_products_per_page() {
	return 8;
}

add_filter( 'woocommerce_pagination_args', 'monochrome_woocommerce_pagination' );
/**
 * Updates the next and previous arrows to the default Genesis style.
 *
 * @since 1.1.0
 *
 * @param array $args The previous and next text strings.
 * @return array New next and previous text strings.
 */
function monochrome_woocommerce_pagination( $args ) {

	$args['prev_text'] = sprintf( '&laquo; %s', __( 'Previous Page', 'monochrome-pro' ) );
	$args['next_text'] = sprintf( '%s &raquo;', __( 'Next Page', 'monochrome-pro' ) );

	return $args;

}

add_action( 'after_switch_theme', 'monochrome_woocommerce_image_dimensions_after_theme_setup', 1 );
/**
 * Defines WooCommerce image sizes on theme activation.
 *
 * @since 1.1.0
 */
function monochrome_woocommerce_image_dimensions_after_theme_setup() {

	global $pagenow;

	if ( ! isset( $_GET['activated'] ) || 'themes.php' !== $pagenow || ! class_exists( 'WooCommerce' ) ) { // phpcs:ignore WordPress.CSRF.NonceVerification.NoNonceVerification -- low risk, follows official snippet at https://goo.gl/nnHHQa.
		return;
	}

	monochrome_update_woocommerce_image_dimensions();

}

add_action( 'activated_plugin', 'monochrome_woocommerce_image_dimensions_after_woo_activation', 10, 2 );
/**
 * Defines the WooCommerce image sizes on WooCommerce activation.
 *
 * @since 1.1.0
 *
 * @param string $plugin The path of the plugin being activated.
 */
function monochrome_woocommerce_image_dimensions_after_woo_activation( $plugin ) {

	// Checks to see if WooCommerce is being activated.
	if ( 'woocommerce/woocommerce.php' !== $plugin ) {
		return;
	}

	monochrome_update_woocommerce_image_dimensions();

}

/**
 * Updates WooCommerce image dimensions.
 *
 * @since 1.1.0
 */
function monochrome_update_woocommerce_image_dimensions() {

	// Updates image size options.
	update_option( 'woocommerce_single_image_width', 720 );    // Single product image.
	update_option( 'woocommerce_thumbnail_image_width', 530 ); // Catalog image.

	// Updates image cropping option.
	update_option( 'woocommerce_thumbnail_cropping', '1:1' );

}

add_filter( 'woocommerce_get_image_size_gallery_thumbnail', 'monochrome_gallery_image_thumbnail' );
/**
 * Filters the WooCommerce gallery image dimensions.
 *
 * @since 1.2.0
 *
 * @param array $size The gallery image size and crop arguments.
 * @return array The modified gallery image size and crop arguments.
 */
function monochrome_gallery_image_thumbnail( $size ) {

	$size = [
		'width'  => 180,
		'height' => 180,
		'crop'   => 1,
	];

	return $size;

}
