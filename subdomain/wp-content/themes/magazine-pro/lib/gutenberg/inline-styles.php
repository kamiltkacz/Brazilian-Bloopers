<?php
/**
 * Adds front-end inline styles for the custom Gutenberg color palette.
 *
 * @package Magazine Pro
 * @author  StudioPress
 * @license GPL-2.0-or-later
 * @link    https://www.studiopress.com/magazine/
 */

add_action( 'wp_enqueue_scripts', 'magazine_custom_gutenberg_css' );
/**
 * Outputs front-end inline styles for `editor-color-palette` colors.
 *
 * These colors can be changed in the Customizer, so CSS is set dynamically.
 *
 * @since 3.3.0
 */
function magazine_custom_gutenberg_css() {

	$appearance = genesis_get_config( 'appearance' );

	$css = <<<CSS
.gb-block-post-grid .gb-block-post-grid-more-link:hover,
.gb-block-post-grid header .gb-block-post-grid-title a:hover {
	color: {$appearance['link-color']};
}

.button-more-link.gb-block-post-grid .gb-block-post-grid-more-link:hover,
.gb-block-post-grid .is-grid .gb-block-post-grid-image a .gb-block-post-grid-date,
.site-container .wp-block-button .wp-block-button__link {
	background-color: {$appearance['button-background']};
	color: {$appearance['button-text-color']};
}

.button-more-link.gb-block-post-grid .gb-block-post-grid-more-link:hover,
.wp-block-button .wp-block-button__link:not(.has-background),
.wp-block-button .wp-block-button__link:not(.has-background):focus,
.wp-block-button .wp-block-button__link:not(.has-background):hover {
	color: {$appearance['button-text-color']};
}

.site-container .wp-block-button.is-style-outline .wp-block-button__link {
	color: {$appearance['button-background']};
}

.site-container .wp-block-button.is-style-outline .wp-block-button__link:focus,
.site-container .wp-block-button.is-style-outline .wp-block-button__link:hover {
	color: {$appearance['button-outline-hover']};
}

.site-container .wp-block-pullquote.is-style-solid-color {
	background-color: {$appearance['accent-color']};
}
CSS;

	$css .= magazine_inline_font_sizes();
	$css .= magazine_inline_color_palette();

	wp_add_inline_style( genesis_get_theme_handle() . '-gutenberg', $css );

}

add_action( 'enqueue_block_editor_assets', 'magazine_custom_gutenberg_admin_css' );
/**
 * Outputs back-end inline styles for link hover state.
 *
 * Causes the link hover state in the Gutenberg editor to reflect the
 * Link Color set in the Customizer.
 *
 * @since 3.3.0
 */
function magazine_custom_gutenberg_admin_css() {

	$appearance = genesis_get_config( 'appearance' );

	$css = <<<CSS
.gb-block-post-grid .gb-text-link.gb-block-post-grid-more-link:hover,
.gb-block-post-grid .gb-block-post-grid-header .gb-block-post-grid-title a:hover,
.block-editor__container .editor-styles-wrapper a {
	color: {$appearance['link-color']};
}

.editor-styles-wrapper .button-more-link.gb-block-post-grid .gb-text-link.gb-block-post-grid-more-link:hover,
.editor-styles-wrapper .editor-rich-text .button,
.editor-styles-wrapper .wp-block-button .wp-block-button__link:not(.has-background),
.editor-styles-wrapper .gb-block-post-grid .is-grid .gb-block-post-grid-date {
	background-color: {$appearance['button-background']};
	color: {$appearance['button-text-color']};
}

.editor-styles-wrapper .wp-block-button.is-style-outline .wp-block-button__link {
	color: {$appearance['button-background']};
}

.editor-styles-wrapper .wp-block-button.is-style-outline .wp-block-button__link:focus,
.editor-styles-wrapper .wp-block-button.is-style-outline .wp-block-button__link:hover {
	color: {$appearance['button-outline-hover']};
}

.product-price {
	color: {$appearance['link-color']};
}

.wp-block-pullquote.is-style-solid-color {
	background-color: {$appearance['accent-color']};
}
CSS;

	$css .= magazine_editor_inline_color_palette();

	wp_add_inline_style( genesis_get_theme_handle() . '-gutenberg-editor', $css );

}

/**
 * Generate CSS for editor font sizes from the provided theme support.
 *
 * @since 3.4.0
 *
 * @return string The CSS for editor font sizes if theme support was declared.
 */
function magazine_inline_font_sizes() {

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
 * Generate CSS for editor colors based on theme color palette support.
 *
 * @since 3.4.0
 *
 * @return string The editor colors CSS if `editor-color-palette` theme support was declared.
 */
function magazine_inline_color_palette() {

	$css                  = '';
	$appearance           = genesis_get_config( 'appearance' );
	$editor_color_palette = $appearance['editor-color-palette'];

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
 * @since 3.6.0
 *
 * @return string The editor colors CSS if `editor-color-palette` theme support was declared.
 */
function magazine_editor_inline_color_palette() {

	$css                   = '';
	$block_editor_settings = genesis_get_config( 'appearance' );
	$editor_color_palette  = $block_editor_settings['editor-color-palette'];

	foreach ( $editor_color_palette as $color_info ) {
		$css .= <<<CSS
		.has-{$color_info['slug']}-color {
			color: {$color_info['color']};
		}

		.has-{$color_info['slug']}-background-color {
			background-color: {$color_info['color']};
		}
CSS;
	}

	return $css;

}
