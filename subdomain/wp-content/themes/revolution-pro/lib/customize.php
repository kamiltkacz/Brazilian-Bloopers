<?php
/**
 * Revolution Pro.
 *
 * This file adds the Customizer additions to the Revolution Pro Theme.
 *
 * @package Revolution Pro
 * @author  StudioPress
 * @license GPL-2.0-or-later
 * @link    https://my.studiopress.com/themes/revolution/
 */

add_action( 'customize_register', 'revolution_customizer_register' );
/**
 * Registers settings and controls with the Customizer.
 *
 * @since 1.0.0
 *
 * @param WP_Customize_Manager $wp_customize Customizer object.
 */
function revolution_customizer_register( $wp_customize ) {

	$wp_customize->add_setting(
		'revolution_link_color',
		[
			'default'           => revolution_get_default_link_color(),
			'sanitize_callback' => 'sanitize_hex_color',
		]
	);

	$wp_customize->add_control(
		new WP_Customize_Color_Control(
			$wp_customize,
			'revolution_link_color',
			[
				'description' => __( 'Change the hover color of linked titles, menu items, footer links, and more.', 'revolution-pro' ),
				'label'       => __( 'Link Color', 'revolution-pro' ),
				'section'     => 'colors',
				'settings'    => 'revolution_link_color',
			]
		)
	);

	$wp_customize->add_setting(
		'revolution_accent_color',
		[
			'default'           => revolution_get_default_accent_color(),
			'sanitize_callback' => 'sanitize_hex_color',
		]
	);

	$wp_customize->add_control(
		new WP_Customize_Color_Control(
			$wp_customize,
			'revolution_accent_color',
			[
				'description' => __( 'Change the default color for buttons and submit buttons.', 'revolution-pro' ),
				'label'       => __( 'Accent Color', 'revolution-pro' ),
				'section'     => 'colors',
				'settings'    => 'revolution_accent_color',
			]
		)
	);

	$wp_customize->add_setting(
		'revolution_logo_width',
		[
			'default'           => 244,
			'sanitize_callback' => 'absint',
			'validate_callback' => 'revolution_validate_logo_width',
		]
	);

	// Adds a control for the logo size.
	$wp_customize->add_control(
		'revolution_logo_width',
		[
			'label'       => __( 'Logo Width', 'revolution-pro' ),
			'description' => __( 'The maximum width of the logo in pixels.', 'revolution-pro' ),
			'priority'    => 9,
			'section'     => 'title_tagline',
			'settings'    => 'revolution_logo_width',
			'type'        => 'number',
			'input_attrs' => [
				'min' => 100,
			],

		]
	);

}

/**
 * Displays a message if the entered width is not numeric or greater than 100.
 *
 * @param object $validity The validity status.
 * @param int    $width The width entered by the user.
 * @return int The new width.
 */
function revolution_validate_logo_width( $validity, $width ) {

	if ( empty( $width ) || ! is_numeric( $width ) ) {
		$validity->add( 'required', __( 'You must supply a valid number.', 'revolution-pro' ) );
	} elseif ( $width < 100 ) {
		$validity->add( 'logo_too_small', __( 'The logo width cannot be less than 100.', 'revolution-pro' ) );
	}

	return $validity;

}
