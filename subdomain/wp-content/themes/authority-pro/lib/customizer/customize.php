<?php
/**
 * Authority Pro.
 *
 * This file adds the Customizer additions to the Authority Pro Theme.
 *
 * @package Authority
 * @author  StudioPress
 * @license GPL-2.0-or-later
 * @link    https://my.studiopress.com/themes/authority/
 */

add_action( 'customize_register', 'authority_customizer_register' );
/**
 * Registers settings and controls with the Customizer.
 *
 * @since 1.0.0
 *
 * @param WP_Customize_Manager $wp_customize Customizer object.
 */
function authority_customizer_register( $wp_customize ) {

	// Adds custom heading controls to WordPress Theme Customizer.
	require_once get_stylesheet_directory() . '/lib/customizer/class-authority-customizer-heading-control.php';

	// Adds main settings panel.
	$wp_customize->add_panel(
		'authority-settings',
		[
			'description' => __( 'Set up the Authority Pro settings and defaults.', 'authority-pro' ),
			'priority'    => 80,
			'title'       => __( 'Authority Pro Settings', 'authority-pro' ),
		]
	);

	// Adds basic settings section.
	$wp_customize->add_section(
		'authority-basic-settings',
		[
			'description' => sprintf( '<strong>%s</strong>', __( 'Modify the Authority Pro Theme basic settings.', 'authority-pro' ) ),
			'title'       => __( 'Basic Settings', 'authority-pro' ),
			'panel'       => 'authority-settings',
		]
	);

	// Adds styled paragraph settings.
	$wp_customize->add_setting(
		'authority-use-paragraph-styling',
		[
			'default'           => 1,
			'sanitize_callback' => 'absint',
		]
	);

	$wp_customize->add_control(
		'authority-use-paragraph-styling',
		[
			'label'       => __( 'Enable the "intro" paragraph style on single posts?', 'authority-pro' ),
			'description' => __( 'Check the box to automatically apply the "intro" font size and style to the first paragraph of all single posts.', 'authority-pro' ),
			'section'     => 'authority-basic-settings',
			'settings'    => 'authority-use-paragraph-styling',
			'type'        => 'checkbox',
		]
	);

	// Adds single image setting to the Customizer.
	$wp_customize->add_setting(
		'authority_single_image_setting',
		[
			'default'           => authority_customizer_get_default_image_setting(),
			'sanitize_callback' => 'absint',
		]
	);

	$wp_customize->add_control(
		'authority_single_image_setting',
		[
			'label'       => __( 'Show featured image on posts?', 'authority-pro' ),
			'description' => __( 'Check the box if you would like to display the featured image above the content on single posts.', 'authority-pro' ),
			'section'     => 'authority-basic-settings',
			'type'        => 'checkbox',
			'settings'    => 'authority_single_image_setting',
		]
	);

	// Adds Top Banner Section.
	$wp_customize->add_section(
		'authority-top-banner-settings',
		[
			'description' => sprintf( '<strong>%s</strong><p>%s</p>', __( 'Modify the settings for the top banner section.', 'authority-pro' ), __( 'Each time the customizer is opened, the top banner will be displayed in the live preview so you can easily customize the content.', 'authority-pro' ) ),
			'title'       => __( 'Top Banner Section', 'authority-pro' ),
			'panel'       => 'authority-settings',
		]
	);

	$wp_customize->add_setting(
		'authority-top-banner-visibility',
		[
			'default'           => 1,
			'sanitize_callback' => 'absint',
		]
	);

	$wp_customize->add_control(
		'authority-top-banner-visibility',
		[
			'description' => __( 'Check the box to display a dismissible banner at the top of all pages.', 'authority-pro' ),
			'label'       => __( 'Show Top Banner?', 'authority-pro' ),
			'section'     => 'authority-top-banner-settings',
			'settings'    => 'authority-top-banner-visibility',
			'type'        => 'checkbox',
		]
	);

	$wp_customize->add_setting(
		'authority-top-banner-text',
		[
			'default'           => authority_get_default_top_banner_text(),
			'sanitize_callback' => 'wp_kses_post',
			'transport'         => isset( $wp_customize->selective_refresh ) ? 'postMessage' : 'refresh',
		]
	);

	$wp_customize->add_control(
		'authority-top-banner-text',
		[
			'description' => __( 'Change the text for the dismissible banner (allows HTML).', 'authority-pro' ),
			'label'       => __( 'Top Banner Text', 'authority-pro' ),
			'section'     => 'authority-top-banner-settings',
			'settings'    => 'authority-top-banner-text',
			'type'        => 'textarea',
		]
	);

	if ( isset( $wp_customize->selective_refresh ) ) {
		$wp_customize->selective_refresh->add_partial(
			'authority-top-banner-text',
			[
				'selector'        => '.authority-top-banner',
				'settings'        => [ 'authority-top-banner-text' ],
				'render_callback' => function() { // phpcs:ignore PHPCompatibility.FunctionDeclarations.NewClosure.Found -- not supporting PHP 5.2, and the alternative `create_function()` is deprecated in PHP 7.2.
					return get_theme_mod( 'authority-top-banner-text' );
				},
			]
		);
	}

	// Adds Color customization.
	$wp_customize->add_setting(
		'authority_primary_color',
		[
			'default'           => authority_customizer_get_default_primary_color(),
			'sanitize_callback' => 'sanitize_hex_color',
		]
	);

	$wp_customize->add_control(
		new WP_Customize_Color_Control(
			$wp_customize,
			'authority_primary_color',
			[
				'description' => __( 'Change the default primary color (i.e. linked titles, menu links, post info links, buttons, and more).', 'authority-pro' ),
				'label'       => __( 'Primary Color', 'authority-pro' ),
				'section'     => 'colors',
				'settings'    => 'authority_primary_color',
			]
		)
	);

	// Adds Grid layout options.
	$wp_customize->add_control(
		new Authority_Customizer_Heading_Control(
			$wp_customize,
			'authority_grid_options_link',
			[
				'label'        => __( 'Grid Layout Options', 'authority-pro' ),
				'instructions' => __( 'These options apply to the Grid Layout if selected for categories and tags.', 'authority-pro' ),
				'priority'     => 98,
				'section'      => 'genesis_archives',
				'settings'     => [],
				'type'         => 'heading',
			]
		)
	);

	$wp_customize->add_setting(
		'authority-grid-option',
		[
			'default'           => 1,
			'sanitize_callback' => 'absint',
		]
	);

	$wp_customize->add_control(
		'authority-grid-option',
		[
			'label'    => __( 'Apply the grid layout as the default layout for categories and tags?', 'authority-pro' ),
			'priority' => 99,
			'section'  => 'genesis_archives',
			'settings' => 'authority-grid-option',
			'type'     => 'checkbox',
		]
	);

	$wp_customize->add_setting(
		'authority-grid-thumbnail',
		[
			'default'           => 1,
			'sanitize_callback' => 'absint',
		]
	);

	$wp_customize->add_control(
		'authority-grid-thumbnail',
		[
			'label'    => __( 'Display the featured image above the title?', 'authority-pro' ),
			'priority' => 100,
			'section'  => 'genesis_archives',
			'settings' => 'authority-grid-thumbnail',
			'type'     => 'checkbox',
		]
	);

	$wp_customize->add_setting(
		'authority-content-archive',
		[
			'default'           => authority_content_archive_option(),
			'sanitize_callback' => 'authority_sanitize_select',
		]
	);

	$wp_customize->add_control(
		'authority-content-archive',
		[
			'label'    => __( 'Select one of the following', 'authority-pro' ),
			'priority' => 101,
			'section'  => 'genesis_archives',
			'settings' => 'authority-content-archive',
			'type'     => 'select',
			'choices'  => [
				'full'     => __( 'Entry content', 'authority-pro' ),
				'excerpts' => __( 'Entry excerpts', 'authority-pro' ),
			],
		]
	);

	$wp_customize->add_setting(
		'authority-grid-archive-limit',
		[
			'default'           => authority_get_default_grid_limit(),
			'sanitize_callback' => 'absint',
		]
	);

	$wp_customize->add_control(
		'authority-grid-archive-limit',
		[
			'label'    => __( 'Limit content to how many characters? (Enter 0 for no limit)', 'authority-pro' ),
			'priority' => 102,
			'section'  => 'genesis_archives',
			'settings' => 'authority-grid-archive-limit',
			'type'     => 'number',
		]
	);

	$wp_customize->add_setting(
		'authority-grid-posts-per-page',
		[
			'default'           => authority_get_default_grid_posts_per_page(),
			'sanitize_callback' => 'absint',
		]
	);

	$wp_customize->add_control(
		'authority-grid-posts-per-page',
		[
			'label'    => __( 'Grid Layout Posts Per Page', 'authority-pro' ),
			'priority' => 103,
			'section'  => 'genesis_archives',
			'settings' => 'authority-grid-posts-per-page',
			'type'     => 'number',
		]
	);

}

/**
 * Sanitizes select option to ensure they're among the custom control's choices.
 *
 * @since 1.0.0
 *
 * @param string               $input   The select key.
 * @param WP_Customize_Setting $setting The setting object.
 * @return string The sanitized select key.
 */
function authority_sanitize_select( $input, $setting ) {

	// Ensures input is a slug.
	$input = sanitize_key( $input );

	// Gets a list of choices from the control associated with the setting.
	$choices = $setting->manager->get_control( $setting->id )->choices;

	// If the input is a valid key, return it; otherwise, return the default.
	return ( array_key_exists( $input, $choices ) ? $input : $setting->default );

}
