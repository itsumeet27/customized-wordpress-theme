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
                                'add_new_item' => 'Add New Project',
                                'edit_item' => 'Edit Project',                                
                        ),
                        'menu-icon' => 'dashicons-portfolio',
                        'public' => true,
                        'has-archive' => true,
                        'supports' => array(
                                'title','thumbnail','editor','excerpt','comments'
                        )
                )
        );
}
add_action('init', 'mdb_projects');

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
?>