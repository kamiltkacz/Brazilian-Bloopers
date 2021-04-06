<?php
/**
 * Monochrome Pro.
 *
 * This file adds the Customizer additions to the Monochrome Pro Theme.
 *
 * @package Monochrome
 * @author  StudioPress
 * @license GPL-2.0-or-later
 * @link    https://my.studiopress.com/themes/monochrome/
 */

add_action( 'customize_register', 'monochrome_customizer_register' );
/**
 * Registers settings and controls with the Customizer.
 *
 * @since 1.0.0
 *
 * @param WP_Customize_Manager $wp_customize Customizer object.
 */
function monochrome_customizer_register( $wp_customize ) {

	$wp_customize->add_section(
		'monochrome_theme_options',
		[
			'description' => __( 'Personalize the Monochrome Pro theme with these available options.', 'monochrome-pro' ),
			'title'       => __( 'Monochrome Pro Settings', 'monochrome-pro' ),
			'priority'    => 30,
		]
	);

	// Adds setting for link color.
	$wp_customize->add_setting(
		'monochrome_link_color',
		[
			'default'           => monochrome_customizer_get_default_link_color(),
			'sanitize_callback' => 'sanitize_hex_color',
		]
	);

	// Adds control for link color.
	$wp_customize->add_control(
		new WP_Customize_Color_Control(
			$wp_customize,
			'monochrome_link_color',
			[
				'description' => __( 'Change the default color for hovers for linked titles, menu links, entry meta links, and more.', 'monochrome-pro' ),
				'label'       => __( 'Link Color', 'monochrome-pro' ),
				'section'     => 'colors',
				'settings'    => 'monochrome_link_color',
			]
		)
	);

	// Adds setting for accent color.
	$wp_customize->add_setting(
		'monochrome_accent_color',
		[
			'default'           => monochrome_customizer_get_default_accent_color(),
			'sanitize_callback' => 'sanitize_hex_color',
		]
	);

	// Adds control for accent color.
	$wp_customize->add_control(
		new WP_Customize_Color_Control(
			$wp_customize,
			'monochrome_accent_color',
			[
				'description' => __( 'Change the color used for block-based buttons and the hover color for other buttons.', 'monochrome-pro' ),
				'label'       => __( 'Accent Color', 'monochrome-pro' ),
				'section'     => 'colors',
				'settings'    => 'monochrome_accent_color',
			]
		)
	);

	// Adds setting for footer start color.
	$wp_customize->add_setting(
		'monochrome_footer_start_color',
		[
			'default'           => monochrome_customizer_get_default_footer_start_color(),
			'sanitize_callback' => 'sanitize_hex_color',
		]
	);

	// Adds control for footer start color.
	$wp_customize->add_control(
		new WP_Customize_Color_Control(
			$wp_customize,
			'monochrome_footer_start_color',
			[
				'description' => __( 'Change the default color for start of footer gradient.', 'monochrome-pro' ),
				'label'       => __( 'Footer Start Color', 'monochrome-pro' ),
				'section'     => 'colors',
				'settings'    => 'monochrome_footer_start_color',
			]
		)
	);

	// Adds setting for footer end color.
	$wp_customize->add_setting(
		'monochrome_footer_end_color',
		[
			'default'           => monochrome_customizer_get_default_footer_end_color(),
			'sanitize_callback' => 'sanitize_hex_color',
		]
	);

	// Adds control for footer end color.
	$wp_customize->add_control(
		new WP_Customize_Color_Control(
			$wp_customize,
			'monochrome_footer_end_color',
			[
				'description' => __( 'Change the default color for end of footer gradient.', 'monochrome-pro' ),
				'label'       => __( 'Footer End Color', 'monochrome-pro' ),
				'section'     => 'colors',
				'settings'    => 'monochrome_footer_end_color',
			]
		)
	);

	// Adds control for search option.
	$wp_customize->add_setting(
		'monochrome_header_search',
		[
			'default'           => monochrome_customizer_get_default_search_setting(),
			'sanitize_callback' => 'absint',
		]
	);

	// Adds setting for search option.
	$wp_customize->add_control(
		'monochrome_header_search',
		[
			'label'       => __( 'Show Menu Search Icon?', 'monochrome-pro' ),
			'description' => __( 'Check the box to show a search icon in the menu.', 'monochrome-pro' ),
			'section'     => 'monochrome_theme_options',
			'type'        => 'checkbox',
			'settings'    => 'monochrome_header_search',
		]
	);

	// Adds control for the styled paragraph.
	$wp_customize->add_setting(
		'monochrome_intro_paragraph_styling',
		[
			'default'           => 1,
			'sanitize_callback' => 'absint',
		]
	);

	$wp_customize->add_control(
		'monochrome_intro_paragraph_styling',
		[
			'label'       => __( 'Enable the "intro" paragraph style on single posts?', 'monochrome-pro' ),
			'description' => __( 'Check the box to automatically apply the "intro" font size and style to the first paragraph of all single posts.', 'monochrome-pro' ),
			'section'     => 'monochrome_theme_options',
			'settings'    => 'monochrome_intro_paragraph_styling',
			'type'        => 'checkbox',
		]
	);

	// Adds control for the footer logo upload.
	$wp_customize->add_setting(
		'monochrome-footer-logo',
		[
			'default'           => monochrome_get_default_footer_logo(),
			'sanitize_callback' => 'esc_attr',
		]
	);

	$wp_customize->add_control(
		new WP_Customize_Image_Control(
			$wp_customize,
			'monochrome-footer-logo',
			[
				'description' => __( 'Select an image to display above the footer credits.', 'monochrome-pro' ),
				'label'       => __( 'Footer Logo', 'monochrome-pro' ),
				'section'     => 'title_tagline',
				'settings'    => 'monochrome-footer-logo',
			]
		)
	);

}
