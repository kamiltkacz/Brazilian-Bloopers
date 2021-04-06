MAGAZINE PRO THEME
https://my.studiopress.com/themes/magazine/

INSTALL
1. Upload the Magazine Pro theme folder via FTP to your wp-content/themes/ directory. (The Genesis parent theme needs to be in the wp-content/themes/ directory as well.)
2. Go to your WordPress dashboard and select Appearance.
3. Activate the Magazine Pro theme.
4. Inside your WordPress dashboard, go to Genesis > Theme Settings and configure them to your liking. To set up the theme like the demo, please visit https://my.studiopress.com/documentation/magazine-pro-theme/.

WIDGET AREAS
Header Right - This is the widgeted area that appears after the title area section of the header.
Primary Sidebar - This is the primary sidebar if you are using the Content/Sidebar, Sidebar/Content, Content/Sidebar/Sidebar, Sidebar/Sidebar/Content or Sidebar/Content/Sidebar Site Layout option.
Secondary Sidebar - This is the secondary sidebar if you are using the Content/Sidebar/Sidebar, Sidebar/Sidebar/Content or Sidebar/Content/Sidebar Site Layout option.
After Entry - This is the after entry section.
Footer 1 - This is the first column of the footer section.
Footer 2 - This is the second column of the footer section.
Footer 3 - This is the third column of the footer section.

FEATURED IMAGES
By default WordPress will create a default thumbnail image for each image you upload and the size can be specified in your dashboard under Settings > Media. In addition, the Magazine Pro theme creates the following thumbnail images you'll see below, which are defined (and can be modified) in the functions.php file. These are the recommended thumbnail sizes that are used on the Magazine Pro theme demo site.

large-featured - 750px by 420px
medium-featured - 630px by 350px
sidebar-thumbnail - 100px by 100px
singular-wide - 1140 by 420px

LOCALIZATION
The Magazine Pro theme is translation ready. More information about the translation process can be found here: https://my.studiopress.com/documentation/getting-started/translations/translating-genesis-and-studiopress-themes/

SUPPORT
Please visit https://my.studiopress.com/help/ for theme support.

CHANGELOG

= 3.7.0 =

Magazine Pro 3.7.0 requires the Genesis Blocks plugin.

* Changed: Install Genesis Blocks in place of Atomic Blocks during one-click theme setup.
* Changed: Updated one-click-theme-setup content to use Genesis Blocks.
* Changed: Updated Editor and front-end styles for Genesis Blocks compatibility.

= 3.6.0 =

Magazine Pro 3.6.0 requires WordPress 5.4 or higher.

* Added: CSS styles for WordPress 5.4 Social Icons.
* Added: Editor styles to ensure theme colors work for inline text colors.
* Changed: Updated one-click theme setup content to include WordPress 5.4 button markup.
* Changed: Editor and front-end styles for WordPress 5.4 compatibility, including link color, buttons, headings, and lists.

= 3.5.1 =
* Fix a bug that could cause Atomic Blocks Post Grid content to render incorrectly if edited.

= 3.5.0 =
Magazine Pro 3.5.0 requires Genesis 3.1 or higher.

* Added: HTML5 supports for `scripts` and `styles` available in WordPress 5.3.
* Added: Support for `genesis-lazy-load-images` available in Genesis 3.2.
* Added: Set post meta on theme activation.
* Added: WordPress 5.3 alignment classes.
* Changed: Block width CSS for nested blocks.
* Changed: Separator and hr styles to allow for block color options.
* Changed: CSS for image, gallery, and gallery item figcaptions.
* Changed: Spacing between WooCommerce products.
* Changed: Use padding instead of margin on lists.
* Changed: CSS for tables for better consistency between editor and front end and to allow for new WordPress 5.3 settings.
* Changed: Allow footer widgets to be displayed on the landing page template.
* Changed: Set imported landing page meta to hide footer widgets. Requires Genesis 3.2 or higher.
* Removed: Squared button styles in favor of new button block border-radius setting.

