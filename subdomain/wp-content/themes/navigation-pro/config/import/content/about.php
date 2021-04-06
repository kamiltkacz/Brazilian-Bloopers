<?php
/**
 * Navigation Pro about page.
 *
 * About page content optionally installed after theme activation.
 *
 * Visit `/wp-admin/admin.php?page=genesis-getting-started` to trigger import.
 *
 * @package Navigation
 * @author  StudioPress
 * @license GPL-2.0-or-later
 * @link    https://my.studiopress.com/themes/navigation/
 */

// Photo by Fabrice Villard on Unsplash.
$navigation_pro_about_image_url = CHILD_URL . '/config/import/images/travel/travel-background-3.jpg';

return <<<CONTENT
<!-- wp:image {"id":2141,"align":"center"} -->
<div class="wp-block-image"><figure class="aligncenter"><img src="$navigation_pro_about_image_url" alt="" class="wp-image-2141"/></figure></div>
<!-- /wp:image -->

<!-- wp:genesis-blocks/gb-spacer {"spacerHeight":29} -->
<div style="color:#ddd" class="wp-block-genesis-blocks-gb-spacer gb-block-spacer gb-divider-solid gb-divider-size-1"><hr style="height:29px"/></div>
<!-- /wp:genesis-blocks/gb-spacer -->

<!-- wp:columns -->
<div class="wp-block-columns has-2-columns"><!-- wp:column -->
<div class="wp-block-column"><!-- wp:heading {"level":1} -->
<h1>About Us</h1>
<!-- /wp:heading -->

<!-- wp:paragraph -->
<p>Hello! We are StudioPress, and we build themes with an emphasis on typography, white space, and mobile-optimized design to make your website look absolutely breathtaking.  </p>
<!-- /wp:paragraph --></div>
<!-- /wp:column -->

<!-- wp:column -->
<div class="wp-block-column"><!-- wp:genesis-blocks/gb-spacer {"spacerHeight":50} -->
<div style="color:#ddd" class="wp-block-genesis-blocks-gb-spacer gb-block-spacer gb-divider-solid gb-divider-size-1"><hr style="height:50px"/></div>
<!-- /wp:genesis-blocks/gb-spacer -->

<!-- wp:paragraph {"align":"right"} -->
<p style="text-align:right"> 555.555.5555</p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"align":"right"} -->
<p style="text-align:right">
1234 Block Blvd.<br>San Francisco, CA 94120

</p>
<!-- /wp:paragraph --></div>
<!-- /wp:column --></div>
<!-- /wp:columns -->
CONTENT;
