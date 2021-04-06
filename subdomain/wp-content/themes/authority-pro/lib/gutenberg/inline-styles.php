<?php
/**
 * Adds front-end inline styles for the custom Gutenberg color palette.
 *
 * @package Authority Pro
 * @author  StudioPress
 * @license GPL-2.0-or-later
 * @link    https://www.studiopress.com/
 */

add_action( 'wp_enqueue_scripts', 'authority_custom_gutenberg_css' );
/**
 * Outputs front-end inline styles for `editor-color-palette` colors.
 *
 * These colors can be changed in the Customizer, so CSS is set dynamically.
 *
 * @since 1.1.0
 */
function authority_custom_gutenberg_css() {

	$block_editor_settings = genesis_get_config( 'block-editor-settings' );

	$css = <<<CSS
.gb-block-post-grid a.gb-block-post-grid-more-link,
.gb-block-post-grid .gb-post-grid-items .gb-block-post-grid-title a:focus,
.gb-block-post-grid .gb-post-grid-items .gb-block-post-grid-title a:hover,
.wp-block-image.vertical-caption figcaption a:focus,
.wp-block-image.vertical-caption figcaption a:hover {
	color: {$block_editor_settings['default-link-color']};
}

.site-container .gb-button,
.site-container .gb-newsletter-submit,
.site-container .gb-newsletter-submit:hover,
.site-container .wp-block-button .wp-block-button__link,
.wp-block-media-text .wp-block-media-text__media::after,
.wp-block-image.stylized-background::after {
	background-color: {$block_editor_settings['default-button-bg']};
}

.site-container .gb-button,
.wp-block-button .wp-block-button__link:not(.has-background),
.wp-block-button .wp-block-button__link:not(.has-background):focus,
.wp-block-button .wp-block-button__link:not(.has-background):hover {
	color: {$block_editor_settings['default-button-color']};
}

.site-container .wp-block-button.is-style-outline .wp-block-button__link {
	color: {$block_editor_settings['default-button-bg']};
}

.site-container .wp-block-button.is-style-outline .wp-block-button__link:focus,
.site-container .wp-block-button.is-style-outline .wp-block-button__link:hover {
	color: {$block_editor_settings['default-button-outline-hover']};
}

.site-container .wp-block-pullquote.is-style-solid-color {
	background-color: {$block_editor_settings['default-button-bg']};
}
CSS;

	$css .= authority_inline_font_sizes();
	$css .= authority_inline_color_palette();

	wp_add_inline_style( CHILD_THEME_HANDLE . '-gutenberg', $css );

}

add_action( 'enqueue_block_editor_assets', 'authority_custom_gutenberg_admin_css' );
/**
 * Outputs back-end inline styles for link state.
 *
 * Causes the custom color to apply to elements with the Gutenberg editor.
 * The custom color is set in the Customizer in the Colors panel.
 *
 * @since 1.1.0
 */
