<?php
/**
 * Authority Pro.
 *
 * This file adds the required WooCommerce setup functions to the Authority Pro Theme.
 *
 * @package Authority
 * @author  StudioPress
 * @license GPL-2.0-or-later
 * @link    https://my.studiopress.com/themes/authority/
 */

// Adds product gallery support.
add_theme_support( 'wc-product-gallery-lightbox' );
add_theme_support( 'wc-product-gallery-slider' );
add_theme_support( 'wc-product-gallery-zoom' );

add_filter( 'woocommerce_style_smallscreen_breakpoint', 'authority_woocommerce_breakpoint' );
/**
 * Modifies the WooCommerce breakpoints.
 *
 * @since 1.0.0
 *
 * @return string Pixel width of new breakpoint.
 */
function authority_woocommerce_breakpoint() {

	$current = genesis_site_layout( false );
	$layouts = [
		'content-sidebar',
		'sidebar-content',
	];

	if ( in_array( $current, $layouts, true ) ) {
		return '1200px';
	} else {
		return '860px';
	}

}

add_filter( 'loop_shop_columns', 'authority_product_archive_columns' );
/**
 * Modifies the default WooCommerce column count for product thumbnails.
 *
 * @since 1.0.0
 *
 * @return int Number of columns for product archives.
 */
function authority_product_archive_columns() {

	return 3;

}

add_filter( 'genesiswooc_default_products_per_page', 'authority_default_products_per_page' );
/**
 * Sets the default products per page value.
 *
 * @since 1.0.0
 *
 * @return int Number of products to show per page.
 */
function authority_default_products_per_page() {

	return 6;

}

add_filter( 'woocommerce_output_related_products_args', 'authority_related_products_args' );
/**
 * Changes number of related products on product page.
 *
 * @since 1.0.0
 *
 * @param array $args The numeric columns and posts_per_page arguments.
 * @return array The modified numeric columns and posts_per_page arguments.
 */
function authority_related_products_args( $args ) {

	$args['posts_per_page'] = 3; // 3 related products.
	$args['columns']        = 3; // Arranged in 3 columns.
	return $args;

}

add_filter( 'woocommerce_pagination_args', 'authority_woocommerce_pagination' );
/**
 * Updates the next and previous arrows to the default Genesis style.
 *
 * @since 1.0.0
 *
 * @param array $args The pagination arguments.
 * @return array Arguments with modified next and previous text strings.
 */
function authority_woocommerce_pagination( $args ) {

	$args['prev_text'] = sprintf( '&laquo; %s', __( 'Previous Page', 'authority-pro' ) );
	$args['next_text'] = sprintf( '%s &raquo;', __( 'Next Page', 'authority-pro' ) );

	return $args;

}

add_action( 'after_switch_theme', 'authority_woocommerce_image_dimensions_after_theme_setup', 1 );
/**
 * Defines WooCommerce image sizes on theme activation.
 *
 * @since 1.0.0
 */
function authority_woocommerce_image_dimensions_after_theme_setup() {

	global $pagenow;

	if ( ! isset( $_GET['activated'] ) || 'themes.php' !== $pagenow || ! class_exists( 'WooCommerce' ) ) { // phpcs:ignore WordPress.CSRF.NonceVerification.NoNonceVerification -- low risk, follows official snippet at https://goo.gl/nnHHQa.
		return;
	}

	authority_update_woocommerce_image_dimensions();

}

add_action( 'activated_plugin', 'authority_woocommerce_image_dimensions_after_woo_activation', 10, 2 );
/**
 * Defines the WooCommerce image sizes on WooCommerce activation.
 *
 * @since 1.0.0
 *
 * @param string $plugin The plugin path or slug.
 */
function authority_woocommerce_image_dimensions_after_woo_activation( $plugin ) {

	// Checks to see if WooCommerce is being activated.
	if ( 'woocommerce/woocommerce.php' !== $plugin ) {
		return;
	}

	authority_update_woocommerce_image_dimensions();

}

/**
 * Updates WooCommerce image dimensions.
 *
 * @since 1.0.0
 */
function authority_update_woocommerce_image_dimensions() {

	// Updates image size options.
	update_option( 'woocommerce_single_image_width', 660 );    // Single product image.
	update_option( 'woocommerce_thumbnail_image_width', 500 ); // Catalog image.

	// Updates image cropping option.
	update_option( 'woocommerce_thumbnail_cropping', '1:1' );

}

add_filter( 'woocommerce_get_image_size_gallery_thumbnail', 'authority_gallery_image_thumbnail' );
/**
 * Filters the WooCommerce gallery image dimensions.
 *
 * @since 1.0.4
 *
 * @param array $size The gallery image size and crop arguments.
 * @return array The modified gallery image size and crop arguments.
 */
function authority_gallery_image_thumbnail( $size ) {

	$size = [
		'width'  => 180,
		'height' => 180,
		'crop'   => 1,
	];

	return $size;

}
