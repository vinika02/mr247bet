<?php 
/**
 * Basic setup functions for the plugin
 *
 * @since 	1.0
 * @function 	iaffpro_activate_plugin() 	Plugin activatation todo list
 * @function 	iaffpro_settings_link()		Print direct link to plugin settings in plugins list in admin
 * @function 	iaffpro_plugin_row_meta() 	Add donate and other links to plugins list
 */

// Exit if accessed directly
if ( ! defined('ABSPATH') ) exit;

/**
 * Plugin activatation todo list
 *
 * This function runs when user activates the plugin. Used in register_activation_hook in the main plugin file. 
 * @since 	1.0
 */
function iaffpro_activate_plugin() {
	// Nothing to do.
}

/**
 * Print direct link to plugin settings in plugins list in admin
 *
 * @since	1.0
 */
function iaffpro_settings_link( $links ) {
	
	return array_merge(
		array(
			'license' => '<a href="' . admin_url( 'options-general.php?page=image-attributes-pro-activation' ) . '">' . __( 'License Key', 'abl_iaff_td' ) . '</a>'
		),
		$links
	);
}
add_filter( 'plugin_action_links_' . IAFFPRO_AUTO_IMAGE_ATTRIBUTES_PRO . '/auto-image-attributes-pro.php', 'iaffpro_settings_link' );

/**
 * Add donate and other links to plugins list
 *
 * @since 	1.0
 */
function iaffpro_plugin_row_meta( $links, $file ) {
	
	if ( strpos( $file, 'auto-image-attributes-pro.php' ) !== false ) {
		
		$new_links = array(
				'support' 	=> '<a href="https://imageattributespro.com/docs/?utm_source=iap&utm_medium=plugins-list" target="_blank">Plugin Support</a>',
				);
		$links = array_merge( $links, $new_links );
	}
	
	return $links;
}
add_filter( 'plugin_row_meta', 'iaffpro_plugin_row_meta', 10, 2 );