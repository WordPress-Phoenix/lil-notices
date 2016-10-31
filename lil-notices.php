<?php
/**
 * Plugin Name: Lil Notices
 * Plugin URI: https://github.com/WordPress-Phoenix/lil-notices
 * Description: Take all the stacking admin notices plugins and themes use and move them into an admin menu dropdown.
 * Author: mlteal, adreaself, sethcarstens
 * Author URI: https://github.com/orgs/WordPress-Phoenix/teams/developers
 * Version: 1.0.5
 * License: GPLv2
 * Text Domain: liln
 *
 * GitHub Plugin URI: https://github.com/WordPress-Phoenix/lil-notices
 * GitHub Branch: master
 *
 * @package liln
 * @category plugin
 */

require_once( 'class-lil-notices.php' );

/**
 * Build and initialize the plugin
 */
if ( class_exists( 'Lil_Notices' ) ) {
	// Installation and un-installation hooks
	register_activation_hook( __FILE__, array( 'Lil_Notices', 'activate' ) );
	register_deactivation_hook( __FILE__, array( 'Lil_Notices', 'deactivate' ) );

	// initialize after all plugins are loaded
	add_action( 'plugins_loaded', array( 'Lil_Notices', 'init' ) );

	// must load action links before init, as init is too late for network plugin action links
	$plugin_name = plugin_basename( __FILE__ );
	add_filter( 'plugin_action_links_' . $plugin_name, array( 'Lil_Notices', 'plugin_action_links' ) );
	add_filter( 'network_admin_plugin_action_links_' . $plugin_name, array( 'Lil_Notices', 'plugin_action_links' ) );
}
