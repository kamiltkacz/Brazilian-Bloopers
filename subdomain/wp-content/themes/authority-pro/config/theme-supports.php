<?php
/**
 * Authority Pro html5 support.
 *
 * Theme Supports.
 *
 * @package Authority
 * @author  StudioPress
 * @license GPL-2.0-or-later
 * @link    https://my.studiopress.com/themes/authority/
 */

return [
	'genesis-custom-logo'             => [
		'height'      => 160,
		'width'       => 600,
		'flex-height' => true,
		'flex-width'  => true,
	],
	'html5'                           => [
		'caption',
		'comment-form',
		'comment-list',
		'gallery',
		'navigation-widgets',
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
	'genesis-menus'                   => [
		'primary'   => __( 'Header Menu', 'authority-pro' ),
		'secondary' => __( 'Footer Menu', 'authority-pro' ),
		'social'    => __( 'Social Menu', 'authority-pro' ),
	],
];
