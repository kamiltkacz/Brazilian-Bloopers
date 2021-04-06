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
				'post_title'     => 'Put Pizzazz in Pizza Night',
				'post_content'   => require dirname( __FILE__ ) . '/import/content/post-example.php',
				'post_type'      => 'post',
				'post_status'    => 'publish',
				'featured_image' => CHILD_URL . '/config/import/images/cuisine/sample-cuisine-1.jpg',
				'comment_status' => 'closed',
				'ping_status'    => 'closed',
			],
			'sample-post-2' => [
				'post_title'     => 'A New Twist on Caesar Salad',
				'post_content'   => require dirname( __FILE__ ) . '/import/content/post-example.php',
				'post_type'      => 'post',
				'post_status'    => 'publish',
				'featured_image' => CHILD_URL . '/config/import/images/cuisine/sample-cuisine-2.jpg',
				'comment_status' => 'closed',
				'ping_status'    => 'closed',
			],
			'sample-post-3' => [
				'post_title'     => 'Must-have Kitchen Spices',
				'post_content'   => require dirname( __FILE__ ) . '/import/content/post-example.php',
				'post_type'      => 'post',
				'post_status'    => 'publish',
				'featured_image' => CHILD_URL . '/config/import/images/cuisine/sample-cuisine-3.jpg',
				'comment_status' => 'closed',
				'ping_status'    => 'closed',
			],
			'sample-post-4' => [
				'post_title'     => 'Jalapeño & Lime Steak Tacos',
				'post_content'   => require dirname( __FILE__ ) . '/import/content/post-example.php',
				'post_type'      => 'post',
				'post_status'    => 'publish',
				'featured_image' => CHILD_URL . '/config/import/images/cuisine/sample-cuisine-4.jpg',
				'comment_status' => 'closed',
				'ping_status'    => 'closed',
			],
			'sample-post-5' => [
				'post_title'     => 'Fall Comfort Soups',
				'post_content'   => require dirname( __FILE__ ) . '/import/content/post-example.php',
				'post_type'      => 'post',
				'post_status'    => 'publish',
				'featured_image' => CHILD_URL . '/config/import/images/cuisine/sample-cuisine-5.jpg',
				'comment_status' => 'closed',
				'ping_status'    => 'closed',
			],
			'sample-post-6' => [
				'post_title'     => 'Raspberry Lemon Cake',
				'post_content'   => require dirname( __FILE__ ) . '/import/content/post-example.php',
				'post_type'      => 'post',
				'post_status'    => 'publish',
				'featured_image' => CHILD_URL . '/config/import/images/cuisine/sample-cuisine-6.jpg',
				'comment_status' => 'closed',
				'ping_status'    => 'closed',
			],
			'sample-post-7' => [
				'post_title'     => 'Yum! Orange-Blueberry Pancakes',
				'post_content'   => require dirname( __FILE__ ) . '/import/content/post-example.php',
				'post_type'      => 'post',
				'post_status'    => 'publish',
				'featured_image' => CHILD_URL . '/config/import/images/cuisine/sample-cuisine-7.jpg',
				'comment_status' => 'closed',
				'ping_status'    => 'closed',
			],
			'sample-post-8' => [
				'post_title'     => 'Smart & Simple Party Snacks',
				'post_content'   => require dirname( __FILE__ ) . '/import/content/post-example.php',
				'post_type'      => 'post',
				'post_status'    => 'publish',
				'featured_image' => CHILD_URL . '/config/import/images/cuisine/sample-cuisine-8.jpg',
				'comment_status' => 'closed',
				'ping_status'    => 'closed',
			],
		],
	];
} else {
	return [ 'content' => [] ];
}
