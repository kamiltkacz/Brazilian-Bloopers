<?php
/**
 * Altitude Pro.
 *
 * This file adds the required WooCommerce CSS to the frontend
 * when the Altitude Pro Theme is customized.
 *
 * @package Altitude Pro
 * @author  StudioPress
 * @license GPL-2.0-or-later
 * @link    https://my.studiopress.com/themes/altitude/
 */

add_filter( 'woocommerce_enqueue_styles', 'altitude_woocommerce_styles' );
/**
 * Enqueues the theme's custom WooCommerce styles for the WooCommerce plugin.
 *
 * @since 1.1.0
 *
 * @param array $enqueue_styles The WooCommerce styles to enqueue.
 * @return array Styles extended with additional WooCommerce CSS from the theme.
 */
function altitude_woocommerce_styles( $enqueue_styles ) {

	$enqueue_styles[ genesis_get_theme_handle() . '-woocommerce-styles' ] = [
		'src'     => get_stylesheet_directory_uri() . '/lib/woocommerce/altitude-woocommerce.css',
		'deps'    => '',
		'version' => genesis_get_theme_version(),
		'media'   => 'screen',
	];

	return $enqueue_styles;

}

add_action( 'wp_enqueue_scripts', 'altitude_woocommerce_css' );
/**
 * Add the theme's custom inline WooCommerce CSS.
 *
 * @since 1.1.0
 */
function altitude_woocommerce_css() {

	// If WooCommerce isn't installed, exit early.
	if ( ! class_exists( 'WooCommerce' ) ) {
		return;
	}

	$appearance = genesis_get_config( 'appearance' );

	$primary_color = get_theme_mod( 'altitude_link_color', $appearance['default-colors']['primary'] );

	$woo_css = ( $appearance['default-colors']['primary'] !== $primary_color ) ? sprintf(
		'

		.woocommerce div.product p.price,
		.woocommerce div.product span.price,
		.woocommerce div.product .woocommerce-tabs ul.tabs li a:focus,
		.woocommerce div.product .woocommerce-tabs ul.tabs li a:hover,
		.woocommerce ul.products li.product h3:hover,
		.woocommerce ul.products li.product .price,
		.woocommerce .widget_layered_nav ul li.chosen a::before,
		.woocommerce .widget_layered_nav_filters ul li a::before,
		.woocommerce .woocommerce-breadcrumb a:focus,
		.woocommerce .woocommerce-breadcrumb a:hover,
		.woocommerce-error::before,
		.woocommerce-info::before,
		.woocommerce-message::before {
			color: %1$s;
		}

		.woocommerce a.button,
		.woocommerce a.button.alt,
		.woocommerce button.button,
		.woocommerce button.button.alt,
		.woocommerce input.button,
		.woocommerce input.button.alt,
		.woocommerce input.button[type="submit"],
		.woocommerce span.onsale,
		.woocommerce.widget_price_filter .ui-slider .ui-slider-handle,
		.woocommerce.widget_price_filter .ui-slider .ui-slider-range,
		.woocommerce #respond input#submit,
		.woocommerce #respond input#submit.alt {
			background-color: %1$s;
			color: %2$s;
		}

		.woocommerce a.button,
		.woocommerce a.button.alt,
		.woocommerce button.button,
		.woocommerce button.button.alt,
		.woocommerce input.button,
		.woocommerce input.button.alt,
		.woocommerce input.button[type="submit"],
		.woocommerce #respond input#submit,
		.woocommerce #respond input#submit.alt {
			border-color: %1$s;
		}

		ul.woocommerce-error,
		.woocommerce-error,
		.woocommerce-info,
		.woocommerce-message {
			border-top-color: %1$s;
		}

		',
		$primary_color,
		altitude_color_contrast( $primary_color )
	) : '';

	if ( $woo_css ) {
		wp_add_inline_style( genesis_get_theme_handle() . '-woocommerce-styles', $woo_css );
	}

}
