<?php
/**
 * Revolution Pro.
 *
 * This file adds functions to the Revolution Pro Theme.
 *
 * @package Revolution Pro
 * @author  StudioPress
 * @license GPL-2.0-or-later
 * @link    https://my.studiopress.com/themes/revolution/
 */

// Starts the engine.
require_once get_template_directory() . '/lib/init.php';

// Sets up the Theme.
require_once CHILD_DIR . '/lib/theme-defaults.php';

add_action( 'after_setup_theme', 'revolution_localization_setup' );
/**
 * Sets localization (do not remove).
 *
 * @since 1.0.0
 */
function revolution_localization_setup() {

	load_child_theme_textdomain( 'revolution-pro', CHILD_DIR . '/languages' );

}

// Adds helper functions.
require_once CHILD_DIR . '/lib/helper-functions.php';

// Adds image upload and color select to Customizer.
require_once CHILD_DIR . '/lib/customize.php';

// Includes Customizer CSS.
require_once CHILD_DIR . '/lib/output.php';

// Adds WooCommerce support.
require_once CHILD_DIR . '/lib/woocommerce/woocommerce-setup.php';

// Adds the required WooCommerce styles and Customizer CSS.
require_once CHILD_DIR . '/lib/woocommerce/woocommerce-output.php';

// Adds the Genesis Connect WooCommerce notice.
require_once CHILD_DIR . '/lib/woocommerce/woocommerce-notice.php';

add_action( 'after_setup_theme', 'genesis_child_gutenberg_support' );
/**
 * Adds Gutenberg opt-in features and styling.
 *
 * @since 1.0.0
 */
function genesis_child_gutenberg_support() { // phpcs:ignore WordPress.NamingConventions.PrefixAllGlobals.NonPrefixedFunctionFound -- using same in all child themes to allow action to be unhooked.
	require_once CHILD_DIR . '/lib/gutenberg/init.php';
}

add_action( 'wp_enqueue_scripts', 'revolution_enqueue_scripts_styles' );
/**
 * Enqueues scripts and styles.
 *
 * @since 1.0.0
 */
function revolution_enqueue_scripts_styles() {

	wp_enqueue_style(
		genesis_get_theme_handle() . '-fonts',
		'//fonts.googleapis.com/css?family=Noto+Serif+SC:300,600|Playfair+Display:400,700,700i|Poppins:400',
		[],
		genesis_get_theme_version()
	);

	wp_enqueue_style( 'dashicons' );

	$suffix = ( defined( 'SCRIPT_DEBUG' ) && SCRIPT_DEBUG ) ? '' : '.min';
	wp_enqueue_script(
		genesis_get_theme_handle() . '-responsive-menu',
		CHILD_URL . "/js/responsive-menus{$suffix}.js",
		[ 'jquery' ],
		genesis_get_theme_version(),
		true
	);

	wp_localize_script(
		genesis_get_theme_handle() . '-responsive-menu',
		'genesis_responsive_menu',
		revolution_responsive_menu_settings()
	);

	wp_enqueue_script(
		genesis_get_theme_handle() . '-smooth-scroll',
		CHILD_URL . '/js/smooth-scroll.js',
		[ 'jquery' ],
		genesis_get_theme_version(),
		true
	);

	wp_enqueue_script(
		genesis_get_theme_handle() . '-sticky-header',
		CHILD_URL . '/js/sticky-header.js',
		[ 'jquery' ],
		genesis_get_theme_version(),
		true
	);

	// Makes the height difference of the 'shrunk' and full header available
	// to sticky-header.js. This value is hard to measure via JavaScript as the
	// full-height header state is not always visible on page load.
	wp_localize_script(
		genesis_get_theme_handle() . '-sticky-header',
		'studiopressStickyHeaderConfig',
		[
			'heightDifference' => 30,
		]
	);

}

/**
 * Defines responsive menu settings.
 *
 * @since 1.0.0
 */
function revolution_responsive_menu_settings() {

	$settings = [
		'mainMenu'         => __( 'Menu', 'revolution-pro' ),
		'menuIconClass'    => 'dashicons-before dashicons-menu',
		'subMenu'          => __( 'Submenu', 'revolution-pro' ),
		'subMenuIconClass' => 'dashicons-before dashicons-arrow-down-alt2',
		'menuClasses'      => [
			'combine' => [
				'.nav-secondary',
				'.nav-primary',
			],
			'others'  => [],
		],
		'combineMethod'    => 'prepend',
	];

	return $settings;

}

add_action( 'after_setup_theme', 'revolution_theme_support', 9 );
/**
 * Add desired theme supports.
 *
 * See config file at `config/theme-supports.php`.
 *
 * @since 1.2.0
 */
function revolution_theme_support() {

	$theme_supports = genesis_get_config( 'theme-supports' );

	foreach ( $theme_supports as $feature => $args ) {
		add_theme_support( $feature, $args );
	}

}

add_action( 'after_setup_theme', 'revolution_post_type_support', 9 );
/**
 * Add desired post type supports.
 *
 * See config file at `config/post-type-supports.php`.
 *
 * @since 1.2.0
 */
function revolution_post_type_support() {

	$post_type_supports = genesis_get_config( 'post-type-supports' );

	foreach ( $post_type_supports as $post_type => $args ) {
		add_post_type_support( $post_type, $args );
	}

}

// Adds image sizes.
add_image_size( 'genesis-singular-images', 640, 365, true );

// Removes header right widget area.
unregister_sidebar( 'header-right' );

// Removes secondary sidebar.
unregister_sidebar( 'sidebar-alt' );

// Removes site layouts.
genesis_unregister_layout( 'content-sidebar-sidebar' );
genesis_unregister_layout( 'sidebar-content-sidebar' );
genesis_unregister_layout( 'sidebar-sidebar-content' );

// Repositions primary navigation menu.
remove_action( 'genesis_after_header', 'genesis_do_nav' );
add_action( 'genesis_header', 'genesis_do_nav', 5 );

// Repositions secondary navigation menu.
remove_action( 'genesis_after_header', 'genesis_do_subnav' );
add_action( 'genesis_header', 'genesis_do_subnav', 12 );

add_filter( 'genesis_author_box_gravatar_size', 'revolution_author_box_gravatar' );
/**
 * Modifies size of the Gravatar in the author box.
 *
 * @since 1.0.0
 *
 * @param int $size Original icon size.
 * @return int Modified icon size.
 */
function revolution_author_box_gravatar( $size ) {

	return 90;

}

add_filter( 'genesis_comment_list_args', 'revolution_comments_gravatar' );
/**
 * Modifies size of the Gravatar in the entry comments.
 *
 * @since 1.0.0
 *
 * @param array $args Gravatar settings.
 * @return array Gravatar settings with modified size.
 */
function revolution_comments_gravatar( $args ) {

	$args['avatar_size'] = 60;
	return $args;

}
