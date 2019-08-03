<?php

require_once('inc/pagination.inc.php');
require_once('inc/template-tags.inc.php');
/**
 * Include CSS files
 */

function theme_enqueue_scripts() {
        wp_enqueue_style( 'Font_Awesome', 'https://use.fontawesome.com/releases/v5.6.1/css/all.css' );
        wp_enqueue_style( 'Bootstrap_css', get_template_directory_uri() . '/css/bootstrap.min.css' );
        wp_enqueue_style( 'MDB', get_template_directory_uri() . '/css/mdb.min.css' );
        wp_enqueue_style( 'Style', get_template_directory_uri() . '/style.css' );
        wp_enqueue_script( 'jQuery', get_template_directory_uri() . '/js/jquery-3.4.1.min.js', array(), '3.4.1', true );
        wp_enqueue_script( 'Tether', get_template_directory_uri() . '/js/popper.min.js', array(), '1.0.0', true );
        wp_enqueue_script( 'Bootstrap', get_template_directory_uri() . '/js/bootstrap.min.js', array(), '1.0.0', true );
        wp_enqueue_script( 'MDB', get_template_directory_uri() . '/js/mdb.min.js', array(), '1.0.0', true );

        }
add_action( 'wp_enqueue_scripts', 'theme_enqueue_scripts' );

/**
 * Setup Theme
 */

function mdbtheme_setup() {
        // Add featured image support
        add_theme_support('post-thumbnails');
        add_theme_support('title-tag');
        add_theme_support('html5',
                array('comment-list', 'comment-form', 'search-form')
        );
}    
add_action('after_setup_theme', 'mdbtheme_setup');    
add_action( 'wp_enqueue_scripts', 'theme_enqueue_scripts' );

//Portfolio Post Type
function mdb_projects(){
        register_post_type('projects',
                array(
                        'rewrite' => array('slug' => 'projects'),
                        'labels' => array(
                                'name' => 'Projects',
                                'singular_name' => 'Project',
                                'menu_name' => 'Projects',
                                'all_items' => 'All Projects',
                                'add_new_item' => 'Add New Project',
                                'view_item' => 'View Project',
                                'edit_item' => 'Edit Project',
                                'search_item' => 'Search Project',
                                'not_found' => 'Not Found',
                                'not_found_in_trash' => 'Not found in trash'
                        ),
                        'description' => 'Add portfolio/projects you have worked on!',
                        'menu-icon' => 'dashicons-portfolio',
                        'show_ui' => true,
                        'sjow_in_menu' => true,
                        'can_export' => true,
                        'show_in_menu' => true,
                        'show_in_nav_menus' => true,
                        'exclude_from_search' => false,
                        'public' => true,
                        'has-archive' => true,
                        'supports' => array(
                                'title','editor', 'excerpt', 'author', 'thumbnail', 'comments', 'revisions', 'custom-fields'
                        ),
                        'taxonomies' => array('category','tag')
                        
                )
        );
}
add_action('init', 'mdb_projects', 0);

// Widgets

function mdb_widgets_init() {

        register_sidebar( array(
          'name'          => 'Sidebar',
          'id'            => 'sidebar',
          'before_widget' => '',
          'after_widget'  => '',
          'before_title'  => '',
          'after_title'   => '',
        ) );
      
      }
      add_action( 'widgets_init', 'mdb_widgets_init' );

// Navigation Menu

function register_my_menu() {
        register_nav_menu('primary-menu',__( 'Primary Menu' ));
      }
      add_action( 'init', 'register_my_menu' );
      
      function register_my_menus() {
        register_nav_menus(
          array(
            'primary-menu' => __( 'Primary Menu' ),
            'footer-menu' => __( 'Footer Menu' )
          )
        );
      }
      add_action( 'init', 'register_my_menus' );

// Filters

function search_filter($query){
        if($query -> is_search()){
                $query->set('post-type', array('post', 'projects'));
        }
}

