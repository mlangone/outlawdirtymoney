<?php 
/**
 * The template for displaying all pages
 *
 * This is the template that displays all pages by default.
 */

get_header(); ?>
	<div class="grid-x grid-padding-x grid-margin-x">
		<div class="cell"> this should be standard wide</div>
		<div class="cell" data-attribute="alignwide"> should align wide</div>
	</div>
	<div class="content">
	
		<div class="inner-content grid-x grid-margin-x grid-padding-x align-center">
	
		    <main class="main small-12 tablet-10 cell" role="main">
				
				<?php if (have_posts()) : while (have_posts()) : the_post(); ?>

					<?php get_template_part( 'parts/loop', 'page' ); ?>
					
				<?php endwhile; endif; ?>							

			</main> <!-- end #main -->
		    
		</div> <!-- end #inner-content -->
	
	</div> <!-- end #content -->

	<?php if ( have_rows( 'pre_footer_sections' ) ) : 
		while ( have_rows( 'pre_footer_sections' ) ) : the_row(); ?>
		<?php if ( get_sub_field( 'look_and_feel_your_best' ) == 1 ) { 
		  get_template_part( 'includes/acf-layouts/footer/cta', 'look-feel'); 
		} else { 
		 // echo 'false'; 
		} ?>
		<?php if ( get_sub_field( 'could_hormones' ) == 1 ) { 
		  get_template_part( 'includes/acf-layouts/footer/cta', 'could-hormones'); 
		} else { 
		 // echo 'false'; 
		} ?>
	<?php endwhile; endif; ?>
	
<?php get_footer(); ?>