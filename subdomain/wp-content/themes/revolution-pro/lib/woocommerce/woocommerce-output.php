<?php
/**
 * Revolution Pro.
 *
 * This file adds the WooCommerce styles and the Customizer additions for WooCommerce to the Revolution Pro Theme.
 *
 * @package Revolution Pro
 * @author  StudioPress
 * @license GPL-2.0-or-later
 * @link    https://my.studiopress.com/themes/revolution/
 */

add_filter( 'woocommerce_enqueue_styles', 'revolution_woocommerce_styles' );
/**
 * Enqueues the theme's custom WooCommerce styles to the WooCommerce plugin.
 *
 * @since 1.0.0
 *
 * @param array $enqueue_styles The WooCommerce styles to enqueue.
 * @return array Modified WooCommerce styles to enqueue.
 */
function revolution_woocommerce_styles( $enqueue_styles ) {

	$enqueue_styles[ genesis_get_theme_handle() . '-woocommerce-styles' ] = [
		'src'     => CHILD_URL . '/lib/woocommerce/revolution-woocommerce.css',
		'deps'    => '',
		'version' => genesis_get_theme_version(),
		'media'   => 'screen',
	];

	return $enqueue_styles;

}

add_action( 'wp_enqueue_scripts', 'revolution_woocommerce_css' );
/**
 * Adds the theme's custom CSS to the WooCommerce stylesheet.
 *
 * @since 1.0.0
 *
 * @return string CSS to be outputted after the theme's custom WooCommerce stylesheet.
 */
function revolution_woocommerce_css() {

	// If WooCommerce isn't active, exit early.
	if ( ! class_exists( 'WooCommerce' ) ) {
		return;
	}

	$color_link   = get_theme_mod( 'revolution_link_color', revolution_get_default_link_color() );
	$color_accent = get_theme_mod( 'revolution_accent_color', revolution_get_default_accent_color() );

	$woo_css = '';

	$woo_css .= ( revolution_get_default_link_color() !== $color_link ) ? sprintf(
		'

		.woocommerce div.product p.price,
		.woocommerce div.product span.price,
		.woocommerce div.product .woocommerce-tabs ul.tabs li a:hover,
		.woocommerce div.product .woocommerce-tabs ul.tabs li a:focus,
		.woocommerce ul.products li.product h3:hover,
		.woocommerce ul.products li.product .price,
		.woocommerce .woocommerce-breadcrumb a:hover,
		.woocommerce .woocommerce-breadcrumb a:focus,
		.woocommerce .widget_layered_nav ul li.chosen a::before,
		.woocommerce .widget_layered_nav_filters ul li a::before,
		.woocommerce .widget_rating_filter ul li.chosen a::before {
			color: %s;
		}

	',
		$color_link
	) : '';

	$woo_css .= ( revolution_get_default_accent_color() !== $color_accent ) ? sprintf(
		'
		.woocommerce a.button,
		.woocommerce a.button:focus,
		.woocommerce a.button:hover,
		.woocommerce a.button.alt,
		.woocommerce a.button.alt:focus,
		.woocommerce a.button.alt:hover,
		.woocommerce button.button,
		.woocommerce button.button:focus,
		.woocommerce button.button:hover,
		.woocommerce button.button.alt,
		.woocommerce button.button.alt:focus,
		.woocommerce button.button.alt:hover,
		.woocommerce input.button,
		.woocommerce input.button:focus,
		.woocommerce input.button:hover,
		.woocommerce input.button.alt,
		.woocommerce input.button.alt:focus,
		.woocommerce input.button.alt:hover,
		.woocommerce input[type="submit"],
		.woocommerce input[type="submit"]:focus,
		.woocommerce input[type="submit"]:hover,
		.woocommerce span.onsale,
		.woocommerce ul.products li.product a.button:focus,
		.woocommerce ul.products li.product a.button:hover,
		.woocommerce #respond input#submit,
		.woocommerce #respond input#submit:focus,
		.woocommerce #respond input#submit:hover,
		.woocommerce #respond input#submit.alt,
		.woocommerce #respond input#submit.alt:focus,
		.woocommerce #respond input#submit.alt:hover,
		.woocommerce.widget_price_filter .ui-slider .ui-slider-handle,
		.woocommerce.widget_price_filter .ui-slider .ui-slider-range {
			background-color: %1$s;
			color: %2$s;
		}

		.woocommerce-info,
		.woocommerce-message {
			border-top-color: %1$s;
		}

		.woocommerce-info::before,
		.woocommerce-message::before {
			color: %1$s;
		}

	',
		$color_accent,
		revolution_color_contrast( $color_accent )
	) : '';

	if ( $woo_css ) {
		wp_add_inline_style( genesis_get_theme_handle() . '-woocommerce-styles', $woo_css );
	}

}
