<?php

/**
 * The public-facing functionality of the plugin.
 *
 * @link       https://safan-softsolutions.com/
 * @since      1.0.0
 *
 * @package    safan_Doc
 * @subpackage safan_Doc/public
 */

/**
 * The public-facing functionality of the plugin.
 *
 * Defines the plugin name, version, and two examples hooks for how to
 * enqueue the public-facing stylesheet and JavaScript.
 *
 * @package    safan_Doc
 * @subpackage safan_Doc/public
 * @author     safan Theme <rashedcse18@gmail.com>
 */
class safan_Doc_Public {

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
	 * @param      string    $plugin_name       The name of the plugin.
	 * @param      string    $version    The version of this plugin.
	 */
	public function __construct( $plugin_name, $version ) {

		$this->plugin_name = $plugin_name;
		$this->version = $version;

	}

	/**
	 * Register the stylesheets for the public-facing side of the site.
	 *
	 * @since    1.0.0
	 */
	public function enqueue_styles() {

		/**
		 * This function is provided for demonstration purposes only.
		 *
		 * An instance of this class should be passed to the run() function
		 * defined in safan_Doc_Loader as all of the hooks are defined
		 * in that particular class.
		 *
		 * The safan_Doc_Loader will then create the relationship
		 * between the defined hooks and the functions defined in this
		 * class.
		 */

		wp_enqueue_style( 'bootstrap', plugin_dir_url( __FILE__ ) . 'css/bootstrap.min.css', array(), $this->version, 'all' );
		wp_enqueue_style( 'bootstrap-theme', plugin_dir_url( __FILE__ ) . 'css/bootstrap-theme.min.css', array(), $this->version, 'all' );
		wp_enqueue_style( 'custom', plugin_dir_url( __FILE__ ) . 'css/custom.css', array(), $this->version, 'all' );
		wp_enqueue_style( 'style', plugin_dir_url( __FILE__ ) . 'css/style.css', array(), $this->version, 'all' );
		wp_enqueue_style( 'safan-doc-public', plugin_dir_url( __FILE__ ) . 'css/safan-doc-public.css', array(), $this->version, 'all' );

	}

	/**
	 * Register the JavaScript for the public-facing side of the site.
	 *
	 * @since    1.0.0
	 */
	public function enqueue_scripts() {

		/**
		 * This function is provided for demonstration purposes only.
		 *
		 * An instance of this class should be passed to the run() function
		 * defined in safan_Doc_Loader as all of the hooks are defined
		 * in that particular class.
		 *
		 * The safan_Doc_Loader will then create the relationship
		 * between the defined hooks and the functions defined in this
		 * class.
		 */

		wp_enqueue_script( 'bootstrap', plugin_dir_url( __FILE__ ) . 'js/bootstrap.min.js', array( 'jquery' ), $this->version, false );
		wp_enqueue_script( 'custom', plugin_dir_url( __FILE__ ) . 'js/custom.js', array( 'jquery' ), $this->version, false );
		wp_enqueue_script( 'main', plugin_dir_url( __FILE__ ) . 'js/main.js', array( 'jquery' ), $this->version, false );
		wp_enqueue_script( 'safan-doc-public', plugin_dir_url( __FILE__ ) . 'js/safan-doc-public.js', array( 'jquery' ), $this->version, false );

	}

}
