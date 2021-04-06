<?php
/**
 * Magazine Pro.
 *
 * Homepage content optionally installed after theme activation.
 *
 * @package Magazine Pro
 * @author  StudioPress
 * @license GPL-2.0-or-later
 * @link    https://www.studiopress.com/
 */

return <<<CONTENT
<!-- wp:genesis-blocks/gb-post-grid {"className":"button-more-link","postsToShow":1,"displaySectionTitle":true,"columns":1,"sectionTitle":"Featured","imageSize":"large-featured"} /-->

<!-- wp:genesis-blocks/gb-post-grid {"className":"button-more-link","postsToShow":2,"displaySectionTitle":true,"offset":3,"excerptLength":28,"sectionTitle":"Spotlight","imageSize":"medium-featured"} /-->

<!-- wp:genesis-blocks/gb-post-grid {"postsToShow":3,"displayPostDate":false,"displayPostAuthor":false,"displaySectionTitle":true,"postTitleTag":"h4","postLayout":"list","offset":5,"excerptLength":22,"sectionTitle":"Explore","sectionTitleTag":"h2","imageSize":"medium-featured"} /-->
CONTENT;
