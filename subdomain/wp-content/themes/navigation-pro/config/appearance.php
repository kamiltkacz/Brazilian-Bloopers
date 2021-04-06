<?php
/**
 * Block Editor settings specific to Navigation Pro.
 *
 * @package Navigation
 * @author  StudioPress
 * @license GPL-2.0-or-later
 * @link    https://my.studiopress.com/themes/navigation/
 */

$navigation_default_colors = [
	'primary'   => '#ce3a0d',
	'accent'    => '#351c4d',
	'cta-color' => '#554948',
	'footer'    => '#211b1a',
];

$navigation_primary_color = get_theme_mod(
	'navigation_primary_color',
	$navigation_default_colors['primary']
);

$navigation_accent_color = get_theme_mod(
	'navigation_accent_color',
	$navigation_default_colors['accent']
);

$navigation_footer_color = get_theme_mod(
	'navigation_footer_color',
	$navigation_default_colors['footer']
);

$navigation_cta_color = get_theme_mod(
	'navigation_cta_color',
	$navigation_default_colors['cta-color']
);

$navigation_color_contrast   = [
	'primary'   => navigation_color_contrast( $navigation_primary_color ),
	'accent'    => navigation_color_contrast( $navigation_accent_color ),
	'footer'    => navigation_color_contrast( $navigation_footer_color ),
	'cta-color' => navigation_color_contrast( $navigation_cta_color ),
];
$navigation_color_brightness = [
	'primary'   => navigation_color_brightness( $navigation_primary_color, 35 ),
	'accent'    => navigation_color_brightness( $navigation_accent_color, 35 ),
	'footer'    => navigation_color_brightness( $navigation_footer_color, 35 ),
	'cta-color' => navigation_color_brightness( $navigation_cta_color, 35 ),
];

return [
	'fonts-url'            => '//fonts.googleapis.com/css?family=Aleo:400,400i,700,700i|Montserrat:400,400i,700,700i&display=swap',
	'icons-url'            => get_stylesheet_directory_uri() . '/lib/css/ionicons.min.css',
	'content-width'        => 1200,
	'button-bg'            => $navigation_accent_color,
	'button-color'         => $navigation_color_contrast['accent'],
	'button-outline-hover' => $navigation_color_brightness['accent'],
	'primary-color'        => $navigation_primary_color,
	'default-colors'       => $navigation_default_colors,
	'color-brightness'     => $navigation_color_brightness,
	'color-contrast'       => $navigation_color_contrast,
	'cta-color'            => $navigation_cta_color,
	'footer'               => $navigation_footer_color,
	'editor-color-palette' => [
		[
			'name'  => __( 'Main color', 'navigation-pro' ),
			'slug'  => 'theme-primary',
			'color' => $navigation_primary_color,
		],
		[
			'name'  => __( 'Accent color', 'navigation-pro' ),
			'slug'  => 'theme-secondary',
			'color' => $navigation_accent_color,
		],
	],
	'editor-font-sizes'    => [
		[
			'name' => __( 'Small', 'navigation-pro' ),
			'size' => 14,
			'slug' => 'small',
		],
		[
			'name' => __( 'Normal', 'navigation-pro' ),
			'size' => 18,
			'slug' => 'normal',
		],
		[
			'name' => __( 'Large', 'navigation-pro' ),
			'size' => 22,
			'slug' => 'large',
		],
		[
			'name' => __( 'Larger', 'navigation-pro' ),
			'size' => 26,
			'slug' => 'larger',
		],
	],
];
