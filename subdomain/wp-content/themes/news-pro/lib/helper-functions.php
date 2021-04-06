<?php
/**
 * News Pro.
 *
 * This defines the helper functions for use in the News Pro Theme.
 *
 * @package News
 * @author  StudioPress
 * @license GPL-2.0-or-later
 * @link    https://my.studiopress.com/themes/news/
 */

/**
 * Get default link color for Customizer.
 * Abstracted here since at least two functions use it.
 *
 * @since 3.2.0
 *
 * @return string Hex color code for link color.
 */
function news_customizer_get_default_link_color() {
	return '#db0000';
}

/**
 * Get default accent color for Customizer.
 * Abstracted here since at least two functions use it.
 *
 * @since 3.2.0
 *
 * @return string Hex color code for accent color.
 */
function news_customizer_get_default_accent_color() {
	return '#db0000';
}

/**
 * Calculates if white or black would contrast more with the provided color.
 *
 * @since 3.2.0
 *
 * @param string $color A color in hex format.
 * @return string The hex code for the most contrasting color: dark grey or white.
 */
function news_color_contrast( $color ) {

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
 * @since 3.2.0
 *
 * @param string $color A color in hex format.
 * @param int    $change The amount to reduce or increase brightness by.
 * @return string Hex code for the adjusted color brightness.
 */
function news_color_brightness( $color, $change ) {

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
 * Generates a lighter or darker color from a starting color.
 * Used to lighten or darken white or black complementary colors.
 *
 * @since 3.2.0
 *
 * @param string $color A color in hex format.
 * @return string Hex code for the adjusted color brightness.
 */
function news_change_brightness( $color ) {

	$hexcolor = str_replace( '#', '', $color );

	$red   = hexdec( substr( $hexcolor, 0, 2 ) );
	$green = hexdec( substr( $hexcolor, 2, 2 ) );
	$blue  = hexdec( substr( $hexcolor, 4, 2 ) );

	$luminosity = ( ( $red * 0.2126 ) + ( $green * 0.7152 ) + ( $blue * 0.0722 ) );

	return ( $luminosity > 128 ) ? news_color_brightness( '#000000', 20 ) : news_color_brightness( '#ffffff', -50 );

}
