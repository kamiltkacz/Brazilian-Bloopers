<?php
/**
 * Magazine Pro.
 *
 * This file adds theme helper functions for use elsewhere in Magazine Pro.
 *
 * @package Magazine
 * @author  StudioPress
 * @license GPL-2.0-or-later
 * @link    https://my.studiopress.com/themes/magazine/
 */

/**
 * Calculates if white or dark gray would contrast more with the provided color.
 *
 * @since 3.2.0
 *
 * @param string $color A color in hex format.
 * @return string The hex code for the most contrasting color: black or white.
 */
function magazine_color_contrast( $color ) {

	$hexcolor = str_replace( '#', '', $color );
	$red      = hexdec( substr( $hexcolor, 0, 2 ) );
	$green    = hexdec( substr( $hexcolor, 2, 2 ) );
	$blue     = hexdec( substr( $hexcolor, 4, 2 ) );

	$luminosity = ( ( $red * 0.2126 ) + ( $green * 0.7152 ) + ( $blue * 0.0722 ) );

	return ( $luminosity > 128 ) ? '#222222' : '#ffffff';

}

/**
 * Generates a lighter or darker color from a starting color.
 * Used to generate complementary hover tints from user-chosen colors.
 *
 * @since 3.4.0
 *
 * @param string $color A color in hex format.
 * @param int    $change The amount to reduce or increase brightness by.
 * @return string Hex code for the adjusted color brightness.
 */
function magazine_color_brightness( $color, $change ) {
	$hexcolor = str_replace( '#', '', $color );
	$red      = hexdec( substr( $hexcolor, 0, 2 ) );
	$green    = hexdec( substr( $hexcolor, 2, 2 ) );
	$blue     = hexdec( substr( $hexcolor, 4, 2 ) );
	$red      = max( 0, min( 255, $red + $change ) );
	$green    = max( 0, min( 255, $green + $change ) );
	$blue     = max( 0, min( 255, $blue + $change ) );
	return '#' . dechex( $red ) . dechex( $green ) . dechex( $blue );
}
