<?php
/**
 * Block Editor settings specific to Magazine Pro.
 *
 * @package Magazine Pro
 * @author  StudioPress
 * @license GPL-2.0-or-later
 * @link    https://www.studiopress.com/magazine/
 */

$magazine_default_colors = [
	'link'   => '#008285',
	'accent' => '#008285',
];
$magazine_link_color     = get_theme_mod(
	'magazine_link_color',
	$magazine_default_colors['link']
);
$magazine_accent_color   = get_theme_mod(
	'magazine_accent_color',
	$magazine_default_colors['accent']
);

$magazine_color_contrast = [
	'link'   => magazine_color_contrast( $magazine_link_color ),
	'accent' => magazine_color_contrast( $magazine_accent_color ),
];

$magazine_color_brightness = [
	'link'   => magazine_color_brightness( $magazine_link_color, 35 ),
	'accent' => magazine_color_brightness( $magazine_accent_color, 35 ),
];

return [
	'fonts-url'            => 'https://fonts.googleapis.com/css?family=Roboto:300,400|Raleway:400,500,900',
	'content-width'        => 1340,
	'accent-color'         => $magazine_accent_color,
	'link-color'           => $magazine_link_color,
	'button-background'    => $magazine_accent_color,
	'button-text-color'    => $magazine_color_contrast['accent'],
	'button-outline-hover' => $magazine_color_brightness['accent'],
	'default-colors'       => $magazine_default_colors,
	'color-brightness'     => $magazine_color_brightness,
	'color-contrast'       => $magazine_color_contrast,
	'editor-color-palette' => [
		[
			'name'  => __( 'Custom color', 'magazine-pro' ), // Called “Link Color” in the Customizer options. Renamed because “Link Color” implies it can only be used for links.
			'slug'  => 'theme-primary',
			'color' => $magazine_link_color,
		],
		[
			'name'  => __( 'Accent color', 'magazine-pro' ),
			'slug'  => 'theme-secondary',
			'color' => $magazine_accent_color,
		],
	],
	'editor-font-sizes'    => [
		[
			'name' => __( 'Small', 'magazine-pro' ),
			'size' => 12,
			'slug' => 'small',
		],
		[
			'name' => __( 'Normal', 'magazine-pro' ),
			'size' => 16,
			'slug' => 'normal',
		],
		[
			'name' => __( 'Large', 'magazine-pro' ),
			'size' => 20,
			'slug' => 'large',
		],
		[
			'name' => __( 'Larger', 'magazine-pro' ),
			'size' => 24,
			'slug' => 'larger',
		],
	],
];
