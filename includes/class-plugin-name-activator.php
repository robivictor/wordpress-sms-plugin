<?php

/**
 * Fired during plugin activation
 *
 * @link       http://example.com
 * @since      1.0.0
 *
 * @package    Plugin_Name
 * @subpackage Plugin_Name/includes
 */

/**
 * Fired during plugin activation.
 *
 * This class defines all code necessary to run during the plugin's activation.
 *
 * @since      1.0.0
 * @package    Plugin_Name
 * @subpackage Plugin_Name/includes
 * @author     Your Name <email@example.com>
 */
class Plugin_Name_Activator {

	/**
	 * Short Description. (use period)
	 *
	 * Long Description.
	 *
	 * @since    1.0.0
	 */
	public static function activate() {
// Hook for adding admin menus
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
			echo "<h2>" . __('Test Settings', 'menu-test') . "</h2>";
			echo "<a class='btn btn-succes'>Hello</a>";
		}

// mt_sublevel_page() displays the page content for the first submenu
// of the custom Test Toplevel menu
		function mt_sublevel_page()
		{
			echo "<h2>" . __('Test Settings', 'menu-test') . "</h2>";
			echo "<a class='btn btn-succes'>Hello</a>";
		}

// mt_sublevel_page2() displays the page content for the second submenu
// of the custom Test Toplevel menu
		function mt_sublevel_page2()
		{
			echo "<h2>" . __('Test Settings', 'menu-test') . "</h2>";
			echo "<a class='btn btn-succes'>Hello</a>";
		}
 	//function create_table()
		//{
		global $mpdb;
		$table_name = $mpdb->prefix . "phone_list";

		$sql = 'CREATE TABLE ' . $table_name . '(
    id INTEGER(20) UNSIGNED AUTO_INCREMENT,
    name VARCHAR(255),
    phone_number INTEGER(20) UNSIGNED,
    registered_date TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
        PRIMARY KEY (id) )';

		$table_name1 = $mpdb->prefix . "messages";

		$sql1 = 'CREATE TABLE ' . $table_name1 . '(
    id INTEGER(20) UNSIGNED AUTO_INCREMENT,
    name VARCHAR(255),
    phone_number INTEGER(20) UNSIGNED,
    message_id INTEGER(50),
    message VARCHAR(255),
    date TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
        PRIMARY KEY (id) )';

		require_once(ABSPATH . 'wp-admin/includes/upgrade.php');
		dbDelta($sql);
		dbDelta($sql1);
		//}
		//register_activation_hook( __FILE__, 'create_table' );

	}

}
