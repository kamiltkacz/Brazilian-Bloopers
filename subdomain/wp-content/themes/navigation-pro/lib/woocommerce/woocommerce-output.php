<?php
/**
 * Navigation Pro.
 *
 * This file adds the WooCommerce styles and the custom CSS to the Navigation Pro Theme's custom WooCommerce stylesheet.
 *
 * @package Navigation
 * @author  StudioPress
 * @license GPL-2.0-or-later
 * @link    https://my.studiopress.com/themes/navigation/
 */

add_filter( 'woocommerce_enqueue_styles', 'navigation_woocommerce_styles' );
/**
 * Enqueues the theme's custom WooCommerce styles for the WooCommerce plugin.
 *
 * @since 1.1.0
 *
 * @param array $enqueue_styles The WooCommerce styles to enqueue.
 * @return array Styles extended with additional WooCommerce CSS from the theme.
 */
function navigation_woocommerce_styles( $enqueue_styles ) {

	$enqueue_styles[ genesis_get_theme_handle() . '-woocommerce-styles' ] = [
		'src'     => get_stylesheet_directory_uri() . '/lib/woocommerce/navigation-woocommerce.css',
		'deps'    => '',
		'version' => genesis_get_theme_version(),
		'media'   => 'screen',
	];

	return $enqueue_styles;

}

add_action( 'wp_enqueue_scripts', 'navigation_woocommerce_css' );
/**
 * Adds the theme's custom CSS to the WooCommerce stylesheet.
 *
 * @since 1.1.0
 */
function navigation_woocommerce_css() {

	// If WooCommerce isn't active, exit early.
	if ( ! class_exists( 'WooCommerce' ) ) {
		return;
	}

	$appearance = genesis_get_config( 'appearance' );

	$color_primary = get_theme_mod( 'navigation_primary_color', $appearance['default-colors']['primary'] );
	$color_accent  = get_theme_mod( 'navigation_accent_color', $appearance['default-colors']['accent'] );

	$woo_css = '';

	$woo_css .= ( $appearance['default-colors']['primary'] !== $color_primary ) ? sprintf(
		'

		.wc-block-grid__product-title:focus,
		.wc-block-grid__product-title:hover,
		.wc-block-grid__product-price.price,
		.woocommerce div.product p.price,
		.woocommerce div.product span.price,
		.woocommerce div.product .woocommerce-tabs ul.tabs li a:focus,
		.woocommerce div.product .woocommerce-tabs ul.tabs li a:hover,
		.woocommerce ul.products li.product h2:hover,
		.woocommerce ul.products li.product h3:hover,
		.woocommerce ul.products li.product .price,
		.woocommerce .woocommerce-breadcrumb a:focus,
		.woocommerce .woocommerce-breadcrumb a:hover,
		.woocommerce .widget_layered_nav ul li.chosen a::before,
		.woocommerce .widget_layered_nav_filters ul li a::before,
		.woocommerce .widget_rating_filter ul li.chosen a::before,
		.woocommerce .widget_rating_filter ul li.chosen a::before,
		.woocommerce-error::before,
		.woocommerce-info::before,
		.woocommerce-message::before {
			color: %1$s;
		}

		.content .wc-block-grid__product-add-to-cart .wp-block-button__link.add_to_cart_button,
		.content .wc-block-grid__product-add-to-cart .wp-block-button__link.add_to_cart_button:focus,
		.content .wc-block-grid__product-add-to-cart .wp-block-button__link.add_to_cart_button:hover,
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
		.woocommerce input.button[type="submit"],
		.woocommerce input[type="submit"]:focus,
		.woocommerce input[type="submit"]:hover,
		.woocommerce nav.woocommerce-pagination ul li a:focus,
		.woocommerce nav.woocommerce-pagination ul li a:hover,
		.woocommerce nav.woocommerce-pagination ul li span.current,
		.woocommerce span.onsale,
		.woocommerce #respond input#submit,
		.woocommerce #respond input#submit:focus,
		.woocommerce #respond input#submit:hover,
		.woocommerce #respond input#submit.alt,
		.woocommerce #respond input#submit.alt:focus,
		.woocommerce #respond input#submit.alt:hover,
		.woocommerce .before-footer-cta button:focus,
		.woocommerce .before-footer-cta button:hover,
		.woocommerce .before-footer-cta input[type="button"]:focus,
		.woocommerce .before-footer-cta input[type="button"]:hover,
		.woocommerce .before-footer-cta input[type="reset"]:focus,
		.woocommerce .before-footer-cta input[type="reset"]:hover,
		.woocommerce .before-footer-cta input[type="submit"]:focus,
		.woocommerce .before-footer-cta input[type="submit"]:hover,
		.woocommerce .before-footer-cta .button:focus,
		.woocommerce .before-footer-cta .button:hover,
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
		$color_primary,
		$appearance['color-contrast']['primary']
	) : '';

	if ( $woo_css ) {
		wp_add_inline_style( genesis_get_theme_handle() . '-woocommerce-styles', $woo_css );
	}

}
