MONOCHROME PRO
https://my.studiopress.com/themes/monochrome/

INSTALL
1. Upload the Monochrome Pro theme folder via FTP to your wp-content/themes/ directory. (The Genesis parent theme needs to be in the wp-content/themes/ directory as well.)
2. Go to your WordPress dashboard and select Appearance.
3. Activate the Monochrome theme.
4. Inside your WordPress dashboard, go to Genesis > Theme Settings and configure them to your liking. To set up the theme like the demo, please visit https://my.studiopress.com/documentation/monochrome-pro-theme/.

Visit example.com/wp-admin/admin.php?page=genesis-getting-started to restart the theme One-Click Theme Setup, if desired.

WIDGET AREAS
Primary Sidebar - This is the primary sidebar if you are using the Content/Sidebar or Sidebar/Content Site Layout option.
Before Footer CTA - This is the Before Footer CTA section.
After Entry - This is the after entry section.

ICON FONTS
The icons used in the Monochrome Pro theme are free of copyright and courtesy of https://ionicons.com/.

LOCALIZATION
The Monochrome Pro theme is translation ready. More information about the translation process can be found at https://my.studiopress.com/documentation/getting-started/translations/translating-genesis-and-studiopress-themes/

SUPPORT
Please visit https://my.studiopress.com/help/ for theme support.

CHANGELOG

= 1.6.0 =

Monochrome Pro 1.6.0 requires the Genesis Blocks plugin.

* Changed: Install Genesis Blocks instead of Atomic Blocks during one-click theme setup.
* Changed: Updated one-click-theme-setup content to use Genesis Blocks.
* Changed: Updated Editor and front-end styles for Genesis Blocks compatibility.

= 1.5.1 =

* Added: WordPress 5.5 block editor theme support for `custom-line-height`.
* Added: WordPress 5.5 block editor theme support for `custom-units`.
* Added: WordPress 5.5 HTML5 theme support for `navigation-widgets`.
* Changed: Ensure front end paragraph margin matches the editor.
* Changed: Ensure block width in the editor matches the front end.
* Changed: Ensure height of solid and outlined buttons block-based buttons match.
* Removed: `genesis-lazy-load-images` theme support in favor of the WordPress 5.5 lazy loading feature.

= 1.5.0 =

Monochrome Pro 1.5.0 requires WordPress 5.4 or higher.

* Added: CSS styles for WordPress 5.4 Social Icons.
* Added: Editor styles to ensure theme colors work for inline text colors.
* Changed: Updated one-click theme setup content to include WordPress 5.4 button markup.
* Changed: Editor and front-end styles for WordPress 5.4 compatibility, including link color, buttons, headings, and lists.

= 1.4.0 =
* Added: HTML5 supports for `scripts` and `styles` available in WordPress 5.3.
* Added: Support for `genesis-lazy-load-images` available in Genesis 3.2.
* Added: Set post meta on theme activation.
* Added: WordPress 5.3 alignment classes.
* Changed: Simplified `genesis_sample_secondary_menu_args` function.
* Changed: Block width CSS for nested blocks.
* Changed: Separator and hr styles to allow for block color options.
* Changed: CSS for image, gallery, and gallery item figcaptions.
* Changed: CSS for tables for better consistency between editor and front end and to allow for new WordPress 5.3 settings.
* Removed: Squared button styles in favor of new button block border-radius setting.

= 1.3.0 =
Monochrome Pro 1.3.0 requires Genesis 3.1 or higher.

* Added: Starter Packs to one-click theme setup options.
* Added: Create a WPForms form during one-click theme setup and insert a WPForms block on the sample contact page.
* Changed: Updated Screenshot to reflect one-click theme setup content.
* Changed: Replace custom-header with genesis-custom-logo.
* Changed: Use new genesis_get_theme_handle() and genesis_get_theme_version() functions from Genesis 3.0.0 in place of declaring CHILD_THEME_NAME and CHILD_THEME_VERSION constants.
* Changed: Use PHP short array syntax.
* Changed: Consolidate theme supports to config/theme-supports.php.
* Changed: Remove matchHeight script and use CSS flex to match heights of WooCommerce product lists.
* Changed: Allow breadcrumbs and layout settings to be used on the landing page template.
* Fixed: WooCommerce button style consistency.
* Fixed: Ensure that general list styles do not apply to WooCommerce product blocks.
* Removed: Navigation extras filters since they are no longer necessary in Genesis 3.0+.
* Removed: Genesis settings page filters since they are no longer necessary in Genesis 3.0+.
* Removed: `genesis_theme_settings_defaults` filter since it is no longer necessary in Genesis 3.0+.
* Removed: Support for `genesis-responsive-viewport` since it is included by default in Genesis 3.0+.
* Removed: CSS rem units from WooCommerce styles.
* Removed: `format` attribute from post_date shortcode.

= 1.2.0 =
Monochrome Pro 1.2.0 requires Genesis 2.9 or higher.

* Added: Switch from widget-based to block-based homepage with the same design.
* Added: Import homepage and additional sample pages during One-Click Theme Setup.
* Added: Import sample blog posts with featured image during One-Click Theme Setup if the site is new (WordPress `fresh_site` option is true).
* Added: Set up menus during One-Click Theme Setup. Menu items will point to imported sample content.
* Added: Install and activate dependent plugins WPForms Lite, Genesis eNews Extended, and Simple Social Icons (in addition to Atomic Blocks) during One-Click Theme Setup.
* Added: Use custom-logo instead of custom-header. The site logo can now be set at Appearance -> Customize -> Identity.
* Added: Ability to add a footer logo from the Customizer. Find the setting at Appearance -> Customize -> Identity.
* Changed: Make breadcrumbs more legible on light featured images.
* Changed: Block editor color style slugs to allow for better theme interoperability.
* Changed: Improvements to JavaScript that controls fading in of homepage elements. (New file at `js/block-effects.js`.)
* Changed: CSS adjustments and additions, including improved button block styling, changing wide block width to 1200px, fixing the comment form cookie checkbox positioning, and more.
* Changed: Update theme tags to include block-related tags.
* Changed: Set WooCommerce image sizes using new properties.
* Changed: Updated Ionicons to latest version.
* Changed: Updated normalize.css to latest version.
* Changed: Updated PHP, CSS, and JavaScript to adhere to WordPress coding standards.
* Fixed: Prevent an issue where the WooCommerce shop page layout could be ignored and fall back to the site default layout on sites that use object caching.
* Removed: Import XML file. Sample pages can be imported when first activating the theme from the Appearance -> Themes area, or by visiting `/wp-admin/admin.php?page=genesis-getting-started` if the theme is already active.
* Removed: Backstretch JavaScript was replaced by CSS for featured images.
* Removed: JavaScript that controls smooth scrolling. This was not being used by the theme or present in the theme demo.
* Removed: Front page widget areas. The theme now uses blocks on the homepage instead.

= 1.1.0 =
* PHP 7.1 compatibility.
* Add support for Gutenberg editor styling and opt-in features.
* Update placeholder text CSS.
* WooCommerce: update list styling in product content and short descriptions.
* Hide menu search field when it loses focus via tab or escape keypresses, or clicking outside the search input.

= 1.0.1 =
* Update responsive menu to 1.1.3.
* Reduce mobile front page widget title font size.
* Update widget padding on mobile views.
* Update CSS for Custom HTML widget.

= 1.0.0 =
* Initial release.
