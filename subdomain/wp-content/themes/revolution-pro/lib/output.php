<?php
/**
 * Revolution Pro.
 *
 * This file adds the required CSS to the front end to the Revolution Pro Theme.
 *
 * @package Revolution Pro
 * @author  StudioPress
 * @license GPL-2.0-or-later
 * @link    https://my.studiopress.com/themes/revolution/
 */

add_action( 'wp_enqueue_scripts', 'revolution_css' );
/**
 * Checks the settings for the link color, and accent color.
 * If any of these value are set the appropriate CSS is output.
 *
 * @since 1.0.0
 */
function revolution_css() {

	$color_link   = get_theme_mod( 'revolution_link_color', revolution_get_default_link_color() );
	$color_accent = get_theme_mod( 'revolution_accent_color', revolution_get_default_accent_color() );
	$logo         = wp_get_attachment_image_src( get_theme_mod( 'custom_logo' ), 'full' );

	if ( $logo ) {
		$logo_height           = absint( $logo[2] );
		$logo_max_width        = get_theme_mod( 'revolution_logo_width', 244 );
		$logo_half_width       = $logo_max_width / 2;
		$logo_width            = absint( $logo[1] );
		$logo_ratio            = $logo_width / max( $logo_height, 1 );
		$logo_effective_height = min( $logo_width, $logo_max_width ) / max( $logo_ratio, 1 );
		$logo_padding          = max( 0, ( 50 - $logo_effective_height ) / 2 );
	}

	$css = '';

	$css .= ( revolution_get_default_link_color() !== $color_link ) ? sprintf(
		'

		a,
		.entry-title a:focus,
		.entry-title a:hover,
		.footer-widgets a:focus,
		.footer-widgets a:hover,
		.genesis-nav-menu a:focus,
		.genesis-nav-menu a:hover,
		.genesis-nav-menu .current-menu-item > a,
		.genesis-nav-menu .sub-menu .current-menu-item > a:focus,
		.genesis-nav-menu .sub-menu .current-menu-item > a:hover,
		.gs-faq__question:focus,
		.gs-faq__question:hover,
		.menu-toggle:focus,
		.menu-toggle:hover,
		.site-footer a:focus,
		.site-footer a:hover,
		.sub-menu-toggle:focus,
		.sub-menu-toggle:hover {
			color: %1$s;
		}

		',
		$color_link
	) : '';

	$css .= ( revolution_get_default_accent_color() !== $color_accent ) ? sprintf(
		'

		a.button,
		button,
		.button,
		.footer-widgets a.button,
		input[type="button"],
		input[type="reset"],
		input[type="submit"],
		input[type="reset"],
		input[type="submit"],
		.entry-content a.button,
		.entry-content a.button:focus,
		.entry-content a.button:hover,
		.widget a.button:focus,
		.widget a.button:hover,
		.site-container div.wpforms-container-full .wpforms-form button[type="submit"],
		.site-container div.wpforms-container-full .wpforms-form button[type="submit"]:hover,
		.site-container div.wpforms-container-full .wpforms-form input[type="submit"],
		.site-container div.wpforms-container-full .wpforms-form input[type="submit"]:hover {
			background-color: %1$s;
			color: %2$s;
		}
		',
		$color_accent,
		revolution_color_contrast( $color_accent )
	) : '';

	$css .= ( has_custom_logo() && ( 200 <= $logo_effective_height ) ) ?
		'
		.site-header,
		.shrink .site-header {
			box-shadow: none;
			position: static;
		}
		'
	: '';

	$css .= ( has_custom_logo() && ( 244 !== $logo_max_width ) ) ? sprintf(
		'
		.wp-custom-logo .site-container .title-area {
			max-width: %1$spx;
		}

		@media only screen and (min-width: 960px) {
			.wp-custom-logo .nav-primary,
			.wp-custom-logo .nav-secondary {
				width: calc((100%% / 2) - %2$spx);
			}

			.wp-custom-logo.has-one-menu .nav-primary,
			.wp-custom-logo.has-one-menu .nav-secondary {
				width: calc(100%% - %1$spx);
			}
		}
		',
		$logo_max_width,
		$logo_half_width
	) : '';

	// Places menu below logo and center logo once it gets big.
	$css .= ( has_custom_logo() && ( 400 <= $logo_max_width ) ) ?
		'
		.wp-custom-logo .title-area,
		.wp-custom-logo .menu-toggle,
		.wp-custom-logo .nav-primary,
		.wp-custom-logo .nav-secondary {
			float: none;
		}

		.wp-custom-logo .title-area,
		.wp-custom-logo .nav-primary,
		.wp-custom-logo .nav-secondary {
			width: 100%;
		}

		.wp-custom-logo .title-area {
			margin: 10px auto;
			text-align: center;
		}

		@media only screen and (min-width: 960px) {
			.wp-custom-logo .nav-primary,
			.wp-custom-logo .nav-secondary {
				margin: 10px auto;
				text-align: center;
			}

			.wp-custom-logo .nav-primary .sub-menu,
			.wp-custom-logo .nav-secondary .sub-menu {
				text-align: left;
			}
		}
		'
	: '';

	$css .= ( has_custom_logo() && $logo_padding && ( 1 < $logo_effective_height ) ) ? sprintf(
		'
		.wp-custom-logo .title-area {
			margin-top: %1$spx;
		}
		',
		$logo_padding + 5
	) : '';

	if ( $css ) {
		wp_add_inline_style( genesis_get_theme_handle(), $css );
	}

}
