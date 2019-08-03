<?php

namespace Langone_Gutenberg_Development;

add_action( 'after_setup_theme', __NAMESPACE__ . '\joints_theme_support' );

// Adding WP Functions & Theme Support
function joints_theme_support() {

	// Add WP Thumbnail Support
	add_theme_support( 'post-thumbnails' );
	
	// Default thumbnail size
	set_post_thumbnail_size(125, 125, true);

	// Add RSS Support
	add_theme_support( 'automatic-feed-links' );
	
	// Add Support for WP Controlled Title Tag
	add_theme_support( 'title-tag' );
	
	// Add HTML5 Support
	add_theme_support( 'html5', 
	         array( 
	         	'comment-list', 
	         	'comment-form', 
	         	'search-form', 
	         ) 
	);
	
	add_theme_support( 'custom-logo', array(
		'height'      => 100,
		'width'       => 400,
		'flex-height' => true,
		'flex-width'  => true,
		'header-text' => array( 'site-title', 'site-description' ),
	) );
	
	// Adding post format support
	 add_theme_support( 'post-formats',
		array(
			'aside',             // title less blurb
			'gallery',           // gallery of images
			'link',              // quick link to other site
			'image',             // an image
			'quote',             // a quick quote
			'status',            // a Facebook like status update
			'video',             // video
			'audio',             // audio
			'chat'               // chat transcript
		)
	);

		// Add support for full and wide align images.
		add_theme_support( 'align-wide' );
		add_theme_support( 'wp-block-styles' );
	// Set the maximum allowed width for any content in the theme, like oEmbeds and images added to posts.
	$GLOBALS['content_width'] = apply_filters( 'joints_theme_support', 1224 );

    add_theme_support( 'editor-color-palette', array(
        array(
            'name' => __( 'ODM Red', 'jointswp' ),
            'slug' => 'odm-red',
            'color' => '#bf1e2e',
		),
        array(
            'name' => __( 'ODM Blue', 'jointswp' ),
            'slug' => 'odm-blue',
            'color' => '#0071CE',
		),		
        array(
            'name' => __( 'ODM Dark Blue', 'jointswp' ),
            'slug' => 'odm-dark-blue',
            'color' => '#082031',
		),		
		array(
            'name' => __( 'ODM Black', 'jointswp' ),
            'slug' => 'odm-black',
            'color' => '#000',
        ),
        array(
            'name' => __( 'ODM OffBlack', 'jointswp' ),
            'slug' => 'odmoff-black',
            'color' => '#383535',
		),
        array(
            'name' => __( 'Light gray', 'jointswp' ),
            'slug' => 'very-light-gray',
            'color' => '#e6e6e6',
        ),
        array(
            'name' => __( 'Dark gray', 'jointswp' ),
            'slug' => 'very-dark-gray',
            'color' => '#8a8a8a',
        ),
        array(
            'name' => __( 'ODM White', 'jointswp' ),
            'slug' => 'odm-white',
            'color' => '#ffffff',
        ),
        array(
            'name' => __( 'ODM Off White', 'jointswp' ),
            'slug' => 'odm-off-white',
            'color' => '#f4f4f2',
        ),
    ) );







} /* end theme support */
