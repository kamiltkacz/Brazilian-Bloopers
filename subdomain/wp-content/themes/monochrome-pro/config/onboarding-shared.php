<?php
/**
 * Monochrome Pro.
 *
 * Onboarding config shared between Starter Packs.
 *
 * Genesis Starter Packs give you a choice of content variation when activating
 * the theme. The content below is common to all packs for this theme.
 *
 * @package Monochrome Pro
 * @author  StudioPress
 * @license GPL-2.0-or-later
 * @link    https://my.studiopress.com/themes/monochrome/
 */

$monochrome_onboarding_config = [
	'dependencies'     => [
		'plugins' => [
			[
				'name'       => __( 'Genesis Blocks', 'monochrome-pro' ),
				'slug'       => 'genesis-blocks/genesis-blocks.php',
				'public_url' => 'https://wordpress.org/plugins/genesis-blocks/',
			],
			[
				'name'       => __( 'Simple Social Icons', 'monochrome-pro' ),
				'slug'       => 'simple-social-icons/simple-social-icons.php',
				'public_url' => 'https://wordpress.org/plugins/simple-social-icons/',
			],
			[
				'name'       => __( 'Genesis eNews Extended (Third Party)', 'monochrome-pro' ),
				'slug'       => 'genesis-enews-extended/plugin.php',
				'public_url' => 'https://wordpress.org/plugins/genesis-enews-extended/',
			],
			[
				'name'       => __( 'WPForms Lite (Third Party)', 'monochrome-pro' ),
				'slug'       => 'wpforms-lite/wpforms.php',
				'public_url' => 'https://wordpress.org/plugins/wpforms-lite/',
			],
		],
	],
	'content'          => [
		'blocks'  => [
			'post_title'     => 'Block Content Examples',
			'post_content'   => require dirname( __FILE__ ) . '/import/content/block-examples.php',
			'post_type'      => 'page',
			'post_status'    => 'publish',
			'meta_input'     => [
				'_genesis_layout'              => 'full-width-content',
				'_genesis_hide_title'          => true,
				'_genesis_hide_breadcrumbs'    => true,
				'_genesis_hide_singular_image' => true,
			],
			'comment_status' => 'closed',
			'ping_status'    => 'closed',
		],
		'about'   => [
			'post_title'     => 'About Us',
			'post_content'   => require dirname( __FILE__ ) . '/import/content/about.php',
			'post_type'      => 'page',
			'post_status'    => 'publish',
			'meta_input'     => [
				'_genesis_layout'              => 'full-width-content',
				'_genesis_hide_title'          => true,
				'_genesis_hide_breadcrumbs'    => true,
				'_genesis_hide_singular_image' => true,
			],
			'featured_image' => CHILD_URL . '/config/import/images/about.jpg',
			'comment_status' => 'closed',
			'ping_status'    => 'closed',
		],
		'contact' => [
			'post_title'     => 'Contact Us',
			'post_content'   => require dirname( __FILE__ ) . '/import/content/contact.php',
			'post_type'      => 'page',
			'post_status'    => 'publish',
			'comment_status' => 'closed',
			'ping_status'    => 'closed',
		],
		'landing' => [
			'post_title'     => 'Landing Page',
			'post_content'   => require dirname( __FILE__ ) . '/import/content/landing-page.php',
			'post_type'      => 'page',
			'post_status'    => 'publish',
			'page_template'  => 'page-templates/landing.php',
			'comment_status' => 'closed',
			'ping_status'    => 'closed',
			'meta_input'     => [
				'_genesis_layout'           => 'full-width-content',
				'_genesis_hide_breadcrumbs' => true,
			],
		],
		'pricing' => [
			'post_title'     => 'Pricing Page',
			'post_content'   => require dirname( __FILE__ ) . '/import/content/pricing-page.php',
			'post_type'      => 'page',
			'post_status'    => 'publish',
			'comment_status' => 'closed',
			'ping_status'    => 'closed',
		],
	],
	'widgets'          => [
		'before-footer-cta' => [
			[
				'type' => 'custom_html',
				'args' => [
					'title'   => '',
					'content' => '<p>Hit the ground running with a minimalist look. <span class="footer-cta-button"><a class="button" href="#">Learn More</a></span></p>',
				],
			],
		],
	],
	'navigation_menus' => [
		'primary' => [
			'homepage' => [
				'title' => 'Home',
			],
			'about'    => [
				'title' => 'About Us',
			],
			'contact'  => [
				'title' => 'Contact Us',
			],
			'blocks'   => [
				'title' => 'Block Examples',
			],
			'landing'  => [
				'title' => 'Landing Page',
			],
			'pricing'  => [
				'title' => 'Pricing Page',
			],
		],
	],
];

