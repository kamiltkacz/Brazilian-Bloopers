<?php
/**
 * Navigation Pro.
 *
 * This file adds functions to the Navigation Pro Theme.
 *
 * @package Navigation
 * @author  StudioPress
 * @license GPL-2.0-or-later
 * @link    https://my.studiopress.com/themes/navigation/
 */

// Starts the engine.
require_once get_template_directory() . '/lib/init.php';

add_action( 'after_setup_theme', 'navigation_localization_setup' );
/**
 * Sets localization (do not remove).
 *
 * @since 1.0.0
 */
function navigation_localization_setup() {

	load_child_theme_textdomain( 'navigation-pro', get_stylesheet_directory() . '/languages' );

}

// Adds the theme helper functions.
require_once get_stylesheet_directory() . '/lib/helper-functions.php';

// Adds theme markup functions.
require_once get_stylesheet_directory() . '/lib/markup.php';

// Adds Image upload and Color select to WordPress Theme Customizer.
require_once get_stylesheet_directory() . '/lib/customizer/customize.php';

// Includes Customizer CSS.
require_once get_stylesheet_directory() . '/lib/customizer/output.php';

// Adds the title helper functions.
require_once get_stylesheet_directory() . '/lib/title-functions.php';

// Adds the image helper functions.
require_once get_stylesheet_directory() . '/lib/image-functions.php';

// Adds WooCommerce support.
require_once get_stylesheet_directory() . '/lib/woocommerce/woocommerce-setup.php';

// Includes the Customizer CSS for the WooCommerce plugin.
require_once get_stylesheet_directory() . '/lib/woocommerce/woocommerce-output.php';

// Includes notice to install Genesis Connect for WooCommerce.
require_once get_stylesheet_directory() . '/lib/woocommerce/woocommerce-notice.php';

// Setup Simple Social Icons.
require_once get_stylesheet_directory() . '/lib/simple-social-icons/simple-social-icons.php';

add_action( 'after_setup_theme', 'navigation_theme_support', 1 );
/**
 * Add desired theme supports.
 *
 * See config file at `config/theme-supports.php`.
 *
 * @since 1.3.0
 */
function navigation_theme_support() {

	$theme_supports = genesis_get_config( 'theme-supports' );

	foreach ( $theme_supports as $feature => $args ) {
		add_theme_support( $feature, $args );
	}

}


add_action( 'after_setup_theme', 'navigation_post_type_support', 9 );
/**
 * Add desired post type supports.
 *
 * See config file at `config/post-type-supports.php`.
 *
 * @since 3.0.0
 */
function navigation_post_type_support() {

	$post_type_supports = genesis_get_config( 'post-type-supports' );

	foreach ( $post_type_supports as $post_type => $args ) {
		add_post_type_support( $post_type, $args );
	}

}


add_action( 'after_setup_theme', 'genesis_child_gutenberg_support' );
/**
 * Adds Gutenberg opt-in features and styling.
 *
 * Allows plugins to Removes support if required.
 *
 * @since 1.1.0
 */
function genesis_child_gutenberg_support() { // phpcs:ignore WordPress.NamingConventions.PrefixAllGlobals.NonPrefixedFunctionFound -- using same in all child themes to allow action to be unhooked.
	require_once get_stylesheet_directory() . '/lib/gutenberg/init.php';
}

// Registers Genesis Blocks layouts.
require_once get_stylesheet_directory() . '/lib/genesis-blocks/genesis-blocks.php';

// Registers the responsive menus.
if ( function_exists( 'genesis_register_responsive_menus' ) ) {
	genesis_register_responsive_menus( genesis_get_config( 'responsive-menus' ) );
}

add_action( 'wp_enqueue_scripts', 'navigation_enqueue_scripts_styles' );
/**
 * Enqueues scripts and styles.
 *
 * @since 1.0.0
 */
