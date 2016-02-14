<?php
/**
 * The main template file
 *
 *
 */

get_header(); ?>

	<div id="primary" class="content-area container">
		<main id="main" class="site-main row" role="main">

            <div class="col-xs-12 breadcrumb-wrapper">
                <?php 
                    //breadcumbs everywhere except on front page
                    if(!is_front_page()) doublezero_custom_breadcrumbs();
                    ?>
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

        			//Pagination
        			doublezero_wp_bootstrap_pagination();

        		// If no content, include the "No posts found" template (if there's one)
        		else :
        			get_template_part( 'content', 'none' );

        		endif;
        		?>

    		
		</main><!-- .site-main -->
	</div><!-- .content-area -->

<?php get_footer(); ?>
