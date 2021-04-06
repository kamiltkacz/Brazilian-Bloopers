<?php
/**
 * Block Editor settings specific to Altitude Pro.
 *
 * @package Altitude Pro
 * @author  StudioPress
 * @license GPL-2.0-or-later
 * @link    https://my.studiopress.com/themes/altitude/
 */

$altitude_default_colors = [
	'primary'   => '#079bc4',
	'secondary' => '#079bc4',
];

$altitude_primary_color = get_theme_mod(
	'altitude_link_color',
	$altitude_default_colors['primary']
);

$altitude_secondary_color = get_theme_mod(
	'altitude_accent_color',
	$altitude_default_colors['secondary']
);

$altitude_primary_color_contrast   = altitude_color_contrast( $altitude_primary_color );
$altitude_primary_color_brightness = altitude_color_brightness( $altitude_primary_color, 35 );
$altitude_secondary_color_contrast = altitude_color_contrast( $altitude_secondary_color );

return [
	'fonts-url'                => 'https://fonts.googleapis.com/css?family=Ek+Mukta:200,800&display=swap',
	'content-width'            => 1060,
	'primary-color'            => $altitude_primary_color,
	'primary-color-contrast'   => $altitude_primary_color_contrast,
	'primary-color-brightness' => $altitude_primary_color_brightness,
	'secondary-color'          => $altitude_secondary_color,
	'secondary-color-contrast' => $altitude_secondary_color_contrast,
	'default-colors'           => $altitude_default_colors,
	'editor-color-palette'     => [
		[
			'name'  => __( 'Custom color', 'altitude-pro' ), // Called “Link Color” in the Customizer options.
			'slug'  => 'theme-primary',
			'color' => $altitude_primary_color,
		],
		[
			'name'  => __( 'Accent color', 'altitude-pro' ),
			'slug'  => 'theme-secondary',
			'color' => $altitude_secondary_color,
		],
	],
	'editor-font-sizes'        => [
		[
			'name' => __( 'Small', 'altitude-pro' ),
			'size' => 16,
			'slug' => 'small',
		],
		[
			'name' => __( 'Normal', 'altitude-pro' ),
			'size' => 20,
			'slug' => 'normal',
		],
		[
			'name' => __( 'Large', 'altitude-pro' ),
			'size' => 24,
			'slug' => 'large',
		],
		[
			'name' => __( 'Larger', 'altitude-pro' ),
			'size' => 28,
			'slug' => 'larger',
		],
	],
];