function navigation_enqueue_scripts_styles() {

	$appearance = genesis_get_config( 'appearance' );

	wp_enqueue_style(
		genesis_get_theme_handle() . '-fonts',
		$appearance['fonts-url'],
		[],
		genesis_get_theme_version()
	);

	wp_enqueue_style(
		genesis_get_theme_handle() . '-icons',
		$appearance['icons-url'],
		[],
		genesis_get_theme_version()
	);

	if ( genesis_is_amp() ) {

		wp_enqueue_style(
			genesis_get_theme_handle() . '-amp',
			get_stylesheet_directory_uri() . '/lib/amp/amp.css',
			[ genesis_get_theme_handle() ],
			genesis_get_theme_version()
		);

		return; // Load no further scripts and styles on AMP pages.

	}

	wp_enqueue_script(
		genesis_get_theme_handle() . '-global-script',
		get_stylesheet_directory_uri() . '/js/global.js',
		[ 'jquery' ],
		genesis_get_theme_version(),
		true
	);

}

// Adds image sizes.
add_image_size( 'featured-blog', 520, 780, true );
add_image_size( 'genesis-singular-images', 780, 400, true );
add_image_size( 'singular-full-width', 1700, 660, true );

add_filter( 'image_size_names_choose', 'navigation_media_library_sizes' );
/**
 * Adds featured-blog image size to Media Library.
 *
 * @since 1.0.0
 *
 * @param array $sizes Array of image sizes and their names.
 * @return array The modified list of sizes.
 */
