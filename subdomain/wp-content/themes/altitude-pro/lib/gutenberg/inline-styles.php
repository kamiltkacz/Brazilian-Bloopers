<?php
/**
 * Adds front-end inline styles for the custom Gutenberg color palette.
 *
 * @package Altitude Pro
 * @author  StudioPress
 * @license GPL-2.0-or-later
 * @link    https://my.studiopress.com/themes/altitude/
 */

add_action( 'wp_enqueue_scripts', 'altitude_custom_gutenberg_css' );
/**
 * Outputs front-end inline styles based on colors declared in config/appearance.php.
 *
 * @since 1.2.0
 */
function altitude_custom_gutenberg_css() {

	$appearance = genesis_get_config( 'appearance' );

	$css = <<<CSS
.gb-block-post-grid .gb-post-grid-items h2 a:hover {
	color: {$appearance['primary-color']};
}

.site-container .wp-block-button__link,
.site-container .wp-block-pullquote.is-style-solid-color {
	background-color: {$appearance['primary-color']};
}

.wp-block-button__link:not(.has-background),
.wp-block-button__link:not(.has-background):focus,
.wp-block-button__link:not(.has-background):hover,
.wp-block-pullquote.is-style-solid-color:not(.has-background) {
	color: {$appearance['primary-color-contrast']};
}

.has-theme-primary-background-color,
.has-theme-primary-background-color.wp-block-button__link:focus,
.has-theme-primary-background-color.wp-block-button__link:hover,
.has-theme-primary-background-color.wp-block-button__link:visited,
.has-theme-primary-background-color.wp-block-pullquote.is-style-solid-color {
	color: {$appearance['primary-color-contrast']};
}

.has-theme-secondary-background-color,
.has-theme-secondary-background-color.wp-block-button__link:focus,
.has-theme-secondary-background-color.wp-block-button__link:hover,
.has-theme-secondary-background-color.wp-block-button__link:visited,
.has-theme-secondary-background-color.wp-block-pullquote.is-style-solid-color {
	color: {$appearance['secondary-color-contrast']};
}

.site-container .is-style-outline.wp-block-button__link,
.site-container .is-style-outline .wp-block-button__link {
	background-color: transparent;
	color: {$appearance['primary-color']};
}
CSS;

	$css .= altitude_inline_font_sizes();
	$css .= altitude_inline_color_palette();

	wp_add_inline_style( genesis_get_theme_handle() . '-gutenberg', $css );

}

add_action( 'enqueue_block_editor_assets', 'altitude_custom_gutenberg_admin_css' );
/**
 * Outputs back-end inline styles based on colors declared in config/appearance.php.
 *
 * Note this will appear before the style-editor.css injected by JavaScript,
 * so overrides will need to have higher specificity.
 *
 * @since 1.2.0
 */
function altitude_custom_gutenberg_admin_css() {

	$appearance = genesis_get_config( 'appearance' );

	$css = <<<CSS
.gb-block-post-grid .gb-post-grid-items h2 a:hover,
.block-editor__container .editor-styles-wrapper a {
	color: {$appearance['primary-color']};
}

.editor-styles-wrapper .editor-rich-text .button,
.wp-block-button__link:not(.has-background),
.wp-block-button__link:not(.has-background):focus,
.wp-block-button__link:not(.has-background):hover,
.wp-block-pullquote.is-style-solid-color:not(.has-background) {
	background-color: {$appearance['primary-color']};
	color: {$appearance['primary-color-contrast']};
}

.editor-styles-wrapper .wc-block-grid .wc-block-grid__products a.add_to_cart_button {
	background-color: {$appearance['secondary-color']};
	color: {$appearance['secondary-color-contrast']};
}

.editor-styles-wrapper .has-theme-primary-background-color,
.has-theme-primary-background-color,
.has-theme-primary-background-color.wp-block-button__link:focus,
.has-theme-primary-background-color.wp-block-button__link:hover,
.has-theme-primary-background-color.wp-block-button__link:visited,
.has-theme-primary-background-color.wp-block-pullquote.is-style-solid-color {
	color: {$appearance['primary-color-contrast']};
}

.editor-styles-wrapper .has-theme-secondary-background-color,
.has-theme-secondary-background-color,
.has-theme-secondary-background-color.wp-block-button__link:focus,
.has-theme-secondary-background-color.wp-block-button__link:hover,
.has-theme-secondary-background-color.wp-block-button__link:visited,
.has-theme-secondary-background-color.wp-block-pullquote.is-style-solid-color {
	color: {$appearance['secondary-color-contrast']};
}

.is-style-outline.wp-block-button__link:not(.has-background),
.is-style-outline.is-style-outline .wp-block-button__link {
	background-color: transparent;
}

.is-style-outline.wp-block-button__link,
.is-style-outline.wp-block-button__link:focus,
.is-style-outline.wp-block-button__link:hover,
.is-style-outline.wp-block-button__link:visited,
.is-style-outline.is-style-outline .wp-block-button__link {
	color: {$appearance['primary-color']};
}
CSS;

	$css .= altitude_inline_font_sizes();
	$css .= altitude_editor_inline_color_palette();

	wp_add_inline_style( genesis_get_theme_handle() . '-gutenberg-editor', $css );

}

