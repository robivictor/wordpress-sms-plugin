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
class Arif_Sms_Activator {

	/**
	 * Short Description. (use period)
	 *
	 * Long Description.
	 *
	 * @since    1.0.0
	 */
	public static function activate() {
		global $wpdb;
		$table_name1 = $wpdb->prefix . "messages";
		$sql1 = 'CREATE TABLE ' . $table_name1 . '(
		id INTEGER(32) UNSIGNED AUTO_INCREMENT,
        message_id varchar(20) NOT NULL,
        device_id  varchar(20) NOT NULL,
        deleted tinyint(1) NOT NULL DEFAULT 0,
        ms_from varchar(20) NOT NULL,
        message text NOT NULL,
        sent_to varchar(20) NOT NULL,
        pending tinyint(1) DEFAULT 0,
        expire_date datetime DEFAULT NULL,
        incoming tinyint(1) NOT NULL DEFAULT 0,
        created_by int(11) NOT NULL,
        updated_by int(11) DEFAULT NULL,
        update_date datetime DEFAULT NULL,
        create_date timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
        sent_timestamp datetime DEFAULT NULL,
        PRIMARY KEY (id) )';
        ///////////////////////////////////////////////////////////////////////////////////////////////
        $table_name2 = $wpdb->prefix . "contacts";
        $sql2 = 'CREATE TABLE ' . $table_name2 . '(
		id INTEGER(32) UNSIGNED AUTO_INCREMENT,
        full_name varchar(50) NOT NULL,
        phone varchar(20) NOT NULL,
        country varchar(20) NOT NULL,
        deleted tinyint(1) NOT NULL DEFAULT 0,
        updated_by int(11) DEFAULT NULL,
        created_by int(11) NOT NULL,
        update_date datetime DEFAULT NULL,
        create_date timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
        PRIMARY KEY (id) )';

        ///////////////////////////////////////////////////////////////////////////////////////////////
        $table_name3 = $wpdb->prefix . "groups";
        $sql3 = 'CREATE TABLE ' . $table_name3 . '(
		id INTEGER(32) UNSIGNED AUTO_INCREMENT,
        name varchar(50) NOT NULL,
        description text NOT NULL,
        deleted tinyint(1) NOT NULL DEFAULT 0,
        updated_by int(11) DEFAULT NULL,
        created_by int(11) NOT NULL,
        update_date datetime DEFAULT NULL,
        create_date timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
        PRIMARY KEY (id) )';

        ///////////////////////////////////////////////////////////////////////////////////////////////
        $table_name4 = $wpdb->prefix . "teams";
        $sql4 = 'CREATE TABLE ' . $table_name4 . '(
		id INTEGER(32) UNSIGNED AUTO_INCREMENT,
        group_id int(11) NOT NULL,
        contact_id int(11) NOT NULL,
        deleted tinyint(1) NOT NULL DEFAULT 0,
        created_by int(11) NOT NULL,
        updated_by int(11) DEFAULT NULL,
        update_date datetime DEFAULT NULL,
        create_date timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
        PRIMARY KEY (id) )';


        //$constrain = 'ALTER TABLE '.$wpdb->prefix.'teams ADD CONSTRAINT contact_constraint FOREIGN KEY (contact_id) REFERENCES '.$wpdb->prefix.'contacts (id), ADD CONSTRAINT group_constraint FOREIGN KEY (group_id) REFERENCES '.$wpdb->prefix.'groups (id)';
        $c = 'ALTER TABLE '.$wpdb->prefix.'teams
          ADD CONSTRAINT contact_constraint FOREIGN KEY (contact_id) REFERENCES '.$wpdb->prefix.'contacts (id),
          ADD CONSTRAINT group_constraint FOREIGN KEY (group_id) REFERENCES '.$wpdb->prefix.'groups (id)';

		require_once(ABSPATH . 'wp-admin/includes/upgrade.php');
        dbDelta($sql1);
        dbDelta($sql2);
        dbDelta($sql3);
        dbDelta($sql4);
        dbDelta($c);
    }
}