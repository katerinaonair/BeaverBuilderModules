<?php
/**
 * Plugin Name: Webstudio lab BB modules
 * Plugin URI: http://www.webstudiolab.it
 * Description: Webstudio lab BB modules for the Beaver Builder Plugin.
 * Version: 1.0
 * Author: Webstudio Lab s.r.l.
 * Author URI: http://www.mywebsite.com
 */
define( 'FL_MODULE_DIR', plugin_dir_path( __FILE__ ) );
define( 'FL_MODULE_URL', plugins_url( '/', __FILE__ ) );

function wsl_load_module() {
    if ( class_exists( 'FLBuilder' ) ) {
      require_once 'action-pics/action-pics.php';
      //require_once 'wsl-menu/wsl-menu.php';
      //require_once 'wsl-menu-humburger/wsl-menu-humburger.php';
     // require_once 'wsl-banners/wsl-banners.php';


    }
}
add_action( 'init', 'wsl_load_module' );
