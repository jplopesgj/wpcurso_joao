<?php 

require_once get_template_directory() . '/inc/class-wp-bootstrap-navwalker.php';

// Loading scripts and css styles
function load_scripts() {

    // JS FILES 
    wp_enqueue_script('bootstrap_js', 'https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.min.js', array('jquery'), '5.0.0', true);

     
   // CS FILES
    
    wp_enqueue_style('bootstrap_css', 'https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css', array(), '5.0.0.', 'all' );

    wp_enqueue_style('template', get_template_directory_uri() . '/css/template.css', array(), '1.0', 'all' );

    }
    
    add_action('wp_enqueue_scripts','load_scripts' ); 

    //Register menus 
    register_nav_menus(
        array(
            'my_main_menu' => 'Main Menu',
            'footer_menu' => 'Footer Menu'
        )
    );