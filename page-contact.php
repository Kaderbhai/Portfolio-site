<?php
/*Template Name: Contact*/
?>

<?php get_header(); ?>
			
	<!-- PAGE INTRO
	=================================================================== -->
	<section id="page-intro">
		<div class="container">
			<div class="row">
				<div class="col-sm-6 col-sm-offset-3">
				<h1><hr/>Contact Us<hr/></h1>
				</div> <!-- col -->
			</div> <!-- row -->
		</div> <!-- container -->
	</section> <!-- section page-intro -->
	
	<!-- MAIN CONTENT
	============================================================== -->
	<div class="container">
		<div class="row" id="primary">
		
			<!-- CONTACT
			============================================================== -->
			<section class="contact">
			
				<?php while (have_posts() ) : the_post(); ?>
									
					<?php the_content(); ?>
								
				<?php endwhile; ?>
			
			</section><!-- section contact -->
			<!-- SIDEBAR
			============================================================== -->
				<div class="col-sm-4" id="maps-height">
					<div id="map">
					</div> <!-- map -->
				</div> <!-- col -->
	
		</div> <!-- row  -->
	</div> <!-- container -->
	
	<script>
		var map;
		function initMap() {
		  map = new google.maps.Map(document.getElementById('map'), {
			center: {lat: 52.41548, lng: -4.08292},
			zoom: 11
		  });
		}

    </script>
    <script async defer src="https://maps.googleapis.com/maps/api/js?key=AIzaSyD6ow432nOhJDc6h9NT8ea0ggqUI7JNYRI&callback=initMap"></script>
		

<?php get_footer(); ?>
