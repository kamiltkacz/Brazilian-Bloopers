<?php
/**
 * Author Pro.
 *
 * This file adds the functions to the Author Pro Theme.
 *
 * @package Author
 * @author  StudioPress
 * @license GPL-2.0+
 * @link    http://my.studiopress.com/themes/author/
 */

// Starts the engine.
require_once get_template_directory() . '/lib/init.php';

// Sets up the theme.
require_once get_stylesheet_directory() . '/lib/theme-defaults.php';

add_action( 'after_setup_theme', 'author_localization_setup' );
/**
 * Sets localization (do not remove).
 *
 * @since 1.0.0
 */
function author_localization_setup() {
	load_child_theme_textdomain( 'author-pro', get_stylesheet_directory() . '/languages' );
}

// Adds the theme helper functions.
require_once get_stylesheet_directory() . '/lib/helper-functions.php';

// Adds Color select to WordPress Theme Customizer.
require_once get_stylesheet_directory() . '/lib/customize.php';

// Includes Customizer CSS.
require_once get_stylesheet_directory() . '/lib/output.php';

// Includes WooCommerce support.
require_once get_stylesheet_directory() . '/lib/woocommerce/woocommerce-setup.php';

// Includes the WooCommerce styles and Customizer CSS.
require_once get_stylesheet_directory() . '/lib/woocommerce/woocommerce-output.php';

// Includes the Genesis Connect WooCommerce notice.
require_once get_stylesheet_directory() . '/lib/woocommerce/woocommerce-notice.php';

// Defines the child theme (do not remove).
define( 'CHILD_THEME_NAME', __( 'Author Pro', 'author-pro' ) );
define( 'CHILD_THEME_URL', 'http://my.studiopress.com/themes/author/' );
define( 'CHILD_THEME_VERSION', '1.2.4' );

add_action( 'wp_enqueue_scripts', 'author_enqueue_scripts_styles' );
/**
 * Enqueues scripts and styles.
 *
 * @since 1.0.0
 */
function author_enqueue_scripts_styles() {

	wp_enqueue_style( 'dashicons' );
	wp_enqueue_style( 'google-fonts', '//fonts.googleapis.com/css?family=Lato:300,400,900,400italic', [], CHILD_THEME_VERSION );

	$suffix = ( defined( 'SCRIPT_DEBUG' ) && SCRIPT_DEBUG ) ? '' : '.min';
	wp_enqueue_script( 'author-responsive-menu', get_stylesheet_directory_uri() . '/js/responsive-menus' . $suffix . '.js', [ 'jquery' ], CHILD_THEME_VERSION, true );
	wp_localize_script(
		'author-responsive-menu',
		'genesis_responsive_menu',
		author_responsive_menu_settings()
	);

	wp_enqueue_script( 'author-match-height', get_stylesheet_directory_uri() . '/js/jquery.matchHeight.min.js', [ 'jquery' ], CHILD_THEME_VERSION, true );
	wp_enqueue_script( 'author-global', get_stylesheet_directory_uri() . '/js/global.js', [ 'jquery', 'author-responsive-menu', 'author-match-height' ], CHILD_THEME_VERSION, true );

}

/**
 * Defines the responsive menu settings.
 */
function author_responsive_menu_settings() {

	$settings = [
		'mainMenu'    => __( 'Menu', 'author-pro' ),
		'subMenu'     => __( 'Submenu', 'author-pro' ),
		'menuClasses' => [
			'combine' => [
				'.nav-primary',
				'.nav-secondary',
			],
		],
	];

	return $settings;

}

// Adds new image sizes.
add_image_size( 'featured-content', 800, 800, true );

// Adds HTML5 markup structure.
add_theme_support( 'html5', [ 'search-form', 'comment-form', 'comment-list', 'gallery', 'caption' ] );

// Adds viewport meta tag for mobile browsers.
add_theme_support( 'genesis-responsive-viewport' );

// Enables Genesis Accessibility Components.
add_theme_support( 'genesis-accessibility', [ '404-page', 'drop-down-menu', 'headings', 'search-form', 'skip-links' ] );

// Adds support for custom background.
add_theme_support( 'custom-background' );

// Adds support for after entry widget.
add_theme_support( 'genesis-after-entry-widget-area' );

// Adds support for 3-column footer widgets.
add_theme_support( 'genesis-footer-widgets', 3 );

