<?php
// Exit if accessed directly.
if( ! defined( 'ABSPATH' ) ) exit;

/**
 * Title: Image Text Alternator
 * Slug: flexi-patterns/image-text-alternator
 * Categories: flexi-patterns
 */
$image_url = esc_url( FLEXI_PATTERNS_URL . 'assets/images/placeholder-image.webp' );
?>
<!-- wp:group {"align":"wide","style":{"spacing":{"padding":{"top":"1.25rem","bottom":"1.25rem","left":"1.25rem","right":"1.25rem"}},"border":{"width":"0.06rem","color":"#cfcabe","radius":"0.31rem"}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group alignwide has-border-color" style="border-color:#cfcabe;border-width:0.06rem;border-radius:0.31rem;padding-top:1.25rem;padding-right:1.25rem;padding-bottom:1.25rem;padding-left:1.25rem">
      <!-- wp:columns {"metadata":{"categories":["flexi-patterns"],"patternName":"flexi-patterns/image-text-alternator","name":"Image Text Aleternator"},"align":"wide"} -->
      <div class="wp-block-columns alignwide">
            <!-- wp:column {"style":{"spacing":{"blockGap":"1.25rem"}}} -->
            <div class="wp-block-column">
                  <!-- wp:columns -->
                  <div class="wp-block-columns">
                        <!-- wp:column -->
                        <div class="wp-block-column">
                              <!-- wp:group {"layout":{"type":"constrained"}} -->
                              <div class="wp-block-group">
                                    <!-- wp:heading -->
                                    <h2 class="wp-block-heading">
                                          <?php esc_html_e( 'Heading1', 'flexi-patterns' ); ?>
                                    </h2>
                                    <!-- /wp:heading -->
                                    <!-- wp:paragraph -->
                                    <p>
                                          <?php esc_html_e( 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.', 'flexi-patterns' ); ?>
                                    </p>
                                    <!-- /wp:paragraph -->
                                    <!-- wp:buttons -->
                                    <div class="wp-block-buttons">
                                          <!-- wp:button -->
                                          <div class="wp-block-button">
                                                <a class="wp-block-button__link wp-element-button" href="#">
                                                      <?php esc_html_e( 'Learn more...', 'flexi-patterns' ); ?>
                                                </a>
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
                              <!-- wp:image {"id":1322,"sizeSlug":"full","linkDestination":"none","style":{"spacing":{"margin":{"top":"0","bottom":"0"}},"border":{"radius":"8px"}}} -->
                              <figure class="wp-block-image size-full has-custom-border" style="margin-top:0;margin-bottom:0">
                                    <img src="<?php echo esc_url( $image_url ); ?>" alt="<?php esc_html_e( 'Placeholder image', 'flexi-patterns' ); ?>" class="wp-image-1322" style="border-radius:8px"/>
                              </figure>
                              <!-- /wp:image -->
                        </div>
                        <!-- /wp:column -->
                  </div>
                  <!-- /wp:columns -->
                  <!-- wp:columns -->
                  <div class="wp-block-columns">
                        <!-- wp:column -->
                        <div class="wp-block-column">
                              <!-- wp:image {"id":1322,"sizeSlug":"full","linkDestination":"none","style":{"spacing":{"margin":{"top":"0","bottom":"0"}},"border":{"radius":"8px"}}} -->
                              <figure class="wp-block-image size-full has-custom-border" style="margin-top:0;margin-bottom:0">
                                    <img src="<?php echo esc_url( $image_url ); ?>" alt="<?php esc_html_e( 'Placeholder image', 'flexi-patterns' ); ?>" class="wp-image-1322" style="border-radius:8px"/>
                              </figure>
                              <!-- /wp:image -->
                        </div>
                        <!-- /wp:column -->
                        <!-- wp:column -->
                        <div class="wp-block-column">
                              <!-- wp:group {"layout":{"type":"constrained"}} -->
                              <div class="wp-block-group">
                                    <!-- wp:heading -->
                                    <h2 class="wp-block-heading">
                                          <?php esc_html_e( 'Heading1', 'flexi-patterns' ); ?>
                                    </h2>
                                    <!-- /wp:heading -->
                                    <!-- wp:paragraph -->
                                    <p>
                                          <?php esc_html_e( 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.', 'flexi-patterns' ); ?>
                                    </p>
                                    <!-- /wp:paragraph -->
                                    <!-- wp:buttons -->
                                    <div class="wp-block-buttons">
                                          <!-- wp:button -->
                                          <div class="wp-block-button">
                                                <a class="wp-block-button__link wp-element-button" href="#">
                                                      <?php esc_html_e( 'Learn more...', 'flexi-patterns' ); ?>
                                                </a>
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
            <!-- /wp:column -->
      </div>
      <!-- /wp:columns -->
</div>
<!-- /wp:group -->