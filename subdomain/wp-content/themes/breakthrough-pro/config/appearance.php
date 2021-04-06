<?php
/**
 * Block Editor settings specific to Breakthrough Pro.
 *
 * @package Breakthrough Pro
 * @author  StudioPress
 * @license GPL-2.0-or-later
 * @link    https://www.studiopress.com/breakthrough/
 */

$breakthrough_default_colors = [
	'primary'   => '#4a4f9b',
	'secondary' => '#d2414b',
];

$breakthrough_primary_color = get_theme_mod(
	'breakthrough_primary_color',
	$breakthrough_default_colors['primary']
);

$breakthrough_secondary_color = get_theme_mod(
	'breakthrough_secondary_color',
	$breakthrough_default_colors['secondary']
);

$breakthrough_primary_color_contrast   = breakthrough_color_contrast( $breakthrough_primary_color );
$breakthrough_primary_color_brightness = breakthrough_color_brightness( $breakthrough_primary_color, 35 );
$breakthrough_secondary_color_contrast = breakthrough_color_contrast( $breakthrough_secondary_color );

return [
	'fonts-url'                => 'https://fonts.googleapis.com/css?family=Alegreya+Sans:400,400i,700|PT+Serif:400,400i,700,700i&display=swap',
	'content-width'            => 860,
	'primary-color'            => $breakthrough_primary_color,
	'primary-color-contrast'   => $breakthrough_primary_color_contrast,
	'primary-color-brightness' => $breakthrough_primary_color_brightness,
	'secondary-color'          => $breakthrough_secondary_color,
	'secondary-color-contrast' => $breakthrough_secondary_color_contrast,
	'default-colors'           => $breakthrough_default_colors,
	'editor-color-palette'     => [
		[
			'name'  => __( 'Color 1', 'breakthrough-pro' ),
			'slug'  => 'theme-primary',
			'color' => $breakthrough_primary_color,
		],
		[
			'name'  => __( 'Color 2', 'breakthrough-pro' ),
			'slug'  => 'theme-secondary',
			'color' => $breakthrough_secondary_color,
		],
	],
	'editor-font-sizes'        => [
		[
			'name' => __( 'Small', 'breakthrough-pro' ),
			'size' => 16,
			'slug' => 'small',
		],
		[
			'name' => __( 'Normal', 'breakthrough-pro' ),
			'size' => 20,
			'slug' => 'normal',
		],
		[
			'name' => __( 'Large', 'breakthrough-pro' ),
			'size' => 24,
			'slug' => 'large',
		],
		[
			'name' => __( 'Larger', 'breakthrough-pro' ),
			'size' => 28,
			'slug' => 'larger',
		],
	],
];
