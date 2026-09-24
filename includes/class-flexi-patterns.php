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
                        self::$instance->setup_actions();
                  }
                  return self::$instance;
            }

            private function __construct() {
                  self::$instance = $this;
            }

            private function setup_actions() {
                  add_action( 'init', array( $this, 'register_patterns_category' ) );
                  add_action( 'init', array( $this, 'register_patterns' ) );
            }

            public function register_patterns_category() {
                  if( function_exists( 'register_block_pattern_category' ) ) {
                        register_block_pattern_category(
                              'flexi-patterns',
                              array( 'label' => __( 'Flexi Patterns', 'flexi-patterns' ) )
                        );
                  }
            }

            public function register_patterns() {
                  if( function_exists( 'register_block_pattern' ) ) {
                        $patterns_dir = FLEXI_PATTERNS_PATH . 'patterns/';

                        if( file_exists( $patterns_dir ) && is_dir( $patterns_dir ) ) {
                              $pattern_files = glob( $patterns_dir . '*.php' );
                              
                              if( isset( $pattern_files ) && is_array( $pattern_files ) ) { 
                                    foreach( $pattern_files as $pattern_file ) {
                                          ob_start();
                                          $pattern_content = include $pattern_file;
                                          $pattern_content = ob_get_clean();
                                          $title = ucfirst( str_replace( '-', ' ', basename( $pattern_file, '.php' ) ) );
                                          // translators: %s is the title of the pattern file, formatted with spaces instead of dashes.
                                          $title_translated = sprintf( __( 'Pattern: %s', 'flexi-patterns' ), $title );

                                          if( ! empty( $pattern_content ) && is_string( $pattern_content ) ) {
                                                $pattern_slug = 'flexi-patterns/' . basename( $pattern_file, '.php' );
                                                register_block_pattern(
                                                      $pattern_slug,
                                                      array(
                                                            'title' => $title_translated,
                                                            'description' => __( 'A custom pattern from Flexi Patterns.', 'flexi-patterns' ),
                                                            'categories' => array( 'flexi-patterns' ),
                                                            'content' => $pattern_content
                                                      )
                                                );
                                          }
                                    }
                              }
                        }
                  }
            }
      }
}