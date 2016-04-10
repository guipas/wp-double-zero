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
                            <?php the_content(); ?>
                        </div><!-- .entry-content -->

                        <footer class="entry-footer"></footer><!-- .entry-footer -->

                    </article><!-- #post-## -->

                    <?php
        			// End the loop.
        			endwhile;

        			//Pagination
        			doublezero_wp_bootstrap_pagination();

        		// If no content, include the "No posts found" template (if there's one)
        		else :
        			echo __('Sorry, no post found !', 'doublezero');

        		endif;
        		?>

    		
		</main><!-- .site-main -->
	</div><!-- .content-area -->

<?php get_footer(); ?>
