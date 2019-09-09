<?php 

function hospitals_info(){
    wp_enqueue_script('jsfiles', get_theme_file_uri( '/js/scripts-bundled.js'),NULL,'1.0',true);
    wp_enqueue_style('google-font','//fonts.googleapis.com/css?family=Roboto+Condensed:300,300i,400,400i,700,700i|Roboto:100,300,400,400i,700,700i"');
    wp_enqueue_style('font-awesome','//maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css');
    wp_enqueue_style('hosp_styles',get_stylesheet_uri());
    
    // wp_enqueue_style('slick','//code.jquery.com/jquery-1.11.0.min.js');
    // wp_enqueue_style('slick','//code.jquery.com/jquery-migrate-1.2.1.min.js');
    // wp_enqueue_style('slickFiles', get_theme_file_uri( '/slick/slick.min.js'),NULL,'1.0',true);
    // wp_enqueue_script('slickcss', get_theme_file_uri( '/slick/slick.css'),NULL,'1.0',true);
    // wp_enqueue_script('slickcsst', get_theme_file_uri( '/slick/slick-theme.css'),NULL,'1.0',true);

}

function hospitals_features(){
    add_theme_support('title-tag');
}


add_action( 'wp_enqueue_scripts' ,'hospitals_info');
add_action( 'after_setup_theme','hospitals_features');