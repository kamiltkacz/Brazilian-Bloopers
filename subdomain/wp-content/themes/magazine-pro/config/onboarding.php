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

$magazine_shared_content = genesis_get_config( 'onboarding-shared' );

// Import sample posts if the site is fresh.
$magazine_multi_content   = genesis_get_config( 'onboarding-multi-posts' );
$magazine_cuisine_content = genesis_get_config( 'onboarding-cuisine-posts' );
$magazine_fitness_content = genesis_get_config( 'onboarding-fitness-posts' );
$magazine_travel_content  = genesis_get_config( 'onboarding-travel-posts' );

return [
	'starter_packs' => [
		'multi'   => [
			'title'       => __( 'Multi-topic', 'magazine-pro' ),
			'description' => __( 'A pack showcasing a wide variety of article topics. Demo posts will only be imported if your site is brand new.', 'magazine-pro' ),
			'thumbnail'   => get_stylesheet_directory_uri() . '/config/import/images/thumbnails/home-multi.jpg',
			'demo_url'    => 'https://demo.studiopress.com/magazine/',
			'config'      => [
				'dependencies'     => [
					'plugins' => $magazine_shared_content['plugins'],
				],
				'content'          => array_merge(
					$magazine_shared_content['content'],
					(array) $magazine_multi_content['content']
				),
				'navigation_menus' => $magazine_shared_content['navigation_menus'],
				'widgets'          => $magazine_shared_content['widgets'],
			],
		],
		'cuisine' => [
			'title'       => __( 'Cuisine', 'magazine-pro' ),
			'description' => __( 'A pack showcasing mouthwatering dishes. Demo posts will only be imported if your site is brand new.', 'magazine-pro' ),
			'thumbnail'   => get_stylesheet_directory_uri() . '/config/import/images/thumbnails/home-cuisine.jpg',
			'demo_url'    => 'https://demo.studiopress.com/magazine/cuisine/',
			'config'      => [
				'dependencies'     => [
					'plugins' => $magazine_shared_content['plugins'],
				],
				'content'          => array_merge(
					$magazine_shared_content['content'],
					(array) $magazine_cuisine_content['content']
				),
				'navigation_menus' => $magazine_shared_content['navigation_menus'],
				'widgets'          => $magazine_shared_content['widgets'],
			],
		],
		'fitness' => [
			'title'       => __( 'Fitness', 'magazine-pro' ),
			'description' => __( 'A pack for motivational fitness content. Demo posts will only be imported if your site is brand new.', 'magazine-pro' ),
			'thumbnail'   => get_stylesheet_directory_uri() . '/config/import/images/thumbnails/home-fitness.jpg',
			'demo_url'    => 'https://demo.studiopress.com/magazine/fitness/',
			'config'      => [
				'dependencies'     => [
					'plugins' => $magazine_shared_content['plugins'],
				],
				'content'          => array_merge(
					$magazine_shared_content['content'],
					(array) $magazine_fitness_content['content']
				),
				'navigation_menus' => $magazine_shared_content['navigation_menus'],
				'widgets'          => $magazine_shared_content['widgets'],
			],
		],
		'travel'  => [
			'title'       => __( 'Travel', 'magazine-pro' ),
			'description' => __( 'A pack showcasing aspirational travel content. Demo posts will only be imported if your site is brand new.', 'magazine-pro' ),
			'thumbnail'   => get_stylesheet_directory_uri() . '/config/import/images/thumbnails/home-travel.jpg',
			'demo_url'    => 'https://demo.studiopress.com/magazine/travel/',
			'config'      => [
				'dependencies'     => [
					'plugins' => $magazine_shared_content['plugins'],
				],
				'content'          => array_merge(
					$magazine_shared_content['content'],
					(array) $magazine_travel_content['content']
				),
				'navigation_menus' => $magazine_shared_content['navigation_menus'],
				'widgets'          => $magazine_shared_content['widgets'],
			],
		],
	],
];
