<?php
/**
 * Evidence Actions Functions
 */

/**
 * Load the parent style.css file
 */
function child_enqueue_parent_style() { 
	// Dynamically get version number of the parent stylesheet (lets browsers re-cache your stylesheet when you update your theme)
	$theme   = wp_get_theme( 'OceanWP' );
	$version = $theme->get( 'Version' );
	// Load the stylesheet
	wp_enqueue_style( 'child-style', get_stylesheet_directory_uri() . '/style.css', array( 'oceanwp-style' ), $version );

}
add_action( 'wp_enqueue_scripts', 'child_enqueue_parent_style' );


///////////////////////////////////////////////////////////////////////////////////////////


function evidence_enqueue_scripts() {
    wp_enqueue_script( 'evidence-scripts', get_stylesheet_directory_uri() . '/js/scripts.js', array( 'jquery' ), true );
	
	if($_SERVER['SERVER_NAME'] == 'evidencetmp.06labs.com'){
		wp_enqueue_style( 'typekit-prensa', 'https://use.typekit.net/hto7api.css' );
	}elseif($_SERVER['SERVER_NAME'] == 'staging1.evidenceaction.org'){
		wp_enqueue_style( 'typekit-prensa', 'https://use.typekit.net/enc5eoa.css' );		
	}elseif($_SERVER['SERVER_NAME'] == 'www.evidenceaction.org' || $_SERVER['SERVER_NAME'] == 'evidenceaction.org'){
		wp_enqueue_style( 'typekit-prensa', 'https://use.typekit.net/vvm2xfy.css' );		
	}

}
add_action( 'wp_enqueue_scripts', 'evidence_enqueue_scripts' );





