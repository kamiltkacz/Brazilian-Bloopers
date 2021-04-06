<?php
/**
 * Monochrome Pro post sample.
 *
 * Sample post content optionally installed after theme activation.
 *
 * Visit `/wp-admin/admin.php?page=genesis-getting-started` to trigger import.
 *
 * Posts are only imported for new sites (where `fresh_site` meta is true).
 *
 * @package Monochrome
 * @author  StudioPress
 * @license GPL-2.0-or-later
 * @link    https://my.studiopress.com/themes/monochrome/
 */

return <<<CONTENT
<!-- wp:paragraph -->
<p>This is a sample intro paragraph and can be used to introduce readers to your article.</p>
<!-- /wp:paragraph -->

<!-- wp:paragraph -->
<p>This is an example of a WordPress post, you could edit this to put information about yourself so readers know where you are coming from. You can create as many posts as you like in order to share with them what is on your mind.</p>
<!-- /wp:paragraph -->

<!-- wp:more {"customText":"Continue Reading"} -->
<!--more Continue Reading-->
<!-- /wp:more -->

<!-- wp:paragraph -->
<p>This is an example of a WordPress post, you could edit this to put information about yourself so readers know where you are coming from. You can create as many posts as you like in order to share with them what is on your mind. This is an example of a WordPress post, you could edit this to put information about yourself so readers know where you are coming from. You can create as many posts as you like in order to share with them what is on your mind.</p>
<!-- /wp:paragraph -->

<!-- wp:heading {"level":2} -->
<h2>This is a Sample Heading</h2>
<!-- /wp:heading -->

<!-- wp:paragraph -->
<p>This is an example of a WordPress post, you could edit this to put information about yourself so readers know where you are coming from. You can create as many posts as you like in order to share with them what is on your mind.</p>
<!-- /wp:paragraph -->

<!-- wp:paragraph -->
<p>This is an example of a WordPress post, you could edit this to put information about yourself so readers know where you are coming from. You can create as many posts as you like in order to share with them what is on your mind. This is an example of a WordPress post, you could edit this to put information about yourself so readers know where you are coming from. You can create as many posts as you like in order to share with them what is on your mind.</p>
<!-- /wp:paragraph -->
CONTENT;