function navigation_media_library_sizes( $sizes ) {

	$sizes['featured-blog']           = __( 'Featured Blog - 520px by 780px', 'navigation-pro' );
	$sizes['genesis-singular-images'] = __( 'Singular - 780px by 400px', 'navigation-pro' );
	$sizes['singular-full-width']     = __( 'Singular Full - 1700px by 660px', 'navigation-pro' );

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

// Reposition the breadcrumbs.
remove_action( 'genesis_before_loop', 'genesis_do_breadcrumbs' );
add_action( 'genesis_after_header', 'genesis_do_breadcrumbs' );

add_filter( 'genesis_breadcrumb_args', 'navigation_breadcrumb_args' );
/**
 * Modifies the breadcrumb display.
 *
 * @since 1.0.0
 *
 * @param string $args Breadcrumb arguments.
 * @return string Modified breadcrumb arguments.
 */
function navigation_breadcrumb_args( $args ) {

	$args['labels']['prefix'] = '';
	$args['sep']              = '<span class="separator" aria-label="breadcrumb separator">/</span>';

	return $args;

}

// Repositions primary navigation menu.
remove_action( 'genesis_after_header', 'genesis_do_nav' );
add_action( 'genesis_header', 'genesis_do_nav', 12 );

// Repositions secondary navigation menu.
remove_action( 'genesis_after_header', 'genesis_do_subnav' );
add_action( 'genesis_footer', 'genesis_do_subnav', 9 );

add_action( 'genesis_meta', 'navigation_add_search_icon' );
/**
 * Adds the search icon to the header if the option is set in the Customizer.
 *
 * @since 1.0.0
 */
function navigation_add_search_icon() {

	if ( genesis_is_amp() ) {
		return;
	}

	$show_icon = get_theme_mod( 'navigation_header_search', navigation_customizer_get_default_search_setting() );

	// Exit early if option set to false.
	if ( ! $show_icon ) {
		return;
	}

	add_action( 'genesis_header', 'navigation_do_header_search_form', 14 );
	add_filter( 'genesis_nav_items', 'navigation_add_search_menu_item', 10, 2 );
	add_filter( 'wp_nav_menu_items', 'navigation_add_search_menu_item', 10, 2 );

}

/**
 * Modifies the menu item output of the header menu.
 *
 * @since 1.0.0
 *
 * @param string $items The menu HTML.
 * @param array  $args The menu options.
 * @return string Updated menu HTML.
 */
function navigation_add_search_menu_item( $items, $args ) {

	$search_toggle = sprintf( '<li class="menu-item">%s</li>', navigation_get_header_search_toggle() );

	if ( 'primary' === $args->theme_location ) {
		$items .= $search_toggle;
	}

	return $items;

}

add_filter( 'wp_nav_menu_args', 'navigation_secondary_menu_args' );
/**
 * Reduces secondary navigation menu to one level depth.
 *
 * @since 1.0.0
 *
 * @param array $args Original menu options.
 * @return array Menu options with depth set to 1.
 */
function navigation_secondary_menu_args( $args ) {

	if ( 'secondary' === $args['theme_location'] ) {
		$args['depth'] = 1;
	}

	return $args;

}

add_filter( 'genesis_author_box_gravatar_size', 'navigation_author_box_gravatar' );
/**
 * Modifies size of the Gravatar in the author box.
 *
 * @since 1.0.0
 *
 * @param int $size Original icon size.
 * @return int Modified icon size.
 */
function navigation_author_box_gravatar( $size ) {

	return 100;

}

// Adds entry meta in entry footer.
remove_action( 'genesis_entry_header', 'genesis_post_info', 12 );
remove_action( 'genesis_entry_footer', 'genesis_post_meta' );
add_action( 'genesis_entry_footer', 'genesis_post_info' );

add_action( 'genesis_entry_footer', 'navigation_entry_gravatar', 9 );
/**
 * Adds the author gravatar before post meta.
 *
 * @since 1.0.0
 */
function navigation_entry_gravatar() {

	$meta_gravatar = get_theme_mod( 'navigation_meta_gravatar', 1 );

	if ( $meta_gravatar && ( is_single() || is_archive() || is_home() ) ) {
		echo '<div class="alignleft">' . get_avatar( get_the_author_meta( 'email' ), 46 ) . '</div>';
	}

}

add_filter( 'genesis_author_box_title', 'navigation_author_box_title', 10, 2 );
/**
 * Change "About" text in author box titles for single posts
 *
 * @since 1.0.0
 * @param string $title The author box title.
 * @param string $context Context.
 * @return string The modified author box title
 */
function navigation_author_box_title( $title, $context ) {

	if ( 'archive' === $context ) {
		$title = ' <span itemprop="name">' . get_the_author_meta( 'display_name' ) . '</span>';
	}

	return $title;

}

add_filter( 'comment_author_says_text', 'navigation_comment_author_says_text' );
/**
 * Modifies comment author `says` text.
 *
 * @since 1.0.0
 *
 * @return string The modified text.
 */
function navigation_comment_author_says_text() {

	return '';

}

add_filter( 'get_the_content_limit', 'navigation_content_limit_read_more_markup', 10, 3 );
/**
 * Modifies the content limit more link markup for posts.
 *
 * @since 1.0.0
 *
 * @param string $output The current full HTML.
 * @param string $content The content HTML.
 * @param string $link The link HTML.
 * @return string The new more link HTML.
 */
function navigation_content_limit_read_more_markup( $output, $content, $link ) {

	if ( is_page_template( 'page_blog.php' ) || is_home() || is_archive() || is_search() ) {
		$link = sprintf( '<a href="%s" class="more-link button text">%s</a>', get_the_permalink(), genesis_a11y_more_link( __( 'Continue Reading', 'navigation-pro' ) ) );
	}

	$output = sprintf( '<p>%s &#x02026;</p><p class="more-link-wrap">%s</p>', $content, str_replace( '&#x02026;', '', $link ) );

	return $output;

}

add_filter( 'the_content_more_link', 'navigation_wrap_more_link' );
/**
 * Adds a paragraph tag around the WordPress more link markup.
 *
 * @since 1.0.0
 *
 * @param string $more The link HTML.
 * @return string The new more link HTML.
 */
function navigation_wrap_more_link( $more ) {

	return '<p class="more-link-wrap">' . $more . '</p>';

}

add_filter( 'genesis_post_date_shortcode', 'navigation_custom_date_shortcode', 10, 2 );
/**
 * Filter the output of the post date to add a wrapper like other shortcodes.
 *
 * @param string       $output Existing output.
 * @param array|string $atts Shortcode attributes.
 * @return string      $output Modified output.
 */
function navigation_custom_date_shortcode( $output, $atts ) {

	if ( 'relative' === $atts['format'] ) {
		$display  = genesis_human_time_diff( get_the_time( 'U' ), current_time( 'timestamp' ), $atts['relative_depth'] ); // phpcs:ignore WordPress.DateTime.CurrentTimeTimestamp.Requested
		$display .= ' ' . __( 'ago', 'navigation-pro' );
	} else {
		$display = get_the_time( $atts['format'] );
	}

	$output = sprintf( '<span class="entry-date"><time %s>', genesis_attr( 'entry-time' ) ) . $atts['before'] . $atts['label'] . '<span class="entry-time-date">' . $display . '</span>' . $atts['after'] . '</time></span>';

	return $output;

}

add_action( 'genesis_before_footer', 'navigation_before_footer_cta' );
/**
 * Hooks in before footer CTA widget area.
 *
 * @since 1.0.0
 */
function navigation_before_footer_cta() {

	genesis_widget_area(
		'before-footer-cta',
		[
			'before' => '<div class="before-footer-cta"><div class="wrap"><h2 class="screen-reader-text">' . __( 'Explore more', 'navigation-pro' ) . '</h2>',
			'after'  => '</div></div>',
		]
	);

}

// Relocates the footer credits.
remove_action( 'genesis_footer', 'genesis_do_footer' );
add_action( 'navigation_footer_copyright', 'genesis_do_footer' );


add_action( 'genesis_footer', 'navigation_custom_footer_content', 7 );
/**
 * Outputs the footer logo above the footer credits.
 *
 * @since 1.2.0
 */
function navigation_custom_footer_content() {

	$footer_logo        = get_theme_mod( 'navigation-footer-logo', navigation_get_default_footer_logo() );
	$footer_logo_id     = attachment_url_to_postid( $footer_logo );
	$footer_logo_alt    = get_post_meta( $footer_logo_id, '_wp_attachment_image_alt', true );
	$footer_logo_markup = sprintf( '<img class="footer-logo" src="%1$s" alt="%2$s" height="80" loading="lazy" />', esc_url( $footer_logo ), $footer_logo_alt );

	echo '<div class="footer-copyright-container">';

	if ( $footer_logo ) {
		echo $footer_logo_markup; // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped
	}

	echo '<div class="footer-copyright"><h2 class="screen-reader-text">' . esc_html__( 'Footer', 'navigation-pro' ) . '</h2>';

	genesis_widget_area(
		'footer-business-info',
		[
			'before' => '<div class="business-info">',
			'after'  => '</div>',
		]
	);

	echo '</div><div class="copyright">';

	do_action( 'navigation_footer_copyright' );

	echo '</div></div>';

	genesis_widget_area(
		'footer-widget',
		[
			'before' => '<div class="footer-widgets widget-area">',
			'after'  => '</div>',
		]
	);

}

// Relocates footer widgets.
remove_action( 'genesis_before_footer', 'genesis_footer_widget_areas' );
add_action( 'genesis_footer', 'genesis_footer_widget_areas', 8 );

add_action( 'after_setup_theme', 'navigation_register_sidebars' );
/**
 * Registers widget areas.
 */
function navigation_register_sidebars() {

	// Registers widget areas.
	genesis_register_sidebar(
		[
			'id'          => 'before-footer-cta',
			'name'        => __( 'Before Footer CTA', 'navigation-pro' ),
			'description' => __( 'This is the before footer CTA section.', 'navigation-pro' ),
		]
	);

	genesis_register_sidebar(
		[
			'id'          => 'footer-business-info',
			'name'        => __( 'Footer Business Information', 'navigation-pro' ),
			'description' => __( 'Add your business name, address, and other information to the footer area.', 'navigation-pro' ),
		]
	);

	genesis_register_sidebar(
		[
			'id'          => 'footer-widget',
			'name'        => __( 'Footer', 'navigation-pro' ),
			'description' => __( 'Add social links or other information important for your site.', 'navigation-pro' ),
		]
	);

}
