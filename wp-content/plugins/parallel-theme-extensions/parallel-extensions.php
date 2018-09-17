<?php
/*
Plugin Name: Parallel Theme Extensions
Plugin URI: https://www.themely.com/themes/parallel/
Description: This plugin adds widgets required by the Parallel WordPress theme by Themely.
Version: 1.0.7
Author: Themely
Author URI: https://www.themely.com
License: GPLv2 or later
License URI: http://www.gnu.org/licenses/gpl-2.0.html
*/

if ( ! function_exists( 'add_action' ) ) {
	die( 'Nothing to do...' );
}

// Path/URL to root of this plugin, with trailing slash.
define( 'PARALLEL_EXTENSIONS_PATH', plugin_dir_path( __FILE__ ) );
define( 'PARALLEL_EXTENSIONS_URL', plugin_dir_url( __FILE__ ) );

// Require main plugin file.
require PARALLEL_EXTENSIONS_PATH . 'inc/widgets.php';