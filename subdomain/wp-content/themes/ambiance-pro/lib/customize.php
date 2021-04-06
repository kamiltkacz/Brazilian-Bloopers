<?php
/**
 * Customizer additions.
 *
 * @package Ambiance Pro
 * @author  StudioPress
 * @license GPL-2.0+
 * @link    http://my.studiopress.com/themes/ambiance/
 */
 
/**
 * Get default accent color for Customizer.
 *
 * Abstracted here since at least two functions use it.
 *
 * @since 1.1.3
 *
 * @return string Hex color code for accent color.
 */
function ambiance_customizer_get_default_accent_color() {
	return '#e12727';
}

add_action( 'customize_register', 'ambiance_customizer_register' );
/**
 * Register settings and controls with the Customizer.
 *
 * @since 1.1.3
 * 
 * @param WP_Customize_Manager $wp_customize Customizer object.
 */
function ambiance_customizer_register() {

	global $wp_customize;
	
	$wp_customize->add_setting(
		'ambiance_accent_color',
		array(
			'default' => ambiance_customizer_get_default_accent_color(),
			'sanitize_callback' => 'sanitize_hex_color',
		)
	);

	$wp_customize->add_control(
		new WP_Customize_Color_Control(
			$wp_customize,
			'ambiance_accent_color',
			array(
			    'label'    => __( 'Accent Color', 'ambiance' ),
				'description' => __( 'Change the default accent color for links and buttons.', 'ambiance' ),
			    'section'  => 'colors',
			    'settings' => 'ambiance_accent_color',
			)
		)
	);

}

add_action( 'wp_enqueue_scripts', 'ambiance_css' );
/**
* Checks the settings for the accent color, highlight color, and header
* If any of these value are set the appropriate CSS is output
*
* @since 1.1.3
*/
function ambiance_css() {

	$handle  = defined( 'CHILD_THEME_NAME' ) && CHILD_THEME_NAME ? sanitize_title_with_dashes( CHILD_THEME_NAME ) : 'child-theme';

	$color = get_theme_mod( 'ambiance_accent_color', ambiance_customizer_get_default_accent_color() );

	$css = '';

	$css .= ( ambiance_customizer_get_default_accent_color() !== $color ) ? sprintf( '
		a,
		.adjacent-entry-pagination a:hover,
		.archive-pagination li a:hover,
		.archive-pagination .active a,
		.entry-header .entry-meta a:hover,
		.entry-title a:hover,
		.genesis-nav-menu .sub-menu a:hover,
		.pagination a:hover {
			color: %1$s;
		}

		button:hover,
		input:hover[type="button"],
		input:hover[type="reset"],
		input:hover[type="submit"],
		.button:hover {
			background-color: %1$s;
		}
		', $color ) : '';

	if( $css ){
		wp_add_inline_style( $handle, $css );
	}

}
