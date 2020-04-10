<?php

/**
 * The plugin bootstrap file
 *
 * This file is read by WordPress to generate the plugin information in the plugin
 * admin area. This file also includes all of the dependencies used by the plugin,
 * registers the activation and deactivation functions, and defines a function
 * that starts the plugin.
 *
 * @link              bitski.de
 * @since             1.0.0
 * @package           Bitski_Wp_Utilities
 *
 * @wordpress-plugin
 * Plugin Name:       Bitski WP Utilities
 * Plugin URI:        bitski-wp-utilities-uri
 * Description:       This plugin provides some utility helper methods for WordPress, like mailers etc.
 * Version:           1.0.0
 * Author:            bitski
 * Author URI:        bitski.de
 * License:           GPL-2.0+
 * License URI:       http://www.gnu.org/licenses/gpl-2.0.txt
 * Text Domain:       bitski-wp-utilities
 * Domain Path:       /languages
 */

// If this file is called directly, abort.
if ( ! defined( 'WPINC' ) ) {
	die;
}

/**
 * Currently plugin version.
 * Start at version 1.0.0 and use SemVer - https://semver.org
 * Rename this for your plugin and update it as you release new versions.
 */
define( 'BITSKI_WP_UTILITIES_VERSION', '1.0.0' );

/**
 * The code that runs during plugin activation.
 * This action is documented in includes/class-bitski-wp-utilities-activator.php
 */
function activate_bitski_wp_utilities() {
	require_once plugin_dir_path( __FILE__ ) . 'includes/class-bitski-wp-utilities-activator.php';
	Bitski_Wp_Utilities_Activator::activate();
}

/**
 * The code that runs during plugin deactivation.
 * This action is documented in includes/class-bitski-wp-utilities-deactivator.php
 */
function deactivate_bitski_wp_utilities() {
	require_once plugin_dir_path( __FILE__ ) . 'includes/class-bitski-wp-utilities-deactivator.php';
	Bitski_Wp_Utilities_Deactivator::deactivate();
}

register_activation_hook( __FILE__, 'activate_bitski_wp_utilities' );
register_deactivation_hook( __FILE__, 'deactivate_bitski_wp_utilities' );

/**
 * The core plugin class that is used to define internationalization,
 * admin-specific hooks, and public-facing site hooks.
 */
require plugin_dir_path( __FILE__ ) . 'includes/class-bitski-wp-utilities.php';

/**
 * Begins execution of the plugin.
 *
 * Since everything within the plugin is registered via hooks,
 * then kicking off the plugin from this point in the file does
 * not affect the page life cycle.
 *
 * @since    1.0.0
 */
function run_bitski_wp_utilities() {

	$plugin = new Bitski_Wp_Utilities();
	$plugin->run();

}
run_bitski_wp_utilities();
