<?php
/*
Template Name: Request a pickup
*/
?>
<?php get_header(); ?>

    <div id="content-body" class="hero">
        <div id="primary" class="content-area single-page">
            <main id="main" class="site-main" role="main">
                <?php while ( have_posts() ) : the_post(); ?>

                  <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
                    <?php 
                        if(!empty(wp_get_attachment_url(get_post_thumbnail_id($post->ID)))) {
                            $image = wp_get_attachment_url(get_post_thumbnail_id($post->ID));
                        } else {
                            $image = get_template_directory_uri() . '/img/hero.jpg';
                        }
                    ?>
                    <?php
                    $metas = get_post_meta(get_the_ID());
                    $hero_height = isset($metas['hero_height'][0]) ? $metas['hero_height'][0] : 'undefined';
                    
                    $styles = '';
                    
                    if ($image) {
                      $styles = 'background-image: url(' . $image . ');';
                    }
                    
                    if (is_numeric($hero_height)) {
                        $styles .= 'line-height: ' . $hero_height . 'px;';
                    }
                              
                    ?>
                    <div id="section-pickup">
                      <div class="container">
                      
                        <div class="row">
                        
                          <div class="col-md-6 col-left">
                            <p class="text-center"><svg class="icon-svg"><use xlink:href="#color-truck" /></svg></p>
                            <h1 class="text-center text-white">Request Pickup for Donation</h1>
                            <p class="text-center">We love to serve our customers! If you have an item that is too large to drop off at one of our drop-off locations, we can come pick it up. Please fill out the form and we will coordinate a pick up as soon as we can.</p>
                          </div>
                          
                          <div class="col-md-6 col-right">
                          <div id="pickup-form">
                          <?php
                          $pickup_shortcode = get_theme_mod('pickup_shortcode');
                          if (!empty($pickup_shortcode)) {
                            echo do_shortcode($pickup_shortcode);
                          }
                          ?>
                          </div>
                          </div>
                        </div>
                        
                        
                      </div>
                    </div>
                    <?php 
                    $content = get_the_content(); 
                    if (!empty($content)):
                    ?>
                    <div class="divide40"></div>
                    <div class="container">
                      <div class="entry-content">
                        <?php the_content(); ?>
                        <?php
                          wp_link_pages( array(
                            'before' => '<div class="page-links">' . esc_html__( 'Pages:', 'superthrift' ),
                            'after'  => '</div>',
                          ) );
                        ?>
                      </div><!-- .entry-content -->

                      <footer class="entry-footer">
                        <?php superthrift_entry_footer(); ?>
                      </footer><!-- .entry-footer -->
                    </div>
                    <div class="divide40"></div>
                    <?php endif; ?>
                  </article><!-- #post-## -->

                <?php endwhile; // End of the loop. ?>

            </main><!-- #main -->
        </div><!-- #primary -->
    </div>

<?php
echo '<script>';
echo 'gmapStoreData = '. json_encode(get_map_data_stores()) . ';';
echo 'gmapDropboxData = '. json_encode(get_map_data_dropboxes()) . ';';
echo '</script>';
wp_enqueue_script( 'google-map-v3' );
wp_enqueue_script( 'gmaps' );
wp_enqueue_script( 'js-pickup' );
?>
<?php get_footer(); ?>
