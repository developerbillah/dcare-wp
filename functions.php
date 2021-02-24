<?php

get_template_part('/lib/dcare-options');
get_template_part('/lib/theme-content');

function dcare_setup_theme(){
    add_theme_support('title-tag');
    add_theme_support('post-thumbnails', array('post','sliders','about', 'teams', 'testimonials','features'));
    load_theme_textdomain('agency', get_template_directory_uri().'/languages');
	

    register_nav_menus(array(
        'main-menu' => __('Primary Menu', 'dcare')
    ));
}
add_action('after_setup_theme', 'dcare_setup_theme');

function register_navwalker(){
	require_once get_template_directory() . '/lib/class-wp-bootstrap-navwalker.php';
}
add_action( 'after_setup_theme', 'register_navwalker' );


function dcare_css_js_enqueue(){

    // CSS Load
    wp_enqueue_style('google-font', 'https://fonts.googleapis.com/css?family=Work+Sans:100,200,300,400,500,600,700,800,900');
    wp_enqueue_style('open-iconic-bootstrap', get_template_directory_uri().'/css/open-iconic-bootstrap.min.css', array(), '1.0', 'all' );
	wp_enqueue_style( 'fa5', 'https://use.fontawesome.com/releases/v5.13.0/css/all.css', array(), '5.13.0', 'all' );
    wp_enqueue_style( 'fa5-v4-shims', 'https://use.fontawesome.com/releases/v5.13.0/css/v4-shims.css', array(), '5.13.0', 'all' );
    wp_enqueue_style('animate', get_template_directory_uri().'/css/animate.css', array(), '1.0', 'all' );
    wp_enqueue_style('owl.carousel', get_template_directory_uri().'/css/owl.carousel.min.css', array(), '1.0', 'all' );
    wp_enqueue_style('owl.theme.default', get_template_directory_uri().'/css/owl.theme.default.min.css', array(), '1.0', 'all' );
    wp_enqueue_style('magnific-popup', get_template_directory_uri().'/css/magnific-popup.css', array(), '1.0', 'all' );
    wp_enqueue_style('aos', get_template_directory_uri().'/css/aos.css', array(), '1.0', 'all' );
    wp_enqueue_style('ionicons', get_template_directory_uri().'/css/ionicons.min.css', array(), '1.0', 'all' );
    wp_enqueue_style('bootstrap-datepicker', get_template_directory_uri().'/css/bootstrap-datepicker.css', array(), '1.0', 'all' );
    wp_enqueue_style('jquery.timepicker', get_template_directory_uri().'/css/jquery.timepicker.css', array(), '1.0', 'all' );
    wp_enqueue_style('flaticon', get_template_directory_uri().'/css/flaticon.css', array(), '1.0', 'all' );
    wp_enqueue_style('icomoon', get_template_directory_uri().'/css/icomoon.css', array(), '1.0', 'all' );
    wp_enqueue_style('main', get_template_directory_uri().'/css/main.css', array(), '1.0', 'all' );
    
    wp_enqueue_style('style-css', get_stylesheet_uri());

    // JS Load
    wp_enqueue_script('jquery-migrate', get_template_directory_uri().'/js/jquery-migrate-3.0.1.min.js', array('jquery'), '1.0', true);
    wp_enqueue_script('popper-js', get_template_directory_uri().'/js/popper.min.js', array('jquery'), '1.0', true);
    wp_enqueue_script('bootstrap', get_template_directory_uri().'/js/bootstrap.min.js', array('jquery'), '1.0', true);
    wp_enqueue_script('jquery.easing', get_template_directory_uri().'/js/jquery.easing.1.3.js', array('jquery'), '1.0', true);
    wp_enqueue_script('jquery.waypoints', get_template_directory_uri().'/js/jquery.waypoints.min.js', array('jquery'), '1.0', true);
    wp_enqueue_script('jquery.stellar', get_template_directory_uri().'/js/jquery.stellar.min.js', array('jquery'), '1.0', true);
    wp_enqueue_script('owl.carousel', get_template_directory_uri().'/js/owl.carousel.min.js', array('jquery'), '1.0', true);
    wp_enqueue_script('magnific-popup', get_template_directory_uri().'/js/jquery.magnific-popup.min.js', array('jquery'), '1.0', true);
    wp_enqueue_script('aos', get_template_directory_uri().'/js/aos.js', array('jquery'), '1.0', true);
    wp_enqueue_script('animateNumber', get_template_directory_uri().'/js/jquery.animateNumber.min.js', array('jquery'), '1.0', true);
    wp_enqueue_script('datepicker', get_template_directory_uri().'/js/bootstrap-datepicker.js', array('jquery'), '1.0', true);
    wp_enqueue_script('timepicker', get_template_directory_uri().'/js/jquery.timepicker.min.js', array('jquery'), '1.0', true);
    wp_enqueue_script('scrollax', get_template_directory_uri().'/js/scrollax.min.js', array('jquery'), '1.0', true);
    wp_enqueue_script('map-link', 'https://maps.googleapis.com/maps/api/js?key=AIzaSyBVWaKrjvy3MaE7SQ74_uJiULgl1JY0H2s&sensor=false');
    wp_enqueue_script('google-map', get_template_directory_uri().'/js/google-map.js', array('jquery'), '1.0', true);
	
    wp_enqueue_script('main-js', get_template_directory_uri().'/js/main.js', array('jquery'), '1.0', true);
}
add_action('wp_enqueue_scripts','dcare_css_js_enqueue');



