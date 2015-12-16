<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the #content div and all content after
 *
 * @package superthrift
 */

?>
          <section id="section-coupon" class="text-center">
            <div class="container">
              <p class="text-center"><svg class="icon-svg"><use xlink:href="#color-price-tag-usd" /></svg></p>
              <h2>Get great deals!</h2>
              <p>Subscribe to SuperThrift for the latest news, deals, and coupons.</p>
              <?php
              $coupon_shortcode = get_theme_mod('coupon_shortcode');
              if (!empty($coupon_shortcode)) {
                echo do_shortcode($coupon_shortcode);
              }
              ?>
            </div>
          </section>

         <footer id="footer">
          <div id="section-footer">
            <div class="container">

                <div class="row">
                    <div class="col-md-2 col-sm-12">
                        <div class="footer-col">
                            <?php dynamic_sidebar( 'sidebar-1' ); ?>
                        </div>                        
                    </div><!--footer col-->
                    <div class="col-md-6 col-sm-12">
                      <div class="footer-col">
                          <h3>Our locations</h3>
                          
                          <?php
                            $storesList = get_map_data_stores();
                            $counter = 0;
                            foreach ($storesList as $store):
                          ?>
                          <?php if ($counter % 2 == 0): ?>
                          <div class="row m-b-xs">
                          <?php endif; ?>
                            <div class="col-xs-6">
                              <strong><i class="fa fa-map-marker"></i> <?php echo $store['name']; ?></strong><br>
                              <?php echo $store['address'] . '<br>' . $store['city'] . ', ' . $store['state'] . ' ' . $store['zip'] . '<br>' . $store['phone']; ?>
                            </div>
                          <?php if ($counter % 2 == 1): ?>
                            </div>
                          <?php endif; ?>
                          <?php 
                          ++$counter;
                          endforeach; ?>
                          <?php if ($counter % 2 == 1): ?>
                          </div>
                          <?php endif; ?>                          
                      </div>                        
                    </div>
                    <div class="col-md-4 col-sm-12">
                      <div class="footer-col">
                        <?php dynamic_sidebar( 'sidebar-3' ); ?>
                      </div>
                    </div>
                </div>
            </div>
          </div>
          <div id="section-footer-2">
            <div class="container">
              <ul id="footer-socials" class="pull-left">
              <?php
                  wp_nav_menu( array(
                    'theme_location' => 'footer-social',
                    'depth' => 1,
                    'fallback_cb' => 'wp_page_menu',
                    'container' => false,
                    'items_wrap' => '%3$s'
                    )
                  );
              ?>
              </ul>
              <ul id="footer-links">
              <?php
                  wp_nav_menu( array(
                    'theme_location' => 'footer-menu',
                    'depth' => 1,
                    'fallback_cb' => 'wp_page_menu',
                    'container' => false,
                    'items_wrap' => '%3$s'
                    )
                  );
              ?>
              </ul>
              <div class="clearfix"></div>
              <p id="footer-copyright">Copyright 2015 - SuperThrift.com - All Rights Reserved</p>
            </div>
          </div>
        </footer><!--default footer end here-->

        <script>
          storeIconPath = '<?php echo get_template_directory_uri() . '/img/marker-red.png'; ?>';
          dropboxIconPath = '<?php echo get_template_directory_uri() . '/img/marker-blue.png'; ?>';
          positionIconPath = '<?php echo get_template_directory_uri() . '/img/marker-orange.png'; ?>';
        </script>
        <?php wp_footer(); ?>

</body>
</html>
