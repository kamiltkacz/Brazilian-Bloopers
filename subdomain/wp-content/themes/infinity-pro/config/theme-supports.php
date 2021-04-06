<?php
/**
 * Infinity Pro.
 *
 * Theme supports.
 *
 * @package Infinity
 * @author  StudioPress
 * @license GPL-2.0-or-later
 * @link    https://my.studiopress.com/themes/infinity/
 */

return [
	'custom-header'                   => [
		'width'           => 400,
		'height'          => 130,
		'header-selector' => '.site-title a',
		'header-text'     => false,
		'flex-height'     => true,
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
		'rems',
	],
	'genesis-after-entry-widget-area' => '',
	'genesis-lazy-load-images'        => '',
	'genesis-footer-widgets'          => 3,
	'genesis-menus'                   => [
		'primary'   => __( 'Header Menu', 'infinity-pro' ),
		'secondary' => __( 'Footer Menu', 'infinity-pro' ),
	],
];
