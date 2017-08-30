<?php

/**
 * The admin-specific functionality of the plugin.
 *
 * @link       https://github.com/populationtwo/camden-add-ons
 * @since      1.0.0
 *
 * @package    Camden_Add_Ons
 * @subpackage Camden_Add_Ons/admin
 */

/**
 * The admin-specific functionality of the plugin.
 *
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
     * @param      string $version The version of this plugin.
     */
    public function __construct($plugin_name, $version) {

        $this->plugin_name = $plugin_name;
        $this->version     = $version;

    }

    public function camden_tinymce_css() {
        wp_enqueue_style('tinymce-hook', plugin_dir_url(__FILE__) . '/tinymce/style.css');
    }

    public function camden_add_tinymce_plugin($plugin_array) {
        $plugin_array['shortcode_tinymce_button'] = plugin_dir_url(__FILE__) . '/tinymce/ui-button.js';

        return $plugin_array;
    }

    public function camden_register_tinymce_button($buttons) {
        array_push($buttons, "shortcode_tinymce_button");

        return $buttons;
    }


}
