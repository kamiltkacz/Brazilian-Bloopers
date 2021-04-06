/**
 * Trigger AJAX request to save state when the WooCommerce notice is dismissed.
 *
 * @version 2.3.0
 *
 * @package Revolution Pro\JS
 * @author  StudioPress
 * @license GPL-2.0-or-later
 * @link    https://my.studiopress.com/themes/revolution/
 */

jQuery( document ).on(
	'click', '.revolution-pro-woocommerce-notice .notice-dismiss', function() {

		jQuery.ajax(
			{
				url: ajaxurl,
				data: {
					action: 'revolution_dismiss_woocommerce_notice'
				}
			}
		);

	}
);
