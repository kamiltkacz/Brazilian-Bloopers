/**
 * This script adds notice dismissal to the Navigation Pro theme.
 *
 * @package Navigation\JS
 * @author StudioPress
 * @license GPL-2.0-or-later
 */

jQuery( document ).on( 'click', '.navigation-woocommerce-notice .notice-dismiss', function() {

	jQuery.ajax({
		url: ajaxurl,
		data: {
			action: 'navigation_dismiss_woocommerce_notice'
		}
	});

});
