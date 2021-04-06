<?php
/**
 * Altitude Pro.
 *
 * Genesis 2.9+ updates these settings when themes are activated.
 *
 * @package Altitude Pro
 * @author  StudioPress
 * @license GPL-2.0-or-later
 * @link    https://my.studiopress.com/themes/altitude/
 */

return [
	GENESIS_SETTINGS_FIELD => [
		'blog_cat_num'              => 5,
		'content_archive'           => 'full',
		'content_archive_limit'     => 0,
		'content_archive_thumbnail' => 0,
		'entry_meta_after_content'  => '[post_categories] [post_tags]',
		'entry_meta_before_content' => '[post_date] ' . __( 'by', 'altitude-pro' ) . ' [post_author_posts_link] [post_comments] [post_edit]',
		'posts_nav'                 => 'numeric',
		'site_layout'               => 'full-width-content',
	],
	'posts_per_page'       => 5,
];
