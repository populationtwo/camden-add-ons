<?php

/**
 * The plugin bootstrap file
 *
 * This file is read by WordPress to generate the plugin information in the plugin
 * admin area. This file also includes all of the dependencies used by the plugin,
 * registers the activation and deactivation functions, and defines a function
 * that starts the plugin.
 *
 * @link              http://population-2.com
 * @since             1.0.0
 * @package           Camden_Add_Ons
 *
 * @wordpress-plugin
 * Plugin Name:       Camden Add-ons
 * Plugin URI:        https://github.com/populationtwo/camden-add-ons
 * Description:       Camden Add-ons will create Custom Post Types and Shortcodes.
 * Version:           1.0.0
 * Author:            Population2
 * Author URI:        http://population-2.com
 * License:           GPL-2.0+
 * License URI:       http://www.gnu.org/licenses/gpl-2.0.txt
 * Text Domain:       camden-add-ons
 * Domain Path:       /languages
 */

// If this file is called directly, abort.
if ( ! defined( 'WPINC' ) ) {
	die;
}

/**
 * The code that runs during plugin activation.
 * This action is documented in includes/class-camden-add-ons-activator.php
 */
function activate_camden_add_ons() {
	require_once plugin_dir_path( __FILE__ ) . 'includes/class-camden-add-ons-activator.php';
	Camden_Add_Ons_Activator::activate();
}

/**
 * The code that runs during plugin deactivation.
 * This action is documented in includes/class-camden-add-ons-deactivator.php
 */
function deactivate_camden_add_ons() {
	require_once plugin_dir_path( __FILE__ ) . 'includes/class-camden-add-ons-deactivator.php';
	Camden_Add_Ons_Deactivator::deactivate();
}

register_activation_hook( __FILE__, 'activate_camden_add_ons' );
register_deactivation_hook( __FILE__, 'deactivate_camden_add_ons' );

/**
 * The core plugin class that is used to define internationalization,
 * admin-specific hooks, and public-facing site hooks.
 */
require plugin_dir_path( __FILE__ ) . 'includes/class-camden-add-ons.php';

/**
 * Begins execution of the plugin.
 *
 * Since everything within the plugin is registered via hooks,
 * then kicking off the plugin from this point in the file does
 * not affect the page life cycle.
 *
 * @since    1.0.0
 */
function run_camden_add_ons() {

	$plugin = new Camden_Add_Ons();
	$plugin->run();

}
run_camden_add_ons();
