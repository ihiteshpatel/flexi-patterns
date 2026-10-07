<?php
// Exit if accessed directly.
if( ! defined( 'ABSPATH' ) ) exit;

/**
 * Title: Two Columns
 * Slug: flexi-patterns/two-columns
 * Categories: flexi-patterns
 */
?>
<!-- wp:group {"metadata":{"categories":["flexi-patterns"],"patternName":"flexi-patterns/two-columns","name":"Pattern: Two columns"},"style":{"spacing":{"padding":{"top":"1.25rem","bottom":"1.25rem","left":"1.25rem","right":"1.25rem"}},"border":{"color":"#808080","width":"1px","radius":"0.31rem"}},"backgroundColor":"accent","layout":{"type":"constrained"}} -->
<div class="wp-block-group has-border-color has-accent-background-color has-background" style="border-color:#808080;border-width:1px;border-radius:0.31rem;padding-top:1.25rem;padding-right:1.25rem;padding-bottom:1.25rem;padding-left:1.25rem">
      <!-- wp:columns {"metadata":{"categories":["flexi-patterns"],"patternName":"flexi-patterns/two-columns","name":"Two columns"},"align":"wide"} -->
      <div class="wp-block-columns alignwide">
            <!-- wp:column -->
            <div class="wp-block-column">
                  <!-- wp:group {"style":{"spacing":{"padding":{"top":"0","bottom":"0","left":"0","right":"0"}}}} -->
                  <div class="wp-block-group" style="padding-top:0;padding-right:0;padding-bottom:0;padding-left:0">
                        <!-- wp:heading {"style":{"color":{"text":"#000000"},"spacing":{"margin":{"bottom":"1.25rem"}}}} -->
                        <h2 class="wp-block-heading has-text-color" style="color:#000000;margin-bottom:1.25rem"><?php esc_html_e( 'Heading One', 'flexi-patterns' ); ?></h2>
                        <!-- /wp:heading -->
                        <!-- wp:paragraph {"style":{"spacing":{"margin":{"bottom":"1.25rem"}}}} -->
                        <p style="margin-bottom:1.25rem"><?php esc_html_e( 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.', 'flexi-patterns' ); ?></p>
                        <!-- /wp:paragraph -->
                        <!-- wp:buttons {"layout":{"type":"flex","justifyContent":"left"}} -->
                        <div class="wp-block-buttons">
                              <!-- wp:button {"className":"aligncenter is-style-layout-border-white-no-fill"} -->
                              <div class="wp-block-button aligncenter is-style-layout-border-white-no-fill">
                                    <a class="wp-block-button__link wp-element-button" href="#"><?php esc_html_e( 'CTA One', 'flexi-patterns' ); ?></a>
                              </div>
                              <!-- /wp:button -->
                        </div>
                        <!-- /wp:buttons -->
                  </div>
                  <!-- /wp:group -->
            </div>
            <!-- /wp:column -->         
            <!-- wp:column -->
            <div class="wp-block-column">
                  <!-- wp:group {"style":{"spacing":{"padding":{"top":"0","bottom":"0","left":"0","right":"0"}}}} -->
                  <div class="wp-block-group" style="padding-top:0;padding-right:0;padding-bottom:0;padding-left:0">
                        <!-- wp:heading {"style":{"color":{"text":"#000000"},"spacing":{"margin":{"bottom":"1.25rem"}}}} -->
                        <h2 class="wp-block-heading has-text-color" style="color:#000000;margin-bottom:1.25rem"><?php esc_html_e( 'Heading Two', 'flexi-patterns' ); ?></h2>
                        <!-- /wp:heading -->
                        <!-- wp:paragraph {"style":{"spacing":{"margin":{"bottom":"1.25rem"}}}} -->
                        <p style="margin-bottom:1.25rem"><?php esc_html_e( 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.', 'flexi-patterns' ); ?></p>
                        <!-- /wp:paragraph -->
                        <!-- wp:buttons {"layout":{"type":"flex","justifyContent":"left"}} -->
                        <div class="wp-block-buttons">
                              <!-- wp:button {"className":"aligncenter is-style-layout-border-white-no-fill"} -->
                              <div class="wp-block-button aligncenter is-style-layout-border-white-no-fill">
                                    <a class="wp-block-button__link wp-element-button" href="#"><?php esc_html_e( 'CTA Two', 'flexi-patterns' ); ?></a>
                              </div>
                              <!-- /wp:button -->
                        </div>
                        <!-- /wp:buttons -->
                  </div>
                  <!-- /wp:group -->
            </div>
            <!-- /wp:column -->
      </div>
      <!-- /wp:columns -->
</div>
<!-- /wp:group -->