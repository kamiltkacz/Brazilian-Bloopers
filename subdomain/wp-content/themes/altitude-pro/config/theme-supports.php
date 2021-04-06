<?php
/**
 * Altitude Pro theme supports.
 *
 * @package Altitude Pro
 * @author  StudioPress
 * @license GPL-2.0-or-later
 * @link    https://my.studiopress.com/themes/altitude-pro/
 */

return [
	'custom-header'                   => [
		'flex-height'     => true,
		'width'           => 720,
		'height'          => 152,
		'header-selector' => '.site-title a',
		'header-text'     => false,
	],
	'html5'                           => [
		'caption',
		'comment-form',
		'comment-list',
		'gallery',
		'search-form',
		'script',
		'style',
	],
	'genesis-accessibility'           => [
		'drop-down-menu',
		'headings',
		'search-form',
		'skip-links',
	],
	'genesis-after-entry-widget-area' => '',
	'genesis-footer-widgets'          => 1,
	'genesis-lazy-load-images'        => '',
	'genesis-menus'                   => [
		'secondary' => __( 'Before Header Menu', 'altitude-pro' ),
		'primary'   => __( 'Header Menu', 'altitude-pro' ),
		'footer'    => __( 'Footer Menu', 'altitude-pro' ),
	],
	'genesis-structural-wraps'        => [
		'header',
		'nav',
		'subnav',
		'footer-widgets',
		'footer',
	],
];
