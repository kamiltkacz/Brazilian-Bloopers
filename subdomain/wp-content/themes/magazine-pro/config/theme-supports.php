<?php
/**
 * Magazine Pro.
 *
 * Theme supports.
 *
 * @package Magazine
 * @author  StudioPress
 * @license GPL-2.0-or-later
 * @link    https://my.studiopress.com/themes/magazine/
 */

return [
	'genesis-custom-logo'             => [
		'height'      => 180,
		'width'       => 760,
		'flex-height' => true,
		'flex-width'  => true,
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
	'genesis-lazy-load-images'        => '',
	'genesis-footer-widgets'          => 3,
	'genesis-menus'                   => [
		'primary'   => __( 'Before Header Menu', 'magazine-pro' ),
		'secondary' => __( 'After Header Menu', 'magazine-pro' ),
	],
];
