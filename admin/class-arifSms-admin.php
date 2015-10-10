<?php

/**
 * The admin-specific functionality of the plugin.
 *
 * @link       http://example.com
 * @since      1.0.0
 *
 * @package    Plugin_Name
 * @subpackage Plugin_Name/admin
 */

/**
 * The admin-specific functionality of the plugin.
 *
 * Defines the plugin name, version, and two examples hooks for how to
 * enqueue the admin-specific stylesheet and JavaScript.
 *
 * @package    Arif_Sms
 * @subpackage Arif_Sms/admin
 * @author     Your Name <email@example.com>
 */
class Arif_Sms_Admin {

	/**
	 * The ID of this plugin.
	 *
	 * @since    1.0.0
	 * @access   private
	 * @var      string    $plugin_name    The ID of this plugin.
	 */
	private $plugin_name;

	/**
	 * The version of this plugin.
	 *
	 * @since    1.0.0
	 * @access   private
	 * @var      string    $version    The current version of this plugin.
	 */
	private $version;

	/**
	 * Initialize the class and set its properties.
	 *
	 * @since    1.0.0
	 * @param      string    $plugin_name       The name of this plugin.
	 * @param      string    $version    The version of this plugin.
	 */
	public function __construct( $plugin_name, $version ) {

		$this->plugin_name = $plugin_name;
		$this->version = $version;

	}

	/**
	 * Register the stylesheets for the admin area.
	 *
	 * @since    1.0.0
	 */
	public function enqueue_styles() {

		/**
		 * This function is provided for demonstration purposes only.
		 *
		 * An instance of this class should be passed to the run() function
		 * defined in Arif_Sms_Loader as all of the hooks are defined
		 * in that particular class.
		 *
		 * The Arif_Sms_Loader will then create the relationship
		 * between the defined hooks and the functions defined in this
		 * class.
		 *
		 */

		//wp_enqueue_style( $this->plugin_name, plugin_dir_url( __FILE__ ) . 'css/plugin-name-admin.css', array(), $this->version, 'all' );
		wp_enqueue_style( $this->plugin_name.bootstrap, plugin_dir_url( __FILE__ ) . 'css/bootstrap.min.css', array(), $this->version, 'all' );
		wp_enqueue_style( $this->plugin_name.ion, 'https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css', array(), $this->version, 'all' );
		wp_enqueue_style( $this->plugin_name.ion, '"https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css"', array(), $this->version, 'all' );
		wp_enqueue_style( $this->plugin_name.admin, plugin_dir_url( __FILE__ ) . 'dist/css/AdminLTE.min.css', array(), $this->version, 'all' );
		wp_enqueue_style( $this->plugin_name.admin, plugin_dir_url( __FILE__ ) . 'dist/css/skin.min.css', array(), $this->version, 'all' );

	}

	/**
	 * Register the JavaScript for the admin area.
	 *
	 * @since    1.0.0
	 */
	public function enqueue_scripts() {

		/**
		 * This function is provided for demonstration purposes only.
		 *
		 * An instance of this class should be passed to the run() function
		 * defined in Arif_Sms_Loader as all of the hooks are defined
		 * in that particular class.
		 *
		 * The Arif_Sms_Loader will then create the relationship
		 * between the defined hooks and the functions defined in this
		 * class.
		 */

		//wp_enqueue_script( $this->plugin_name, plugin_dir_url( __FILE__ ) . 'js/bootstrap.min.js', array( 'jquery' ), $this->version, false );
		wp_enqueue_script( $this->plugin_name.admin, plugin_dir_url( __FILE__ ) . 'dist/js/jQuery-2.1.4.min.js',array('jquery'),$this->version,false);
		wp_enqueue_script( $this->plugin_name.bootstrap, plugin_dir_url( __FILE__ ) .'js/bootstrap.min.js',array( 'jquery' ),'',false);
		wp_enqueue_script( $this->plugin_name.admin, plugin_dir_url( __FILE__ ) . 'dist/js/dashboard.js',array('jquery'),$this->version,false);
		wp_enqueue_script( $this->plugin_name.admin, plugin_dir_url( __FILE__ ) . 'dist/js/app.min.js',array('jquery'),$this->version,false);
		wp_enqueue_script( $this->plugin_name.admin, plugin_dir_url( __FILE__ ) . 'dist/js/demo.js',array('jquery'),$this->version,false);

		wp_enqueue_script( $this->plugin_name.angular, plugin_dir_url( __FILE__ ) . 'js/angular.min.js');
		//wp_enqueue_scripts();

	}

	//mt_toplevel_page() displays the page content for the custom Test Toplevel menu


	// action function for above hook
	public function mt_add_menu()
	{
		// Add a new top-level menu (ill-advised):
		add_menu_page('Arifsms','Arif SMS', 'manage_options', 'admin.php?page=ArifSms', array( $this,  'display' ));
	}
	function display()
	{
		//include_once( 'partials/arif-sms-admin-display.php' );
		include_once( 'partials/dashboard.php' );
    }
}