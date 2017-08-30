<?php
/*
 * Credit to GavickPro
 */
//
//add_action( 'admin_head', 'camden_add_tinymce_button' );
//add_action( 'admin_enqueue_scripts', 'camden_tinymce_css' );
//
//function camden_add_tinymce_button() {
//	global $typenow;
//	if ( ! current_user_can( 'edit_posts' ) && ! current_user_can( 'edit_pages' ) ) {
//		return;
//	}
//	if ( ! in_array( $typenow, array( 'post', 'page' ) ) ) {
//		return;
//	}
//	if ( get_user_option( 'rich_editing' ) == 'true' ) {
//		add_filter( 'mce_external_plugins', 'camden_add_tinymce_plugin' );
//		add_filter( 'mce_buttons', 'camden_register_tinymce_button' );
//	}
//}
//
//function camden_add_tinymce_plugin( $plugin_array ) {
//	$plugin_array['shortcode_tinymce_button'] = plugin_dir_url( __FILE__ ) . '/ui-button.js';
//
//	return $plugin_array;
//}
//
//function camden_register_tinymce_button( $buttons ) {
//	array_push( $buttons, "shortcode_tinymce_button" );
//
//	return $buttons;
//}
//
