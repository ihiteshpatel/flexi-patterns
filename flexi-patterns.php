<?php
/**
 * Plugin Name: Flexi Patterns
 * Author: Hitesh
 * Author URI: https://profiles.wordpress.org/patelhitesh/
 * Version: 1.0.0
 * Description: Collection of patterns
 * Tags: patterns, plugin, custom
 * License: GNU General Public License v2 or later
 * License URI: http://gnu.org/licenses/gpl-2.0.html
 * Text Domain: flexi-patterns
 * Domain Path: /languages
 */

// Exit if accessed directly
if( ! defined( 'ABSPATH' ) ) exit;

// Define plugin version.
if( ! defined( 'FLEXI_PATTERNS_VERSION' ) ) {
      define( 'FLEXI_PATTERNS_VERSION', '1.0.0' );
}

// Define plugin dir path.
if( ! defined( 'FLEXI_PATTERNS_PATH' ) ) {
      define( 'FLEXI_PATTERNS_PATH', plugin_dir_path( __FILE__ ) );
}

// Define plugin dir url.
if( ! defined( 'FLEXI_PATTERNS_URL' ) ) {
      define( 'FLEXI_PATTERNS_URL', plugin_dir_url( __FILE__ ) );
}

// Define plugin menu slug.
if( ! defined( 'FLEXI_PATTERNS_MENU_SLUG' ) ) {
      define( 'FLEXI_PATTERNS_MENU_SLUG', 'flexi-patterns' );
}

// Define plugin basename.
if( ! defined( 'FLEXI_PATTERNS_BASENAME' ) ) {
      define( 'FLEXI_PATTERNS_BASENAME', plugin_basename( __FILE__ ) );
}