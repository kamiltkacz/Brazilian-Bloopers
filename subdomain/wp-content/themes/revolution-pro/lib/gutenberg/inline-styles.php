<?php
/**
 * Adds front-end inline styles for the custom Gutenberg color palette.
 *
 * @package Revolution Pro
 * @author  StudioPress
 * @license GPL-2.0-or-later
 * @link    https://my.studiopress.com/themes/revolution/
 */

add_action( 'wp_enqueue_scripts', 'revolution_custom_gutenberg_css' );
/**
 * Output front-end inline styles for `editor-color-palette` colors.
 *
 * These colors can be changed in the Customizer, so CSS is set dynamically.
 *
 * @since 1.0.0
 */
function revolution_custom_gutenberg_css() {

	$custom_color          = get_theme_mod( 'revolution_link_color', revolution_get_default_link_color() );
	$accent_color          = get_theme_mod( 'revolution_accent_color', revolution_get_default_accent_color() );
	$accent_color_contrast = revolution_color_contrast( $accent_color );

	$css = <<<CSS
.gb-block-post-grid .gb-post-grid-items h2 a:hover,
.site-container .has-theme-primary-color,
.site-container .wp-block-button .wp-block-button__link.has-theme-primary-color,
.site-container .wp-block-button.is-style-outline .wp-block-button__link.has-theme-primary-color {
	color: $custom_color;
}

.site-container .has-theme-primary-background-color,
.site-container .wp-block-button .wp-block-button__link.has-theme-primary-background-color,
.site-container .wp-block-pullquote.is-style-solid-color.has-theme-primary-background-color {
	background-color: $custom_color;
}

.site-container .has-theme-secondary-color,
.site-container .wp-block-button .wp-block-button__link.has-theme-secondary-color,
.site-container .wp-block-button.is-style-outline .wp-block-button__link {
	color: $accent_color;
}

.wp-block-button .wp-block-button__link:not(.has-background),
.wp-block-button .wp-block-button__link:not(.has-background):focus,
.wp-block-button .wp-block-button__link:not(.has-background):hover {
	color: $accent_color_contrast;
}

.site-container .has-theme-secondary-background-color,
.site-container .wp-block-button .wp-block-button__link,
.site-container .wp-block-pullquote.is-style-solid-color.has-theme-secondary-background-color {
	background-color: $accent_color;
}

.site-container .rev-overlap {
	margin-top: -25% !important;
}
CSS;

	wp_add_inline_style( genesis_get_theme_handle() . '-gutenberg', $css );

}

add_action( 'enqueue_block_editor_assets', 'revolution_custom_gutenberg_admin_css' );
/**
 * Output back-end inline styles for link state.
 *
 * Causes the custom color to apply to elements with the Gutenberg editor.
 * The custom color is set in the Customizer in the Colors panel.
 *
 * Note this will appear before the style-editor.css injected by JavaScript,
 * so overrides will need to have higher specificity.
 *
 * @since 1.0.0
 */
function revolution_custom_gutenberg_admin_css() {

	$custom_color          = get_theme_mod( 'revolution_link_color', revolution_get_default_link_color() );
	$accent_color          = get_theme_mod( 'revolution_accent_color', revolution_get_default_accent_color() );
	$accent_color_contrast = revolution_color_contrast( $accent_color );

	$css = <<<CSS
.gb-block-post-grid .gb-post-grid-items h2 a:hover {
	color: $custom_color;
}

.editor-styles-wrapper .wp-block-pullquote.is-style-solid-color.has-theme-primary-background-color {
	background-color: $custom_color;
}

.editor-styles-wrapper .block-editor-rich-text .button,
.editor-styles-wrapper .wp-block-button .wp-block-button__link:not(.has-background) {
	background-color: $accent_color;
	color: $accent_color_contrast;
}

.editor-styles-wrapper .wp-block-button.is-style-outline .wp-block-button__link {
	color: $accent_color;
}
.editor-styles-wrapper .rev-overlap {
	margin-top: -25% !important;
}
CSS;

	wp_add_inline_style( genesis_get_theme_handle() . '-gutenberg-fonts', $css );

}

/**
 * Generate CSS for editor colors based on theme color palette support.
 *
 * @since 1.4.0
 *
 * @return string The editor colors CSS if `editor-color-palette` theme support was declared.
 */
function revolution_editor_inline_color_palette() {

	$css                  = '';
	$editor_color_palette = genesis_get_config( 'editor-color-palette' );

	foreach ( $editor_color_palette as $color_info ) {
		$css .= <<<CSS
		.has-{$color_info['slug']}-color {
			color: {$color_info['color']};
		}
CSS;
	}

	return $css;

}
