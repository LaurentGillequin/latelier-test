<?php
function my_enqueue() {
    /* CSS */
    wp_enqueue_style ( 'bootstrap', 'https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css');
    wp_enqueue_style ( 'autocomplete', 'https://cdn.jsdelivr.net/npm/@tarekraafat/autocomplete.js@10.2.7/dist/css/autoComplete.min.css');
    wp_enqueue_style ( 'slick', 'https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css');
    wp_enqueue_style ( 'slicktheme', get_template_directory_uri() . '/assets/css/slick-theme.css');
    wp_enqueue_style ( 'customcss', get_template_directory_uri() . '/assets/css/styles.css');

    /* JS */
    wp_enqueue_script( 'new-jquery','https://code.jquery.com/jquery-3.6.3.min.js', array( 'jquery' ),'',true );
    wp_enqueue_script( 'popperjs','https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js', array( 'jquery' ),'',true );
    wp_enqueue_script( 'bootstrapjs','https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js', array( 'jquery' ),'',true );
    wp_enqueue_script( 'autocompletejs','https://cdn.jsdelivr.net/npm/@tarekraafat/autocomplete.js@10.2.7/dist/autoComplete.min.js', array( 'jquery' ),'',true );
    wp_enqueue_script( 'slickjs','https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js', array( 'jquery' ),'',true );
    wp_enqueue_script( 'customjs',get_template_directory_uri() . '/assets/js/scripts.js', array( 'jquery' ),'',true );
}
add_action( 'wp_enqueue_scripts', 'my_enqueue' );

add_action( 'after_setup_theme', 'bedrock_setup' );
function bedrock_setup() {
    register_nav_menu( 'primary', __( 'Primary navigation', 'bedrock' ) );
    add_theme_support( 'title-tag' );
    add_theme_support( 'post-thumbnails' );
}