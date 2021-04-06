<?php
/**
 * Magazine Pro.
 *
 * This file adds the default theme settings to the Magazine Pro Theme.
 *
 * @package Magazine
 * @author  StudioPress
 * @license GPL-2.0-or-later
 * @link    https://my.studiopress.com/themes/magazine/
 */

add_filter( 'simple_social_default_styles', 'magazine_social_default_styles' );
/**
 * Sets Simple Social Icon defaults.
 *
 * @since 3.1.0
 *
 * @param array $defaults Social style defaults.
 * @return array Modified social style defaults.
 */
function magazine_social_default_styles( $defaults ) {

	$args = genesis_get_config( 'simple-social-icons-settings' );

	return wp_parse_args( $args, $defaults );

}
