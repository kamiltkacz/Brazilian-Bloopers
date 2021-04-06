<?php
/**
 * Revolution Pro.
 *
 * Onboarding config to load plugins and homepage content on theme activation.
 *
 * Visit `/wp-admin/admin.php?page=genesis-getting-started` to trigger import.
 *
 * @package Revolution Pro
 * @author  StudioPress
 * @license GPL-2.0-or-later
 * @link    https://my.studiopress.com/themes/revolution/
 */

$revolution_shared_content = genesis_get_config( 'onboarding-shared' );

return [
	'starter_packs' => [
		'agency'            => [
			'title'       => __( 'Agency', 'revolution-pro' ),
			'description' => __( 'A pack with a homepage designed for creative agencies.', 'revolution-pro' ),
			'thumbnail'   => get_stylesheet_directory_uri() . '/config/import/images/thumbnails/agency.jpg',
			'demo_url'    => 'https://demo.studiopress.com/revolution/',
			'config'      => [
				'dependencies'     => [
					'plugins' => $revolution_shared_content['plugins'],
				],
				'content'          => array_merge(
					[
						'homepage' => [
							'post_title'     => 'Homepage',
							'post_content'   => require dirname( __FILE__ ) . '/import/content/agency.php',
							'post_type'      => 'page',
							'post_status'    => 'publish',
							'comment_status' => 'closed',
							'ping_status'    => 'closed',
							'meta_input'     => [
								'_genesis_layout'     => 'full-width-content',
								'_genesis_hide_title' => true,
								'_genesis_hide_breadcrumbs' => true,
								'_genesis_hide_singular_image' => true,
							],
						],
					],
					$revolution_shared_content['content']
				),
				'navigation_menus' => $revolution_shared_content['navigation_menus'],
				'widgets'          => $revolution_shared_content['widgets'],
			],
		],
		'lifestyle-blogger' => [
			'title'       => __( 'Lifestyle Blogger', 'revolution-pro' ),
			'description' => __( 'A pack with a homepage made with bloggers in mind.', 'revolution-pro' ),
			'thumbnail'   => get_stylesheet_directory_uri() . '/config/import/images/thumbnails/lifestyle-blogger.jpg',
			'demo_url'    => 'https://demo.studiopress.com/revolution/lifestyle-blogger/',
			'config'      => [
				'dependencies'     => [
					'plugins' => $revolution_shared_content['plugins'],
				],
				'content'          => array_merge(
					[
						'homepage' => [
							'post_title'     => 'Homepage',
							'post_content'   => require dirname( __FILE__ ) . '/import/content/lifestyle.php',
							'post_type'      => 'page',
							'post_status'    => 'publish',
							'comment_status' => 'closed',
							'ping_status'    => 'closed',
							'meta_input'     => [
								'_genesis_layout'     => 'full-width-content',
								'_genesis_hide_title' => true,
								'_genesis_hide_breadcrumbs' => true,
								'_genesis_hide_singular_image' => true,
							],
						],
					],
					$revolution_shared_content['content']
				),
				'navigation_menus' => $revolution_shared_content['navigation_menus'],
				'widgets'          => $revolution_shared_content['widgets'],
			],
		],
		'personal-branding' => [
			'title'       => __( 'Personal Branding', 'revolution-pro' ),
			'description' => __( 'A pack with a homepage to elevate your personal brand.', 'revolution-pro' ),
			'thumbnail'   => get_stylesheet_directory_uri() . '/config/import/images/thumbnails/personal-branding.jpg',
			'demo_url'    => 'https://demo.studiopress.com/revolution/personal-branding/',
			'config'      => [
				'dependencies'     => [
					'plugins' => $revolution_shared_content['plugins'],
				],
				'content'          => array_merge(
					[
						'homepage' => [
							'post_title'     => 'Homepage',
							'post_content'   => require dirname( __FILE__ ) . '/import/content/personal.php',
							'post_type'      => 'page',
							'post_status'    => 'publish',
							'comment_status' => 'closed',
							'ping_status'    => 'closed',
							'meta_input'     => [
								'_genesis_layout'     => 'full-width-content',
								'_genesis_hide_title' => true,
								'_genesis_hide_breadcrumbs' => true,
								'_genesis_hide_singular_image' => true,
							],
						],
					],
					$revolution_shared_content['content']
				),
				'navigation_menus' => $revolution_shared_content['navigation_menus'],
				'widgets'          => $revolution_shared_content['widgets'],
			],
		],
		'photographer'      => [
			'title'       => __( 'Photographer', 'revolution-pro' ),
			'description' => __( 'A pack with a homepage to show off your work.', 'revolution-pro' ),
			'thumbnail'   => get_stylesheet_directory_uri() . '/config/import/images/thumbnails/photographer.jpg',
			'demo_url'    => 'https://demo.studiopress.com/revolution/photographer/',
			'config'      => [
				'dependencies'     => [
					'plugins' => $revolution_shared_content['plugins'],
				],
				'content'          => array_merge(
					[
						'homepage' => [
							'post_title'     => 'Homepage',
							'post_content'   => require dirname( __FILE__ ) . '/import/content/photographer.php',
							'post_type'      => 'page',
							'post_status'    => 'publish',
							'comment_status' => 'closed',
							'ping_status'    => 'closed',
							'meta_input'     => [
								'_genesis_layout'     => 'full-width-content',
								'_genesis_hide_title' => true,
								'_genesis_hide_breadcrumbs' => true,
								'_genesis_hide_singular_image' => true,
							],
						],
					],
					$revolution_shared_content['content']
				),
				'navigation_menus' => $revolution_shared_content['navigation_menus'],
				'widgets'          => $revolution_shared_content['widgets'],
			],
		],
		'small-business'    => [
			'title'       => __( 'Small Business', 'revolution-pro' ),
			'description' => __( 'A pack with a homepage to pitch your business and services.', 'revolution-pro' ),
			'thumbnail'   => get_stylesheet_directory_uri() . '/config/import/images/thumbnails/small-business.jpg',
			'demo_url'    => 'https://demo.studiopress.com/revolution/small-business/',
			'config'      => [
				'dependencies'     => [
					'plugins' => $revolution_shared_content['plugins'],
				],
				'content'          => array_merge(
					[
						'homepage' => [
							'post_title'     => 'Homepage',
							'post_content'   => require dirname( __FILE__ ) . '/import/content/business.php',
							'post_type'      => 'page',
							'post_status'    => 'publish',
							'comment_status' => 'closed',
							'ping_status'    => 'closed',
							'meta_input'     => [
								'_genesis_layout'     => 'full-width-content',
								'_genesis_hide_title' => true,
								'_genesis_hide_breadcrumbs' => true,
								'_genesis_hide_singular_image' => true,
							],
						],
					],
					$revolution_shared_content['content']
				),
				'navigation_menus' => $revolution_shared_content['navigation_menus'],
				'widgets'          => $revolution_shared_content['widgets'],
			],
		],
	],
];
