<?php
/**
 * Navigation Pro.
 *
 * Onboarding config to load plugins and homepage content for the travel starter pack.
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
				'post_title'     => 'Explore San Francisco Cuisine like a Local',
				'post_content'   => require dirname( __FILE__ ) . '/import/content/post-example.php',
				'post_type'      => 'post',
				'post_status'    => 'publish',
				'featured_image' => CHILD_URL . '/config/import/images/travel/san-francisco-cuisine.jpg',
				'comment_status' => 'closed',
				'ping_status'    => 'closed',
			],
			'sample-post-2'  => [
				'post_title'     => 'Venice for Solo Travelers',
				'post_content'   => require dirname( __FILE__ ) . '/import/content/post-example.php',
				'post_type'      => 'post',
				'post_status'    => 'publish',
				'featured_image' => CHILD_URL . '/config/import/images/travel/venice.jpg',
				'comment_status' => 'closed',
				'ping_status'    => 'closed',
			],
			'sample-post-3'  => [
				'post_title'     => 'Maine Shore’s Secret Haunts',
				'post_content'   => require dirname( __FILE__ ) . '/import/content/post-example.php',
				'post_type'      => 'post',
				'post_status'    => 'publish',
				'featured_image' => CHILD_URL . '/config/import/images/travel/maine-shore-haunts.jpg',
				'comment_status' => 'closed',
				'ping_status'    => 'closed',
			],
			'sample-post-4'  => [
				'post_title'     => 'Exploring Utah’s Canyons',
				'post_content'   => require dirname( __FILE__ ) . '/import/content/post-example.php',
				'post_type'      => 'post',
				'post_status'    => 'publish',
				'featured_image' => CHILD_URL . '/config/import/images/travel/utah-canyons.jpg',
				'comment_status' => 'closed',
				'ping_status'    => 'closed',
			],
			'sample-post-5'  => [
				'post_title'     => 'Touring Europe’s Castles by Motorbike',
				'post_content'   => require dirname( __FILE__ ) . '/import/content/post-example.php',
				'post_type'      => 'post',
				'post_status'    => 'publish',
				'featured_image' => CHILD_URL . '/config/import/images/travel/european-castles.jpg',
				'comment_status' => 'closed',
				'ping_status'    => 'closed',
			],
			'sample-post-6'  => [
				'post_title'     => 'Untold Machu Picchu Adventures',
				'post_content'   => require dirname( __FILE__ ) . '/import/content/post-example.php',
				'post_type'      => 'post',
				'post_status'    => 'publish',
				'featured_image' => CHILD_URL . '/config/import/images/travel/machu-picchu.jpg',
				'comment_status' => 'closed',
				'ping_status'    => 'closed',
			],
			'sample-post-7'  => [
				'post_title'     => 'The Delicious Taste of Tuscany',
				'post_content'   => require dirname( __FILE__ ) . '/import/content/post-example.php',
				'post_type'      => 'post',
				'post_status'    => 'publish',
				'featured_image' => CHILD_URL . '/config/import/images/travel/tuscany.jpg',
				'comment_status' => 'closed',
				'ping_status'    => 'closed',
			],
			'sample-post-8'  => [
				'post_title'     => 'Flavorful Finger Lakes Food & Wine',
				'post_content'   => require dirname( __FILE__ ) . '/import/content/post-example.php',
				'post_type'      => 'post',
				'post_status'    => 'publish',
				'featured_image' => CHILD_URL . '/config/import/images/travel/wine.jpg',
				'comment_status' => 'closed',
				'ping_status'    => 'closed',
			],
			'sample-post-9'  => [
				'post_title'     => 'Unforgettable Tapas of Spain',
				'post_content'   => require dirname( __FILE__ ) . '/import/content/post-example.php',
				'post_type'      => 'post',
				'post_status'    => 'publish',
				'featured_image' => CHILD_URL . '/config/import/images/travel/spanish-tapas.jpg',
				'comment_status' => 'closed',
				'ping_status'    => 'closed',
			],
			'sample-post-10' => [
				'post_title'     => 'Must-Have Traditional Greek Delicacies',
				'post_content'   => require dirname( __FILE__ ) . '/import/content/post-example.php',
				'post_type'      => 'post',
				'post_status'    => 'publish',
				'featured_image' => CHILD_URL . '/config/import/images/travel/greek-delicacies.jpg',
				'comment_status' => 'closed',
				'ping_status'    => 'closed',
			],
			'sample-post-11' => [
				'post_title'     => 'Whale Watching in Nova Scotia',
				'post_content'   => require dirname( __FILE__ ) . '/import/content/post-example.php',
				'post_type'      => 'post',
				'post_status'    => 'publish',
				'featured_image' => CHILD_URL . '/config/import/images/travel/nova-scotia.jpg',
				'comment_status' => 'closed',
				'ping_status'    => 'closed',
			],
			'sample-post-12' => [
				'post_title'     => 'Wildlife Viewing in Yosemite',
				'post_content'   => require dirname( __FILE__ ) . '/import/content/post-example.php',
				'post_type'      => 'post',
				'post_status'    => 'publish',
				'featured_image' => CHILD_URL . '/config/import/images/travel/yosemite.jpg',
				'comment_status' => 'closed',
				'ping_status'    => 'closed',
			],
			'sample-post-13' => [
				'post_title'     => 'Group Kayaking in Norway',
				'post_content'   => require dirname( __FILE__ ) . '/import/content/post-example.php',
				'post_type'      => 'post',
				'post_status'    => 'publish',
				'featured_image' => CHILD_URL . '/config/import/images/travel/kayaking.jpg',
				'comment_status' => 'closed',
				'ping_status'    => 'closed',
			],
			'sample-post-14' => [
				'post_title'     => 'Long-distance Trekking in Chile',
				'post_content'   => require dirname( __FILE__ ) . '/import/content/post-example.php',
				'post_type'      => 'post',
				'post_status'    => 'publish',
				'featured_image' => CHILD_URL . '/config/import/images/travel/trekking.jpg',
				'comment_status' => 'closed',
				'ping_status'    => 'closed',
			],
			'sample-post-15' => [
				'post_title'     => 'Ballooning over Cappadocia',
				'post_content'   => require dirname( __FILE__ ) . '/import/content/post-example.php',
				'post_type'      => 'post',
				'post_status'    => 'publish',
				'featured_image' => CHILD_URL . '/config/import/images/travel/ballooning.jpg',
				'comment_status' => 'closed',
				'ping_status'    => 'closed',
			],
			'sample-post-16' => [
				'post_title'     => 'Paddleboarding in Switzerland',
				'post_content'   => require dirname( __FILE__ ) . '/import/content/post-example.php',
				'post_type'      => 'post',
				'post_status'    => 'publish',
				'featured_image' => CHILD_URL . '/config/import/images/travel/paddleboarding.jpg',
				'comment_status' => 'closed',
				'ping_status'    => 'closed',
			],
			'sample-post-17' => [
				'post_title'     => 'Austin, TX Live Music Crawl',
				'post_content'   => require dirname( __FILE__ ) . '/import/content/post-example.php',
				'post_type'      => 'post',
				'post_status'    => 'publish',
				'featured_image' => CHILD_URL . '/config/import/images/travel/austin.jpg',
				'comment_status' => 'closed',
				'ping_status'    => 'closed',
			],
			'sample-post-18' => [
				'post_title'     => 'German Wine Region Tours',
				'post_content'   => require dirname( __FILE__ ) . '/import/content/post-example.php',
				'post_type'      => 'post',
				'post_status'    => 'publish',
				'featured_image' => CHILD_URL . '/config/import/images/travel/german-wine.jpg',
				'comment_status' => 'closed',
				'ping_status'    => 'closed',
			],
		],
	];
} else {
	return [ 'content' => [] ];
}
