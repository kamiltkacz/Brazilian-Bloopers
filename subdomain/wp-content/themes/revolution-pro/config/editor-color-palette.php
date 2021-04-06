<?php
/**
 * Revolution Pro child theme editor color palette.
 *
 * @package Revolution Pro
 * @author  StudioPress
 * @license GPL-2.0-or-later
 * @link    https://my.studiopress.com/themes/revolution/
 */

/**
 * Editor color palette config.
 */
return [
	[
		'name'  => __( 'Custom color', 'revolution-pro' ), // Called “Link Color” in the Customizer options. Renamed because “Link Color” implies it can only be used for links.
		'slug'  => 'theme-primary',
		'color' => get_theme_mod( 'revolution_link_color', revolution_get_default_link_color() ),
	],
	[
		'name'  => __( 'Accent color', 'revolution-pro' ),
		'slug'  => 'theme-secondary',
		'color' => get_theme_mod( 'revolution_accent_color', revolution_get_default_accent_color() ),
	],
];
