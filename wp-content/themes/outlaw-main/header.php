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
		<meta class="foundation-mq">
		
		<!-- If Site Icon isn't set in customizer -->
		<?php if ( ! function_exists( 'has_site_icon' ) || ! has_site_icon() ) { ?>
			<!-- Icons & Favicons -->
			<link rel="icon" href="<?php echo get_template_directory_uri(); ?>/favicon.png">
			<link href="<?php echo get_template_directory_uri(); ?>/assets/images/apple-icon-touch.png" rel="apple-touch-icon" />	
	    <?php } ?>

		<link rel="pingback" href="<?php bloginfo('pingback_url'); ?>">

		<?php wp_head(); ?>

	</head>
			
	<body <?php body_class(); ?>>

		<div class="off-canvas-wrapper">

			<!-- Load off-canvas container. Feel free to remove if not using. -->			
			<?php get_template_part( 'parts/content', 'offcanvas' ); ?>
			
			<div class="off-canvas-content" data-off-canvas-content>
			<div class="top-header show-for-tablet">
				<div class="quick-items">
					<div class="grid-container">
						<div class="grid-x align-middle">
							<div class="cell tablet-6">
							<nav class="menu mobile-footer" role="navigation" aria-label="<?php _e( 'Menu', 'jointswp' ); ?>">
								<?php joints_language_links(); ?>
							</nav>
								<ul id="social" class="mobile-social">
									<li class="social-icon">
										<a href="#" class="icon-twitter">
										<span aria-hidden="true" class="show-for-sr">Outlaw Dirty Money Twitter</span>
										</a>
									</li>
									<li class="social-icon">
										<a href="#" class="icon-linkedin">
										<span aria-hidden="true" class="show-for-sr">Outlaw Dirty Money LinkedIn</span>
										</a>
									</li>
									<li class="social-icon">
										<a href="#" class="icon-google">
										<span aria-hidden="true" class="show-for-sr">Outlaw Dirty Money Google</span>
										</a>
									</li>
									<li class="social-icon">
										<a href="#" class="icon-facebook">
										<span aria-hidden="true" class="show-for-sr">Outlaw Dirty Money Facebook</span>
										</a>
									</li>
								</ul>
							</div>
							<div class="cell tablet-6">
							<div class="flex-cta">
								<div class="top-sign">
									<a type="button" class="button red small" href="/where-to-sign/">Sign the Petition</a>
								</div>
								<div class="top-volunteer">
									<a type="button" class="button red small" href="/volunteer/">Volunteer</a>
								</div>
								<div class="top-donate">
									<a type="button" class="button blue small" href="https://secure.actblue.com/donate/outlawdirtymoneyaz?refcode=website" target="_blank">Donate</a>
								</div>
							</div>
							
							</div>
						</div>
					</div>
				</div>
			</div>	
				<header class="header" role="banner">
							
					 <!-- This navs will be applied to the topbar, above all content 
						  To see additional nav styles, visit the /parts directory -->
					 <?php get_template_part( 'parts/nav', 'offcanvas-topbar' ); ?>
	 	
				</header> <!-- end .header -->