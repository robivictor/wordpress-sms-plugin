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
 * @package           Plugin_Name
 *
 * @wordpress-plugin
 * Plugin Name:       SMS C4TK plugin
 * Plugin URI:        http://example.com/plugin-name-uri/
 * Description:       A cool sms plugin that uses your Android phone as SMS gateway.
 * Version:           1.0.0
 * Author:            C4TK
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
add_action('admin_menu', 'mt_add_pages');

// action function for above hook
function mt_add_pages()
{

    // Add a new top-level menu (ill-advised):
    add_menu_page(__('SMS Settings', 'menu-test'), __('C4TK SMS Plugin', 'menu-test'), 'manage_options', 'sms-settings', 'sms_settings', menu - icon - generic);

    //add_menu_page( 'custom menu title', 'C4TK SMS Plugin' , 'manage_options', 'my-facebook-tags/phonebook.php', '', menu-icon-generic );

    // Add a submenu to the custom top-level menu:
    add_submenu_page('sms-settings', __('Phone Book', 'menu-test'), __('Phone Book', 'menu-test'), 'manage_options', 'phonebook', 'mt_sublevel_page');

    // Add a second submenu to the custom top-level menu:
    add_submenu_page('sms-settings', __('Messages', 'menu-test'), __('Messages', 'menu-test'), 'manage_options', 'messages', 'mt_sublevel_page2');
}

// mt_toplevel_page() displays the page content for the custom Test Toplevel menu
function sms_settings()
{
    echo "<h1>Settings</h1>";
    include("public/settings.php");
}

// mt_sublevel_page() displays the page content for the first submenu
// of the custom Test Toplevel menu
function mt_sublevel_page()
{
    echo "<h1>Phonebook</h1>";
    include("public/Phonebook.php");
}

// mt_sublevel_page2() displays the page content for the second submenu
// of the custom Test Toplevel menu
function mt_sublevel_page2()
{
    echo "<h1>Messages</h1>";
    include("public/Messages.php");
}
function activate_plugin_name()
{
    require_once plugin_dir_path( __FILE__ ) . 'includes/class-plugin-name-activator.php';
    Plugin_Name_Activator::activate();
}

/**
 * The code that runs during plugin deactivation.
 * This action is documented in includes/class-plugin-name-deactivator.php
 */
function deactivate_plugin_name()
{
    require_once plugin_dir_path(__FILE__) . 'includes/class-plugin-name-deactivator.php';
    Plugin_Name_Deactivator::deactivate();
}

register_activation_hook(__FILE__, 'activate_plugin_name');
register_deactivation_hook(__FILE__, 'deactivate_plugin_name');

/**
 * The core plugin class that is used to define internationalization,
 * admin-specific hooks, and public-facing site hooks.
 */
require plugin_dir_path(__FILE__) . 'includes/class-plugin-name.php';

/**
 * Begins execution of the plugin.
 *
 * Since everything within the plugin is registered via hooks,
 * then kicking off the plugin from this point in the file does
 * not affect the page life cycle.
 *
 * @since    1.0.0
 */

function run_plugin_name()
{
    $plugin = new Plugin_Name();
    $plugin->run();
}

run_plugin_name();