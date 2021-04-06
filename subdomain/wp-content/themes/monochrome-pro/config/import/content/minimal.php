<?php
/**
 * Monochrome Pro homepage.
 *
 * Homepage content optionally installed after theme activation.
 *
 * Visit `/wp-admin/admin.php?page=genesis-getting-started` to trigger import.
 *
 * @package Monochrome
 * @author  StudioPress
 * @license GPL-2.0-or-later
 * @link    https://my.studiopress.com/themes/monochrome/
 */

// Images by Joel Filipe on Unsplash: https://unsplash.com/photos/TmSYx44Y0QY and https://unsplash.com/photos/_Di_gyxSdSk.
$monochrome_homepage_background1 = CHILD_URL . '/config/import/images/minimal/minimal-background-1.jpg';
$monochrome_homepage_background2 = CHILD_URL . '/config/import/images/minimal/minimal-background-2.jpg';

// Placeholder logos.
$monochrome_homepage_logos = [
	1 => CHILD_URL . '/config/import/images/logos/les-avenirs.png',
	2 => CHILD_URL . '/config/import/images/logos/avec-simple.png',
	3 => CHILD_URL . '/config/import/images/logos/whitespace.png',
	4 => CHILD_URL . '/config/import/images/logos/minimalism.png',
	5 => CHILD_URL . '/config/import/images/logos/barcelona-33.png',
	6 => CHILD_URL . '/config/import/images/logos/smooth-vanilla.png',
];

return <<<CONTENT
<!-- wp:genesis-blocks/gb-container {"containerPaddingTop":30,"containerPaddingRight":8,"containerPaddingBottom":30,"containerPaddingLeft":8,"containerWidth":"full","containerMaxWidth":1200,"containerBackgroundColor":"#000000","containerImgID":907,"containerDimRatio":20,"className":"narrow-content light-text"} -->
<div style="background-color:#000000;padding-left:8%;padding-right:8%;padding-bottom:30%;padding-top:30%" class="wp-block-genesis-blocks-gb-container narrow-content light-text gb-block-container alignfull"><div class="gb-container-inside"><div class="gb-container-image-wrap"><img class="gb-container-image has-background-dim-20 has-background-dim" src="$monochrome_homepage_background1" alt=""/></div><div class="gb-container-content" style="max-width:1200px"><!-- wp:heading {"level":1,"align":"left","className":"bold-heading-text fade-in-up"} -->
<h1 style="text-align:left" class="bold-heading-text fade-in-up">We crush minimal design.</h1>
<!-- /wp:heading -->

<!-- wp:paragraph {"customTextColor":"#ffffff","fontSize":"small","className":"fade-in-up"} -->
<p style="color:#ffffff" class="has-text-color has-small-font-size fade-in-up"><strong>Monochrome</strong> is a creative agency based in Chicago. We developed the Genesis Framework and build mobile-optimized themes for WordPress.</p>
<!-- /wp:paragraph --></div></div></div>
<!-- /wp:genesis-blocks/gb-container -->

<!-- wp:genesis-blocks/gb-container {"containerPaddingTop":10,"containerPaddingRight":8,"containerPaddingBottom":10,"containerPaddingLeft":8,"containerWidth":"full","containerMaxWidth":1200} -->
<div style="padding-left:8%;padding-right:8%;padding-bottom:10%;padding-top:10%" class="wp-block-genesis-blocks-gb-container gb-block-container alignfull"><div class="gb-container-inside"><div class="gb-container-content" style="max-width:1200px"><!-- wp:heading {"className":"bold-text fade-in-up"} -->
<h2 class="bold-text fade-in-up">We build experience.</h2>
<!-- /wp:heading -->

<!-- wp:paragraph {"className":"fade-in-up"} -->
<p class="fade-in-up">A minimalist approach is the only way to design a website.</p>
<!-- /wp:paragraph -->

<!-- wp:separator {"className":"is-style-default fade-in-up"} -->
<hr class="wp-block-separator is-style-default fade-in-up"/>
<!-- /wp:separator -->

