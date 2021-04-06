<?php
/**
 * Navigation Pro.
 *
 * This file adds the required WooCommerce setup functions to the Navigation Pro Theme.
 *
 * @package Navigation
 * @author  StudioPress
 * @license GPL-2.0-or-later
 * @link    https://my.studiopress.com/themes/navigation/
 */

// Add product gallery support.
if ( class_exists( 'WooCommerce' ) ) {
	add_theme_support( 'wc-product-gallery-lightbox' );
	add_theme_support( 'wc-product-gallery-slider' );
	add_theme_support( 'wc-product-gallery-zoom' );
}

add_filter( 'woocommerce_style_smallscreen_breakpoint', 'navigation_woocommerce_breakpoint' );
/**
 * Modifies the WooCommerce breakpoints.
 *
 * @since 1.1.0
 */
function navigation_woocommerce_breakpoint() {

	$current = genesis_site_layout( false );

	$layouts = [
		'content-sidebar',
		'sidebar-content',
	];

	if ( in_array( $current, $layouts, true ) ) {
		return '1400px';
	} else {
		return '1023px';
	}

}

add_filter( 'genesiswooc_default_products_per_page', 'navigation_default_products_per_page' );
/**
 * Sets the default products per page value.
 *
 * @since 1.1.0
 *
 * @return int Number of products to show per page.
 */
function navigation_default_products_per_page() {
	return 6;
}

add_filter( 'loop_shop_columns', 'navigation_product_archive_columns' );
/**
 * Changes number of products in a row to 3.
 *
 * @since 1.0.0
 *
 * @return int Number of products to show per row.
 */
function navigation_product_archive_columns() {

	return 3; // 3 products per row.

}

add_filter( 'woocommerce_output_related_products_args', 'navigation_related_products_args' );
/**
 * Changes number of related products on product page.
 *
 * @since 1.0.0
 *
 * @param array $args The numeric columns and posts_per_page arguments.
 * @return array The modified numeric columns and posts_per_page arguments.
 */
function navigation_related_products_args( $args ) {

	$args['posts_per_page'] = 3; // 3 related products.
	$args['columns']        = 3; // Arranged in 3 columns.

	return $args;
}

add_filter( 'woocommerce_pagination_args', 'navigation_woocommerce_pagination' );
/**
 * Updates the next and previous arrows to the default Genesis style.
 *
 * @since 1.1.0
 *
 * @param array $args The previous and next text strings.
 * @return array New next and previous text strings.
 */
function navigation_woocommerce_pagination( $args ) {

	$args['prev_text'] = sprintf( '&laquo; %s', __( 'Previous Page', 'navigation-pro' ) );
	$args['next_text'] = sprintf( '%s &raquo;', __( 'Next Page', 'navigation-pro' ) );

	return $args;

}

add_action( 'after_switch_theme', 'navigation_woocommerce_image_dimensions_after_theme_setup', 1 );
/**
 * Defines WooCommerce image sizes on theme activation.
 *
 * @since 1.1.0
 */
function navigation_woocommerce_image_dimensions_after_theme_setup() {

	global $pagenow;

	if ( ! isset( $_GET['activated'] ) || 'themes.php' !== $pagenow || ! class_exists( 'WooCommerce' ) ) { // phpcs:ignore WordPress.CSRF.NonceVerification.NoNonceVerification -- low risk, follows official snippet at https://goo.gl/nnHHQa.
		return;
	}

	navigation_update_woocommerce_image_dimensions();

}

add_action( 'activated_plugin', 'navigation_woocommerce_image_dimensions_after_woo_activation', 10, 2 );
/**
 * Defines the WooCommerce image sizes on WooCommerce activation.
 *
 * @since 1.1.0
 *
 * @param string $plugin The path of the plugin being activated.
 */
function navigation_woocommerce_image_dimensions_after_woo_activation( $plugin ) {

	// Checks to see if WooCommerce is being activated.
	if ( 'woocommerce/woocommerce.php' !== $plugin ) {
		return;
	}

	navigation_update_woocommerce_image_dimensions();

}

/**
 * Updates WooCommerce image dimensions.
 *
 * @since 1.1.0
 */
function navigation_update_woocommerce_image_dimensions() {

	// Updates image size options.
	update_option( 'woocommerce_single_image_width', 720 );    // Single product image.
	update_option( 'woocommerce_thumbnail_image_width', 530 ); // Catalog image.

	// Updates image cropping option.
	update_option( 'woocommerce_thumbnail_cropping', '1:1' );

}

add_filter( 'woocommerce_get_image_size_gallery_thumbnail', 'navigation_gallery_image_thumbnail' );
/**
 * Filters the WooCommerce gallery image dimensions.
 *
 * @since 1.2.0
 *
 * @param array $size The gallery image size and crop arguments.
 * @return array The modified gallery image size and crop arguments.
 */
function navigation_gallery_image_thumbnail( $size ) {

	$size = [
		'width'  => 180,
		'height' => 180,
		'crop'   => 1,
	];

	return $size;

}
