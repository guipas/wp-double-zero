<?php
/**
 * The template for displaying the header
 */
?><!DOCTYPE html>
<html <?php language_attributes(); ?> class="no-js">
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width">
	<link rel="profile" href="http://gmpg.org/xfn/11">
	<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">

	
	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>

	<header class="container">
		<div class="header-inside jumbotron">
			<div class="header-row row">
				<div class="site-logo">
					<div class="logo-div">
						<a title="<?php bloginfo( 'name' ); ?>" href="<?php echo esc_url( home_url( '/' ) ); ?>"><img src="<?php echo get_header_image(); ?>" alt="<?php bloginfo( 'name' ); ?>"></a>
					</div>
				</div>

	            <div class="site-title">
	            	<?php echo is_singular() ? '<h2>' : '<h1>'; ?>
						<?php bloginfo( 'name' ); ?>
					<?php echo is_singular() ? '</h2>' : '</h1>'; ?>
	                <div class="description"><?php bloginfo( 'description' ); ?></div>
	            </div>
			</div>
		</div>
	</header>

	<div class="nav-wrapper container">
		<nav class="navbar navbar-default">
			<div class="nav-inside">
				<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
			        <span class="sr-only">Toggle navigation</span>
			        <span class="icon-bar"></span>
			        <span class="icon-bar"></span>
			        <span class="icon-bar"></span>
			     </button>
				<?php 
					 wp_nav_menu( array(
			            'menu'              => 'top',
			            'theme_location'    => 'top',
			            'depth'             => 2,
			            'container'         => 'div',
			            'container_class'   => 'collapse navbar-collapse',
			    		'container_id'      => 'bs-example-navbar-collapse-1',
			            'menu_class'        => 'nav navbar-nav',
			            'fallback_cb'       => 'wp_bootstrap_navwalker::fallback',
			            'walker'            => new wp_bootstrap_navwalker()
			            )
			        );
				?>
			</div>
		</nav>
	</div>
	

	<div id="content" class="site-content">
