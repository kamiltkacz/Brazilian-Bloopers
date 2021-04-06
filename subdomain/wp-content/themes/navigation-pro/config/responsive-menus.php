<?php
/**
 * Navigation Pro.
 *
 * This file defines the responsive menu options.
 *
 * @package Navigation
 * @author  StudioPress
 * @license GPL-2.0-or-later
 * @link    https://my.studiopress.com/themes/navigation/
 */

/**
 * Genesis responsive menus settings. (Requires Genesis 3.0+.)
 */
return [
	'script' => [
		'menuIconClass'       => 'ionicons-before ion-ios-menu',
		'menuIconOpenedClass' => 'ionicons-before ion-ios-close',
		'subMenuIconClass'    => 'ionicons-before ion-ios-arrow-down',
		'menuClasses'         => [
			'others' => [ '.nav-primary' ],
		],
	],
	'extras' => [
		'media_query_width' => '1023px',
	],
];
