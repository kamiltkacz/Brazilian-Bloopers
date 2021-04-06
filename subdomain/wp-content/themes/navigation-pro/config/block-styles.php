<?php
/**
 * Block styles specific to Navigation Pro.
 *
 * @package Navigation
 * @author  StudioPress
 * @license GPL-2.0-or-later
 * @link    https://my.studiopress.com/themes/navigation/
 */

return [
	'core/button'                 => [
		[
			'name'  => 'button-line',
			'label' => __( 'Button Line', 'navigation-pro' ),
		],
	],
	'core/heading'                => [
		[
			'name'         => 'xl-text',
			'label'        => __( 'Extra Large', 'navigation-pro' ),
			'inline_style' => '.is-style-xl-text, .editor-styles-wrapper .is-style-xl-text { font-size: 80px; }',
		],
		[
			'name'         => 'small-text',
			'label'        => __( 'Small Capitals', 'navigation-pro' ),
			'inline_style' => '.is-style-small-text, .editor-styles-wrapper .is-style-small-text { font-family: Montserrat, sans-serif; font-size: 18px; text-transform: uppercase; letter-spacing: 1px;}',
		],
	],
	'core/image'                  => [
		[
			'name'  => 'image-corners',
			'label' => __( 'Corner Brackets', 'navigation-pro' ),
		],
		[
			'name'  => 'caption-overlay',
			'label' => __( 'Caption Overlay & Corner Brackets', 'navigation-pro' ),
		],
		[
			'name'  => 'book-style',
			'label' => __( 'Book Style', 'navigation-pro' ),
		],
	],
	'core/paragraph'              => [
		[
			'name'         => 'highlight-text',
			'label'        => __( 'Heading Font', 'navigation-pro' ),
			'inline_style' => 'p.is-style-highlight-text { font-family: Aleo, Helvetica, Arial, sans-serif; font-weight: 400; letter-spacing: -1px; line-height: 1.6; }',
		],
		[
			'name'         => 'capital-text',
			'label'        => __( 'Capitals', 'navigation-pro' ),
			'inline_style' => '.is-style-capital-text, .editor-styles-wrapper .is-style-capital-text { font-family: Montserrat, sans-serif; font-size: 18px; text-transform: uppercase; letter-spacing: 1px;}',
		],
	],
	'core/quote'                  => [
		[
			'name'  => 'quote-underlay',
			'label' => __( 'Styled Underlay', 'navigation-pro' ),
		],
	],
	'core/separator'              => [
		[
			'name'         => 'theme-separator',
			'label'        => __( 'Theme Separator', 'navigation-pro' ),
			'inline_style' => '.wp-block-separator.is-style-theme-separator { border-bottom: 1px solid currentColor !important; border-left: 1px solid currentColor; height: 20px !important; margin: 2.2em 0 2em 4em; max-width: 100% !important; }',
		],
	],
	'genesis-blocks/gb-column'    => [
		[
			'name'  => 'column-corners',
			'label' => __( 'Corner Brackets', 'navigation-pro' ),
		],
		[
			'name'  => 'offset-up',
			'label' => __( 'Upward Offset', 'navigation-pro' ),
		],
	],
	'genesis-blocks/gb-container' => [
		[
			'name'  => 'angled-underlay',
			'label' => __( 'Angled Underlay', 'navigation-pro' ),
		],
	],
	'genesis-blocks/gb-post-grid' => [
		[
			'name'  => 'entry-corners',
			'label' => __( 'Corner Brackets', 'navigation-pro' ),
		],
		[
			'name'  => 'overlay',
			'label' => __( 'Title Overlay & Corner Brackets', 'navigation-pro' ),
		],
	],
];
