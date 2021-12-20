<?php

function university_files(){

    wp_enqueue_script('main-javascript', get_theme_file_uri('/build/index.js'), array('jquery'), '1.0', true);   // 

    wp_enqueue_style('custom_google_font', '//fonts.googleapis.com/css?family=Roboto+Condensed:300,300i,400,400i,700,700i|Roboto:100,300,400,400i,700,700i');
    // load custom font from google

    wp_enqueue_style('font-awesome', '//maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css');
    // load font awesome icons

    wp_enqueue_style('university_main_styles', get_theme_file_uri('/build/style-index.css'));  
     // load css file from build folder called style-index.css

    wp_enqueue_style('university_extra_styles', get_theme_file_uri('/build/index.css'));       
     // first argument (university_extra_styles) is a the variable name you give it. 
}

add_action('wp_enqueue_scripts', 'university_files'); 

?>