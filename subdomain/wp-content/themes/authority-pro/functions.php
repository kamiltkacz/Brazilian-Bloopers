<?php
/**
 * Authority Pro.
 *
 * This file adds functions to the Authority Pro Theme.
 *
 * @package Authority
 * @author  StudioPress
 * @license GPL-2.0-or-later
 * @link    https://my.studiopress.com/themes/authority/
 */

// Starts the engine.
require_once get_template_directory() . '/lib/init.php';

// Defines the child theme (do not remove).
define( 'CHILD_THEME_HANDLE', sanitize_title_with_dashes( wp_get_theme()->get( 'Name' ) ) );
define( 'CHILD_THEME_VERSION', wp_get_theme()->get( 'Version' ) );

add_action( 'after_setup_theme', 'authority_localization_setup' );
/**
 * Sets localization (do not remove).
 *
 * @since 1.0.0
 */
function authority_localization_setup() {
	load_child_theme_textdomain( 'authority-pro', get_stylesheet_directory() . '/languages' );
}

// Adds the theme helper functions.
require_once get_stylesheet_directory() . '/lib/helper-functions.php';

// Adds image upload and color select to WordPress Theme Customizer.
require_once get_stylesheet_directory() . '/lib/customizer/customize.php';

// Includes customizer CSS.
require_once get_stylesheet_directory() . '/lib/customizer/output.php';

// Includes the featured image markup if required.
require_once get_stylesheet_directory() . '/lib/featured-images.php';

// Includes subtitle markup and filters.
require_once get_stylesheet_directory() . '/lib/subtitles.php';

// Adds the grid layout.
require_once get_stylesheet_directory() . '/lib/grid-layout.php';

// Adds WooCommerce support.
require_once get_stylesheet_directory() . '/lib/woocommerce/woocommerce-setup.php';

// Includes the customizer CSS for the WooCommerce plugin.
require_once get_stylesheet_directory() . '/lib/woocommerce/woocommerce-output.php';

// Includes notice to install Genesis Connect for WooCommerce.
require_once get_stylesheet_directory() . '/lib/woocommerce/woocommerce-notice.php';

add_action( 'after_setup_theme', 'genesis_child_gutenberg_support' );
/**
 * Adds Gutenberg opt-in features and styling.
 *
 * Allows plugins to remove support if required.
 *
 * @since 1.1.0
 */
function genesis_child_gutenberg_support() { // phpcs:ignore WordPress.NamingConventions.PrefixAllGlobals.NonPrefixedFunctionFound -- using same in all child themes to allow action to be unhooked.
	require_once get_stylesheet_directory() . '/lib/gutenberg/init.php';
}

add_action( 'wp_enqueue_scripts', 'authority_enqueue_scripts_styles' );
/**
 * Enqueues scripts and styles.
 *
 * @since 1.0.0
 */
function authority_enqueue_scripts_styles() {

	wp_enqueue_style( 'authority-fonts', '//fonts.googleapis.com/css?family=Source+Sans+Pro:600,700,900|Libre+Baskerville:400,400italic,700', [], CHILD_THEME_VERSION );
	wp_enqueue_style( 'dashicons' );

	$suffix = ( defined( 'SCRIPT_DEBUG' ) && SCRIPT_DEBUG ) ? '' : '.min';
	wp_enqueue_script( 'authority-responsive-menu', get_stylesheet_directory_uri() . '/js/responsive-menus' . $suffix . '.js', [ 'jquery' ], CHILD_THEME_VERSION, true );
	wp_localize_script( 'authority-responsive-menu', 'genesis_responsive_menu', authority_responsive_menu_settings() );

	// Sets up page if it has top banner.
	if ( get_theme_mod( 'authority-top-banner-visibility', true ) ) {

		wp_enqueue_script( 'top-banner-js', get_stylesheet_directory_uri() . '/js/top-banner.js', [ 'jquery' ], CHILD_THEME_VERSION, true );

	}

}

add_action( 'body_class', 'authority_top_banner_classes' );
/**
 * Adds top-banner body classes.
 *
 * @since 1.0.0
 *
 * @param array $classes Current classes.
 * @return array The new classes.
 */
function authority_top_banner_classes( $classes ) {

	if ( get_theme_mod( 'authority-top-banner-visibility', true ) ) {

		$classes[] = 'top-banner-hidden';

		if ( is_customize_preview() ) {
			$classes[] = 'customizer-preview';
		}
	}

	return $classes;

}

/**
 * Defines the responsive menu settings.
 *
 * @since 1.0.0
 */
