<?php
/**
 * News Pro.
 *
 * This file adds the functions to the News Pro Theme.
 *
 * @package News
 * @author  StudioPress
 * @license GPL-2.0-or-later
 * @link    https://my.studiopress.com/themes/news/
 */

// Start the engine.
require_once get_template_directory() . '/lib/init.php';

// Sets up theme.
require_once get_stylesheet_directory() . '/lib/theme-defaults.php';

add_action( 'after_setup_theme', 'news_localization_setup' );
/**
 * Sets localization (do not remove).
 *
 * @since 1.0.0
 */
function news_localization_setup() {

	load_child_theme_textdomain( 'news-pro', get_stylesheet_directory() . '/languages' );

}

// Adds the theme helper functions.
require_once get_stylesheet_directory() . '/lib/helper-functions.php';

// Adds Color select to WordPress Theme Customizer.
require_once get_stylesheet_directory() . '/lib/customize.php';

// Includes Customizer CSS.
require_once get_stylesheet_directory() . '/lib/output.php';

// Includes WooCommerce support.
require_once get_stylesheet_directory() . '/lib/woocommerce/woocommerce-setup.php';

// Includes WooCommerce styles and Customizer CSS.
require_once get_stylesheet_directory() . '/lib/woocommerce/woocommerce-output.php';

// Includes Genesis Connect WooCommerce notice.
require_once get_stylesheet_directory() . '/lib/woocommerce/woocommerce-notice.php';

// Child theme (do not remove).
define( 'CHILD_THEME_NAME', __( 'News Pro', 'news-pro' ) );
define( 'CHILD_THEME_URL', 'http://my.studiopress.com/themes/news/' );
define( 'CHILD_THEME_VERSION', '3.2.3' );

// Adds HTML5 markup structure.
add_theme_support(
	'html5',
	[
		'search-form',
		'comment-form',
		'comment-list',
		'gallery',
		'caption',
	]
);

// Adds Accessibility support.
add_theme_support(
	'genesis-accessibility',
	[
		'404-page',
		'drop-down-menu',
		'headings',
		'rems',
		'search-form',
		'skip-links',
	]
);

// Adds viewport meta tag for mobile browsers.
add_theme_support( 'genesis-responsive-viewport' );

add_action( 'wp_enqueue_scripts', 'news_load_scripts' );
/**
 * Enqueues scripts, fonts, and styles.
 *
 * @since 1.0.0
 */
function news_load_scripts() {

	wp_enqueue_style( 'dashicons' );

	wp_enqueue_style( 'google-fonts', '//fonts.googleapis.com/css?family=Raleway:400,700', [], CHILD_THEME_VERSION );

	wp_enqueue_script( 'news-match-height', get_stylesheet_directory_uri() . '/js/jquery.matchHeight.min.js', [ 'jquery' ], CHILD_THEME_VERSION, true );
	wp_enqueue_script( 'news-global-js', get_stylesheet_directory_uri() . '/js/global.js', [ 'jquery', 'news-match-height' ], CHILD_THEME_VERSION, true );

	$suffix = ( defined( 'SCRIPT_DEBUG' ) && SCRIPT_DEBUG ) ? '' : '.min';
	wp_enqueue_script( 'news-responsive-menus', get_stylesheet_directory_uri() . "/js/responsive-menus{$suffix}.js", [ 'jquery' ], CHILD_THEME_VERSION, true );
	wp_localize_script(
		'news-responsive-menus',
		'genesis_responsive_menu',
		news_get_responsive_menu_settings()
	);

}

/**
 * Defines the responsive menu settings.
 *
 * @since 3.2.0
 */
function news_get_responsive_menu_settings() {

	$settings = [
		'mainMenu'    => __( 'Menu', 'news-pro' ),
		'subMenu'     => __( 'Submenu', 'news-pro' ),
		'menuClasses' => [
			'combine' => [
				'.nav-secondary',
				'.nav-primary',
				'.nav-header',
			],
		],
	];

	return $settings;

}

// Adds image sizes.
add_image_size( 'home-bottom', 150, 150, true );
add_image_size( 'home-middle', 348, 180, true );
add_image_size( 'home-top', 740, 400, true );

// Adds support for custom background.
add_theme_support( 'custom-background' );

// Adds support for custom header.
add_theme_support(
	'custom-header',
	[
		'flex-height'     => true,
		'header_image'    => '',
		'header-selector' => '.site-title a',
		'header-text'     => false,
		'height'          => 180,
		'width'           => 520,
	]
);

// Renames primary and secondary navigation menus.
add_theme_support(
	'genesis-menus',
	[
		'secondary' => __( 'Before Header Menu', 'news-pro' ),
		'primary'   => __( 'After Header Menu', 'news-pro' ),
	]
);

// Removes output of primary navigation right extras.
remove_filter( 'genesis_nav_items', 'genesis_nav_right', 10, 2 );
remove_filter( 'wp_nav_menu_items', 'genesis_nav_right', 10, 2 );

add_action( 'genesis_theme_settings_metaboxes', 'news_remove_genesis_metaboxes' );
/**
 * Removes navigation meta box.
 *
 * @since 1.0.0
 *
 * @param string $_genesis_theme_settings_pagehook The page hook name.
 */
function news_remove_genesis_metaboxes( $_genesis_theme_settings_pagehook ) {

	remove_meta_box( 'genesis-theme-settings-nav', $_genesis_theme_settings_pagehook, 'main' );

}

add_action( 'genesis_before_header', 'news_open_site_container_wrap' );
/**
 * Opens wrap within site-container.
 *
 * @since 1.0.0
 */
function news_open_site_container_wrap() {

	echo '<div class="site-container-wrap">';

}

// Repositions the secondary navigation.
remove_action( 'genesis_after_header', 'genesis_do_subnav' );
add_action( 'genesis_before_header', 'genesis_do_subnav' );

add_action( 'genesis_after_footer', 'news_close_site_container_wrap' );
/**
 * Closes wrap within site-container.
 *
 * @since 1.0.0
 */
function news_close_site_container_wrap() {

	echo '</div>';

}

// Adds support for 6-column footer widgets.
add_theme_support( 'genesis-footer-widgets', 6 );

// Adds support for after entry widget.
add_theme_support( 'genesis-after-entry-widget-area' );

// Relocates after entry widget.
remove_action( 'genesis_after_entry', 'genesis_after_entry_widget_area' );
add_action( 'genesis_after_entry', 'genesis_after_entry_widget_area', 5 );

// Registers widget areas.
genesis_register_sidebar(
	[
		'id'          => 'home-top',
		'name'        => __( 'Home - Top', 'news-pro' ),
		'description' => __( 'This is the top section of the homepage.', 'news-pro' ),
	]
);
genesis_register_sidebar(
	[
		'id'          => 'home-middle-left',
		'name'        => __( 'Home - Middle Left', 'news-pro' ),
		'description' => __( 'This is the middle left section of the homepage.', 'news-pro' ),
	]
);
genesis_register_sidebar(
	[
		'id'          => 'home-middle-right',
		'name'        => __( 'Home - Middle Right', 'news-pro' ),
		'description' => __( 'This is the middle right section of the homepage.', 'news-pro' ),
	]
);
genesis_register_sidebar(
	[
		'id'          => 'home-bottom',
		'name'        => __( 'Home - Bottom', 'news-pro' ),
		'description' => __( 'This is the bottom section of the homepage.', 'news-pro' ),
	]
);
