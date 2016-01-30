<?php
/**
 * The default template for displaying content
 *
 * Used for both single and index/archive/search.
 */
?>


<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

	<div class="entry-header">
		<?php echo is_singular() ? '<h1>' : '<h2><a title="'.get_the_title().'" href="'.get_permalink().'">'; ?>
			<?php the_title(); ?>
		<?php echo is_singular() ? '</h1>' : '</a></h2>'; ?>

	</div>

	<div class="entry-content">
		<?php
			the_content();
		?>
	</div><!-- .entry-content -->

	<footer class="entry-footer">
	</footer><!-- .entry-footer -->

</article><!-- #post-## -->