function authority_responsive_menu_settings() {

	$settings = [
		'mainMenu'         => __( 'Menu', 'authority-pro' ),
		'menuIconClass'    => 'dashicons-before dashicons-menu',
		'subMenu'          => __( 'Submenu', 'authority-pro' ),
		'subMenuIconClass' => 'dashicons-before dashicons-arrow-down-alt2',
		'menuClasses'      => [
			'combine' => [
				'.nav-primary',
				'.nav-social',
			],
			'others'  => [],
		],
	];

	return $settings;

}

add_action( 'after_setup_theme', 'authority_theme_support', 9 );
/**
 * Add desired theme supports.
 *
 * See config file at `config/theme-supports.php`.
 *
 * @since 1.3.0
 */
function authority_theme_support() {

	$theme_supports = genesis_get_config( 'theme-supports' );

	foreach ( $theme_supports as $feature => $args ) {
		add_theme_support( $feature, $args );
	}

}

// Adds image sizes.
add_image_size( 'single-featured-image', 1200, 385, true );
add_image_size( 'blog-featured-image', 680, 290, true );
add_image_size( 'home-featured', 380, 570, true );

add_filter( 'image_size_names_choose', 'authority_media_library_sizes' );
/**
 * Adds image sizes to media image size dropdown.
 *
 * @since 1.0.0
 *
 * @param array $sizes Array of image sizes and their names.
 * @return array The modified list of sizes.
 */
function authority_media_library_sizes( $sizes ) {

	$sizes['home-featured']       = __( 'Home - Featured Image', 'authority-pro' );
	$sizes['blog-featured-image'] = __( 'Blog - Featured Image', 'authority-pro' );

	return $sizes;

}

// Removes header right widget area.
unregister_sidebar( 'header-right' );

// Removes secondary sidebar.
unregister_sidebar( 'sidebar-alt' );

// Removes site layouts.
genesis_unregister_layout( 'content-sidebar-sidebar' );
genesis_unregister_layout( 'sidebar-content-sidebar' );
genesis_unregister_layout( 'sidebar-sidebar-content' );

// Relocates skip links.
remove_action( 'genesis_before_header', 'genesis_skip_links', 5 );
add_action( 'genesis_before', 'genesis_skip_links', 5 );

add_filter( 'genesis_skip_links_output', 'authority_skip_links_output' );
/**
 * Removes skip link for primary navigation and adds skip link for footer widgets.
 *
 * @since 1.0.0
 *
 * @param array $links The list of skip links.
 * @return array $links The modified list of skip links.
 */
function authority_skip_links_output( $links ) {

	if ( isset( $links['genesis-nav-primary'] ) ) {
		unset( $links['genesis-nav-primary'] );
	}

	$new_links = $links;
	array_splice( $new_links, 3 );

	if ( is_active_sidebar( 'authority-footer' ) ) {
		$new_links['footer'] = __( 'Skip to footer', 'authority-pro' );
	}

	return array_merge( $new_links, $links );

}

add_filter( 'genesis_customizer_theme_settings_config', 'authority_remove_customizer_settings' );
/**
 * Removes Header panel from Genesis Theme Settings in the Customizer.
 *
 * No need to toggle the site header between image and text as the theme supports a custom logo.
 *
 * @since 1.2.0
 *
 * @param array $config Original Customizer items.
 * @return array Filtered Customizer items.
 */
function authority_remove_customizer_settings( $config ) {

	unset( $config['genesis']['sections']['genesis_breadcrumbs']['controls']['breadcrumb_front_page'] );
	return $config;

}

// Repositions primary navigation menu.
remove_action( 'genesis_after_header', 'genesis_do_nav' );
add_action( 'genesis_header', 'genesis_do_nav', 12 );

// Repositions the secondary navigation menu.
remove_action( 'genesis_after_header', 'genesis_do_subnav' );
add_action( 'genesis_footer', 'genesis_do_subnav', 5 );

add_filter( 'genesis_attr_nav-social', 'authority_social_menu_atts' );
/**
 * Adds appropriate attributes to social nav.
 *
 * @since 1.0.0
 *
 * @param array $atts The navigation element attributes.
 * @return array The modified navigation element attributes.
 */
function authority_social_menu_atts( $atts ) {

	$atts['aria-labelledby'] = 'additional-menu-label';
	$atts['id']              = 'genesis-nav-social';
	$atts['itemscope']       = true;
	$atts['itemtype']        = 'https://schema.org/SiteNavigationElement';

	return $atts;

}

add_action( 'genesis_before_header', 'authority_do_social_menu', 9 );
/**
 * Outputs the social menu.
 *
 * @since 1.0.0
 */
function authority_do_social_menu() {

	echo '<h2 id="additional-menu-label" class="screen-reader-text">' . esc_html__( 'Additional menu', 'authority-pro' ) . '</h2>';

	genesis_nav_menu(
		[
			'theme_location' => 'social',
			'depth'          => 1,
		]
	);

}

