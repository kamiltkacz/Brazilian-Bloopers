<?php
/**
 * Infinity Pro.
 *
 * This file adds the default theme settings to the Infinity Pro Theme.
 *
 * @package Infinity
 * @author  StudioPress
 * @license GPL-2.0+
 * @link    http://my.studiopress.com/themes/infinity/
 */

add_action( 'after_switch_theme', 'infinity_theme_setting_defaults' );
/**
 * Updates theme settings on activation.
 *
 * @since 1.0.0
 */
function infinity_theme_setting_defaults() {

	if ( function_exists( 'genesis_update_settings' ) ) {

		genesis_update_settings( array(
			'blog_cat_num'              => 8,
			'content_archive'           => 'full',
			'content_archive_limit'     => 0,
			'content_archive_thumbnail' => 0,
			'entry_meta_after_content'  => '[post_categories] [post_tags]',
			'entry_meta_before_content' => '[post_date] ' . __( 'by', 'infinity-pro' ) . ' [post_author_posts_link] [post_comments] [post_edit]',
			'posts_nav'                 => 'numeric',
			'site_layout'               => 'full-width-content',
		) );

	} 

	update_option( 'posts_per_page', 8 );

}

add_filter( 'simple_social_default_styles', 'infinity_social_default_styles' );
/**
 * Updates Simple Social Icon settings on activation.
 *
 * @since 1.0.0
 */
function infinity_social_default_styles( $defaults ) {

	$args = array(
		'alignment'              => 'alignleft',
		'background_color'       => '#f5f5f5',
		'background_color_hover' => '#000000',
		'border_color'           => '#ffffff',
		'border_color_hover'     => '#ffffff',
		'border_radius'          => 3,
		'border_width'           => 0,
		'icon_color'             => '#000000',
		'icon_color_hover'       => '#ffffff',
		'size'                   => 36,
		);

	$args = wp_parse_args( $args, $defaults );

	return $args;

}
