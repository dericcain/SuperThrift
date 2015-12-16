<?php
/*
Template Name: Testimonies
*/
?>
<?php get_header(); ?>

    <div id="content-body" class="hero">
        <div id="primary" class="content-area single-page page-testimonial">
            <main id="main" class="site-main" role="main">

                <?php while ( have_posts() ) : the_post(); ?>

                <?php
                $metas = get_post_meta(get_the_ID());
                $title_style = isset($metas['title_style'][0]) ? $metas['title_style'][0] : 'default';
                ?>
                <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
                    <?php 
                        if(!empty(wp_get_attachment_url(get_post_thumbnail_id($post->ID)))) {
                            $image = wp_get_attachment_url(get_post_thumbnail_id($post->ID));
                        } else {
                            $image = get_template_directory_uri() . '/img/heroslc.jpg';
                        }
                    ?>

                    <header class="hero-header entry-header" style="background-image:url('<?php echo $image; ?>')">
                        <?php the_title( '<h1 class="entry-title">', '</h1>' ); ?>
                    </header>
                    
                    <div class="container">
                    
                        <div id="testimony-content" class="entry-content">
                            <div class="text-center"><svg class="icon-svg"><use xlink:href="#color-speech-bubble" /></svg></div>
                            <h2 class="text-center">Your Purchase. Their Success.</h2>
                            <p class="text-center fs-18 mini-container">Because you donated and shopped at SuperThrift, SuperThrift employees and Teen Challenge students are excelling through their recovery programs. Read their stories.</p>
                            <div class="divide40"></div>
                            
                            <?php 
                            
                            $testimonies = new WP_Query('post_type=testimonial&posts_per_page=0&orderby=rand');
                            
                            $index = 0;
                            
                            while ($testimonies->have_posts()):
                                $background = $index % 4 + 1;
                                $testimonies->the_post();
                                
                                $metas = get_post_meta(get_the_ID());
                                $name = isset($metas['testimonial_name'][0]) ? $metas['testimonial_name'][0] : null;
                                $info = isset($metas['testimonial_sub'][0]) ? $metas['testimonial_sub'][0] : null;
                                $excerpt = isset($metas['excerpt'][0]) ? $metas['excerpt'][0] : get_the_excerpt();
                                $is_video = ($metas['is_video_testimony'][0]) ? true : false;
                                    
                                if ($background == 1) {
                                  echo '<div class="row testimony-row equalize-row">'; // open row
                                }
                            ?>
                            
                                <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12 testimony-col">
                                  <div class="testimony-wrap equalize-col">
     
                                    <div class="testimony-image testimony-bg-<?php echo $background; ?>">
                                        <?php
                                            if (has_post_thumbnail()) {
                                                the_post_thumbnail('testimonial', array('class' => 'img-responsive img-circle'));
                                            }
                                        ?>
                                    </div>
                                    
                                    <div class="testimony-content">
           
                                      <h4 class="testimony-title"><?php the_title(); ?><small><?php echo $info; ?></small></h4>
                                      <?php echo '<p>' . $excerpt . '</p>'; ?>
                                      <a href="<?php echo get_the_permalink(); ?>" class="testimony-read-more"><?php echo ($is_video) ? 'Watch video...' : 'Read more...'; ?></a>
                                              
                                    </div>

                                  </div>
                                </div>
                                
                                <?php 
                                
                                ++$index;
                                
                                if ($background == 4) {
                                  echo '</div>'; // close row
                                }
                                endwhile; ?>
                            </div>

                            <?php wp_reset_postdata(); ?>
                            
                        </div><!-- .entry-content -->
                    
                    </div>
                </article><!-- #post-## -->



                <?php endwhile; // End of the loop. ?>

            </main><!-- #main -->
        </div><!-- #primary -->
    </div>
    
    
<?php get_footer(); ?>
