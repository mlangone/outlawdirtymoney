<?php
/**
 *
 * ACF Blocks for use
 *
 */

add_action( 'acf/init', 'register_video_slider_block' );
function register_video_slider_block() {

	if ( function_exists( 'acf_register_block_type' ) ) {

		// Register Video Slider block
		acf_register_block_type( array(
			'name' 					=> 'video-slider',
			'title' 				=> __( 'Video Slider' ),
			'description' 			=> __( 'A custom Video Slider block.' ),
			'category' 				=> 'formatting',
			'icon'					=> 'layout',
			'keywords'				=> array( 'video', 'slider' ),
			'post_types'			=> array( 'post', 'page' ),
			'mode'					=> 'auto',
			// 'align'				    => 'wide',
			'render_template'		=> get_template_directory().'/includes/acf-layouts/blocks/video-slider.php',
			// 'render_callback'	=> 'video_slider_block_render_callback',
			// 'enqueue_style' 		=> get_template_directory_uri() . '/template-parts/blocks/video-slider/video-slider.css',
			// 'enqueue_script' 	=> get_template_directory_uri() . '/template-parts/blocks/video-slider/video-slider.js',
			// 'enqueue_assets' 	=> 'video_slider_block_enqueue_assets',
		));

	}

}

add_action( 'acf/init', 'register_home_testimonial_slider_block' );
function register_home_testimonial_slider_block() {

	if ( function_exists( 'acf_register_block_type' ) ) {

		// Register Home Testimonial Slider block
		acf_register_block_type( array(
			'name' 					=> 'home-testimonial-slider',
			'title' 				=> __( 'Home Testimonial Slider' ),
			'description' 			=> __( 'A custom Home Testimonial Slider block.' ),
			'category' 				=> 'formatting',
			'icon'					=> 'layout',
			'keywords'				=> array( 'home', 'testimonial', 'slider' ),
			'post_types'			=> array( 'post', 'page' ),
			'mode'					=> 'auto',
            //'align'				    => 'wide',
            'render_template'		=> get_template_directory().'/includes/acf-layouts/blocks/home-testimonial-slider.php',
			// 'render_callback'	=> 'home_testimonial_slider_block_render_callback',
			// 'enqueue_style' 		=> get_template_directory_uri() . '/template-parts/blocks/home-testimonial-slider/home-testimonial-slider.css',
			// 'enqueue_script' 	=> get_template_directory_uri() . '/template-parts/blocks/home-testimonial-slider/home-testimonial-slider.js',
			// 'enqueue_assets' 	=> 'home_testimonial_slider_block_enqueue_assets',
		));

	}

}