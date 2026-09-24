<?php
// Exit if accessed directly.
if( ! defined( 'ABSPATH' ) ) exit;

/**
 * Check Flexi_Patterns_Handler class_exists or not.
 * 
 * @since 1.0.0
 * @package flexi-patterns
 */
if( ! class_exists( 'Flexi_Patterns_Handler' ) ) {
      /**
       * The core plugin class.
       * 
       * This is used to define internationalization, admin-specific hooks, and
       * public-facing site hooks.
       * 
       * Also maintains the unique identifier of this plugin as well as the current
       * version of the plugin.
       * 
       * @since 1.0.0
       * @package flexi-patterns
       */
      class Flexi_Patterns_Handler {

            private static $instance;

            public static function get_instance() {
                  if( ! isset( self::$instance ) && ! ( self::$instance instanceof Flexi_Patterns_Handler ) ) {
                        self::$instance = new Flexi_Patterns_Handler;
                  }
                  return self::$instance;
            }

            private function __construct() {
                  self::$instance = $this;
            }
      }
}