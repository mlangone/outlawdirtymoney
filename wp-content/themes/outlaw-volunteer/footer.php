<?php
/**
 * The template for displaying the footer. 
 *
 * Contains closing divs for header.php.
 *
 * For more info: https://developer.wordpress.org/themes/basics/template-files/#template-partials
 */			
 ?>
						
				<footer class="footer" role="contentinfo">
					<div class="grid-container">
						
						<div class="inner-footer grid-x grid-margin-x grid-padding-x align-middle">
							<div class="cell small-12 show-for-medium">
								<div class="footer-logo">
									<nav class="menu" role="navigation" aria-label="<?php _e( 'Menu', 'jointswp' ); ?>">
										<a class="footer-main-logo hide-for-medium" href="<?php echo home_url(); ?>">
										</a>
										<?php joints_footer_links(); ?>
									</nav>
								</div>

							</div>
							<div class="small-12 text-center align-center hide-for-medium">
							<nav class="menu mobile-footer" role="navigation" aria-label="<?php _e( 'Menu', 'jointswp' ); ?>">
							<?php joints_mobile_footer_links(); ?>
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
						</div>

						<!-- Contact Us and Social Stack -->


						<hr class="seperator">

						<div class="grid-x grid-margin-x grid-padding-x align-middle subfooter-height">
							<div class="cell small-12 text-center align-center hide-for-tablet">
								<nav class="menu company-Links-mobile" role="navigation" aria-label="<?php _e( 'Menu', 'jointswp' ); ?>">
										<?php joints_company_links(); ?>
								</nav>
								<p class="source-org copyright">&copy; <?php echo date('Y'); ?> <?php bloginfo('name'); ?>. All Rights Reserved</p>
							</div>
							<div class="cell auto align-center text-center hide-for-tablet">
								
								<a class="footer-mobile-logo" href="<?php echo home_url(); ?>">
								</a>
							</div>
							<div class="small-12 tablet-9 cell show-for-tablet">
								<nav class="menu company-Links" role="navigation" aria-label="<?php _e( 'Menu', 'jointswp' ); ?>">
								<p class="source-org copyright">&copy; <?php echo date('Y'); ?> <?php bloginfo('name'); ?>. All Rights Reserved</p>
									<?php joints_company_links(); ?>
								</nav>

							</div>
							<div class="small-12 tablet-3 cell show-for-tablet">
								<nav class="menu" role="navigation" aria-label="<?php _e( 'Menu', 'jointswp' ); ?>">
									<ul id="social">
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
								</nav>
							</div>
						</div>
						
					</div>			
				</footer> 			
			</div>				
		</div> 
		<?php wp_footer(); ?>		
	</body>	
</html> 
