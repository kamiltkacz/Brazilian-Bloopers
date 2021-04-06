<?php
/**
 * Magazine Pro.
 *
 * This file adds options to the Customizer for customizing the Magainze Pro Theme.
 *
 * @package Magazine
 * @author  StudioPress
 * @license GPL-2.0-or-later
 * @link    https://my.studiopress.com/themes/magazine/
 */

add_action( 'customize_register', 'magazine_customizer_register' );
/**
 * Registers settings and controls with the Customizer.
 *
 * @since 3.2.0
 *
 * @param WP_Customize_Manager $wp_customize Customizer object.
 */
function magazine_customizer_register( $wp_customize ) {

	$appearance = genesis_get_config( 'appearance' );

	// Adds the primary nav accent color.
	$wp_customize->add_setting(
		'magazine_link_color',
		[
			'default'           => $appearance['default-colors']['link'],
			'sanatize_callback' => 'sanatize_hex_color',
		]
	);

	// Adds the link color picker.
	$wp_customize->add_control(
		new WP_Customize_Color_Control(
			$wp_customize,
			'magazine_link_color',
			[
				'description' => __( 'Change the hover color of links, linked titles, After Header Menu links, post info links, and more.', 'magazine-pro' ),
				'label'       => __( 'Link Color', 'magazine-pro' ),
				'section'     => 'colors',
				'settings'    => 'magazine_link_color',
			]
		)
	);

	// Adds the accent color picker.
	$wp_customize->add_setting(
		'magazine_accent_color',
		[
			'default'           => $appearance['default-colors']['accent'],
			'sanatize_callback' => 'sanatize_hex_color',
		]
	);

	$wp_customize->add_control(
		new WP_Customize_Color_Control(
			$wp_customize,
			'magazine_accent_color',
			[
				'description' => __( 'Change the front page featured post date backgrounds, the button hover background color, and more.', 'magazine-pro' ),
				'label'       => __( 'Accent Color', 'magazine-pro' ),
				'section'     => 'colors',
				'settings'    => 'magazine_accent_color',
			]
		)
	);

	$wp_customize->add_setting(
		'magazine_logo_width',
		[
			'default'           => 380,
			'sanitize_callback' => 'absint',
			'validate_callback' => 'magazine_validate_logo_width',
		]
	);

	// Add a control for the logo size.
	$wp_customize->add_control(
		'magazine_logo_width',
		[
			'label'       => __( 'Logo Width', 'magazine-pro' ),
			'description' => __( 'The maximum width of the logo in pixels.', 'magazine-pro' ),
			'priority'    => 9,
			'section'     => 'title_tagline',
			'settings'    => 'magazine_logo_width',
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
function magazine_validate_logo_width( $validity, $width ) {

	if ( empty( $width ) || ! is_numeric( $width ) ) {
		$validity->add( 'required', __( 'You must supply a valid number.', 'magazine-pro' ) );
	} elseif ( $width < 100 ) {
		$validity->add( 'logo_too_small', __( 'The logo width cannot be less than 100.', 'magazine-pro' ) );
	}

	return $validity;

}

