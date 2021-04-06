<?php
/**
 * Navigation Pro.
 *
 * This file adds the Customizer additions to the Navigation Pro Theme.
 *
 * @package Navigation
 * @author  StudioPress
 * @license GPL-2.0-or-later
 * @link    https://my.studiopress.com/themes/navigation/
 */

add_action( 'customize_register', 'navigation_customizer_register' );
/**
 * Registers settings and controls with the Customizer.
 *
 * @since 1.0.0
 *
 * @param WP_Customize_Manager $wp_customize Customizer object.
 */
function navigation_customizer_register( $wp_customize ) {

	$appearance = genesis_get_config( 'appearance' );

	$wp_customize->selective_refresh->add_partial(
		'navigation_logo',
		[
			'selector'        => '.title-area',
			'settings'        => [ 'custom_logo' ],
			'render_callback' => function() {
				return genesis_do_header();
			},
		]
	);

	$wp_customize->add_section(
		'navigation_theme_options',
		[
			'description' => __( 'Personalize your site with these available child theme options.', 'navigation-pro' ),
			'title'       => __( 'Child Theme Specific Settings', 'navigation-pro' ),
			'panel'       => 'genesis',
			'priority'    => 30,
		]
	);

	// Adds setting for link color.
	$wp_customize->add_setting(
		'navigation_primary_color',
		[
			'default'           => $appearance['default-colors']['primary'],
			'sanitize_callback' => 'sanitize_hex_color',
		]
	);

	// Adds control for link color.
	$wp_customize->add_control(
		new WP_Customize_Color_Control(
			$wp_customize,
			'navigation_primary_color',
			[
				'description' => __( 'Change the color used for the site title background, breadcrumb background, linked titles, menu links, entry meta link hover, pagination links, many buttons, & more.', 'navigation-pro' ),
				'label'       => __( 'Main Color', 'navigation-pro' ),
				'section'     => 'colors',
				'settings'    => 'navigation_primary_color',
			]
		)
	);

	// Adds setting for accent color.
	$wp_customize->add_setting(
		'navigation_accent_color',
		[
			'default'           => $appearance['default-colors']['accent'],
			'sanitize_callback' => 'sanitize_hex_color',
		]
	);

	// Adds control for accent color.
	$wp_customize->add_control(
		new WP_Customize_Color_Control(
			$wp_customize,
			'navigation_accent_color',
			[
				'description' => __( 'Change the accent color used block underlay styles, overlay styles, & more.', 'navigation-pro' ),
				'label'       => __( 'Accent Color', 'navigation-pro' ),
				'section'     => 'colors',
				'settings'    => 'navigation_accent_color',
			]
		)
	);

	// Adds setting for footer CTA background color.
	$wp_customize->add_setting(
		'navigation_cta_color',
		[
			'default'           => $appearance['default-colors']['cta-color'],
			'sanitize_callback' => 'sanitize_hex_color',
		]
	);

	// Adds control for footer CTA background color.
	$wp_customize->add_control(
		new WP_Customize_Color_Control(
			$wp_customize,
			'navigation_cta_color',
			[
				'description' => __( 'Change the background color for the before footer CTA widget area.', 'navigation-pro' ),
				'label'       => __( 'Before Footer CTA Color', 'navigation-pro' ),
				'section'     => 'colors',
				'settings'    => 'navigation_cta_color',
			]
		)
	);

	// Adds setting for footer background color.
	$wp_customize->add_setting(
		'navigation_footer_color',
		[
			'default'           => $appearance['default-colors']['footer'],
			'sanitize_callback' => 'sanitize_hex_color',
		]
	);

	// Adds control for footer background color.
	$wp_customize->add_control(
		new WP_Customize_Color_Control(
			$wp_customize,
			'navigation_footer_color',
			[
				'description' => __( 'Change the footer background color.', 'navigation-pro' ),
				'label'       => __( 'Footer Background Color', 'navigation-pro' ),
				'section'     => 'colors',
				'settings'    => 'navigation_footer_color',
			]
		)
	);

	// Adds control for search option.
	$wp_customize->add_setting(
		'navigation_header_search',
		[
			'default'           => navigation_customizer_get_default_search_setting(),
			'sanitize_callback' => 'absint',
		]
	);

	// Adds setting for search option.
	$wp_customize->add_control(
		'navigation_header_search',
		[
			'label'       => __( 'Show Menu Search Icon?', 'navigation-pro' ),
			'description' => __( 'Check the box to show a search icon in the menu.', 'navigation-pro' ),
			'section'     => 'navigation_theme_options',
			'type'        => 'checkbox',
			'settings'    => 'navigation_header_search',
		]
	);

	// Adds control for the styled paragraph.
	$wp_customize->add_setting(
		'navigation_intro_paragraph_styling',
		[
			'default'           => 1,
			'sanitize_callback' => 'absint',
		]
	);

	$wp_customize->add_control(
		'navigation_intro_paragraph_styling',
		[
			'label'       => __( 'Enable the "intro" paragraph style on single posts?', 'navigation-pro' ),
			'description' => __( 'Check the box to automatically apply the "intro" font size and style to the first paragraph of all single posts.', 'navigation-pro' ),
			'section'     => 'navigation_theme_options',
			'settings'    => 'navigation_intro_paragraph_styling',
			'type'        => 'checkbox',
		]
	);

	// Adds control for the styled paragraph.
	$wp_customize->add_setting(
		'navigation_meta_gravatar',
		[
			'default'           => 1,
			'sanitize_callback' => 'absint',
		]
	);

	$wp_customize->add_control(
		'navigation_meta_gravatar',
		[
			'label'       => __( 'Show the gravatar before entry meta?', 'navigation-pro' ),
			'description' => __( 'Check the box to automatically show the author gravatar in the entry meta.', 'navigation-pro' ),
			'section'     => 'genesis_single',
			'settings'    => 'navigation_meta_gravatar',
			'type'        => 'checkbox',
		]
	);

	// Adds control for the footer logo upload.
	$wp_customize->add_setting(
		'navigation-footer-logo',
		[
			'default'           => navigation_get_default_footer_logo(),
			'sanitize_callback' => 'esc_attr',
		]
	);

	$wp_customize->add_control(
		new WP_Customize_Image_Control(
			$wp_customize,
			'navigation-footer-logo',
			[
				'description' => __( 'Select an image to display above the footer credits. Images will display no more than 80px tall.', 'navigation-pro' ),
				'label'       => __( 'Footer Logo', 'navigation-pro' ),
				'section'     => 'title_tagline',
				'settings'    => 'navigation-footer-logo',
			]
		)
	);

}
