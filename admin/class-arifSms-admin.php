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

	protected $api = 'http://pugme.herokuapp.com/bomb?count=';
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

		wp_enqueue_script( $this->plugin_name.angular, plugin_dir_url( __FILE__ ) . 'js/angular.min.js',array('jquery'),$this->version,false);
		wp_enqueue_script( $this->plugin_name.angular, plugin_dir_url( __FILE__ ) . 'js/jquery.inputmask.js',array('jquery'),$this->version,false);
		wp_enqueue_script( $this->plugin_name.angular, plugin_dir_url( __FILE__ ) . 'js/jquery.inputmask.date.extensions.js',array('jquery'),$this->version,false);
		wp_enqueue_script( $this->plugin_name.angular, plugin_dir_url( __FILE__ ) . 'js/jquery.inputmask.extensions.js',array('jquery'),$this->version,false);
		//wp_enqueue_scripts();

	}

	/** Add public query vars
	 *	@param array $vars List of current public query vars
	 *	@return array $vars
	 */
	public function add_query_vars($vars){
		$vars[] = '__api';
		$vars[] = 'pugs';
		//$vars[] = 'secret_code';
		return $vars;
	}

	/** Add API Endpoint
	 *	This is where the magic happens - brush up on your regex skillz
	 *	@return void
	 */
	public function add_endpoint(){
		add_rewrite_rule('^api/pugs/?([0-9]+)?/?','index.php?__api=1&pugs=$matches[1]','top');
	}
	/**	Sniff Requests
	 *	This is where we hijack all API requests
	 * 	If $_GET['__api'] is set, we kill WP and serve up pug bomb awesomeness
	 *	@return die if API request
	 */
	public function sniff_requests(){
		global $wp;
		if(isset($wp->query_vars['__api'])){
			$this->handle_request();
			exit;
		}
	}

	/** Handle Requests
	 *	This is where we send off for an intense pug bomb package
	 *	@return void
	 */
	protected function handle_request(){
		global $wp;
		$pugs = $wp->query_vars['pugs'];
		if(!$pugs)
			$this->send_response('Please tell us how many pugs to send.');

		$pugs = file_get_contents($this->api.$pugs);
		if($pugs)
			$this->send_response('200 OK', json_decode($pugs));
		else
			$this->send_response('Something went wrong with the pug bomb factory');
	}

	/** Response Handler
	 *	This sends a JSON response to the browser
	 */
	protected function send_response($msg, $pugs = ''){
		$response['message'] = $msg;
		if($pugs)
			$response['pugs'] = $pugs;
		header('content-type: application/json; charset=utf-8');
		echo json_encode($response)."\n";
		exit;
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