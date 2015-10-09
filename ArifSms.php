<?php
/**
 * The plugin bootstrap file
 *
 * This file is read by WordPress to generate the plugin information in the plugin
 * admin area. This file also includes all of the dependencies used by the plugin,
 * registers the activation and deactivation functions, and defines a function
 * that starts the plugin.
 *
 * @link              http://example.com
 * @since             1.0.0
 * @package           ArifSMS
 *
 * @wordpress-plugin
 * Plugin Name:       Arif SMS plugin
 * Plugin URI:        http://example.com/plugin-name-uri/
 * Description:       A cool sms plugin that uses your Android phone as SMS gateway.
 * Version:           1.0.0
 * Author:            C4TK Addis
 * Author URI:        http://example.com/
 * License:           GPL-2.0+
 * License URI:       http://www.gnu.org/licenses/gpl-2.0.txt
 * Text Domain:       sms C4TK
 * Domain Path:       /languages
 */

// If this file is called directly, abort.

/**
 * The code that runs during plugin activation.
 * This action is documented in includes/class-plugin-name-activator.php
 */

// mt_sublevel_page() displays the page content for the first submenu
// of the custom Test Toplevel menu
//function mt_sublevel_page()
//{
//    echo "<h1>Phonebook</h1>";
//    include("public/Phonebook.php");
//}

// mt_sublevel_page2() displays the page content for the second submenu
// of the custom Test Toplevel menu
//function mt_sublevel_page2()
//{
//    echo "<h1>Messages</h1>";
//    include("public/Messages.php");
//}
function activate_arif_sms()
{
    require_once plugin_dir_path( __FILE__ ) . 'includes/class-arifSms-activator.php';
    Arif_Sms_Activator::activate();
}

/**
 * The code that runs during plugin deactivation.
 * This action is documented in includes/class-plugin-name-deactivator.php
 */
function deactivate_arif_sms()
{
    require_once plugin_dir_path(__FILE__) . 'includes/class-arifSms-deactivator.php';
    Arif_Sms_Deactivator::deactivate();
}

register_activation_hook(__FILE__, 'activate_arif_sms');
register_deactivation_hook(__FILE__, 'deactivate_arif_sms');

/**
 * The core plugin class that is used to define internationalization,
 * admin-specific hooks, and public-facing site hooks.
 */
require plugin_dir_path(__FILE__) . 'includes/class-arifSms.php';

/**
 * Begins execution of the plugin.
 *
 * Since everything within the plugin is registered via hooks,
 * then kicking off the plugin from this point in the file does
 * not affect the page life cycle.
 *
 * @since    1.0.0
 */

function run_arif_sms()
{
    $plugin = new Arif_Sms();
    $plugin->run();
}

run_arif_sms();