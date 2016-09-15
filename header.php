<?php
/**
 * The header for our theme.
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package SeyKad
 */
$lead_title			 	=	get_field('lead_title');
$secondary_title	 	=	get_field('secondary_title');
?>
		<!DOCTYPE html>
		<html <?php language_attributes(); ?>>
		<head>
		<meta charset="<?php bloginfo( 'charset' ); ?>">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<link rel="profile" href="http://gmpg.org/xfn/11">
		<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
		
		<!-- BOOTSTRAP CORE CSS -->
		<link href="<?php bloginfo('stylesheet_directory'); ?>/assets/css/bootstrap.min.css" rel="stylesheet">	
		
		<!-- FONT AWESOME ICONS -->
		<link href="<?php bloginfo('stylesheet_directory'); ?>/assets/css/font-awesome/css/font-awesome.min.css" rel="stylesheet">
		
		<!--RALEWAYS GFONT -->
		<link href='https://fonts.googleapis.com/css?family=Poiret+One|Ubuntu:400,700,400italic' rel='stylesheet' type='text/css'>
		
<?php wp_head(); ?>

		<!-- HTML5 shiv and Respond.js IE8 support of HTML5 elements and media queries -->
		<!--[if lt IE 9]>
		<script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
		<script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
		<![endif]-->
</head>

<body <?php body_class(); ?>>
<div id="page" class="hfeed site">
	<a class="skip-link screen-reader-text" href="#content"><?php esc_html_e( 'Skip to content', 'seykad' ); ?></a>
	
	<?php if ( is_front_page() ) {?>
	<!-- HEADER 
	=================================================================== -->
	<header class="site-header" role="banner">		
	
		<!-- NAVBAR 
		=================================================================== -->
		
		<!-- INTRODUCTION
		=================================================================== -->
		<section id="introduction">
			<div class="container-fluid">	
				<div class="container">	
					<div class="navbar-wrapper">
						<div class="navbar navbar-default navbar-static-top" role="navigation">
							<div class="navbar-header">
								<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target=".navbar-collapse">
									<span class="sr-only">Toggle navigation</span>
									<span class="icon-bar"></span>
									<span class="icon-bar"></span>
									<span class="icon-bar"></span>
								</button>	
									<a href="#"><img class="logo-image" src="<?php bloginfo('stylesheet_directory'); ?>/assets/img/seykad-logo_circle-white.svg" alt="Imran Kaderbhai Design"></a>
							</div> <!--navbar-header -->
							
							<?php 
								wp_nav_menu( array(
								
									'theme_location'	=> 'primary',
									'container'			=> 'nav',
									'container_class'	=> 'navbar-collapse collapse',
									'menu_class'		=> 'nav navbar-nav navbar-right'
								)	);
							?>
							
						</div> <!-- navbar -->
					</div> <!-- navbar-wrapper -->
				</div> <!-- container -->
			</div> <!-- container-fluid -->

			<div class="row" id="header-div">
				<div class="col-sm-12" id="header">
					<div id="header-div">
						<div id="header">
							<h1><?php echo $lead_title; ?></h1>
							<h2><?php echo $secondary_title; ?></h2>
						</div>
					</div>
				</div> <!-- col -->
			</div> <!-- row -->
		</section> <!-- section intro-->
	</header> <!-- header -->
	<?php }	else {?>
	<!-- HEADER 
	=================================================================== -->
	<header class="site-header" role="banner">		
	
		<!-- NAVBAR 
		=================================================================== -->
		<div class="container-fluid" id="nav-no-home">	
			<div class="container">	
				<div class="navbar-wrapper">
					<div class="navbar navbar-default navbar-static-top" role="navigation">
						<div class="navbar-header">
							<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target=".navbar-collapse">
								<span class="sr-only">Toggle navigation</span>
								<span class="icon-bar"></span>
								<span class="icon-bar"></span>
								<span class="icon-bar"></span>
							</button>	
								<a href="#"><img class="logo-image" src="<?php bloginfo('stylesheet_directory'); ?>/assets/img/seykad-logo_circle-white.svg	" alt="Imran Kaderbhai Design"></a>
						</div> <!--navbar-header -->
						
						<?php 
							wp_nav_menu( array(
							
								'theme_location'	=> 'primary',
								'container'			=> 'nav',
								'container_class'	=> 'navbar-collapse collapse',
								'menu_class'		=> 'nav navbar-nav navbar-right'
							)	);
						?>
						
					</div> <!-- navbar -->
				</div> <!-- navbar-wrapper -->
			</div> <!-- container -->
		</div> <!-- container-fluid -->
	</header> <!-- header -->
	<?php } ?>
