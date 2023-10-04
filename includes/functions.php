<?php 
//Enqueue syltes and scripts
function my_theme_enqueue_scripts() {
    //Enqueue stylesheet
    wp_enqueue_style("my-theme-style", get_stylesheet_uri());

    //Enqueue script
    wp_enqueue_script('my-theme-script', get_template_directory_uri() . '/js/script.js', array(), '1.0', true);
}

add_action('wp-enqueue_scripts', 'my_theme_enqueue_scripts');

//Register navigation menus

function my_theme_register_menus() {
    register_nav_menus(array(
        'primary-menu' => 'Primary Menu',
        'secondary-menu' => 'Secondary Menu'
    ));
}

add_action('after_setup_theme', 'my_theme_register_menus');

//custom hook

function my_custom_hook() {
    //your custom code goes here
    //Example: echo "Hello from my custom hook!";
}

add_action('wp_footer', 'my_custom_hook');

//Custom post type

function my_custom_post_type() {
    $args = array(
        'labels' => array(
            'name' => 'Custom Post Type',
            'singular_name' => 'Custom Post',
        ),
        'public' => true,
        'has_archive' => true,
        'supports' => array('title', 'editor', 'thumbnail'),
    );
    register_post_type('custom_post', $args);
}

add_action('init', 'my_custom_post_type');

function bestpkuginever_capitalize_title( $title ) {
    return ucwords( $title );
}

add_filter( 'the_title', 'ucwords' );

?>

