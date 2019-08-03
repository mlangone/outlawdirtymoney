<?php
/*
 * Our custom functions some of these may be broken off later
 */

namespace Langone_Gutenberg_Development;

// Enqueue CSS and JS
require_once( __DIR__ . '/lib/enqueue-assets.php' );

// Add Theme Support
require_once( __DIR__ . '/lib/theme-support.php' );

add_filter( 'body_class', __NAMESPACE__ . '\gutenberg_comp_body_class' );
/**
 * Add custom class for Gutenberg Compatible template
 */
function gutenberg_comp_body_class( $classes ) {
    if( is_page_template('template-full-width.php') || is_page_template('template-home-page.php') )
        $classes[] = 'gutenberg-compatible-template';
    return $classes;
}

// Add custom image size to dropdown when needed
// https://www.namehero.com/startup/how-to-add-custom-image-dimensions-to-wordpress-dropdowns/

add_action( 'after_setup_theme', __NAMESPACE__ . '\use_new_image_size' );
function use_new_image_size() {
    if ( function_exists( 'add_image_size' ) ) {
        add_image_size( 'banner-image', 9999, 493, true );
        add_image_size( 'square-255', 255, 240, false );
        // add_image_size( 'image-306', 306, 426, true );        
        // add_image_size( 'profile-pic', 281, 281, true );
        // add_image_size( 'testimonial-pic', 281, 364, true );
        // add_image_size( 'blog-thumb-small', 486, 233, true );
        // add_image_size( 'round-profile', 350, 350, true );
        // add_image_size( 'image-stack', 377, 273, true );
    }
}

add_filter('image_size_names_choose', __NAMESPACE__ . '\create_custom_image_size');
function create_custom_image_size($sizes){
    $custom_sizes = array(
    'banner-image' => 'Banner Full',
    'square-255' => '255 Image',
    // 'image-306' => '306 Image',
    // 'profile-pic' => 'Profile Pic',
    // 'testimonial-pic' => 'Testimonial Pic',
    // 'blog-thumb-small' => 'Sm Blog Thumb',
    // 'round-profile' => 'Round Profile',
    // 'image-stack' => 'Image Stack'
);
    return array_merge( $sizes, $custom_sizes );
}