Authority Pro
https://my.studiopress.com/themes/authority/

INSTALL
1. Upload the Authority Pro theme folder via FTP to your wp-content/themes/ directory. (The Genesis parent theme needs to be in the wp-content/themes/ directory as well.)
2. Go to your WordPress dashboard and select Appearance.
3. Activate the Base theme.
4. Inside your WordPress dashboard, go to Genesis > Theme Settings and configure them to your liking. To set up the theme like the demo, please visit https://my.studiopress.com/documentation/authority-pro-theme/.

Visit example.com/wp-admin/admin.php?page=genesis-getting-started to restart the theme One-Click Theme Setup, if desired.

WIDGET AREAS
Primary Sidebar - This is the primary sidebar if you are using the Content/Sidebar or Sidebar/Content Site Layout option.
Footer - This is the footer section.
After Entry - This is the after entry section.

LOCALIZATION
The Authority Pro theme is translation ready.  More information about the translation process can be found at https://my.studiopress.com/documentation/getting-started/translations/translating-genesis-and-studiopress-themes/

SUPPORT
Please visit https://my.studiopress.com/help/ for theme support.

CHANGELOG

= 1.5.0 =

Authority Pro 1.5.0 requires the Genesis Blocks plugin.

* Changed: Install Genesis Blocks instead of Atomic Blocks during one-click theme setup.
* Changed: Updated one-click-theme-setup content to use Genesis Blocks.
* Changed: Updated Editor and front-end styles for Genesis Blocks compatibility.

= 1.4.1 =

* Added: WordPress 5.5 block editor theme support for `custom-line-height`.
* Added: WordPress 5.5 block editor theme support for `custom-units`.
* Added: WordPress 5.5 HTML5 theme support for `navigation-widgets`.
* Changed: Ensure height of solid and outlined buttons block-based buttons match.
* Changed: Ensure block width in the editor matches the front end.
* Removed: `genesis-lazy-load-images` theme support in favor of the WordPress 5.5 lazy loading feature.

= 1.4.0 = 

Authority Pro 1.4.0 requires WordPress 5.4 or higher.

* Added: CSS styles for WordPress 5.4 Social Icons.
* Added: Editor styles to ensure theme colors work for inline text colors.
* Changed: Updated one-click theme setup content to include WordPress 5.4 button markup.
* Changed: Editor styles for WordPress 5.4 compatibility, including link color, buttons, headings, and lists.
* Fixed: Atomic Blocks post grid editor link colors.

= 1.3.0 = 
Authority Pro 1.3.0 requires Genesis 3.1 or higher.

* Added: HTML5 supports for `scripts` and `styles` available in WordPress 5.3.
* Added: Support for `genesis-lazy-load-images` available in Genesis 3.2.
* Added: Set post meta on theme activation.
* Added: WordPress 5.3 alignment classes.
* Added: Create a WPForms form during one-click theme setup and insert a WPForms block on the sample contact page.
* Changed: Block width CSS for nested blocks.
* Changed: Separator and hr styles to allow for block color options.
* Changed: CSS for image, gallery, and gallery item figcaptions.
* Changed: Use PHP short array syntax.
* Changed: Move theme supports to `config/theme-supports.php`.
* Changed: Replace `custom-logo` with `genesis-custom-logo`.
* Changed: Use padding instead of margin on lists.
* Changed: Include `Blog - Featured Image` size in media image size dropdown.
* Changed: Update homepage import content to use `Blog - Featured Image` size for posts.
* Changed: CSS for tables for better consistency between editor and front end and to allow for new WordPress 5.3 settings.
* Removed: `genesis_post_info` filter in favor of customizer.
* Removed: Support for `genesis-responsive-viewport` since it is included by default in Genesis 3.0+.
* Removed: Navigation extras filters since they are no longer necessary in Genesis 3.0+.
* Removed: Genesis settings page filters since they are no longer necessary in Genesis 3.0+.
* Removed: `genesis_theme_settings_defaults` filter since it is no longer necessary in Genesis 3.0+.
* Removed: Squared button styles in favor of new button block border-radius setting.
* Fixed: CSS styles for core Media block.

= 1.2.0 =
Authority Pro 1.2.0 requires Genesis 2.9 or higher.

* Added: Switch from widget-based to block-based homepage with the same design.
* Added: Import homepage and additional sample pages during One-Click Theme Setup.
* Added: Import sample blog posts with featured image during One-Click Theme Setup if the site is new (WordPress `fresh_site` option is true).
* Added: Set up header menu during One-Click Theme Setup. Menu items will point to imported sample content.
* Added: Install and activate dependent plugins Atomic Blocks, WPForms Lite and Genesis eNews Extended during One-Click Theme Setup.
* Added: Use custom-logo instead of custom-header. The site logo can now be set at Appearance -> Customize -> Identity.
* Added: editor-style, block-styles and wide-blocks Block Editor tags to theme stylesheet header.
* Changed: Block editor color style slugs to allow for better theme interoperability.
* Changed: CSS adjustments and additions, including improved button block styling, changing wide block width to 1200px, and more.
* Changed: Updated PHP, CSS, and JavaScript to adhere to WordPress coding standards.
* Changed: Allow use of image alt entered in the media library on single featured images. Post title as an alt is no longer used.
* Changed: Change the number of related products displayed on WooCommerce single product pages to 3 instead of 4.
* Fixed: Prevent an issue where the WooCommerce shop page layout could be ignored and fall back to the site default layout on sites that use object caching.
* Removed: Import XML file. Sample pages can be imported when first activating the theme from the Appearance -> Themes area, or by visiting `/wp-admin/admin.php?page=genesis-getting-started` if the theme is already active.
* Removed: Front page widget areas and theme file. The theme now uses blocks on the homepage instead.
* Removed: unused JavaScript from widgeted front page.
* Removed: Pricing page template. The theme now uses Pricing Table blocks to build the pricing page.
* Removed: rem units from CSS.

= 1.1.0 =
* Add support for Gutenberg editor styling and opt-in features.
* Update placeholder text CSS.
* WooCommerce: update list styling in product content and short descriptions.
* Remove unused customize.js script.

= 1.0.5 =
* Update Hero input appearance for webkit browsers.
* Style comments checkbox.

= 1.0.4 =
* Standards improvements.
* Update image functions for WooCommerce 3.3+.
* Update shop page CSS for WooCommerce 3.3+.
* Update default hero section image and name.

= 1.0.3 =
* Fix grid displaying on tag archives when not enabled.
* Improve mobile menu button layout.

= 1.0.2 =
* Documentation updates.
* Improved link focus.
* Make button effects consistent in widgets on WooCommerce pages.
* Update customizer text for Top Banner.
* Standards improvements.
* Adjust logo position when cropped.
* Allow HTML in front page logo heading.

= 1.0.1 =
* Documentation updates.
* Widen front page widget sections when a full width static page is set.
* Remove unnecessary Cookie dependency from hero.js and front.js to ensure both files execute if the top banner is turned off and WooCommerce is not installed.

= 1.0.0 =
* Initial release.
