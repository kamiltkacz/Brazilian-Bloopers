<?php
/**
 * Magazine Pro theme settings.
 *
 * Genesis 2.9+ updates these settings when themes are activated.
 *
 * @package Magazine
 * @author  StudioPress
 * @license GPL-2.0-or-later
 * @link    https://my.studiopress.com/themes/magazine/
 */

return [
	GENESIS_SETTINGS_FIELD => [
		'breadcrumb_home'           => 0,
		'breadcrumb_front_page'     => 0,
		'breadcrumb_posts_page'     => 0,
		'breadcrumb_single'         => 0,
		'breadcrumb_page'           => 0,
		'breadcrumb_archive'        => 0,
		'breadcrumb_404'            => 0,
		'breadcrumb_attachment'     => 0,
		'content_archive'           => 'full',
		'content_archive_limit'     => 380,
		'content_archive_thumbnail' => 1,
		'entry_meta_after_content'  => '[post_categories] [post_tags]',
		'entry_meta_before_content' => '[post_date] ' . __( 'by', 'magazine-pro' ) . ' [post_author_posts_link] [post_comments] [post_edit]',
		'image_alignment'           => 'alignleft',
		'image_size'                => 'thumbnail',
		'posts_nav'                 => 'prev-next',
		'site_layout'               => 'content-sidebar',
		'show_featured_image_post'  => 0,
		'show_featured_image_page'  => 0,
	],
	'posts_per_page'       => 5,
];
