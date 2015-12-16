<?php
/*
Template Name: Page with hero header
*/
?>
<?php get_header(); ?>

    <div id="content-body" class="hero">
        <div id="primary" class="content-area single-page">
            <main id="main" class="site-main" role="main">

                <?php while ( have_posts() ) : the_post(); ?>

                  <article id="post-<?php the_ID(); ?>" <?php post_class('blog-post'); ?>>
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
                    <header class="hero-header entry-header" style="<?php echo $styles; ?>">
                        <?php the_title( '<h1 class="entry-title">', '</h1>' ); ?>
                    </header>
                    
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
                  </article><!-- #post-## -->

                <?php endwhile; // End of the loop. ?>

            </main><!-- #main -->
        </div><!-- #primary -->
    </div>
    
    
<?php get_footer(); ?>
