<?php get_header(); ?>

    <div id="content-body" class="hero">
        <div id="primary" class="content-area single-page single-testimonial">
            <main id="main" class="site-main" role="main">

                <?php while ( have_posts() ) : the_post(); ?>

                  <article id="post-<?php the_ID(); ?>" <?php post_class('blog-post'); ?>>
                    <?php 
                        $metas = get_post_meta(get_the_ID());
                        $name = isset($metas['testimonial_name'][0]) ? $metas['testimonial_name'][0] : null;
                        $info = isset($metas['testimonial_sub'][0]) ? $metas['testimonial_sub'][0] : null;
                                
                        if(!empty(wp_get_attachment_url(get_post_thumbnail_id($post->ID)))) {
                            $image = wp_get_attachment_url(get_post_thumbnail_id($post->ID));
                        } else {
                            $image = get_template_directory_uri() . '/img/hero.jpg';
                        }
                    ?>

                    <div class="testimony-image testimony-bg-1">
                        <?php
                            if (has_post_thumbnail()) {
                                the_post_thumbnail('medium', array('class' => 'img-responsive img-circle'));
                            }
                        ?>
                    </div>

                    <div class="container">
                      <div class="entry-content">
                        <h1 class="testimony-title text-center"><?php the_title(); ?><small><?php echo $info; ?></small></h1>
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
                  </article><!-- #post-## -->

                <?php endwhile; // End of the loop. ?>

            </main><!-- #main -->
        </div><!-- #primary -->
    </div>
    
    
<?php get_footer(); ?>
