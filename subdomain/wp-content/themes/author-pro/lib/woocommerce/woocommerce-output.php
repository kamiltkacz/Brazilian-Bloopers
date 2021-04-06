<?php
/**
 * Author Pro.
 *
 * This file adds the custom CSS to the Author Pro Theme's custom WooCommerce stylesheet.
 *
 * @package Author
 * @author  StudioPress
 * @license GPL-2.0+
 * @link    http://my.studiopress.com/themes/author/
 */

add_filter( 'woocommerce_enqueue_styles', 'author_woocommerce_styles' );
/**
 * Enqueues the theme's custom WooCommerce styles to the WooCommerce plugin.
 *
 * @since 1.2.0
 *
 * @param array $enqueue_styles The WooCommerce styles to enqueue.
 * @return array Required values for the theme's WooCommerce stylesheet.
 */
function author_woocommerce_styles( $enqueue_styles ) {

	$enqueue_styles['author-woocommerce-styles'] = [
		'src'     => get_stylesheet_directory_uri() . '/lib/woocommerce/author-woocommerce.css',
		'deps'    => '',
		'version' => CHILD_THEME_VERSION,
		'media'   => 'screen',
	];

	return $enqueue_styles;

}

add_action( 'wp_enqueue_scripts', 'author_woocommerce_css' );
/**
 * Adds the themes's custom CSS to the WooCommerce stylesheet.
 *
 * @since 1.2.0
 */
function author_woocommerce_css() {

	// If WooCommerce isn't installed, exit early.
	if ( ! class_exists( 'WooCommerce' ) ) {
		return;
	}

	$color_accent = get_theme_mod( 'author_accent_color', author_customizer_get_default_accent_color() );

	$woo_css = '';

	$woo_css .= ( author_customizer_get_default_accent_color() !== $color_accent ) ? sprintf(
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
		.woocommerce .widget_rating_filter ul li.chosen a::before,
		.woocommerce .widget_rating_filter ul li.chosen a::before,
		.woocommerce-error::before,
		.woocommerce-info::before,
		.woocommerce-message::before {
			color: %1$s;
		}

		.woocommerce span.onsale,
		.woocommerce.widget_price_filter .ui-slider .ui-slider-handle,
		.woocommerce.widget_price_filter .ui-slider .ui-slider-range {
			background-color: %1$s;
			color: %2$s;
		}

		ul.woocommerce-error,
		.woocommerce-error,
		.woocommerce-info,
		.woocommerce-message {
			border-top-color: %1$s;
		}

	',
		$color_accent,
		author_color_contrast( $color_accent )
	) : '';

	if ( $woo_css ) {
		wp_add_inline_style( 'author-woocommerce-styles', $woo_css );
	}

}
