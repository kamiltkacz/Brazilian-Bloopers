<?php
/**
 * Navigation Pro.
 *
 * Onboarding config to load plugins and homepage content for the cuisine starter pack.
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
				'post_title'     => 'Smart & Simple Party Snacks',
				'post_content'   => require dirname( __FILE__ ) . '/import/content/post-example.php',
				'post_type'      => 'post',
				'post_status'    => 'publish',
				'featured_image' => CHILD_URL . '/config/import/images/cuisine/snacks.jpg',
				'comment_status' => 'closed',
				'ping_status'    => 'closed',
			],
			'sample-post-2'  => [
				'post_title'     => 'Tasty Autumn Comfort Soups',
				'post_content'   => require dirname( __FILE__ ) . '/import/content/post-example.php',
				'post_type'      => 'post',
				'post_status'    => 'publish',
				'featured_image' => CHILD_URL . '/config/import/images/cuisine/soups.jpg',
				'comment_status' => 'closed',
				'ping_status'    => 'closed',
			],
			'sample-post-3'  => [
				'post_title'     => 'Jalapeño & Lime Steak Tacos',
				'post_content'   => require dirname( __FILE__ ) . '/import/content/post-example.php',
				'post_type'      => 'post',
				'post_status'    => 'publish',
				'featured_image' => CHILD_URL . '/config/import/images/cuisine/tacos.jpg',
				'comment_status' => 'closed',
				'ping_status'    => 'closed',
			],
			'sample-post-4'  => [
				'post_title'     => 'Blueberry Banana Cake & Creamy Frosting',
				'post_content'   => require dirname( __FILE__ ) . '/import/content/post-example.php',
				'post_type'      => 'post',
				'post_status'    => 'publish',
				'featured_image' => CHILD_URL . '/config/import/images/cuisine/cake.jpg',
				'comment_status' => 'closed',
				'ping_status'    => 'closed',
			],
			'sample-post-5'  => [
				'post_title'     => 'Creamy Pumpkin Cheesecake',
				'post_content'   => require dirname( __FILE__ ) . '/import/content/post-example.php',
				'post_type'      => 'post',
				'post_status'    => 'publish',
				'featured_image' => CHILD_URL . '/config/import/images/cuisine/pumpkin-cheesecake.jpg',
				'comment_status' => 'closed',
				'ping_status'    => 'closed',
			],
			'sample-post-6'  => [
				'post_title'     => 'Delicious Holiday Sippers',
				'post_content'   => require dirname( __FILE__ ) . '/import/content/post-example.php',
				'post_type'      => 'post',
				'post_status'    => 'publish',
				'featured_image' => CHILD_URL . '/config/import/images/cuisine/holiday-sippers.jpg',
				'comment_status' => 'closed',
				'ping_status'    => 'closed',
			],
			'sample-post-7'  => [
				'post_title'     => 'Must-Have Traditional Greek Delicacies',
				'post_content'   => require dirname( __FILE__ ) . '/import/content/post-example.php',
				'post_type'      => 'post',
				'post_status'    => 'publish',
				'featured_image' => CHILD_URL . '/config/import/images/travel/greek-delicacies.jpg',
				'comment_status' => 'closed',
				'ping_status'    => 'closed',
			],
			'sample-post-8'  => [
				'post_title'     => 'Unforgettable Tapas of Spain',
				'post_content'   => require dirname( __FILE__ ) . '/import/content/post-example.php',
				'post_type'      => 'post',
				'post_status'    => 'publish',
				'featured_image' => CHILD_URL . '/config/import/images/travel/spanish-tapas.jpg',
				'comment_status' => 'closed',
				'ping_status'    => 'closed',
			],
			'sample-post-9'  => [
				'post_title'     => 'Flavorful Finger Lakes Food & Wine',
				'post_content'   => require dirname( __FILE__ ) . '/import/content/post-example.php',
				'post_type'      => 'post',
				'post_status'    => 'publish',
				'featured_image' => CHILD_URL . '/config/import/images/travel/wine.jpg',
				'comment_status' => 'closed',
				'ping_status'    => 'closed',
			],
			'sample-post-10' => [
				'post_title'     => 'The Delicious Taste of Tuscany',
				'post_content'   => require dirname( __FILE__ ) . '/import/content/post-example.php',
				'post_type'      => 'post',
				'post_status'    => 'publish',
				'featured_image' => CHILD_URL . '/config/import/images/travel/tuscany.jpg',
				'comment_status' => 'closed',
				'ping_status'    => 'closed',
			],
			'sample-post-11' => [
				'post_title'     => 'Pizza Night Pizzazz',
				'post_content'   => require dirname( __FILE__ ) . '/import/content/post-example.php',
				'post_type'      => 'post',
				'post_status'    => 'publish',
				'featured_image' => CHILD_URL . '/config/import/images/cuisine/pizza.jpg',
				'comment_status' => 'closed',
				'ping_status'    => 'closed',
			],
			'sample-post-12' => [
				'post_title'     => 'Healthy Pasta Dishes',
				'post_content'   => require dirname( __FILE__ ) . '/import/content/post-example.php',
				'post_type'      => 'post',
				'post_status'    => 'publish',
				'featured_image' => CHILD_URL . '/config/import/images/cuisine/pasta.jpg',
				'comment_status' => 'closed',
				'ping_status'    => 'closed',
			],
			'sample-post-13' => [
				'post_title'     => 'Breakfast Creations',
				'post_content'   => require dirname( __FILE__ ) . '/import/content/post-example.php',
				'post_type'      => 'post',
				'post_status'    => 'publish',
				'featured_image' => CHILD_URL . '/config/import/images/cuisine/breakfast-creations.jpg',
				'comment_status' => 'closed',
				'ping_status'    => 'closed',
			],
			'sample-post-14' => [
				'post_title'     => 'Must-have Spices',
				'post_content'   => require dirname( __FILE__ ) . '/import/content/post-example.php',
				'post_type'      => 'post',
				'post_status'    => 'publish',
				'featured_image' => CHILD_URL . '/config/import/images/cuisine/spices.jpg',
				'comment_status' => 'closed',
				'ping_status'    => 'closed',
			],
			'sample-post-15' => [
				'post_title'     => 'Frozen Delights',
				'post_content'   => require dirname( __FILE__ ) . '/import/content/post-example.php',
				'post_type'      => 'post',
				'post_status'    => 'publish',
				'featured_image' => CHILD_URL . '/config/import/images/cuisine/frozen-delights.jpg',
				'comment_status' => 'closed',
				'ping_status'    => 'closed',
			],
			'sample-post-16' => [
				'post_title'     => 'Bisques to Die For',
				'post_content'   => require dirname( __FILE__ ) . '/import/content/post-example.php',
				'post_type'      => 'post',
				'post_status'    => 'publish',
				'featured_image' => CHILD_URL . '/config/import/images/cuisine/bisque.jpg',
				'comment_status' => 'closed',
				'ping_status'    => 'closed',
			],
			'sample-post-17' => [
				'post_title'     => 'Twisted Salads',
				'post_content'   => require dirname( __FILE__ ) . '/import/content/post-example.php',
				'post_type'      => 'post',
				'post_status'    => 'publish',
				'featured_image' => CHILD_URL . '/config/import/images/cuisine/twisted-salads.jpg',
				'comment_status' => 'closed',
				'ping_status'    => 'closed',
			],
			'sample-post-18' => [
				'post_title'     => 'Savory Stews',
				'post_content'   => require dirname( __FILE__ ) . '/import/content/post-example.php',
				'post_type'      => 'post',
				'post_status'    => 'publish',
				'featured_image' => CHILD_URL . '/config/import/images/cuisine/stews.jpg',
				'comment_status' => 'closed',
				'ping_status'    => 'closed',
			],
		],
	];
} else {
	return [ 'content' => [] ];
}
