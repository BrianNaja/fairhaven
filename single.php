<?php
/**
 * The Template for displaying all single posts.
 *
 * @package fairhaven
 */

get_header(); ?>

	<div id="primary" <?php post_class('post-single'); ?>>
	  	<main id="main" class="site-main" role="main">
    
	  	<?php while ( have_posts() ) : the_post(); ?>
    
	  		<?php get_template_part( 'content', 'single' ); ?>
    
	  	<div class="row">
			  <div class="large-10 small-centered columns" <?php fairhaven_content_nav( 'nav-below' ); ?></div>
      </div>
    
	  	<?php endwhile; // end of the loop. ?>
    
	  	</main><!-- #main -->
	</div><!-- #primary -->

<?php get_footer(); ?>