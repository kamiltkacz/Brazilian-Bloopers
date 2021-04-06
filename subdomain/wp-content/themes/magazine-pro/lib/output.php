<?php
/**
 * Magazine Pro.
 *
 * This file adds the required custom CSS to the Magazine Pro Theme.
 *
 * @package Magazine
 * @author  StudioPress
 * @license GPL-2.0-or-later
 * @link    https://my.studiopress.com/themes/magazine/
 */

add_action( 'wp_enqueue_scripts', 'magazine_custom_css' );
/**
 * Checks to see if there is a new value for the accent color, and if
 * so, print that value to the theme's main stylesheet.
 *
 * @since 3.2.0
 */
function magazine_custom_css() {

	$appearance = genesis_get_config( 'appearance' );

	$color_link   = get_theme_mod( 'magazine_link_color', $appearance['default-colors']['link'] );
	$color_accent = get_theme_mod( 'magazine_accent_color', $appearance['default-colors']['accent'] );
	$logo         = wp_get_attachment_image_src( get_theme_mod( 'custom_logo' ), 'full' );

	if ( $logo ) {
		$logo_max_width = get_theme_mod( 'magazine_logo_width', 380 );
	}

	$css = '';

	$css .= ( $appearance['default-colors']['accent'] !== $color_accent ) ? sprintf(
		'

		button:focus,
		button:hover,
		input[type="button"]:focus,
		input[type="button"]:hover,
		input[type="reset"]:focus,
		input[type="reset"]:hover,
		input[type="submit"]:focus,
		input[type="submit"]:hover,
		.archive-pagination li a:focus,
		.archive-pagination li a:hover,
		.archive-pagination li.active a,
		.button:focus,
		.button:hover,
		.entry-content .button:focus,
		.entry-content .button:hover,
		.sidebar .tagcloud a:focus,
		.sidebar .tagcloud a:hover,
		.sidebar .widget a.button:focus,
		.sidebar .widget a.button:hover,
		.site-container div.wpforms-container-full .wpforms-form input[type="submit"]:focus,
		.site-container div.wpforms-container-full .wpforms-form input[type="submit"]:hover,
		.site-container div.wpforms-container-full .wpforms-form button[type="submit"]:focus,
		.site-container div.wpforms-container-full .wpforms-form button[type="submit"]:hover,
		.widget-area .enews-widget input[type="submit"] {
			background-color: %1$s;
			color: %2$s;
		}

		',
		$color_accent,
		$appearance['color-contrast']['accent']
	) : '';

	$css .= ( $appearance['default-colors']['link'] !== $color_link ) ? sprintf(
		'

		a,
		.entry-title a:focus,
		.entry-title a:hover,
		.nav-secondary .genesis-nav-menu a:focus,
		.nav-secondary .genesis-nav-menu a:hover,
		.nav-secondary .genesis-nav-menu .current-menu-item > a,
		.nav-secondary .genesis-nav-menu .sub-menu .current-menu-item > a:focus,
		.nav-secondary .genesis-nav-menu .sub-menu .current-menu-item > a:hover {
			color: %1$s;
		}
		',
		$color_link
	) : '';

	$css .= ( has_custom_logo() ) ? sprintf(
		'
		.custom-logo-link,
		.wp-custom-logo .title-area {
			max-width: %1$spx;
		}

		.wp-custom-logo .header-widget-area {
			max-width: calc(99%% - %1$spx);
		}
		',
		$logo_max_width
	) : '';

	// Place widget below logo and center once it gets big.
	$css .= ( has_custom_logo() && ( 500 <= $logo_max_width ) ) ? sprintf(
		'
		.site-header .search-form,
		.wp-custom-logo .site-header .widget-area,
		.wp-custom-logo .title-area {
			float: none;
			margin: 0 auto;
			text-align: center;
		}

		.wp-custom-logo .site-header .widget-area {
			margin-top: 20px;
			max-width: 100%;
		}

		.site-header .search-form {
			max-width: %1$spx;
		}
		',
		$logo_max_width
	) : '';

	if ( $css ) {
		wp_add_inline_style( genesis_get_theme_handle(), $css );
	}

}
