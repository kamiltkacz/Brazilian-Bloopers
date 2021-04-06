<?php
/**
 * Navigation Pro.
 *
 * Onboarding config to load plugins and homepage content for the fitness starter pack.
 *
 * Genesis Starter Packs give you a choice of content variation when activating
 * the theme. The content below is common to all packs for this theme.
 *
 * @package Navigation Pro
 * @author  StudioPress
 * @license GPL-2.0-or-later
 * @link    https://my.studiopress.com/themes/navigation/
 */

// Import sample posts if the site is fresh.
if ( get_option( 'fresh_site' ) ) {
	return [
		'content' => [
			'sample-post-1'  => [
				'post_title'     => 'Trail Running for Fun & Fitness',
				'post_content'   => require dirname( __FILE__ ) . '/import/content/post-example.php',
				'post_type'      => 'post',
				'post_status'    => 'publish',
				'featured_image' => CHILD_URL . '/config/import/images/fitness/trail-running.jpg',
				'comment_status' => 'closed',
				'ping_status'    => 'closed',
			],
			'sample-post-2'  => [
				'post_title'     => 'Hiking to Uplift Your Spirit',
				'post_content'   => require dirname( __FILE__ ) . '/import/content/post-example.php',
				'post_type'      => 'post',
				'post_status'    => 'publish',
				'featured_image' => CHILD_URL . '/config/import/images/fitness/spirit.jpg',
				'comment_status' => 'closed',
				'ping_status'    => 'closed',
			],
			'sample-post-3'  => [
				'post_title'     => 'Get Outdoors with Your Pup',
				'post_content'   => require dirname( __FILE__ ) . '/import/content/post-example.php',
				'post_type'      => 'post',
				'post_status'    => 'publish',
				'featured_image' => CHILD_URL . '/config/import/images/fitness/pup.jpg',
				'comment_status' => 'closed',
				'ping_status'    => 'closed',
			],
			'sample-post-4'  => [
				'post_title'     => 'Fitness Preparation at Altitude',
				'post_content'   => require dirname( __FILE__ ) . '/import/content/post-example.php',
				'post_type'      => 'post',
				'post_status'    => 'publish',
				'featured_image' => CHILD_URL . '/config/import/images/fitness/altitude.jpg',
				'comment_status' => 'closed',
				'ping_status'    => 'closed',
			],
			'sample-post-5'  => [
				'post_title'     => 'Must-have Spices',
				'post_content'   => require dirname( __FILE__ ) . '/import/content/post-example.php',
				'post_type'      => 'post',
				'post_status'    => 'publish',
				'featured_image' => CHILD_URL . '/config/import/images/cuisine/spices.jpg',
				'comment_status' => 'closed',
				'ping_status'    => 'closed',
			],
			'sample-post-6'  => [
				'post_title'     => 'Frozen Delights',
				'post_content'   => require dirname( __FILE__ ) . '/import/content/post-example.php',
				'post_type'      => 'post',
				'post_status'    => 'publish',
				'featured_image' => CHILD_URL . '/config/import/images/cuisine/frozen-delights.jpg',
				'comment_status' => 'closed',
				'ping_status'    => 'closed',
			],
			'sample-post-7'  => [
				'post_title'     => 'Bisques to Die For',
				'post_content'   => require dirname( __FILE__ ) . '/import/content/post-example.php',
				'post_type'      => 'post',
				'post_status'    => 'publish',
				'featured_image' => CHILD_URL . '/config/import/images/cuisine/bisque.jpg',
				'comment_status' => 'closed',
				'ping_status'    => 'closed',
			],
			'sample-post-8'  => [
				'post_title'     => 'Twisted Salads',
				'post_content'   => require dirname( __FILE__ ) . '/import/content/post-example.php',
				'post_type'      => 'post',
				'post_status'    => 'publish',
				'featured_image' => CHILD_URL . '/config/import/images/cuisine/twisted-salads.jpg',
				'comment_status' => 'closed',
				'ping_status'    => 'closed',
			],
			'sample-post-9'  => [
				'post_title'     => 'Choosing the Perfect Footwear',
				'post_content'   => require dirname( __FILE__ ) . '/import/content/post-example.php',
				'post_type'      => 'post',
				'post_status'    => 'publish',
				'featured_image' => CHILD_URL . '/config/import/images/fitness/footwear.jpg',
				'comment_status' => 'closed',
				'ping_status'    => 'closed',
			],
			'sample-post-10' => [
				'post_title'     => 'Refreshing Electrolyte Replacers',
				'post_content'   => require dirname( __FILE__ ) . '/import/content/post-example.php',
				'post_type'      => 'post',
				'post_status'    => 'publish',
				'featured_image' => CHILD_URL . '/config/import/images/fitness/electrolytes.jpg',
				'comment_status' => 'closed',
				'ping_status'    => 'closed',
			],
			'sample-post-11' => [
				'post_title'     => 'Group Kayaking in Norway',
				'post_content'   => require dirname( __FILE__ ) . '/import/content/post-example.php',
				'post_type'      => 'post',
				'post_status'    => 'publish',
				'featured_image' => CHILD_URL . '/config/import/images/travel/kayaking.jpg',
				'comment_status' => 'closed',
				'ping_status'    => 'closed',
			],
			'sample-post-12' => [
				'post_title'     => 'Long-distance Trekking in Chile',
				'post_content'   => require dirname( __FILE__ ) . '/import/content/post-example.php',
				'post_type'      => 'post',
				'post_status'    => 'publish',
				'featured_image' => CHILD_URL . '/config/import/images/travel/trekking.jpg',
				'comment_status' => 'closed',
				'ping_status'    => 'closed',
			],
			'sample-post-13' => [
				'post_title'     => 'Paddleboarding in Switzerland',
				'post_content'   => require dirname( __FILE__ ) . '/import/content/post-example.php',
				'post_type'      => 'post',
				'post_status'    => 'publish',
				'featured_image' => CHILD_URL . '/config/import/images/travel/paddleboarding.jpg',
				'comment_status' => 'closed',
				'ping_status'    => 'closed',
			],
			'sample-post-14' => [
				'post_title'     => 'Untold Machu Picchu Adventures',
				'post_content'   => require dirname( __FILE__ ) . '/import/content/post-example.php',
				'post_type'      => 'post',
				'post_status'    => 'publish',
				'featured_image' => CHILD_URL . '/config/import/images/travel/machu-picchu.jpg',
				'comment_status' => 'closed',
				'ping_status'    => 'closed',
			],
		],
	];
} else {
	return [ 'content' => [] ];
}
