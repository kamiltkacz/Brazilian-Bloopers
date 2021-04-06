<?php
/**
 * Revolution Pro.
 *
 * About page content optionally installed after theme activation.
 *
 * Visit `/wp-admin/admin.php?page=genesis-getting-started` to trigger import.
 *
 * @package Revolution Pro
 * @author  StudioPress
 * @license GPL-2.0-or-later
 * @link    https://my.studiopress.com/themes/revolution/
 */

// Photo by Fabrice Villard on Unsplash.
$revolution_about_image_url = CHILD_URL . '/config/import/images/about.jpg';

return <<<CONTENT
<!-- wp:image {"id":2141,"align":"full"} -->
<figure class="wp-block-image alignfull"><img src="$revolution_about_image_url" alt="" class="wp-image-2141"/></figure>
<!-- /wp:image -->

<!-- wp:genesis-blocks/gb-spacer {"spacerHeight":29} -->
<div style="color:#ddd" class="wp-block-genesis-blocks-gb-spacer gb-block-spacer gb-divider-solid gb-divider-size-1"><hr style="height:29px"/></div>
<!-- /wp:genesis-blocks/gb-spacer -->

<!-- wp:columns {"align":"full","className":"column-background"} -->
<div class="wp-block-columns alignfull has-2-columns column-background"><!-- wp:column -->
<div class="wp-block-column"><!-- wp:paragraph -->
<p>Hello! We are StudioPress and we have a passion for building beautiful WordPress themes. </p>
<!-- /wp:paragraph -->

<!-- wp:paragraph -->
<p>We build themes with an emphasis on typography, white space, and mobile-optimized design to make your website look absolutely breathtaking.</p>
<!-- /wp:paragraph --></div>
<!-- /wp:column -->

<!-- wp:column -->
<div class="wp-block-column"><!-- wp:heading {"align":"right"} -->
<h2 style="text-align:right">Contact Us</h2>
<!-- /wp:heading -->

<!-- wp:paragraph {"align":"right"} -->
<p style="text-align:right">555.555.5555</p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"align":"right"} -->
<p style="text-align:right">1234 Block Blvd.<br>San Francisco, CA 94120 </p>
<!-- /wp:paragraph --></div>
<!-- /wp:column --></div>
<!-- /wp:columns -->
CONTENT;
