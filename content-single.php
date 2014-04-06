<?php
/**
 * @package fairhaven
 */
?>
<div class="row">
  <div class="large-10 small-centered columns">
    <article id="post-<?php the_ID(); ?>">
    	<header class="entry-header">
    		<h1 class="entry-title"><?php the_title(); ?></h1>
    		<div class="entry-meta">
			<?php echo 'Posted ' . human_time_diff( get_the_time('U'), current_time('timestamp') ) . ' ago '; ?>
		</div><!-- .entry-meta -->
    	</header><!-- .entry-header -->
    
    	<div class="entry-content">
    		<?php the_content(); ?>
    		<?php
    			wp_link_pages( array(
    				'before' => '<div class="page-links">' . __( 'Pages:', 'fairhaven' ),
    				'after'  => '</div>',
    			) );
    		?>
    	</div><!-- .entry-content -->
    
    	<footer class="footer-meta">
    		<?php
    			/* translators: used between list items, there is a space after the comma */
    			$category_list = get_the_category_list( __( ', ', 'fairhaven' ) );
    
    			/* translators: used between list items, there is a space after the comma */
    			$tag_list = get_the_tag_list( '', __( ', ', 'fairhaven' ) );
    
    			if ( ! fairhaven_categorized_blog() ) {
    				// This blog only has 1 category so we just need to worry about tags in the meta text
    				if ( '' != $tag_list ) {
    					$meta_text = __( 'This entry was tagged %2$s.' , 'fairhaven' );
    				} 
    			} else {
    				// But this blog has loads of categories so we should probably display them here
    				if ( '' != $tag_list ) {
    					$meta_text = __( 'This entry was posted in %1$s and tagged %2$s,', 'fairhaven' );
    				} else {
    					$meta_text = __( 'This entry was posted in %1$s', 'fairhaven' );
    				}
    
    			} // end check for categories on this blog
    
    			printf(
    				$meta_text,
    				$category_list,
    				$tag_list,
    				get_permalink(),
    				the_title_attribute( 'echo=0' )
    			);
    		?>
    
    		<?php edit_post_link( __( 'Edit', 'fairhaven' ), '<span class="edit-link">', '</span>' ); ?>
    	</footer><!-- .entry-meta -->
    </article><!-- #post-## -->
  </div>
</div>