<?php
/**
 * Plugin Name: Button Block
 * Description: Implement multi-functional button
 * Version: 1.0.8
 * Author: bPlugins LLC
 * Author URI: http://bplugins.com
 * License: GPLv3
 * License URI: https://www.gnu.org/licenses/gpl-3.0.txt
 * Text Domain: button-block
   */

// ABS PATH
if ( !defined( 'ABSPATH' ) ) { exit; }

register_activation_hook( __FILE__, function () {
	if ( is_plugin_active( 'button-block/index.php' ) ){
		deactivate_plugins( 'button-block/index.php' );
	}
	if ( is_plugin_active( 'button-block-pro/index.php' ) ){
		deactivate_plugins( 'button-block-pro/index.php' );
	}
} );

// Constant
define( 'BTN_VERSION', isset( $_SERVER['HTTP_HOST'] ) && 'localhost' === $_SERVER['HTTP_HOST'] ? time() : '1.0.8' );
define( 'BTN_DIR_URL', plugin_dir_url( __FILE__ ) );
define( 'BTN_DIR_PATH', plugin_dir_path( __FILE__ ) );
define( 'BTN_HAS_FREE', 'button-block/index.php' === plugin_basename( __FILE__ ) );
define( 'BTN_HAS_PRO', 'button-block-pro/index.php' === plugin_basename( __FILE__ ) );

if( BTN_HAS_FREE ){
	if( !function_exists( 'btn_init' ) ){
		function btn_init(){
			global $btn_bs;
			require_once( BTN_DIR_PATH . 'bplugins_sdk/init.php' );
			$btn_bs = new BPlugins_SDK( __FILE__ );
			return $btn_bs;
		}
		btn_init();
	}
}

if ( BTN_HAS_PRO ) {
	require_once( BTN_DIR_PATH . 'inc/pro.php' );
	require_once( BTN_DIR_PATH . 'inc/AdminMenu.php' );
}

require_once BTN_DIR_PATH . 'inc/block.php';

// Button Block
if( !class_exists( 'BTNPlugin' ) ){
	class BTNPlugin{
		function __construct(){
			add_action( 'wp_ajax_btnPipeChecker', [$this, 'btnPipeChecker'] );
			add_action( 'wp_ajax_nopriv_btnPipeChecker', [$this, 'btnPipeChecker'] );
			add_action( 'admin_init', [$this, 'registerSettings'] );
			add_action( 'rest_api_init', [$this, 'registerSettings']);
		}

		function btnPipeChecker(){
			$nonce = $_POST['_wpnonce'];

			if( !wp_verify_nonce( $nonce, 'wp_ajax' )){
				wp_send_json_error( 'Invalid Request' );
			}

			wp_send_json_success( [
				'isPipe' => BTN_HAS_PRO ? \btn_fs()->is__premium_only() && \btn_fs()->can_use_premium_code() : false
			] );
		}

		function registerSettings(){
			register_setting( 'btnUtils', 'btnUtils', [
				'show_in_rest'		=> [
					'name'			=> 'btnUtils',
					'schema'		=> [ 'type' => 'string' ]
				],
				'type'				=> 'string',
				'default'			=> wp_json_encode( [ 'nonce' => wp_create_nonce( 'wp_ajax' ) ] ),
				'sanitize_callback'	=> 'sanitize_text_field'
			] );
		}
	}
	new BTNPlugin;
}