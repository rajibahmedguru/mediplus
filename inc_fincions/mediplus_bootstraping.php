<?php 

if(!function_exists('mediplus_bootstraping')){
    function mediplus_bootstraping(){
        add_theme_support( 'text-domain');
        add_theme_support( 'title-tag');
        add_theme_support( 'thumbnails');
        add_theme_support( 'post-formats');

    }
}
add_action('after_setup_theme','mediplus_bootstraping');