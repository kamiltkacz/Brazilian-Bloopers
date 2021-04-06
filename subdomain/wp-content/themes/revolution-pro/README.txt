Revolution Pro Theme
https://my.studiopress.com/themes/revolution/

INSTALL
1. Upload the Revolution Pro theme folder via FTP to your wp-content/themes/ directory. (The Genesis parent theme needs to be in the wp-content/themes/ directory as well.)
2. Go to your WordPress dashboard and select Appearance.
3. Activate the theme & use Genesis one-click theme setup to create your new homepage.
4. Inside your WordPress dashboard, go to Genesis > Theme Settings and configure them to your liking. For additional instructions, please visit https://my.studiopress.com/documentation/revolution-pro-theme/.

Visit Genesis > Child Theme Setup to restart the one-click theme setup, if desired.

WIDGET AREAS
Primary Sidebar - This is the primary sidebar if you are using the Content/Sidebar or Sidebar/Content Site Layout option.
Footer 1 - This is the footer 1 widget section.
Footer 2 - This is the footer 2 widget section.
After Entry - This is the after entry section.

LOCALIZATION
The Revolution Pro theme is translation ready.

SUPPORT
Please visit https://my.studiopress.com/help/ for theme support.

CHANGELOG

= 1.5.0 =

Revolution Pro 1.5.0 requires the Genesis Blocks plugin.

* Changed: Install Genesis Blocks in place of Atomic Blocks during one-click theme setup.
* Changed: Updated one-click-theme-setup content to use Genesis Blocks.
* Changed: Updated Editor and front-end styles for Genesis Blocks compatibility.

= 1.4.0 =

* Added: css class called rev-overlap to support negative margins on homepage AB container block, allowing it to overlap consistently.
* Added: New css for button(s) block to support the new buttons block in WP core.
* Added: New css for wp-block-social-links class to support new social icons block in WP core.
* Added: Editor styles to ensure theme colors work for inline text colors.
* Changed: Updated one-click theme setup content to include WordPress 5.4 button markup.
* Fixed: Full-width content alignment in IE11.

= 1.3.0 =

* Added: HTML5 supports for `scripts` and `styles` available in WordPress 5.3.
* Added: Support for `genesis-lazy-load-images` available in Genesis 3.2.
* Added: Set post meta on theme activation.
* Added: WordPress 5.3 alignment classes.
* Changed: Allow footer widgets to be displayed on the landing page template.
* Changed: Set imported landing page meta to hide footer widgets. Requires Genesis 3.2 or higher.
* Changed: Block width CSS for nested blocks.
* Changed: Separator and hr styles to allow for block color options.
* Changed: CSS for image, gallery, and gallery item figcaptions.
* Changed: CSS for tables for better consistency between editor and front end and to allow for new WordPress 5.3 settings.
* Changed: Update column block CSS for WordPress 5.3.
* Changed: Use padding instead of margin for lists.
* Removed: Squared button styles in favor of new button block border-radius setting.

= 1.2.0 =

* Added: Starter Pack feature to allow imported content choices.
* Added: Customizer Logo width validation and messaging.
* Added: Footer widget import with one-click theme setup.
* Added: Pricing page to one-click theme setup content import.
* Added: Featured image display options for singular posts and pages.
* Changed: Use PHP short array syntax.
* Changed: Content width used for homepage.
* Changed: Update one-click theme setup content page meta to accommodate new Genesis 3.1 features.
* Changed: Remove matchHeight script and use CSS flex instead to match heights of WooCommerce product lists.
* Changed: Use `genesis-custom-logo` functionality in place of `custom-logo`.
* Changed: Consolidate theme supports to `config/theme-supports.php`.
* Changed: Allow breadcrumbs and layouts to be used on the landing page template.
* Changed: Use new genesis_get_theme_handle() and genesis_get_theme_version() functions from Genesis 3.0.0 in place of declaring CHILD_THEME_HANDLE and CHILD_THEME_VERSION constants.
* Fixed: WooCommerce shop pages now use the selected page layout instead of the default site layout on sites using object caching.
* Fixed: Landing page template top margin by dequeuing sticky-header.js.
* Removed: Genesis nav extras filter and metabox removal. These are no longer present in Genesis 3.0.0.
* Removed: `child-theme-settings-genesis.php` file and filter. Genesis 3.0.0 no longer includes a settings admin page or `genesis_theme_settings_defaults` filter.
* Removed: `404-page` accessibility support, as this no longer has an effect.
* Removed: Block page template in favor of new Genesis per-page settings.
* Removed: Support for `genesis-responsive-viewport` since it is included by default in Genesis 3.0+.
* Removed: Navigation extras filters since they are no longer necessary in Genesis 3.0+.

= 1.1.3 =
* Changed: Update imported plugin information to include "Third Party" for relevant plugins.
* Changed: Update theme tags to include block-related tags.

= 1.1.2 =
* Changed: Correct class names for theme primary and secondary colors.

= 1.1.1 =
* Changed: Block editor color style slugs to allow for better theme interoperability.

= 1.1.0 =
Revolution Pro 1.1.0 requires Genesis 2.9 or higher.

* Import homepage variations and additional sample pages during One-Click Theme Setup.
* Set up menus during One-Click Theme Setup. Menu items will point to imported sample content.
* Remove import XML file. Sample pages can be imported when first activating the theme from the Appearance -> Themes area, or by visiting `/wp-admin/admin.php?page=genesis-getting-started` if the theme is already active.
* Install and activate dependent plugins HubSpot, Genesis eNews Extended, and Simple Social Icons (in addition to Atomic Blocks) during One-Click Theme Setup.
* Fix outline button styling.
* Make second menu appear below the first menu at mobile widths, instead of above it.
* Improvements to coding standards.

= 1.0.0 =
* Initial release.