function dcare_custom_posts(){

    // Slider Custom Post
    register_post_type('sliders', array(
        'labels' => array(
            'name' => __('Slides', 'dcare'),
            'singular_name' => __('Slider', 'dcare')
        ),
        'public' => true,
        'supports' => array('title', 'editor', 'thumbnail', 'custom-fields')
    ));
	
	// Service Custom Post
    register_post_type('services', array(
        'labels' => array(
            'name' => __('Services', 'dcare'),
            'singular_name' => __('Service', 'dcare')
        ),
        'public' => true,
        'supports' => array('title','editor','custom-fields', 'page-attributes')
    ));
	
	// About Custom Post
    register_post_type('about', array(
        'labels' => array(
            'name' => __('About Dr Cares', 'dcare'),
            'singular_name' => __('About Dr Care', 'dcare')
        ),
        'public' => true,
        'supports' => array('title','thumbnail','custom-fields')
    ));
	


    // Team Custom Post
    register_post_type('Teams', array(
        'labels' => array(
            'name' => __('Teams', 'dcare'),
            'singular_name' => __('Teams', 'dcare')
        ),
        'public' => true,
        'supports' => array('title', 'thumbnail','custom-fields')
    ));

    // Team Custom Post
    register_post_type('testimonials', array(
        'labels' => array(
            'name' => __('Testimonials', 'dcare'),
            'singular_name' => __('Testimonial', 'dcare')
        ),
        'public' => true,
        'supports' => array('title', 'thumbnail','custom-fields')
    ));	
	
	// Package Custom Post
    register_post_type('package', array(
        'labels' => array(
            'name' => __('Packages', 'dcare'),
            'singular_name' => __('Package', 'dcare')
        ),
        'public' => true,
        'supports' => array('title', 'thumbnail','custom-fields')
    ));	


	// Depart Custom Post
    register_post_type('features', array(
        'labels' => array(
            'name' => __('Departments', 'dcare'),
            'singular_name' => __('Department', 'dcare')
        ),
        'public' => true,
        'supports' => array('title','editor', 'thumbnail','custom-fields')
    ));	
	
	// Featured Taxonomy
    register_taxonomy('featured-cat', 'features',array(
        'labels' => array(
            'name' => __('Department Category', 'dcare'),
            'singular_name' => __('Department', 'dcare')
        ),
        'hierarchical' => true,
        'show_admin_column' => true
    ));



	
}
add_action('init', 'dcare_custom_posts');

// dcare Custom Widgets

function dcare_widgets(){


    // Blog Sidebar
    register_sidebar(array(
        'name' => __('Blog Single Sidebar 1','dcare'),
        'id' => 'blog_single_sidebar',
        'description' => __('Blog Single for Showing Widget', 'dcare'),
        'before_widget' => '<div class="sidebar-box ftco-animate">',
        'after_widget' => '</div>',
        'before_title' => '<h3>',
        'after_title' => '</h3>'
    ));
	
    // Footer Sidebar 1
    register_sidebar(array(
        'name' => __('Footer Sidebar 1','dcare'),
        'id' => 'footer_sidebar1',
        'description' => __('Footer Widget 1 for Showing Widget', 'dcare'),
        'before_widget' => '<div class="ftco-footer-widget mb-5">',
        'after_widget' => '</div>',
        'before_title' => '<h2 class="ftco-heading-2">',
        'after_title' => '</h2>'
    ));
	
    // Footer Sidebar 2
    register_sidebar(array(
        'name' => __('Footer Sidebar 2','dcare'),
        'id' => 'footer_sidebar2',
        'description' => __('Footer Widget 2 for Showing Widget', 'dcare'),
        'before_widget' => '<div class="ftco-footer-widget mb-5">',
        'after_widget' => '</div>',
        'before_title' => '<h2 class="ftco-heading-2">',
        'after_title' => '</h2>'
    ));
	
    // Footer Sidebar 3
    register_sidebar(array(
        'name' => __('Footer Sidebar 3','dcare'),
        'id' => 'footer_sidebar3',
        'description' => __('Footer Widget 3 for Showing Widget', 'dcare'),
        'before_widget' => '<div class="ftco-footer-widget mb-5">',
        'after_widget' => '</div>',
        'before_title' => '<h2 class="ftco-heading-2">',
        'after_title' => '</h2>'
    ));
	
    // Footer Sidebar 4
    register_sidebar(array(
        'name' => __('Footer Sidebar 4','dcare'),
        'id' => 'footer_sidebar4',
        'description' => __('Footer Widget 4 for Showing Widget', 'dcare'),
        'before_widget' => '<div class="ftco-footer-widget mb-5">',
        'after_widget' => '</div>',
        'before_title' => '<h2 class="ftco-heading-2">',
        'after_title' => '</h2>'
    ));


}
add_action('widgets_init', 'dcare_widgets');

require_once get_template_directory().'/lib/dcare-activation.php';

















