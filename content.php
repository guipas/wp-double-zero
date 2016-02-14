<?php
/**
 * The default template for displaying content
 *
 * Used for both single and index/archive/search.
 */
?>


<article id="post-<?php the_ID(); ?>" <?php post_class('col-xs-12'); ?>>

	<div class="entry-header page-header">
		<?php echo is_singular() ? '<h1>' : '<h2><a title="'.get_the_title().'" href="'.get_permalink().'">'; ?>
			<?php the_title(); ?>
		<?php echo is_singular() ? '</h1>' : '</a></h2>'; ?>

		<div class="entry-meta">
			<div class='date'><?php echo __('Posted the : ','doublezero'); ?><span><?php the_time(__('F j, Y','doublezero')); ?></span></div>
			<div class='categories'><?php echo __('in : ','doublezero'); ?><span><?php the_category( ', ' ); ?></span></div>
			<div class="tags"><?php the_tags(__('Tags : ','doublezero'),', '); ?></div>
		</div>
	</div>

	<div class="entry-content">

		<?php
			the_content();
		?>
	</div><!-- .entry-content -->

	<footer class="entry-footer">
	</footer><!-- .entry-footer -->

</article><!-- #post-## -->