// Unregisters layout settings.
genesis_unregister_layout( 'content-sidebar-sidebar' );
genesis_unregister_layout( 'sidebar-content-sidebar' );
genesis_unregister_layout( 'sidebar-sidebar-content' );

// Unregisters secondary sidebar.
unregister_sidebar( 'sidebar-alt' );

// Unregisters the header right widget area.
unregister_sidebar( 'header-right' );

// Adds support for custom header.
add_theme_support(
	'custom-header',
	[
		'flex-height'     => true,
		'width'           => 640,
		'height'          => 140,
		'header-selector' => '.site-title a',
		'header-text'     => false,
	]
);

// Renames menus.
add_theme_support(
	'genesis-menus',
	[
		'primary'   => __( 'Header Menu', 'author-pro' ),
		'secondary' => __(
			'After Header Menu',
			'author-pro'
		),
	]
);

add_filter( 'genesis_skip_links_output', 'author_skip_links_output' );
/**
 * Removes skip link for primary navigation and adds skip link for footer widgets.
 *
 * @param array $links Current skip links.
 * @return array Modified skip links.
 */
function author_skip_links_output( $links ) {

	if ( isset( $links['genesis-nav-primary'] ) ) {
		unset( $links['genesis-nav-primary'] );
	}

	$new_links = $links;
	array_splice( $new_links, 1 );

	if ( has_nav_menu( 'secondary' ) ) {
		$new_links['genesis-nav-secondary'] = __( 'Skip to secondary navigation', 'author-pro' );
	}

	return array_merge( $new_links, $links );

}

add_filter( 'genesis_attr_nav-secondary', 'author_add_nav_secondary_id' );
/**
 * Adds ID to secondary navigation.
 *
 * @param array $attributes Current navigation attributes.
 * @return array Updated navigation attributes.
 */
function author_add_nav_secondary_id( $attributes ) {

	$attributes['id'] = 'genesis-nav-secondary';

	return $attributes;

}

// Repositions the navigation.
remove_action( 'genesis_after_header', 'genesis_do_nav' );
remove_action( 'genesis_after_header', 'genesis_do_subnav' );
add_action( 'genesis_header', 'genesis_do_nav', 12 );
add_action( 'genesis_before_content_sidebar_wrap', 'genesis_do_subnav' );

/**
 * Gives the number of widgets in the named widget area.
 *
 * @param string $id The widget ID, such as 'front-page-1'.
 * @return int|void The count if available.
 */
function author_count_widgets( $id ) {

	$sidebars_widgets = wp_get_sidebars_widgets();

	if ( isset( $sidebars_widgets[ $id ] ) ) {
		return count( $sidebars_widgets[ $id ] );
	}

}

/**
 * Determines the CSS class for the named widget area.
 *
 * @param string $id The widget ID, such as 'front-page-1'.
 * @return string Space-separated CSS classes.
 */
function author_widget_area_class( $id ) {

	$count = author_count_widgets( $id );

	$class = '';

	if ( 1 === $count ) {
		$class .= ' widget-full';
	} elseif ( 0 === $count % 3 ) {
		$class .= ' widget-thirds';
	} elseif ( 0 === $count % 4 ) {
		$class .= ' widget-fourths';
	} elseif ( 1 === $count % 2 ) {
		$class .= ' widget-halves uneven';
	} else {
		$class .= ' widget-halves';
	}

	return $class;

}

// Registers widget areas.
genesis_register_sidebar(
	[
		'id'          => 'front-page-1',
		'name'        => __( 'Front Page 1', 'author-pro' ),
		'description' => __( 'This is the front page 1 section.', 'author-pro' ),
	]
);
genesis_register_sidebar(
	[
		'id'          => 'front-page-2',
		'name'        => __( 'Front Page 2', 'author-pro' ),
		'description' => __( 'This is the front page 2 section.', 'author-pro' ),
	]
);
genesis_register_sidebar(
	[
		'id'          => 'front-page-3',
		'name'        => __( 'Front Page 3', 'author-pro' ),
		'description' => __( 'This is the front page 3 section.', 'author-pro' ),
	]
);
genesis_register_sidebar(
	[
		'id'          => 'front-page-4',
		'name'        => __( 'Front Page 4', 'author-pro' ),
		'description' => __( 'This is the front page 4 section.', 'author-pro' ),
	]
);
genesis_register_sidebar(
	[
		'id'          => 'front-page-5',
		'name'        => __( 'Front Page 5', 'author-pro' ),
		'description' => __( 'This is the front page 5 section.', 'author-pro' ),
	]
);
