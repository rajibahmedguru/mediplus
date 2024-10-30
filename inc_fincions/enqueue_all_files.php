<?php 

function mediplus_all_css_js_files(){

    wp_enqueue_style('main-stylesheet',get_stylesheet_uri());
    wp_enqueue_style('bootstrap', get_template_directory_uri().'../assets/css/bootstrap.min.css', array(), '5.0.0', 'all');
    wp_enqueue_style('animate-css', get_template_directory_uri().'../assets/lib/animate/animate.min.css', array(), '3.5.2', 'all');
    wp_enqueue_style('owlcarousel-css', get_template_directory_uri().'../assets/lib/owlcarousel/assets/owl.carousel.min.css', array(), '2.2.1', 'all');
    wp_enqueue_style('tempusdominus-css', get_template_directory_uri().'../assets/lib/tempusdominus/css/tempusdominus-bootstrap-4.min.css', array(), '5.1.2', 'all');

     // Icon Font Stylesheet

    wp_enqueue_style('font-awesome-css', get_template_directory_uri().'//cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css', array(), '5.10.0', 'all');
    wp_enqueue_style('bootstrap-fonts-css', get_template_directory_uri().'//cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css', array(), '1.4.1', 'all');
    wp_enqueue_style('fonts-css', get_template_directory_uri().'//fonts.googleapis.com/css2?family=Open+Sans:wght@400;500&family=Roboto:wght@500;700;900&display=swap', 'all');

    wp_enqueue_style('tempusdominus-css', get_template_directory_uri().'../assets/css/style.css', array(), '1.0.0', 'all');

    
    // Add All JS files
    
    wp_enqueue_script('jquery');
    wp_enqueue_script('bootstrap-jquery', get_template_directory_uri().'//cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js');
    wp_enqueue_script('wow-jquery', get_template_directory_uri().'/assets/lib/wow/wow.min.js',array(),'1.3.0', true);
    wp_enqueue_script('easing-jquery', get_template_directory_uri().'/assets/lib/easing/easing.min.js',array(),'1.4.1', true);
    wp_enqueue_script('waypoints-jquery', get_template_directory_uri().'/assets/lib/waypoints/waypoints.min.js',array(),'1.4.1', true);
    wp_enqueue_script('counterup-jquery', get_template_directory_uri().'/assets/lib/counterup/counterup.min.js',array(),'1.4.1', true);
    wp_enqueue_script('owlcarousel-jquery', get_template_directory_uri().'/assets/lib/owlcarousel/owl.carousel.min.js',array(),'1.4.1', true);
    wp_enqueue_script('tempusdominus-jquery', get_template_directory_uri().'/assets/lib/tempusdominus/js/moment.min.js',array(),'1.4.1', true);
    wp_enqueue_script('tempusdominus-timezone-jquery', get_template_directory_uri().'/assets/lib/tempusdominus/js/moment-timezone.min.js',array(),'1.4.1', true);
    wp_enqueue_script('tempusdominus-bootstrap-jquery', get_template_directory_uri().'/assets/lib/tempusdominus/js/tempusdominus-bootstrap-4.min.js',array(),'1.4.1', true);
    wp_enqueue_script('tempusdominus-bootstrap-jquery', get_template_directory_uri().'/assets/js/main.js',array(),'1.4.1', true);


}
add_action('wp_enqueue_scripts', 'mediplus_all_css_js_files');