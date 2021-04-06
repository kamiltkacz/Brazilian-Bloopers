<?php
/**
 * Author Pro.
 *
 * This defines the helper functions for use in the Author Pro Theme.
 *
 * @package Author
 * @author  StudioPress
 * @license GPL-2.0+
 * @link    http://my.studiopress.com/themes/author/
 */

/**
 * Gets the default header color for the Customizer.
 * Abstracted here since at least two functions use it.
 *
 * @since 1.0.0
 *
 * @return string Hex color code for header color.
 */
function author_customizer_get_default_header_color() {
	return '#7a8690';
}

/**
 * Gets the default light color for the Customizer.
 * Abstracted here since at least two functions use it.
 *
 * @since 1.0.0
 *
 * @return string Hex color code for light color.
 */
function author_customizer_get_default_light_color() {
	return '#e1e9ee';
}

/**
 * Gets the default dark color for the Customizer.
 * Abstracted here since at least two functions use it.
 *
 * @since 1.0.0
 *
 * @return string Hex color code for dark color.
 */
function author_customizer_get_default_dark_color() {
	return '#181c1e';
}

/**
 * Gets the default accent color for the Customizer.
 * Abstracted here since at least two functions use it.
 *
 * @since 1.0.0
 *
 * @return string Hex color code for accent color.
 */
function author_customizer_get_default_accent_color() {
	return '#0085da';
}

/**
 * Calculates if white or black would contrast more with the provided color.
 *
 * @since 1.2.0
 *
 * @param string $color A color in hex format.
 * @return string The hex code for the most contrasting color: black or white.
 */
function author_color_contrast( $color ) {

	$hexcolor = str_replace( '#', '', $color );

	$red   = hexdec( substr( $hexcolor, 0, 2 ) );
	$green = hexdec( substr( $hexcolor, 2, 2 ) );
	$blue  = hexdec( substr( $hexcolor, 4, 2 ) );

	$luminosity = ( ( $red * 0.2126 ) + ( $green * 0.7152 ) + ( $blue * 0.0722 ) );

	return ( $luminosity > 128 ) ? '#000000' : '#ffffff';

}

/**
 * Generates a lighter or darker color from a starting color.
 * Used to generate complementary hover tints from user-chosen colors.
 *
 * @since 1.2.0
 *
 * @param string $color A color in hex format.
 * @param int    $change The amount to reduce or increase brightness by.
 * @return string Hex code for the adjusted color brightness.
 */
function author_color_brightness( $color, $change ) {

	$hexcolor = str_replace( '#', '', $color );

	$red   = hexdec( substr( $hexcolor, 0, 2 ) );
	$green = hexdec( substr( $hexcolor, 2, 2 ) );
	$blue  = hexdec( substr( $hexcolor, 4, 2 ) );

	$red   = max( 0, min( 255, $red + $change ) );
	$green = max( 0, min( 255, $green + $change ) );
	$blue  = max( 0, min( 255, $blue + $change ) );

	return '#' . dechex( $red ) . dechex( $green ) . dechex( $blue );

}

/**
 * Changes color brightness to generate hover colors based on the input color.
 *
 * @since 1.2.0
 *
 * @param string $color A color in hex format.
 * @return string The lighter or darker color.
 */
function author_change_brightness( $color ) {

	$hexcolor = str_replace( '#', '', $color );

	$red   = hexdec( substr( $hexcolor, 0, 2 ) );
	$green = hexdec( substr( $hexcolor, 2, 2 ) );
	$blue  = hexdec( substr( $hexcolor, 4, 2 ) );

	$luminosity = ( ( $red * 0.2126 ) + ( $green * 0.7152 ) + ( $blue * 0.0722 ) );

	return ( $luminosity > 128 ) ? author_color_brightness( '#000000', 50 ) : author_color_brightness( '#ffffff', -30 );

}
