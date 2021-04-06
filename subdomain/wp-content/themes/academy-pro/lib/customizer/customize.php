<?php
/**
 * Academy Pro.
 *
 * This file adds the Customizer additions to the Academy Pro Theme.
 *
 * @package Academy
 * @author  StudioPress
 * @license GPL-2.0-or-later
 * @link    https://my.studiopress.com/themes/academy/
 */

add_action( 'customize_register', 'academy_customizer_register' );
/**
 * Registers settings and controls with the Customizer.
 *
 * @since 1.0.0
 *
 * @param WP_Customize_Manager $wp_customize Customizer object.
 */
function academy_customizer_register( $wp_customize ) {

	// Adds custom heading controls to WordPress Theme Customizer.
	require_once get_stylesheet_directory() . '/lib/customizer/class-academy-customizer-heading-control.php';

	// Main settings panel.
	$wp_customize->add_panel(
		'academy-settings',
		[
			'description' => __( 'Set up the Academy Pro settings and defaults.', 'academy-pro' ),
			'priority'    => 80,
			'title'       => __( 'Academy Pro Settings', 'academy-pro' ),
		]
	);

	// Basic settings section.
	$wp_customize->add_section(
		'academy-basic-settings',
		[
			'description' => sprintf( '<strong>%s</strong>', __( 'Modify the Academy Pro Theme basic settings.', 'academy-pro' ) ),
			'title'       => __( 'Basic Settings', 'academy-pro' ),
			'panel'       => 'academy-settings',
		]
	);

	// Hero visibility setting.
	$wp_customize->add_setting(
		'academy-show-hero-section',
		[
			'default'           => 1,
			'sanitize_callback' => 'absint',
		]
	);

	$wp_customize->add_control(
		'academy-show-hero-section',
		[
			'label'       => __( 'Show the front page hero section?', 'academy-pro' ),
			'description' => __( 'Check the box to display the hero section on the top of the front page.', 'academy-pro' ),
			'section'     => 'academy-basic-settings',
			'settings'    => 'academy-show-hero-section',
			'type'        => 'checkbox',
		]
	);

	// Styled paragraph settings.
	$wp_customize->add_setting(
		'academy-use-paragraph-styling',
		[
			'default'           => 1,
			'sanitize_callback' => 'absint',
		]
	);

	$wp_customize->add_control(
		'academy-use-paragraph-styling',
		[
			'label'       => __( 'Enable the "intro" paragraph style on single posts?', 'academy-pro' ),
			'description' => __( 'Check the box to automatically apply the "intro" font size and style to the first paragraph of all single posts.', 'academy-pro' ),
			'section'     => 'academy-basic-settings',
			'settings'    => 'academy-use-paragraph-styling',
			'type'        => 'checkbox',
		]
	);

	// Add single image setting to the Customizer.
	$wp_customize->add_setting(
		'academy_single_image_setting',
		[
			'default'           => academy_customizer_get_default_image_setting(),
			'sanitize_callback' => 'absint',
		]
	);

	$wp_customize->add_control(
		'academy_single_image_setting',
		[
			'label'       => __( 'Show featured image on posts?', 'academy-pro' ),
			'description' => __( 'Check the box if you would like to display the featured image above the content on single posts.', 'academy-pro' ),
			'section'     => 'academy-basic-settings',
			'type'        => 'checkbox',
			'settings'    => 'academy_single_image_setting',
		]
	);

	// Top banner section.
	$wp_customize->add_section(
		'academy-top-banner-settings',
		[
			'description' => sprintf( '<strong>%s</strong><p>%s</p>', __( 'Modify the settings for the top banner section.', 'academy-pro' ), __( 'Each time the customizer is opened, the top banner will be displayed in the live preview so you can easily customize the content.', 'academy-pro' ) ),
			'title'       => __( 'Top Banner Settings', 'academy-pro' ),
			'panel'       => 'academy-settings',
		]
	);

	// Top banner visibility.
	$wp_customize->add_setting(
		'academy-top-banner-visibility',
		[
			'default'           => 1,
			'sanitize_callback' => 'absint',
		]
	);

	$wp_customize->add_control(
		'academy-top-banner-visibility',
		[
			'description' => __( 'Check the box to display a dismissible banner at the top of all pages.', 'academy-pro' ),
			'label'       => __( 'Show Top Banner?', 'academy-pro' ),
			'section'     => 'academy-top-banner-settings',
			'settings'    => 'academy-top-banner-visibility',
			'type'        => 'checkbox',
		]
	);

	// Hero banner text.
	$wp_customize->add_setting(
		'academy-top-banner-text',
		[
			'default'           => academy_get_default_top_banner_text(),
			'sanitize_callback' => 'wp_kses_post',
			'transport'         => isset( $wp_customize->selective_refresh ) ? 'postMessage' : 'refresh',
		]
	);

	$wp_customize->add_control(
		'academy-top-banner-text',
		[
			'description' => __( 'Change the text for the dismissible banner (allows HTML).', 'academy-pro' ),
			'label'       => __( 'Top Banner Text', 'academy-pro' ),
			'section'     => 'academy-top-banner-settings',
			'settings'    => 'academy-top-banner-text',
			'type'        => 'textarea',
		]
	);

	if ( isset( $wp_customize->selective_refresh ) ) {
		$wp_customize->selective_refresh->add_partial(
			'academy-top-banner-text',
			[
				'selector'        => '.academy-top-banner',
				'settings'        => [ 'academy-top-banner-text' ],
				'render_callback' => function() {
					return get_theme_mod( 'academy-top-banner-text' );
				},
			]
		);
	}

	// Hero text settings.
	$wp_customize->add_section(
		'academy-settings-text',
		[
			'description'     => sprintf( '<strong>%s</strong>', __( 'Modify the text settings for the front page hero section.', 'academy-pro' ) ),
			'title'           => __( 'Hero Text Settings', 'academy-pro' ),
			'active_callback' => 'is_front_page',
			'panel'           => 'academy-settings',
		]
	);

	// Hero Title.
	$wp_customize->add_setting(
		'academy-hero-title-text',
		[
			'default'           => academy_get_default_hero_title_text(),
			'sanitize_callback' => 'wp_kses_post',
			'transport'         => isset( $wp_customize->selective_refresh ) ? 'postMessage' : 'refresh',
		]
	);

	$wp_customize->add_control(
		'academy-hero-title-text',
		[
			'description' => __( 'Change the title text for the front page hero section.', 'academy-pro' ),
			'label'       => __( 'Hero Title', 'academy-pro' ),
			'section'     => 'academy-settings-text',
			'settings'    => 'academy-hero-title-text',
		]
	);

	if ( isset( $wp_customize->selective_refresh ) ) {
		$wp_customize->selective_refresh->add_partial(
			'academy-hero-title-text',
			[
				'selector'        => '.hero-title',
				'settings'        => [ 'academy-hero-title-text' ],
				'render_callback' => function() {
					return get_theme_mod( 'academy-hero-title-text' );
				},
			]
		);
	}

	// Hero description text.
	$wp_customize->add_setting(
		'academy-hero-description-text',
		[
			'default'           => academy_get_default_hero_desc_text(),
			'sanitize_callback' => 'wp_kses_post',
			'transport'         => isset( $wp_customize->selective_refresh ) ? 'postMessage' : 'refresh',
		]
	);

	$wp_customize->add_control(
		'academy-hero-description-text',
		[
			'description' => __( 'Change the description text for the front page hero section.', 'academy-pro' ),
			'label'       => __( 'Hero Intro Paragraph', 'academy-pro' ),
			'section'     => 'academy-settings-text',
			'settings'    => 'academy-hero-description-text',
			'type'        => 'textarea',
		]
	);

	if ( isset( $wp_customize->selective_refresh ) ) {
		$wp_customize->selective_refresh->add_partial(
			'academy-hero-description-text',
			[
				'selector'        => '.hero-description',
				'settings'        => [ 'academy-hero-description-text' ],
				'render_callback' => function() {
					return get_theme_mod( 'academy-hero-description-text' );
				},
			]
		);
	}

	// Hero button settings.
	$wp_customize->add_section(
		'academy-settings-buttons',
		[
			'description'     => sprintf( '<strong>%s</strong>', __( 'Modify the button text and link settings in the front page hero section.', 'academy-pro' ) ),
			'title'           => __( 'Hero Button Settings', 'academy-pro' ),
			'active_callback' => 'is_front_page',
			'panel'           => 'academy-settings',
		]
	);

	// Hero Buttons.
	$wp_customize->add_setting(
		'academy-hero-button-primary-text',
		[
			'default'           => academy_get_default_hero_button_primary_text(),
			'sanitize_callback' => 'esc_html',
			'transport'         => isset( $wp_customize->selective_refresh ) ? 'postMessage' : 'refresh',
		]
	);

	$wp_customize->add_control(
		'academy-hero-button-primary-text',
		[
			'description' => __( 'Change the text for the colored button in the front page hero section.', 'academy-pro' ),
			'label'       => __( 'Hero Colored Button Text', 'academy-pro' ),
			'section'     => 'academy-settings-buttons',
			'settings'    => 'academy-hero-button-primary-text',
		]
	);

	$wp_customize->add_setting(
		'academy-hero-button-primary-url',
		[
			'sanitize_callback' => 'esc_url',
			'transport'         => isset( $wp_customize->selective_refresh ) ? 'postMessage' : 'refresh',
		]
	);

	$wp_customize->add_control(
		'academy-hero-button-primary-url',
		[
			'description' => __( 'Change the url for the colored button in the front page hero section.', 'academy-pro' ),
			'label'       => __( 'Hero Colored Button URL', 'academy-pro' ),
			'section'     => 'academy-settings-buttons',
			'settings'    => 'academy-hero-button-primary-url',
		]
	);

	$wp_customize->add_setting(
		'academy-hero-button-secondary-text',
		[
			'default'           => academy_get_default_hero_button_secondary_text(),
			'sanitize_callback' => 'wp_kses_post',
			'transport'         => isset( $wp_customize->selective_refresh ) ? 'postMessage' : 'refresh',
		]
	);

	$wp_customize->add_control(
		'academy-hero-button-secondary-text',
		[
			'description' => __( 'Change the text for the underlined button in the front page hero section.', 'academy-pro' ),
			'label'       => __( 'Hero Underlined Button Text', 'academy-pro' ),
			'section'     => 'academy-settings-buttons',
			'settings'    => 'academy-hero-button-secondary-text',
		]
	);

	$wp_customize->add_setting(
		'academy-hero-button-secondary-url',
		[
			'sanitize_callback' => 'esc_url',
			'transport'         => isset( $wp_customize->selective_refresh ) ? 'postMessage' : 'refresh',
		]
	);

	$wp_customize->add_control(
		'academy-hero-button-secondary-url',
		[
			'description' => __( 'Change the url for the underlined button in the front page hero section.', 'academy-pro' ),
			'label'       => __( 'Hero Underlined Button URL', 'academy-pro' ),
			'section'     => 'academy-settings-buttons',
			'settings'    => 'academy-hero-button-secondary-url',
		]
	);

	if ( isset( $wp_customize->selective_refresh ) ) {
		$wp_customize->selective_refresh->add_partial(
			'academy-hero-button-primary-text',
			[
				'selector'        => '.hero-section .button.primary',
				'settings'        => [ 'academy-hero-button-primary-text' ],
				'render_callback' => function() {
					return get_theme_mod( 'academy-hero-button-primary-text' );
				},
			]
		);
	}

	if ( isset( $wp_customize->selective_refresh ) ) {
		$wp_customize->selective_refresh->add_partial(
			'academy-hero-button-secondary-text',
			[
				'selector'        => '.hero-section .button.text',
				'settings'        => [ 'academy-hero-button-secondary-text' ],
				'render_callback' => function() {
					return get_theme_mod( 'academy-hero-button-secondary-text' );
				},
			]
		);
	}

	// Hero video settings.
	$wp_customize->add_section(
		'academy-settings-video',
		[
			'description'     => sprintf( '<strong>%s</strong>', __( 'Modify the video settings for the front page hero section.', 'academy-pro' ) ),
			'title'           => __( 'Hero Video Settings', 'academy-pro' ),
			'active_callback' => 'is_front_page',
			'panel'           => 'academy-settings',
		]
	);

	// Hero video hosted.
	$wp_customize->add_setting(
		'academy-hero-hosted-video',
		[
			'sanitize_callback' => 'esc_url_raw',
			'transport'         => isset( $wp_customize->selective_refresh ) ? 'postMessage' : 'refresh',
		]
	);

	$wp_customize->add_control(
		'academy-hero-hosted-video',
		[
			'description' => sprintf( '<p>%s</p><p>%s</p>', __( 'If you are using a video that is hosted with a third party service (examples: YouTube, Vimeo, etc.), enter the video URL here. If you will be hosting the video on your site instead, leave this field empty.', 'academy-pro' ), __( 'Example: https://player.vimeo.com/video/228990326', 'academy-pro' ) ),
			'label'       => __( 'Hosted Video URL', 'academy-pro' ),
			'section'     => 'academy-settings-video',
			'settings'    => 'academy-hero-hosted-video',
			'type'        => 'url',
		]
	);

	if ( isset( $wp_customize->selective_refresh ) ) {
		$wp_customize->selective_refresh->add_partial(
			'academy-hero-hosted-video',
			[
				'container_inclusive' => true,
				'selector'            => '.hero-section',
				'settings'            => [ 'academy-hero-hosted-video' ],
				'render_callback'     => function() {
					return get_template_part( '/lib/templates/hero', 'section' );
				},
			]
		);
	}

	// Hero Video - Video Upload.
	$wp_customize->add_setting(
		'academy-hero-video-upload',
		[
			'sanitize_callback' => 'esc_attr',
		]
	);

	$wp_customize->add_control(
		new WP_Customize_Media_Control(
			$wp_customize,
			'academy-hero-video-upload',
			[
				'label'         => __( 'Video Upload', 'academy-pro' ),
				'description'   => __( 'If you\'re not using a third party video hosting service, click Select File to upload a video or choose an already uploaded video from the media library.', 'academy-pro' ),
				'section'       => 'academy-settings-video',
				'mime_type'     => 'video',
				'button_labels' => [
					'select'       => __( 'Select File', 'academy-pro' ),
					'change'       => __( 'Change File', 'academy-pro' ),
					'default'      => __( 'Default', 'academy-pro' ),
					'remove'       => __( 'Remove', 'academy-pro' ),
					'placeholder'  => __( 'No file selected', 'academy-pro' ),
					'frame_title'  => __( 'Select File', 'academy-pro' ),
					'frame_button' => __( 'Choose File', 'academy-pro' ),
				],
			]
		)
	);

	// Hero Video - Thumbnail Image.
	$wp_customize->add_setting(
		'academy-hero-video-thumb',
		[
			'default'           => academy_get_default_video_thumbnail(),
			'sanitize_callback' => 'esc_attr',
		]
	);

	$wp_customize->add_control(
		new WP_Customize_Image_Control(
			$wp_customize,
			'academy-hero-video-thumb',
			[
				'description' => __( 'Select an image for the video thumbnail.', 'academy-pro' ),
				'label'       => __( 'Hero Video Thumbnail Image', 'academy-pro' ),
				'section'     => 'academy-settings-video',
				'settings'    => 'academy-hero-video-thumb',
			]
		)
	);

	// Hero logo settings.
	$wp_customize->add_section(
		'academy-logos',
		[
			'description'     => sprintf( '<strong>%s</strong>', __( 'Modify the settings for the front page logo section.', 'academy-pro' ) ),
			'title'           => __( 'Hero Logo Settings', 'academy-pro' ),
			'active_callback' => 'is_front_page',
			'panel'           => 'academy-settings',
		]
	);

	// Logo header.
	$wp_customize->add_setting(
		'academy-hero-logo-header',
		[
			'default'           => academy_get_default_hero_logo_header(),
			'sanitize_callback' => 'wp_kses_post',
			'transport'         => isset( $wp_customize->selective_refresh ) ? 'postMessage' : 'refresh',
		]
	);

	$wp_customize->add_control(
		'academy-hero-logo-header',
		[
			'description' => __( 'Change the heading text that displays above the logo section if any logos are uploaded.', 'academy-pro' ),
			'label'       => __( 'Hero Logos Heading Text', 'academy-pro' ),
			'section'     => 'academy-logos',
		]
	);

	if ( isset( $wp_customize->selective_refresh ) ) {
		$wp_customize->selective_refresh->add_partial(
			'academy-hero-logo-header',
			[
				'selector'        => '.hero-logos-header',
				'settings'        => [ 'academy-hero-logo-header' ],
				'render_callback' => function() {
					return get_theme_mod( 'academy-hero-logo-header' );
				},
			]
		);
	}

	$wp_customize->add_control(
		new Academy_Customizer_Heading_Control(
			$wp_customize,
			'academy-logo-heading',
			[
				'section'         => 'academy-logos',
				'settings'        => [],
				'label'           => __( 'Hero Logo Images', 'academy-pro' ),
				'instructions'    => __( 'You can upload and crop up to 5 logo images.', 'academy-pro' ),
				'description'     => __( 'Each logo will be displayed at a maximum size of 160px by 40px. The recommended logo size is 320px wide by 80px tall.', 'academy-pro' ),
				'active_callback' => 'is_front_page',
				'type'            => 'heading',
			]
		)
	);

	// Hero Logo Images.
	$logos = [
		'logo1' => __( 'Logo 1', 'academy-pro' ),
		'logo2' => __( 'Logo 2', 'academy-pro' ),
		'logo3' => __( 'Logo 3', 'academy-pro' ),
		'logo4' => __( 'Logo 4', 'academy-pro' ),
		'logo5' => __( 'Logo 5', 'academy-pro' ),
	];

	foreach ( $logos as $field => $label ) {

		$wp_customize->add_setting(
			"academy-hero-logos-images[$field]",
			[
				'sanitize_callback' => 'absint',
			]
		);

		$wp_customize->add_control(
			new WP_Customize_Media_Control(
				$wp_customize,
				"academy-hero-logos-images[$field]",
				[
					/* translators: %s is replaced with a label representing the logo image number, such as "Logo 3" */
					'description' => sprintf( __( 'Select an image to display for %s.', 'academy-pro' ), $label ),
					'label'       => $label,
					'section'     => 'academy-logos',
					'settings'    => "academy-hero-logos-images[$field]",
					'flex_width'  => true,
					'flex_height' => true,
					'height'      => 80,
					'width'       => 320,
				]
			)
		);

	}

	// Academy custom color settings.
	$wp_customize->add_setting(
		'academy_primary_color',
		[
			'default'           => academy_customizer_get_default_primary_color(),
			'sanitize_callback' => 'sanitize_hex_color',
		]
	);

	$wp_customize->add_control(
		new WP_Customize_Color_Control(
			$wp_customize,
			'academy_primary_color',
			[
				'description' => __( 'Change the default primary color (i.e. linked titles, menu links, post info links, buttons, and more).', 'academy-pro' ),
				'label'       => __( 'Primary Color', 'academy-pro' ),
				'section'     => 'colors',
				'settings'    => 'academy_primary_color',
			]
		)
	);

	// Grid layout options.
	$wp_customize->add_control(
		new Academy_Customizer_Heading_Control(
			$wp_customize,
			'academy_grid_options_link',
			[
				'label'        => __( 'Grid Layout Options', 'academy-pro' ),
				'instructions' => __( 'These options apply to the Grid Layout if selected for categories and tags.', 'academy-pro' ),
				'priority'     => 98,
				'section'      => 'genesis_archives',
				'settings'     => [],
				'type'         => 'heading',
			]
		)
	);

	$wp_customize->add_setting(
		'academy-grid-option',
		[
			'default'           => 1,
			'sanitize_callback' => 'absint',
		]
	);

	$wp_customize->add_control(
		'academy-grid-option',
		[
			'label'    => __( 'Apply the grid layout as the default layout for categories and tags?', 'academy-pro' ),
			'priority' => 99,
			'section'  => 'genesis_archives',
			'settings' => 'academy-grid-option',
			'type'     => 'checkbox',
		]
	);

	$wp_customize->add_setting(
		'academy-grid-thumbnail',
		[
			'default'           => 1,
			'sanitize_callback' => 'absint',
		]
	);

	$wp_customize->add_control(
		'academy-grid-thumbnail',
		[
			'label'    => __( 'Display the featured image above the title?', 'academy-pro' ),
			'priority' => 100,
			'section'  => 'genesis_archives',
			'settings' => 'academy-grid-thumbnail',
			'type'     => 'checkbox',
		]
	);

	$wp_customize->add_setting(
		'academy-content-archive',
		[
			'default'           => academy_content_archive_option(),
			'sanitize_callback' => 'academy_sanitize_select',
		]
	);

	$wp_customize->add_control(
		'academy-content-archive',
		[
			'label'    => __( 'Select one of the following', 'academy-pro' ),
			'priority' => 101,
			'section'  => 'genesis_archives',
			'settings' => 'academy-content-archive',
			'type'     => 'select',
			'choices'  => [
				'full'     => __( 'Entry content', 'academy-pro' ),
				'excerpts' => __( 'Entry excerpts', 'academy-pro' ),
			],
		]
	);

	$wp_customize->add_setting(
		'academy-grid-archive-limit',
		[
			'default'           => academy_get_default_grid_limit(),
			'sanitize_callback' => 'absint',
		]
	);

	$wp_customize->add_control(
		'academy-grid-archive-limit',
		[
			'label'    => __( 'Limit content to how many characters? (Enter 0 for no limit)', 'academy-pro' ),
			'priority' => 102,
			'section'  => 'genesis_archives',
			'settings' => 'academy-grid-archive-limit',
			'type'     => 'number',
		]
	);

	$wp_customize->add_setting(
		'academy-grid-posts-per-page',
		[
			'default'           => academy_get_default_grid_posts_per_page(),
			'sanitize_callback' => 'absint',
		]
	);

	$wp_customize->add_control(
		'academy-grid-posts-per-page',
		[
			'label'    => __( 'Grid Layout Posts Per Page', 'academy-pro' ),
			'priority' => 103,
			'section'  => 'genesis_archives',
			'settings' => 'academy-grid-posts-per-page',
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
function academy_sanitize_select( $input, $setting ) {

	// Ensures input is a slug.
	$input = sanitize_key( $input );

	// Gets a list of choices from the control associated with the setting.
	$choices = $setting->manager->get_control( $setting->id )->choices;

	// If the input is a valid key, return it; otherwise, return the default.
	return ( array_key_exists( $input, $choices ) ? $input : $setting->default );

}

add_action( 'customize_preview_init', 'academy_customizer_preview_scripts' );
/**
 * Enqueue Customizer preview scripts.
 *
 * @return void
 *
 * @since 1.0.0
 */
function academy_customizer_preview_scripts() {

	// Include the regular customizer preview script file.
	wp_enqueue_script( 'academy-preview-scripts', get_stylesheet_directory_uri() . '/lib/customizer/customize.js', [ 'jquery' ], '1.0.0', true );

}
