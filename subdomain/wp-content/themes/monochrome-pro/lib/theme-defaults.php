<?php
/**
 * Monochrome Pro.
 *
 * This file adds the default theme settings to the Monochrome Pro Theme.
 *
 * @package Monochrome
 * @author  StudioPress
 * @license GPL-2.0-or-later
 * @link    https://my.studiopress.com/themes/monochrome/
 */

add_filter( 'simple_social_default_styles', 'monochrome_social_default_styles' );
/**
 * Updates Simple Social Icon settings on activation.
 *
 * @since 1.0.0
 *
 * @param array $defaults Default social icon settings.
 * @return array Modified social styles.
 */
function monochrome_social_default_styles( $defaults ) {

	$args = genesis_get_config( 'simple-social-icons-settings' );

	return wp_parse_args( $args, $defaults );

}
