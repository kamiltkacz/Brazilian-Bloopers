<?php
/**
 * Academy Pro
 *
 * This file handles the logic and templating for outputting the Hero Section on the Front Page in the Academy Pro Theme.
 *
 * @package Academy
 * @author  StudioPress
 * @license GPL-2.0-or-later
 * @link    https://my.studiopress.com/themes/academy/
 */

// Sets up hero section content.
$academy_title                 = get_theme_mod( 'academy-hero-title-text', academy_get_default_hero_title_text() );
$academy_description           = get_theme_mod( 'academy-hero-description-text', academy_get_default_hero_desc_text() );
$academy_button_primary_text   = get_theme_mod( 'academy-hero-button-primary-text', academy_get_default_hero_button_primary_text() );
$academy_button_primary_url    = get_theme_mod( 'academy-hero-button-primary-url' );
$academy_button_secondary_text = get_theme_mod( 'academy-hero-button-secondary-text', academy_get_default_hero_button_secondary_text() );
$academy_button_secondary_url  = get_theme_mod( 'academy-hero-button-secondary-url' );

// Sets up hero video section.
$academy_video_self_hosted = get_theme_mod( 'academy-hero-video-upload' );
$academy_video_hosted_url  = get_theme_mod( 'academy-hero-hosted-video' );
$academy_video_src_url     = wp_get_attachment_url( $academy_video_self_hosted );
$academy_video_thumb       = get_theme_mod( 'academy-hero-video-thumb', academy_get_default_video_thumbnail() );
$academy_video_thumb_id    = attachment_url_to_postid( $academy_video_thumb );
$academy_video_thumb_alt   = get_post_meta( $academy_video_thumb_id, '_wp_attachment_image_alt', true );

if ( $academy_video_hosted_url ) {
	$academy_video_src_url = $academy_video_hosted_url;
}

// Sets up logo section data.
$academy_logo_header    = get_theme_mod( 'academy-hero-logo-header', academy_get_default_hero_logo_header() );
$academy_logo_image_ids = get_theme_mod( 'academy-hero-logos-images', [] );

// Prepares logo data if images are set.
$academy_logos = [];
if ( array_filter( $academy_logo_image_ids ) ) {
	foreach ( $academy_logo_image_ids as $academy_id ) {
		$academy_logos[ $academy_id ]['src'] = wp_get_attachment_image_src( $academy_id, 'full' );
		$academy_logos[ $academy_id ]['alt'] = get_post_meta( $academy_id, '_wp_attachment_image_alt', true );
	}
}

// Column classes.
$academy_classes = [
	'columns' => '',
	'left'    => 'hero-section-column left',
	'right'   => 'hero-section-column right',
];

if ( $academy_video_src_url || $academy_video_thumb || $academy_video_hosted_url ) {
	$academy_classes['columns'] = 'has-columns';
	$academy_classes['left']   .= ' one-half first';
	$academy_classes['right']  .= ' one-half';
}

echo '<div class="wrap hero-section ' . esc_attr( $academy_classes['columns'] ) . '">';

if ( $academy_title || $academy_description || is_active_sidebar( 'hero-section' ) ) {

	echo '<div class="' . esc_attr( $academy_classes['left'] ) . '">';

	if ( $academy_title ) {
		echo '<h2 class="hero-title">' . $academy_title . '</h2>'; // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped
	}

	if ( $academy_description ) {
		echo '<p class="hero-description">' . $academy_description . '</p>'; // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped
	}

	if ( $academy_button_primary_text ) {
		echo '<a class="button primary" href="' . esc_html( $academy_button_primary_url ) . '">' . $academy_button_primary_text . '</a>'; // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped
	}

	if ( $academy_button_secondary_text ) {
		echo '<a class="button text" href="' . esc_html( $academy_button_secondary_url ) . '">' . $academy_button_secondary_text . '</a>'; // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped
	}

	echo '</div>';

}

if ( $academy_video_src_url ) {

	echo '<div class="' . esc_attr( $academy_classes['right'] ) . '">';
		echo '<div class="hero-video-container">';

		$academy_video_attr = [
			'src'     => $academy_video_src_url,
			'poster'  => $academy_video_thumb,
			'preload' => 'none',
		];

		echo wp_video_shortcode( $academy_video_attr ); // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped
		echo '</div>';

		echo '</div>';

} elseif ( $academy_video_thumb ) {

	echo '<div class="' . esc_attr( $academy_classes['right'] ) . '">';

		echo '<img class="hero-image" src="' . esc_url( $academy_video_thumb ) . '" alt="' . $academy_video_thumb_alt . '" />'; // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped

	echo '</div>';

}

if ( $academy_logos ) {

	echo '<div class="hero-section-logos wrap">';

	if ( $academy_logo_header ) {
		echo '<div class="hero-logos-header">' . $academy_logo_header . '</div>'; // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped
	}

	foreach ( $academy_logos as $academy_logo ) {

		$academy_logo_image = esc_url( $academy_logo['src'][0] );
		$academy_logo_alt   = esc_html( $academy_logo['alt'] );

		if ( $academy_logo_image ) {
			echo '<img class="hero-section-logo" src="' . $academy_logo_image . '" alt="' . $academy_logo_alt . '" />'; // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped
		}
	}

	echo '</div>';

}

echo '</div>';
