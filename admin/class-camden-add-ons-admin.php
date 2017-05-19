<?php

/**
 * The admin-specific functionality of the plugin.
 *
 * @link       http://population-2.com
 * @since      1.0.0
 *
 * @package    Camden_Add_Ons
 * @subpackage Camden_Add_Ons/admin
 */

/**
 * The admin-specific functionality of the plugin.
 *
 * Defines the plugin name, version, and two examples hooks for how to
 * enqueue the admin-specific stylesheet and JavaScript.
 *
 * @package    Camden_Add_Ons
 * @subpackage Camden_Add_Ons/admin
 * @author     Population2 <info@population-2.com>
 */
class Camden_Add_Ons_Admin {

	/**
	 * The ID of this plugin.
	 *
	 * @since    1.0.0
	 * @access   private
	 * @var      string $plugin_name The ID of this plugin.
	 */
	private $plugin_name;

	/**
	 * The version of this plugin.
	 *
	 * @since    1.0.0
	 * @access   private
	 * @var      string $version The current version of this plugin.
	 */
	private $version;

	/**
	 * Initialize the class and set its properties.
	 *
	 * @since    1.0.0
	 *
	 * @param      string $plugin_name The name of this plugin.
	 * @param      string $version     The version of this plugin.
	 */
	public function __construct( $plugin_name, $version ) {

		$this->plugin_name = $plugin_name;
		$this->version     = $version;

	}

	/**
	 * Register the stylesheets for the admin area.
	 *
	 * @since    1.0.0
	 */
	//	public function enqueue_styles() {
	//
	//		/**
	//		 * This function is provided for demonstration purposes only.
	//		 *
	//		 * An instance of this class should be passed to the run() function
	//		 * defined in Camden_Add_Ons_Loader as all of the hooks are defined
	//		 * in that particular class.
	//		 *
	//		 * The Camden_Add_Ons_Loader will then create the relationship
	//		 * between the defined hooks and the functions defined in this
	//		 * class.
	//		 */
	//
	//		wp_enqueue_style( $this->plugin_name, plugin_dir_url( __FILE__ ) . 'css/camden-add-ons-admin.css', array(), $this->version, 'all' );
	//
	//	}

	/**
	 * Register the JavaScript for the admin area.
	 *
	 * @since    1.0.0
	 */
	//	public function enqueue_scripts() {
	//
	//		/**
	//		 * This function is provided for demonstration purposes only.
	//		 *
	//		 * An instance of this class should be passed to the run() function
	//		 * defined in Camden_Add_Ons_Loader as all of the hooks are defined
	//		 * in that particular class.
	//		 *
	//		 * The Camden_Add_Ons_Loader will then create the relationship
	//		 * between the defined hooks and the functions defined in this
	//		 * class.
	//		 */
	//
	//		wp_enqueue_script( $this->plugin_name, plugin_dir_url( __FILE__ ) . 'js/camden-add-ons-admin.js', array( 'jquery' ), $this->version, false );
	//
	//	}

	public function camden_tinymce_css() {
		wp_enqueue_style( 'tinymce-hook', plugin_dir_url( __FILE__ ) . '/tinymce/style.css' );
	}

	public function camden_add_tinymce_plugin( $plugin_array ) {
		$plugin_array['shortcode_tinymce_button'] = plugin_dir_url( __FILE__ ) . '/tinymce/ui-button.js';

		return $plugin_array;
	}

	public function camden_register_tinymce_button( $buttons ) {
		array_push( $buttons, "shortcode_tinymce_button" );

		return $buttons;
	}

//	public function camden_add_tinymce_button() {
//		global $typenow;
//		if ( ! current_user_can( 'edit_posts' ) && ! current_user_can( 'edit_pages' ) ) {
//			return;
//		}
//		if ( ! in_array( $typenow, array( 'post', 'page' ) ) ) {
//			return;
//		}
//		if ( get_user_option( 'rich_editing' ) == 'true' ) {
//			add_filter( 'mce_external_plugins', 'camden_add_tinymce_plugin' );
//			add_filter( 'mce_buttons', 'camden_register_tinymce_button' );
//		}
//	}


}
