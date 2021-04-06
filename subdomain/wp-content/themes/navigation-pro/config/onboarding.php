<?php
/**
 * Navigation Pro.
 *
 * Onboarding config to load plugins and homepage content on theme activation.
 *
 * Visit `/wp-admin/admin.php?page=genesis-getting-started` to trigger import.
 *
 * @package Navigation Pro
 * @author  StudioPress
 * @license GPL-2.0-or-later
 * @link    https://my.studiopress.com/themes/navigation/
 */

$navigation_shared_content  = genesis_get_config( 'onboarding-shared' );
$navigation_travel_content  = genesis_get_config( 'onboarding-travel' );
$navigation_cuisine_content = genesis_get_config( 'onboarding-cuisine' );
$navigation_fitness_content = genesis_get_config( 'onboarding-fitness' );
$navigation_law_content     = genesis_get_config( 'onboarding-law' );
$navigation_layouts         = genesis_get_config( 'genesis-blocks-layouts' );

$navigation_starter_packs_content = [
	'starter_packs' => [
		'travel'  => [
			'title'       => __( 'Travel', 'navigation-pro' ),
			'description' => __( 'A pack with a homepage designed for travel buffs.', 'navigation-pro' ),
			'thumbnail'   => get_stylesheet_directory_uri() . '/screenshot.jpg',
			'demo_url'    => 'https://demo.studiopress.com/navigation/',
			'config'      => [
				'dependencies'     => [
					'plugins' => $navigation_shared_content['dependencies']['plugins'],
				],
				'content'          => array_merge(
					[
						'homepage' => [
							'post_title'     => 'Homepage',
							'post_content'   => $navigation_layouts['travel-layout']['content'],
							'post_type'      => 'page',
							'post_status'    => 'publish',
							'page_template'  => 'templates/blocks.php',
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
					$navigation_shared_content['content'],
					(array) $navigation_travel_content['content']
				),
				'navigation_menus' => $navigation_shared_content['navigation_menus'],
				'widgets'          => $navigation_shared_content['widgets'],
			],
		],
		'cuisine' => [
			'title'       => __( 'Cuisine', 'navigation-pro' ),
			'description' => __( 'A savory starter pack designed for the kitchen connoisseur in you.', 'navigation-pro' ),
			'thumbnail'   => get_stylesheet_directory_uri() . '/config/import/images/thumbnails/cuisine.jpg',
			'demo_url'    => 'https://demo.studiopress.com/navigation/cuisine/',
			'config'      => [
				'dependencies'     => [
					'plugins' => $navigation_shared_content['dependencies']['plugins'],
				],
				'content'          => array_merge(
					[
						'homepage' => [
							'post_title'     => 'Homepage',
							'post_content'   => $navigation_layouts['cuisine-layout']['content'],
							'post_type'      => 'page',
							'post_status'    => 'publish',
							'page_template'  => 'templates/blocks.php',
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
					$navigation_shared_content['content'],
					(array) $navigation_cuisine_content['content']
				),
				'navigation_menus' => $navigation_shared_content['navigation_menus'],
				'widgets'          => $navigation_shared_content['widgets'],
			],
		],
		'fitness' => [
			'title'       => __( 'Fitness', 'navigation-pro' ),
			'description' => __( 'A pack with a homepage designed with fitness in mind.', 'navigation-pro' ),
			'thumbnail'   => get_stylesheet_directory_uri() . '/config/import/images/thumbnails/fitness.jpg',
			'demo_url'    => 'https://demo.studiopress.com/navigation/fitness/',
			'config'      => [
				'dependencies'     => [
					'plugins' => $navigation_shared_content['dependencies']['plugins'],
				],
				'content'          => array_merge(
					[
						'homepage' => [
							'post_title'     => 'Homepage',
							'post_content'   => $navigation_layouts['fitness-layout']['content'],
							'post_type'      => 'page',
							'post_status'    => 'publish',
							'page_template'  => 'templates/blocks.php',
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
					$navigation_shared_content['content'],
					(array) $navigation_fitness_content['content']
				),
				'navigation_menus' => $navigation_shared_content['navigation_menus'],
				'widgets'          => $navigation_shared_content['widgets'],
			],
		],
		'law'     => [
			'title'       => __( 'Law', 'navigation-pro' ),
			'description' => __( 'A pack with a homepage designed to showcase your law practice.', 'navigation-pro' ),
			'thumbnail'   => get_stylesheet_directory_uri() . '/config/import/images/thumbnails/law.jpg',
			'demo_url'    => 'https://demo.studiopress.com/navigation/law/',
			'config'      => [
				'dependencies'     => [
					'plugins' => $navigation_shared_content['dependencies']['plugins'],
				],
				'content'          => array_merge(
					[
						'homepage' => [
							'post_title'     => 'Homepage',
							'post_content'   => $navigation_layouts['law-layout']['content'],
							'post_type'      => 'page',
							'post_status'    => 'publish',
							'page_template'  => 'templates/blocks.php',
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
					$navigation_shared_content['content'],
					(array) $navigation_law_content['content']
				),
				'navigation_menus' => $navigation_shared_content['navigation_menus'],
				'widgets'          => $navigation_shared_content['widgets'],
			],
		],
	],
];

return $navigation_starter_packs_content;
