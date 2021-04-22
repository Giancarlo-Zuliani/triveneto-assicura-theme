<?php
/**
 * The template for displaying the header
 *
 * This is the template that displays all of the <head> section
 *
 */
?>

<!doctype html>

  <html class="no-js"  <?php language_attributes(); ?>>

	<head>
		<meta charset="utf-8">
		
		<!-- Force IE to use the latest rendering engine available -->
		<meta http-equiv="X-UA-Compatible" content="IE=edge">

		<!-- Mobile Meta -->
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		
		<!-- If Site Icon isn't set in customizer -->
		<?php if ( ! function_exists( 'has_site_icon' ) || ! has_site_icon() ) { ?>
			<!-- Icons & Favicons -->
			<link rel="icon" href="<?php echo get_template_directory_uri(); ?>/favicon.png">
			<link href="<?php echo get_template_directory_uri(); ?>/assets/images/apple-icon-touch.png" rel="apple-touch-icon" />	
	    
		<?php } ?>
		<script src="https://unpkg.com/scrollreveal"></script>
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
		<script src="<?php echo get_template_directory_uri() . '/assets/scripts/js/script.js'?>" defer></script>
		<link rel="pingback" href="<?php bloginfo('pingback_url'); ?>">

		<?php wp_head(); ?>

	</head>
			<header>
				<nav id="menu" class="navbar navbar-expand-lg navbar-light bg-light fixed-top justify-content-between">
					<a href="<?php get_home_url()?>" class="navbar-brand d-none  d-lg-inline">
						<img src="https://www.trivenetoassicura.it/wp-content/themes/triveneto-theme/media/logo-triveneto-assicura.svg" alt="">
					</a>
					<a href="<?php get_home_url()?>" class="navbar-brand d-inline d-lg-none">
						<img src="https://www.trivenetoassicura.it/wp-content/themes/triveneto-theme/media/logo-triveneto-sm.svg" alt="">
					</a>
					<button id="ham-btn" class="navbar-toggler menu-toggler" type="button" data-toggle="collapse" data-target="#mobile-menu" aria-controls="mobile-menu" aria-expanded="false" aria-label="Toggle navigation">
						<div class="nav-icon">
							<div></div>
						</div>
					</button>
					
					<div id="mobile-menu" class="collapse navbar-collapse mobile-menu-nav justify-content-center" id="mobile-menu">
						<ul class="navbar-nav ml-auto mr-auto justify-content-center justify-content-lg-start d-none d-lg-flex">
			      			<li class="nav-item menu-item">
			        			<a class="nav-link menu-item-link" href="<?php echo get_home_url() . '/chi-siamo' ?>">Chi Siamo</a>
			      			</li>
			      			<li class="nav-item menu-item">
			        			<a class="nav-link menu-item-link" href="https://www.trivenetoassicura.it/servizi-assicurativi">Servizi assicurativi</a>
			      			</li>
			      			<li class="nav-item menu-item">
			        			<a class="nav-link menu-item-link" href="<?php echo get_home_url() . '/news' ?>">Novità</a>
			      			</li>
			      			<li class="nav-item menu-item">
			        			<a class="nav-link menu-item-link" href="https://www.trivenetoassicura.it/contatti">Contatti</a>
			      			</li>
			    		</ul>
						
						<div class="menu-info d-none d-lg-block">
							<a href="https://www.facebook.com/trivenetoassicura/" target="_blank" class="menu-social-link" rel="noopener"><i class="fab fa-facebook-f"></i></a>
							<a href="https://www.trivenetoassicura.it/contatti" class="btn-triveneto d-none d-lg-inline">Contattaci</a>
						</div>
			    		<div class="menu-container d-block d-lg-none">
							<ul class="navbar-nav ml-auto mr-auto justify-content-center justify-content-lg-start">
				      			<li class="nav-item menu-item">
				        			<a class="nav-link menu-item-link" href="<?php echo get_home_url() . '/chi-siamo' ?>">Chi Siamo</a>
				      			</li>
				      			<li class="nav-item menu-item">
				        			<a class="nav-link menu-item-link" href="https://www.trivenetoassicura.it/servizi-assicurativi">Servizi assicurativi</a>
				      			</li>
				      			<li class="nav-item menu-item">
				        			<a class="nav-link menu-item-link" href="<?php echo get_home_url() . '/news' ?>">Novità</a>
				      			</li>
				      			<li class="nav-item menu-item">
				        			<a class="nav-link menu-item-link" href="https://www.trivenetoassicura.it/contatti">Contatti</a>
				      			</li>
				    		</ul>
							
							<div class="menu-info">
								<a href="#" class="menu-social-link"><i class="fab fa-youtube"></i></a>
								<a href="https://www.facebook.com/trivenetoassicura/" target="_blank" class="menu-social-link" rel="noopener"><i class="fab fa-facebook-f"></i></a>
								<a href="https://www.trivenetoassicura.it/contatti" class="btn-triveneto d-none d-lg-inline">Contattaci</a>
							</div>
						</div>
				   </div>
				</nav>	
			</header>

			