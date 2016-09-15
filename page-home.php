<?php
/*Template Name: Home Page*/
$services_title			=	get_field('services_title');
$section_title_1		=	get_field('section_title_1');
$section_description_1	=	get_field('section_description_1');
$section_title_2		=	get_field('section_title_2');
$section_description_2	=	get_field('section_description_2');
$section_title_3		=	get_field('section_title_3');
$section_description_3	=	get_field('section_description_3');
$portfolio				=	get_field('portfolio');
?>

<?php get_header(); ?>

<!-- Service Content
=================================================================== -->
<section id="service-content">	
	<div class="container">	
		<h2><?php echo $services_title; ?></h2>	
		<div class="row">
			<div class="col-sm-4">
				<img class="svg-resize" src="<?php bloginfo('stylesheet_directory'); ?>/assets/img/icons/CMS2-clean.svg" alt="CMS Icon">
				<h3><?php echo $section_title_1; ?></h3>
				<p><?php echo $section_description_1; ?></p>	
			</div> <!-- col -->
			
			<div class="col-sm-4">
				<img class="svg-resize" src="<?php bloginfo('stylesheet_directory'); ?>/assets/img/icons/responsive-clean.svg" alt="Responsive Icon">
				<h3><?php echo $section_title_2; ?></h3>
				<p><?php echo $section_description_2; ?></p>						
			</div> <!-- col -->
			
			<div class="col-sm-4">
				<img class="svg-resize" src="<?php bloginfo('stylesheet_directory'); ?>/assets/img/icons/stats55.svg" alt="Business Icons">
				<h3><?php echo $section_title_3; ?></h3>
				<p><?php echo $section_description_3; ?></p>	
			</div> <!-- col -->
		</div> <!-- row -->
	</div> <!-- container -->
</section> <!-- section intro-->

<!-- REVIEWS 
=================================================================== -->
<!-- <section id="reviews">
	<div class="container">
		<div class="row">
			<div class="col-sm-6 col-sm-offset-3">
				<?php if( function_exists('cyclone_slider') ) cyclone_slider('test-1'); ?>
			</div>
		</div> <!-- row -->
	</div> <!-- container -->
</section> <!-- section reviews--> 

<!-- PORTFOLIO
=================================================================== -->
<section id="portfolio">
	<div class="container">
		<div class="row">
			<div class="col-sm-12">
				<?php echo $portfolio; ?>
			</div>
		</div> <!-- row -->
	</div> <!-- container -->
</section>  

<!-- GOTO ACTION BUTTON
=================================================================== -->
<section id="goto_action">
	<div class="container">
		<div class="row">
			<div class="col-sm-8 col-sm-offset-2">
				<hr>
				<h2>Interested in getting your website ready and developed!</h2>
				<button class="btn btn-info btn-lg"><a href="contact">Get in Touch</a></button>
				<hr>
			</div> <!-- col -->
		</div> <!-- row -->
	</div> <!-- container -->
</section> <!-- section goto_action-->
	

<?php get_footer(); ?>