= 3.4.0 =
* Added: Form and button styles for WPForms.
* Added: Featured image display options for singular posts and pages.
* Added: singular-wide image size for full width singular pages.
* Added: Block-based homepage layout.
* Added: Styles for Atomic Blocks.
* Added: One-click theme setup with starter pack options.
* Added: Create a WPForms form during one-click theme setup and insert a WPForms block on the sample contact page.
* Changed: Updated Screenshot to reflect one-click theme setup content.
* Changed: Moved default theme settings to /config/ folder.
* Changed: Updated PHP, CSS, and JavaScript to adhere to WordPress coding standards.
* Changed: Updated normalize.css to latest version.
* Changed: Use PHP short array syntax.
* Changed: Relocated the landing page template to the page-templates folder and renamed to landing.php.
* Changed: Allow breadcrumbs and layout settings to be used on the landing page template.
* Changed: Use new genesis_get_theme_handle() and genesis_get_theme_version() functions from Genesis 3.0.0 in place of declaring CHILD_THEME_NAME and CHILD_THEME_VERSION constants.
* Changed: Update image size default functions for WooCommerce 3.3+.
* Changed: Move theme supports to `config/theme-supports.php`.
* Changed: Replace custom-header with genesis-custom-logo.
* Changed: Remove matchHeight script and use CSS flex instead to match heights of WooCommerce product lists.
* Changed: Generate inline styles for the Block Editor from theme supports, reducing manual Block Editor CSS required. See lib/gutenberg/inline-styles.php.
* Changed: Use theme-primary and theme-secondary slugs for Block Editor color palette to prevent possible loss of styling when switching themes. We are now using this convention for new StudioPress theme releases and updates and encourage theme developers to do the same.
* Changed: Combined all Block Editor and theme appearance options into a single file at config/appearance.php.
* Changed: Image size names.
* Changed: CSS adjustments including button, blockquote, columns styling.
* Changed: Default link color.
* Changed: Rename `js/entry-date.js` script to `js/move-entry-dates.js`, refactor to remove jQuery dependency, target Atomic Blocks post grid blocks, and apply in the editor as well as the front-end.
* Removed: CSS rem units.
* Removed: XML file in favor of one-click theme setup.
* Removed: Support for `genesis-responsive-viewport` since it is included by default in Genesis 3.0+.
* Removed: Navigation extras filters since they are no longer necessary in Genesis 3.0+.
* Removed: `genesis_theme_settings_defaults` filter since it is no longer necessary in Genesis 3.0+.
* Removed: Front page widget areas (home-top, home-middle, home-bottom) and related CSS.
* Removed; front-page.php template file.
* Removed: Genesis Responsive Slider front page styles and theme setting defaults.
* Fixed: Prevent an issue where the WooCommerce shop page layout could be ignored and fall back to the site default layout on sites that use object caching.
* Fixed: WooCommerce button style consistency.
* Fixed: Ensure that general list styles do not apply to WooCommerce product blocks.

= 3.3.0 =
* Add support for Gutenberg editor styling and opt-in features.
* Improve color contrast for accessibility.
* Update placeholder text CSS.
* Style privacy cookie comment form checkbox.
* WooCommerce: prevent button hover color overriding footer widget buttons.
* WooCommerce: update list styling in product content and short descriptions.

= 3.2.4 =
* Fix product gallery bug in WooCommerce 3.0 update.
* Update responsive menu to 1.1.3.

= 3.2.3 =
* Fix landing page template header.
* Standardize mobile menu customizer colors.

= 3.2.2 =
* Fix error thrown when WooCommerce was inactive.

= 3.2.1 =
* Standards check.
* Update mobile menu submenu label.

= 3.2.0 =
* Move color selection to the customizer.
* Add accessibility.
* Add responsive menu.
* Add WooCommerce support.
* Update media queries.
* Update file structure.
* Update docs standards.
* Update text domain.
* Update logo size for retina devices.

= 3.1.2 =
* Update avatar sizing.
* Update Screenshot.
* Update eNews Widget styling.
* Remove deprecated theme tags.
* Update documentation.

= 3.1.1 =
* Remove obsolete comments filter.
* Remove IE8 CSS fix for images.
* Add hr tag styling.
* Add small and disabled button styles.
* Update menu names in admin.

= 3.1.0 =
* Add theme setting defaults.
* Update responsive menu.
* Use theme supports for after entry widget.
* HTML5 Galleries.

= 3.0.1 =
* Remove rem units.

= 3.0.0 =
* Version initial release.