/**
 * Generate CSS for editor font sizes from the provided theme support.
 *
 * @since 1.2.0
 *
 * @return string The CSS for editor font sizes if theme support was declared.
 */
function altitude_inline_font_sizes() {

	$css               = '';
	$editor_font_sizes = get_theme_support( 'editor-font-sizes' );

	if ( ! $editor_font_sizes ) {
		return '';
	}

	foreach ( $editor_font_sizes[0] as $font_size ) {
		$css .= <<<CSS
		.has-{$font_size['slug']}-font-size {
			font-size: {$font_size['size']}px !important;
		}
CSS;
	}

	return $css;

}

/**
 * Generate CSS for editor colors based on theme color palette support.
 *
 * @since 1.2.0
 *
 * @return string The editor colors CSS if `editor-color-palette` theme support was declared.
 */
function altitude_inline_color_palette() {

	$css                  = '';
	$appearance           = genesis_get_config( 'appearance' );
	$editor_color_palette = $appearance['editor-color-palette'];

	foreach ( $editor_color_palette as $color_info ) {
		$css .= <<<CSS
		.site-container .has-{$color_info['slug']}-color,
		.site-container .wp-block-button__link.has-{$color_info['slug']}-color,
		.site-container .is-style-outline .wp-block-button__link.has-{$color_info['slug']}-color {
			color: {$color_info['color']};
		}

		.site-container .has-{$color_info['slug']}-background-color,
		.site-container .wp-block-button__link.has-{$color_info['slug']}-background-color,
		.site-container .is-style-outline .wp-block-button__link.has-{$color_info['slug']}-background-color,
		.site-container .wp-block-pullquote.is-style-solid-color.has-{$color_info['slug']}-background-color {
			background-color: {$color_info['color']};
		}
CSS;
	}

	return $css;

}

/**
 * Generate CSS for editor colors based on theme color palette support.
 *
 * @since 1.4.0
 *
 * @return string The editor colors CSS if `editor-color-palette` theme support was declared.
 */
function altitude_editor_inline_color_palette() {

	$css                  = '';
	$appearance           = genesis_get_config( 'appearance' );
	$editor_color_palette = $appearance['editor-color-palette'];

	foreach ( $editor_color_palette as $color_info ) {
		$css .= <<<CSS
		.has-{$color_info['slug']}-color,
		.wp-block-button__link.has-text-color.has-{$color_info['slug']}-color,
		.is-style-outline.is-style-outline .has-text-color.has-{$color_info['slug']}-color.wp-block-button__link,
		.is-style-outline.has-text-color.has-{$color_info['slug']}-color.wp-block-button__link {
			color: {$color_info['color']};
		}

		.has-{$color_info['slug']}-background-color,
		.is-style-outline.has-{$color_info['slug']}-background-color,
		.is-style-outline .wp-block-button__link.has-{$color_info['slug']}-background-color {
			background-color: {$color_info['color']};
		}
CSS;
	}

	return $css;

}
