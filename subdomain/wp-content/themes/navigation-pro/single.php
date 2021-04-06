<?php
/**
 * Navigation Pro.
 *
 * This file adds the single post template to the Navigation Pro Theme.
 *
 * @package Navigation
 * @author  StudioPress
 * @license GPL-2.0-or-later
 * @link    https://my.studiopress.com/themes/navigation/
 */

// Adds entry meta in entry footer.
add_action( 'genesis_entry_footer', 'genesis_entry_footer_markup_open', 5 );
add_action( 'genesis_entry_footer', 'genesis_post_meta' );
add_action( 'genesis_entry_footer', 'genesis_entry_footer_markup_close', 15 );

// Runs the Genesis loop.
genesis();
