<?php
/**
 * The default template for displaying content
 *
 * Used for both single and index/archive/search.
 */
?>


<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

	<div class="entry-intro">
		<?php
			if(function_exists("the_field")) the_field("introduction");
		?>
	</div>

	<div class="entry-content">
		<?php
			/* translators: %s: Name of current post */
			the_content( sprintf(
				__( 'Continue reading %s', 'doublezero' ),
				the_title( '<span class="screen-reader-text">', '</span>', false )
			) );
			
		?>
	</div><!-- .entry-content -->

	<footer class="entry-footer">
	</footer><!-- .entry-footer -->

</article><!-- #post-## -->
