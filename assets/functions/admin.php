<?php

function bullets_custom_admin_footer() {
	_e('<div id="footer-thankyou">Developed by <a href="#" target="_blank">Your Site Name</a></div>.', 'bullets');
}

add_filter('admin_footer_text', 'bullets_custom_admin_footer');


// plugin require notices
add_action( 'admin_notices', 'theme_dependencies' );

function theme_dependencies() {
	if( ! function_exists('acf_update_setting') )
		echo '<div class="error"><p>' . __( 'Warning: This website requires the Advanced Custom Fields Pro plugin. Disabling this plugin <strong>will</strong> break the website.', 'my-theme' ) . '</p></div>';

	// if( ! function_exists('wpcf7') )
	// 	echo '<div class="error"><p>' . __( 'Warning: This website requires the Contact Form 7 plugin. Disabling this plugin <strong>will</strong> break the website.', 'my-theme' ) . '</p></div>';

	if (!class_exists('Wp_Kraken')) 
		echo '<div class="error"><p>' . __( 'Warning: This website requires the Kraken plugin. Disabling this plugin will prevent images from being optimised.', 'my-theme' ) . '</p></div>';

}