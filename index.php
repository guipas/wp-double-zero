<?php
/**
 * The main template file
 *
 *
 */

get_header(); ?>

	<div class="sub-header">
		<div class="container">
			<div class="row">
				<div class="col-xs-12">
					<div class="sh-picto"></div>
					<?php if ( have_posts() ) : ?>
						<h1 class="page-title screen-reader-text"><?php single_post_title(); ?></h1>
					<?php endif; ?>
				</div>
			</div>
		</div>

	</div>

	<div id="primary" class="content-area container">
		<main id="main" class="site-main row" role="main">
		<div class="col-xs-12">

			
		<div>
			<?php if(function_exists("doublezero_custom_breadcrumbs")) doublezero_custom_breadcrumbs(); ?>
		</div>

		<?php if ( have_posts() ) : ?>

			<?php
			// Start the loop.
			while ( have_posts() ) : the_post();

				/*
				 * Include the Post-Format-specific template for the content.
				 * If you want to override this in a child theme, then include a file
				 * called content-___.php (where ___ is the Post Format name) and that will be used instead.
				 */
				get_template_part( 'content' );

			// End the loop.
			endwhile;

			// Previous/next page navigation.
			the_posts_pagination( array(
				'prev_text'          => __( 'Previous page', 'doublezero' ),
				'next_text'          => __( 'Next page', 'doublezero' ),
				'before_page_number' => '<span class="meta-nav screen-reader-text">' . __( 'Page', 'doublezero' ) . ' </span>',
			) );

		// If no content, include the "No posts found" template.
		else :
			get_template_part( 'content', 'none' );

		endif;
		?>

		</div>
		</main><!-- .site-main -->
	</div><!-- .content-area -->

<?php get_footer(); ?>