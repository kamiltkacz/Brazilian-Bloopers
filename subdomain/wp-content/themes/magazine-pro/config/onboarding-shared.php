<?php
/**
 * Magazine Pro.
 *
 * Onboarding config shared between Starter Packs.
 *
 * Genesis Starter Packs give you a choice of content variation when activating
 * the theme. The content below is common to all packs for this theme.
 *
 * @package Magazine Pro
 * @author  StudioPress
 * @license GPL-2.0-or-later
 * @link    https://www.studiopress.com/magazine/
 */

return [
	'plugins'          => [
		[
			'name'       => __( 'Genesis Blocks', 'magazine-pro' ),
			'slug'       => 'genesis-blocks/genesis-blocks.php',
			'public_url' => 'https://wordpress.org/plugins/genesis-blocks/',
		],
		[
			'name'       => __( 'Simple Social Icons', 'magazine-pro' ),
			'slug'       => 'simple-social-icons/simple-social-icons.php',
			'public_url' => 'https://wordpress.org/plugins/simple-social-icons/',
		],
		[
			'name'       => __( 'Genesis eNews Extended (Third Party)', 'magazine-pro' ),
			'slug'       => 'genesis-enews-extended/plugin.php',
			'public_url' => 'https://wordpress.org/plugins/genesis-enews-extended/',
		],
		[
			'name'       => __( 'WPForms Lite (Third Party)', 'magazine-pro' ),
			'slug'       => 'wpforms-lite/wpforms.php',
			'public_url' => 'https://wordpress.org/plugins/wpforms-lite/',
		],
	],
	'content'          => [
		'homepage' => [
			'post_title'     => 'Homepage',
			'post_content'   => require dirname( __FILE__ ) . '/import/content/home.php',
			'post_type'      => 'page',
			'post_status'    => 'publish',
			'comment_status' => 'closed',
			'ping_status'    => 'closed',
			'meta_input'     => [
				'_genesis_layout'              => 'content-sidebar',
				'_genesis_hide_title'          => true,
				'_genesis_hide_breadcrumbs'    => true,
				'_genesis_hide_singular_image' => true,
			],
		],
		'blocks'   => [
			'post_title'     => 'Block Content Examples',
			'post_content'   => require dirname( __FILE__ ) . '/import/content/block-examples.php',
			'post_type'      => 'page',
			'post_status'    => 'publish',
			'comment_status' => 'closed',
			'ping_status'    => 'closed',
			'meta_input'     => [ '_genesis_layout' => 'full-width-content' ],
		],
		'about'    => [
			'post_title'     => 'About Us',
			'post_content'   => require dirname( __FILE__ ) . '/import/content/about.php',
			'post_type'      => 'page',
			'post_status'    => 'publish',
			'featured_image' => CHILD_URL . '/config/import/images/about.jpg',
			'comment_status' => 'closed',
			'ping_status'    => 'closed',
			'meta_input'     => [
				'_genesis_layout'              => 'full-width-content',
				'_genesis_hide_singular_image' => true,
			],
		],
		'contact'  => [
			'post_title'     => 'Contact Us',
			'post_content'   => require dirname( __FILE__ ) . '/import/content/contact.php',
			'post_type'      => 'page',
			'post_status'    => 'publish',
			'comment_status' => 'closed',
			'ping_status'    => 'closed',
		],
		'landing'  => [
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
		],
	],
	'widgets'          => [
		'sidebar'      => [
			[
				'type' => 'enews-ext',
				'args' => [
					'title'       => 'E-mail Newsletter',
					'action'      => '#',
					'email-field' => '#',
					'fname-field' => '#',
					'fname_text'  => 'Your Name',
					'input_text'  => 'E-mail Address',
					'button_text' => 'Subscribe',
				],
			],
			[
				'type' => 'simple-social-icons',
				'args' => [
					'title'     => '',
					'facebook'  => '#',
					'github'    => '#',
					'instagram' => '#',
					'pinterest' => '#',
					'twitter'   => '#',
					'youtube'   => '#',
				],
			],
			[
				'type' => 'featured-post',
				'args' => [
					'title'           => 'More to See',
					'posts_num'       => '2',
					'posts_offset'    => '1',
					'orderby'         => 'ID',
					'show_image'      => 1,
					'image_size'      => 'sidebar-thumbnail',
					'image_alignment' => 'alignleft',
					'show_title'      => 1,
					'show_byline'     => 1,
					'post_info'       => '[post_date] By [post_author_posts_link]',
					'show_content'    => '',
				],
			],
			[
				'type' => 'tag_cloud',
				'args' => [
					'title' => 'Tags',
				],
			],
		],
		'header-right' => [
			[
				'type' => 'custom_html',
				'args' => [
					'title'   => '',
					'content' => '<a href="#"><img src="https://demo.studiopress.com/magazine/files/2013/10/728x90.jpg" alt="Ad example"></a>',
				],
			],
		],
		'footer-1'     => [
			[
				'type' => 'text',
				'args' => [
					'title'  => 'Text Widget',
					'text'   => '<p>This is an example of a text widget which can be used to describe a particular service. You can also use other widgets in this location.</p><p>Examples of widgets that can be placed here in the footer are a calendar, latest tweets, recent comments, recent posts, search form, tag cloud or more.</p><a href="#">Sample Link</a>.',
					'filter' => 1,
					'visual' => 1,
				],
			],
		],
		'footer-2'     => [
			[
				'type' => 'recent-posts',
				'args' => [
					'title'  => 'Recent',
					'number' => '5',
				],
			],
		],
		'footer-3'     => [
			[
				'type' => 'search',
				'args' => [
					'title' => 'Search',
				],
			],
			[
				'type' => 'tag_cloud',
				'args' => [
					'title' => 'Tags',
				],
			],
		],
	],
];
