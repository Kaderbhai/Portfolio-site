<?php
/**
 * The main template file.
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package SeyKad
 */

get_header(); ?>

	<!-- PAGE INTRO
	=================================================================== -->
	<section id="page-intro">
		<div class="container">
			<div class="row">
				<div class="col-sm-6 col-sm-offset-3">
				<h1><hr/>Blog<hr/></h1>
				</div> <!-- col -->
			</div> <!-- row -->
		</div> <!-- container -->
	</section> <!-- section page-intro -->
	
	<!-- BLOG CONTENT
	============================================================== -->
	<section id="blog">
		<div class="container">
			<div class="row">
				<main class="col-sm-8" id="blog-col" role="main">
					<?php if ( have_posts() ) : ?>
					
					<?php if ( is_home() && ! is_front_page() ) : ?>
						<header>
							<h1 class="page-title screen-reader-text"><?php single_post_title(); ?></h1>
						</header>
					<?php endif; ?>

					<?php /* Start the Loop */ ?>
					<?php while ( have_posts() ) : the_post(); ?>

						<?php

							/*
							 * Include the Post-Format-specific template for the content.
							 * If you want to override this in a child theme, then include a file
							 * called content-___.php (where ___ is the Post Format name) and that will be used instead.
							 */
							get_template_part( 'template-parts/content', get_post_format() );
						?>

					<?php endwhile; ?>

					<?php the_posts_navigation(); ?>

					<?php else : ?>

					<?php get_template_part( 'template-parts/content', 'none' ); ?>

					<?php endif; ?>
								
				</main> <!-- content -->
				
				<!-- SIDEBAR
				============================================================== -->
				<aside class="col-sm-4 col-sm-offset- sidebar">
					<?php get_sidebar(); ?>
				</aside>
				
				
			</div> <!-- row -->
		</div> <!-- container -->
	</section> <!-- section blog -->
						
<?php get_footer(); ?>
