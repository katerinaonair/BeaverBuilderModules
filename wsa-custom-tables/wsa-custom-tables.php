<?php
/**
 * Plugin Name: WSA Tables Module
 * Plugin URI: http://bb.webstudiolab.com
 * Description: The easiest way to create tables
 * Version: 1.0
 * Author: WebStudioAgency 
 * Programmer: Katerina Elgina 
 * Author URI: http://bb.webstudiolab.com
 */
define( 'WSA_MODULE_TABLES_DIR', plugin_dir_path( __FILE__ ) );
define( 'WSA_MODULE_TABLES_URL', plugins_url( '/', __FILE__ ) );

/**
 * Custom modules
 */
function fl_load_wsa_tables() {
	if ( class_exists( 'FLBuilder' ) ) {
	    require_once 'wsa-tables/wsa-tables.php';
	}
}
add_action( 'init', 'fl_load_wsa_tables' );

