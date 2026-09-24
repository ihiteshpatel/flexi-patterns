<?php
// Exit if accessed directly.
if( ! defined( 'ABSPATH' ) ) exit;
/**
 * Title: Call to Action
 * Slug: flexi-patterns/call-to-action
 * Categories: flexi-patterns
 */
?>
<!-- wp:group {"lock":{"move":false,"remove":false},"metadata":{"categories":["flexi-patterns"],"patternName":"flexi-patterns/call-to-action","name":"Call to action"},"align":"wide","className":"cta-block","style":{"border":{"width":"0.06rem","color":"#cfcabe","radius":"0.31rem"},"spacing":{"padding":{"top":"1.25rem","right":"1.25rem","bottom":"1.25rem","left":"1.25rem"}}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group alignwide cta-block has-border-color" style="border-color:#cfcabe;border-width:0.06rem;border-radius:0.31rem;padding-top:1.25rem;padding-right:1.25rem;padding-bottom:1.25rem;padding-left:1.25rem">
      <!-- wp:columns {"lock":{"move":false,"remove":false}} -->
      <div class="wp-block-columns">
            <!-- wp:column {"verticalAlignment":"center","width":"100%","layout":{"type":"default"}} -->
            <div class="wp-block-column is-vertically-aligned-center" style="flex-basis:100%">
                  <!-- wp:heading {"textAlign":"center"} -->
                  <h2 class="wp-block-heading has-text-align-center">
                        <?php esc_html_e( 'Lorem ipsum content in-article callout header', 'flexi-patterns' ); ?>
                  </h2>
                  <!-- /wp:heading -->
                  <!-- wp:paragraph {"align":"center","fontSize":"regular"} -->
                  <p class="has-text-align-center has-regular-font-size">
                        <?php esc_html_e( 'Lorem ipsum text could go here', 'flexi-patterns' ); ?>                  
                  </p>
                  <!-- /wp:paragraph -->
                  <!-- wp:buttons {"layout":{"type":"flex","justifyContent":"center"}} -->
                  <div class="wp-block-buttons">
                        <!-- wp:button {"className":"is-style-primary-button","style":{"spacing":{"padding":{"top":"1.06rem","bottom":"1.06rem"}}}} -->
                        <div class="wp-block-button is-style-primary-button">
                              <a class="wp-block-button__link wp-element-button" href="#" style="padding-top:1.06rem;padding-bottom:1.06rem">
                                    <?php esc_html_e( 'Primary CTA', 'flexi-patterns' ); ?>                                                            
                              </a>
                        </div>
                        <!-- /wp:button -->
                  </div>
                  <!-- /wp:buttons -->
            </div>
            <!-- /wp:column -->
      </div>
      <!-- /wp:columns -->
</div>
<!-- /wp:group -->