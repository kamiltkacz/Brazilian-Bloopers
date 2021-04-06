<?php
/**
 * Magazine Pro.
 *
 * This file adds the required custom CSS to the Magazine Pro Theme's WooCommerce stylesheet.
 *
 * @package Magazine
 * @author  StudioPress
 * @license GPL-2.0-or-later
 * @link    https://my.studiopress.com/themes/magazine/
 */

add_filter( 'woocommerce_enqueue_styles', 'magazine_woocommerce_styles' );
/**
 * Enqueues the theme's custom WooCommerce styles to the WooCommerce plugin.
 *
 * @since 3.2.0
 *
 * @param array $enqueue_styles The WooCommerce styles to enqueue.
 * @return array Styles extended with additional WooCommerce CSS from the theme.
 */
function magazine_woocommerce_styles( $enqueue_styles ) {

	$enqueue_styles['magazine-woocommerce-styles'] = [
		'src'     => get_stylesheet_directory_uri() . '/lib/woocommerce/magazine-woocommerce.css',
		'deps'    => '',
		'version' => genesis_get_theme_version(),
		'media'   => 'screen',
	];

	return $enqueue_styles;

}

add_action( 'wp_enqueue_scripts', 'magazine_woocommerce_css' );
/**
 * Checks to see if there is a new value for the accent color, and if
 * so, print that value to the theme's WooCommerce stylesheet.
 *
 * @since 3.2.0
 */
function magazine_woocommerce_css() {

	// If WooCommerce isn't installed, exit early.
	if ( ! class_exists( 'WooCommerce' ) ) {
		return;
	}

	$appearance = genesis_get_config( 'appearance' );

	$color_link   = get_theme_mod( 'magazine_link_color', $appearance['default-colors']['link'] );
	$color_accent = get_theme_mod( 'magazine_accent_color', $appearance['default-colors']['accent'] );

	$woo_css = '';

	$woo_css .= ( $appearance['default-colors']['accent'] !== $color_accent ) ? sprintf(
		'
		.content .wc-block-grid__product-add-to-cart .wp-block-button__link.add_to_cart_button:focus,
		.content .wc-block-grid__product-add-to-cart .wp-block-button__link.add_to_cart_button:hover,
		.woocommerce a.button:focus,
		.woocommerce a.button:hover,
		.woocommerce a.button.alt:focus,
		.woocommerce a.button.alt:hover,
		.woocommerce button.button:focus,
		.woocommerce button.button:hover,
		.woocommerce button.button.alt:focus,
		.woocommerce button.button.alt:hover,
		.woocommerce input.button:focus,
		.woocommerce input.button:hover,
		.woocommerce input.button.alt:focus,
		.woocommerce input.button.alt:hover,
		.woocommerce input[type="submit"]:focus,
		.woocommerce input[type="submit"]:hover,
		.woocommerce span.onsale,
		.woocommerce #respond input#submit:focus,
		.woocommerce #respond input#submit:hover,
		.woocommerce #respond input#submit.alt:focus,
		.woocommerce #respond input#submit.alt:hover,
		.woocommerce-cart #payment input[type="submit"]:focus,
		.woocommerce-cart #payment input[type="submit"]:hover,
		.woocommerce-cart #payment .button:focus,
		.woocommerce-cart #payment .button:hover,
		.woocommerce-checkout #payment input[type="submit"]:focus,
		.woocommerce-checkout #payment input[type="submit"]:hover,
		.woocommerce-checkout #payment .button:focus,
		.woocommerce-checkout #payment .button:hover,
		#add_payment_method #payment input[type="submit"]:focus,
		#add_payment_method #payment input[type="submit"]:hover,
		#add_payment_method #payment .button:focus,
		#add_payment_method #payment .button:hover {
			background-color: %1$s;
			color: %2$s;
		}

		.woocommerce.widget_price_filter .ui-slider .ui-slider-handle,
		.woocommerce.widget_price_filter .ui-slider .ui-slider-range {
			background-color: %1$s;
		}

		ul.woocommerce-error,
		.woocommerce-error,
		.woocommerce-info,
		.woocommerce-message {
			border-top-color: %1$s;
		}

		',
		$color_accent,
		magazine_color_contrast( $color_accent )
	) : '';

	$woo_css .= ( $appearance['default-colors']['link'] !== $color_link ) ? sprintf(
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

		',
		$color_link
	) : '';

	if ( $woo_css ) {
		wp_add_inline_style( 'magazine-woocommerce-styles', $woo_css );
	}

}