add_filter( 'wp_nav_menu_args', 'authority_secondary_menu_args' );
/**
 * Reduces the secondary navigation menu to one level depth.
 *
 * @since 1.0.0
 *
 * @param array $args The WP navigation menu arguments.
 * @return array The modified menu arguments.
 */
function authority_secondary_menu_args( $args ) {

	if ( 'secondary' === $args['theme_location'] ) {
		$args['depth'] = 1;
	}

	return $args;

}

add_filter( 'get_the_content_limit', 'authority_content_limit_read_more_markup', 10, 3 );
/**
 * Modifies the generic more link markup for posts.
 *
 * @since 1.0.0
 *
 * @param string $output The current full HTML.
 * @param string $content The content HTML.
 * @param string $link The link HTML.
 * @return string The new more link HTML.
 */
function authority_content_limit_read_more_markup( $output, $content, $link ) {

	if ( is_page_template( 'page_blog.php' ) || is_home() || is_archive() || is_search() ) {
		$link = sprintf( '<a href="%s">%s &#x2192;</a>', get_the_permalink(), genesis_a11y_more_link( __( 'Continue Reading', 'authority-pro' ) ) );
	}

	$output = sprintf( '<p>%s &#x02026;</p><p class="more-link-wrap">%s</p>', $content, str_replace( '&#x02026;', '', $link ) );

	return $output;

}

add_filter( 'genesis_author_box_gravatar_size', 'authority_author_box_gravatar' );
/**
 * Modifies the size of the Gravatar in the author box.
 *
 * @since 1.0.0
 *
 * @param int $size Current Gravatar size.
 * @return int New size.
 */
function authority_author_box_gravatar( $size ) {

	return 124;

}

add_filter( 'genesis_comment_list_args', 'authority_comments_gravatar' );
/**
 * Modifies the size of the Gravatar in the entry comments.
 *
 * @since 1.0.0
 *
 * @param array $args The comment list arguments.
 * @return array Arguments with new avatar size.
 */
function authority_comments_gravatar( $args ) {

	$args['avatar_size'] = 35;

	return $args;

}

/**
 * Counts used widgets in given sidebar.
 *
 * @since 1.0.0
 *
 * @param string $id The sidebar ID.
 * @return int|void The number of widgets, or nothing.
 */
function authority_count_widgets( $id ) {

	$sidebars_widgets = wp_get_sidebars_widgets();

	if ( isset( $sidebars_widgets[ $id ] ) ) {
		return count( $sidebars_widgets[ $id ] );
	}

}

/**
 * Gives odd or even class name based on widget count.
 *
 * @since 1.0.0
 *
 * @param string $id The widget ID.
 * @return string The class.
 */
function authority_widget_area_class( $id ) {

	$count = authority_count_widgets( $id );

	if ( 0 === $count % 2 ) {
		$class = 'widget-even';
	} else {
		$class = 'widget-odd';
	}

	return $class;

}

add_action( 'genesis_before_footer', 'authority_footer_widgets' );
/**
 * Adds the flexible footer widget area.
 *
 * @since 1.0.0
 */
function authority_footer_widgets() {

	$widget_count = authority_count_widgets( 'authority-footer' );
	$classes      = authority_widget_area_class( 'authority-footer' );

	// If only two widgets, configure featured layout via class.
	if ( 2 === $widget_count ) {
		$classes .= ' featured-footer-layout';
	}

	// Removes subitle.
	remove_filter( 'the_title', 'authority_title' );

	genesis_widget_area(
		'authority-footer',
		[
			'before' => '<div id="footer" class="footer-widgets"><h2 class="genesis-sidebar-title screen-reader-text">' . __( 'Footer', 'authority-pro' ) . '</h2><div class="flexible-widgets widget-area ' . $classes . '"><div class="wrap">',
			'after'  => '</div></div></div>',
		]
	);

}

add_action( 'genesis_before', 'authority_do_top_banner' );
/**
 * Outputs the Top Banner if visible.
 *
 * @since 1.0.0
 */
function authority_do_top_banner() {

	if ( get_theme_mod( 'authority-top-banner-visibility', true ) ) {

		$button      = sprintf( '<button id="authority-top-banner-close"><span class="dashicons dashicons-no-alt"></span><span class="screen-reader-text">%s</span></button>', __( 'Close Top Banner', 'authority-pro' ) );
		$banner_text = get_theme_mod( 'authority-top-banner-text', authority_get_default_top_banner_text() );

		printf(
			'<div class="authority-top-banner">%s%s</div>',
			wp_kses_post( $banner_text ),
			$button // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped
		);

	}

}

// Registers widget areas.
genesis_register_sidebar(
	[
		'id'          => 'authority-footer',
		'name'        => __( 'Footer', 'authority-pro' ),
		'description' => __( 'This is the footer section.', 'authority-pro' ),
	]
);
