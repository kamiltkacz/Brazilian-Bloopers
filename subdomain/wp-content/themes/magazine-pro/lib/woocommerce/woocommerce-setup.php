<?php
/**
 * Magazine Pro.
 *
 * This file adds the required WooCommerce setup functions to the Magazine Pro Theme.
 *
 * @package Magazine
 * @author  StudioPress
 * @license GPL-2.0-or-later
 * @link    https://my.studiopress.com/themes/magazine/
 */

// Adds product gallery support.
if ( class_exists( 'WooCommerce' ) ) {

	add_theme_support( 'wc-product-gallery-lightbox' );
	add_theme_support( 'wc-product-gallery-slider' );
	add_theme_support( 'wc-product-gallery-zoom' );

}

add_filter( 'woocommerce_style_smallscreen_breakpoint', 'magazine_woocommerce_breakpoint' );
/**
 * Modifies the WooCommerce breakpoints.
 *
 * @since 3.2.0
 */
function magazine_woocommerce_breakpoint() {

	$current = genesis_site_layout( false );
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
		return '2000px';
	} elseif ( in_array( $current, $layouts['one-sidebar'], true ) ) {
		return '1023px';
	} else {
		return '767px';
	}

}

add_filter( 'genesiswooc_default_products_per_page', 'magazine_default_products_per_page' );
/**
 * Sets the default products per page value.
 *
 * @since 3.2.0
 *
 * @return int Number of products to show per page.
 */
function magazine_default_products_per_page() {
	return 8;
}

add_filter( 'woocommerce_pagination_args', 'magazine_woocommerce_pagination' );
/**
 * Updates the next and previous arrows to the default Genesis style.
 *
 * @since 3.2.0
 *
 * @param array $args The previous and next text strings.
 * @return array New next and previous text strings.
 */
function magazine_woocommerce_pagination( $args ) {

	$args['prev_text'] = sprintf( '&laquo; %s', __( 'Previous Page', 'magazine-pro' ) );
	$args['next_text'] = sprintf( '%s &raquo;', __( 'Next Page', 'magazine-pro' ) );

	return $args;

}

add_action( 'after_switch_theme', 'magazine_woocommerce_image_dimensions_after_theme_setup', 1 );
/**
 * Defines WooCommerce image sizes on theme activation.
 *
 * @since 3.2.0
 */
function magazine_woocommerce_image_dimensions_after_theme_setup() {

	global $pagenow;

	if ( ! isset( $_GET['activated'] ) || 'themes.php' !== $pagenow || ! class_exists( 'WooCommerce' ) ) { // phpcs:ignore WordPress.CSRF.NonceVerification.NoNonceVerification -- low risk, follows official snippet at https://goo.gl/nnHHQa.
		return;
	}

	magazine_update_woocommerce_image_dimensions();

}

add_action( 'activated_plugin', 'magazine_woocommerce_image_dimensions_after_woo_activation', 10, 2 );
/**
 * Defines the WooCommerce image sizes on WooCommerce activation.
 *
 * @since 3.2.0
 *
 * @param string $plugin The path of the plugin being activated.
 */
function magazine_woocommerce_image_dimensions_after_woo_activation( $plugin ) {

	// Checks to see if WooCommerce is being activated.
	if ( 'woocommerce/woocommerce.php' !== $plugin ) {
		return;
	}

	magazine_update_woocommerce_image_dimensions();

}

/**
 * Updates WooCommerce image dimensions.
 *
 * @since 3.2.0
 */
function magazine_update_woocommerce_image_dimensions() {

	// Updates image size options.
	update_option( 'woocommerce_single_image_width', 750 );    // Single product image.
	update_option( 'woocommerce_thumbnail_image_width', 540 ); // Catalog image.

	// Updates image cropping option.
	update_option( 'woocommerce_thumbnail_cropping', '1:1' );

}

add_filter( 'woocommerce_get_image_size_gallery_thumbnail', 'magazine_pro_gallery_image_thumbnail' );
/**
 * Filters the WooCommerce gallery image dimensions.
 *
 * @since 2.6.0
 *
 * @param array $size The gallery image size and crop arguments.
 * @return array The modified gallery image size and crop arguments.
 */
function magazine_pro_gallery_image_thumbnail( $size ) {
	$size = [
		'width'  => 180,
		'height' => 180,
		'crop'   => 1,
	];
	return $size;
}
