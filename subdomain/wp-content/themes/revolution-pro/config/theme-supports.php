<?php
/**
 * Revolution Pro child theme.
 *
 * Theme supports.
 *
 * @package Revolution Pro
 * @author  StudioPress
 * @license GPL-2.0-or-later
 * @link    https://my.studiopress.com/themes/revolution/
 */

return [
	'genesis-custom-logo'             => [
		'height'      => 100,
		'width'       => 488,
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
	'genesis-footer-widgets'          => 2,
	'genesis-menus'                   => [
		'primary'   => __( 'Left Menu', 'revolution-pro' ),
		'secondary' => __( 'Right Menu', 'revolution-pro' ),
	],
];
