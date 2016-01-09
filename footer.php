<?php
/**
 * The template for displaying the footer
 */
?>

</div><!-- .site-content -->

<footer id="colophon" class="site-footer" role="contentinfo">
	<div class="container">
		<div class="row">
			<?php if ( is_active_sidebar( 'footer-1' )  ) : ?>
				<div id="secondary" class="secondary col-xs-12">

					<div id="widget-area" class="widget-area" role="complementary">
						<?php dynamic_sidebar( 'footer-1' ); ?>
					</div><!-- .widget-area -->

				</div><!-- .secondary -->
			<?php endif; ?>
		</div>
	</div>
</footer><!-- .site-footer -->

<?php wp_footer(); ?>

</div><!-- .site -->
</body>
</html>
