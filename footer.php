<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package SeyKad
 */

?>

<!-- FOOTER
=================================================================== -->
<footer id="footer">
	<div class="container">
		<div class="row row-1">
			<div class="col-sm-4">
				<ul class="list-unstyled list-inline">
					<li><a href="index">Home</a></li>
					<li><a href="about">About Us</a></li>
					<li><a href="blog">Blog</a></li>
					<li><a href="contact">Contact</a></li>
				</ul> <!-- ul -->
			</div> <!-- col -->
			
			<div class="col-sm-4">
				<a href="#"><img class="logo-image" src="/wp-content/themes/seykad/assets/img/seykad-logo_stacked-white.svg" alt="Imran Kaderbhai Design"></a>
			</div> <!-- col -->
			
			<div class="col-sm-4">
				<a href="https://www.facebook.com/" target="_blank" class="badge social facebook">
				<i class="fa fa-facebook-square"></i></a>
				
				<a href="https://www.facebook.com/" target="_blank" class="badge social gplus">
				<i class="fa fa-google-plus-square"></i></a>
				
				<a href="https://www.facebook.com/" target="_blank" class="badge social linkedin">
				<i class="fa fa-linkedin-square"></i></a>
			</div> <!-- col -->	
		</div> <!-- row -->
		<div class="row row-2">
			<div class="col-sm-8 col-sm-offset-2">
				&copy; SeyKad 2015 Freelance Web Development/Design.
		</div>			
		</div> <!-- row -->
	</div> <!-- container -->
</footer> <!-- footer -->

<!-- BOOTSTRAP CORE JAVASCRIPT 
=================================================================== -->
<script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
<script src="<?php bloginfo('template_directory'); ?>/assets/js/jquery-1.11.3.min.js"></script>
<script src="<?php bloginfo('template_directory'); ?>/assets/js/bootstrap.min.js"></script>
<script src="<?php bloginfo('template_directory'); ?>/assets/js/review-rotate.js"></script>

<?php wp_footer(); ?>

</body>
</html>
