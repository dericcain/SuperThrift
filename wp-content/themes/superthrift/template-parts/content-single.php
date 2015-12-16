<?php
/**
 * Template part for displaying single posts.
 *
 * @package superthrift
 */

?>

<article id="post-<?php the_ID(); ?>" <?php post_class('blog-post'); ?>>
	<header class="entry-header">
        <?php 
            if (has_post_thumbnail()) {
                the_post_thumbnail('large');
            }
        ?>
		<?php the_title( '<h1 class="entry-title">', '</h1>' ); ?>

		<div class="entry-meta">
			<?php superthrift_posted_on(); ?>
		</div><!-- .entry-meta -->
	</header><!-- .entry-header -->
  
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

</article><!-- #post-## -->