function authority_custom_gutenberg_admin_css() {

	$block_editor_settings = genesis_get_config( 'block-editor-settings' );

	$css = <<<CSS
.gb-block-post-grid .gb-post-grid-items .gb-block-post-grid-title a:focus,
.gb-block-post-grid .gb-post-grid-items .gb-block-post-grid-title a:hover,
.block-editor__container .editor-styles-wrapper a,
.block-editor__container .editor-styles-wrapper .authority-subtitle,
.block-editor__container .editor-styles-wrapper .entry-title a:focus,
.block-editor__container .editor-styles-wrapper .entry-title a:hover,
.block-editor__container .editor-styles-wrapper .product-title,
.block-editor__container .editor-styles-wrapper .product-price,
.block-editor__container .editor-styles-wrapper h4,
.block-editor__container .editor-styles-wrapper h5,
.block-editor__container .editor-styles-wrapper .gb-block-post-grid a.gb-block-post-grid-more-link {
	color: {$block_editor_settings['default-link-color']};
}

.block-editor__container .editor-styles-wrapper .wp-block-image.stylized-background::after,
.block-editor__container .editor-styles-wrapper .wp-block-media-text .block-library-media-text__media-container::after {
	background-color: {$block_editor_settings['default-button-bg']};
}

.editor-styles-wrapper .gb-block-button .gb-button,
.editor-styles-wrapper .editor-rich-text .button,
.editor-styles-wrapper .wp-block-button .wp-block-button__link:not(.has-background) {
	background-color: {$block_editor_settings['default-button-bg']};
	color: {$block_editor_settings['default-button-color']};
}

.editor-styles-wrapper .wp-block-button.is-style-outline .wp-block-button__link {
	color: {$block_editor_settings['default-button-bg']};
}

.editor-styles-wrapper .wp-block-button.is-style-outline .wp-block-button__link:focus,
.editor-styles-wrapper .wp-block-button.is-style-outline .wp-block-button__link:hover {
	color: {$block_editor_settings['default-button-outline-hover']};
}

.wp-block-pullquote.is-style-solid-color {
	background-color: {$block_editor_settings['default-button-bg']};
}

@media only screen and (max-width: 1560px) {

	.is-sidebar-opened .editor-styles-wrapper .wp-block-image.stylized-background::after,
	.is-sidebar-opened .editor-styles-wrapper .wp-block-image.stylized-background::before,
	.is-sidebar-opened .editor-styles-wrapper .wp-block-media-text .block-library-media-text__media-container::after,
	.is-sidebar-opened .editor-styles-wrapper .wp-block-media-text .block-library-media-text__media-container::before {
		display: none;
	}

	.is-sidebar-opened .editor-styles-wrapper .wp-block-media-text .block-library-media-text__media-container > *,
	.is-sidebar-opened .editor-styles-wrapper .wp-block-media-text.has-media-on-the-right .block-library-media-text__media-container > * {
		margin-left: 0;
	}

}
CSS;

	$css .= authority_editor_inline_color_palette();

	wp_add_inline_style( CHILD_THEME_HANDLE . '-gutenberg-fonts', $css );

}

/**
 * Generates CSS for editor font sizes from the provided theme support.
 *
 * @since 1.2.0
 *
 * @return string The CSS for editor font sizes if theme support was declared.
 */
function authority_inline_font_sizes() {

	$css               = '';
	$editor_font_sizes = get_theme_support( 'editor-font-sizes' );

	if ( ! $editor_font_sizes ) {
		return '';
	}

	foreach ( $editor_font_sizes[0] as $font_size ) {
		$css .= <<<CSS
		.site-container .has-{$font_size['slug']}-font-size {
			font-size: {$font_size['size']}px;
		}
CSS;
	}

	return $css;

}

/**
 * Generates CSS for editor colors based on theme color palette support.
 *
 * @since 1.2.0
 *
 * @return string The editor colors CSS if `editor-color-palette` theme support was declared.
 */
function authority_inline_color_palette() {

	$css                   = '';
	$block_editor_settings = genesis_get_config( 'block-editor-settings' );
	$editor_color_palette  = $block_editor_settings['editor-color-palette'];

	foreach ( $editor_color_palette as $color_info ) {
		$css .= <<<CSS
		.site-container .has-{$color_info['slug']}-color,
		.site-container .wp-block-button .wp-block-button__link.has-{$color_info['slug']}-color,
		.site-container .wp-block-button.is-style-outline .wp-block-button__link.has-{$color_info['slug']}-color {
			color: {$color_info['color']};
		}

		.site-container .has-{$color_info['slug']}-background-color,
		.site-container .wp-block-button .wp-block-button__link.has-{$color_info['slug']}-background-color,
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
function authority_editor_inline_color_palette() {

	$css                   = '';
	$block_editor_settings = genesis_get_config( 'block-editor-settings' );
	$editor_color_palette  = $block_editor_settings['editor-color-palette'];

	foreach ( $editor_color_palette as $color_info ) {
		$css .= <<<CSS
		.has-{$color_info['slug']}-color {
			color: {$color_info['color']};
		}
CSS;
	}

	return $css;

}
