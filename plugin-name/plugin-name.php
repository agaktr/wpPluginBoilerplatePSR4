<?php

/**
 * The plugin bootstrap file
 *
 * This file is read by WordPress to generate the plugin information in the plugin
 * admin area. This file also Includes all of the dependencies used by the plugin,
 * registers the activation and deactivation functions, and defines a function
 * that starts the plugin.
 *
 * @link              http://example.com
 * @since             1.0.0
 * @package           Plugin_Name
 *
 * @wordpress-plugin
 * Plugin Name:       WordPress Plugin Boilerplate
 * Plugin URI:        http://example.com/plugin-name-uri/
 * Description:       This is a short description of what the plugin does. It's displayed in the WordPress admin area.
 * Version:           1.0.0
 * Author:            Your Name or Your Company
 * Author URI:        http://example.com/
 * License:           GPL-2.0+
 * License URI:       http://www.gnu.org/licenses/gpl-2.0.txt
 * Text Domain:       plugin-name
 * Domain Path:       /translations
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
define( 'PLUGIN_NAME_VERSION', '1.0.0' );

use PluginNameIncludes\PluginNameActivator;
use PluginNameIncludes\PluginNameDeactivator;
use PluginNameIncludes\PluginName;

/**
 * Load composer autoload.
 * This is the base of the PSR-4 model of PHP coding
 * Check the PSR-4 standerd here - https://www.php-fig.org/psr/psr-4/
 */
require_once plugin_dir_path( __FILE__ ) . 'vendor/autoload.php';

/**
 * The code that runs during plugin activation.
 * This action is documented in src/Includes/PluginNameActivator.php
 */
function activatePluginName() {

	PluginNameActivator::activate();
}

/**
 * The code that runs during plugin deactivation.
 * This action is documented in src/Includes/PluginNameDeactivator.php
 */
function deactivatePluginName() {

	PluginNameDeactivator::deactivate();
}

/**
 * Register activation and deactivation hooks.
 */
register_activation_hook( __FILE__, 'activatePluginName' );
register_deactivation_hook( __FILE__, 'deactivatePluginName' );

/**
 * Begins execution of the plugin.
 *
 * The core plugin class that is used to define internationalization,
 * admin-specific hooks, and public-facing site hooks.
 *
 * Since everything within the plugin is registered via hooks,
 * then kicking off the plugin from this point in the file does
 * not affect the page life cycle.
 *
 * @since    1.0.0
 */
function runPluginName() {

	$plugin = new PluginName();
	$plugin->run();
}
runPluginName();
