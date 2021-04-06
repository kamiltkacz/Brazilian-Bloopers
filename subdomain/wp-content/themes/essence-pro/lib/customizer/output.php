<?php
/**
 * Essence Pro.
 *
 * This file adds the required CSS to the front end to the Essence Pro Theme.
 *
 * @package Essence_Pro
 * @author  StudioPress
 * @license GPL-2.0-or-later
 * @link    https://my.studiopress.com/themes/essence/
 */

add_action( 'wp_enqueue_scripts', 'essence_css', 99 );
/**
 * Checks the settings for the link color and accent color.
 * If any of these value are set the appropriate CSS is output.
 *
 * @since 1.0.0
 */
function essence_css() {

	$color_link = get_theme_mod( 'essence_link_color', essence_customizer_get_default_link_color() );

	$intro_paragraph = get_theme_mod( 'essence-use-paragraph-styling', 1 );

	$css = '';

	$css .= ( $intro_paragraph ) ? sprintf(
		'

		.single .content .entry-content > p:first-of-type {
			font-size: 26px;
			letter-spacing: -0.7px;
		}

		'
	) : '';

	$css .= ( essence_customizer_get_default_link_color() !== $color_link ) ? sprintf(
		'

		a,
		h6,
		.gb-block-post-grid-title a:focus,
		.gb-block-post-grid-title a:hover,
		.entry-title a:focus,
		.entry-title a:hover,
		.menu-toggle:focus,
		.menu-toggle:hover,
		.off-screen-menu .genesis-nav-menu a:focus,
		.off-screen-menu .genesis-nav-menu a:hover,
		.off-screen-menu .current-menu-item > a,
		.sidebar .featured-content .entry-title a,
		.site-footer .current-menu-item > a,
		.site-footer .genesis-nav-menu a:focus,
		.site-footer .genesis-nav-menu a:hover,
		.sub-menu-toggle:focus,
		.sub-menu-toggle:hover {
			color: %1$s;
		}

		a.button.text,
		a.more-link.button.text,
		button.text,
		input[type="button"].text,
		input[type="reset"].text,
		input[type="submit"].text,
		.gb-block-post-grid a.gb-block-post-grid-more-link,
		.more-link,
		.pagination a:focus,
		.pagination a:hover,
		.pagination .active a {
			border-color: %1$s;
			color: %1$s;
		}

		button,
		input[type="button"],
		input[type="reset"],
		input[type="submit"],
		.footer-cta::before,
		.button,
		.error404 .site-inner::before,
		.page .site-inner::before,
		.sidebar .enews-widget input[type="submit"],
		.single .site-inner::before,
		.site-container div.wpforms-container-full .wpforms-form input[type="submit"],
		.site-container div.wpforms-container-full .wpforms-form button[type="submit"]	{
			background-color: %1$s;
			color: %2$s;
		}

		@media only screen and (max-width: 1023px) {
			.genesis-responsive-menu .genesis-nav-menu a:focus,
			.genesis-responsive-menu .genesis-nav-menu a:hover {
				color: %1$s;
			}
		}

		',
		$color_link,
		essence_color_contrast( $color_link )
	) : '';

	if ( $css ) {
		wp_add_inline_style( genesis_get_theme_handle(), $css );
	}

}