add_filter('pre_get_posts', 'search_filter');

// Footer widgets

function footer_widgets_init() {
 
        // First footer widget area, located in the footer. Empty by default.
        register_sidebar( array(
            'name' => __( 'First Footer Widget Area', 'customfooter' ),
            'id' => 'first-footer-widget-area',
            'description' => __( 'The first footer widget area', 'customfooter' ),
            'before_widget' => '<div id="%1$s" class="widget-container %2$s">',
            'after_widget' => '</div>',
            'before_title' => '<h3 class="widget-title">',
            'after_title' => '</h3>',
        ) );
     
        // Second Footer Widget Area, located in the footer. Empty by default.
        register_sidebar( array(
            'name' => __( 'Second Footer Widget Area', 'customfooter' ),
            'id' => 'second-footer-widget-area',
            'description' => __( 'The second footer widget area', 'customfooter' ),
            'before_widget' => '<div id="%1$s" class="widget-container %2$s">',
            'after_widget' => '</div>',
            'before_title' => '<h3 class="widget-title">',
            'after_title' => '</h3>',
        ) );
     
        // Third Footer Widget Area, located in the footer. Empty by default.
        register_sidebar( array(
            'name' => __( 'Third Footer Widget Area', 'customfooter' ),
            'id' => 'third-footer-widget-area',
            'description' => __( 'The third footer widget area', 'customfooter' ),
            'before_widget' => '<div id="%1$s" class="widget-container %2$s">',
            'after_widget' => '</div>',
            'before_title' => '<h3 class="widget-title">',
            'after_title' => '</h3>',
        ) );
     
        // Fourth Footer Widget Area, located in the footer. Empty by default.
        register_sidebar( array(
            'name' => __( 'Fourth Footer Widget Area', 'customfooter' ),
            'id' => 'fourth-footer-widget-area',
            'description' => __( 'The fourth footer widget area', 'customfooter' ),
            'before_widget' => '<div id="%1$s" class="widget-container %2$s">',
            'after_widget' => '</div>',
            'before_title' => '<h3 class="widget-title">',
            'after_title' => '</h3>',
        ) );
             
    }
     
    // Register sidebars by running tutsplus_widgets_init() on the widgets_init hook.
    add_action( 'widgets_init', 'footer_widgets_init' );

// Custom Background

$defaults = array(
        'default-image'          => '',
        'default-preset'         => 'fit', // 'default', 'fill', 'fit', 'repeat', 'custom'
        'default-position-x'     => 'center',    // 'left', 'center', 'right'
        'default-position-y'     => 'center',     // 'top', 'center', 'bottom'
        'default-size'           => 'cover',    // 'auto', 'contain', 'cover'
        'default-repeat'         => 'no-repeat',  // 'repeat-x', 'repeat-y', 'repeat', 'no-repeat'
        'default-attachment'     => 'scroll',  // 'scroll', 'fixed'
        'default-color'          => '',
        'wp-head-callback'       => '_custom_background_cb',
        'admin-head-callback'    => '',
        'admin-preview-callback' => '',
);
add_theme_support( 'custom-background', $defaults );

// Custom Headers

$args = array(
        'flex-width'    => true,
        'width'         => 960,        
        'flex-height'   => true,
    	'height'        => 360,
    	'default-image' => get_template_directory_uri() . '/img/header.png',
    	'uploads'       => true,
);
add_theme_support( 'custom-header', $args );

//Custom Logo

add_theme_support( 'custom-logo', array(
        'height'      => 100,
        'width'       => 400,
        'flex-height' => true,
        'flex-width'  => true,
        'header-text' => array( 'site-title', 'site-description' ),
        'uploads'     => true
    ) );

function customtheme_add_woocommerce_support()
{
add_theme_support( 'woocommerce' );
}
add_action( 'after_setup_theme', 'customtheme_add_woocommerce_support' );

?>

