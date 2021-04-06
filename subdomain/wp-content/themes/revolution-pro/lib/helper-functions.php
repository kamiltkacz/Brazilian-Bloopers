<?php
/**
 * Revolution Pro.
 *
 * This file adds the required helper functions used in the Revolution Pro Theme.
 *
 * @package Revolution Pro
 * @author  StudioPress
 * @license GPL-2.0-or-later
 * @link    https://my.studiopress.com/themes/revolution/
 */

/**
 * Gets default link color.
 * Abstracted here since at least two functions use it.
 *
 * @since 1.0.0
 *
 * @return string Hex color code for link color.
 */
function revolution_get_default_link_color() {

	return '#008080';

}

/**
 * Gets default accent color.
 * Abstracted here since at least two functions use it.
 *
 * @since 1.0.0
 *
 * @return string Hex color code for accent color.
 */
function revolution_get_default_accent_color() {

	return '#008080';

}

/**
 * Calculates if white or gray would contrast more with the provided color.
 *
 * @since 1.0.0
 *
 * @param string $color A color in hex format.
 * @return string The hex code for the most contrasting color: dark grey or white.
 */
function revolution_color_contrast( $color ) {

	$hexcolor = str_replace( '#', '', $color );
	$red      = hexdec( substr( $hexcolor, 0, 2 ) );
	$green    = hexdec( substr( $hexcolor, 2, 2 ) );
	$blue     = hexdec( substr( $hexcolor, 4, 2 ) );

	$luminosity = ( ( $red * 0.2126 ) + ( $green * 0.7152 ) + ( $blue * 0.0722 ) );

	return ( $luminosity > 128 ) ? '#000000' : '#ffffff';

}

/**
 * Generates a lighter or darker color from a starting color.
 * Used to generate complementary hover tints from user-chosen colors.
 *
 * @since 1.0.0
 *
 * @param string $color A color in hex format.
 * @param int    $change The amount to reduce or increase brightness by.
 * @return string Hex code for the adjusted color brightness.
 */
function revolution_color_brightness( $color, $change ) {

	$hexcolor = str_replace( '#', '', $color );

	$red   = hexdec( substr( $hexcolor, 0, 2 ) );
	$green = hexdec( substr( $hexcolor, 2, 2 ) );
	$blue  = hexdec( substr( $hexcolor, 4, 2 ) );

	$red   = max( 0, min( 255, $red + $change ) );
	$green = max( 0, min( 255, $green + $change ) );
	$blue  = max( 0, min( 255, $blue + $change ) );

	return '#' . dechex( $red ) . dechex( $green ) . dechex( $blue );

}

add_filter( 'body_class', 'revolution_maybe_add_menu_body_class' );
/**
 * Adds `has-one-menu` class if only one menu of the two available is set.
 *
 * @since 1.0.0
 *
 * @param array $classes Original body classes.
 * @return array Modified body classes.
 */
function revolution_maybe_add_menu_body_class( $classes ) {

	$menus = [ has_nav_menu( 'primary' ), has_nav_menu( 'secondary' ) ];

	if ( 1 === count( array_filter( $menus ) ) ) {
		$classes[] = 'has-one-menu';
	}

	return $classes;

}
