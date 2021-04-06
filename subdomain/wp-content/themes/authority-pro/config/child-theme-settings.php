<?php
/**
 * Authority Pro theme settings.
 *
 * Genesis 2.9+ updates these settings when themes are activated.
 *
 * @package Authority
 * @author  StudioPress
 * @license GPL-2.0-or-later
 * @link    https://my.studiopress.com/themes/authority/
 */

return [
	GENESIS_SETTINGS_FIELD => [
		'blog_cat_num'              => 6,
		'breadcrumb_front_page'     => 0,
		'content_archive'           => 'full',
		'content_archive_limit'     => 200,
		'content_archive_thumbnail' => 1,
		'entry_meta_after_content'  => '[post_categories] [post_tags]',
		'entry_meta_before_content' => __( 'posted on', 'authority-pro' ) . ' [post_date]',
		'image_alignment'           => 'aligncenter',
		'image_size'                => 'blog-featured-image',
		'posts_nav'                 => 'numeric',
		'site_layout'               => 'content-sidebar',
	],
	'posts_per_page'       => 6,
];
