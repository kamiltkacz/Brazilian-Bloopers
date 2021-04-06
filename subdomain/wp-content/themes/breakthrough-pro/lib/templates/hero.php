<?php
/**
 * Breakthrough Pro
 *
 * This file handles the logic and templating for outputting the Hero Section on the Front Page in the Breakthrough Pro Theme.
 *
 * @package Breakthrough_Pro
 * @author  StudioPress
 * @license GPL-2.0+
 * @link    https://my.studiopress.com/themes/breakthrough
 */

// Sets up hero section content.
$breakthrough_title       = get_theme_mod( 'breakthrough_hero_title_text', breakthrough_get_default_hero_title_text() );
$breakthrough_button_text = get_theme_mod( 'breakthrough_hero_button_text', breakthrough_get_default_hero_button_text() );
$breakthrough_button_url  = get_theme_mod( 'breakthrough_hero_button_url', '#' );
$breakthrough_hero_image  = get_theme_mod( 'breakthrough_front_page_image_1', breakthrough_get_default_front_page_image_1() );
$breakthrough_hero        = get_theme_mod( 'breakthrough_show_hero_section', true );

if ( $breakthrough_hero ) {

	if ( $breakthrough_title || is_active_sidebar( 'hero-section' ) ) {

		// Opens the hero-section markup.
		genesis_markup(
			[
				'open'    => '<div %s><div class="wrap">',
				'context' => 'hero-section',
			]
		);

		if ( $breakthrough_title ) {
				echo '<h2 class="hero-title">' . $breakthrough_title . '</h2>'; // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped
		}

		if ( $breakthrough_button_text ) {
				echo '<a href="' . esc_url( $breakthrough_button_url ) . '" class="button button-hero">' . $breakthrough_button_text . '</a>'; // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped
		}

		$breakthrough_front_page_image_1 = get_theme_mod( 'breakthrough_front_page_image_1', breakthrough_get_default_front_page_image_1() );

		if ( $breakthrough_front_page_image_1 ) {
			$breakthrough_image_id  = attachment_url_to_postid( $breakthrough_front_page_image_1 );
			$breakthrough_image_alt = get_post_meta( $breakthrough_image_id, '_wp_attachment_image_alt', true );
			echo '<div class="full-width-image"><img src="' . esc_url( $breakthrough_front_page_image_1 ) . '" alt="' . esc_attr( $breakthrough_image_alt ) . '" /></div>';
		}

		// Closes the hero-section markup.
		genesis_markup(
			[
				'close'   => '</div></div>',
				'context' => 'hero-section',
			]
		);

	}
}
