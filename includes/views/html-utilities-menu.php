<?php

defined( 'ABSPATH' ) || exit;

?>
<div class="wrap">

	<?php if ( ! current_user_can( 'manage_options' ) ):
		esc_attr_e( 'Sorry, you are not allowed to access this tab.', 'woocommerce-bookings' );
	else: ?>

        <h1>Bookings utilities</h1>

        <form method="post" action="options.php">

			<?php settings_fields( 'wc_bookings_utilities_settings_cart' ); ?>
			<?php do_settings_sections( 'wc-bookings-utilities-settings' ); ?>

			<?php submit_button(); ?>

        </form>


	<?php endif; ?>
</div>

