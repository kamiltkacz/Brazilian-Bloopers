<?php
/**
 * Block Editor settings specific to Monochrome Pro.
 *
 * @package Monochrome
 * @author  StudioPress
 * @license GPL-2.0-or-later
 * @link    https://my.studiopress.com/themes/monochrome/
 */

$monochrome_link_color              = get_theme_mod( 'monochrome_link_color', monochrome_customizer_get_default_link_color() );
$monochrome_accent_color            = get_theme_mod( 'monochrome_accent_color', monochrome_customizer_get_default_accent_color() );
$monochrome_accent_color_contrast   = monochrome_color_contrast( $monochrome_accent_color );
$monochrome_accent_color_brightness = monochrome_color_brightness( $monochrome_accent_color, 35 );

return [
	'admin-fonts-url'              => 'https://fonts.googleapis.com/css?family=Muli:300,300i,400,400i,600,600i|Open+Sans+Condensed:300',
	'content-width'                => 1200,
	'default-button-bg'            => $monochrome_accent_color,
	'default-button-color'         => $monochrome_accent_color_contrast,
	'default-button-outline-hover' => $monochrome_accent_color_brightness,
	'default-link-color'           => $monochrome_link_color,
	'default-accent-color'         => $monochrome_accent_color,
	'editor-color-palette'         => [
		[
			'name'  => __( 'Custom color', 'monochrome-pro' ),
			'slug'  => 'theme-primary',
			'color' => $monochrome_link_color,
		],
		[
			'name'  => __( 'Accent color', 'monochrome-pro' ),
			'slug'  => 'theme-secondary',
			'color' => $monochrome_accent_color,
		],
	],
	'editor-font-sizes'            => [
		[
			'name' => __( 'Small', 'monochrome-pro' ),
			'size' => 14,
			'slug' => 'small',
		],
		[
			'name' => __( 'Normal', 'monochrome-pro' ),
			'size' => 18,
			'slug' => 'normal',
		],
		[
			'name' => __( 'Large', 'monochrome-pro' ),
			'size' => 22,
			'slug' => 'large',
		],
		[
			'name' => __( 'Larger', 'monochrome-pro' ),
			'size' => 26,
			'slug' => 'larger',
		],
	],
];