<!-- wp:columns {"columns":3,"className":"fade-in-up"} -->
<div class="wp-block-columns has-3-columns fade-in-up"><!-- wp:column -->
<div class="wp-block-column"><!-- wp:heading {"level":3} -->
<h3>Design</h3>
<!-- /wp:heading -->

<!-- wp:paragraph {"customFontSize":16} -->
<p style="font-size:16px">With an emphasis on typography, white space, and mobile-optimized design, your website will look absolutely breathtaking.</p>
<!-- /wp:paragraph -->

<!-- wp:buttons {"align":"left"} -->
<div class="wp-block-buttons alignleft"><!-- wp:button {"customBackgroundColor":"#000000"} -->
<div class="wp-block-button"><a class="wp-block-button__link has-background" href="#" style="background-color:#000000">Learn More</a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons --></div>
<!-- /wp:column -->

<!-- wp:column -->
<div class="wp-block-column"><!-- wp:heading {"level":3} -->
<h3>Content</h3>
<!-- /wp:heading -->

<!-- wp:paragraph {"customFontSize":16} -->
<p style="font-size:16px">Our team will teach you the art of writing audience-focused content that will help you achieve the success you truly deserve.</p>
<!-- /wp:paragraph -->

<!-- wp:buttons {"align":"left"} -->
<div class="wp-block-buttons alignleft"><!-- wp:button {"customBackgroundColor":"#000000"} -->
<div class="wp-block-button"><a class="wp-block-button__link has-background" href="#" style="background-color:#000000">Learn More</a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons --></div>
<!-- /wp:column -->

<!-- wp:column -->
<div class="wp-block-column"><!-- wp:heading {"level":3} -->
<h3>Strategy</h3>
<!-- /wp:heading -->

<!-- wp:paragraph {"customFontSize":16} -->
<p style="font-size:16px">We help creative entrepreneurs build their digital business by focusing on three key elements of a successful online platform.</p>
<!-- /wp:paragraph -->

<!-- wp:buttons {"align":"left"} -->
<div class="wp-block-buttons alignleft"><!-- wp:button {"customBackgroundColor":"#000000"} -->
<div class="wp-block-button"><a class="wp-block-button__link has-background" href="#" style="background-color:#000000">Learn More</a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons --></div>
<!-- /wp:column --></div>
<!-- /wp:columns --></div></div></div>
<!-- /wp:genesis-blocks/gb-container -->

<!-- wp:genesis-blocks/gb-container {"containerPaddingTop":15,"containerPaddingRight":8,"containerPaddingBottom":15,"containerPaddingLeft":8,"containerWidth":"full","containerMaxWidth":1200,"containerBackgroundColor":"#000000","containerImgID":910,"containerDimRatio":20,"className":"light-text"} -->
<div style="background-color:#000000;padding-left:8%;padding-right:8%;padding-bottom:15%;padding-top:15%" class="wp-block-genesis-blocks-gb-container light-text gb-block-container alignfull"><div class="gb-container-inside"><div class="gb-container-image-wrap"><img class="gb-container-image has-background-dim-20 has-background-dim" src="$monochrome_homepage_background2" alt=""/></div><div class="gb-container-content" style="max-width:1200px"><!-- wp:heading {"align":"left","className":"bold-text fade-in-up"} -->
<h2 style="text-align:left" class="bold-text fade-in-up">We design brands.</h2>
<!-- /wp:heading -->

<!-- wp:paragraph {"customTextColor":"#ffffff","className":"fade-in-up"} -->
<p style="color:#ffffff" class="has-text-color fade-in-up">A simple look is all you need to crush your competition.</p>
<!-- /wp:paragraph -->

<!-- wp:separator {"customColor":"#ffffff","className":"is-style-default fade-in-up"} -->
<hr class="wp-block-separator has-text-color has-background is-style-default fade-in-up" style="background-color:#ffffff;color:#ffffff"/>
<!-- /wp:separator -->

