<?php
/**
 * Revolution Pro.
 *
 * Onboarding config shared between Starter Packs.
 *
 * Genesis Starter Packs give you a choice of content variation when activating
 * the theme. The content below is common to all packs for this theme.
 *
 * @package Revolution Pro
 * @author  StudioPress
 * @license GPL-2.0-or-later
 * @link    https://my.studiopress.com/themes/revolution/
 */

return [
	'plugins'          => [
		[
			'name'       => __( 'HubSpot All-In-One Marketing (Third Party)', 'revolution-pro' ),
			'slug'       => 'leadin/leadin.php',
			'public_url' => 'https://wordpress.org/plugins/leadin/',
		],
		[
			'name'       => __( 'Genesis Blocks', 'revolution-pro' ),
			'slug'       => 'genesis-blocks/genesis-blocks.php',
			'public_url' => 'https://wordpress.org/plugins/genesis-blocks/',
		],
		[
			'name'       => __( 'Simple Social Icons', 'revolution-pro' ),
			'slug'       => 'simple-social-icons/simple-social-icons.php',
			'public_url' => 'https://wordpress.org/plugins/simple-social-icons/',
		],
		[
			'name'       => __( 'Genesis eNews Extended (Third Party)', 'revolution-pro' ),
			'slug'       => 'genesis-enews-extended/plugin.php',
			'public_url' => 'https://wordpress.org/plugins/genesis-enews-extended/',
		],
	],
	'content'          => [
		'pricing' => [
			'post_title'     => 'Pricing Page',
			'post_content'   => require dirname( __FILE__ ) . '/import/content/pricing-page.php',
			'post_type'      => 'page',
			'post_status'    => 'publish',
			'comment_status' => 'closed',
			'ping_status'    => 'closed',
			'meta_input'     => [
				'_genesis_layout'              => 'full-width-content',
				'_genesis_hide_singular_image' => true,
			],
		],
		'blocks'  => [
			'post_title'     => 'Block Content Examples',
			'post_content'   => require dirname( __FILE__ ) . '/import/content/block-examples.php',
			'post_type'      => 'page',
			'post_status'    => 'publish',
			'comment_status' => 'closed',
			'ping_status'    => 'closed',
		],
		'about'   => [
			'post_title'     => 'About Us',
			'post_content'   => require dirname( __FILE__ ) . '/import/content/about.php',
			'post_type'      => 'page',
			'post_status'    => 'publish',
			'comment_status' => 'closed',
			'ping_status'    => 'closed',
			'meta_input'     => [
				'_genesis_hide_singular_image' => true,
			],
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
				'_genesis_layout'              => 'full-width-content',
				'_genesis_hide_breadcrumbs'    => true,
				'_genesis_hide_singular_image' => true,
				'_genesis_hide_footer_widgets' => true,
			],
		],
	],
	'navigation_menus' => [
		'primary'   => [
			'homepage' => [
				'title' => 'Home',
			],
			'about'    => [
				'title' => 'About Us',
			],
			'contact'  => [
				'title' => 'Contact Us',
			],
		],
		'secondary' => [
			'pricing' => [
				'title' => 'Pricing Page',
			],
			'blocks'  => [
				'title' => 'Block Examples',
			],
			'landing' => [
				'title' => 'Landing Page',
			],
		],
	],
	'widgets'          => [
		'footer-1' => [
			[
				'type' => 'text',
				'args' => [
					'title'  => 'Design Inspiration',
					'text'   => '<p>Get the latest on minimalism and white space. Simple as that.</p>',
					'filter' => 1,
					'visual' => 1,
				],
			],
		],
		'footer-2' => [
			[
				'type' => 'enews-ext',
				'args' => [
					'title'       => '',
					'action'      => '#',
					'email-field' => '#',
					'input_text'  => 'Enter Email Address ...',
					'button_text' => 'Subscribe',
				],
			],
		],
	],
];
