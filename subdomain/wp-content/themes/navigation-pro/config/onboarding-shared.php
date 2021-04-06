<?php
/**
 * Navigation Pro.
 *
 * Onboarding config shared between Starter Packs.
 *
 * Genesis Starter Packs give you a choice of content variation when activating
 * the theme. The content below is common to all packs for this theme.
 *
 * @package Navigation Pro
 * @author  StudioPress
 * @license GPL-2.0-or-later
 * @link    https://my.studiopress.com/themes/navigation/
 */

return [
	'dependencies'     => [
		'plugins' => [
			[
				'name'       => __( 'Genesis Blocks', 'navigation-pro' ),
				'slug'       => 'genesis-blocks/genesis-blocks.php',
				'public_url' => 'https://wordpress.org/plugins/genesis-blocks/',
			],
			[
				'name'       => __( 'Simple Social Icons', 'navigation-pro' ),
				'slug'       => 'simple-social-icons/simple-social-icons.php',
				'public_url' => 'https://wordpress.org/plugins/simple-social-icons/',
			],
			[
				'name'       => __( 'Genesis eNews Extended (Third Party)', 'navigation-pro' ),
				'slug'       => 'genesis-enews-extended/plugin.php',
				'public_url' => 'https://wordpress.org/plugins/genesis-enews-extended/',
			],
			[
				'name'       => __( 'WPForms Lite (Third Party)', 'navigation-pro' ),
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
			'comment_status' => 'closed',
			'ping_status'    => 'closed',
			'page_template'  => 'templates/landing.php',
			'meta_input'     => [
				'_genesis_layout'              => 'full-width-content',
				'_genesis_hide_breadcrumbs'    => true,
				'_genesis_hide_singular_image' => true,
			],
		],
		'pricing' => [
			'post_title'     => 'Pricing Page',
			'post_content'   => require dirname( __FILE__ ) . '/import/content/pricing-page.php',
			'post_type'      => 'page',
			'post_status'    => 'publish',
			'comment_status' => 'closed',
			'ping_status'    => 'closed',
			'page_template'  => 'templates/blocks.php',
			'meta_input'     => [
				'_genesis_layout'              => 'full-width-content',
				'_genesis_hide_title'          => true,
				'_genesis_hide_breadcrumbs'    => true,
				'_genesis_hide_singular_image' => true,
			],
		],
	],
	'widgets'          => [
		'before-footer-cta'    => [
			[
				'type' => 'custom_html',
				'args' => [
					'title'   => '',
					'content' => '<a class="button" href="#"><i class="icon ion-ios-locate"></i> <span class="button-text">Get our Travel Guide</span></a><a class="button" href="#"><i class="icon ion-ios-leaf"></i> <span class="button-text">Get Inspiration</span></a><a class="button" href="#"><i class="icon ion-ios-paper-plane"></i> <span class="button-text">Get Connected</span></a>',
				],
			],
		],
		'footer-business-info' => [
			[
				'type' => 'text',
				'args' => [
					'title'  => 'Business Name',
					'text'   => '<p>123 Navigation Drive<br>Some City, Some State 12345</p>',
					'filter' => 1,
					'visual' => 1,
				],
			],
		],
		'footer-widget'        => [
			[
				'type' => 'simple-social-icons',
				'args' => [
					'title'     => 'Keep In Touch',
					'facebook'  => '#',
					'github'    => '#',
					'instagram' => '#',
					'pinterest' => '#',
					'twitter'   => '#',
					'youtube'   => '#',
				],
			],
		],
		'sidebar'              => [
			[
				'type' => 'enews-ext',
				'args' => [
					'title'       => 'Newsletter',
					'text'        => 'Sign up to receive email updates and to hear about our latest adventures!',
					'after_text'  => '<small>We won\'t sell your email or send you spam.</small>',
					'action'      => '#',
					'email-field' => '#',
					'fname-field' => '#',
					'fname_text'  => 'Your Name',
					'input_text'  => 'E-mail Address',
					'button_text' => 'Go',
				],
			],
			[
				'type' => 'featured-post',
				'args' => [
					'title'             => 'Recent Adventures',
					'posts_num'         => '1',
					'posts_offset'      => '0',
					'orderby'           => 'date',
					'exclude_displayed' => 1,
					'show_image'        => 1,
					'image_size'        => 'genesis-singular-images',
					'image_alignment'   => 'aligncenter',
					'show_title'        => 1,
					'show_byline'       => 0,
					'post_info'         => '[post_date] by [post_author_posts_link]',
					'show_content'      => 'content-limit',
					'content_limit'     => 100,
					'more_text'         => 'Continue Reading',
				],
			],
			[
				'type' => 'search',
				'args' => [
					'title' => 'Search our site',
				],
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
			'landing'  => [
				'title' => 'Landing Page',
			],
			'pricing'  => [
				'title' => 'Pricing Page',
			],
		],
		'secondary' => [
			'blocks' => [
				'title' => 'Block Examples',
			],
		],
	],
];
