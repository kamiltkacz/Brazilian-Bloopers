<?php
/**
 * Genesis Blocks layout and section registration.
 *
 * @package Navigation
 * @author  StudioPress
 * @license GPL-2.0-or-later
 * @link    https://my.studiopress.com/themes/navigation/
 */

add_action( 'init', 'navigation_genesis_blocks_layouts' );
/**
 * Adds Genesis Blocks sections and layouts.
 *
 * @since 1.0.0
 */
function navigation_genesis_blocks_layouts() {

	if ( ! function_exists( 'genesis_blocks_register_layout_component' ) ) {
		return;
	}

	$sections = genesis_get_config( 'genesis-blocks-sections' );
	$layouts  = genesis_get_config( 'genesis-blocks-layouts' );
	$combined = array_merge( $sections, $layouts );

	foreach ( $combined as $component ) {
		genesis_blocks_register_layout_component( $component );
	}

}
