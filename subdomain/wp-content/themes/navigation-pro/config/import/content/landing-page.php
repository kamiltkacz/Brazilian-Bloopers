<?php
/**
 * Navigation Pro landing page.
 *
 * Landing page content optionally installed after theme activation.
 *
 * Visit `/wp-admin/admin.php?page=genesis-getting-started` to trigger import.
 *
 * @package Navigation
 * @author  StudioPress
 * @license GPL-2.0-or-later
 * @link    https://my.studiopress.com/themes/navigation/
 */

// Photo by Felipe Dolce on Unsplash.
$navigation_pro_landing_image_url = CHILD_URL . '/config/import/images/travel/maine-shore-haunts.jpg';

return <<<CONTENT
<!-- wp:image {"align":"full","id":2129,"sizeSlug":"large"} -->
<figure class="wp-block-image alignfull size-large"><img src="$navigation_pro_landing_image_url" alt="" class="wp-image-2129"/></figure>
<!-- /wp:image -->

<!-- wp:paragraph -->
<p>This is an example of a WordPress post, you could edit this to put information about yourself so readers know where you are coming from. You can create as many posts as you like in order to share with them what is on your mind.</p>
<!-- /wp:paragraph -->

<!-- wp:quote {"className":"is-style-quote-underlay"} -->
<blockquote class="wp-block-quote is-style-quote-underlay"><p>I would really rather feel bad in Maine than feel good anywhere else.<br></p><cite>— EB White</cite></blockquote>
<!-- /wp:quote -->

<!-- wp:paragraph -->
<p>This is an example of a WordPress post, you could edit this to put information about yourself so readers know where you are coming from. You can create as many posts as you like in order to share with them what is on your mind.</p>
<!-- /wp:paragraph -->

<!-- wp:heading -->
<h2>This is a Sample Heading</h2>
<!-- /wp:heading -->

<!-- wp:paragraph -->
<p>This is an example of a WordPress post, you could edit this to put information about yourself so readers know where you are coming from. You can create as many posts as you like in order to share with them what is on your mind.</p>
<!-- /wp:paragraph -->

<!-- wp:paragraph -->
<p>Here’s a sample paragraph with a custom background color:</p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"customBackgroundColor":"#eee9e3"} -->
<p style="background-color:#eee9e3" class="has-background">This is an example of a WordPress post, you could edit this to put information about yourself so readers know where you are coming from. You can create as many posts as you like in order to share with them what is on your mind.</p>
<!-- /wp:paragraph -->

<!-- wp:paragraph -->
<p>This is an example of a WordPress post, you could edit this to put information about yourself so readers know where you are coming from. You can create as many posts as you like in order to share with them what is on your mind. This is an example of a WordPress post, you could edit this to put information about yourself so readers know where you are coming from. You can create as many posts as you like in order to share with them what is on your mind.</p>
<!-- /wp:paragraph -->
CONTENT;
