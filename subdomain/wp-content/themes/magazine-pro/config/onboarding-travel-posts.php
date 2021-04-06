<?php
/**
 * Magazine Pro.
 *
 * Onboarding config to load plugins and homepage content on theme activation.
 *
 * @package Magazine Pro
 * @author  StudioPress
 * @license GPL-2.0-or-later
 * @link    https://www.studiopress.com/
 */

// Import sample posts if the site is fresh.
if ( get_option( 'fresh_site' ) ) {
	return [
		'content' => [
			'sample-post-1' => [
				'post_title'     => 'Horse Riding Trips in Iceland',
				'post_content'   => require dirname( __FILE__ ) . '/import/content/post-example.php',
				'post_type'      => 'post',
				'post_status'    => 'publish',
				'featured_image' => CHILD_URL . '/config/import/images/travel/sample-travel-1.jpg',
				'comment_status' => 'closed',
				'ping_status'    => 'closed',
			],
			'sample-post-2' => [
				'post_title'     => 'Top 5 Vineyard Tours and Tastings',
				'post_content'   => require dirname( __FILE__ ) . '/import/content/post-example.php',
				'post_type'      => 'post',
				'post_status'    => 'publish',
				'featured_image' => CHILD_URL . '/config/import/images/multi/sample-lifestyle-2.jpg',
				'comment_status' => 'closed',
				'ping_status'    => 'closed',
			],
			'sample-post-3' => [
				'post_title'     => 'Romantic Breaks in Florence',
				'post_content'   => require dirname( __FILE__ ) . '/import/content/post-example.php',
				'post_type'      => 'post',
				'post_status'    => 'publish',
				'featured_image' => CHILD_URL . '/config/import/images/travel/sample-travel-2.jpg',
				'comment_status' => 'closed',
				'ping_status'    => 'closed',
			],
			'sample-post-4' => [
				'post_title'     => 'Denali National Park in Alaska',
				'post_content'   => require dirname( __FILE__ ) . '/import/content/post-example.php',
				'post_type'      => 'post',
				'post_status'    => 'publish',
				'featured_image' => CHILD_URL . '/config/import/images/multi/sample-travel-1.jpg',
				'comment_status' => 'closed',
				'ping_status'    => 'closed',
			],
			'sample-post-5' => [
				'post_title'     => 'Hawaii’s Secret Getaway Spots',
				'post_content'   => require dirname( __FILE__ ) . '/import/content/post-example.php',
				'post_type'      => 'post',
				'post_status'    => 'publish',
				'featured_image' => CHILD_URL . '/config/import/images/multi/sample-travel-2.jpg',
				'comment_status' => 'closed',
				'ping_status'    => 'closed',
			],
			'sample-post-6' => [
				'post_title'     => 'Guided Motorbike Tours in Colorado',
				'post_content'   => require dirname( __FILE__ ) . '/import/content/post-example.php',
				'post_type'      => 'post',
				'post_status'    => 'publish',
				'featured_image' => CHILD_URL . '/config/import/images/travel/sample-travel-3.jpg',
				'comment_status' => 'closed',
				'ping_status'    => 'closed',
			],
			'sample-post-7' => [
				'post_title'     => 'Famous Movie Locations You Can Visit',
				'post_content'   => require dirname( __FILE__ ) . '/import/content/post-example.php',
				'post_type'      => 'post',
				'post_status'    => 'publish',
				'featured_image' => CHILD_URL . '/config/import/images/travel/sample-travel-4.jpg',
				'comment_status' => 'closed',
				'ping_status'    => 'closed',
			],
			'sample-post-8' => [
				'post_title'     => 'The Fairytale Castles of Germany',
				'post_content'   => require dirname( __FILE__ ) . '/import/content/post-example.php',
				'post_type'      => 'post',
				'post_status'    => 'publish',
				'featured_image' => CHILD_URL . '/config/import/images/travel/sample-travel-5.jpg',
				'comment_status' => 'closed',
				'ping_status'    => 'closed',
			],
		],
	];
} else {
	return [ 'content' => [] ];
}
