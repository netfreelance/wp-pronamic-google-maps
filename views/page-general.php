<div id="pgm" class="wrap">
	<h2><?php echo esc_html( get_admin_page_title() ); ?></h2>

	<form action="options.php" method="post">
		<?php settings_fields( 'pronamic_google_maps' ); ?>

		<?php do_settings_sections( 'pronamic_google_maps' ); ?>

		<?php submit_button( __( 'Save Changes', 'pronamic-google-maps' ) ); ?>
	</form>
</div>
