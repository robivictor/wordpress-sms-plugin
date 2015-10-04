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
    message_id INTEGER(50) NOT NULL,
    message VARCHAR(255) NOT NULL,
    device_id INTEGER(20) NOT NULL,
    sent_to VARCHAR(255) NOT NULL,
    date TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
        PRIMARY KEY (id) )';

		require_once(ABSPATH . 'wp-admin/includes/upgrade.php');
		dbDelta($sql);
		dbDelta($sql1);
		//}
		//register_activation_hook( __FILE__, 'create_table' );

	}

}