<!-- wp:columns {"className":"fade-in-up brand-logos"} -->
<div class="wp-block-columns fade-in-up brand-logos"><!-- wp:column -->
<div class="wp-block-column"><!-- wp:image {"id":3272,"sizeSlug":"large"} -->
<figure class="wp-block-image size-large"><img src="{$monochrome_homepage_logos[1]}" alt="" class="wp-image-3272"/></figure>
<!-- /wp:image --></div>
<!-- /wp:column -->

<!-- wp:column -->
<div class="wp-block-column"><!-- wp:image {"id":3273,"sizeSlug":"large"} -->
<figure class="wp-block-image size-large"><img src="{$monochrome_homepage_logos[2]}" alt="" class="wp-image-3273"/></figure>
<!-- /wp:image --></div>
<!-- /wp:column -->

<!-- wp:column -->
<div class="wp-block-column"><!-- wp:image {"id":3274,"sizeSlug":"large"} -->
<figure class="wp-block-image size-large"><img src="{$monochrome_homepage_logos[3]}" alt="" class="wp-image-3274"/></figure>
<!-- /wp:image --></div>
<!-- /wp:column -->

<!-- wp:column -->
<div class="wp-block-column"><!-- wp:image {"id":3275,"sizeSlug":"large"} -->
<figure class="wp-block-image size-large"><img src="{$monochrome_homepage_logos[4]}" alt="" class="wp-image-3275"/></figure>
<!-- /wp:image --></div>
<!-- /wp:column -->

<!-- wp:column -->
<div class="wp-block-column"><!-- wp:image {"id":3276,"sizeSlug":"large"} -->
<figure class="wp-block-image size-large"><img src="{$monochrome_homepage_logos[5]}" alt="" class="wp-image-3276"/></figure>
<!-- /wp:image --></div>
<!-- /wp:column -->

<!-- wp:column -->
<div class="wp-block-column"><!-- wp:image {"id":3277,"sizeSlug":"large"} -->
<figure class="wp-block-image size-large"><img src="{$monochrome_homepage_logos[6]}" alt="" class="wp-image-3277"/></figure>
<!-- /wp:image --></div>
<!-- /wp:column --></div>
<!-- /wp:columns --></div></div></div>
<!-- /wp:genesis-blocks/gb-container -->

<!-- wp:genesis-blocks/gb-container {"containerPaddingTop":10,"containerPaddingRight":8,"containerPaddingBottom":2,"containerPaddingLeft":8,"containerWidth":"full","containerMaxWidth":1200} -->
<div style="padding-left:8%;padding-right:8%;padding-bottom:2%;padding-top:10%" class="wp-block-genesis-blocks-gb-container gb-block-container alignfull"><div class="gb-container-inside"><div class="gb-container-content" style="max-width:1200px"><!-- wp:heading {"className":"bold-text fade-in-up"} -->
<h2 class="bold-text fade-in-up">We create stories.</h2>
<!-- /wp:heading -->

<!-- wp:paragraph {"className":"fade-in-up"} -->
<p class="fade-in-up">A killer narrative will turn your readers into raving fans.</p>
<!-- /wp:paragraph -->

<!-- wp:separator {"className":"fade-in-up"} -->
<hr class="wp-block-separator fade-in-up"/>
<!-- /wp:separator -->

<!-- wp:genesis-blocks/gb-spacer -->
<div style="color:#ddd" class="wp-block-genesis-blocks-gb-spacer gb-block-spacer gb-divider-solid gb-divider-size-1"><hr style="height:30px"/></div>
<!-- /wp:genesis-blocks/gb-spacer -->

<!-- wp:genesis-blocks/gb-post-grid {"className":"fade-in-up","postsToShow":4,"displayPostExcerpt":false,"displayPostLink":false,"imageSize":"featured-blog"} /--></div></div></div>
<!-- /wp:genesis-blocks/gb-container -->
CONTENT;