// Import sample posts if the site is fresh.
$monochrome_starter_packs = [
	'minimal'     => [
		'post_title' => [
			'Why White Space and Typography Matter in Minimal Design',
			'The Secret Method to Creating the Perfect Amount of Simple',
			'Understanding the Differences of Good (and Great) Design',
			'How a Mobile-Optimized Design Impacts User Experience',
		],
	],
	'fashion'     => [
		'post_title' => [
			'The Art of Wearing Denim',
			'Little Black Dresses',
			'Wearing the Perfect Suit',
			'Back-to-school Fashion',
		],
	],
	'marketing'   => [
		'post_title' => [
			'Building a Smart Business',
			'Bulletproof Copy That Sells',
			'Leverage Social Media',
			'Marketing Channels that Work',
		],
	],
	'law-firm'    => [
		'post_title' => [
			'The Art of Family Protection',
			'A Legal Team You can Trust',
			'Driving Slow Affects Safety',
			'How to Stay Calm in Court',
		],
	],
	'photography' => [
		'post_title' => [
			'Fall Colors in Vermont',
			'Wedding Day Memories',
			'The Family Keepsake',
			'Friends in San Francisco',
		],
	],
];

if ( get_option( 'fresh_site' ) ) {
	foreach ( $monochrome_starter_packs as $monochrome_starter_pack => $monochrome_starter_pack_content ) {
		$monochrome_onboarding_config['starter_pack'][ $monochrome_starter_pack ]['sample-post-1'] = [
			'post_title'     => $monochrome_starter_pack_content['post_title'][0],
			'post_content'   => require dirname( __FILE__ ) . '/import/content/post-example.php',
			'post_type'      => 'post',
			'post_status'    => 'publish',
			'featured_image' => CHILD_URL . "/config/import/images/{$monochrome_starter_pack}/{$monochrome_starter_pack}-sample-1.jpg",
			'comment_status' => 'closed',
			'ping_status'    => 'closed',
		];
		$monochrome_onboarding_config['starter_pack'][ $monochrome_starter_pack ]['sample-post-2'] = [
			'post_title'     => $monochrome_starter_pack_content['post_title'][1],
			'post_content'   => require dirname( __FILE__ ) . '/import/content/post-example.php',
			'post_type'      => 'post',
			'post_status'    => 'publish',
			'featured_image' => CHILD_URL . "/config/import/images/{$monochrome_starter_pack}/{$monochrome_starter_pack}-sample-2.jpg",
			'comment_status' => 'closed',
			'ping_status'    => 'closed',
		];
		$monochrome_onboarding_config['starter_pack'][ $monochrome_starter_pack ]['sample-post-3'] = [
			'post_title'     => $monochrome_starter_pack_content['post_title'][2],
			'post_content'   => require dirname( __FILE__ ) . '/import/content/post-example.php',
			'post_type'      => 'post',
			'post_status'    => 'publish',
			'featured_image' => CHILD_URL . "/config/import/images/{$monochrome_starter_pack}/{$monochrome_starter_pack}-sample-3.jpg",
			'comment_status' => 'closed',
			'ping_status'    => 'closed',
		];
		$monochrome_onboarding_config['starter_pack'][ $monochrome_starter_pack ]['sample-post-4'] = [
			'post_title'     => $monochrome_starter_pack_content['post_title'][3],
			'post_content'   => require dirname( __FILE__ ) . '/import/content/post-example.php',
			'post_type'      => 'post',
			'post_status'    => 'publish',
			'featured_image' => CHILD_URL . "/config/import/images/{$monochrome_starter_pack}/{$monochrome_starter_pack}-sample-4.jpg",
			'comment_status' => 'closed',
			'ping_status'    => 'closed',
		];
	}
} else {
	foreach ( $monochrome_starter_packs as $monochrome_starter_pack => $monochrome_starter_pack_content ) {
		$monochrome_onboarding_config['starter_pack'][ $monochrome_starter_pack ] = [];
	}
}

return $monochrome_onboarding_config;
