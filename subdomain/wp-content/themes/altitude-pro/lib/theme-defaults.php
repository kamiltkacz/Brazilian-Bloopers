<?php
/**
 * Altitude Pro.
 *
 * This file adds the default theme settings to the Altitude Pro Theme.
 *
 * @package Altitude Pro
 * @author  StudioPress
 * @license GPL-2.0-or-later
 * @link    https://my.studiopress.com/themes/altitude/
 */

add_filter( 'simple_social_default_styles', 'altitude_social_default_styles' );
/**
 * Sets Simple Social Icon defaults.
 *
 * @since 1.0.0
 *
 * @param array $defaults Social style defaults.
 * @return array Modified social style defaults.
 */
function altitude_social_default_styles( $defaults ) {

	$args = [
		'alignment'              => 'aligncenter',
		'background_color'       => '#000000',
		'background_color_hover' => '#222222',
		'border_radius'          => 4,
		'icon_color'             => '#ffffff',
		'icon_color_hover'       => '#ffffff',
		'size'                   => 40,
	];

	$args = wp_parse_args( $args, $defaults );

	return $args;

}
