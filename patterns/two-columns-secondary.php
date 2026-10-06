<?php
// Exit if accessed directly.
if( ! defined( 'ABSPATH' ) ) exit;

/**
 * Title: Two Columns Secondary
 * Slug: flexi-patterns/two-columns-secondary
 * Categories: flexi-patterns
 */
?>
<!-- wp:group {"metadata":{"categories":["flexi-patterns"],"patternName":"flexi-patterns/two-columns-secondary","name":"Two columns secondary"},"className":"flexi-two-columns-pattern","style":{"spacing":{"padding":{"top":"1.25rem","bottom":"1.25rem","left":"1.25rem","right":"1.25rem"}},"border":{"radius":"0.31rem"}},"backgroundColor":"black","textColor":"cyan-bluish-gray"} -->
<div class="wp-block-group flexi-two-columns-pattern has-cyan-bluish-gray-color has-black-background-color has-text-color has-background" style="border-radius:0.31rem;padding-top:1.25rem;padding-right:1.25rem;padding-bottom:1.25rem;padding-left:1.25rem">
      <!-- wp:columns -->
      <div class="wp-block-columns">
            <!-- wp:column -->
            <div class="wp-block-column">
                  <!-- wp:heading {"style":{"spacing":{"margin":{"bottom":"1.25rem"}}},"textColor":"luminous-vivid-amber"} -->
                  <h2 class="wp-block-heading has-luminous-vivid-amber-color has-text-color" style="margin-bottom:1.25rem">
                        <?php esc_html_e( 'Heading One', 'flexi-patterns' ); ?>
                  </h2>
                  <!-- /wp:heading -->
                  <!-- wp:paragraph -->
                  <p>
                        <?php esc_html_e( 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.', 'flexi-patterns' ); ?>
                  </p>
                  <!-- /wp:paragraph -->
            </div>
            <!-- /wp:column -->
            <!-- wp:column -->
            <div class="wp-block-column">
                  <!-- wp:heading {"style":{"spacing":{"margin":{"bottom":"1.25rem"}}},"textColor":"luminous-vivid-amber"} -->
                  <h2 class="wp-block-heading has-luminous-vivid-amber-color has-text-color" style="margin-bottom:1.25rem">
                        <?php esc_html_e( 'Heading Two', 'flexi-patterns' ); ?>
                  </h2>
                  <!-- /wp:heading -->
                  <!-- wp:paragraph -->
                  <p>
                        <?php esc_html_e( 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.', 'flexi-patterns' ); ?>
                  </p>
                  <!-- /wp:paragraph -->
            </div>
            <!-- /wp:column -->
      </div>
      <!-- /wp:columns -->
</div>
<!-- /wp:group -->